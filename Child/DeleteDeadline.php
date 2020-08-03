<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>Create Deadline For Family</title>
        
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

    </head>
    
    
    <body>
        
        <!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome <strong></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class=""></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>    
    <a href="../Home/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Home</a>
    <a href="../Parent/Parent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Parent</a>
    <a href="../Child/Child.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Child</a>
    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Appointment Tracker and Manager</b></h5>    
  </header>
  
  

  <div class="w3-row-padding w3-margin-bottom">
    
    <h1 style="color: black;"> Delete Deadline</h1>

            <form method="post" action="ProcessAccountAdmin.php" id="CreateFamilyDeadline" >
            <br>
            <label for="Appointment_Name">Appointment Name</label>
            <br> 
            <input type="text" id="form-AppointmentName" placeholder="Appointment Name..."  name="formAppointmentName" >
            <br>             
            <br>

            <input type="submit" value="Submit" class="btn btn-info">  
      
</div>
  

 
      

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    
  </footer>

  <!-- End page content -->
</div>



<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
