<?php 
function update_teacher($id,firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE teacher SET(t_first_name, t_last_name, teacher_password, teacher_mail, t_school_num, t_birthdate, t_phone_num) = ($2,$3,$4,$5,$6,$7,$8)) WHERE student_id =$1 ', array($id, $firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}
