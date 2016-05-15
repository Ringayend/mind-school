<?php
  class PagesController {

    public function home() {
      require_once('views/pages/home.php');
    }

    public function connect() {
      require_once('views/pages/connect.php');
    }


    public function error() {
      require_once('views/pages/error.php');
    }

    public function error404() {
      require_once('views/pages/error404.php');
    }

    public function signup() {
      require_once('views/pages/signup.php');
    }


  public function login(){
    return call('pages','home');
  }


    public function logout() {
        require_once('views/pages/logout.php');
    }

    public function teacherDashboard($auth) {
      if ($auth == "OK"){
      require_once('views/pages/teacherDashboard.php');
      }
      elseif ($auth == "connect") {
        //$('#modalog').openModal(); 
      }
      else{
        require_once('views/pages/error.php');
      }
    }

    public function schoolboard($auth) {
      if ($auth == "OK"){
      require_once('views/pages/schoolboard.php');
      }
      elseif ($auth == "connect") {
        require_once('views/pages/home.php');
        //$('#modalog').openModal(); 
      }
      else{
        require_once('views/pages/error.php');
      }
    }

    public function studentboard($auth) {
      if ($auth == "OK"){
      require_once('views/pages/studentboard.php');
      }
      elseif ($auth == "connect") {
        //$('#modalog').openModal(); 
      }
      else{
        require_once('views/pages/error.php');
      }
    }

    public function presentation() {
      require_once('views/pages/presentation.php');
    }

    public function teacherPresentation() {
      require_once('views/pages/teacherPresentation.php');
    }

    public function studentPresentation() {
      require_once('views/pages/studentPresentation.php');
    }

    public function activities($auth) {
      if ($auth == "OK"){
      require_once('views/pages/activities.php');
      }
      elseif ($auth == "connect") {
        //$('#modalog').openModal(); 
      }
      else{
        require_once('views/pages/error.php');
      }
    }

    public function students($auth) {
      if ($auth == "OK"){
      require_once('views/pages/students.php');
      }
      elseif ($auth == "connect") {
        //$('#modalog').openModal(); 
      }
      else{
        require_once('views/pages/error.php');
      }
    }

  }

?>