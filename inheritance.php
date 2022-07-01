<?php

class Person {
    protected $firstName, $lastName, $id;

    /**
     * @param $firstName
     * @param $lastName
     * @param $identification
     */
    public function __construct($firstName, $lastName, $identification)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }

}

class Student extends Person {
    protected $scores;

    /**
     * @param $firstName
     * @param $lastName
     * @param $id
     * @param $scores
     */

    public function __construct($firstName, $lastName, $id, $scores)
    {
        parent::__construct($firstName, $lastName, $id);
        $this->scores = array_sum($scores) / count($scores);
    }

    public function sum($arr)
    {
        return array_sum($arr) / count($arr);
    }

    public function calculate()
    {
        if ($this->scores >= 90) {
            return 'O';
        } elseif ($this->scores >= 80) {
            return 'E';
        } elseif ($this->scores >= 70) {
            return 'A';
        } elseif ($this->scores >= 55) {
            return 'P';
        } elseif ($this->scores >= 40) {
            return 'D';
        } else {
            return 'T';
        }
    }
}

$scr = [50, 100, 90, 90, 67, 87, 91];
$stud = new Student('John', 'Doe', '34ADCKL0983IJ', $scr);
var_dump($stud->sum($scr));