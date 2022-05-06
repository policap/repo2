<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>course details</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;	
}
.containerbd{
	width:960px;
	background-color:#CCF;
	margin-inline:auto;
	padding-block:1rem;
	margin-block:20px;
	height:auto;
	border-radius:20px;
	box-shadow:5px 5px #000;
	
}
.subconbd{
	width:400px;
	background-color:#fff;
	margin-inline:auto;
	height:300px;
}
.subcont{
	width:100%;
	height:100px;
	background-color:#CCF;
	padding-block:1rem;
	margin-block:20px;
	align-items:center;
	display:flex;
}
.subcont_one{
	margin-inline:10px;
	height:60px;
	padding-block:0.2rem;
	margin-block:5px;
	background-color:#fff;
	flex:auto;
	vertical-align:middle;
}
img{
width:100%;
height:100%;	
}
h2{
	text-align:center;
	text-transform:capitalize;
	text-shadow:2px 2px #CCF;		
}
b{
	display:block;
	width:100%;
	text-align:center;	
}
</style>
</head>

<body>
<?php
require_once('./course.php');
require_once ('./conn.php');
$id = $_GET['id'];
$select=$conn->query("SELECT * FROM courses WHERE id='".$id."'") or die(mysqli_error($conn));
$row=mysqli_fetch_assoc($select);


?>
<div class="containerbd">
	<div class="subconbd">
    	<img src="COMPUTER.jpg" />
    </div>
    <div class="subcont">
    	<div class="subcont_one"> <b>Course type:</b>
        	<h2><?php echo $row['courset'];?></h2>
        </div>
        <div class="subcont_one"> <b>Course title:</b>
        	<h2><?php echo $row['coursetit'];?></h2>
        </div>
        <div class="subcont_one"> <b>Course code:</b>
        	<h2><?php echo $row['coursecod'];?></h2>
        </div>
    </div>
    <div class="subcont">
    	<div class="subcont_one"> <b>Status:</b>
        	<h2><?php echo $row['status'];?></h2>
        </div>
        <div class="subcont_one"> <b>Instructor:</b>
        	<h2><?php echo $row['instructor'];?></h2>
        </div>
        <div class="subcont_one"> <b>id:</b>
        	<h2><?php echo $row['id'];?></h2>
            
        </div>
    </div>
</div>
</body>
</html>