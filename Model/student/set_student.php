<?php 
function set_student($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO student (s_first_name, s_last_name, student_password, student_mail, s_school_num, s_birthdate, s_phone_num, strong_intelligence, weak_intelligence) VALUES ($1, $2, $3, $4, $5, $6, $7, 'DEFAULT,DEFAULT)", array($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}

//changer la base dedonnées pour mettre strongest et weakest intelligence