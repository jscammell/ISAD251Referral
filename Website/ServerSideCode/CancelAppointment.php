<?php
//get the database
include_once '../Database/Database.php';

        $conn = getConnection();
//get data from the form
$AppointmentName = $_POST['form-AppointmentName'];

//Deleting from appointment
$sql = "DELETE FROM Appointment WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/CancelAppointment.php");