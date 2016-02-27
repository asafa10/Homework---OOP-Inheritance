<?php

class Person 
{

	private $name;
	
	protected $age;
	
	private $isMale;
	
	public function __construct($name, $age, $isMale) {
		$this->setName($name);
		$this->setAge($age);
		$this->setGender($isMale);
	}
	
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setAge($age) {
		$this->age = $age;
	}
	
	public function getAge() {
		return $this->age;
	}
	
	public function setGender($isMale) {
		$this->isMale = $isMale;
	}
	
	public function getGender() {
		if ($this->isMale)
			return 'Male';
		else 
			return 'Female';
	}
	
	public function showPersonInfo() {
		return sprintf(
				"Person name: %s, age: %d, gender: %s",
				$this->getName(),
				$this->getAge(),
				$this->getGender()
				);
	}
}