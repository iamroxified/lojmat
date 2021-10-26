<?php  session_start(); ob_start();  require('db/config.php'); require('db/functions.php');  ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
    <html lang="en">
    <!--<![endif]-->
<head>
    <title>LOJMAT :: Lokoja Journal of Management and Technology</title>
<?php include('nav/head.php'); ?>
</head>
<body class="body-dark">
   <?php  include('nav/header.php'); ?>
    <div id="topbar">
        <div class="container clearfix">
            <div class="sixteen columns">
            <nav class="mainNav">
            </nav>
            </div>
        </div>
    </div>
    <div class="sliderWrapper">
        <div id="slider" class="flexslider">
            <div class="sliderLogo"><a href="#"><img src="images/lojmat2.png" alt="" width="50"></a></div>
            <ul class="slides">
                <li>
                    <img alt="" src="images/slider/slide1.jpg" />
                    <div class="flex-holder">
                        <div class="flex-caption">
                            <div>
                                <h3 style="background: #555555; color:white; padding: 10px;">LOKOJA JOURNAL OF MANAGEMENT AND TECHNOLOGY</h3>
                              <!--   <span class="flex-caption-decription">
                                Suspendisse nec sem in ligula blandit feugiat convallis ac nunc.
                                </span> -->	
                            </div>
                        </div>
                    </div>
                </li>
               <li>
                    <img alt="" src="images/slider/slide1.jpg" />
                    <div class="flex-holder">
                        <div class="flex-caption">
                            <div>
                                <h3 style="background: #555555; color:white; padding: 10px;">LOJMAT</h3>
                              <!--   <span class="flex-caption-decription">
                                Suspendisse nec sem in ligula blandit feugiat convallis ac nunc.
                                </span> --> 
                            </div>
                        </div>
                    </div>
                </li>
                 <li>
                    <img alt="" src="images/slider/slide1.jpg" />
                    <div class="flex-holder">
                        <div class="flex-caption">
                            <div>
                                <h3 style="background: #555555; color:white; padding: 10px;">LOKOJA JOURNAL OF MANAGEMENT AND TECHNOLOGY</h3>
                              <!--   <span class="flex-caption-decription">
                                Suspendisse nec sem in ligula blandit feugiat convallis ac nunc.
                                </span> --> 
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
            
        <div class="container">
            <div class="" style="text-align: justify;">
                <h3 style="text-align: center; text-transform: uppercase; padding: 10px;">Welcome to LOJMAT</h3>
                <p>
                Lokoja Journal of Management and Technology (LOJMAT) is a bi-annual publication of the School of Management Studies, Kogi State Polytechnic, Lokoja.</p>

                <p>In an increasingly expanding sphere of global activities with the reducing influences of physical territorialities, government regulations, and anthropogenic limitations as a result of international competition spurred by technological advances</p>

                
            </div>
        </div>
  
    
    <div class="container">
        <div class="horizontalWidgetArea">
            <div class="widget dd_causes_widget clearfix">
                <h3 class="container">LATEST JOURNALS<span><a href="journals">VIEW ALL &rarr;</a></span></h3>
                <div class="row">
                     <?php foreach(QueryDB("SELECT * FROM journals ") as $rows){extract($rows); ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12" >
                        <div class="card">
                        <div class="card-body dd_events_post" style="box-shadow: 1px 1px 5px 1px #dfdfdf; border-radius: 2%;">
                            <div class="row" style="">
                                <div class="col-3" style="width: 15%;float: left;">
                                    <div class="" style="">
                                        <a href="journal/<?php echo $jo_code; ?>/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>"><img src="master/<?php echo $jo_img; ?>" alt="" width="50px" /></a>
                                    </div>
                                </div>
                                <div class="col-9" style="width: 80%; float: right;">
                                    <div class="postTitle">
                                        <h5><a href="journal/<?php echo $jo_code; ?>/<?php echo strtolower(str_replace(' ','-',$jo_link)); ?>" style="font-size: 2.5vh; text-decoration:none "><?php echo $jo_name.' '.$jo_vol.' '.$jo_num;?></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                           <div class="text-center" style="">
                          <hr>
                            <p c style="font-size: 2vh;"><i class="fa fa-file" aria-hidden="true"></i> Issue: <?php echo $jo_vol.' '.$jo_num; ?>&nbsp; &nbsp; &nbsp; <i class="fa fa-book" aria-hidden="true"></i> ISSN: <?php echo $jo_issn; ?> &nbsp; &nbsp; &nbsp; 
                            <i class="fa fa-user" aria-hidden="true"></i> Publisher: LOJMAT &nbsp; &nbsp; &nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> Published: <?php echo substr($jo_pub,8).' '._date(substr($jo_pub,5,2)).' '.substr($jo_pub,0,4);?></p>
                         
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="rightWidgetArea">
                <div class="widget dd_news">
                <h3 class="container">Recent Articles<span><a href="articles">VIEW ALL &rarr;</a></span></h3>
                    <div class="row">
                        <?php foreach(QueryDB("SELECT * FROM articles  order by j_date DESC LIMIT 6") as $rows){ extract($rows); ?>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12" >                                                                                                  
                   <div class="card">
                   <div class="card-body">               
                        <div class="postTitle">
                            <p><a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>"><?php echo $j_title; ?></a></p>
                        </div>
                            <ul class="metaBtn clearfix">
                                <li><a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>" style="font-family: 'Calibri';"><span>BY</span> <?php  echo $j_author; ?></a></li>
                            </ul>
                </div>
            </div>
        </div>
                    <?php  } ?>
                </div>
                
            </div>   
        </div>
       </div>
    </div>
   <?php include('nav/footer.php');  ?>
<?php include('nav/scripts.php'); ?>       

</body>
</html>