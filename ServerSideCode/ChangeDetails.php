<?php
//Get database
include_once '../Database/Database.php';

        $conn = getConnection();
//get data from the form
$AppointmentName = $_POST['form-AppointmentName'];
$Details = $_POST['form-Details'];
//Update details
$sql = "UPDATE appointment SET details='$Details' WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location: ../Parent/ChangeDetails.php");

