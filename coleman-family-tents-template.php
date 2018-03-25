<!DOCTYPE html>
<html lang="en">
<?php include_once( "inc/mysql_connect.php") ?>
<?php include_once("mysql/coleman-family-tents_mysql.php") ?>


<head>
<?php include_once("inc/noindex-dupes.php") ?>

<link rel="canonical" href="http://localhost/optuk/coleman-family-tents.php" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

	<title>What are the best <?php echo $lc_type ;?> tents to buy? <?php include_once("inc/title-end.php") ?> </title>
	<meta name="description" content="After comparing more than <?php echo $TotalTents - 6; ?> <?php echo $lc_type ;?> tents, you can see some of the tents could sleep 3 at a push, with others been barely large enough to sleep a fully grown man." />

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
				<h1 class="header left white-text">What are the best <?php echo $lc_type ;?> tents to buy?</h1>
			</div>
			<div class="row">
				<div class="get-started left">
					<a href="#get-started" class="btn-large waves-effect waves-light hover-button <?php echo $myButtonColor ; ?>">Get Started</a>
				</div>
			</div>
		</div>
	</div>

	<div class="parallax">
		<img src="img/backgrounds/campsite.jpg" alt="Camp Site">
	</div>
</div>

<div class="section-main ">
<div class="container-main">
<div class="row white">

<div class="col s12 m8 l9 white">

		<a id="get-started"></a>
		<div class="card">
			<div class="card-content">
				<h3 >Choosing a <?php echo $lc_type ;?> tent</h3>
				<p>
					<blockquote>
						It is always difficult to choose a single tent and call it "the best" even when you start by narrowing things down and looking at a smaller group, like <?php echo $uc_type ; ?> tents.
						Prices start from $<?php echo $LowestPrice ;?> climbing up to $<?php echo $HighestPrice ; ?> along with the size ranging from <?php echo $Smallest ; ?> sq ft for the smallest up to <?php echo $Largest ; ?> sq ft for the largest.
						I decided it best to divide the <?php echo $TotalTents ; ?> tents that I have hand picked from <?php echo $TotalBrands ;?> different manufactures into <?php echo $sections ; ?> more manageable sections. This way we can compare like with like.
						At the bottom of the page you can see a summary of the <?php echo $sections ; ?> backpacking tents that scored the best overall, based on where they ranked in each of the <?php echo $sections ; ?> sections.
						<strong>TLDR To busy to read through each section?</strong> Jump straight to the <a href="#top-ten-<?php echo $lc_type ; ?>-tents">Top 10 <?php echo ' '.$uc_type.' ' ?>Tents</a>
				</blockquote>
				</p>
					<?php include_once( "inc/toc/toc-coleman.php") ?>
				<hr>
			</div>
		</div>

		<a id="top-rated"></a>
		<div class="card">
			<div class="card-content">
				<h2>Top Rated <?php echo $uc_type ?> Tents</h2>
					<p>
						<?php echo ucwords (NumbersToWords::convert($TotalTopRated)); ?> of the  <?php echo strtolower(ucwords (NumbersToWords::convert($TotalTents))) ;?> tents have what one could consider awesome ratings along with lots of reviews.
							The one with the best overall score is <?php echo $TopRated1Brand ?>'s <a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated1aname ?>"><?php echo $TopRated1Model ?></a> <i>"pictured below"</i>
					</p>

					</p>
						<div class="valign-wrapper carousel-top">
							<div class="card col s12 m10 offset-m1 hoverable">
								<div class="card-content">
								<a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated1aname ?>"><img src="img/large/<?php echo $TopRated1Image ;?>" width="100%" height="auto" alt="<?php echo $TopRated1Brand ?> <?php echo $TopRated1Model ?> tent" ></a>
								</div>
							</div>
						</div>
					<div class="table-container z-depth-4">
						<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $TopRated1Model; ?></th>
							<th><?php echo $TopRated2Model; ?></th>
							<th><?php echo $TopRated3Model; ?></th>
							<th><?php echo $TopRated4Model; ?></th>
							<th><?php echo $TopRated5Model; ?></th>
							</tr><tr>
							<td><?php echo $TopRated1Size; ?></td>
							<td><?php echo $TopRated2Size; ?></td>
							<td><?php echo $TopRated3Size; ?></td>
							<td><?php echo $TopRated4Size; ?></td>
							<td><?php echo $TopRated5Size; ?></td>
							</tr><tr>
							<td>MSRP $<?php echo $TopRated1MSRP; ?></td>
							<td>MSRP $<?php echo $TopRated2MSRP; ?></td>
							<td>MSRP $<?php echo $TopRated3MSRP; ?></td>
							<td>MSRP $<?php echo $TopRated4MSRP; ?></td>
							<td>MSRP $<?php echo $TopRated5MSRP; ?></td>
							</tr><tr>
							<td>Price $<?php echo $TopRated1AmazonPrice; ?></td>
							<td>Price $<?php echo $TopRated2AmazonPrice; ?></td>
							<td>Price $<?php echo $TopRated3AmazonPrice; ?></td>
							<td>Price $<?php echo $TopRated4AmazonPrice; ?></td>
							<td>Price $<?php echo $TopRated5AmazonPrice; ?></td>
							</tr><tr>
							<td><?php echo round($TopRated1Discount, 2); ?>%</td>
							<td><?php echo round($TopRated2Discount, 2); ?>%</td>
							<td><?php echo round($TopRated3Discount, 2); ?>%</td>
							<td><?php echo round($TopRated4Discount, 2); ?>%</td>
							<td><?php echo round($TopRated5Discount, 2); ?>%</td>
							</tr><tr>
							<td>Height <?php echo $TopRated1Height; ?></td>
							<td>Height <?php echo $TopRated2Height; ?></td>
							<td>Height <?php echo $TopRated3Height; ?></td>
							<td>Height <?php echo $TopRated4Height; ?></td>
							<td>Height <?php echo $TopRated5Height; ?></td>
							</tr><tr>
							<td>Area <?php echo $TopRated1Area; ?>Sq Ft</td>
							<td>Area <?php echo $TopRated2Area; ?>Sq Ft</td>
							<td>Area <?php echo $TopRated3Area; ?>Sq Ft</td>
							<td>Area <?php echo $TopRated4Area; ?>Sq Ft</td>
							<td>Area <?php echo $TopRated5Area; ?>Sq Ft</td>
							</tr><tr>
							<td>Ratings <?php echo $TopRated1Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $TopRated2Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $TopRated3Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $TopRated4Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $TopRated5Ratings; ?> / 5.0</td>
							</tr><tr>
							<td>Reviews <?php echo $TopRated1Reviews; ?></td>
							<td>Reviews <?php echo $TopRated2Reviews; ?></td>
							<td>Reviews <?php echo $TopRated3Reviews; ?></td>
							<td>Reviews <?php echo $TopRated4Reviews; ?></td>
							<td>Reviews <?php echo $TopRated5Reviews; ?></td>
							</tr><tr>
							<td>Score <?php echo round($TopRated1OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($TopRated2OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($TopRated3OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($TopRated4OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($TopRated5OverallScore, 2); ?>%</td>
							</tr><tr>
							<td><?php echo $TopRated1Type; ?></td>
							<td><?php echo $TopRated2Type; ?></td>
							<td><?php echo $TopRated3Type; ?></td>
							<td><?php echo $TopRated4Type; ?></td>
							<td><?php echo $TopRated5Type; ?></td>
							</tr><tr>
							<td><a href="<?php echo $TopRated1AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $TopRated2AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $TopRated3AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $TopRated4AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $TopRated5AmazonPage; ?>">Amazon</a></td>
							</tr><tr>
							<td><a href="<?php echo $TopRated1Manufacture; ?>"><?php echo $TopRated1Brand ;?> </a></td>
							<td><a href="<?php echo $TopRated2Manufacture; ?>"><?php echo $TopRated2Brand ;?> </a></td>
							<td><a href="<?php echo $TopRated3Manufacture; ?>"><?php echo $TopRated3Brand ;?> </a></td>
							<td><a href="<?php echo $TopRated4Manufacture; ?>"><?php echo $TopRated4Brand ;?> </a></td>
							<td><a href="<?php echo $TopRated5Manufacture; ?>"><?php echo $TopRated5Brand ;?> </a></td>
							</tr><tr>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated1aname ?>"><img src="img/tables/<?php echo $TopRated1Image; ?>" width="50" height="auto" border=0></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated2aname ?>"><img src="img/tables/<?php echo $TopRated2Image; ?>" width="50" height="auto" border=0></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated3aname ?>"><img src="img/tables/<?php echo $TopRated3Image; ?>" width="50" height="auto" border=0></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated4aname ?>"><img src="img/tables/<?php echo $TopRated4Image; ?>" width="50" height="auto" border=0></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $TopRated5aname ?>"><img src="img/tables/<?php echo $TopRated5Image; ?>" width="50" height="auto" border=0></a></td>
						</tr>
						</table>
					</div>
				<hr>
			</div>
		</div>




		<a id="best-value"></a>
		<div class="card">
			<div class="card-content">
				<h2>Best Value <?php echo $uc_type ?> Tents</h2>
					<p>
						$<?php echo round($AveragePricePerSqFoot,2) ; ?> is the average price per sq foot<br /><br />

						<?php echo ucwords (NumbersToWords::convert($TotalBestValue)); ?> of the  <?php echo strtolower(ucwords (NumbersToWords::convert($TotalTents))) ;?> tents are priced more than <?php echo $min_price ; ?>
					</p>
						<div class="valign-wrapper carousel-top">
							<div class="card col s12 m10 offset-m1 hoverable">
								<div class="card-content">
									<a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue1aname ?>"><img src="img/large/<?php echo $BestValue1Image ;?>" width="100%" height="auto" alt="<?php echo $BestValue1Brand ?> <?php echo $BestValue1Model ?> tent" ></a>
								</div>
							</div>
						</div>
					<p>
						Best of the <?php echo strtolower(ucwords (NumbersToWords::convert($TotalBestValue))); ?>
						is <?php echo $BestValue1Brand ?>'s <a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue1aname ?>"><?php echo $BestValue1Model ?></a> <i>"pictured above"</i>
					</p>

					<div class="table-container z-depth-4">
						<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $BestValue1Model; ?></th>
							<th><?php echo $BestValue2Model; ?></th>
							<th><?php echo $BestValue3Model; ?></th>
							<th><?php echo $BestValue4Model; ?></th>
							<th><?php echo $BestValue5Model; ?></th>
							</tr><tr>
							<td><?php echo $BestValue1Size; ?></td>
							<td><?php echo $BestValue2Size; ?></td>
							<td><?php echo $BestValue3Size; ?></td>
							<td><?php echo $BestValue4Size; ?></td>
							<td><?php echo $BestValue5Size; ?></td>
							</tr><tr>
							<td>MSRP $<?php echo $BestValue1MSRP; ?></td>
							<td>MSRP $<?php echo $BestValue2MSRP; ?></td>
							<td>MSRP $<?php echo $BestValue3MSRP; ?></td>
							<td>MSRP $<?php echo $BestValue4MSRP; ?></td>
							<td>MSRP $<?php echo $BestValue5MSRP; ?></td>
							</tr><tr>
							<td>Price $<?php echo $BestValue1AmazonPrice; ?></td>
							<td>Price $<?php echo $BestValue2AmazonPrice; ?></td>
							<td>Price $<?php echo $BestValue3AmazonPrice; ?></td>
							<td>Price $<?php echo $BestValue4AmazonPrice; ?></td>
							<td>Price $<?php echo $BestValue5AmazonPrice; ?></td>
							</tr><tr>
							<td><?php echo round($BestValue1Discount, 2); ?>%</td>
							<td><?php echo round($BestValue2Discount, 2); ?>%</td>
							<td><?php echo round($BestValue3Discount, 2); ?>%</td>
							<td><?php echo round($BestValue4Discount, 2); ?>%</td>
							<td><?php echo round($BestValue5Discount, 2); ?>%</td>
							</tr><tr>
							<td>Height <?php echo $BestValue1Height; ?></td>
							<td>Height <?php echo $BestValue2Height; ?></td>
							<td>Height <?php echo $BestValue3Height; ?></td>
							<td>Height <?php echo $BestValue4Height; ?></td>
							<td>Height <?php echo $BestValue5Height; ?></td>
							</tr><tr>
							<td>Area <?php echo $BestValue1Area; ?>Sq Ft</td>
							<td>Area <?php echo $BestValue2Area; ?>Sq Ft</td>
							<td>Area <?php echo $BestValue3Area; ?>Sq Ft</td>
							<td>Area <?php echo $BestValue4Area; ?>Sq Ft</td>
							<td>Area <?php echo $BestValue5Area; ?>Sq Ft</td>
							</tr><tr>
							<td>Ratings <?php echo $BestValue1Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $BestValue2Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $BestValue3Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $BestValue4Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $BestValue5Ratings; ?> / 5.0</td>
							</tr><tr>
							<td>Reviews <?php echo $BestValue1Reviews; ?></td>
							<td>Reviews <?php echo $BestValue2Reviews; ?></td>
							<td>Reviews <?php echo $BestValue3Reviews; ?></td>
							<td>Reviews <?php echo $BestValue4Reviews; ?></td>
							<td>Reviews <?php echo $BestValue5Reviews; ?></td>
							</tr><tr>
							<td>Score <?php echo round($BestValue1OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($BestValue2OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($BestValue3OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($BestValue4OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($BestValue5OverallScore, 2); ?>%</td>
							</tr><tr>
							<td><?php echo $BestValue1Type; ?></td>
							<td><?php echo $BestValue2Type; ?></td>
							<td><?php echo $BestValue3Type; ?></td>
							<td><?php echo $BestValue4Type; ?></td>
							<td><?php echo $BestValue5Type; ?></td>
							</tr><tr>
							<td><a href="<?php echo $BestValue1AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $BestValue2AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $BestValue3AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $BestValue4AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $BestValue5AmazonPage; ?>">Amazon</a></td>
							</tr><tr>
							<td><a href="<?php echo $BestValue1Manufacture; ?>"><?php echo $BestValue1Brand ;?> </a></td>
							<td><a href="<?php echo $BestValue2Manufacture; ?>"><?php echo $BestValue2Brand ;?> </a></td>
							<td><a href="<?php echo $BestValue3Manufacture; ?>"><?php echo $BestValue3Brand ;?> </a></td>
							<td><a href="<?php echo $BestValue4Manufacture; ?>"><?php echo $BestValue4Brand ;?> </a></td>
							<td><a href="<?php echo $BestValue5Manufacture; ?>"><?php echo $BestValue5Brand ;?> </a></td>
							</tr><tr>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue1aname ?>"><img src="img/tables/<?php echo $BestValue1Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue2aname ?>"><img src="img/tables/<?php echo $BestValue2Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue3aname ?>"><img src="img/tables/<?php echo $BestValue3Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue4aname ?>"><img src="img/tables/<?php echo $BestValue4Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $BestValue5aname ?>"><img src="img/tables/<?php echo $BestValue5Image; ?>" width="50" height="auto" ></a></td>
						</tr>
						</table>
					</div>
				<hr>
			</div>
		</div>


		<a id="largest"></a>
		<div class="card">
			<div class="card-content">
					<h2>The Largest <?php echo $uc_type ?> Tents</h2>
						<p>
							<?php echo ucwords (NumbersToWords::convert($TotalLargest)); ?> of the tents have a sleeping area greater than <?php echo $sql_area ?> sq feet
						</p>
						<div class="valign-wrapper carousel-top">
							<div class="card col s12 m10 offset-m1 hoverable">
								<div class="card-content">
									<a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest1aname ?>"><img src="img/large/<?php echo $Largest1Image ;?>" width="100%" height="auto" alt="<?php echo $Largest1Brand ?> <?php echo $Largest1Model ?> tent" ></a>
								</div>
							</div>
						</div>
					<p>
						Largest of the <?php echo strtolower(ucwords (NumbersToWords::convert($TotalLargest))); ?>
						is <?php echo $Largest1Brand ?>'s <a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest1aname ?>"><?php echo $Largest1Model ?></a> <i>"pictured above"</i>
					</p>


					<div class="table-container z-depth-4">
						<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $Largest1Model; ?></th>
							<th><?php echo $Largest2Model; ?></th>
							<th><?php echo $Largest3Model; ?></th>
							<th><?php echo $Largest4Model; ?></th>
							<th><?php echo $Largest5Model; ?></th>
							</tr><tr>
							<td><?php echo $Largest1Size; ?></td>
							<td><?php echo $Largest2Size; ?></td>
							<td><?php echo $Largest3Size; ?></td>
							<td><?php echo $Largest4Size; ?></td>
							<td><?php echo $Largest5Size; ?></td>
							</tr><tr>
							<td>MSRP $<?php echo $Largest1MSRP; ?></td>
							<td>MSRP $<?php echo $Largest2MSRP; ?></td>
							<td>MSRP $<?php echo $Largest3MSRP; ?></td>
							<td>MSRP $<?php echo $Largest4MSRP; ?></td>
							<td>MSRP $<?php echo $Largest5MSRP; ?></td>
							</tr><tr>
							<td>Price $<?php echo $Largest1AmazonPrice; ?></td>
							<td>Price $<?php echo $Largest2AmazonPrice; ?></td>
							<td>Price $<?php echo $Largest3AmazonPrice; ?></td>
							<td>Price $<?php echo $Largest4AmazonPrice; ?></td>
							<td>Price $<?php echo $Largest5AmazonPrice; ?></td>
							</tr><tr>
							<td><?php echo round($Largest1Discount, 2); ?>%</td>
							<td><?php echo round($Largest2Discount, 2); ?>%</td>
							<td><?php echo round($Largest3Discount, 2); ?>%</td>
							<td><?php echo round($Largest4Discount, 2); ?>%</td>
							<td><?php echo round($Largest5Discount, 2); ?>%</td>
							</tr><tr>
							<td>Height <?php echo $Largest1Height; ?></td>
							<td>Height <?php echo $Largest2Height; ?></td>
							<td>Height <?php echo $Largest3Height; ?></td>
							<td>Height <?php echo $Largest4Height; ?></td>
							<td>Height <?php echo $Largest5Height; ?></td>
							</tr><tr>
							<td>Area <?php echo $Largest1Area; ?>Sq Ft</td>
							<td>Area <?php echo $Largest2Area; ?>Sq Ft</td>
							<td>Area <?php echo $Largest3Area; ?>Sq Ft</td>
							<td>Area <?php echo $Largest4Area; ?>Sq Ft</td>
							<td>Area <?php echo $Largest5Area; ?>Sq Ft</td>
							</tr><tr>
							<td>Ratings <?php echo $Largest1Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Largest2Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Largest3Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Largest4Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Largest5Ratings; ?> / 5.0</td>
							</tr><tr>
							<td>Reviews <?php echo $Largest1Reviews; ?></td>
							<td>Reviews <?php echo $Largest2Reviews; ?></td>
							<td>Reviews <?php echo $Largest3Reviews; ?></td>
							<td>Reviews <?php echo $Largest4Reviews; ?></td>
							<td>Reviews <?php echo $Largest5Reviews; ?></td>
							</tr><tr>
							<td>Score <?php echo round($Largest1OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Largest2OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Largest3OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Largest4OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Largest5OverallScore, 2); ?>%</td>
							</tr><tr>
							<td><?php echo $Largest1Type; ?></td>
							<td><?php echo $Largest2Type; ?></td>
							<td><?php echo $Largest3Type; ?></td>
							<td><?php echo $Largest4Type; ?></td>
							<td><?php echo $Largest5Type; ?></td>
							</tr><tr>
							<td><a href="<?php echo $Largest1AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Largest2AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Largest3AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Largest4AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Largest5AmazonPage; ?>">Amazon</a></td>
							</tr><tr>
							<td><a href="<?php echo $Largest1Manufacture; ?>"><?php echo $Largest1Brand ;?> </a></td>
							<td><a href="<?php echo $Largest2Manufacture; ?>"><?php echo $Largest2Brand ;?> </a></td>
							<td><a href="<?php echo $Largest3Manufacture; ?>"><?php echo $Largest3Brand ;?> </a></td>
							<td><a href="<?php echo $Largest4Manufacture; ?>"><?php echo $Largest4Brand ;?> </a></td>
							<td><a href="<?php echo $Largest5Manufacture; ?>"><?php echo $Largest5Brand ;?> </a></td>
							</tr><tr>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest1aname ?>"><img src="img/tables/<?php echo $Largest1Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest2aname ?>"><img src="img/tables/<?php echo $Largest2Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest3aname ?>"><img src="img/tables/<?php echo $Largest3Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest4aname ?>"><img src="img/tables/<?php echo $Largest4Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Largest5aname ?>"><img src="img/tables/<?php echo $Largest5Image; ?>" width="50" height="auto" ></a></td>
						</tr>
						</table>
					</div>
				<hr>
			</div>
		</div>


		<a id="cheapest"></a>
		<div class="card">
			<div class="card-content">

				<h2>Cheapest <?php echo $uc_type ?> Tents Under $100</h2>
					<p>
						<?php echo ucwords (NumbersToWords::convert($TotalCheapest)); ?> of the tents cost less than $100
					</p>
						<div class="valign-wrapper carousel-top">
							<div class="card col s12 m10 offset-m1 hoverable">
								<div class="card-content">
									<a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest1aname ?>"><img src="img/large/<?php echo $Cheapest1Image ;?>" width="100%" height="auto" alt="<?php echo $Cheapest1Brand ?> <?php echo $Cheapest1Model ?> tent" ></a>
								</div>
							</div>
						</div>
					<p>
						Cheapest of the <?php echo strtolower(ucwords (NumbersToWords::convert($TotalCheapest))); ?>
						is <?php echo $Cheapest1Brand ?>'s <a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest1aname ?>"><?php echo $Cheapest1Model ?></a> <i>"pictured above"</i>
					</p>

					<div class="table-container z-depth-4">
						<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $Cheapest1Model; ?></th>
							<th><?php echo $Cheapest2Model; ?></th>
							<th><?php echo $Cheapest3Model; ?></th>
							<th><?php echo $Cheapest4Model; ?></th>
							<th><?php echo $Cheapest5Model; ?></th>
							</tr><tr>
							<td><?php echo $Cheapest1Size; ?></td>
							<td><?php echo $Cheapest2Size; ?></td>
							<td><?php echo $Cheapest3Size; ?></td>
							<td><?php echo $Cheapest4Size; ?></td>
							<td><?php echo $Cheapest5Size; ?></td>
							</tr><tr>
							<td>MSRP $<?php echo $Cheapest1MSRP; ?></td>
							<td>MSRP $<?php echo $Cheapest2MSRP; ?></td>
							<td>MSRP $<?php echo $Cheapest3MSRP; ?></td>
							<td>MSRP $<?php echo $Cheapest4MSRP; ?></td>
							<td>MSRP $<?php echo $Cheapest5MSRP; ?></td>
							</tr><tr>
							<td>Price $<?php echo $Cheapest1AmazonPrice; ?></td>
							<td>Price $<?php echo $Cheapest2AmazonPrice; ?></td>
							<td>Price $<?php echo $Cheapest3AmazonPrice; ?></td>
							<td>Price $<?php echo $Cheapest4AmazonPrice; ?></td>
							<td>Price $<?php echo $Cheapest5AmazonPrice; ?></td>
							</tr><tr>
							<td><?php echo round($Cheapest1Discount, 2); ?>%</td>
							<td><?php echo round($Cheapest2Discount, 2); ?>%</td>
							<td><?php echo round($Cheapest3Discount, 2); ?>%</td>
							<td><?php echo round($Cheapest4Discount, 2); ?>%</td>
							<td><?php echo round($Cheapest5Discount, 2); ?>%</td>
							</tr><tr>
							<td>Height <?php echo $Cheapest1Height; ?></td>
							<td>Height <?php echo $Cheapest2Height; ?></td>
							<td>Height <?php echo $Cheapest3Height; ?></td>
							<td>Height <?php echo $Cheapest4Height; ?></td>
							<td>Height <?php echo $Cheapest5Height; ?></td>
							</tr><tr>
							<td>Area <?php echo $Cheapest1Area; ?>Sq Ft</td>
							<td>Area <?php echo $Cheapest2Area; ?>Sq Ft</td>
							<td>Area <?php echo $Cheapest3Area; ?>Sq Ft</td>
							<td>Area <?php echo $Cheapest4Area; ?>Sq Ft</td>
							<td>Area <?php echo $Cheapest5Area; ?>Sq Ft</td>
							</tr><tr>
							<td>Ratings <?php echo $Cheapest1Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Cheapest2Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Cheapest3Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Cheapest4Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Cheapest5Ratings; ?> / 5.0</td>
							</tr><tr>
							<td>Reviews <?php echo $Cheapest1Reviews; ?></td>
							<td>Reviews <?php echo $Cheapest2Reviews; ?></td>
							<td>Reviews <?php echo $Cheapest3Reviews; ?></td>
							<td>Reviews <?php echo $Cheapest4Reviews; ?></td>
							<td>Reviews <?php echo $Cheapest5Reviews; ?></td>
							</tr><tr>
							<td>Score <?php echo round($Cheapest1OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Cheapest2OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Cheapest3OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Cheapest4OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Cheapest5OverallScore, 2); ?>%</td>
							</tr><tr>
							<td><?php echo $Cheapest1Type; ?></td>
							<td><?php echo $Cheapest2Type; ?></td>
							<td><?php echo $Cheapest3Type; ?></td>
							<td><?php echo $Cheapest4Type; ?></td>
							<td><?php echo $Cheapest5Type; ?></td>
							</tr><tr>
							<td><a href="<?php echo $Cheapest1AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Cheapest2AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Cheapest3AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Cheapest4AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Cheapest5AmazonPage; ?>">Amazon</a></td>
							</tr><tr>
							<td><a href="<?php echo $Cheapest1Manufacture; ?>"><?php echo $Cheapest1Brand ;?> </a></td>
							<td><a href="<?php echo $Cheapest2Manufacture; ?>"><?php echo $Cheapest2Brand ;?> </a></td>
							<td><a href="<?php echo $Cheapest3Manufacture; ?>"><?php echo $Cheapest3Brand ;?> </a></td>
							<td><a href="<?php echo $Cheapest4Manufacture; ?>"><?php echo $Cheapest4Brand ;?> </a></td>
							<td><a href="<?php echo $Cheapest5Manufacture; ?>"><?php echo $Cheapest5Brand ;?> </a></td>
							</tr><tr>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest1aname ?>"><img src="img/tables/<?php echo $Cheapest1Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest2aname ?>"><img src="img/tables/<?php echo $Cheapest2Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest3aname ?>"><img src="img/tables/<?php echo $Cheapest3Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest4aname ?>"><img src="img/tables/<?php echo $Cheapest4Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Cheapest5aname ?>"><img src="img/tables/<?php echo $Cheapest5Image; ?>" width="50" height="auto" ></a></td>
						</tr>
						</table>
					</div>
				<hr>
			</div>
		</div>

		<a name="most-popular"></a>
		<div class="card">
			<div class="card-content">

				<h2>The Most Popular <?php echo $uc_type ?> Tents</h2>
					<p>
						<?php echo ucwords (NumbersToWords::convert($TotalPopular)); ?> of the tents have more than 100 reviews
					</p>
						<div class="valign-wrapper carousel-top">
							<div class="card col s12 m10 offset-m1 hoverable">
								<div class="card-content">
									<a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular1aname ?>"><img src="img/large/<?php echo $Popular1Image ;?>" width="100%" height="auto" alt="<?php echo $Popular1Brand ?> <?php echo $Popular1Model ?> tent" ></a>
								</div>
							</div>
						</div>
					<p>
						Most Popular of the <?php echo strtolower(ucwords (NumbersToWords::convert($TotalPopular))); ?>
						is <?php echo $Popular1Brand ?>'s <a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular1aname ?>"><?php echo $Popular1Model ?></a> <i>"pictured above"</i>
					</p>

					<div class="table-container z-depth-4">
						<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">
						<tr>
							<th><?php echo $Popular1Model; ?></th>
							<th><?php echo $Popular2Model; ?></th>
							<th><?php echo $Popular3Model; ?></th>
							<th><?php echo $Popular4Model; ?></th>
							<th><?php echo $Popular5Model; ?></th>
							</tr><tr>
							<td><?php echo $Popular1Size; ?></td>
							<td><?php echo $Popular2Size; ?></td>
							<td><?php echo $Popular3Size; ?></td>
							<td><?php echo $Popular4Size; ?></td>
							<td><?php echo $Popular5Size; ?></td>
							</tr><tr>
							<td>MSRP $<?php echo $Popular1MSRP; ?></td>
							<td>MSRP $<?php echo $Popular2MSRP; ?></td>
							<td>MSRP $<?php echo $Popular3MSRP; ?></td>
							<td>MSRP $<?php echo $Popular4MSRP; ?></td>
							<td>MSRP $<?php echo $Popular5MSRP; ?></td>
							</tr><tr>
							<td>Price $<?php echo $Popular1AmazonPrice; ?></td>
							<td>Price $<?php echo $Popular2AmazonPrice; ?></td>
							<td>Price $<?php echo $Popular3AmazonPrice; ?></td>
							<td>Price $<?php echo $Popular4AmazonPrice; ?></td>
							<td>Price $<?php echo $Popular5AmazonPrice; ?></td>
							</tr><tr>
							<td><?php echo round($Popular1Discount, 2); ?>%</td>
							<td><?php echo round($Popular2Discount, 2); ?>%</td>
							<td><?php echo round($Popular3Discount, 2); ?>%</td>
							<td><?php echo round($Popular4Discount, 2); ?>%</td>
							<td><?php echo round($Popular5Discount, 2); ?>%</td>
							</tr><tr>
							<td>Height <?php echo $Popular1Height; ?></td>
							<td>Height <?php echo $Popular2Height; ?></td>
							<td>Height <?php echo $Popular3Height; ?></td>
							<td>Height <?php echo $Popular4Height; ?></td>
							<td>Height <?php echo $Popular5Height; ?></td>
							</tr><tr>
							<td>Area <?php echo $Popular1Area; ?>Sq Ft</td>
							<td>Area <?php echo $Popular2Area; ?>Sq Ft</td>
							<td>Area <?php echo $Popular3Area; ?>Sq Ft</td>
							<td>Area <?php echo $Popular4Area; ?>Sq Ft</td>
							<td>Area <?php echo $Popular5Area; ?>Sq Ft</td>
							</tr><tr>
							<td>Ratings <?php echo $Popular1Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Popular2Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Popular3Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Popular4Ratings; ?> / 5.0</td>
							<td>Ratings <?php echo $Popular5Ratings; ?> / 5.0</td>
							</tr><tr>
							<td>Reviews <?php echo $Popular1Reviews; ?></td>
							<td>Reviews <?php echo $Popular2Reviews; ?></td>
							<td>Reviews <?php echo $Popular3Reviews; ?></td>
							<td>Reviews <?php echo $Popular4Reviews; ?></td>
							<td>Reviews <?php echo $Popular5Reviews; ?></td>
							</tr><tr>
							<td>Score <?php echo round($Popular1OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Popular2OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Popular3OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Popular4OverallScore, 2); ?>%</td>
							<td>Score <?php echo round($Popular5OverallScore, 2); ?>%</td>
							</tr><tr>
							<td><?php echo $Popular1Type; ?></td>
							<td><?php echo $Popular2Type; ?></td>
							<td><?php echo $Popular3Type; ?></td>
							<td><?php echo $Popular4Type; ?></td>
							<td><?php echo $Popular5Type; ?></td>
							</tr><tr>
							<td><a href="<?php echo $Popular1AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Popular2AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Popular3AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Popular4AmazonPage; ?>">Amazon</a></td>
							<td><a href="<?php echo $Popular5AmazonPage; ?>">Amazon</a></td>
							</tr><tr>
							<td><a href="<?php echo $Popular1Manufacture; ?>"><?php echo $Popular1Brand ;?> </a></td>
							<td><a href="<?php echo $Popular2Manufacture; ?>"><?php echo $Popular2Brand ;?> </a></td>
							<td><a href="<?php echo $Popular3Manufacture; ?>"><?php echo $Popular3Brand ;?> </a></td>
							<td><a href="<?php echo $Popular4Manufacture; ?>"><?php echo $Popular4Brand ;?> </a></td>
							<td><a href="<?php echo $Popular5Manufacture; ?>"><?php echo $Popular5Brand ;?> </a></td>
							</tr><tr>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular1aname ?>"><img src="img/tables/<?php echo $Popular1Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular2aname ?>"><img src="img/tables/<?php echo $Popular2Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular3aname ?>"><img src="img/tables/<?php echo $Popular3Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular4aname ?>"><img src="img/tables/<?php echo $Popular4Image; ?>" width="50" height="auto" ></a></td>
							<td><a href="http://localhost/optuk/coleman-family-tents-comparison-guide.php#<?php echo $Popular5aname ?>"><img src="img/tables/<?php echo $Popular5Image; ?>" width="50" height="auto" ></a></td>
						</tr>
						</table>
					</div>
				<hr>
			</div>
		</div>



		<a name="top-ten-<?php echo $lc_type ;?>-tents"></a>

			<!-- START TOP TEN -->
				<?php include_once( "inc/lists/schema-coleman-family-tents.php") ?>
			<!-- END TOP TEN -->


 </div>


<!-- START SIDE -->
<?php include_once( "inc/side-bar/sidebar-top-ten-coleman.php") ?>
<!-- END SIDE -->

</div>
</div>
</div>

  <?php include_once( "inc/footer.php") ?>
  <?php include_once( "inc/video.php") ?>
	<?php include_once("inc/analytics.php") ?>
  <script src="jq/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/hidenav.js"></script>
</body>
</html>