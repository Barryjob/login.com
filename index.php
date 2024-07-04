<?php include 'config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php';?> 
<title><?php echo $thename?> | Federal Home Care Family Grant Support Program </title>
<meta name="keywords" content="<?php echo $thename?>, Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions" />
<meta name="description" content="The beacon of Nigeria's rich heritage, transforming the landscape of culture, tourism, and hospitality by fostering sustainable practices, celebrating diversity, and creating immersive experiences that leave an indelible mark on the global stage."/>

<meta property="og:title" content="<?php echo $thename?> | Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/FIRST-HERITAGE-CULTURE-1.jpg"/>
<meta property="og:description" content="The beacon of Nigeria's rich heritage, transforming the landscape of culture, tourism, and hospitality by fostering sustainable practices, celebrating diversity, and creating immersive experiences that leave an indelible mark on the global stage."/>

<meta name="twitter:title" content="<?php echo $thename?> | Tourism, culture, travel, heritage, history, attractions, destinations, landmarks, cultural events, museums, art, architecture, local traditions"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/FIRST-HERITAGE-CULTURE-1.jpg"/> 
<meta name="twitter:description" content="The beacon of Nigeria's rich heritage, transforming the landscape of culture, tourism, and hospitality by fostering sustainable practices, celebrating diversity, and creating immersive experiences that leave an indelible mark on the global stage."/>

<link rel="stylesheet" type="text/css" href="<?php echo $website_url?>/style/style.css" /> 

<body>


 <section class="background">
   <div class="background-in">
      <div class="body-in">
         
       <div class="body-one">
         <div class="home-log">
            <span> <a href="index.php"><i class="bi bi-house-door-fill">HOME PAGE</i></a></span> |  <span><a href="index.php"><i class="bi bi-person-fill-lock">LOG-IN </i></a></span>

         </div>
            <div class="text-logo">
               <div class="text-div">
                  <h1>AfooTech Login System Administration Portal</h1>
                  <hr>
               </div>
               <div class="logo">
               <img src="all-image/body-image/afootech logo2.png" alt="">
               </div>
            </div>
         </div>



         <div class="body-two">
            <div class="reset-main-div">

               <div class="logo-div">
                  <div class="main-logo-div">
                     <img src="all-image/body-image/afoologo.jpg" alt="">
                  </div>
               </div>

               <div class="login-details">
                  <span><i class="bi bi-person-circle"></i>Administrative Log-in</span>
                  <hr>
               </div>
               
                  
               <div class="form-div" id="next_1">
                  <form action="">
                     <i class="bi bi-person"></i>
                     <label for="email">Email Address:</label>
                     <input type="text" id="email" name="email" placheholder=" e.g barrygodlikej@gmail">
                     <br><br>
                     <i class="bi bi-lock"></i>
                     <label for="password">Password:</label> 
                     <input type="password" id="password" name="password">
                  </form>
               
                  <a href=""><button>Log-In</button></a>
               </div>

              
               <div class="forget-reset">
               <div class="text">Forget Password?<span>Reset Password</span></div> 
               </div>

            </div>




            <!-- <div class="reset-main-div">

               <div class="login-details">
                  <span><i class="bi bi-person-circle"></i>RESET PASSWORD</span>
                  <hr>
               </div>

                  
               <div class="form-div" id="next_2">
                  <form action="">
                     <i class="bi bi-person"></i>
                     <label for="email">Email Address:</label>
                     <input type="text" id="email" name="email" placheholder=" e.g barrygodlikej@gmail">
                  </form>

                  <a href=""><button>Proceed</button></a>
               </div>


               <div class="forget-reset">
               <div class="text"> Existing User?<span>Login Here</span></div> 
               </div>

            </div> -->





         </div>
            
            <?php include 'footer.php'?>
      </div>
                           
   </div>
 </section>
 
</body>
</html>