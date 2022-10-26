<?php
include 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $employeeName = $_POST['employee_name'];
    $employeeId = $_POST['employee_id'];
    $employeeDesignation = $_POST['employee_designation'];
    $employeeSalary = $_POST['employee_salary'];
    $employeeGender = $_POST['employee_gender'];
    $employeeDepartment = $_POST['employee_department'];
    $employeeContact = $_POST['employee_contact'];
    $employeeEmail = $_POST['employee_email'];
    $employeeAddress = $_POST['employee_address'];
    $employeeCity = $_POST['employee_city'];
    $employeeCountry = $_POST['employee_country'];
}

$sql = "UPDATE `employee` SET `employee_name`='$employeeName',`employee_id`='$employeeId',`employee_designation`='$employeeDesignation',`employee_salary`='$employeeSalary',`employee_gender`='$employeeGender',`employee_department`='$employeeDepartment',`employee_contact`='$employeeContact',`employee_email`='$employeeEmail',`employee_address`='$employeeAddress',`employee_city`='$employeeCity',`employee_country`='$employeeCountry' WHERE `id`= '$id'";


$result = $conn->query($sql);

if ($result == TRUE) {
    echo "Record updated successfully.";
} else {

    echo "Error:" . $sql . "<br>" . $conn->error;
}