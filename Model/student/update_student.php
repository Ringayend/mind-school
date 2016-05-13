<?php 
function update_student($id,firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE student SET(s_first_name, s_last_name, student_password, student_mail, s_school_num, s_birthdate, s_phone_num, strong_intelligence, weak_intelligence) = ($2,$3,$4,$5,$6,$7,$8, DEFAULT, DEFAULT)) WHERE student_id =$1 ', array($id, $firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}
