<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dverows SM</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/dsm.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
<style>
.our-team{
    padding: 30px 0 40px;
    background-color: white;
    text-align: center;
    overflow: hidden;
    position: relative;
    border:1px dotted #ccc;
}
h1{
    margin-bottom:15px;
}
.our-team .pic{
    display:inline-block;
    width: 130px;
    height: 130px;
    margin-bottom: 50px;
    /* background-color: #eb1768; */
    position: relative;
    z-index: 1;
}
.our-team .pic::before{
    content: "";
    width: 100%;
    height: 0;
    border-radius: 50%;
    background-color: #eb1768;
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0; 
    transform: scale(3);
    transition: all 0.3s linear 0s;
}

.our-team:hover .pic::before{
    height: 100%;
}
.our-team .pic::after{
    content: "";
    width: 100%;
    height: 99%;
    border-radius: 50%;
    background: #ee4268;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
}
.our-team .pic img{
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
}
.our-team:hover .pic img{
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
}
.our-team .team-content{
    margin-bottom: 30px;
}
.our-team .title{
    font-size: 22px;
    font-weight: 700;
    color: #4e5052;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform: capitalize; 
}
.our-team .social{
    width: 100%;
    padding: 0;
    margin:0;
    background: #eb1768;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;

}

.our-team:hover .social{
    bottom: 0;
}
.our-team .social li{
 display: inline-block;
}
.our-team .social li a{
    display: block;
    padding: 10px;
    font-size: 17px;
    color: white;transition: all 0.5s ease 0s;

   }
   .our-team .social li a:hover{
       color: #eb1768;
       background: #f7f5ec;
       text-decoration: none;
   }
</style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">Ca.</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">Screenshot</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?route=signin">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?route=register">Register</a></li>
                                </ul>
                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-6 col-md">
                    <div class="wellcome-heading">
                        <h2>DevRows SM</h2>
                        <h3>C</h3>
                        <p>Everything You Need To Manage Your Server. <bold>In One Click !</bold></p>
                    </div>
                    <br>
                    <div class="col-6 col-md">
                    <div class="welcome-thumb wow fadeInUp" data-wow-delay="0.5s">
                            <img id="optionalstuff" src="img/bg-img/ter.gif" alt="" >
                        </div> 
                    </div>  
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Why Is It Special</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
                    <div class="row">
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                                    <i class="ti-user" aria-hidden="true"></i>
                                    <h5>Awesome Experience</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-feature wow fadeInUp" data-wow-delay="0.4s">
                                    <i class="ti-mobile" aria-hidden="true"></i>
                                    <h5>Fast and Simple</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-feature wow fadeInUp" data-wow-delay="0.6s">
                                    <i class="ti-dashboard" aria-hidden="true"></i>
                                    <h5>Clean Code</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-feature wow fadeInUp" data-wow-delay="0.8s">
                                    <i class="ti-palette" aria-hidden="true"></i>
                                    <h5>Perfect Design</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-feature wow fadeInUp" data-wow-delay="1s">
                                    <i class="ti-settings" aria-hidden="true"></i>
                                    <h5>Best Industry Leader</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <!-- Single Feature Start -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-feature wow fadeInUp" data-wow-delay="1.2s">
                                    <i class="ti-headphone" aria-hidden="true"></i>
                                    <h5>24/7 Online Support</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                    </div> 
            </div>
        </div>
        <!-- Special Description Area -->
        
    </section>
    <!-- ***** Special Area End ***** -->

    

    


    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="img/scr-img/app-1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-2.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="img/scr-img/app-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Pricing Plan</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Starter Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>29</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Basic Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>49</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Package Price  -->
                    <div class="single-price-plan active text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Advenced Plan</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>$</span>
                                <h4>69</h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>Up to 10 users monthly</p>
                            <p>Unlimited updates</p>
                            <p>Free host &amp; domain</p>
                            <p>24/7 Support</p>
                            <p>10 Unique Users</p>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="#">Select Plan</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->





    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
                <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Animated Our Team Section</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="img/team-img/team-6.jpg" >
            
                                </div>
                                <div class="team-content">
                                    <h3>Raj Kumar</h3>
                                    <span class="post"> Web Designer </span>
                                </div>
                                <ul class="social">
                                    <li><a href="" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                    <li><a href="" class="fa fa-google-plus"></a></li>
                                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
            
            
                        <div class="col-md-2 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="img/team-img/team-1.jpg" >
            
                                </div>
                                <div class="team-content">
                                    <h3>Raj Kumar</h3>
                                    <span class="post"> Web Designer </span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                    <li><a href="" class="fa fa-google-plus"></a></li>
                                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
            
                        <div class="col-md-2 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="img/team-img/team-3.jpg" >
            
                                </div>
                                <div class="team-content">
                                    <h3>Raj Kumar</h3>
                                    <span class="post"> Web Designer </span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                    <li><a href="" class="fa fa-google-plus"></a></li>
                                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="img/team-img/team-5.jpg" >
                
                                    </div>
                                    <div class="team-content">
                                        <h3>Raj Kumar</h3>
                                        <span class="post"> Web Designer </span>
                                    </div>
                                    <ul class="social">
                                        <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                                        <li><a href="" class="fa fa-twitter"></a></li>
                                        <li><a href="" class="fa fa-google-plus"></a></li>
                                        <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="img/team-img/team-2.jpg" >
                    
                                        </div>
                                        <div class="team-content">
                                            <h3>Raj Kumar</h3>
                                            <span class="post"> Web Designer </span>
                                        </div>
                                        <ul class="social">
                                            <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                                            <li><a href="" class="fa fa-twitter"></a></li>
                                            <li><a href="" class="fa fa-google-plus"></a></li>
                                            <li><a href="www.linkedin.com/in/raj-kumar-web-designer" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
            
                        <div class="col-md-2 col-sm-6">
                            <div class="our-team">
                                <div class="pic">
                                    <img src="img/team-img/team-4.jpg" >
            
                                </div>
                                <div class="team-content">
                                    <h3>Raj Kumar</h3>
                                    <span class="post"> Web Designer </span>
                                </div>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/profile.php?id=100012512077239" class="fa fa-facebook"></a></li>
                                    <li><a href="" class="fa fa-twitter"></a></li>
                                    <li><a href="" class="fa fa-google-plus"></a></li>
                                    <li><a href="www.linkedin.com/in/raj-kumar-web-designer " class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
            
                        
                    </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +11-225-888-888-66</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.deercreative@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2019 </p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>
