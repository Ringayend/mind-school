<?php
  require_once('connection.php');
 
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
	
}



  $request  = $_SERVER['REQUEST_URI'];
  $params     = explode("/", $request);
  $temp = $params[1];
  if (count($params) == 2){ $params[1]= 'pages';  $params['2']= $temp;}



if (isset($_COOKIE['login']) && isset($_COOKIE['key']) && isset($_COOKIE['category'])){
	require_once('models/check.php');
  $result = Check::login($_COOKIE['login']);
  $verify = Check::verify($_COOKIE['key']);
	  foreach ($result as $check) {
	  	$passwords = $check->password;
	}

	if ($passwords == $verify){
	 $auth="OK";
	setcookie('key', $_COOKIE['key'] , time() + 900, "/", null, false, true);
	setcookie('category', $_COOKIE['category'], time() + 900, "/", null, false, true);
	}
}

elseif (isset($_COOKIE['login']) && !isset($_COOKIE['key'])) $auth="connect";

else { $auth="None";}

if (isset($params[1]) && isset($params[2]) && $params[2]!='') {
		    $controller = $params[1];
		    $action     = $params[2];
		  } else {
		    $controller = 'pages';
		    $action     = 'home';
		}

  

  require_once('views/layout.php');


