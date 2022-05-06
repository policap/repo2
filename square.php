<?php
require_once("abstract.php");

	class square extends abstractshape{
		var $side;
		
		function __construct($side){
			$this->side=$side;
		}
		
		function area(){
			return $this->side*$this->side;
		}
		function tostring(){
			return "The sides of a square are equal multiplying the sides twice you get the area ".$this->side*$this->side;
		}
	
	
	
	}
?>