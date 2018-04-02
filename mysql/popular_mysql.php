	<?php


//6 Person Tents

		$query=mysqli_query("SELECT * from all_tents WHERE Size = '6 persons' ORDER BY  ((MSRP - AmazonPrice)/ MSRP)  ") ;

		while($res=mysqli_fetch_array($query))

		$MaxSixPersonTentsDiscount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);
		$TotalSixPersonTents = mysqli_num_rows($query);

		$query=mysqli_query("SELECT MIN(AmazonPrice) AS AmazonPrice from all_tents WHERE Size = '6 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LowestPriceSixPersonTents = $res ['AmazonPrice'] ;

		}


		$query=mysqli_query("SELECT MIN(Area) AS Area from all_tents WHERE Size = '6 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$SmallestSixPersonTents = $res ['Area'] ;

		}


		$query=mysqli_query("SELECT MAX(Area) AS Area from all_tents WHERE Size = '6 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LargestSixPersonTents = $res ['Area'] ;

		}



		$query=mysqli_query("SELECT SUM(Reviews) AS Reviews from all_tents WHERE Size = '6 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$TotalReviewsSixPersonTents = $res ['Reviews'] - 1 ;

		}


		$query=mysqli_query("SELECT DISTINCT Brand from all_tents WHERE Size = '6 persons'") ;

		while($res=mysqli_fetch_array($query))

		$TotalSixPersonTentBrands= mysqli_num_rows($query);










//Dome Tents

		$query=mysqli_query("SELECT * from all_tents WHERE Type = 'Dome Tent' ORDER BY  ((MSRP - AmazonPrice)/ MSRP)  ") ;

		while($res=mysqli_fetch_array($query))

		$MaxDomeTentsDiscount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);
		$TotalDomeTents = mysqli_num_rows($query);

		$query=mysqli_query("SELECT MIN(AmazonPrice) AS AmazonPrice from all_tents WHERE Type = 'Dome Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LowestPriceDomeTents = $res ['AmazonPrice'] ;

		}


		$query=mysqli_query("SELECT MIN(Area) AS Area from all_tents WHERE Type = 'Dome Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$SmallestDomeTents = $res ['Area'] ;

		}


		$query=mysqli_query("SELECT MAX(Area) AS Area from all_tents WHERE Type = 'Dome Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LargestDomeTents = $res ['Area'] ;

		}



		$query=mysqli_query("SELECT SUM(Reviews) AS Reviews from all_tents WHERE Type = 'Dome Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$TotalReviewsDomeTents = $res ['Reviews'] - 1 ;

		}


		$query=mysqli_query("SELECT DISTINCT Brand from all_tents WHERE Type = 'Dome Tent'") ;

		while($res=mysqli_fetch_array($query))

		$TotalDomeTentBrands = mysqli_num_rows($query);





//4 Person Tents

		$query=mysqli_query("SELECT * from all_tents WHERE Size = '4 persons' ORDER BY  ((MSRP - AmazonPrice)/ MSRP)  ") ;

		while($res=mysqli_fetch_array($query))

		$MaxFourPersonTentsDiscount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);
		$TotalFourPersonTents = mysqli_num_rows($query);

		$query=mysqli_query("SELECT MIN(AmazonPrice) AS AmazonPrice from all_tents WHERE Size = '4 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LowestPriceFourPersonTents = $res ['AmazonPrice'] ;

		}


		$query=mysqli_query("SELECT MIN(Area) AS Area from all_tents WHERE Size = '4 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$SmallestFourPersonTents = $res ['Area'] ;

		}


		$query=mysqli_query("SELECT MAX(Area) AS Area from all_tents WHERE Size = '4 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LargestFourPersonTents = $res ['Area'] ;

		}



		$query=mysqli_query("SELECT SUM(Reviews) AS Reviews from all_tents WHERE Size = '4 persons'") ;

		while($res=mysqli_fetch_array($query))

		{

		$TotalReviewsFourPersonTents = $res ['Reviews'] - 1 ;

		}


		$query=mysqli_query("SELECT DISTINCT Brand from all_tents WHERE Size = '4 persons'") ;

		while($res=mysqli_fetch_array($query))

		$TotalFourPersonTentBrands= mysqli_num_rows($query);






//Cabin Tents

		$query=mysqli_query("SELECT * from all_tents WHERE Type = 'Cabin Tent' ORDER BY  ((MSRP - AmazonPrice)/ MSRP)  ") ;

		while($res=mysqli_fetch_array($query))

		$MaxCabinTentsDiscount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);
		$TotalCabinTents = mysqli_num_rows($query);

		$query=mysqli_query("SELECT MIN(AmazonPrice) AS AmazonPrice from all_tents WHERE Type = 'Cabin Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LowestPriceCabinTents = $res ['AmazonPrice'] ;

		}


		$query=mysqli_query("SELECT MIN(Area) AS Area from all_tents WHERE Type = 'Cabin Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$SmallestCabinTents = $res ['Area'] ;

		}


		$query=mysqli_query("SELECT MAX(Area) AS Area from all_tents WHERE Type = 'Cabin Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$LargestCabinTents = $res ['Area'] ;

		}



		$query=mysqli_query("SELECT SUM(Reviews) AS Reviews from all_tents WHERE Type = 'Cabin Tent'") ;

		while($res=mysqli_fetch_array($query))

		{

		$TotalReviewsCabinTents = $res ['Reviews'] - 1 ;

		}


		$query=mysqli_query("SELECT DISTINCT Brand from all_tents WHERE Type = 'Cabin Tent'") ;

		while($res=mysqli_fetch_array($query))

		$TotalCabinTentBrands = mysqli_num_rows($query);





	?>