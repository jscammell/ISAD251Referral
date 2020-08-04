<?php
//Get database
include_once '../Database/Database.php';

        $conn = getConnection();
//Get data from form
$AppointmentName = $_POST['form-AppointmentName'];

//Delete appointment from database
$sql = "DELETE FROM Appointment WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Child/DeleteDeadline.php");