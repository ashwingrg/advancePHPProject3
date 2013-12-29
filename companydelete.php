<?php
$id=$_GET['id'];
//echo $id;
$sql="DELETE FROM tbl_company where comp_id='$id'";
if(mysql_query($sql)){
	?><script>window.location.href='index.php?page=company&msg=4';</script><?php
}

?>