<?php
	@$comp_id=$_GET['id'];
	if(@$_GET['id']){
		@$sql="SELECT * FROM tbl_company where comp_id='$comp_id'";
		$res=mysql_query($sql);
		$data=mysql_fetch_assoc($res);
	}
		if($_POST){	
			$comp_name=$_POST['comp_name'];
			$comp_address=$_POST['comp_address'];
			$comp_contact=$_POST['comp_contact'];
			if($comp_id){
				$sql="UPDATE tbl_company SET comp_name='$comp_name', comp_address='$comp_address', comp_contact='$comp_contact' where comp_id='$comp_id'";
				if(mysql_query($sql)){
					?><script>window.location.href='index.php?page=company&msg=3'</script><?php
				}
				else{ echo "error while updating"; }
			}
			else{
				$sql="INSERT INTO tbl_company VALUES('','$comp_name','$comp_address','$comp_contact')";
				if(mysql_query($sql)){
					?><script>window.location.href='index.php?page=company&msg=1'</script><?php
				}
				else { echo "error while inserting"; }
			}
		}
?>
<style>
	.error { font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F00;}
</style>
<h4 class="clearboth" style="margin-top:-5px;">tbl_company :</h4>
        <div class="tblstudent"><!--company table starts here-->
        	<div class="top">
        		<a href="index.php?page=companynew" class="buttons">Add new record</a>
                <a href="index.php?page=newmulti" class="buttons">Add new multi record</a>
                <a href="index.php?page=companydeleteall" class="buttons">Delete all records</a>
        	</div>
            
            
<form method="post" id="addcompany" action="#">
<p>
<label>Name:</label>
<input id="comp_name" type="text" name="comp_name"  style="width:200px;" value="<?php echo @$data['comp_name'];  ?>" placeholder="Enter company name">
<span class="error"></span>
<input type="hidden" value="<?php echo @$id; ?>" name="editid" />
</p>
<p>
<label>Address:</label>
<input type="text" id="comp_address" name="comp_address" style="width:250px;" value="<?php echo @$data['comp_address'];  ?>"  placeholder="Enter company address">
<span class="error"></span>
</p>
<p>
<label>Contact No.:</label>
<input type="text" id="comp_contact" name="comp_contact" value="<?php echo @$data['comp_contact']; ?>"  placeholder="Enter contact no.">
<span class="error"></span>
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php?page=company" class="buttons">Cancel</a>
</p>
</form>