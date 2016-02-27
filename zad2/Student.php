<?php

require_once 'autoload.php';
		
class Student extends Person
{
	
	protected  $score;
	
	public function __construct($name, $age, $isMale, $score) {
		$this->setName($name);
		$this->setAge($age);
		$this->setGender($isMale);
		$this->setScore($score);
	}
	
	public function setScore($score) {
		if ($score > 6 )
			return $this->score = "incorrect score value";
		else if ($score < 2)
			return $this->score = "incorrect score value";
		else 
			return $this->score = $score;
			
	}
	
	public function getScore() {
		return $this->score;
	}
	
	public function showStudentInfo()
	{
		return sprintf(
				"Student name: %s, age: %d, gender: %s, score: ",
				$this->getName(),
				$this->getAge(),
				$this->getGender()
		) 	. 	$this->getScore() ;
	}
	
}