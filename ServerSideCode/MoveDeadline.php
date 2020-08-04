<?php
//Get database
include_once '../Database/Database.php';

        $conn = getConnection();
//Get data from form
$AppointmentName = $_POST['form-AppointmentName'];
$Date = $_POST['form-Date'];
//Update the appointment from the database
$sql = "UPDATE appointment SET date='$Date' WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Child/MoveDeadline.php");

