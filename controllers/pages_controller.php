<?php
  class PagesController {


    public function home() {
      require_once('views/pages/home.php');
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

    public function login() {
      if (isset($_POST['password']) and isset($_POST['login'])){
    $password =$_POST['password'];

    require_once('models/check.php');
    $result = Check::login($_POST['login']);

    foreach ($result as $check) {

       $mail = $check->mail;
       $passwords = $check->password;
       $category= $check->category;
       $key = sha1(date('G s'));
        $cripted_password = sha1($password);

    
      if($cripted_password == $passwords){

      setcookie('login', $mail, time() + (365*24*3600), "/", null, false, true);
      setcookie('key', $key, time() + 900, "/", null, false, true);
      setcookie('category', $category, time() + 900, "/", null, false, true);
      $save = Check::save($key, $cripted_password);
      $auth ="OK";
      }
  }
  
};
    }

    public function logout() {

      $clean = Check::clean($_COOKIE['key']);
      $auth="NONE"; 
      setcookie('key'," ", time() - 900);
      setcookie('category', " ", time() - 900);
      return call('pages','home');
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