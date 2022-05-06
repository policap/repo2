<?php
abstract class abstractcalculator{
	abstract function addition();
	abstract function subtraction();
	abstract function multiplication();
	abstract function division();
	abstract function area();
	
		function welcome(){
			return "This is an abstract class of a calculator with 5 methods; addition, subtraction, multiplication, div ision, multipl,ication and area"; 	
		}
	
	
	}






?>