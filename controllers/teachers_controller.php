<?php
  class TeachersController {
    public function index() {
      // we store all the activities in a variable
       $teachers = Teacher::all();
      require_once('views/teachers/index.php');
    }
    

    public function saved() {
      require_once('views/steachers/saved.php');
    }

    public function show() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $teachers = Teacher::find($_GET['id']);
      require_once('views/teachers/show.php');
    }

    public function edit() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      
      $teachers= Teacher::find($_GET['id']);
      require_once('views/teachers/edit.php');
    
          if (isset($_POST['birthdate']) and $_POST['birthdate']!= "DEFAULT")
              {
                  $steachers = Teacher::update_birthdate($_GET['id'],$_POST['birthdate']); 
              }   
          if (isset($_POST['mail']) and $_POST['mail']!= "DEFAULT")
              {
                  $steachers = Teacher::update_mail($_GET['id'],$_POST['mail']); 
              } 
          if (isset($_POST['phone']) and $_POST['phone']!= "DEFAULT")
              {
                  $steachers = Teacher::update_phone($_GET['id'],$_POST['phone']); 
              }


      if (isset($_POST['password'])){

        if (isset($_POST['password']) and $_POST['password']!= "DEFAULT")
              {
                  $teachers = Teacher::update_password($_GET['id'],$_POST['password']); 
              } 
      }
     
  }

       public function delete(){
        $steacher= Teacher::delete($_GET['id'], $_GET['last_name']);
        require_once('views/activities/index.php');
      }
      
  }
?>