<?php

namespace projet\Controllers;

class ControllerBack
{
    public function homeAdmin()
    {
        $homeBack = new \projet\models\BackManager();
        $homeBack->viewBack();
        $homeBack->read('$id');   
        $title = "Admin";

        require 'app/views/back/layout/head.php';
        require 'app/views/back/layout/header.php';
        require 'app/views/back/home.php';

    }

    public function loginAdmin(){

        $loginBack = new \projet\models\BackManager();
        $loginBack->login();
        $title = "Login";

        require 'app/views/back/layout/head.php';
        require 'app/views/back/login.php';
    }

    public function logoutAdmin()
    {

        $createBack = new \projet\models\BackManager();
        $createBack->logout(); 
        $title = "Logout";

        require 'app/views/back/logout.php';

    }
    public function updateAdmin()
    {
        $homeBack = new \projet\models\BackManager();
        $homeBack->viewBack();
        $homeBack->read('$id');   
        $title = "Update";

        $updateBack = new \projet\models\BackManager();
        $updateBack->update(); 

        require 'app/views/back/layout/head.php';
        require 'app/views/back/layout/header.php';
        require 'app/views/back/godUpdate.php';

    }
    public function createAdmin()
    {
        $homeBack = new \projet\models\BackManager();
        $homeBack->viewBack(); 
        $title = "Create";

        $createBack = new \projet\models\BackManager();
        $createBack->create(); 

        require 'app/views/back/layout/head.php';
        require 'app/views/back/layout/header.php';
        require 'app/views/back/godCreate.php';

    }
    public function deleteAdmin()
    {

        $createBack = new \projet\models\BackManager();
        $createBack->delete(); 

        require 'app/views/back/godDelete.php';

    }
}