<?php
namespace arrakis\controller;

abstract class LoggedInController extends Controller{
    
    public function __construct() {
        if(!\arrakis\model\security\Login::isLoggedIn())
        {
            header("Location:".PROJECT_URL."login");
            exit;
        }
    }

}

?>
