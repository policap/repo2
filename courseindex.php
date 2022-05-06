<?php
require_once ('./course.php');
require_once('./conn.php');

$arr = array('name'=>'John Mikel', 'time'=>time());
$arr['age'] = 14;
//if the age of $arr is greater than 30, appreciate the person. else say he is a youth
$arr['age'] > 30? print("We appreciate you maannn!"): print("Hey guy, you're still a youth.");
/*
EQUIVALENCE OF THE IF-ELSE CLAUSE; Tenary operator
$array[] = $row['courset']=='personal'?
			new mycourse($row['coursecod'],$row['creditval'],$row['coursetit'],$row['status'],$row['instructor']):
			new practicalcourse($row['coursecod'],$row['creditval'],$row['coursetit'],$row['status'],$row['instructor']);		}

*/



function makearray($result){
	$array = array();
	while($row=$result->fetch_assoc()){
		if($row['courset']=='personal')
			$array[] = new mycourse($row['coursecod'],$row['creditval'],$row['coursetit'],$row['status'],$row['instructor']);
		else
			$array[] = new practicalcourse($row['coursecod'],$row['creditval'],$row['coursetit'],$row['status'],$row['instructor']);
			$array[count($array)-1]->id=$row['id'];
			
		}
		
		return $array;
	}
	
	$select=$conn->query("SELECT * FROM courses") or die(mysqli_error($conn));
	//makearray($select);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>COURSE INDEX</title>
</head>

<body>
<table>
	<thead>
		<tr>
			<td>COURSE CODE</td>
			<td>CREDIT VALUE</td>
			<td>COURSE TITLE</td>
            <td>STATUS</td>
            <td>INSTRUCTOR</td>
</tr>
</thead>
<tbody>
<?php 
foreach(makearray($select) as $key=>$value){?>
	<tr>
        <td><?php echo $value->code; ?></td>
        <td><?php echo $value->cv; ?></td>
        <td> <?php echo $value->title; ?></td>
        <td> <?php echo $value->status; ?></td>
        <td> <?php if(isset($value->instructor))echo $value->instructor; else echo $value->supervisor; ?></td>
        <td><a href="./coursedetail.php?id=<?php echo $value->id;?>">PROCEED TO DETAILS</a></td>
	</tr>
<?php }

?>
</tbody>


</table>



</body>
</html>