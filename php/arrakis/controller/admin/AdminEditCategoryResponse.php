<?php
namespace arrakis\controller\admin;

class AdminEditCategoryResponse extends Admin{
    
    public function __construct() {
       parent::__construct();
       
       
       $r = "\arrakis\controller\admin\AdminEditCategory";
       $id = filter_input(INPUT_POST,$r::FORM_CAT_URL);
       $catname = filter_input(INPUT_POST,$r::FORM_CAT_NAME);
       $catimage = filter_input(INPUT_POST,$r::FORM_CAT_IMAGE);
       
       $this->model = new \arrakis\model\admin\AdminEditCategoryResponse ($id, $catname, $catimage);
       
    
    }
    public function getTitle() {

    }
   
    public function viewAction() {
        $response = ['success'=>'yes', 'message'=>'Category updated successfully'];
        
        if($this->isError())
        {
            $response['success'] = 'no';
            $response['message'] = $this->getError();
        }
    
    echo json_encode($response); //json transorms the PHP array into a javascript array
    
    }
}
?>
