<?php

  class Student {
   
    public $id;
    public $first_name;
    public $last_name;
    public $birthdate;
    public $mail;
    public $phone_num;
    public $result_verl;
    public $result_lm;
    public $result_vs;
    public $result_visl;
    public $result_mn;
    public $result_bk;
    public $result_intra;
    public $result_n;
    public $result_inter;
    public $strong_intelligence;
    public $weak_intelligence;

    public function __construct($id, $first_name, $last_name, $mail, $birthdate, $phone_num, $result_verl, $result_lm, $result_vs, $result_visl, $result_mn, $result_bk, $result_intra, $result_n, $result_inter, $strong_intelligence, $weak_intelligence) {
      $this->id = $id;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->birthdate = $birthdate;
      $this->mail = $mail = $mail;
      $this->phone_num = $phone_num;
      $this->result_verl = $result_verl;
      $this->result_lm = $result_lm;
      $this->result_vs = $result_vs;
      $this->result_visl = $result_visl;
      $this->result_mr = $result_mr;
      $this->result_bk = $result_bk;
      $this->result_intra = $result_intra;
      $this->result_n = $result_n;
      $this->result_inter = $result_inter;
      $this->strong_intelligence = $strong_intelligence;
      $this->weak_intelligence = $weak_intelligence;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = pg_query($db,'SELECT student_id, s_first_name, s_last_name, student_mail, s_birthdate, s_phone_num, s_result_verl, s_result_lm, s_result_vs, s_result_visl, s_result_mr, s_result_bk, s_result_intra, s_result_n, s_result_inter ,strong_intelligence, weak_intelligence FROM student');
      foreach(pg_fetch_all($req) as $student) {
        $list[] = new Student($student['student_id'], $student['s_first_name'], $student['s_last_name'], $student['student_mail'], $student['s_birthdate'], $student['s_phone_num'], $student['s_result_verl'], $student['s_result_lm'], $student['s_result_vs'], $student['s_result_visl'], $student['s_result_mr'], $student['s_result_bk'], $student['s_result_intra'], $student['s_result_n'], $student['s_result_inter'], $student['strong_intelligence'],$student['weak_intelligence']);
      }

      return $list;

    }


    public static function find($id) {
      $db = Db::getInstance();
      $list = [];
      $req = pg_query_params($db,'SELECT student_id, s_first_name, s_last_name, student_mail, s_birthdate, s_phone_num, s_result_verl, s_result_lm, s_result_vs, s_result_visl, s_result_mr, s_result_bk, s_result_intra, s_result_n, s_result_inter ,strong_intelligence, weak_intelligence FROM student WHERE  student_id= $1',array($id));
      foreach(pg_fetch_all($req) as $student) {
        $list[] = new Student($student['student_id'], $student['s_first_name'], $student['s_last_name'], $student['student_mail'], $student['s_birthdate'], $student['s_phone_num'], $student['s_result_verl'], $student['s_result_lm'], $student['s_result_vs'], $student['s_result_visl'], $student['s_result_mr'], $student['s_result_bk'], $student['s_result_intra'], $student['s_result_n'], $student['s_result_inter'], $student['strong_intelligence'],$student['weak_intelligence']);
      }

      return $list;

    }

    public static function update_birthdate($id, $birthdate){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_birthdate = $2 WHERE student_id = $1',array($id, $birthdate));
      }

    public static function update_mail($id, $mail){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET student_mail = $2 WHERE student_id = $1',array($id, $mail));
      }
      
    public static function update_phone($id, $phone){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_phone_num = $2 WHERE student_id = $1',array($id, $phone));
      }

    public static function update_result_verl($id, $result_verl){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_verl = $2 WHERE student_id = $1',array($id, $result_verl));
      }

    public static function update_result_lm($id, $result_lm){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_lm = $2 WHERE student_id = $1',array($id, $result_lm));
      }

    public static function update_result_vs($id, $result_vs){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_vs = $2 WHERE student_id = $1',array($id, $result_vs));
      }

    public static function update_result_mr($id, $result_mr){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_mr = $2 WHERE student_id = $1',array($id, $result_mr));
      }

    public static function update_result_bk($id, $result_bk){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_bk = $2 WHERE student_id = $1',array($id, $result_bk));
      }
    public static function update_result_intra($id, $result_intra){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_intra = $2 WHERE student_id = $1',array($id, $result_intra));
      }
    public static function update_result_n($id, $result_n){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_n = $2 WHERE student_id = $1',array($id, $result_n));
      }
    public static function update_result_inter($id, $result_inter){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_result_inter= $2 WHERE student_id = $1',array($id, $result_inter));
      }
    

    public static function update_strong_intelligence($id, $strong_intelligence){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET strong_intelligence = $2 WHERE student_id = $1',array($id, $strong_intelligence));
      }
      
    public static function update_weak_intelligence($id, $weak){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE student SET s_strong_intelligence = $2 WHERE student_id = $1',array($id, $weak));
      }

    public static function update_password($id, $password){
      $db = Db::getInstance();
      $script_password = md5($password);
      $req = pg_query_params($db,'UPDATE student SET student_password = $2 WHERE student_id = $1',array($id, $script_password));
      }
      
      public static function delete($id, $last_name){
        $db = Db::getInstance();
        $req = pg_query_params($db, 'DELETE FROM student WHERE student_id = $1 and s_last_name = $2', array($id, $last_name));
      }
  } 

?>

