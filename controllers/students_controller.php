<?php
  class StudentsController {
    public function index() {
      // we store all the activities in a variable
       $students = Student::all();
      require_once('views/students/index.php');
    }
    

    public function saved() {
      require_once('views/students/saved.php');
    }

    public function show() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $students = Student::find($_GET['id']);
      require_once('views/students/show.php');
    }
    
    public function edit() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      
      $students= Student::find($_GET['id']);
      require_once('views/students/edit.php');
    
      if (isset($_POST['birthdate'])){
          if (isset($_POST['birthdate']) and $_POST['birthdate']!= "DEFAULT")
              {
                  $students = Student::update_birthdate($_GET['id'],$_POST['birthdate']); 
              }   
          if (isset($_POST['mail']) and $_POST['mail']!= "DEFAULT")
              {
                  $students = Student::update_mail($_GET['id'],$_POST['mail']); 
              } 
          if (isset($_POST['phone']) and $_POST['phone']!= "DEFAULT")
              {
                  $students = Student::update_phone($_GET['id'],$_POST['phone']); 
              }
          if (isset($_POST['result_verl']) and $_POST['result_verl']!= "DEFAULT")
              {
                  $students = Student::update_result_verl($_GET['id'],$_POST['result_verl']); 
              }
          if (isset($_POST['result_lm']) and $_POST['result_lm']!= "DEFAULT")
              {
                  $students = Student::update_result_lm($_GET['id'],$_POST['result_lm']); 
              }
          if (isset($_POST['result_vs']) and $_POST['result_vs']!= "DEFAULT")
              {
                  $students = Student::update_result_vs($_GET['id'],$_POST['result_vs']); 
              }
          if (isset($_POST['result_mr']) and $_POST['result_mr']!= "DEFAULT")
              {
                  $students = Student::update_result_mr($_GET['id'],$_POST['result_mr']); 
              }
          if (isset($_POST['result_bk']) and $_POST['result_bk']!= "DEFAULT")
              {
                  $students = Student::update_result_bk($_GET['id'],$_POST['result_bk']); 
              } 
          if (isset($_POST['result_intra']) and $_POST['result_intra']!= "DEFAULT")
              {
                  $students = Student::update_result_intra($_GET['id'],$_POST['result_intra']); 
              } 
          if (isset($_POST['result_n']) and $_POST['result_n']!= "DEFAULT")
              {
                  $students = Student::update_result_n($_GET['id'],$_POST['result_n']); 
              }
          if (isset($_POST['result_inter']) and $_POST['result_inter']!= "DEFAULT")
              {
                  $students = Student::update_result_inter($_GET['id'],$_POST['result_inter']); 
              }  
          if (isset($_POST['strong_intelligence']) and $_POST['strong_intelligence']!= "DEFAULT")
              {
                  $students = Student::update_strong_intelligence($_GET['id'],$_POST['strong_intelligence']); 
              }
          if (isset($_POST['weak_intelligence']) and $_POST['weak_intelligence']!= "DEFAULT")
              {
                  $students = Student::update_weak_intelligence($_GET['id'],$_POST['weak_intelligence']); 
              }       
      }

      if (isset($_POST['password'])){

        if (isset($_POST['password']) and $_POST['password']!= "DEFAULT")
              {
                  $students = Student::update_password($_GET['id'],$_POST['password']); 
              } 
      }
     
  }

       public function delete(){
        $student= Student::delete($_GET['id'], $_GET['last_name']);
        return call('students', 'index');
      }
  }
?>