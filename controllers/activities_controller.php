<?php
  class ActivitiesController {

    public function index() {
      // we store all the activities in a variable
       $activities = Activity::all();
      require_once('views/activities/index.php');
    }

    public function saved() {
      require_once('views/activities/saved.php');
    }

    public function show() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      // we use the given id to get the right post
      $activities = Activity::find($_GET['id']);
      require_once('views/activities/show.php');
    }
    public function create(){
      require_once('views/activities/create.php');
      $activity= Activity::create($_POST['title'], $_POST['description'], $_POST['tools'], $_POST['intelligence']);

    }
    public function edit() {
      // we expect a url of form ?controller activities&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error404');

      
      $activities= Activity::find($_GET['id']);
      require_once('views/activities/edit.php');
      if (isset($_POST['description'])){
          if (isset($_POST['description']) and $_POST['description']!= "DEFAULT")
              {
                  $activities = Activity::update_description($_GET['id'],$_POST['description']); 
              }   
          if (isset($_POST['tools']) and $_POST['tools'] != "DEFAULT" )
              {
                  $activities = Activity::update_tools($_GET['id'],$_POST['tools']);
              }
          if (isset($_POST['intelligence']) and $_POST['intelligence'] != "DEFAULT" )
              {
                  $activities = Activity::update_intelligence($_GET['id'],$_POST['intelligence']);
              }
      }
    }
       public function delete(){
        $activity= Activity::delete($_GET['id'], $_GET['title']);
        return call('activities','index');
      }

    public function add(){
      $activities= Activity::find($_GET['id']);
      require_once ('views/activities/add.php');
      $activity = Activity::add($_GET['id'], $_POST['lastname'], $_POST['firstname']);
  }


  }
?>