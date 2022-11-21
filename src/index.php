<?php
include("scripts.php");

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=l, initial-scale=1.0" />
      <!-- CSS only -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
         crossorigin="anonymous"
      />
      

      <title>Login</title>
   </head>
   <body style="background-color:#cfe2ff" ; class="">
      <header>
         <nav class="bg-white">
            <div class="container-fluid d-flex justify-content-between">
               <div class="d-flex">
                  <i style="font-size:22px ;" class="bi bi-file-earmark-music-fill icon-mesuc"></i>
                  <h3>Musical Instruments</h3>
               </div>
               <form class="mt-1">
                  <button  id="btnup" class="btn btn-primary btn-sm"   type="submit" onclick=" show_Sign_up(event)">Sign-up</button>
                  <button style="display:none ;" id="btnin" class="btn btn-primary btn-sm" type="submit" onclick="show_Sign_in()">Sign-in</button>
               </form>
            </div>
         </nav>
      </header>
      <aside>

      </aside>
      
      <section class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      
        <div class=" row gx-lg-5 align-item-center mb-5">
         <div class="col-lg-6 mb-5 mb-lg-0 ">
            <div class="" >
             <h1 class="ms-3 mb-5">
                <span class="ms-5">Welcome To</span> <br>
                Musical Instruments
              </h1>
            </div>
             <p>
                Is there anyone who does not like music?Have you ever had a <br />
                time when you were listening to a song and wondered what <br />
                instrument was being played? Well, for all those interested in <br />
                music, and all those keen on learning the names of all the <br />
                musical instruments, this article would be a treat. Check out <br />
                the article, build your vocabulary and have fun learning about <br />
                the different musical instruments.
             </p>
         </div>
        <!-- form Sign in -->
         <form id="signin" action=""  method="POST"   class=" bg-white col-lg-5  mb-lg-0 position-relative  p-4">
            <div class="row mb-3 ">
                
              <div class="">
                <input type="email" class="form-control" name="emailaddressi" onkeyup="validate_email()" id="emailaddressi"> 
                <label class="">Email address</label> 
                <span class="text-danger"  id="erreuremailin" style="display:none"> email not exact</span>
                <span class="text-success"  id="successemailin" style="display:none">email Exact</span>
              </div>
             
            </div>
            <div class="row mb-3">
              <div class="">
                <input type="password" class="form-control" name="passwordi" onkeyup="validate_pw()" id="passwordi">
                <label >Password</label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="">
                  <a href="">Mot de passe oublié?</a> 
              </div>
            </div>
            <button type="submit" name="sign-in" class="btn btn-primary" id="btnbuttonin" disabled>Sign in</button>
         </form>
         <!-- form Sign up -->
         <form action="index.php" method="POST" style="display:none ;" id="signup" class=" bg-white col-lg-5  mb-lg-0 position-relative  p-4">
            <div class="row  ">
                
               <div class="col-6">
                 <input type="text" class="form-control" onkeyup="validate_first()" id="firstnameu" name="firstname"> 
                 <label class="">First Name</label> 
                 <span class="text-danger"  id="erreurfirst" style="display:none"> firstname not exact</span>
                 <span class="text-success"  id="successfirst" style="display:none">firstname Exact</span>
               </div>
               <div class="col-6">
                 <input type="text" class="form-control" onkeyup="validate_last()" id="lastnameu" name="lastname"> 
                 <label class="">Last Name</label> 
                 <span class="text-danger"  id="erreurlast" style="display:none"> lastname not exact</span>
                 <span class="text-success"  id="successlast" style="display:none">lastname Exact</span>
               </div>
      
            <div class="row mb-3 ">
                
              <div class="">
                <input type="email" class="form-control" onkeyup=" validate_emailu()" id="emailaddressu" name="emailaddress"> 
                <label class="">Email address</label> 
                <span class="text-danger"  id="erreuremail" style="display:none"> email not exact</span>
                <span class="text-success"  id="successemail" style="display:none">email Exact</span>
              </div>
            </div>
            <div class="row mb-3">
              
              <div class="">
                <input type="password" class="form-control" onkeyup="validate_pwu()" id="passwordu" name="password">
                <label >Password</label>
                <span class="text-danger"  id="erreurpass" style="display:none"> Password not exact</span>
                <span class="text-success"  id="successpass" style="display:none">Password Exact</span>
              </div>
              <div class="">
               <input type="password" class="form-control" onkeyup="validate_rpwu()" id="retypepasswordu" name="retypepassword">
               <label > Retype Password</label>
               <span class="text-danger"  id="erreurpassword" style="display:none"> Password dont Match</span>
               <span class="text-success"  id="successpassword" style="display:none">Password Match</span>
             </div>
            </div>
            <button type="submit" class="btn btn-primary" name="sign-up" id="btnbuttomup" disabled>Sign up</button>
          </form>
        </div>
        </form>
      </section>
      <footer></footer>
      <script src="scripts.js"></script>
   </body>
   <!-- JavaScript Bundle with Popper -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
   ></script>
</html>
