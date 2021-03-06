<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Шаблон статей</title>

<?php include("construct/head.php"); ?>
</head>

<body>

    <?php include("construct/navbar.php"); ?>

    <div class="container">
	<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Blog Post
                    <small>A Sample Blog Post</small>
                </h1>
                <?php include("construct/crumbs.php"); ?>
            </div>

        </div>

        

        <div class="row">

            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <hr>
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM by <a href="#">Start Boostrap</a>
                </p>
                <hr>
                <img src="http://placehold.it/900x300" class="img-responsive">
                <hr>
                <p class="lead">Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
                <p>You know, being a test pilot isn't always the healthiest business in the world.</p>
                <p>Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé.</p>
                <p>Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee.</p>
                <p>Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.</p>
                <p><strong>Placeholder text by:</strong>
                </p>
                <ul>
                    <li><a href="http://spaceipsum.com/">Space Ipsum</a>
                    </li>
                    <li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
                    </li>
                    <li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
                    </li>
                </ul>

                <hr>
			</div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="span4 side_bar">
                        <section style="padding-top: 0px" class="blog_cat" >
                            <div class="well">
                               	<div class="side_bar_widget"><h4><span class="colored">///</span> Топ статей</h4>
                                     <hr>
                                  	<ul>
                                        <li><a href="http://montagnik.od.ua/docs/arca.html">Делаем арку из гипсокартона</a></li>
                                        <li><a href="http://montagnik.od.ua/potolki.html">Потолки из гипсокартона</a></li>
                                        <li><a href="http://montagnik.od.ua/stena.html">Стены из гипсокартона</a></li>
                                        <li><a href="http://montagnik.od.ua/svoystva.html">Свойства гипсокартона</a></li>
									</ul>
								</div>		
								<div class="side_bar_widget"><h4><span class="colored">///</span> Свежие записи</h4> <hr>
                                     <ul> 
                                        <li><a href="http://montagnik.od.ua/blogun-sistema-monetizacii-sajtov.html">&laquo;Блогун&raquo;- система монетизации сайтов</a></li>
                                        <li><a href="http://montagnik.od.ua/zarabotok-v-seti.html">заработок в сети</a></li>
                                        <li><a href="http://montagnik.od.ua/anekdoty.html">анекдоты</a></li>
                                        <li><a href="http://montagnik.od.ua/docs/arca.html">Делаем арку из гипсокартона</a></li>
                                        <li><a href="http://montagnik.od.ua/svoystva.html">Свойства гипсокартона</a></li>
                                    </ul>
		   						</div>
<div class="side_bar_widget"><h4><span class="colored">///</span> Интересное в сети</h4> <hr>
				<ul>
				<!--s_links--><!--/s_links--><br>
				<!--s_links--><!--/s_links--><br>
				<!--s_links--><!--/s_links--><br>
				</ul>
			</div> 
              </div>
               </section>
                    </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
                </div>
                <!-- /well -->
            </div>
        </div>

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

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
