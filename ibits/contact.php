<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/73ad4c78b8.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="design/index_style.css">
    <link rel="stylesheet" href="design/register_style.css">
  <link rel="stylesheet" href="design/contact_style.css">
  
    <title>IBITS WEB PAGE</title>
</head>
<body>
    

<div class="wrapper">
    <!-- nav bar -->
    <nav class="main-nav">
        <ul>
            <li> <a href="index.php"> <i class="fas fa-home fa-1x"></i> Home</a> </li>
            <li> <a href="events.php"> <i class="fas fa-calendar-alt fa-1x"></i> Event</a> </li>
            <li> <a href="AboutUs.php"> <i class="fas fa-toolbox fa-1x"></i> About Us</a> </li>
            <li> <a href="contact.php"> <i class="fas fa-address-book fa-1x"></i> Contact</a> </li>
        </ul>
    </nav> 

</div>
      <section class="top-container1">
        <header class="showcase1">
            <h1> Contact Us </h1>
            <p> If you have inquiries or other questions, please fill out the following form to contact us or send email to ibits.pupbc@gmail.com. Thank you. </p>
 
                     <div>
                       <h5>Name: </h5>
                       <input type="text" id="f_name" name="f_name" placeholder="Enter Name: ">
                   </div>
                   <div>
                       <h5>Email:</h5>
                       <input type="text" id="email" name="email" placeholder="Enter Email: ">
                   </div>
                   <div>
                       <h5>Subject:</h5>
                       <input type="text"  id="sub_ject"  name="sub_jec" placeholder="Enter Subject: ">
                   </div>
                   <div>
                       <h5>Body:</h5>
                       <input type="text" id="body"   name="body" placeholder="Enter your inquiries" >
                   </div>
            <div class="submitBttn">
              <button id="submit" class="btnSubmit" onclick="return validate();" name="insertSub"> SUBMIT  </button>
            </div>
        </header>

<script type="text/javascript"  src="script/validation.js"></script> 
<script type="text/javascript"  src="script/contact_modal.js"></script>
 
</body>
</html>