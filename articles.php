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
	<title>Articles | Lokoja Journal of Management and Technology</title>
<?php include('nav/head.php'); ?>
<style>
    
    p{
      font-size: 2.5vh;}
</style>
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
                <h4 class="text-center" style="margin-top: -50px;">Articles A - Z</h4>
                 <div class="card-header card-body text-center" >
                   <?php foreach(QueryDB("SELECT * FROM alphabets ") as $ro){extract($ro);?>
                    <a class="" href="articles?range=<?php echo $name; ?>" style="font-size: ; padding: 3px ;"> <?php echo $name; ?> |</a> <?php } ?><a class="" href="articles" style="font-size: ; padding: 3px ;"> All |</a>
                </div>

            <p>Displaying Results for   <?php if(!empty($_GET['range'])) { echo ($_GET['range']); }else{ echo "All"; } ?></p>

                <div class="row">
                      <?php if(!empty($_GET['range'])){ 
                foreach(QueryDB("SELECT * FROM articles ") as $rws) { extract($rws); $fna = substr($j_title, 0,1);

                if(strtoupper($fna) == $_GET['range']  ){  ?> 
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card-body" style="box-shadow: 1px 1px 5px 1px #dfdfdf; border-radius: 2%;">
                            <div class="row" style="">
                                <div class="col-3" style="width: 15%;float: left;">
                                    <a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>"><img src="master/<?php echo $j_img; ?>" alt="" width="50px" /></a>
                                </div>
                                <div class="col-9" style="width: 80%; float: right;">
                                    <div class="postTitle">
                                        <p style="font-weight: bold"><a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>" style=" text-decoration:none "><?php echo $j_title;?></a>
                                        </p>
                                         
                                    </div>
                                </div>
                            </div>
                            <p style="font-size: 12px;"><i class="fa fa-file" aria-hidden="true"></i> Author(s): <?php  echo $j_author; ?> &nbsp; &nbsp; <i class="fa fa-user" aria-hidden="true"></i> Publisher: LOJMAT &nbsp; &nbsp; <i class="fa fa-book" aria-hidden="true"></i> ISSN: <?php echo get_journa_issn($j_cat); ?> </p>
                      
                     
                    </div>
                </div>

                         <?php  }  ?> 
    <?php  } } ?>

 <?php if(empty($_GET['range'])){ foreach(QueryDB("SELECT * FROM articles ORDER BY j_title ASC ") as $rows) { extract($rows); ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">                                                 
            <div class="card-body " style="box-shadow: 1px 1px 5px 1px #dfdfdf; border-radius: 2%;">
                <div class="row" style="">
                    <div class="col-3" style="width: 15%;float: left;">
                        <div class="" style="">
                            <a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>"><img src="master/<?php echo $j_img; ?>" alt="" width="50px" /></a>
                        </div>
                    </div>
                    <div class="col-9" style="width: 80%; float: right;">
                        <div class="postTitle">
                            <p style="font-weight: bold"><a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>" style=" text-decoration:none "><?php echo $j_title;?></a></p>
                        </div>
                    </div>
                </div>
                <p  style="font-size: 12px;">
                    <i class="fa fa-file" aria-hidden="true"></i> Author(s): <?php  echo $j_author; ?> &nbsp; &nbsp; 
                    <i class="fa fa-user" aria-hidden="true"></i>  Publisher: LOJMAT &nbsp; &nbsp;      
                        <i class="fa fa-book" aria-hidden="true"></i> ISSN: <?php echo get_journa_issn($j_cat); ?> </p>
                      
                    </div>
                </div>
                    <?php  }  }  ?>
            </div>

                        
                  <ul class="pagination">
                    <li><a class="button-small-theme rounded3" href="#">1</a></li>
                    <li><a class="button-small grey rounded3" href="#">2</a></li>
                    <li><a class="button-small grey rounded3" href="#">3</a></li>
                    <li><a class="button-small grey rounded3" href="#">4</a></li>
                    <li><a class="button-small grey rounded3" href="#">5</a></li>
                </ul>
            </div>

            <ul class="sidebar col-md-3 clearfix" style="margin-top:-40px;">
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
                        <h3>Recent Articles<span><a href="articles">VIEW ALL &rarr;</a></span></h3>
                      <?php foreach(QueryDB("SELECT * FROM articles  order by RAND() LIMIT 6") as $rows){ extract($rows); ?>
                                <p><a href="article/<?php echo $j_id; ?>/<?php echo $j_link; ?>" style="text-decoration: none;"><?php echo $j_title;?></a></p>
                    <?php } ?>
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
  <?php include('nav/footer.php');  ?>
  <?php include('nav/scripts.php');  ?>

</body>
</html>