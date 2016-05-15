<?php 

	class Check{

    	public $mail;
    	public $password;
    	public $category;


    	public function __construct($mail, $password, $category) {
      $this->mail = $mail;
      $this->password = $password;
      $this->category = $category;
    }

	public function login($mail) {
		$list=[];
	    $db = Db::getInstance();

	      	$req = pg_query_params($db,'SELECT school_password FROM school WHERE  school_mail= $1',array($mail));
	      	foreach(pg_fetch_all($req) as $result){
	      		$category='school';
	      		$list[] = new Check($mail, $result['school_password'],$category);
	      	}
	        $req = pg_query_params($db,'SELECT student_password FROM student WHERE  student_mail= $1',array($mail));
	      	foreach(pg_fetch_all($req) as $result){
	      		$category='student';
	      		$list[] = new Check($mail, $result['student_password'], $category);
	      	}
	      $req = pg_query_params($db,'SELECT teacher_password FROM teacher WHERE  student_mail= $1',array($mail));
	      foreach(pg_fetch_all($req) as $result){
	      		$category='teacher';
	      		$list[] = new Check($mail, $result['teacher_password'], $category);
	      	}

	     return $list;
	    }

	public function save($key, $password){
		$db = Db::getInstance();
		$req = pg_query_params($db,'INSERT INTO login (logkey, crypted_password) VALUES ($1,$2)',array($key, $password));
	}

	public function clean($key){
		$db = Db::getInstance();
		$req = pg_query_params($db,'DELETE FROM login WHERE logkey = $1',array($key));
	}

	public function verify($key){
		$db = Db::getInstance();
		$req = pg_query_params($db,'SELECT crypted_password FROM login WHERE logkey = $1',array($key));
		$result = pg_fetch_result($req,0,0);
		return $result;
	}


	public function get_password($mail, $category){
		$db = Db::getInstance();
		if ($category='school') $req = pg_query_params($db,'SELECT school_password FROM school WHERE  school_mail= $1',array($mail));
	    if ($category='student') $req = pg_query_params($db,'SELECT student_password FROM student WHERE  student_mail= $1',array($mail));
	    if ($category='teacher') $req = pg_query_params($db,'SELECT teacher_password FROM teacher WHERE  school_teacher= $1',array($mail));
	    $result = pg_fetch_result($req);
	    return $result;
	}
}
?>