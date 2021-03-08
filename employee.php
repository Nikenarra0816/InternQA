<?php
class Employee {
  // Properties
  public $name;  
  public $title;
  public $salary;
  
  public function setEmployeeName($name) {
    $this->name = $name;
  }
  public function getEmployeeTitle() {
    return $this->title;
  }  
  public function getEmployeeProfile() {
    return $this;
  }  
  public function getEmployeeMonthlySalary($day) {
    return ($day/30)*$this->salary;
  }  
}
?>