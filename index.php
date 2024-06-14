<?php
if(isset($_POST['submit'])) {
$statusMsg='';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
$fromemail =  "Sai Darshan's";

$email_message = 'This mail is being send from sai darshan Website
                    Name: '.$name.'
                    Email: '.$email.'				
                    Message: '.$message.'';
//$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail;
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

$toemail="saidarshan.et@gmail.com"; 
//$toemail="pnminfo2019@gmail.com"; 
 
if(mail($toemail, $subject, $email_message, $headers,'-fnoreply@saidarshanenterprises.in')){
   
    echo '<script language="javascript">';
    echo 'window.alert("Thank You!");';
    echo '</script>';
	}
	else
	{
	echo '<script language="javascript">';
    echo 'window.alert("Mail not send");';
    echo '</script>';
	}
}
   ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SAI DARSHAN ENTERPRISES</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Sai Darshan Enterprises">
  <meta name="keywords" content="Enterprirses,Enterpirse,sai darshan,chakan,Industrial Material,Supplier,Industrial Products">
  <meta name="author" content="Sai Darshan Enterprises">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  
  <link href="loadmorebutton.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header">

    <div id="topbar">
      <div class="container">
     
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
       
    <a href="#header" class="scrollto"><img src="img/logo.JPG" alt="" class="img-fluid"></a>   
	
      </div>


      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Products</a></li>
      <li><a href="#clients">Clients</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>All Types of <br> <span>Industrial Material</span> Supplier</h2>
        <p class="sub-titile">A perfect solution for all your indusrial needs</p>
          <div>
         
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/services/4.png" alt="" class="slider-image img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

        

      
            <div class="about-content">
              <h2>About Us</h2>
              <div class="container">
              <p>It is a great pleasure to introduce ourselves as a SAI DARSHAN ENTERPRISES Unit, located in the vicinity of Chakan. M/s. SAI DARSHAN ENTERPRISES, established in 2006 and now grown up and became a full-fledged plant.</p>
              <p>With Experience of more than 15 years in the field of Industrial units, Private Organizations,individuals. We are proud of our more than twenty regular estemmed customers, who have been using our services presently.</p>
			  <p>Our firm belief and workmanship lies in qualities, which satisfy our valued customers. Timely commitment, assured after sales service, regular follow-up are basic principles, which ensured our growth constantly. For other detailed information, please refer our profile enclosed to this letter</p>
			  <p>We hope that by interacting with us in any business relations will be gainful to your organization. Quality of the product or services of a company maintained by its staff. We have skilled and experienced team with us. We treat our staff as our assets. We facilitate them with Workman Compensation Policy.</p>
            
				<p>Tagline: Delivering in 2 hours… Always!</p>

				<p>Line of Business: Manufacturer, Supplier, Wholesaler & Trader<p>

				<p>Company MD: Mr. Ganesh Girme</p>

				<p>Employee Strength: 15 Professionals</p>

				<p>Ownership Type: Private Limited Company</p>

				<p>Annual Turnover: Rs. 1 - 2 Crore</p>

            </div>
            </div>
  
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Our Products</h3>
         
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-duration="1.4s">
            <div class="box">
              <img src="img\services\a.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Bopp Tape - Printed and Plain</a></h4>
              <p class="description"><b>Thickness :</b> As per government approved</p>
			   <p class="description"><b>Size :</b> As per Customer required</p>
			     <p class="description"><b>Length :</b> 45 mtrs/65 mtrs/130 mtrs</p>
				   <p class="description"><b>Color :</b> Brown/Transparent & as per requirement. Customized prints as company logo % brand name. (Single or Double Color)</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
             <img src="img\services\b.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Plastic Strapping Patti/Pet Strapping Patti</a></h4>
             <p class="description"><b>Thickness :</b> 0.5mm to 1mm</p>
			   <p class="description"><b>Width :</b> 99mm to 19mm</p>
			     <p class="description"> These products are made up of supreme quality that ensures longer service life and strength. Available with us in different sizes and colors, these products are used for packing industrial goods.</p>
		
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <img src="img\services\c.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Floor Marking Tape</a></h4>
              <p class="description"><b>Thickness :</b> 50 micron</p>
			   <p class="description"><b>Width :</b> 12 mtrs/24 mtrs/48 mtrs/72 mtrs</p>
			    <p class="description"><b>Length :</b> 30 mtrs</p>
			     <p class="description"><b>Color :</b> Red/Blue/Green/Blue/Orange/Black/Zebra Crossing (Red+White/Yellow+Black) as per requirement</p>
            </div>
          </div>
		  
          <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <img src="img\services\d.jpeg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Stretchwrap Film</a></h4>
                    <p class="description">3 Layer Film(Manual/Machine Grade)</p>
			   <p class="description"><b>Thickness :</b> As per government approved</p>
			       <p class="description"><b>Width :</b> 100mm to 1500mm</p>
			     <p class="description"><b>Features :</b> Excellent product protection, can reduce cost of Secondary packaging</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
                  <img src="img\services\e.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Air Bubble Roll/Bags/Cut-Pieces</a></h4>
            <p class="description"><b>Material :</b> LDPE 100 % Virgin Material</p>
			   <p class="description"><b>Standard Roll :</b> (1mtr/1.5mtr/2mtr) widthx100mtrs. Length</p>
			       <p class="description">Customized request for specifications colors and packing are accepted</p>
			     <p class="description"><b>Features :</b> Shock absorption, nice transparency and light weight.</p>
            </div>
          </div>
		  
		      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
                  <img src="img\services\f.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">EPE Packing Roll/Sheet/Bags/Cut-Pieces</a></h4>
             <p class="description"><b>Thickness :</b> 1.0mm to 100mm</p>
			   <p class="description"> Width and Length,subject to thickness</p>
			       <p class="description">Customized request for specifications colors and packing are accepted</p>
			     <p class="description"><b>Features :</b> Cushioning and shock absorption property,flexibility,Light weight etc.</p>
            </div>
          </div>
		  
		  
		  
          <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
             <img src="img\services\g.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150"  >
              <h4 class="title"><a href="">Polythene Bags with  Single Color Printing</a></h4>
             <p class="description"><b>Thickness :</b> 100 to 800 guage as per government approval</p>
			   <p class="description"> <b>Width :</b> From 3" to 30"</p>
			       <p class="description">Customized Single color Printing available</p>
			     <p class="description"><b>Features :</b>Plastic bags are used for containing and transporting goods such as foods,powder,chemicals and misc products.</p>
            </div>
          </div>
		  
		   <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <img src="img\services\h.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Corrugated Boxes and Sheets</a></h4>
              <p class="description">We provide Industrial paper packaging Boxes are fast emerging as the most common form of packaging items and these are available with us in several shapes, sizes, colors and designs. We supply these boxes from high grade raw material that enhances their durability.</p>
            </div>
          </div>
		  
		   <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
             <img src="img\services\i.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150" >
              <h4 class="title"><a href="">Industrial Printing Work & Signages</a></h4>
              <p class="description">We provide Indutrial Printing works like stickers, tags, books and inhouse printinf works and slove supplying signages pf all types and all sizes.</p>
            </div>
          </div>
        
         <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\new12.jpg" class="img-fluid" style="margin-bottom:50px" "height:150" "width:150">
              <h4 class="title"><a href="">Display Boards Manufacturing</a></h4>
               <p class="description">White Board </p>
  <p class="description">Notice Board / Pin Up Board </p>
  <p class="description">Welcome Board </p>
  <p class="description">Display Board </p>
  <p class="description">Acrylic Folder </p>
  <p class="description">Infomate Folder </p>
  <p class="description">Magnetic Folder </p>
  <p class="description"> Board Stand Three Leg </p>
  <p class="description">Board Stand Revolving / Movable </p>
            <p class="description">We supply more  than 3400 products and goods</p>
            </div>
          </div>
        
                 <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\new2.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150">
              <h4 class="title"><a href="">Hardware & Plumbing Material</a></h4>
               <p class="description">Etching Machine</p>
<p class="description">Spray Gun</p>
<p class="description">Nylon Hammer <br>
Malden Bush <br>
M Seal 250 Gm <br>
Magnet 6x10 / 8x10 / 10x10<br>
Tool Box <br>
  Allen Key 3mm<br>
Solder Rod <br>

            <p class="description">We supply more than  3400 products and goods</p>
            </div>
          </div>
        
                         <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\new3.png" class="img-fluid" style="margin-bottom:0px" "height:150" "width:150">
              <h4 class="title"><a href="">Paints & Painting Material</a></h4>
               <p class="description">IPA<br>
Thinner<br>
 Oil Paint Asian<br>
 HCL Acid<br>
Castrol Oil<br>
Turpentine<br>
 Sodium Chloride NaCl<br>
 Litmus Paper <br>

            <p class="description">We supply more than  3400 products and goods</p>
            </div>
          </div>
        
        
        
		    <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\j.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150">
              <h4 class="title"><a href="">Industrial Safety Items & Equipments</a></h4>
              <p class="description">We are supplying IndustrialSafety items and other equipments likje Safety shoes, Ear plug, Handgloves, Safety Goggles, Jackets, Helmets etc</p>
            </div>
          </div>
        
         <div class="col-md-6 col-lg-4 wow bounceInUp " data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\welding.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150">
              <h4 class="title"><a href="">WELDING MATERIAL </a></h4>
               <p class="description"> All types of Welding material Availables</p>
    		   <p class="description"> MIG - Gas Metal Arc Welding</p>
    			<p class="description"> TIG - Gas Tungsten Arc Welding</p>
   				 <p class="description"> Arc Welding.</p>
   				 <p class="description"> Electric Welding</p>
            </div>
          </div>
		  
		    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
            <img src="img\services\k.jpg" class="img-fluid" style="margin-bottom:30px" "height:150" "width:150">
              <h4 class="title"><a href="">Industrial Stationery Items & Machinery</a></h4>
              <p class="description"> - All types of Stationery material available</p>
			  <p class="description">- Computer and Other Stationery</p>
			  <p class="description">- Customized request for specified types of continuous stationery</p>
			  <p class="description">- Bar code lables in all Sizes and all types of material</p>
            </div>
          </div>

        </div>
	

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
  

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
      Our Speciality Items

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->


    <!--==========================
      Portfolio Section
    ============================-->


    <!--==========================
      Clients Section
    ============================-->
<!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
 <section id="team" class="section-bg">
      <div class="container">
     

        <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/strappingBand.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
				 <h4>Strapping band</h4>
                  <div class="social">
                  <span>We provide all types of printed straping band with special name of the company and with government approved thicknesses and size</span>
                  </div>
                </div>
              </div>
			  
            </div>
          </div>  
        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/adobe.png" style="margin-top:41%; "class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
				 <h4>Customized printed tape</h4>
                  <div class="social">
                  <span>We provide all types of Customized printed tape as per company logo brand name (single or double colour)</span>
                  </div>
                </div>
              </div>
			  
            </div>
          </div>  
        
        
        
        <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/l.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
				 <h4>Bopp Tape</h4>
                  <div class="social">
                  <span>Brown/Transparent as per requirement. Customized Prints as Company Logo and Brand Name. (In Single Color or Double Color).</span>
                  </div>
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/s.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
				 <h4>Strapping Band</h4>
				<div class="social">
                     <span>We have been supplying Best Quality Strapping band with Customized Prints as Company Logo and Brand Name.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/o.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Cord Strap</h4>
                  <div class="social">
                     <span>We supply Composite Strap Band in sizes - 13mm/ 16mm / 19mm/ 25mm /32mm.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/q.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Cord Strap Buckle</h4>
                
                  <div class="social">
                      <span>We supply Buckle for Composite Strap Band in sizes - 13mm/ 16mm / 19mm/ 25mm /32mm.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>



<section id="call-to-action" class="wow fadeInUp">
      <div class="container">
      Other Industrial Products

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->


    <!--==========================
      Portfolio Section
    ============================-->


    <!--==========================
      Clients Section
    ============================-->
<!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
 <section id="team" class="section-bg">
      <div class="container">
     

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Vinyl Gloves</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Safety Coated Gloves</h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Cut Resistant Gloves</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/4.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Cut Resistant Gloves</h4>
                
                 
                </div>
              </div>
            </div>
          </div>
		  
		  

        </div>
		
		
		   <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/5.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Ceramic Nozzle</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/6.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Pre-heater /  Neck </h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/7.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Nozzle</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/8.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Mig Torch</h4>
                
                </div>
              </div>
            </div>
          </div>
		  
		  

        </div>
		
		
				   <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/9.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Disposable Mask</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/11.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Personal Protective Equipment </h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/12.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Face Mask</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/13.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Safety Shoes</h4>
                
                </div>
              </div>
            </div>
          </div>
		  
		  

        </div>
		
		
		   <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/14.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Two Stage Regulators</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/15.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Welding Gas Regulators </h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/16.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Welding Regulators</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/17.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Single Stage Gas Regulators</h4>
                
                </div>
              </div>
            </div>
          </div>
		  
		  

        </div>
		
		<div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/22.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Auto Darkening Helmets</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/23.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Fire Fighters Helmets</h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/24.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Flip Up Welding Helmets</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/25.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Industrial Safety Helmets</h4>
                
                </div>
              </div>
            </div>
          </div>
		  
		  

        </div>
		
		
		<div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/services/26.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Punk Goggles</h4>
                  
                </div>
              </div>
			  
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/services/27.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
				 <h4>Chemical Splashed Goggles</h4>
				
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/services/28.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Welding Goggles</h4>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/29.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Nozzle Cleaner</h4>
                
                </div>
              </div>
            </div>
          </div>
		  
		     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/w30.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="">
                  <h4>Wooden Packing</h4>
                
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/comp.png" class="img-fluid" alt="" style="height: 255px;
    object-fit: cover;">
              <div class="member-info">
                <div class="">
                  <h4>Computer & Cartridge</h4>
                
                </div>
              </div>
            </div>
          </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/services/trolly.jpg" class="img-fluid" alt="" style=" ">
              <div class="member-info">
                <div class="">
                  <h4>Trooly Wheels</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
		
      </div>
    </section>




    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/1.png" alt="">
		  <img src="img/clients/2.png" alt="">
		  <img src="img/clients/3.png" alt="">
          <img src="img/clients/4.png" alt="">
		  <img src="img/clients/5.png" alt="">
		  <img src="img/clients/6.png" alt="">
		  <img src="img/clients/7.png" alt="">
		    <img src="img/clients/client10.png" alt="">
       
         
        </div>

      </div>
    </section><!-- #clients -->


    <!--==========================
      Pricing Section
    ============================-->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
 <!-- #faq -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Saidarshan Enterprises</h3>
                    <p>Our firm belief and workmanship lies in qualities, which satisfy our valued customers. Timely commitment, assured after sales service, regular follow-up are basic principles, which ensured our growth constantly.</p>
                  </div>

             

                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#intro">Home</a></li>
                      <li><a href="#about">About us</a></li>
                      <li><a href="#services">Products</a></li>
                      
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                     <strong> Regd Add:</strong> Vishal Garden, Flat No U-8, Chakan-Shikrapur Road, Chakan, Khed, Pune-410501.<br>
					 
                      <strong>Phone:</strong> 9921402531 / 7038487804<br>
                      <strong>Email:</strong> saidarshan.et@gmail.com<br>
                    </p>
                  </div>

                

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
            <form action="" method="post" role="form" class="php-email-form">
             <!-- <form action="" method="post" role="form" class="contactForm">-->
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" name="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
      ©<script>document.write(new Date().getFullYear());</script> <b>SAI DARSHAN ENTERPRISES</b> - All Rights Reserved. Designed by @ P & N Mutke Infotech
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
