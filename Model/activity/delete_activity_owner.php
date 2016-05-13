<?php
function delete_activity_owner($school_id,$activity_id)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM owner WHERE school_id= $1 and activity_id= $2',array($school_id,$activity_id));  

	}