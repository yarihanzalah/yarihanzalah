<!DOCTYPE html>
<html>
<head>
	<?php 
	session_start();
	include '../inc/config.php';
	?>
	<title>KASIR RESTAURANT</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>	
</head>
<link href='../images/RPL.png' rel='SHORTCUT ICON'/>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home-admin.php">RESTAURANT</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">			
				<ul class="nav navbar-nav navbar-right">
					<li class="active" style="margin-right: 10px;"><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Message</a></li>
					<li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo $_SESSION['username']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="change-password.php"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
            <li><a href="change-picture.php"><span class="glyphicon glyphicon-picture"></span> Change Picture</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../inc/logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
          </ul>
        </li>	
				</ul>
			</div>
		</div>
</nav>
	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Notification Message</h4>
				</div>
				<div class="modal-body">
					<div align="center">
					  <?php 
echo "<div style='padding:5px' class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> - Welcome to Our Website - <br> - | -<br> You Login as Admin</div>";	
					?>
				  </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>						
				</div>
				
			</div>
		</div>
	</div>

<br><br><br>

	<div class="col-md-2">
		<div class="row">
				<?php 
			$use=$_SESSION['username'];
			$fo=mysql_query("select foto from user where username='$use'");
			while($f=mysql_fetch_array($fo)){
				?>				

				<div class="col-xs-12 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive" src="foto/<?php echo $f['foto']; ?>">
					</a>
				</div>
				<?php 
			}
			?>	
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="home-admin.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
            <li><a href="makanan.php"><span class="glyphicon glyphicon-cutlery"></span> MAKANAN</a></li>
            <li><a href="book-stock.php"><span class="glyphicon glyphicon-cutlery"></span>  STOCK MAKANAN</a></li>
            <li><a href="unit-book.php"><span class="glyphicon glyphicon-glass"></span>  MINUMAN</a></li>
            <li><a href="cashier.php"><span class="glyphicon glyphicon-glass"></span> STOCK MINUMAN</a></li>
            <li><a href="book-stock.php"><span class="glyphicon glyphicon-user"></span>  USER</a></li>
            <li><a href="unit-book.php"><span class="glyphicon glyphicon-list-alt"></span>  DETAIL ORDER</a></li>
            <li><a href="cashier.php"><span class="glyphicon glyphicon-list"></span> TRANSAKSI</a></li>
            <li><a href="unit-book.php"><span class="glyphicon glyphicon-briefcase"></span>  ORDER</a></li>
            <li><a href="cashier.php"><span class="glyphicon glyphicon-download-alt"></span> BACKUP DATABASE</a></li>
           
		</ul>
<?php
  $thn=date("Y");
?>
		<!-- FOOTER -->
      <hr class="featurette-divider">
      <footer style="background-color: #000; color: #fff;">
        <br>
        <p align="center" style="font-size: 12px;">&copy; <?php echo $thn ?> Rofi Arkan <br>  All Rights Reserved</p>
        <br>
      </footer>
	</div>

<div class="col-xs-12 col-md-10">