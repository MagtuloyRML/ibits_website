<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>About Us</title>
    <link rel="stylesheet" href="design/AboutUs.css">
    <link rel="stylesheet" href="design/index_style.css">
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
        <section class="top-container">
        <header class="showcase1">
            <h1>About Us</h1>
            <p id = "readless" class = "readless">
                 PUP Biñan established in 2010, it has six (6) different group organizations and one of them is Institute of Bachelors in Information Technology Studies or also known as IBITS. IBITS is composed of all BSIT and DICT students in PUP Biñan.<span id = "dots"> ... </span></p>
            <p id = "readmore" class = "readmore">         
                We created this website for all incoming BSIT and DICT freshmen. This website can help them to
                register online and be a member of IBITS organizations

                <br><br>
                
                Want to know more about IBITS?
            </p>
             <div class="skills">
                <button id = "Read" onclick = "Read()">Read More</button>
            </div>
            <div class = "social">
                <a href = "https://www.facebook.com/iBITS.Official"><i class="fab fa-facebook-f"></i></a>
                <a href = "https://www.instagram.com/ibits_pupbc"><i class="fab fa-instagram"></i></a>
                <a href = ""><i class="far fa-envelope"></i></a>
            </div>
        </div>
        </header>
    </section>

    <script>
    var i = 0;
    var readmore = document.getElementById('readmore');
    var dots = document.getElementById('dots');
    var btn = document.getElementById('Read');
    function Read()
    {
        if(i==0)
        {
        readmore.style.display = "block";
        dots.style.display="none";
        btn.innerHTML="Read Less";
        i=1;
        }
        else
        {
        readmore.style.display = "none";
        dots.style.display="block";
        btn.innerHTML="Read More";
        i=0;
        }
    }
    </script>
 
</body>
</html>
