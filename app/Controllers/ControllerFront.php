<?php
namespace projet\Controllers;

class ControllerFront
{

    function home()
    {
        $homeFront = new \projet\models\FrontManager();
        $homeFront->viewFront();
        $title = "Home";
        $description="Présentation sur la mythologie nordique.";

        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/home.php';
        require 'app/views/front/layout/footer.php';

    }
    function contactFront(){

        
        $title = "Contact";
        $description="Contactez-moi !";

        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/contact.php';
        require 'app/views/front/layout/footer.php';
    }
    function godsFront(){

        $godsFront = new \projet\models\FrontManager();
        $godsFront->viewFront();

        $searchFront = new \projet\Controllers\ControllerFront();
        $searchFront->searchFront();

        $title = "Dieux";
        $description="Liste des différents dieux tels que : Odin, Loki, Heimdall, Freya et plus encore !";

        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/gods.php';
        require 'app/views/front/layout/footer.php';
    }
    function godFront(){

        $godFront = new \projet\models\FrontManager();
        $godFront->readFront('$id'); 

        $title = "Dieu";
        $description="Tous les détails de ton dieu préféré.";

        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/god.php';
        require 'app/views/front/layout/footer.php';
    }
    function galleryFront(){

        $galleryFront = new \projet\models\FrontManager();
        $galleryFront->viewGallery();
        $godsFront = new \projet\models\FrontManager();
        $godsFront->viewFront();

        $title = "Galerie";
        $description="Galerie d'images des différents dieux de la mythologie nordique.";

        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/gallery.php';
        require 'app/views/front/layout/footer.php';
    }
    public function searchFront()
    {
        if (isset($_GET['search'])) {

            $name=htmlspecialchars($_GET['search']);
            
            $search = new \projet\models\FrontManager();
            $search->search($name);
        }
    }
    public function mentionsLegales(){

        $title = "Mentions Légales";
        $description="Vous retrouverez ici les mentions légales";
        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/mentionsLegales.php';
        require 'app/views/front/layout/footer.php';
    }
    public function cgu(){

        $title = "Conditions générales d'utilisation";
        $description="Vous retrouverez ice les Conditions générales d'utilisation";
        
        require 'app/views/front/layout/head.php';
        require 'app/views/front/layout/header.php';
        require 'app/views/front/cgu.php';
        require 'app/views/front/layout/footer.php';
    }
}