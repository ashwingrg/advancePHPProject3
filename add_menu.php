<?php
    @$menu_id=$_GET['id'];
    if($_GET['id']){
        $sql="SELECT * FROM menu where m_id='$menu_id'";
        $res=mysql_query($sql);
        $mdata=mysql_fetch_assoc($res);
    }
    if($_POST){
        $menu_title=$_POST['menu_title'];
        $menu_link=$_POST['menu_link'];
        if($menu_id){
            $sql="UPDATE menu SET m_title='$menu_title', m_link='$menu_link' where m_id='$menu_id'";
            if(mysql_query($sql)){
                ?><script>window.location.href='index.php?page=menu&msg='</script> <?php
            }
            else{ echo "error while updating.";}
        }
        else{
            $sql="INSERT INTO menu values('','$menu_title','$menu_link')";
            if(mysql_query($sql)){
            ?><script>window.location.href='index.php?page=menu&msg=1';</script><?php 
            }
        }
    }  
?>
<h4 class="clearboth" style="margin-top:-5px; padding-bottom:7px;">Nav Menu CPanel :</h4>
        <div class="tblstudent"><!--student table starts here-->
            <div class="top">
                <a href="index.php?page=studentnew" class="buttons">Add new menu</a>
                <a href="index.php?page=studentdeleteall" class="buttons">Delete all menu</a>
            </div>
<form method="post" id="addmenu" action="#">
<p>
<label>Menu Title:</label>
<input id="menu_title" type="text" name="menu_title"  style="width:200px;" value="<?php echo @$mdata['m_title'];  ?>" placeholder="Enter menu title">
<span class="error"></span>
<input type="hidden" value="<?php echo @$id; ?>" name="meditid" />
</p>
<p>
<label>Menu Link:</label>
<input type="text" id="menu_link" name="menu_link" style="width:250px;" value="<?php echo @$mdata['m_link'];  ?>"  placeholder="Enter link">
<span class="error"></span>
</p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php?page=menu" class="buttons">Cancel</a>
</p>
</form>