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
      <link rel="stylesheet" href="style.css" />

      <title>Login</title>
   </head>
   <body>
    <header>
    <nav class="bg-white">
            <div class="container-fluid d-flex justify-content-between">
               <div class="d-flex">
                  <i class="bi bi-file-earmark-music-fill icon-mesuc"></i>
                  <h3>Musical Instruments</h3>
               </div>
               <form class="d-flex ">
                  <button  id="btnup" class="btn btn-primary"   type="submit" onclick=" show_Sign_up(event)">Sign-up</button>
                  <button style="display:none ;" id="btnin" class="btn btn-primary ms-2" type="submit" onclick="show_Sign_in()">Sign-in</button>
               </form>
            </div>
         </nav>
    </header>
    <aside></aside>
    <section></section>
    <footer></footer>
     

      <script src="page.js"></script>
   </body>
   <!-- JavaScript Bundle with Popper -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
   ></script>
</html>
