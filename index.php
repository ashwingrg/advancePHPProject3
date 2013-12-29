<?php
	require ('dbconn.php'); //include ('dbconn.php')
	$sql="SELECT * FROM tbl_student";
	$res=mysql_query($sql);
	$row = array();
	
	while($r = mysql_fetch_array($res)){
		$row[] = $r;
	}
	$sql="SELECT * FROM tbl_company";
	$res=mysql_query($sql);
	$comp = array();
	while ($s=mysql_fetch_array($res)){
		$comp[]=$s;
	}
	//print_r($comp);
	$sql="SELECT * FROM menu";
	$res=mysql_query($sql);
	$data=array();
	while ($r=mysql_fetch_array($res)){
		$data[]=$r;
	}
	//print_r($data);
	//count the number of rows in table
	$c=mysql_query("SELECT count(1) from tbl_student");
	$cr= mysql_fetch_array($c);
	$ct=$cr[0];
	$cn=mysql_query("SELECT count(1) from tbl_company");
	$cc=mysql_fetch_array($cn);
	$ca=$cc[0];
	$m=mysql_query("SELECT count(1) from menu");
	$mr=mysql_fetch_array($m);
	$mt=$mr[0];
?>
<?php include_once('includes/header.php'); ?>

		<?php 
		if(@$_GET['msg']){ //show div class notify only if get 'msg'
					?>
		<div class="notify">
        	<p>
            		<?php
							if(@$_GET['msg']==1){
								echo "One row Added Successfully";
							}
							else if($_GET['msg']==2){
								echo "All rows have been deleted";
							}
							else if(@$_GET['msg']==3){
								echo "Your record updated successfully.";
							}
							else if($_GET['msg']==4){
								echo "One row deleted successfully";
							}
					?>
            </p>
           <!-- <span>
            	X
            </span>-->
        </div>
<?php } ?>
		<?php 
				if(@$_GET['page']){
					include $_GET['page'].'.php';
				}
				elseif (@$_GET['page']=="student"){
					include $_GET['page'].'.php';
				}
				elseif (@$_GET['page']=="company"){
					include $_GET['page'].'.php';
				}
				elseif (@$_GET['page']=="menu"){
					include $_GET['page'].'.php';
				}
				else{
					include 'welcome.php';
				}
		?>
<?php include_once('includes/footer.php'); ?>
        
