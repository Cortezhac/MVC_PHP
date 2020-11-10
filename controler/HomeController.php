<?php 
class HomeController {
    // Carga el index
    public function Index(){
        require_once('view/pages/plantillas/header.php');
        require_once("view/home.php");
        require_once('view/pages/plantillas/footer.php');
    }
}

?>