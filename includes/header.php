<!DOCTYPE html>
<html>
<head>
	<title>MG Class, Eg1</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>
<body>
	<div id="container">
		<div id="wrapper">
        <div class="date">Current Date: <?php echo date("D-m-y"); ?></div><br>
        <div id="menu">
        	<?php foreach ($data as $val){ ?>
            <ul>
            	<li><a href="<?php echo $val['m_link']; ?>"><?php echo $val['m_title']; ?></a></li>
            </ul>
            <?php } ?>
        </div><!--menu ends here-->
        <span><a class="buttons" href="index.php?page=menu">>>Go to Nav Menu CPanel</a></span> <a class="buttons" href="index.php">>>Go to home page</a><hr>
        <!--<a style="cursor:pointer; font-weight:bold; color:#eeeeee; background:#687bbf; border-radius:6px 6px 0 0; padding:5px;" href="index.php">Home Page</a>-->        
        <div class="title" style="padding-bottom:7px;">Database Information:</div>
        <span class="title" style="font-size:18px; text-decoration:none; margin-top:-20px;">All tables inside db_student database:</span><span><a href="index.php?page=student" style="margin-left:5em; font-weight:bold;">1) tbl_student</a><a href="index.php?page=company" style="font-weight:bold; margin-left:5em;">2) tbl_company</a></span><br>
		<br>

