<?php
session_start();

//autoload.php generé avec composer
require_once __DIR__  . '/vendor/autoload.php';

try{
    $controllerBack = new \projet\Controllers\ControllerBack(); //objet controller

    if (isset($_GET['action']) && isset($_SESSION['admin'])){
       
        if($_GET['action'] == 'admin'){
            $controllerBack->homeAdmin();
        }
        else if($_GET['action'] == 'update'){
            
            if(isset($_GET['id'])){
                $controllerBack->updateAdmin();
            }else{
                $controllerBack->homeAdmin();
            }
            
        } else if($_GET['action'] == 'create'){
            $controllerBack->createAdmin();
        }
        else if($_GET['action'] == 'delete'){
            $controllerBack->deleteAdmin();
        }
        else if($_GET['action'] == 'logout'){
            $controllerBack->logoutAdmin();
        }
        else if($_GET['action'] == 'gallery'){
            $controllerBack->galleryBack();
        }
        else if($_GET['action'] == 'createImage'){
            $controllerBack->createGallery();
        }
        else if($_GET['action'] == 'deleteImage'){
            $controllerBack->deleteGallery();
        }

    }
    
    else{
        $controllerBack->loginAdmin();
        
    }

} catch (Exeption $e){
   
}
?>