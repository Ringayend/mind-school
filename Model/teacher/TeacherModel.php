<?php 
function set_teacher($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO $table (t_first_name, t_last_name, teacher_password, teacher_mail, t_school_num, t_birthdate, t_phone_num) VALUES ($1, $2, $3, $4, $5, $6, $7)", array($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}

function get_teacher($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * from teacher WHERE s_last_name= $1 and s_first_continent= $2',array($lastname,$firstname));  
		result = pg_fetch_all($req);
 		
 		return $result;
	}
function update_teacher($id,firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE teacher SET(t_first_name, t_last_name, teacher_password, teacher_mail, t_school_num, t_birthdate, t_phone_num) = ($2,$3,$4,$5,$6,$7,$8)) WHERE student_id =$1 ', array($id, $firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}
function delete_teacher($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM teacher WHERE t_last_name= $1 and t_first_name= $2',array($lastname,$firstname));  

	}
function delete_student_teacher($student_id,$teacher_id,$date)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM supervise WHERE student_id= $1 and teacher_id= $2 and activity_date= $3',array($student_id,$teacher_id,$date));  

	}

function delete_student_teacher($student_id,$teacher_id,$grade)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM supervise WHERE student_id= $1 and teacher_id= $2 and grade= $3',array($student_id,$teacher_id,$grade));  

	}