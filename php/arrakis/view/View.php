<?php
namespace arrakis\view;
abstract class View {
    
    protected $title;
    protected $model;
    protected $error;
    protected $isError;
    protected $controller;
    
    public function __construct($controller) {
        //set the title from the controller
        $this->title= $controller->getTitle();
        //set the mode; from the controller
        $this->model = $controller->getModel();
        
        $this->isError = $controller->isError();
        $this->error = $controller->getError();
        $this->controller = $controller;
    }

    private function header()
    {
    include INCLUDES.'header.php';    
        
    }
    
    abstract public function section($model); //this is called SIGNATURE the function is there but doesn't exists
    
    private function footer()
    {
    include INCLUDES.'footer.php';   
        
    }
    
    private function error()
    {
        include INCLUDES.'error.php';
    }

    public function page()
    {
        $this->header();
        
        if($this->isError) {
            $this->error();
        } else {
        $this->section($this->model);
        }
        
        $this->footer();
        
    }
}

// PRIVATE: the function can be only executed in the object, not even in the exended class
// PROTECTED: the function is available to the whole object, including extended classes (everything that inherits has access to the function)
// PUBLIC: any other object has access to the class
// Always try to make functions PRIVATE, if not possible PROTECTED in not possible PUBLIC
// PRIVATE functions have to be set as PROTECTED to be overridden in the extended class
?>
