<?php

  function call($controller, $action, $auth) {

    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');



    // create a new instance of the needed controller
    switch($controller) {
      case 'pages':
      require_once('models/check.php');
        $controller = new PagesController();
      break;

      case 'activities':
        // we need the model to query the database later in the controller
        require_once('models/activities.php');
        $controller = new ActivitiesController();
      break;

      case 'students':
        // we need the model to query the database later in the controller
        require_once('models/students.php');
        $controller = new StudentsController();
      break;

      case 'members':
        // we need the model to query the database later in the controller
        require_once('models/members.php');
        $controller = new MembersController();
      break;

      case 'schools':
        require_once('models/school.php');
        $controller = new SchoolsController();
      break;

      case 'teachers':
        // we need the model to query the database later in the controller
        require_once('models/teachers.php');
        $controller = new TeachersController();
      break;

    }



    // call the action
    $controller->{ $action }($auth);
 }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('pages' => ['home', 'error','error404','signup','teacherDashboard','studentboard','presentation','students', 'schoolboard','teacherPresentation','studentPresentation','logout'],
                        'activities' => ['index', 'show','edit', 'saved','create','delete','add'],
                          'students' => ['index','show','edit','delete'],
                          'members' => ['save'],
                          'schools' => ['create','show','edit','addTeacher','addActivity','deleteActivity','MySchool', 'MyProfil'],
                          'teachers' => ['index','show','edit','delete']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action, $auth);
    } else {
      call('pages', 'error404');
    }
  } else {
    call('pages', 'error404');
  }
?>