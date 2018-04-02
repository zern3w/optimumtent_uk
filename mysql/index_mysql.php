<?php

	$query=mysqli_query("SELECT * from all_tents WHERE Asin='B001TSCF96'");

	while($res=mysqli_fetch_array($query))

	{

	$DiscountB001TSCF96 = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);

	$AmazonPriceB001TSCF96 = $res ['AmazonPrice'] ;

	$ReviewsB001TSCF96 = $res ['Reviews'] ;


		if($res ['AmazonPrice'] < 151 ):

	    	$CheckPriceB001TSCF96 = 150 ;

				elseif($res ['AmazonPrice'] < 176):

	   		 		$CheckPriceB001TSCF96 = 175 ;

						elseif($res ['AmazonPrice'] < 201):

	   		 				$CheckPriceB001TSCF96 = 200 ;

								else:

	    							$CheckPriceB001TSCF96 = "hello world" ;

									endif ;

	}

?>