<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Journals | Lokoja Journal of Management and Technology</title>
<?php include('nav/head.php'); ?>
</head>
<body class="body-dark">
    <?php include('nav/header.php'); ?>
    <header style="background: url(images/slider/slide1.jpg) top center no-repeat;">
        <div class="container">
            <div class="sixteen columns">
                <a href="index"><img src="images/lojmat2.png" alt="" width="50px" /></a>
            </div>
        </div>
    </header>
    <div class="pageContent">
        <div class="container">
            <div class="row">
            <div class="col-md-9">
                <h4 class="pageTitle" style="font-size: 4vh;">LOJMAT Journals</h4>
                <div class="row">
                     <?php foreach(QueryDB("SELECT * FROM alphabets ") as $rows){extract($rows); ?>
                        <div class="col-md-6" >
                        <div class="card-body dd_events_post" style="box-shadow: 1px 1px 5px 1px #dfdfdf; border-radius: 2%;">
                            <div class="row" style="">
                                <div class="col-3" style="width: 15%;float: left;">
                                    <div class="" style="">
                                        <a href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><img src="master/<?php echo $jo_img; ?>" alt="" width="50px" /></a>
                                    </div>
                                </div>
                                <div class="col-9" style="width: 80%; float: right;">
                                    <div class="postTitle">
                                        <h5><a href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>" style="font-size: 2.5vh; text-decoration:none "><?php echo $jo_name.' '.$jo_vol.' '.$jo_num;?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        <div class="" style="">
                             <table class="table">
                          <tbody>
                            <tr><td><i class="fa fa-file" aria-hidden="true"></i> Issue:</td><td><?php echo $jo_vol.' '.$jo_num; ?></td></tr>
                            <tr><td><i class="fa fa-user" aria-hidden="true"></i> Publisher:</td><td>Lokoja Journal of Management and Technology</td></tr>
                            <tr><td><i class="fa fa-book" aria-hidden="true"></i> ISSN:</td><td>2550-8032</td></tr>
                            <tr><td><i class="fa fa-calendar" aria-hidden="true"></i> Published:</td><td><?php echo substr($jo_pub,8).' '._date(substr($jo_pub,5,2)).' '.substr($jo_pub,0,4);?></td></tr>
                          </tbody>
                        </table>
                        </div>
                        <div class="dd_events_btn">
                               <a class="facebookBtn button-small" href="master/<?php echo $jo_pdf; ?>" download=""><i class="fa fa-download"></i> Download</a>
                        <span class="or">OR</span>
                        <a class="continue button-small-theme" href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
                        
                  <ul class="pagination">
                    <li><a class="button-small-theme rounded3" href="#">1</a></li>
                    <li><a class="button-small grey rounded3" href="#">2</a></li>
                    <li><a class="button-small grey rounded3" href="#">3</a></li>
                    <li><a class="button-small grey rounded3" href="#">4</a></li>
                    <li><a class="button-small grey rounded3" href="#">5</a></li>
                </ul>
            </div>
            <ul class="sidebar col-md-3 clearfix">
                <li class="widget">
                    <div class="widget_text">
                        <h3>LOJMAT Journals</h3>			
                        <div class="textwidget">
                            <p>Lokoja Journal of Management and Technology (LOJMAT) is a peer reviewed publications of the School of Management and Technology of Kogi State Polytechnic, Lokoja. It is a contribution of a body of eminent scholars from all discipline in the sciences and other related fields.</p>
                        </div>
		              </div>
                </li>
                <li class="widget">
                    <div class="dd_causes_widget clearfix">
                        <h3>LATEST Journals<span><a href="causes">VIEW ALL &rarr;</a></span></h3>
                      <?php foreach(QueryDB("SELECT * FROM journals  order by RAND() LIMIT 6") as $rows){ extract($rows); ?>
                                <p><a href="journal/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>" style="text-decoration: none;"><?php echo $jo_name.' '.$jo_vol.' '.$jo_num;?></a></p>
                    <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </div> 
    </div>
    
    <footer>
        
        <div class="container">
            
            <div class="one-third column">
                
                <a href="index"><img style="margin-bottom: 20px;" src="images/footerLogo.png" alt="" /></a>
                <p>While the exact location isn’t explicitely listed, further digging reveals that its first retail stores in Turkey and Brazil will be.</p>
                                
            </div>
            
            <div class="one-third column">
                
                <h3>FROM FLICKR</h3>
                
                    <ul class="flickrImg">
                    
                        <li><a href="#"><img src="images/flickr/1.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/2.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/3.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/4.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/5.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/6.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/7.jpg" alt="" /></a></li>
                        <li><a href="#"><img src="images/flickr/8.jpg" alt="" /></a></li>
                    
                </ul>
                
            </div>
            
            <div class="one-third column">
                
                <h3>informations</h3>
                
                    <ul class="informations">
                      
                        <li><h3>ADRESS</h3><span>5841 Bd Henri Bourassa, Montréal-Nord, QC <br>H1G 2V1</span></li>
                        <li><h3>TELEPHONE</h3><span>(800) 412 0923</span></li>
                        <li><h3>E-MAIL</h3><span><a href="#">info@missiontheme.com</a></span></li>
                      
                </ul>
                
            </div>
            
        </div>
        
    </footer>
    
    <div class="smallFooter">
        
        <div class="container clearfix">
      
            <div class="sixteen columns">
                
                                   
        <ul class="smallFooterLeft">
                    
                        <li class="donate"><a href="causes"><i class="icon-plus-circled"></i>donate</a></li>
                        <li class="mail"><a href="#"><i class="icon-mail"></i></a></li>
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook"></i></a></li>
               

                </ul>
        
        <div class="smallFooterRight">
            
            <span>COPYRIGHT ©MISSION 2012. ALL RIGHTS RESERVED.</span>
            
        </div>
                
            </div>
            
        </div>
        
    </div>
    
    
<!-- include jQuery -->
<script src="javascript/jquery-1.8.0.min.js"></script>
<!-- Include the plug-in -->
<script src="javascript/script.js"></script>
<script src="javascript/bootstrap.js"></script>
<script src="javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript/superfish.js"></script>
<script type="text/javascript" src="javascript/hoverIntent.js"></script>


<!-- jQuery PORTFOLIO   -->
	<script type="text/javascript" src="plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="plugin/js/jquery.themepunch.megafoliopro.min.js"></script>
    
 <!-- Add fancyBox -->

	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->

	<script type="text/javascript" src="plugin/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="plugin/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>


	<script type="text/javascript" src="plugin/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        

</body>
</html>