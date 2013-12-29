<h4 class="clearboth" style="margin-top:-5px; padding-bottom:7px;">tbl_company :</h4>
        <div class="tblstudent"><!--company table starts here-->
        	<div class="top">
        		<a href="index.php?page=companynew" class="buttons">Add new record</a>
                <a href="index.php?page=newmulti" class="buttons">Add new multi record</a>
                <a href="index.php?page=companydeleteall" class="buttons">Delete all records</a>
        	</div>
<table><!--table for company-->
	<thead>
    	<tr>
        	<th>comp_id</th>
            <th>comp_name</th>
            <th>comp_address</th>
            <th>comp_contact</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    	<?php foreach ($comp as $com){ ?>
        <tr>
        	<td style="text-align:center;"><?php echo $com['comp_id']; ?></td>
            <td><?php echo $com['comp_name'];?></td>
            <td><?php echo $com['comp_address'];?></td>
            <td><?php echo $com['comp_contact'];?></td>
            <td width="10%" style="text-align:center;">
           		<a href= "index.php?page=companynew&id=<?php echo $com['comp_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Edit</a>
         	</td>
            <td width="10%">
            	<a href= "index.php?page=companydelete&id=<?php echo $com['comp_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Delete</a>
        	</td>
        </tr>
        <?php }?>
    </tbody>
    <tfoot>
    	<tr>
        	<td colspan="6" style="color:#06C; text-align:center; font-size:14px;">Total number of rows (data inserted) = <?php echo $ca; ?></td>
        </tr>
    </tfoot>
</table><!--comany table ends here--><br />