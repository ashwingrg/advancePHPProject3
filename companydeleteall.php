<?php
	$sql="TRUNCATE table tbl_company";
	if(mysql_query($sql)){
		?><script>window.location.href='index.php?page=company&msg=2';</script> <?php
	}

?>