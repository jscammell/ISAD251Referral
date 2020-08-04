<?php
//get database
include_once '../Database/Database.php';

        $conn = getConnection();
//get data from the form
$AppointmentName = $_POST['form-AppointmentName'];
$notes = $_POST['form-Notes'];
//Add the new note onto the end og the existing notes
$sql = "UPDATE appointment SET notes = CONCAT(notes, ' $notes') WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/AddNotesToPreviousAppointments.php");

