<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.png" /> 
		
		<!-- TITLE -->
		<title>Horizon15 - Receipt</title>
		
		<!-- DESCRIPTION -->
		<meta name="author" content="rcni" />
		<meta name="description" content="Horizon15 bigest culfest in india organised by rotaract club of nirma institutes" />
		<meta name="keywords"  content="dance, concert, events, pronites, rcni,coming soon,horizon15,horizon14, horizon,nirma university,rotaract,rotary,festival,fest,culfest,biggest,viva la vida,heaven,website,horizon13" />

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

		<!-- STYLESHEETS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/flexslider.css" rel="stylesheet" >
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/schedule.css" rel="stylesheet">
		<link href="assets/css/gridgallery.css" rel="stylesheet" type="text/css"  />
		<link href="assets/css/venobox.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/styles.css" rel="stylesheet"/>
		<link href="assets/css/queries.css" rel="stylesheet"/>
	  <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
		
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    
	</head>
	   
    <body id="top">
	  
		<!--PRELOADER-->
		<div class="preloader">
		<div class="status"></div>
		</div>
		<!--/PRELOADER-->
		
		<!--HEADER-->
	  	<div class="header header-hide scroll-header">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
				   <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" 
						 data-target="#example-navbar-collapse">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					  </button>
					   <!--<a class="navbar-brand" data-scroll href="#sec_1"><img src="assets/img/logo.png" alt="logo"/></a>-->
				   </div>
				   <div class="collapse navbar-collapse" id="example-navbar-collapse">
					  <ul class="nav navbar-nav">
						<li><a data-scroll href="index.html">Home</a></li>
						<li><a data-scroll href="register.html">Register</a></li>
					  </ul>
				   </div>
				</nav>
			</div>
		</div>
		<!--/HEADER-->

<?php

if(isset($_POST['register']))
{
  
  $tot=0;
  $event="";
  $dob="";
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email= $_POST['email'];
  $collegename= $_POST['collegename'];
  $contact= $_POST['contactnumber'];
  $gender=$_POST['gender'];
  $date=$_POST['date'];
  $month=$_POST['month'];
  $year=$_POST['year'];
  $e= $_POST['e'];
  $dob.=$date;
  $dob.="/";
  $dob.=$month;
  $dob.="/";
  $dob.=$year;
  $receipt_no=0;
  $m=0;

  foreach($e as $events)
  {
    $event.=$events;
    echo $events;
    if($events === "Just Dance,")
    {$tot=$tot+100;}
    if($events === "Two to Tango,")
    {$tot=$tot+200;}
    if($events === "Rhythm,")
    {$tot=$tot+1200;}
    if($events === "Raaga,")
    {$tot=$tot+100;}
    if($events === "Lets duet,")
    {$tot=$tot+200;}
    if($events === "Head Banger's Ball,")
    {$tot=$tot+1000;}
    if($events === "Soul Tuned,")
    {$tot=$tot+100;}
    if($events === "Do Gooders Video,")
    {$tot=$tot+800;}
    if($events === "Tamaasha,")
    {$tot=$tot+800;}
    if($events === "Ad- Mad,")
    {$tot=$tot+300;}
    if($events === "World Through a Lens,")
    {$tot=$tot+100;}
    if($events === "Horizon Photography,")
    {$tot=$tot+100;}
    if($events === "FIFA-11,")
    {$tot=$tot+100;}
    if($events === "NFS Most Wanted,")
    {$tot=$tot+100;}
    if($events === "CS,")
    {$tot=$tot+500;}
    if($events === "Battala Verbale,")
    {$tot=$tot+50;}
    if($events === "Penthalon,")
    {$tot=$tot+50;}
    if($events === "Hit the Good Books,")
    {$tot=$tot+50;}
    if($events === "JAM,")
    {$tot=$tot+50;}
    if($events === "Wordemort,")
    {$tot=$tot+50;}
    if($events === "Rotract Cup,")
    {$tot=$tot+1000;}
    if($events === "Bughouse Chess,")
    {$tot=$tot+100;}
    if($events === "Voleyball,")
    {$tot=$tot+500;}
    if($events === "Table Tennis,")
    {$tot=$tot+100;}
    if($events === "Slam Dunk,")
    {$tot=$tot+300;}
    if($events === "Gully Cricket,")
    {$tot=$tot+500;}
    if($events === "Poster making,")
    {$tot=$tot+50;}
    if($events === "Cone Art,")
    {$tot=$tot+50;}
    if($events === "Nail Art,")
    {$tot=$tot+50;}
    if($events === "Dooodle-Woodle,")
    {$tot=$tot+50;}
    if($events === "Rangoli,")
    {$tot=$tot+100;}
    if($events === "Fashion show,")
    {$tot=$tot+200;}
    if($events === "General,")
    {$tot=$tot+150;}
    if($events === "Sports,")
    {$tot=$tot+150;}
    if($events === "MELA,")
    {$tot=$tot+150;}
    if($events === "Vices,")
    {$tot=$tot+150;}
    if($events === "Mr. and Ms. Horizon,")
    {$tot=$tot+100;}
    if($events === "Hogathon,")
    {$tot=$tot+100;}
    if($events === "Charades Zone,")
    {$tot=$tot+200;}
    if($events === "Beg Borrow Steal,")
    {$tot=$tot+100;}
    if($events === "Paintball,")
    {$tot=$tot+100;}
    if($events === "Amazing Race,")
    {$tot=$tot+100;}
    if($events === "Pirates,")
    {$tot=$tot+200;}
    if($events === "Why so Nolan,")
    {$tot=$tot+200;}
    if($events === "Splatoons,")
    {$tot=$tot+200;}
    if($events === "Battle-A-Board,")
    {$tot=$tot+200;}
    if($events === "Evil Reincarnated,")
    {$tot=$tot+200;}
    if($events === "Funtakshri,")
    {$tot=$tot+200;}
    if($events === "Brethren-Moot Court,")
    {$tot=$tot+400;}
    if($events === "Dance (Wave Academy),")
    {$tot=$tot+100;}
    if($events === "Photoshop,")
    {$tot=$tot+100;}
    if($events === "Personal Development,")
    {$tot=$tot+100;}
    if($events === "Calligraphy,")
    {$tot=$tot+100;}
    if($events === "Fashion.")
    {$tot=$tot+100;}
}
  if (preg_match('/World Through a Lens,Horizon Photography,/',$event))
      {$tot=$tot-50;}
      if (preg_match('/Battala Verbale,Penthalon,Hit the Good Books,JAM,Wordemort,/',$event))
      {$tot=$tot-50;}
      if (preg_match('/Poster making,Cone Art,Nail Art,Dooodle-Woodle,Rangoli,/',$event))
      {$tot=$tot-150;}
      if (preg_match('/General,Sports,MELA,Vices,/',$event))
      {$tot=$tot-200;}

  echo "<br>".$event;
  echo $tot;
  
  $connect = mysqli_connect('localhost','root','','horizon');
  if($connect)
  {//echo "successfully connected";
  }
  
  $result=mysqli_query($connect,"insert into registration(name,surname,email,collegename,contactnumber,gender,dob,events,total) values('$name','$surname','$email','$collegename','$contact','$gender','$dob','$event','$tot')");
  if($result)
  {
    $receipt_no=mysqli_query($connect,"select max(id) from registration");
  }
  while ($row = $receipt_no->fetch_assoc()) {
        foreach($row as $k)
        {$m=$k;}
    
    }//echo "<br>".$m;
  //echo $receipt_no;
  mysqli_close($connect);
}

?>
		
		<section class="intro text-center section-padding" id="intro">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-md-3 col-xs-2"></div>
					<div class="col-md-6 col-xs-10 align-left about">
						<h1 class="arrow">Reciept</h1>
						<hr style="width:183px;">
						<ul style="font-size:11px">
                            <li style="font-size:20px;">Receipt Id:</li><?php echo $m; ?><br />
                            <li style="font-size:20px;">Events selected:</li><?php echo $event; ?><br />
                            <li style="font-size:20px;" >Total:</li><?php echo $tot; ?><br />
            </ul>
            <p style="font-size:20px;padding-top:30px;">To confirm your registration, the payment has to be done on 2nd March 2015 in Nirma itself.</p>
					</div>
					<div class="col-md-3 col-xs-2"></div>
          <div class="col-md-12 col-xs-12" style="height:70px;"></div>                
				</div>
			</div>
        </section>

                          
                          
		<!--FOOTER-->	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-center">
						<ul class="legals">
							<li><button class="md-trigger " data-modal="modal-11">Help</button></li>
							<li><a href="http://rcni.in/">Copyrights, RCNI</a></li>
						</ul>
					</div>
					<div class="md-modal md-effect-9" id="modal-11">
						<div class="md-content padding-none">
							<div class="folio">
								<div class="sp-name disclaimer"><strong>Help</strong></div>
								<div class="sp-dsc disclaim-border">
									<ul style="font-size:11px">
										<li>Event Details:</li> 09157278941/42
										<li>Registration Receipt queries:</li> 09157278943
										<li>Accomodation:</li>09157278944
									</ul>
								</div>
								<button class="md-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
					</div> 
					<div class="md-overlay"></div>
				</div>
			</div>
        </footer>
		<!-- /FOOTER -->
		<!--SCRIPTS-->	
		
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>
		
		<!--VIMEO VIDEO-->     
        <script type="text/javascript" src="assets/js/venobox.js"></script>

        <!--3D GALLERY-->
        <script type="text/javascript" src="assets/js/classie.grid.gallery.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.gridgallery.js"></script>		
		<script type="text/javascript" src="assets/js/cbpGridGallery.js"></script>
 
		<script type="text/javascript" src="assets/js/classie.js" ></script>
		<script type="text/javascript" src="assets/js/modalEffects.js" ></script>
       
	    <script type="text/javascript" src="assets/js/nlform.js" ></script>
      <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js" ></script>
		<script>var nlform = new NLForm( document.getElementById( 'nl-form' ) );</script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
        
		<!-- TEAM SLIDER  -->
		<script type="text/javascript" src="assets/js/jquery.flexslider.js" ></script>
		
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
		<script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script>		
		
		<!--SPONSOR SLIDER-->
		<script type="text/javascript" src="assets/js/jssor.core.js"></script>
		<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
		<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
		<script type="text/javascript" src="assets/js/sponsor_init.js"></script>
		
		<!-- SMOOTH SCROLL  -->
		<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
		
		<!-- NICE SCROLL  -->
		<script type="text/javascript" src="assets/js/jquery.nicescroll.js"></script>
		
		<!-- SUBSCRIPTION FORM  -->
		<script type="text/javascript" src="assets/js/notifyMe.js"></script>
		
		<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
		
		<!-- ANIMATION  -->
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		
		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init.js"></script>

    </body>
</html>