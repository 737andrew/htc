<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Шаблон статей</title>

<?php include("construct/head.php"); ?>
<?php include("construct/author.php"); ?>

</head>

<body>

    <?php include("construct/navbar.php"); ?>

    <div class="container">
	<div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><h1>Прайс 
                    <small> на работы по гипсокартону</small>
                </h1>
                <ol class="breadcrumb">
     <li><?php echo $crumb ?>
     </li>
     <li class="active">Прайс</li>
 </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- the actual blog post: title/author/date/content -->
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM by <?php echo $author ?>
                </p>
                <hr>
                <!--page-->
                                        <div><table class="table table-striped">
<thead>
<tr>
<th><h3>#</h3></th>
<th><h3>наименование работ</h3></th>
<th><h3>ед.изм</h3></th>
<th><h3>цена</h3></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Монтаж потолка</td>
<td>м.кв</td>
<td>6 у.е</td>
</tr>
<tr>
<td>2</td>
<td>Монтаж стены </td>
<td>м.кв</td>
<td>5 у.е</td>
</tr>
<tr>
<td>3</td>
<td>Монтаж перегородки </td>
<td>м.кв</td>
<td>8 у.е</td>
</tr>
<tr>
<td>4</td>
<td>Монтаж короба (прямолинейного) </td>
<td>м.п</td>
<td>6 у.е</td>
</tr>
<tr>
<td>5</td>
<td>Монтаж короба (криволинейного) </td>
<td>м.п</td>
<td>8 у.е</td>
</tr>
<tr>
<td>6</td>
<td>Монтаж киссона (прямолинейного) </td>
<td>м.п</td>
<td>10 у.е</td>
</tr>
<tr>
<td>7</td>
<td>Монтаж киссона (криволинейного) </td>
<td>м.кв</td>
<td>12 у.е</td>
</tr>
<tr>
<td>8</td>
<td>Поклейка откосов</td>
<td>м.п</td>
<td>5 у.е</td>
</tr>
</tbody>
</table>
                <hr><div class="share42init" data-path="http://htc/share42/">1</div>
<script type="text/javascript" src="http://htc/share42/share42.js"></script>
                
                	<hr>
                	           <?php include("construct/google.php"); ?>
			</div>
</div>
            <div class="col-lg-4">
                <div class="well">
                    <h4>Следуй за нами</h4>
                    <?php include ("construct/social.php"); ?>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="span4 side_bar">
                        <section style="padding-top: 0px" class="blog_cat" >
                            <div class="well">
                               		<?php include ("construct/sidebar.php"); ?>		
								<div class="side_bar_widget">
<h4><span class="colored">///</span> Свежие записи</h4>
 <hr>  
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
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> &copy;Монтажник</p>
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

