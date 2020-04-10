<?php

class PagesController {
   
    public function home() {
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function about() {
      require_once('views/pages/about.php');
    }
     
    public function cookies() {
      require_once('views/pages/cookies.php');
    }
    
    public function privacy() {
      require_once('views/pages/privacy.php');
    }
    
}
