<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.html"> <span class="icon-home"></span> Home</a>
				<a href="#"><span class="icon-user"></span> My Account</a>
				<a href="register.html"><span class="icon-edit"></span> Free Register </a>
				<a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
				<a class="active" href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
			<img src="assets/img/g2g.png" alt="grocery2go">
	</a>
	</h1>
	</div>
	<div class="span4">

	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>

	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.html">Home	</a></li>
			  <li class=""><a href="list-view.html">List View</a></li>
			  <li class=""><a href="grid-view.html">Grid View</a></li>
			  <li class=""><a href="three-col.html">Three Column</a></li>
			  <li class=""><a href="four-col.html">Four Column</a></li>
			  <li class=""><a href="general.html">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->
  <?php
      $servername="localhost";
      $serverusername="root";
      $servepassword="";
      $dbname="grocery2go";

      $conn = mysqli_connect($servername,$serverusername,$serverpassword,$dbname);

      if(!$conn){
        die("Connection failed:" .mysqli_connect_error());
      }

      $sql="SELECT * FROM ";
      $result= mysqli_query($conn,$sql);

      if(mysqli_num_rows($result)>0){

      }
  ?>

	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"> 2 Items are in the cart </small></h1>
	<hr class="soften"/>

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Unit price</th>
                  <th>Qty </th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                  <td><img width="100" src="assets/img/e.jpg" alt=""></td>
                  <td>Items name here<br>Carate : 22<br>Model : n/a</td>
                  <td>$50.00</td>
                  <td>
					<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="2">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				</td>
                  <td>$100.00</td>
                </tr>
				<tr>
                  <td><img width="100" src="assets/img/f.jpg" alt=""></td>
                  <td>Item names and brief details<br>Carate:24 <br>Model:HBK24</td>
                  <td>$348.42</td>
                  <td>
				  <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button">+</button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				  </td>
                  <td>$348.42</td>
                </tr>
                  <tr>
                  <td colspan="6" class="alignR"><b>Subtotal</b>	</td>
                  <td> $00.00</td>
                </tr>
                 <tr>
                  <td colspan="6" class="alignR">Delivery Fee:	</td>
                  <td> $00.00</td>
                </tr>
				         <tr>
                  <td colspan="6" class="alignR"><b>Total:</b></td>
                  <td> $00.00</td>
                </tr>

				</tbody>
            </table><br/>


            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td>
				<form class="form-inline">
				  <label style="min-width:159px"> VOUCHERS Code: </label>
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="shopBtn"> ADD</button>
				</form>
				</td>
                </tr>

			</tbody>
				</table>

	<a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

</div>
</div>
</div>
<!--
Clients
-->


<!--
Footer
-->

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
