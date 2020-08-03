<?php

include_once '../Database/Database.php';

        $conn = getConnection();

$AppointmentName = $_POST['form-AppointmentName'];


$sql = "DELETE FROM Appointment WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/CancelAppointment.php");