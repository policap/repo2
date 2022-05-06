<?php
abstract class course{
	var $code, $cv, $title, $status, $id;//definitions
	abstract function completedon();//method
	abstract function courseinstructor();//method
	abstract function save($conn);//method
	}
	
	
class mycourse extends course{
	var $instructor, $courseresult, $coursecoverage;
	function __construct($code, $cv, $title, $status, $instructor){
		
		$this->code=$code;
		$this->cv=$cv;
		$this->title=$title;
		$this->status=$status;
		$this->instructor=$instructor;		
	}
	function completedon(){
		return time();//"time" returns current timestamp and now is used in MSQL
		}
	function courseinstructor(){
		return $this->instructor;
		}
	function setresult($result){
		$this->courseresult=$result;		
		}
	function getresult(){
		return $this->courseresult;
	}
	function setcoursecoverage($coverage){
		$this->coursecoverage=$coverage;
		}
	function getcoursecoverage(){
		return $this->coursecoverage;
		}
	function courseinfo(){
		return "Title: ". $this->title. "<br> Course code: ". $this->code. "<br> Credit value: ". $this->cv. "<br> Status: ". $this->status. "<br> Instructor: ". $this->instructor;
		}
	function save($conn){
		/*$insert=$conn->query("INSERT INTO `courses`(`id`, `courset`, `coursetit`, `coursecod`, `creditval`, `status`, `instructor`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7]");*/
		
		$insert="INSERT INTO `courses`(`courset`, `coursetit`, `coursecod`, `creditval`, `status`, `instructor`) VALUES ('personal','$this->title','$this->code','$this->cv','$this->status','$this->instructor')";
		mysqli_query($conn,$insert)or die (mysqli_error($conn));
	}
	}

class practicalcourse extends course{
	var $duration, $supervisor, $grade;
	function __construct($code, $cv, $title, $status, $supervisor){
		$this->code=$code;              //$this variable without $ = variable.
		$this->cv=$cv;
		$this->title=$title;
		$this->status=$status;
		$this->supervisor=$supervisor;
		}
	function completedon(){
		return time();
		}
	function courseinstructor(){
		return $this->supervisor;
		}
	function setresult($grade){
		$this->grade=$grade;
		}
	function getresult(){
		return $this->grade;
		}
	function courseinfo(){
		return "<br> Title: ". $this->title. "<br> Course code: ". $this->code. "<br> Crdeit value: ". $this->cv. "<br>Status: ". $this->status. "<br> THE REST IS FOR PRACTICAL STUDENTS PAY PRICE AND GET THERE"
;		}
	function save($conn){
		$insert="INSERT INTO `courses`(`courset`, `coursetit`, `coursecod`, `creditval`, `status`, `instructor`) VALUES ('practical','$this->title','$this->code','$this->cv','$this->status','$this->supervisor')";
		mysqli_query($conn,$insert)or die (mysqli_error($conn));	
	}
	}
?>