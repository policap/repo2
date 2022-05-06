<?php
require_once("./course.php");
require_once('./conn.php');
$course=null;
if(isset($_POST['insert'])){
	$courset=$_POST['courset'];
	$coursetit=$_POST['coursetit'];
	$coursecod=$_POST['coursecod'];
	$creditval=$_POST['creditval'];
	$status=$_POST['status'];
	$instructor=$_POST['instructor'];
//$insert=$connn->query("INSERT INTO courses SET what is on the database='$what is on the form',etc ") or die(mysqli_error($conn));
	if($courset=='PERSONAL COURSE'){
			$course = new mycourse($coursecod, $creditval, $coursetit, $status, $instructor);
			
		}
			else{
			$course = new practicalcourse ($coursecod, $creditval, $coursetit, $status, $instructor);	
			}
			$course-> save($conn);
		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COURSE TEST</title>
<link rel="stylesheet" href="style.css">
<!--<style>
	.sub{
	width:200px;
	height:20px;
	border:2px solid #000;
	color:#fff;
	}
</style>-->
</head>

<body>
    <div class="container">
        <form action="" name="course information" method="POST">
            <h2>COURSE DETAILS</h2>
            <a href="" name="newbook"class="btn btn-primary">NEWBOOK</a>
            <a href="" name="bookindex" class="btn btn-primary">BOOKINDEX</a>
            <br /><br />
            <label required>COURSE TYPE:</label>
            <select name="courset">
                <option></option>
                <option value="PERSONAL COURSE">PERSONAL COURSE</option>
                <option value="PRACTICAL COURSE">PRACTICAL COURSE</option>
            </select>
            <br/><br />
            <label>COURSE TITLE:</label>
            <input type="text" name="coursetit" placeholder="Enter course title" />
            <br /><br />
            <label>COURSE CODE:</label>
            <input type="text" name="coursecod" placeholder="Enter course code" />
            <br /><br />
            <label>CREDIT VALUE:</label>
            <input type="text" name="creditval" placeholder="Enter credit value" />
            <br /><br />
            <label>STATUS:</label>
            <select name="status">
                <option></option>
                <option value="COMPULSORY">COMPULSORY</option>
                <option value="ELECTIVE">ELECTIVE</option>
                <option value="REQUIRED">REQUIRED</option>
            </select>
            <br/><br />
            <label>INSTRUCTOR:</label>
            <input type="text" name="instructor" placeholder="Enter instructor" /><br /><br />
            <button type="submit" name="insert">INSERT</button>
            
        </form>
    
    </div>
<!--<div class="sub">
            	<p>Lorem ipsum</p>
            </div>-->




</body>
</html>