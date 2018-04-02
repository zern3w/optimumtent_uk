<!DOCTYPE html>
<html lang="en">
<?php include_once( "inc/mysql_connect.php") ?>

<head>
<meta name="robots" content="noindex"/>
<?php include_once("inc/noindex-dupes.php") ?>
<link rel="canonical" href="/coleman-family-tents-comparison-guide.php" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo date("Y");?> Coleman Tents Comparison Guide</title>

	<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

<?php include_once( "inc/nav.php") ?>

<a id="top"></a>
<div class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row">
				<h1 class="header left white-text">Coleman Tents: Comparison Guide </h1>
			</div>
			<div class="row">
				<div class="get-started col s10 m6 l4  left">
					<h5 class="white-text">	<?php include_once("inc/table-header.php") ?></h5>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax">
		<?php echo $background ; ?>
	</div>
</div>

<div class="section-main ">
<div class="container-main">
<div class="row white">

<div class="col s12 m8 l9 white">

		<a id="get-started"></a>

				<?php include_once("inc/table-header.php") ?>
				<?php $query=mysql_query("SELECT * from all_tents WHERE Brand = 'Coleman'  ORDER  BY OutOfStock, Model DESC, ((MSRP - AmazonPrice)/ MSRP) DESC ")  or die(mysql_error()); ?>
				<?php include_once("inc/tables/brand.php") ?>

	<hr>
 </div>

<!-- START SIDE -->
<?php include_once( "inc/side-bar/sidebar-comparison-table.php") ?>
<!-- END SIDE -->

</div>
</div>
</div>

  <?php include_once( "inc/footer.php") ?>
	<?php include_once("inc/analytics.php") ?>

  <script src="jq/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
 	<script src="js/hidenav.js"></script>

</body>
</html>