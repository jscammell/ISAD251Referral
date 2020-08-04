<?php
//Get database
include_once '../Database/Database.php';

        $conn = getConnection();
//Get data from form
$AppointmentName = $_POST['form-AppointmentName'];
$Notes = $_POST['form-Notes'];
$Details = $_POST['form-Details'];
$ChildName = $_POST['form-ChildName'];
$Date = $_POST['form-Date'];
//Create new appointment
$sql = "INSERT INTO appointment (appointment_Name, notes, details, child_Name, date) VALUES('$AppointmentName','$Notes','$Details','$ChildName', '$Date' )" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/CreateFamilydeadline.php");