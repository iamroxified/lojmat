<?php  session_start(); ob_start(); session_destroy();  require('db/config.php'); require('db/functions.php');  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>About US | Lokoja Journal of Management and Technology</title>
<?php include('nav/head.php'); ?>
</head>
<body class="body-dark">
    <?php include('nav/header.php'); ?>
      <header style="background: url(images/pages/1.jpg) top center no-repeat;">
        
        <div class="container">
            
            <div class="sixteen columns">
                
                <a href="index"><img src="images/lojmat2.png" alt="" width="50" /></a>
                
            </div>
            
        </div>
        
    </header>
    <div class="pageContent">
        
        <div class="container">
            
            <div class="fourteen columns offset-by-one">
                
                <h1 class="pageTitle">about lojmat</h1>
                <p>Lokoja Journal of Management and Technology is a bi-annual publication of the School of Management Studies, Kogi State Polytechnic, Lokoja. In an Lincreasingly expanding sphere of global activities with the reducing influences of physical territorialities, government regulations and anthropogenic limitations as a result of international competition spurred by technological advances, innovations and challenges, the imperativeness of new kind of knowledge is indeed pressing.</p>
<p> The broad objectives of the Journal is to expand knowledge through the pursuit of academic 
excellence in all human endeavours by the publication of research works in management 
theory, principles and practice, technological discoveries and application, humanities, 
arts and social sciences, as well as contemporary issues that confront humanity. Through 
her contribute to the body of available knowledge for use by policy makers, researcher, 
libraries, students and the entire public.</p>
<p>Safe for editing for the sake of clarity, all ideas, analysis and inferences expressed in each article in the Journal are strictly the authors'. <img class="alignright" src="images/lojmat2.jpg" alt="" width="200px" /> Contributors who may be interested in 
expanding the frontiers of knowledge, or are challenged by the trends in the field of 
management and technology or any endeavours that represents/pose concerns to 
humanity are therefore invited to contact the Editor-in-Chief, or see inside back cover for 
more information. </p>
            
                
            </div>
        
            
        </div>
        
    </div>
    
<?php include('nav/footer.php');  ?>
    
<?php include('nav/scripts.php'); ?>  

</body>
</html>