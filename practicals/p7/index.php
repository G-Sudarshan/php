<?php


class College
{
	protected $collegeName;

	function setCollegeName($name)
	{
		$this->collegeName = $name;
	}

}

class Student extends College
{
	public $studentName;

	function setStudentName($name)
	{
		$this->studentName = $name;
	}

	function display()
	{
		echo "Student Name : ".$this->studentName."<br/> College Name : ".$this->collegeName;
		
	}
}

$obj = new Student();

$obj->setStudentName("Sudarshan Gawale");
$obj->setCollegeName("GP Nashik");
$obj->display();


?>

