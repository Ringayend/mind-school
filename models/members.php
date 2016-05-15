<?php
  class Member {
   
    public $first_name;
    public $last_name;
    public $mail;


    public function __construct($firstname, $lastname, $mail) {
      $this->first_name = $firstname;
      $this->last_name = $lastname;
      $this->mail = $mail;
    }

  public static function AddMember($firstname, $lastname, $password, $mail, $birthdate, $phone, $continent, $school, $category){
  
    $db = Db::getInstance();
    $table = $category;
    $nresult = pg_prepare($db, "schoolNum","SELECT school_id FROM school WHERE school_name=$1 AND school_continent=$2 ");
    $result = pg_execute($db, "schoolNum", array( $school, $continent));
    $row= pg_fetch_row($result);
    $numschool = $row[0];
    $script_password = md5($password);



    if($category == 'teacher')
    {
    $req = pg_query_params($db,"INSERT INTO $table (t_first_name, t_last_name, teacher_password, teacher_mail, t_school_num, t_birthdate, t_phone_num) VALUES ($1, $2, $3, $4, $5, $6, $7)",array($firstname, $lastname, $script_password , $mail, $numschool, $birthdate, $phone));
    }

    elseif ($category == 'student') 
    {
      $req = pg_query_params($db,"INSERT INTO $table (s_first_name, s_last_name, student_password, student_mail, s_school_num, s_birthdate, s_phone_num, strong_intelligence, weak_intelligence) VALUES ($1, $2, $3, $4, $5, $6, $7, 'VISUAL-SPATIAL','VISUAL-SPATIAL')",array($firstname, $lastname, $script_password , $mail, $numschool, $birthdate, $phone));
    }
}

public static function Exist($firstname, $lastname, $category, $mail){
  $db = Db::getInstance();
  if($category == 'teacher')
    {
      $list = [];
      $req = pg_query_params($db,'SELECT t_first_name, t_last_name, teacher_mail FROM teacher WHERE t_first_name =$1 and t_last_name= $2 and teacher_mail= $3',array($firstname,$lastname,$mail));
      foreach(pg_fetch_all($req) as $element){
        $list[] = new Member($element['t_first_name'],$element['t_last_name'], $element['teacher_mail']);
      }
      return $list;
    }

    elseif ($category == 'student') 
    {
      $list = [];
      $req = pg_query_params($db,'SELECT s_first_name, s_last_name, student_mail FROM student WHERE s_first_name =$1 and s_last_name= $2 and student_mail= $3',array($firstname,$lastname,$mail));
      foreach(pg_fetch_all($req) as $element){
        $list[] = new Member($element['s_first_name'],$element['s_last_name'], $element['student_mail']);
      }
      return $list;
    }
  }
}
