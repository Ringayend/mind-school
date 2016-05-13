<?php 
function set_student($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO student (s_first_name, s_last_name, student_password, student_mail, s_school_num, s_birthdate, s_phone_num, strong_intelligence, weak_intelligence) VALUES ($1, $2, $3, $4, $5, $6, $7, 'DEFAULT,DEFAULT)", array($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}//changer la base dedonnées pour mettre strongest et weakest intelligence

function get_student($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'SELECT * from student WHERE s_last_name= $1 and s_first_continent= $2',array($lastname,$firstname));  
		$result = pg_fetch_all($req);
 		
 		return $result;
	}
function update_student($id,firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE student SET(s_first_name, s_last_name, student_password, student_mail, s_school_num, s_birthdate, s_phone_num, strong_intelligence, weak_intelligence) = ($2,$3,$4,$5,$6,$7,$8, DEFAULT, DEFAULT)) WHERE student_id =$1 ', array($id, $firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}
function delete_student($lastname,$firstname)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM student WHERE s_last_name= $1 and s_first_name= $2',array($lastname,$firstname));  

	}