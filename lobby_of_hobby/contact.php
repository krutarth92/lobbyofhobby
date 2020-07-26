<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Lobby Of Hobby | Contact</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="css/swiper.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="site-wrap">
         <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
               <div class="site-mobile-menu-close mt-3">
                  <span class="icon-close2 js-menu-toggle"></span>
               </div>
            </div>
            <div class="site-mobile-menu-body"></div>
         </div>
         <header class="site-navbar py-3 border-bottom" role="banner">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-6 col-xl-2" data-aos="fade-down">
                     <h1 class="mb-0"><a href="index.html" class="text-black h4 mb-0">Photon</a></h1>
                  </div>
                  <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                     <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                           <li><a href="index.html">Home</a></li>
                           <li class="has-children">
                              <a href="javascript:void(0);">Gallery</a>
                              <ul class="dropdown">
                                 <li><a href="single.php?id=landscape">Naure & Scapes</a></li>
                                 <li><a href="single.php?id=portrait">People & Portraits</a></li>
                                 <li><a href="single.php?id=architecture">Architecture</a></li>
                                 <li><a href="single.php?id=streets">Streets</a></li>
                                 <li><a href="single.php?id=object">Objects</a></li>
                              </ul>
                           </li>
                           <li><a href="about.html">About</a></li>
                           <li class="active"><a href="contact.php">Contact</a></li>
                           <li><a href="blog.html">Blog</a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                     <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                           <li>
                              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                           </li>
                           <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                           </li>
                           <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                           </li>
                           <li>
                              <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                           </li>
                        </ul>
                     </div>
                     <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  </div>
               </div>
            </div>
         </header>
         <div class="site-section" data-aos="fade">
            <div class="container-fluid">
               <div class="row justify-content-center">
                  <div class="col-md-7">
                     <div class="row mb-5">
                        <div class="col-12 ">
                           <h2 class="site-section-heading text-center">Contact Us</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-8 mb-5">
                           <form name="frmContact" id="" frmContact="" method="post" action="" enctype="multipart/form-data"
                              onsubmit="return validateContactForm()">
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <label class="text-black" for="fname">Your Name</label>
                                    <span id="userName-info" class="info"></span><br /> 
                                    <input type="text" name="name" class="form-control" id="userName">
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label> 
                                    <span id="userEmail-info" class="info"></span><br />
                                    <input type="email" name="email" class="form-control" id="userEmail">
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label> 
                                    <span id="subject-info" class="info"></span><br /> 
                                    <input type="subject" name="subject" class="form-control" id="subject">
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label> 
                                    <span id="userMessage-info" class="info"></span><br />
                                    <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                 </div>
                              </div>
                              <div class="row form-group">
                                 <div class="col-md-12">
                                    <input type="submit" name="send" class="btn btn-primary py-2 px-4 text-white" value="Send Message" />
                                    <div id="statusMessage">
                                       <?php
                                          if (! empty($message)) {
                                              ?>
                                       <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                                       <?php
                                          }
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-lg-3 ml-auto">
                           <div class="mb-3 bg-white">
                              <p class="mb-0 font-weight-bold">Facebook Page</p>
                              <p class="mb-4"><a href="https://www.facebook.com/clickedbykb" target="_blank">Lobby of Hobby</a></p>
                              <p class="mb-0 font-weight-bold">Instagram Handle</p>
                              <p class="mb-4"><a href="https://www.instagram.com/lobby.of.hobby/" target="_blank">lobby.of.obby</a></p>
                              <p class="mb-0 font-weight-bold">Email Address</p>
                              <p class="mb-0"><a href="#">account@lobbyofhobby.in</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer py-4 container-fluid">
            <div class="row">
               <div class="col-12 col-xl-12 text-center">
                  <p>
                     Copyright &copy;Lobby of hobby
                  </p>
               </div>
            </div>
         </div>
      </div>
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/swiper.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/picturefill.min.js"></script>
      <script src="js/jquery.mousewheel.min.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript">
         function validateContactForm() {
             var valid = true;
         
             $(".info").html("");
             $(".input-field").css('border', '#e0dfdf 1px solid');
             var userName = $("#userName").val();
             var userEmail = $("#userEmail").val();
             var subject = $("#subject").val();
             var content = $("#content").val();
             
             if (userName == "") {
                 $("#userName-info").html("Required.");
                 $("#userName").css('border', '#e66262 1px solid');
                 valid = false;
             }
             if (userEmail == "") {
                 $("#userEmail-info").html("Required.");
                 $("#userEmail").css('border', '#e66262 1px solid');
                 valid = false;
             }
             if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
             {
                 $("#userEmail-info").html("Invalid Email Address.");
                 $("#userEmail").css('border', '#e66262 1px solid');
                 valid = false;
             }
         
             if (subject == "") {
                 $("#subject-info").html("Required.");
                 $("#subject").css('border', '#e66262 1px solid');
                 valid = false;
             }
             if (content == "") {
                 $("#userMessage-info").html("Required.");
                 $("#content").css('border', '#e66262 1px solid');
                 valid = false;
             }
             return valid;
         }
      </script>
      <?php 
         if(!empty($_POST["send"])) {
           $name = $_POST["name"];
           $email = $_POST["email"];
           $subject = $_POST["subject"];
           $content = $_POST["content"];
           $toEmail = "krth.gor@gmail.com";
           $mailHeaders = "From: " . $name . "<". $email .">\r\n";
         
           if(mail($toEmail, $subject, $content, $mailHeaders)) {
               $message = "Your contact information is received successfully.";
               $type = "success";
           }
         }
         ?>
   </body>
</html>