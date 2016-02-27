<?php

require_once 'autoload.php';


$demoArray = [
		$p1 = new Person('Kiro', 20, true),
		$p2 = new Person('Pesho', 38, true),
		$s1 = new Student('Kristine', 15, false, 4.4),
		$s2 = new Student('Sasha', 12, false, 5.5),
		$e1 = new Employee('Trendafil', 17, true, 600),
		$e1 = new Employee('Petra', 28, true, 900)
];


foreach ($demoArray as $person) {
	if (get_class($person) == 'Person'){
		echo $person->showPersonInfo() , PHP_EOL;
	}else if(get_class($person) == 'Student'){
		echo $person->showStudentInfo() , PHP_EOL;
	}else if(get_class($person) == 'Employee'){
		echo $person->showEmployeeInfo() , PHP_EOL;
	}else{
		echo ' Unrecognized class type!', PHP_EOL;
	}
}

foreach ($demoArray as $emploee) {
	if(get_class($emploee) == 'Employee'){
		echo "The employee " . $emploee->getName() . "-" . $emploee->getAge() . " years old"
		 . " has salary: " . $emploee->calculateOvertime(2), PHP_EOL;
	}
		
}

