<?php 
function update_activity($id, $title, $description, $tools, $intelligence)
	{
		global $db;
		$req = pg_query_params($db,'UPDATE activity SET(title,activity_description, activity_tools, activity_intelligence) = ($2,$3,$4,$5)) WHERE activity_id =$1 ', array($id, $title, $description, $tools, $intelligence));  

	}
