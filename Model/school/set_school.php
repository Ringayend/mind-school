<?php 
function set_school($name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director)
	{
		global $db;
		$req = pg_query_params($db,'INSERT INTO school (school_name, school_password, school_street, school_town, school_postcode, school_continent, school_phone_num, school_mail, director) VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9);', array($name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director));  
		
	}
