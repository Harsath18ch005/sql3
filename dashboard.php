
<?php 

 include_once('db.php');
 
session_start();
 if(!isset($_SESSION['username']) ) {
	header("location: login.php");
	exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rajaji Tnpsc Training Centre</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
		.main-container
		{
			min-height: 500px;
		}
	</style>
</head>
<body>
	<?php include_once('header.php'); ?>

	<!-- Navigation -->
    <?php include_once('menu.php'); ?>
    <!-- End Navigation -->

    <div class="container main-container">
        

        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
			
                <div class="col-lg-12 col-sm-12">
                        <span class="title">Rajaji
Tnpsc
Training Centre</span>
                </div>
                
                
                
                
                
                <div class="col-lg-12 col-sm-12 text-center">
                
                
                  	
                    
                   
                	
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-news.php">
                            <img src="images/index.png">
                            <span>ADD DAILY NEWS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-news.php">
                            <img src="images/index.png">
                            <span>VIEW DAILY NEWS</span>
                    	</a>
                        </div>
                    </div>
                   <!---  <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-latnews.php">
                            <img src="images/news4454.png">
                            <span>ADD NEWS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-latnews.php">
                            <img src="images/news4454.png">
                            <span>VIEW NEWS</span>
                    	</a>
                        </div>
                    </div> ------>
                                    	
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-post.php">
                            <img src="images/syllabus.jpg">
                            <span>ADD SYLLABUS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-post.php">
                            <img src="images/syllabus.jpg">
                            <span>VIEW SYLLABUS</span>
                    	</a>
                        </div>
                    </div>

                     
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-book.php">
                            <img src="images/books.png">
                            <span>UPLOAD BOOK</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-book.php">
                            <img src="images/books.png">
                            <span>VIEW BOOK</span>
                    	</a>
                        </div>
                    </div>
                    
                     <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-topper.php">
                            <img src="images/topper.jpg">
                            <span>ADD TOPPER</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-topper.php">
                            <img src="images/topper.jpg">
                            <span>VIEW TOPPER</span>
                    	</a>
                        </div>
                    </div>
                    
              

                     <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-study.php">
                            <img src="images/affairs.png">
                            <span>ADD STYDY METERIAL</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-study.php">
                            <img src="images/affairs.png">
                            <span>VIEW STYDY METERIAL</span>
                    	</a>
                        
                        </div>
                        
                    </div>
                    <!-------       <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-current.php">
                            <img src="images/affairs.png">
                            <span>ADD MONTHLY CURRENT AFFAIRS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-current.php">
                            <img src="images/affairs.png">
                            <span>VIEW MONTHLY CURRENT AFFAIRS</span>
                    	</a>
                        
                        </div>
                        
                    </div>------->
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-modelques.php">
                            <img src="images/q_paper.png">
                            <span>ADD MODEL QUESTIONS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-modelques.php">
                            <img src="images/q_paper.png">
                            <span>VIEW MODEL QUESTIONS</span>
                    	</a>
                        </div>
                    </div>
                  <!---    
                     <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-mainsmodel.php">
                            <img src="images/mains.png">
                            <span>ADD MAINS MODEL QUESTIONS</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-mainsmodel.php">
                            <img src="images/mains.png">
                            <span>VIEW MAINS MODEL QUESTIONS</span>
                    	</a>
                        </div>
                    </div>
                     <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-mains.php">
                            <img src="images/icModelPaper.png">
                            <span>ADD MAINS ESSAY</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-mains.php">
                            <img src="images/icModelPaper.png">
                            <span>VIEW MAINS ESSAY</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-thought.php">
                            <img src="images/thought.png">
                            <span>ADD THOUGHT FOR THE DAY</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-thought.php">
                            <img src="images/thought.png">
                            <span>VIEW THOUGHT FOR THE DAY</span>
                    	</a>
                        </div>SYLLABUS  syllabus
                    </div> -------->
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="add-answer.php">
                            <img src="images/answer.png">
                            <span>ADD ANSWER KEY</span>
                    	</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="view-ans.php">
                            <img src="images/answer.png">
                            <span>VIEW ANSWER KEY</span>
                    	</a>
                        </div>
                    </div>
                   <!------ <div class="col-lg-2 col-sm-2">
                    	<div class="widgeticons">
                        <a href="student.php">
                            <img src="images/index552.png">
                            <span>STUDENTS DETAILS</span>
                    	</a>
                        
                        </div>
                        
                    </div>------->
                    
                    
                    
                   
                    
                    
                    
            
            	</div>
        		

				

        	</div>

        	<div class="clearfix visible-sm"></div>

			
			

        </div>
	</div>

	<?php include_once('footer.php'); ?>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.blImageCenter.js"></script>
    <script src="js/mimity.js"></script>
</body>
</html>