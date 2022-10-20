<?php
//Create an example of inheritance, implement the Student class and the Aspirant class, a graduate student differs from a student in having some kind of research work.

class Student
{
    public string $firstName;
    public string $lastName;
    public float $averageMark;

    function __construct($firstName, $lastName, $averageMark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->averageMark = $averageMark;
    }

    public function getScholarship()
    {
        if($this->averageMark == 5)
        {
            echo 100;
        } else echo 80;
    }
}

class Aspirant extends Student
{
    public string $work;
    function __construct($firstName, $lastName, $averageMark, $work)
    {
        parent::__construct($firstName, $lastName, $averageMark);
        $this->work = $work;
    }

    public function getScholarship()
    {
        if($this->averageMark == 5)
        {
            echo 200;
        } else echo 180;
    }
}

$student1 = new Student('Polina', 'Valenda', 5);
$aspirant1 = new Aspirant('Zhenya', 'Raikevich', 4, 'PHP');
$students = array($student1, $aspirant1);
foreach ($students as $key => $value) {
    print_r($value);
    echo " ".$value->getScholarship()."<br>";
}



