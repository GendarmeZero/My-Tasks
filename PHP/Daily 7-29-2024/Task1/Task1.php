<?php

class Student
{
    private $name;
    private $age;
    private $studentID;

    public function __construct($name, $age, $studentID)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $studentID;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getStudentID()
    {
        return $this->studentID;
    }

    public function __destruct()
    {
        echo "record has been destroyed !";
    }


    public function setDetails($name, $age, $studentID)
    {
        $this->name = $name;
        $this->age = $age;
        $this->studentID = $studentID;
    }
    public function getDetails()
    {
        return $this->name . " " . $this->age . " " . $this->studentID;
    }
};

/////debugging the class (Student)

// $koko = new Student("temp","50","54");
// echo $koko->getDetails();



class Classroom
{
    private $new_Student = [];

    public function addStudent(Student $newstudent)
    {
        $this->new_Student[$newstudent->getStudentID()] = $newstudent;
    }
    public function listStudents()
    {
        if (empty($this->new_Student)) {
            echo "No Student in the class list.<br>";
        } else {
            foreach ($this->new_Student as $new_Student) {
                echo $new_Student->getDetails() . "<br>";
            }
            return;
        }
    }
    public function removeStudent($studentID)
    {
        if (isset($this->new_Student[$studentID])) {
            unset($this->new_Student[$studentID]);
            echo "Student record has been deleted !";
        } else {
            echo "ERROR!!";
        }
    }
    public function listStudent()
    {
        if (empty($this->new_Student)) {
            echo "No student in the class list.<br>";
        } else {
            foreach ($this->new_Student as $new_Student) {
                echo $new_Student->getDetails() . "<br>";
            }
            return;
        }
    }
}
$classroom = new Classroom();

$newstudent1 = new Student("mike", "20", 456);
$newstudent2 = new Student("summer", "25", 458);
$newstudent3 = new Student("koko", "26", 444);
$newstudent4 = new Student("samieeeeee", "15", 555);

$classroom->addStudent($newstudent1);
$classroom->addStudent($newstudent2);
$classroom->addStudent($newstudent3);
$classroom->addStudent($newstudent4);

echo $classroom->listStudents() . "<br>";
echo "<br>", "<br>", "---------------", "<br>";

////////print all Student with their details
// echo $classroom->listStudent();

////////remove Student using thier ID
// $classroom->removeStudent(555);

/////debugging the class (calssrome).

// echo "<br>", "<br>", "---------------", "<br>";
// print_r($classroom);
