<?php
include "config.php";


if (isset($_POST['submit'])) {
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


    $sql = "INSERT INTO `employee`(`employee_name`, `employee_id`, `employee_designation`, `employee_salary`, `employee_gender`, `employee_department`, `employee_contact`, `employee_email`, `employee_address`, `employee_city`, `employee_country`) VALUES ('$employeeName','$employeeId','$employeeDesignation','$employeeSalary','$employeeGender','$employeeDepartment','$employeeContact','$employeeEmail','$employeeAddress','$employeeCity','$employeeCountry')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}