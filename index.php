<?php
  include ("employee.php");
  $employee = new Employee();
  $employee->setEmployeeName("Bagong");
  echo  json_encode($employee->getEmployeeProfile());
?>