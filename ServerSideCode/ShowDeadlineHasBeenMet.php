<?php
//Get database
include_once '../Database/Database.php';

        $conn = getConnection();
//Get data from form
$AppointmentName = $_POST['form-AppointmentName'];
//Selecting details of appointment from database
$sql1 = "SELECT appointmentId, notes, details, child_Name, date  FROM appointment where appointment_Name = '$AppointmentName'; ";



$resultsItems = mysqli_query($conn, $sql1);

                while($rowItems = mysqli_fetch_array($resultsItems)){

                    if ($resultsItems->num_rows > 0) {
                        //output data of each row
                        
                        //Details into variables
                            //$AppointmentId = $rowItems['appointmentId'];
                            $Notes = $rowItems['notes'];
                            $Details = $rowItems['details'];
                            $Child_Name = $rowItems['child_Name'];
                            $Date = $rowItems['date'];
                            
                            
                        }
                }
//Delete the appointment from appointment table                    
$sql2 = "DELETE FROM Appointment WHERE appointment_Name = '$AppointmentName'" ;
if ($conn -> query($sql2) === TRUE) {
    echo "New record Deleted successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}


//Insert into completed appointment table
$sql2 = "INSERT INTO completedappointment (appointment_Name, notes, details, child_Name, date) VALUES('$AppointmentName','$Notes','$Details','$Child_Name', '$Date' )" ;
if ($conn -> query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
header("location: ../Child/ShowDeadlineHasBeenMet.php");