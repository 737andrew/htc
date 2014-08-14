<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Полезные статьи.Делаем ремонт своими руками">
    <title>Полезные статьи | ремонт своими руками</title>

<?php include("../construct/head.php"); ?>
<?php include("../construct/author.php"); ?>
</head>

<body>

    <?php include("../construct/navbar.php"); ?>

    <div class="container">
	<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><h1>Полезные статьи
                    <small>ремонт своими руками</small>
                </h1>
                <ol class="breadcrumb">
     <li><?php echo $crumb ?>
     </li>
	 <li><?php echo $remont ?>
     </li>
     <li class="active">Статьи</li>
 </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- the actual blog post: title/author/date/content -->
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 <?php echo $author ?>
                </p>
                <hr>
                <!--page-->

                
                	<hr>
                	           <?php include("../construct/google.php"); ?>
			</div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Следуй за нами</h4>
                    <?php include ("../construct/social.php"); ?>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="span4 side_bar">
                        <section style="padding-top: 0px" class="blog_cat" >
                            <div class="well">
                               		<?php include ("../construct/sidebar.php"); ?>		
									<?php include ("../construct/cat.php"); ?>
<div class="side_bar_widget"><h4><span class="colored">///</span> Интересное в сети</h4> <hr>
				<ul>
				<!--s_links--><!--/s_links--><br>
				</ul>
			</div> 
              </div>
               </section>
                    </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
	<div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $cop_y?>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

<?php include ("../construct/java.php"); ?>

</body>

</html>
