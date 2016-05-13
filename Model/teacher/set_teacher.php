<?php 
function set_teacher($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO $table (t_first_name, t_last_name, teacher_password, teacher_mail, t_school_num, t_birthdate, t_phone_num) VALUES ($1, $2, $3, $4, $5, $6, $7)", array($firstname, $lastname, $password, $mail, $numschool, $birthdate, $phone));  

	}
