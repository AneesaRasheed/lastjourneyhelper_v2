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
        services section start
 ========================================  -->

 <section class="section section-offer">
  <div class="container">
  <h2 class="common-heading">Service Offers</h2>
  <p>We offer Catering,ambulance,Bouquet,Shroud,graveyard and<br> death
announcement service.Our goal is to provide comprehension<br> and reliable
services to customers in the areas of mirpur.</p>
 </div>
 <!-- servies offers card -->
 <div class="container grid grid-three-column">
  <div class="service-box">
  <ion-icon name="mic-outline" class="service-icon"></ion-icon>
  <h3> Announcement of death</h3>
  <p>The 'Announcement of Death' service is a quick and easy way to inform friends and relatives about the death.</p>
  </div>
  <div class="service-box">
  <ion-icon name="car-outline" class="service-icon"></ion-icon>
  <h3>Ambulance service</h3>
  <p>Our 'Ambulance Service' makes sure that your loved 
    ones have a dignified and easy travel at funerals. </p>
  </div>
  <div class="service-box">
  <ion-icon name="flower-outline" class="service-icon"></ion-icon>
  <h3> Bouquet service</h3>
  <p> we are Offering  'Bouquet Service' to express condolences and support. </p>
  </div>
  <div class="service-box">
  <ion-icon name="restaurant-outline" class="service-icon"></ion-icon>
  <h3> Catering service</h3>
  <p>Our "catering service" To provide a meal to the relatives and friends who attended the funeral ceremony. </p>
  </div>
  <div class="service-box">
  <ion-icon name="battery-dead-outline" class="service-icon"></ion-icon>
  <h3> Graveyard service</h3>
  <p>Our "Graveyard Service"  helps  the commitee for the reservation of grave. </p>
  </div>
  <div class="service-box">
  <ion-icon name="female-outline" class="service-icon"></ion-icon>
  <h3>Shroud service</h3>
  <p>We offering  "Shroud Service"  to provide shroud and essentials for the deceased. </p>
  </div>
</div>
</section>
<?php
include('footer.php');
?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>