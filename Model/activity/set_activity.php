<?php 
function set_activity($title, $description, $tools, $intelligence)
	{
		global $db;
		$req = pg_query_params($db,"INSERT INTO activity (title,activity_description, activity_tools, activity_intelligence) VALUES ($1, $2, $3, $4)", array($title, $description, $tools, $intelligence));  

	}
