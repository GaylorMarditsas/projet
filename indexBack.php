<?php
session_start();

//autoload.php generé avec composer
require_once __DIR__  . '/vendor/autoload.php';

try{
    $controllerBack = new \projet\Controllers\ControllerBack(); //objet controller

    if (isset($_GET['action'])){
       
        if($_GET['action'] == 'update'){
            
            if(isset($_GET['id'])){
                $controllerBack->updateAdmin();
            }else{
                $controllerBack->homeAdmin();
            }
            
        } else if($_GET['action'] == 'create'){
            $controllerBack->createAdmin();
        }

    } else{
        $controllerBack->loginAdmin();
        
    }

} catch (Exeption $e){
   
}
?>