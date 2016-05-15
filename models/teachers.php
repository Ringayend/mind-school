<?php

  class Teacher {
   
    public $id;
    public $first_name;
    public $last_name;
    public $birthdate;
    public $mail;
    public $phone_num;

    public function __construct($id, $first_name, $last_name, $mail, $birthdate, $phone_num) {
      $this->id = $id;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->birthdate = $birthdate;
      $this->mail = $mail = $mail;
      $this->phone_num = $phone_num;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = pg_query($db,'SELECT teacher_id, t_first_name, t_last_name, teacher_mail, t_birthdate, t_phone_num FROM teacher');
      foreach(pg_fetch_all($req) as $teacher) {
        $list[] = new Teacher($teacher['teacher_id'], $teacher['t_first_name'], $teacher['t_last_name'], $teacher['teacher_mail'], $teacher['t_birthdate'], $teacher['t_phone_num']);
      }

      return $list;

    }


    public static function find($id) {
      $db = Db::getInstance();
      $list = [];
      $req = pg_query_params($db,'SELECT teacher_id, t_first_name, t_last_name, teacher_mail, t_birthdate, t_phone_num FROM teacher WHERE  teacher_id= $1',array($id));
      foreach(pg_fetch_all($req) as $teacher) {
        $list[] = new Teacher($teacher['teacher_id'], $teacher['t_first_name'], $teacher['t_last_name'], $teacher['teacher_mail'], $teacher['t_birthdate'], $teacher['t_phone_num']);
      }

      return $list;

    }


    public static function update_birthdate($id, $birthdate){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE teacher SET t_birthdate = $2 WHERE teacher_id = $1',array($id, $birthdate));
      }

    public static function update_mail($id, $mail){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE teacher SET teacher_mail = $2 WHERE teacher_id = $1',array($id, $mail));
      }
      
    public static function update_phone($id, $phone){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE teacher SET t_phone_num = $2 WHERE teacher_id = $1',array($id, $phone));
      }

    public static function update_password($id, $password){
      $db = Db::getInstance();
      $script_password = sha1($password);
      $req = pg_query_params($db,'UPDATE teacher SET teacher_password = $2 WHERE teacher_id = $1',array($id, $script_password));
      }
      
  } 

?>

