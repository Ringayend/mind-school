<?php
function delete_activity($title)
	{
		global $db;
		$req = pg_query_params($db,'DELETE FROM activity WHERE title= $1',array($title));  

	}