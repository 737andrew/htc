<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Юмор анекдоты шутки смешные истории">
    <title>Юмор | анекдоты, шутки, смешные истории</title>

<?php include("../construct/head.php"); ?>
<?php include("../construct/author.php"); ?>
</head>

<body>

    <?php include("../construct/navbar.php"); ?>
	
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><h1>Юмор
                    <small>нам строить и жить помогает</small>
                </h1>
                <ol class="breadcrumb">
     <li><?php echo $crumb ?>
     </li>
	 <li><?php echo $humor ?>
     </li>
     <li class="active">Статьи</li>
 </ol>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-md-1">
                <p><i class="fa fa-file-text fa-4x"></i>
                </p>
                <p>May 24, 2013</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img src="http://placehold.it/600x300" class="img-responsive">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">A Blog Home Template for Bootstrap 3</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>This is a very basic starter template for a blog homepage. It makes use of Font Awesome icons that are built into the 'Modern Business' template, and it makes use of the Bootstrap 3 pager at the bottom of the page.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>

        <hr>



    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <div class="container">
	<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><h1>Юмор
                    <small>нам строить и жить помогает</small>
                </h1>
                <ol class="breadcrumb">
     <li><?php echo $crumb ?>
     </li>
	 <li><?php echo $humor ?>
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
