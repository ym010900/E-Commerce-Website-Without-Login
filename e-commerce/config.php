<?php
	$conn = new mysqli("sql211.epizy.com","epiz_32102194","QNVaL6xDVQtt","epiz_32102194_db_uas");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>