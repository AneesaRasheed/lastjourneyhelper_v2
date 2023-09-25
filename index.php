<?php
include('config.php');
include('header.php');
$firstName = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>last journey</title>
    <link rel="stylesheet" href="CSS/style.css?v=<?=$version?>"/>
    <script defer  src="index.js?v=<?=$version?>"></script> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css?v=2' rel='stylesheet'>
</head>
<body>
<!-- ======================================== 
          Our main hero section  
    ========================================  -->
<main>
<section class="section-hero section">
  <div class="container grid grid-two-column">
       <div class="section-hero-data">
       <p class="hero-top-data"><?php echo 'welcome'.' ' .$firstName.' to our website' ?></p>
         <h1 class="hero-heading">last journey helper</h1>
         <p class="hero-para">
         we are Providing Caring Funeral Support to Committees in Mirpur, Azad Kashmir.
          </p>
          <div>
          <a href="#" class="btn request-btn">Request me</a>
        </div>
      </div>
            <!--hero section right side-->
            <div class="section-hero-image">
            <img src="images/grave.jpeg"  
            width="500" height="500" alt="this is grave" class="hero-image" loading="lazy">
            <!-- <img src="images/funerallogo.jpeg"  
            data-src="images/grave.jpeg"
            width="500" height="500" alt="this is grave" class="hero-image" loading="lazy"> -->
            </div>
          </div>
</section>
</main>
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
<!-- ======================================== 
        contact us section start
 ========================================  -->
 <section class="section section-contact">
  <div class="container">
 <h2 class="common-heading">Contact Us</h2>
 </div>
 <div class="section-contact-main contact-container">
  
 <?php
 

// contact form
$con=mysqli_connect('localhost','root','','final_year_project');
if(isset($_POST["submitcontactform"])){
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email1=$_POST["email"];
    $mess=$_POST["message"];
   $contactform="INSERT INTO `contactform`(`name`, `phone`, `email`, `message`) VALUES (' $name',' $phone',' $email1',' $mess')";
    $query=mysqli_query($con,$contactform);
    if($query==true){
        echo"<p class='contactthankyou'>Thank you for taking the time to contact us.</p>";
    
    }
}
else{
?>
 <form  method="POST">
 <div class="grid grid-two-column">
  <div>
    <input type="text"  placeholder="Name" name="name">
</div>
   <div>
        <input type="phone" placeholder="Phone" name="phone">
        </div>
        </div>
        <div>
        <input type="Email"  placeholder="Email" name="email">
        </div>
        <div>
        <textarea  name="message" rows="5" cols="77" placeholder="Message"></textarea>
        </div>

  <input type="submit" name="submitcontactform"  value="Send message" class="btn"></input>

  
 </form>
 <?php }?>
</div>
</section>
<?php
include('footer.php');
?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>




