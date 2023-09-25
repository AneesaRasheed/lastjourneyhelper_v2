<?php
include('header.php');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>last journey</title>
    <link rel="stylesheet" href="CSS/style.css?v=<?=$version?>"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css?v=2' rel='stylesheet'>
</head>
<body>
<!-- ======================================== 
                  about
 ========================================  -->
 <main>
<section class="section-hero section">
  <div class="container grid grid-two-column">
       <div class="section-hero-data">
        <!-- <p class="hero-top-data">welcome</p> -->
         <h1 class="common-heading">About Us</h1>
         <p class="hero-para">
   Welcome to Last Journey Helper v2. We are here to offer essential services that support 
        you during sensitive moments. Our comprehensive range of offerings includes catering,
         ambulance assistance, bouquet arrangements, shroud services, graveyard management, 
         and death announcements. With a focus on compassion and care, we aim to provide 
         assistance that eases the challenges you face. Thank you for choosing Last Journey Helper v2.</p>

          <div>
          <a href="service.php" class="btn request-btn">Services</a>
        </div>
      </div>
            <!--hero section right side-->
            <div class="section-hero-image">
            <img src="images/about1.png"  
           
            width="300" height="300" alt="this is grave" class="hero-image" loading="lazy">
            </div>
          </div>
</section>
</main>

<?php
include('footer.php');
?>
</body>
</html>