<?php
	@$id=$_GET['id'];
	
	if(@$_GET['id']){
		$sql = "SELECT * from tbl_student where s_id='$id'";
		$res=mysql_query($sql);
		$data = mysql_fetch_assoc($res); //mysql_fetch_assoc($res) for one row result
	}
	if($_POST){	
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$sql = "INSERT INTO tbl_student VALUES('','$name','$address','$contact')";
		if(mysql_query($sql)){
			//header('Location:index.php?msg=1');
			?><script> window.location.href='index.php?page=student&msg=1'; </script><?php
		}
	}
?>
<style>
	.error { font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F00;}
</style>
<h4 class="clearboth" style="margin-top:-5px;">tbl_company :</h4>
        <div class="tblstudent"><!--company table starts here-->
        	<div class="top">
        		<a href="index.php?page=studentnew" class="buttons">Add new record</a>
                <a href="index.php?page=newmulti" class="buttons">Add new multi record</a>
                <a href="index.php?page=studentdeleteall" class="buttons">Delete all records</a>
        	</div>
            
            
<form method="post" id="addstudent" action="#">
<p>
<label>Name:</label>
<input id="name" type="text" name="name"  style="width:200px;" value="<?php echo @$data['s_name']; ?>" placeholder="Enter your name">
<span class="error"></span>
<input type="hidden" value="<?php echo @$id; ?>" name="editid" />
</p>
<p>
<label>Address:</label>
<input type="text" id="address" name="address" style="width:250px;" value="<?php echo @$data['s_address']; ?>"  placeholder="Enter address">
<span class="error"></span>
</p>
<p>
<label>Contact No.:</label>
<input type="text" id="contact" name="contact" value="<?php echo @$data['s_contact'] ?>"  placeholder="Enter contact no.">
<span class="error"></span>
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php?page=student" class="buttons">Cancel</a>
</p>
</form>
