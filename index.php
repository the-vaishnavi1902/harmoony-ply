<?php
include('connection.php');
if(isset($_POST['Submit']))

{
//getting the post values
$name=$_POST['name'];
$email_address=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


//query for data insertion
$query=mysqli_query($db,"insert into contact_form(NAME,EMAIL_ADDRESS,SUBJECT,MESSAGE)value('$name','$email_address','$subject','$message')");
	if($query)
	{
	echo"<script>alert('You have successfully entered the data');</script>";
	echo"<script type='text/javascript'>document.location='index.php';</script>";
	}
	else
	{
	echo"<script>alert('Something went wrong. Please try again');</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="zxx">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>interior &amp; furniture</title>
<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
<!--css-->
<link href="assets/css/all-css.css" rel="stylesheet" type="text/css">
<link href="assets/css/set1.css" rel="stylesheet" type="text/css">
<link href="../Studio-Ux-Interior-Design/assets/css/bgvideo.css">
<!--css-->
<style>
  
</style>
</head>
<body id="page-top">
<div id="preloader"></div>
<!--navbar-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="assets/img/HDSlogo.png" alt="logo" title="" /></a> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about">ABOUT US</a></li>
        <li><a class="page-scroll" href="#Projects">Projects</a></li>
        <li> <a class="page-scroll" href="#services">Services</a></li>
        <li><a class="page-scroll" style="background:none" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->
<!--SLIDER-->

<header id="myCarousel" class="carousel slide ">
  <div class="header-content">
    <div class="header-content-inner">
      <h1 id="homeHeading" class="wow slideInDown">Harm<img src="assets/img/filo.png" style="height:150px;">ny <span>Design</span> Studio</h1>
      <u><h2><center><b>Transforming Spaces Harmonically</b></center></h2></u>
	  <h3>Blend of creative journey from two dimension to three dimension makeup the harmoony design studio.</h3>
      <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s"><center><h2>"No Culture Can Survive if Exclusive"</center></h2></p>
	  
      <!--<a href="#about" class="btn btn-primary btn-xl page-scroll wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">Find Out More</a> --></div>
  </div>
  <!--Background-->
  <div id="bg-video" >
    <video  part="video" autoplay muted loop src="vdo/bgvideo.mp4" preload="metadata"></video>
  </div>

  <!-- Controls -->
<!--SLIDER-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title"><strong><b><u>Residential Design</u></b></strong></font></h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/thum-1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p><font size="+1">If you’re looking to create a space that resonates with you, residential design is the way to go! <br>
               Experts specialize in areas like kitchen redesign, home offices, and custom furniture, ensuring every corner of your home shines.
            In essence, residential design transforms living spaces into personalized sanctuaries, reflecting the inhabitants personalities, tastes, and lifestyles.The inside of a home is just as important as the exterior. 
Indeed, it can make or break the feel of a place and prove to be the difference between an average house and a great one.As we are about to see, residential design covers everything from rooftops to carpets. 
As a result, it has a real impact on our lives.
To help you navigate this vast subject, we have pulled together some of our best resources. 
This article will help you understand residential design, how it is different from commercial design, its relationship to architecture, and its importance. </font></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title"><strong><b><u>Exterior Design</u></b></strong></h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/exde.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p><font size="+1">Exterior design is a complex process that involves a variety of different disciplines, including architecture, engineering, and landscape architecture.The first step in exterior design is to create a concept. This involves brainstorming and sketching out ideas to get a general idea of what you want to achieve.The final step is to create a construction document, which is a blueprint that shows the exact specifications of the project.Exterior design is important because it sets the tone for the entire building.</font></p>
<p align="left"><font size="+1"><img src="assets/img/icon1.png"><b><u>&nbsp;If you’re working on a project, consider these key factors:</b></u></font></p>
<p align="left"><font size="+1">1.Project Goals</font></p>
<p align="left"><font size="+1">2.Site and Climate</font></p>
<p align="left"><font size="+1">3.Local Codes</font></p>
<p align="left"><font size="+1">4.Floor Plans</font></p>
<p align="left"><font size="+1">5.Architectural Principles</font></p>

          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title"><strong><b><u>Commercial Design</u></b></strong></font></h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/Dynamic-Office-Flex-1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p><font size="+1">Commercial spaces must cater to a wide range of needs, including employee productivity, customer satisfaction, and brand identity. Therefore, a well-designed commercial space can have a significant impact on the success of a business. In this article, we will explore the importance of commercial interior design, its essential elements, and the design process involved in creating a functional and aesthetically pleasing space.</font></p>
<p align="left"><font size="+1"><img src="assets/img/icon1.png"><b><u>&nbsp;Here are some of the primary benefits of commercial interior design:</u></b></font></p>
<p align="left"><font size="+1">1.Enhances Employee Productivity</font></p>
<p align="left"><font size="+1">2.Attracts and Retains Customers</font></p>
<p align="left"><font size="+1">3.Increases Brand Identity</font></p>
<p align="left"><font size="+1">4.Optimizes Space Usage</font></p>
<p><font size="+1">With the right commercial interior design, businesses can create a competitive advantage, enhance their brand identity, and increase their profitability.</font></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!--<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">-->
    <!-- Modal content-->
    <!--<div class="modal-content">-->
     <!-- <div class="modal-header">-->
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <!--<h4 class="modal-title"> Project Name </h4>-->
     <!-- </div>-->
      <!--<div class="modal-body">
        <div class="row">-->
          <!--<div class="col-md-7   text-center"><img src="assets/img/demo-img2.jpg"  alt="" title="" class="img-responsive"></div>-->
         <!-- <div class="col-md-5">-->
            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
-->         <!-- </div>
        </div>-->
      <!-- <!-- <div class="clearfix"></div>-->
      <!--</div>
    </div>
  </div>
</div>-->
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Hospitaly Design </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="assets/img/demo-img.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<main>
  <!--about-us-->
  <section class="what-we" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" >
          <h2 class="wow fadeInDown">About Us</h2>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay=".5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/thum-1.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Residential Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Residential Design</h6>
                  <p>Resedential design is the process of planning and developing a new home.It can also be defined as the art of decorating, furnishing, and arranging the interior and exterior of a building.In essence, residential design transforms living spaces into personalized sanctuaries, reflecting the inhabitants’ personalities, tastes, and lifestyles.Residential design is a fancy way of saying home design.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/exde.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Exterior Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Exterior Design</h6>
                  <p>Exterior design includes the facade, roof, and any other features that are visible from the outside. It can be used to create a unique look that reflects the owner’s personality. It’s also important for functional reasons, because it can affect the efficiency and comfort of the building. By carefully planning and designing the exterior, it’s possible to create a space that’s both beautiful and functional.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft div-n2"  data-wow-delay="1.5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="assets/img/Dynamic-Office-Flex-1.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Commercial Design</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Commercial Design</h6>
                  <p> Commercial interior design refers to the design and layout of public spaces, offices, and retail environments to enhance their functionality, aesthetics, and user experience. Commercial spaces must cater to a wide range of needs, including employee productivity, customer satisfaction, and brand identity.Creating a concept (layout, color scheme, furniture) aligned with the client’s vision.</p>
                  <a class="tz-readmore" data-toggle="modal" data-target="#myModal3">READ MORE<i class="fa fa-caret-right"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about-us-->
  <!--Projects-->
  <section class="no-padding" id="Projects">
    <div class="container-fluid">
      <div class="row no-gutter popup-gallery">
        <div class="col-lg-4 col-sm-6 wow fadeIn" >
		 
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/a.jpeg" alt="" title="" />
             <!-- <figcaption>-->
                <!--<h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>-->
                <!--<a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>-->
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/c.jpeg" alt="" title="" />
              <!--<figcaption>-->
                <!--<h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>-->
                <!--<a data-toggle="modal" data-target="#myModal4"> View more</a> </figcaption>-->
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn" >
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/b.jpeg" alt="" title="" />
              <!--<figcaption>-->
               <!-- <h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>-->
               <!-- <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>-->
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/f.jpeg" alt="" title="" />
              <!--<figcaption>-->
                <!--<h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>-->
               <!-- <a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>-->
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/ex.jpeg" alt="" title="" />
              <!--<figcaption>-->
               <!-- <h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p-->
                <!--<a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>-->
            </figure>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6  wow fadeIn">
          <div class="grid">
            <figure class="effect-ruby"> <img src="assets/img/portfolio/fullsize/e.jpeg" alt="" title="" />
              <!--<figcaption>-->
                <!--<h2> Project Name</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </p>-->
                <!--<a data-toggle="modal" data-target="#myModal4"> View more </a> </figcaption>-->
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Projects-->
  <!--services-->
  <section id="services">
    <div class="container">
      <div class="heading ">
        <div class="row">
          <div class="text-center col-sm-10 services1 col-center">
            <h3 class="wow fadeInDown">Services</h3>
            <p class="wow fadeInDown">We aim at giving vision to a 2D image by giving client the overview
			and feel of the space be it interior or exterior. 3D creates the masses, colours, textures, lights and shadows to give you the exact ambience. </p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="service-info">
              <div class="grid">
                <figure class="effect-milo"> <img src="assets/img/aa.jpeg" class="img-responsive" alt="" title="" />
                  <!--<figcaption>
                    <h2>Hospitaly <span>Design</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
                </figure>
              </div>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/bb.jpeg" class="img-responsive" alt="" title="" />
               <!-- <figcaption>
                  <h2>Residential <span>Design</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/cc.jpeg" class="img-responsive" alt="" title="" />
                <!--<figcaption>
                  <h2>Hospitaly <span>Design</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/dd.jpeg" class="img-responsive" alt="" title="" />
                <!--<figcaption>
                  <h2>Office <span>Design</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/ee.jpeg" class="img-responsive" alt="" title="" />
               <!-- <figcaption>
                  <h2>Furniture <span>Design</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="assets/img/ff.jpeg" class="img-responsive" alt="" title="" />
               <!-- <figcaption>
                  <h2>Badroom <span>Design</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                  <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>-->
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--services-->
  
  <!--contact-->
  <section id="contact" class="contact-us">
    <div class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-10 col-center">
            <h2 class="wow fadeInDown"> Contact Us</h2>
            
          </div>
        </div>
        <div class="contact-form" >
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <form id="main-contact-form" name="contact-form" method="post" action="index.php">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="name" class="form-control" placeholder="Name"  type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="email" class="form-control" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input name="subject" class="form-control" placeholder="Subject" required  type="text">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                  <button name="Submit" type="Submit" class="submit-bt2">Send Now </button>
                </div>
              </form>
            </div>
            <div class="col-sm-6 wow fadeIn">
              <div class="contact-info">
                <!--<p>C-11 Legacy Ariston Apartment, Mahalaxmi Layout, Ananthapura, Yelahanka, Bangalore- 560064
                  
                  Mobile: 08497-038877</p>-->
                <br>
                <ul class="address">
                <li><i class="fa fa-map-marker"></i><span>Address : </span> Pune</li>
                  <li><i class="fa fa-phone"></i><span>Phone :</span> +91 7722082607 &nbsp;/&nbsp; +91 9762637140</li>
                  <li><i class="fa fa-envelope"></i><span>Email : </span><a href="mailto:contact@StudioUX.com"> &nbsp;harmoonydesignstudio@gmail.com</a></li>
                  <!--<li><i class="fa fa-globe"></i><span>Website : </span><a href="#">interior &amp; furniture</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact-->
</main>
<!--main-->
<footer>
  <!--footer-div-->
  <div class="footer">
    <div class="container">
      <div class="col-md-8 col-sm-8 footer-c"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
      <div class="col-md-4  col-sm-4 footer-c text-right">
        <div class="social-icons"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-rss fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href="#"><i class="fa fa-skype fa-lg"></i></a><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></div>
      </div>
    </div>
  </div>
  <!--footer-div-->
</footer>
<!-- jQuery -->
<script  src="assets/js/jquery-2.2.4.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/creative.min.js"></script>
<!-- jQuery -->
</body>


</html>
