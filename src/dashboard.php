<?php
include("scripts.php");
if(isset($_SESSION['admin_id'])){

}
else{
   header("location:index.php");
}
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
      <link rel="stylesheet" href="style.css" />

      <title>Dashboard</title>
   </head>
   <body style="background-color: #cfe2ff" class="">
      <header>
         <nav class="w-100">
            <div class="container-fluid d-flex" style="justify-content: space-between; width: 95%; margin-right: auto">
               <div class="d-flex mt-2">
                  <i style="font-size: 30px" class="bi bi-file-earmark-music-fill icon-music "></i>
                  <h2>Musical Instruments</h2>
               </div>
               <div class="d-flex justify-content ">
                  <div class="d-flex" style="width: 30%">
                     <div class="d-flex mt-4 ">
                        <span style="width: 10px; height: 10px; display: flex" class="bg-success rounded-circle mt-2 me-1"></span>
                        <h5 class="me-2" ><?php echo $_SESSION["admin_last"]?></h5>  
                     </div>
                      
                     <div class="btn-group dropstart min-w-300px">
                        <img  class="rounded-circle mt-2 "style="width: 55px;"src="img/connecter.jpg " alt="" data-bs-toggle="dropdown" aria-expanded="false" />
                        <ul class=" dropdown-menu ps-2  ">
                            <li class="list-group-item"> <a  aria-pressed="true"  data-bs-toggle="modal" data-bs-target="#exampleModal1" href="">Show & Edit Account</a></li>
                           <hr>
                           <li class="list-group-item"> <a  aria-pressed="true"  data-bs-toggle="modal" data-bs-target="#exampleModal2" href="">Change password</a> </li>
                           <hr>
                           <li class="list-group-item"> <a aria-pressed="true"  data-bs-toggle="modal" data-bs-target="#exampleModal3" href="">Delete Account</a> </li>
                           <hr>
                           <li class="list-group-item"> <a href="logout.php">Log out</a> </li>
                           <hr>
                         </ul>
                     </div>
                     <!-- modal edit -->
                     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                              </div>
                              <div class="modal-body">
                                 <form id="form_modaal">
                                    <div class="row">
                                       <div class="input-group mb-3" >
                                          <input type="file" class="form-control" width="50px"  id="inputGroupFile02">
                                        </div>
                                    </div>
                                    <div class="mb-3 row" >
                                      <div  class="col-6"> <input type="text" class="form-control "  id="firstname" placeholder="nom"></div>
                                      <div class="col-6"> <input type="text" class="form-control" id=" secondename"  placeholder="prénom" /></div>
                                    </div>
                                    <div class="mb-3">
                                      <input type="email" class="form-control" width="100px" id="addressemail" placeholder="Address email ">
                                    </div>
                                    <div class="mb-3">
                                       <input type="password" class="form-control"  id="password" placeholder="Password">
                                    </div> 
                                 </form>
                              </div>
                              <div class="modal-footer" id="modal_footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary" onclick="ajouter()" data-bs-dismiss="modal">Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- modal Change password -->
                     <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
                              </div>
                              <div class="modal-body">
                                 <form id="form_modaal">
                                   
                                    <div class="mb-3">
                                      <input type="email" class="form-control" width="100px" id="addressemail" placeholder="Current Password ">
                                    </div>
                                    <div class="mb-3">
                                       <input type="password" class="form-control"  id="password" placeholder="New Password">
                                    </div> 
                                    <div class="mb-3">
                                       <input type="password" class="form-control"  id="password" placeholder="Retype Password">
                                    </div> 
                                 </form>
                              </div>
                              <div class="modal-footer" id="modal_footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary" onclick="ajouter()" data-bs-dismiss="modal">Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- modal delete account -->
                     <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabe3" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Delete account</h5>
                              </div>
                              <div class="modal-body">
                                 <form id="form_modaal">
                                   
                                    <h3 class="text-danger"> Do you want really to delete this account</h3>
                                 </form>
                              </div>
                              <div class="modal-footer" id="modal_footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                 <button type="button" class="btn btn-danger" onclick="ajouter()" data-bs-dismiss="modal">Yes</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <div class="d-flex">
         <!-- sidbar -->
         <aside class="ms-4 mt-4">
            <a class="row text-decoration-none text-black">
               <i class="col-1 bi bi-house-door-fill"></i>
               <span id="dashboard" class="ms-1 col-9">Dashboard</span>
            </a>
            <hr />
            <a class="row text-decoration-none text-black">
               <i class="col-1 bi bi-file-earmark-music-fill"></i>
               <span id="instruments" class="col-9 ms-1 col-9">Instruments</span>
            </a>
            <hr />
         
            <div class="text-center">
               <i id="right" class="bi bi-caret-right-square-fill" style="display: none" onclick="aside_right(event)"></i>
               <i id="left" class="bi bi-caret-left-square-fill" onclick="aside_left(event)"></i>
            </div>
         </aside>
         <section class="w-100 p-3">

            <div class="w-100 text-center">
               <div
                  style="
                     height: 120px;
                     width: 95%;
                     margin: auto;
                     background-image: url('img/piano-et-violon-837x400.png');
                     background-size: cover;
                     background-position: center;
                  "
               ></div>
            </div>
            <!-- cards -->
            <div class="row mt-4  mb-2 ms-4 justify-content-center" style="max-width: 97%;">
               <div class="col-12 col-md-3 ">
                  <div class="card">
                     <div class="card-header row">
                        <div class="col-8 "  data-bs-toggle="modal" data-bs-target="#exampleModal4" >
                           <h4 class="card-title">
                              $ <br />
                              Total Sales
                           </h4>
                        </div>
                        <div class="col-4">
                           <i style="font-size: 40px" class="bi bi-cart-check-fill"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- modal statistique -->
               <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div  class="modal-dialog modal-xl">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Total Sales</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <table class="table mt-4 rounded-2" style="background-color: #343a40; color: white">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Name</th> 
                                       <th scope="col">Price</th>
                                       <th scope="col">Quantity</th>
                                       <th scope="col">Total Price</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                       <td>@mdo</td>
                                       
                                       
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                       <td>@fat</td>
                                       
                                      
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           
                        </div>
                        <div class="modal-footer" id="modal_footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary" onclick="ajouter()" data-bs-dismiss="modal">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 ">
                  <div class="card">
                     <div class="card-header row">
                        <div class="col-8">
                           <h4 class="card-title">
                              10 <br />
                              Instruments
                           </h4>
                        </div>
                        <div class="col-4">
                           <i style="font-size: 40px" class="bi bi-file-music-fill"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 ">
                  <div class="card">
                     <div class="card-header row">
                        <div class="col-8"  data-bs-toggle="modal" data-bs-target="#exampleModal6">
                           <h4 class="card-title">
                              10 <br />
                              Admins
                           </h4>
                        </div>
                        <div class="col-4">
                           <i style="font-size: 40px" class="bi bi-people-fill"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div  class="modal-dialog modal-xl">
                     <div class="modal-content">
                        <div class="modal-header"  >
                           <h5 class="modal-title" id="exampleModalLabel"> Admins</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <table class="table mt-4 rounded-2" style="background-color: #343a40; color: white">
                                 <thead>
                                    <tr>
                                       <th scope="col">#    </th>
                                       <th scope="col">Name </th> 
                                       <th scope="col">Email</th>
                                       <th scope="col">Photo</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                      
                                       
                                       
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                       
                                       
                                      
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           
                        </div>
                        <div class="modal-footer" id="modal_footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary" onclick="ajouter()" data-bs-dismiss="modal">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-3 mb-2">
                  <div class="card">
                     <div class="card-header row">
                        <div class="col-8" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                           <h4 class="card-title">
                              $ <br />
                              Sales Today
                           </h4>
                        </div>
                        <div class="col-4">
                           <i style="font-size: 40px" class="bi bi-cash-coin"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- modal statistique today -->
               <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div  class="modal-dialog modal-xl">
                     <div class="modal-content">
                        <div class="modal-header"  >
                           <h5 class="modal-title" id="exampleModalLabel"> Sales Today</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              <table class="table mt-4 rounded-2" style="background-color: #343a40; color: white">
                                 <thead>
                                    <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Name</th> 
                                       <th scope="col">Price</th>
                                       <th scope="col">Quantity</th>
                                       <th scope="col">Total Price</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th scope="row">1</th>
                                       <td>Mark</td>
                                       <td>Otto</td>
                                       <td>@mdo</td>
                                       <td>@mdo</td>
                                       
                                       
                                    </tr>
                                    <tr>
                                       <th scope="row">2</th>
                                       <td>Jacob</td>
                                       <td>Thornton</td>
                                       <td>@fat</td>
                                       <td>@fat</td>
                                       
                                      
                                    </tr>
                                    <tr>
                                       <th scope="row">3</th>
                                       <td colspan="2">Larry the Bird</td>
                                       <td>@twitter</td>
                                    </tr>
                                 </tbody>
                              </table>
                           
                        </div>
                        <div class="modal-footer" id="modal_footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary" onclick="ajouter()" data-bs-dismiss="modal">Save</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="width: 95%; margin: auto">
               <div>
                  <button
                     style="background-color: #432874"
                     type="button"
                     class="btn btn-secondary active mt-4"
                     aria-pressed="true"
                     data-bs-toggle="modal"
                     data-bs-target="#exampleModal"
                  >
                     ADD+
                  </button>
                  <!-- Modal ADD -->
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ADD+</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form  action=""  method="POST"  enctype="multipart/form-data" id="form_modaal" >
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label" >Name:</label>
                                    <input type="text" class="form-control" id="name" size="60" maxlength="60"  name="name" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <textarea class="form-control" id="description" name="description"> </textarea>
                                 </div>
                                 <div class="mb-3">
                                    <label for="">Price:</label> <br />
                                    <input type="number" name="price" class="form-control" id="price" min="1" step=".01" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="date" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Photo</label>
                                    <input type="file" accept="image/png ,image/jpg, image/jpeg" name="image" id="image" name="photo"  >
                                 </div>
                             
                           </div>
                           <div class="modal-footer" id="modal_footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"  name="add" >Save</button>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>
               <div>
                  <!-- table -->
                  <div class=" table-responsive">
                  <table class="table mt-4 rounded-2" style="background-color: #343a40; color: white">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Name</th>
                           <th scope="col">Description</th>
                           <th scope="col">Price</th>
                           <th scope="col">Quantity</th>
                           <th scope="col">Image</th>
                           <th scope="col">Tools</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php 
                        $result = display($con);
                        while($row  =mysqli_fetch_assoc($result)){?>
                        <tr>
                           <th scope="row">1</th>
                           <td><?php echo $row["name"]?></td>
                           <td><?php echo $row["description"]?></td>
                           <td><?php echo $row["price"]?></td>
                           <td><?php echo $row["quantity"]?></td>                          
                           <td><img style="width:60px; "  src="img/<?php echo $row["image"]?>"></td>
                           <td class="d-flex"> <button data-bs-toggle="modal" data-bs-target="#exampleModal10" onclick="display(<?php echo $row['id'];?>,`<?php echo $row['name'];?>`,`<?php echo $row['description'];?>`,<?php echo $row['price'];?>,<?php echo $row['quantity']?>,`<?php echo $row['image'];?>`,<?php echo $row['id_admin'];?>);"  class="btn btn-primary">View & Edit </button> <form action="" method="POST"  >  <input type="hidden" name="id" value="<?php  echo $row['id'] ?> "> <button type="submit" name="delete" class="btn btn-danger">Delete</button></form></td>
                        </tr>
                        <?php } ?>
                       
                     </tbody>
                  </table>
                  </div>
                  <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabeL" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                              <form  action=""  method="POST"  enctype="multipart/form-data" id="form_modaal0" >
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label" >Name:</label>
                                    <input type="text" class="form-control " id="name10"   name="name" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <textarea class="form-control  "  id="description10"    name="description"> </textarea>
                                 </div>
                                 <div class="mb-3">
                                    <label for="">Price:</label> <br />
                                    <input type="number" name="price" class="form-control" id="price10" min="1" step=".01" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity10" />
                                 </div>
                                 <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Photo</label>
                                    <input type="file" accept="image/png ,image/jpg, image/jpeg" name="image" id="image10" name="photo"  >
                                    <input type="hidden" name="tmp_image" id="tmp_image">
                                    <input type="hidden" name="id_i" id="id_i">
                                 </div>
                             
                           </div>
                           <div class="modal-footer" id="modal_footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary"  name="edit" >Save</button>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
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
