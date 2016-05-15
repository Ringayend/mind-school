<?php
  class School {
   
    public $id;
    public $name;
    public $street;
    public $town;
    public $postcode;
    public $continent;
    public $phone_num;
    public $mail;
    public $director;

    public function __construct($id, $name, $password, $street, $town, $postcode, $continent, $phone_num, $mail, $director) {
      $this->id = $id;
      $this->name = $name;
      $this->password = $password;
      $this->street = $street;
      $this->town = $town;
      $this->postcode = $postcode;
      $this->continent = $continent;
      $this->phone_num = $phone_num;
      $this->mail = $mail;
      $this->director = $director;
    }


    public static function create( $name, $password, $street, $town, $postcode, $continent, $phone_num, $mail, $director){
      $db = Db::getInstance();
      $crypted_password = sha1($password);
      $req = pg_query_params($db,'INSERT INTO school (school_name, school_password, school_street, school_town, school_postcode, school_continent, school_phone_num, school_mail, director ) VALUES ( $1, $2, $3, $4, $5, $6, $7, $8 ,$9 )',array($name, $crypted_password, $street, $town, $postcode, $continent, $phone_num, $mail, $director));
      }


    public static function find($id) {
      $db = Db::getInstance();
      $list = [];
      $req = pg_query_params($db,'SELECT * FROM school WHERE school_id = $1',array($id));
      foreach(pg_fetch_all($req) as $school) {
          $list[] = new School($school['school_id'], $school['school_name'], $school['school_password'], $school['school_street'],$school['school_town'], $school['school_postcode'], $school['school_continent'],$school['school_phone_nume'], $school['school_mail'], $school['director']);
        }
        return $list;
      }

      public static function findSchool($mail) {
      $db = Db::getInstance();
      $list = [];
      $req1= pg_query_params($db, 'SELECT t_school_num FROM teacher WHERE teacher_mail = $1',array($mail));
      $NumSchool= pg_fetch_result($req1, 0, 0);
      $req = pg_query_params($db,'SELECT * FROM school WHERE school_id = $1',array($NumSchool));
      foreach(pg_fetch_all($req) as $school) {
          $list[] = new School($school['school_id'], $school['school_name'], $school['school_password'], $school['school_street'],$school['school_town'], $school['school_postcode'], $school['school_continent'],$school['school_phone_nume'], $school['school_mail'], $school['director']);
        }
        return $list;
      }

      public static function findProfil($mail) {
      $db = Db::getInstance();
      $list = [];
      $req1= pg_query_params($db, 'SELECT school_id FROM school WHERE school_mail = $1',array($mail));
      $NumSchool= pg_fetch_result($req1, 0, 0);
      $req = pg_query_params($db,'SELECT * FROM school WHERE school_id = $1',array($NumSchool));
      foreach(pg_fetch_all($req) as $school) {
          $list[] = new School($school['school_id'], $school['school_name'], $school['school_password'], $school['school_street'],$school['school_town'], $school['school_postcode'], $school['school_continent'],$school['school_phone_nume'], $school['school_mail'], $school['director']);
        }
        return $list;
      }
    

    public static function update_password($id, $password){
      $db = Db::getInstance();
      $crypted_password = sha1($password);
      $req = pg_query_params($db,'UPDATE school SET school_password = $2 WHERE school_id = $1',array($id, $crypted_password));
      }

    public static function update_mail($id, $mail){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_mail = $2 WHERE school_id = $1',array($id, $mail));
      }

    public static function update_street($id, $street){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_street = $2 WHERE school_id = $1',array($id, $street));
      }

    public static function update_town($id, $town){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_town = $2 WHERE school_id = $1',array($id, $town));
      }

    public static function update_continent($id, $continent){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_continent = $2 WHERE school_id = $1',array($id, $continent));
      }

    public static function update_postcode($id, $postcode){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_postcode = $2 WHERE school_id = $1',array($id, $postcode));
      }

    public static function update_phone_num($id, $phone_num){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET school_phone_num = $2 WHERE school_id = $1',array($id, $phone_num));
      }

    public static function update_director($id, $director){
      $db = Db::getInstance();
      $req = pg_query_params($db,'UPDATE school SET director = $2 WHERE school_id = $1',array($id, $director));
      }

    public static function delete($id, $name){
      $db = Db::getInstance();
      $req = pg_query_params($db,'DELETE FROM school WHERE school_id = $1 and school_name = $2',array($id, $name));
      }

    public static function addTeacher($t_lastname, $t_firstname, $s_lastname, $s_firstname, $grade){
      $db = Db::getInstance();
      $req1 = pg_query_params($db, 'SELECT teacher_id from teacher WHERE t_last_name = $1 and t_first_name = $2',array($t_lastname, $t_firstname));
      $idteacher = pg_fetch_result($req1, 0, 0);
      echo $idteacher;
      $req2 = pg_query_params($db, 'SELECT student_id FROM student WHERE s_last_name = $1 and s_first_name = $2',array($s_lastname,$s_firstname));
      $idStud = pg_fetch_result($req2, 0, 0);
      echo $idStud;

      $req = pg_query_params($db,'INSERT INTO supervise (student_id, teacher_id, grade) VALUES ($1,$2,$3)',array($idStud, $idteacher, $grade));
      }
    
    public static function addActivity($id, $mail){
      $db = Db::getInstance();
      $req2 = pg_query_params($db, 'SELECT school_id FROM school WHERE school_mail= $1',array($mail));
      $idSchool = pg_fetch_result($req2, 0, 0);
      echo $idSchool;
      $req = pg_query_params($db, 'INSERT INTO owner  (school_id, activity_id) VALUES ($1, $2)',array($idSchool, $id));
    }

    public static function deleteActivity($title, $mail){
      $db = Db::getInstance();
      $req1= pg_query_params($db, 'SELECT activity_id FROM activity WHERE title = $1',array($title));
      $idActivity= pg_fetch_result($req1, 0, 0);
      $req2= pg_query_params($db, 'SELECT school_id FROM school WHERE school_mail = $1',array($mail));
      $idSchool= pg_fetch_result($req2, 0, 0);
      $req = pg_query_params($db, 'DELETE FROM owner WHERE activity_id = $1 and school_id = $2',array($idActivity, $idSchool));
    }
  }
?>
