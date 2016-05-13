<?php 

// SCHOOL Function
function set_school($name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director)
	{
		global $db;
		$req = pg_query_params($db,'INSERT INTO school (school_name, school_password, school_street, school_town, school_postcode, school_continent, school_phone_num, school_mail, director) VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9);', array($name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director));  
		
	}
function get_school($name,$continent)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * from school WHERE school_name= $1 and school_continent= $2;',array($name,$continent));  
		result = pg_fetch_all($req);
 		
 		return $result;

	}
function update_school($id,$name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director)
	{
		global $db;
		$req = pg_query($db,'UPDATE school SET(school_name, school_password, school_street, school_town, school_postcode, school_continent, school_phone_num, school_mail, director) = ($2,$3,$4,$5,$6,$7,$8,$9,$10)) WHERE school_id =$1 ;', array($id, $name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director));  
		
	}
function delete_school($name,$continent)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM school WHERE school_name= $1 and school_continent= $2;',array($name,$continent));  

 	}
function add_student_teacher($student_id,$teacher_id,$grade)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO done (student_id, teacher_id, grade) VALUES ($1, $2,$3)", array($student_id,$activity_id,$grade));  
		$result = pg_fetch_all($req);
 		
 		return $result;
	}

