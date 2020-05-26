<?php

     include "logic.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <!-- Bootstrap JS-->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

     <!--Fonts-->
     <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

     <!--Font Awesome-->
     <script src="https://kit.fontawesome.com/76f49c3c57.js" crossorigin="anonymous"></script>

     <!--My stylesheet-->
     <link rel="stylesheet" href="style.css">

     <nav class ="navbar navbar-dark navbar-expand-sm fixed-top bg-dark " style="background-color:#512DA8">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse" id="Navbar">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
      
     
  </ul>
  <span class="navbar-text">
      <a id="reachOutButton"> <span class="fa fa-sign-in"></span> Hospitals</a>
  </span>
    </div>
    </div>
</nav>
<div id="reachoutModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg " role="content">
      <div class="modal-content">
          <div class="modal-header bg-info">
              <h4 class="modal-title w-100 font-weight-bold text-center" style="color:black">Application for Appointment</h4>
              <button type="button" class="close" data-dismiss="modal">
                  &times;
              </button>
          </div>
          <div class="modal-body">
            
              <form action="hospital_handler.php" method="POST">
                  <div class="row text-center">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Name" name="patientname" required>
                      </div>
                  </div>
                  
                      <div class="row"> 
                          <div class="col">
                          <input type="text" class="form-control"  placeholder="Last Name" name="lastname" required>
                        </div>
                      </div>

                      <div class="row"> 
                          <div class="col">
                          <input type="text" class="form-control"  placeholder="Age" name="age" required>
                        </div>
                      </div>

                       <div class="form-group">
                          
                          <select class="form-control" name="hospital" id="hospital" size="5" required>
                              <option selected hidden value="">Select Hospital</option>
                              <option value="yashodaHospital">Yashoda Hospital</option>
                              <option value="apolloHospital">Apollo Hospital</option>
                              <option value="mamathaHospital">Mamatha Hospital</option>
                              <option value="maxHospital">Max Hospital</option>
                              <option value="vasanHospital">Vasan Eye Care Hospital</option>
                              <option value="prasadHospital">Prasad Neuro Hospital</option>
                              <option value="kamineniHospital">Kamineni hospital</option>
                              <option value="sunshineHospital">Sunshine Hospital</option>
                              <option value="legendHospital">Legend Hospital</option>
                              <option value="asianHospital">Asian Hospital</option>
                          </select>
                        </div>

                  
                      <div class="row text-center">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Department" name="department" required>
                          </div>
                      </div>
                     
                      <div class="row"> 
                          <div class="col">
                          <input type="text" class="form-control"  placeholder="Contact No." name="phone" required>
                        </div>
                      </div>

                      <div class="row"> 
                          <div class="col">
                          <input type="text" class="form-control"  placeholder="email id" name="email" required>
                        </div>
                      </div>

                      
                      <div class="row">
                          
                          <div class="col">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="m">
                                  <label class="form-check-label form-font" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="f">
                                  <label class="form-check-label form-font" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="o">
                                  <label class="form-check-label form-font" for="inlineRadio3">Other</label>
                                </div>
                                                                                                           
                          </div>
                       </div>
                     
                       
                  
                 
                 
                   <div class="form-group row">
                      <div class="col-sm-10 offset-sm-2">
                          
                          <button type="button" class="btn btn-secondary btn-lg ml-auto align-self-center" data-dismiss="modal">Cancel</button>
                                     
                         
                          <button type="submit" class="btn btn-success btn-lg ml-1">
                             Make Appointment
                          </button>
                      </div>
                  </div>
              
              </form>
          
              
          </div>


      </div>
  </div>
</div>
     <title>Covid-19 Tracker</title>
     </head>
     <body>
        <div class="container-fluid bg-light p-5 text-center my-3">
             <h1>A Tracker of Covid-19</h1>
             <h5 class="text-muted">A project to give a small solution to community based while in this huge crisis we are in as Covid-19. A form to get 
                 easily access to nearby hospitals around for an appointment to make it easy for the people who wants to make an appointment with doctor. 
                 It is very useful in this needy times and this is the better solution to avoid rush in hospitals. And make appointments when less people are there 
                 and tyr to avoid rush.<br> 
                <h4 class="text-info"> And also this website helps us to keep upto date about the corona cases throughout the world wide.</h4>
             </h5>
        </div>

   <div class="container my-5">
       <div class="row text-center">
           
       <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
           </div>
           <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
           </div>
           <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
           </div>
       </div>
   </div>

   <div class="container bg-light p-3 my-3 text-center">
       <h5 class="text-info">"Lockdown is the only solution we have for this pandemic"</h5>
       <p class="text-muted">Stay Indoors and Stay Safe</p>
   </div>

        <div class="container-fluid">
           <table class="table">
              <thead class="thead-dark">
                  <tr>
                       <th scope="col">Countries</th>
                       <th scope="col">Confirmed</th>
                       <th scope="col">Recovered</th>
                       <th scope="col">Deceased</th>
                       
                  </tr>
                </thead>
                <tbody>
                   <?php 
                       foreach($data as $key => $value){
                           $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>
                        <tr>
                              <th> <?php echo $key;?> </th>
                              <td>
                                 <?php echo $value[$days_count]['confirmed'];?>
                                 <?php if($increase != 0){?>
                                    <small class="text-danger pl-3"> <i class="fas fa-arrow-up"></i> <?php echo $increase;?></small>

                                 <?php }?>
                                 
                                </td>
                                <td>
                                 <?php echo $value[$days_count]['recovered'];?>
                                </td>
                                <td>
                                 <?php echo $value[$days_count]['deaths'];?>
                                </td>
                        </tr>


                    <?php   }?>
                </tbody>
            </table>
        </div> 
        <footer class="footer bg-light">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay<br>
		              <br>
		              <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@hospital.net">gracieux@hospital.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Gracieux</p>
                </div>
           </div>
        </div>
    </footer>
     </body>
     
     <!--Watson Assistant-->
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "adf649a9-eaff-4a64-9007-2b3ff6899b1a", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "94d044d6-8c76-4f28-a5e0-26ca713c0c30", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
     <script>
  $("#reachOutButton").click(function(){
      $('#reachoutModal').modal('toggle')
  });
  
  
  </script>
     
     </html>