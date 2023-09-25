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
<div class="create-account">

 <div class="container">
 

    <form  method="POST"  >
            <h2>Create an Account</h2>
            <div>
            <label>First Name</label><br>
            <p id="firsterr" class="error"></p>
               <input type="text" placeholder="e.g Aneesa" name="firstname" pattern="[A-Za-z]+" id="valid01" autocomplete="off"   value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname'];}?>">
               
             
              </div>
            <div>
                <label>Last Name</label><br>
                <p id="lasterr" class="error"></p>
                <input type="text" placeholder="e.g Rasheed"  name="lastname"  id="valid02" autocomplete="off"  value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname'];}?>">
               
              </div>
          <!-- Email Address -->
          <div>
      <label>Email Address</label><br>
       <p id="emmail" class="error"></p>
      <input type="text" placeholder="e.g xyz@example.com" name="email" id="valid03" autocomplete="off" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];}?>">
    </div>


              <!-- Password -->
             <div>
             <label>Password</label><br>
             <p id="ppassword" class="error"></p>
             <input  type="password"  placeholder="Password" name="password" id="valid04" value="<?php if(isset($_POST['password'])) { echo $_POST['password'];}?>">
            </div>

               <div>
                <label>City</label><br>
                <p id="cityl" class="error"></p>
                <input type="text" placeholder="city" name="city"  autocomplete="off" id="valid05" value="<?php if(isset($_POST['city'])) { echo $_POST['city'];}?>"> 
               </div>
               <div>
                <label>Address</label><br>
                <p id="address1" class="error"></p>
                <input type="text" placeholder="Address" name="address"  autocomplete="off" id="valid06"  value="<?php if(isset($_POST['address'])) { echo $_POST['address'];}?>">
              </div>
               <div>
                <label>Postol code</label><br>
                <p id="postolcodeer" class="error"></p>
                <input type="text" placeholder="Address" name="postolcode"  autocomplete="off" id="valid07"  value="<?php if(isset($_POST['postolcode'])) { echo $_POST['postolcode'];}?>">
              </div>
               <div>
               <label>Phone</label><br>
               <p id="phoneerr" class="error"></p>
                <input type="text" placeholder="Address" name="phone"  autocomplete="off"  id="valid08" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone'];}?>">
               </div>
            <button type="submit" name="create" class="btn-create" >CREATE</button>
        </form>
    </div> 
</div> 


    <?php
include('footer.php');
?>


</body>
</html>

 
