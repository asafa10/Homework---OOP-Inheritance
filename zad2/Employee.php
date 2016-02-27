<?php

require_once 'autoload.php';

class Employee extends Person{
	
	private $daySalary;
	
	public function __construct($name, $age, $isMale, $daySalary) {
		$this->setName($name);
		$this->setAge($age);
		$this->setGender($isMale);
		$this->setDaySalary($daySalary);
	}
	
	public function setDaySalary($daySalary) {
		$this->daySalary = $daySalary;
	}
	
	public function getDaySalary() {
		return $this->daySalary;
	}
	
	public function calculateOvertime($hours) {
		if ($this->getAge() > 18){
			$this->daySalary = 1.5 * $hours * ($this->daySalary / 10 ) + $this->daySalary;
		}
		else {
			$this->daySalary = $this->daySalary;
		}
		
		return $this->daySalary;
	}
	
	public function showEmployeeInfo() {
		return sprintf(
				"Employee name: %s, age: %d, gender: %s, salary: %g",
				$this->getName(),
				$this->getAge(),
				$this->getGender(),
				$this->getDaySalary()
				);
	}
	
}