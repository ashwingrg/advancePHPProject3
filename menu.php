<h4 class="clearboth" style="margin-top:-5px; padding-bottom:7px;">Nav Menu CPanel :</h4>
        <div class="tblstudent"><!--student table starts here-->
            <div class="top">
                <a href="index.php?page=add_menu" class="buttons">Add new menu</a>
                <a href="index.php?page=studentdeleteall" class="buttons">Delete all menu</a>
            </div>
<table>
    <thead>
        <tr>
            <th>m_id</th>
            <th>m_title</th>
            <th>m_link</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($data as $men){
    ?>
        <tr>
            <td style="text-align:center;"><?php echo $men['m_id'];?></td>
            <td><?php echo $men['m_title'];?></td>
            <td><?php echo $men['m_link'];?></td>
            <td width="10%" style="text-align:center;">
                <a href= "index.php?page=add_menu&id=<?php echo $men['m_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Edit</a>
            </td>
            <td width="10%">
                <a href= "index.php?page=deletemenu&id=<?php echo $men['m_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" style="color:#06C; text-align:center; font-size:14px;">Total number of rows (data inserted) = <?php echo $mt; ?></td>
        </tr>
    </tfoot>
</table>
