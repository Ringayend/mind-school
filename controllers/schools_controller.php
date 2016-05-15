<?php
  class SchoolsController {

    public function saved() {
      require_once('views/school/saved.php');
    }

    public function create(){
      require_once('views/school/addSchool.php');
      $school= School::create($_POST['name'], $_POST['password'], $_POST['street'], $_POST['town'], $_POST['postcode'] , $_POST['continent'] , $_POST['phone'] , $_POST['mail'] , $_POST['director']);

    }

    public function show() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $schools = School::find($_GET['id']);
      require_once('views/school/show.php');
    }

    public function MySchool() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_COOKIE['login']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $schools = School::findSchool($_COOKIE['login']);
      require_once('views/school/show.php');
    }

    public function MyProfil() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_COOKIE['login']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $schools = School::findProfil($_COOKIE['login']);
      require_once('views/school/show.php');
    }

    public function edit() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      
      $schools= School::find($_GET['id']);
      require_once('views/school/edit.php');


          if (isset($_POST['mail']) and $_POST['mail']!= "")
              {
                  $schools = School::update_mail($_GET['id'],$_POST['mail']); 
              }
     
          if (isset($_POST['street']) and $_POST['street']!= "")
              {
                  $schools = School::update_street($_GET['id'],$_POST['street']); 
              } 

          if (isset($_POST['town']) and $_POST['town']!= "")
              {
                  $schools = School::update_town($_GET['id'],$_POST['town']); 
              }

          if (isset($_POST['continent']) and $_POST['continent']!= "")
              {
                  $schools = School::update_continent($_GET['id'],$_POST['continent']); 
              }

          if (isset($_POST['postcode']) and $_POST['postcode']!= "")
              {
                  $schools = School::update_postcode($_GET['id'],$_POST['postcode']); 
              }

          if (isset($_POST['phone_num']) and $_POST['phone_num']!= "DEFAULT")
              {
                  $schools = School::update_phone_num($_GET['id'],$_POST['phone_num']); 
              }

          if (isset($_POST['director']) and $_POST['director']!= "")
              {
                  $schools = School::update_director($_GET['id'],$_POST['director']); 
              } 

            print_r($_POST);     

      if (isset($_POST['password'])){

        if (isset($_POST['password']) and $_POST['password']!= "DEFAULT")
              {
                  $schools = School::update_password($_GET['id'],$_POST['password']); 
              } 
      }
     
  }

       public function delete(){
        $school= School ::delete($_GET['id'], $_GET['name']);
        require_once('views/school/index.php');
      }

      public function addTeacher(){
        require_once('views/school/addTeacher.php');
        print_r($_POST);
        $add = School::addTeacher($_POST['t_lastname'], $_POST['t_firstname'], $_POST['s_lastname'], $_POST['s_firstname'], $_POST['grade']);
      }

      public function addActivity(){
        $add = School::addActivity($_GET['id'], $_COOKIE['login']);
        return call('activities', 'index');
      }
      
      public function deleteActivity(){
        require_once('views/school/deleteActivity.php');
        $add = School::deleteActivity($_POST['title'],$_COOKIE['login']);
        
      }
  }
?>