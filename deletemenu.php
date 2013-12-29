<?php
	$id = $_GET['id'];
	$sql = "DELETE from menu where m_id='$id'";
	if(mysql_query($sql)){
		?><script>window.location.href='index.php?page=menu&msg=4';</script><?php
	}
	else{
		echo "error";
	}
?>
