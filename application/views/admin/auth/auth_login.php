<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ice Red</title>
      
      <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/libs.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="<?php echo base_url();?>./assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      
  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="<?php echo base_url();?>/assets/images/logo_light.png" class="img-fluid" alt="logo" style="width: 200px;height:150px;"></a>
                        <div class="sign-slider overflow-hidden ">
                            <ul  class="swiper-wrapper list-inline m-0 p-0 ">
                                <li class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Find new friends</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/login/2.png" class="img-fluid mb-4" alt="logo"> 
                                    <h4 class="mb-1 text-white">Connect with the world</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                                <li class="swiper-slide">
                                    <img src="<?php echo base_url();?>/assets/images/login/3.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Create new events</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Sign in</h1>
                        <p>Enter your email address and password to access admin panel.</p>
                        <form m class="login-form" action="<?php echo route('admin.auth.do_login');?>" method="post">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" id="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <a href="#" class="float-end">Forgot password?</a>
                                <input type="password" id="password" name="pass"  class="form-control mb-0" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="form-check d-inline-block mt-2 pt-1">
                                    <input type="checkbox"  id="checkbox" name="checkbox" class="form-check-input" id="customCheck11">
                                    <label class="form-check-label" for="customCheck11">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Sign in</button>
                            </div>
                            <!-- <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="sign-up.html">Sign up</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>   
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/slider.js"></script>
    <!-- masonry JavaScript --> 
    <script src="<?php echo base_url();?>/assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="<?php echo base_url();?>/assets/js/charts/weather-chart.js"></script>
    <script src="<?php echo base_url();?>/assets/js/app.js"></script>
    <script src="<?php echo base_url();?>/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/lottie.js"></script>
    
  </body>
</html>