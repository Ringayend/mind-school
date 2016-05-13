<?php 
function update_school($id,$name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director)
	{
		global $db;
		$req = pg_query($db,'UPDATE school SET(school_name, school_password, school_street, school_town, school_postcode, school_continent, school_phone_num, school_mail, director) = ($2,$3,$4,$5,$6,$7,$8,$9,$10)) WHERE school_id =$1 ;', array($id, $name, $password, $street, $town, $postcode, $continent, $phone, $mail, $director));  
		
	}

