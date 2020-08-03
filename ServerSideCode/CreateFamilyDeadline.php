<?php

include_once '../Database/Database.php';

        $conn = getConnection();

$AppointmentName = $_POST['form-AppointmentName'];
$Notes = $_POST['form-Notes'];
$Details = $_POST['form-Details'];
$ChildName = $_POST['form-ChildName'];
$Date = $_POST['form-Date'];

$sql = "INSERT INTO appointment (appointment_Name, notes, details, child_Name, date) VALUES('$AppointmentName','$Notes','$Details','$ChildName', '$Date' )" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/CreateFamilydeadline.php");