<script type="text/javascript" src="js/comparison-table/sortable.js"></script>

<div class="table-container z-depth-4">
	<table class="sortable " id="comparisontable" cellpadding="0" cellspacing="0">

		<tr class="z-depth-1">
			<th>Model</th>
			<th title ="The overall score is calculated by looking at a number of different factors, including the size of the tent, price per sq foot, ratings and number of reviews compared to similar tents of the same size and style.">Score</th>
			<th title ="Tent Prices and Availability as shown below, were accurate as of the <?php echo $timestamp ?> and are subject to change. Any price and availability information displayed on Amazon.com at the time of purchase will apply to the purchase of the product.">Price</th>
			<th title ="The discount is simply the manufactures suggested retail price minus the current price, rounded to the nearest 10% ">Discount</th>
			<th>Brand</th>
			<th>Size</th>
			<th>Height</th>
			<th>Area</th>
		</tr>


<?php

				while($res=mysql_fetch_array($query))
			{

				// Check IF item price is greater than MSRP, if yes Discount == 0% IF item is out of stock Discount == 0%

				$Discount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);


				if($res ['OutOfStock'] == 1 ):
				$Discount = 0;
				elseif ( $res['AmazonPrice'] >= $res['MSRP'] ):
				$Discount = 0;
				else:
				$Discount = ((($res['MSRP'] - $res['AmazonPrice']) / $res['MSRP'])*100);
				endif ;



				 // Check if item is in stock and the # of reviews, and replace price with nothing if out of stock

					if($res ['OutOfStock'] > 0 ):
						$AmazonPrice = 'Out of Stock' ;
							else:
							$AmazonPrice = '$'.$res['AmazonPrice'] ;
							endif ;

					if($res ['OutOfStock'] > 0 ):
						$TitlePrice = 'Currently Unavailable' ;
							else:
							$TitlePrice = 'Amazon.com Price: $'.$res['AmazonPrice'] ;
							endif ;

					if($res ['OutOfStock'] > 0 ):
						$CheckInStock = 'Check Current Status' ;
							else:
							$CheckInStock = 'Check Current Price' ;
							endif ;

					if($res ['Reviews'] < 1 ):
						$PeopleRatings = 'Nobody has rated this tent. ' ;

					elseif($res ['Reviews'] < 2 ):
						$PeopleRatings = 'Person has rated this tent. ' ;

							else:
							$PeopleRatings = 'People have rated this tent. ' ;
							endif ;


					if($res ['Reviews'] < 1 ):
						$CheckReviews = '' ;
							else:
							$CheckReviews = $res['Reviews'] ;
							endif ;


					if($res ['Reviews'] < 1 ):
						$ReadReviews = '' ;
							else:
							$ReadReviews = 'Read Reviews' ;
							endif ;

				//Check overall score and define text color

					if($res ['OverallScore'] > 85 ):
					$OverallScoreColor = '8d6e63' ;
					elseif($res ['OverallScore'] > 69 ):
					$OverallScoreColor = '8d6e63' ;
					else:
					$OverallScoreColor = '8d6e63' ;
					endif ;


// Show Data in Table.

				echo '<tr>';

				echo '<td class="white"><a name="'.$res['aname'].'"></a><br /><img src="img/tables/'.$res['Image'].'" alt="'.$res['Brand'].' '.$res['Model'].' '.$res['Type'].'" border=0/><br />'.$res['Model'].'<br /><br /></td>';

				echo '<td><span class="left"><font color= "#aeea00" size = "2em">Overall Score</font></span><font color="#'.$OverallScoreColor.'" size = "5em">'.$res['OverallScore'].'%<br /></font>';

				echo '<a href="http://www.amazon.com/exec/obidos/ASIN/'.$res['Asin']. '/fstreview-20#customerReviews" rel="nofollow" target="_blank">'.$ReadReviews.'</a></td>';

				echo '<td>';

				echo  $AmazonPrice.' <a href="/privacy-disclaimer.php#last-update" rel="nofollow"><i class="material-icons price-info-tables" title=" '.$TitlePrice.' ( as of '.substr($res['LastUpdate'], 0, -3).' PST) - More info ">info_outline</i></a>';

				echo '<br /><a href="http://www.amazon.com/exec/obidos/ASIN/'.$res['Asin']. '/fstents-20" rel="nofollow" target="_blank">'.$CheckInStock.'</a>';

				echo '</td>';

				echo '<td><font size = "4em" color="#4d7380">'.(round($Discount,-1));
				echo '<img src="img/tables-js/percent-sign.png" alt="percent sign"><br /></font></td>';

				echo '<td>'.$res['Brand'].'</td>';

				echo '<td>'.$res['Size'].'</td>';

				echo '<td>'.$res['Height'].'</td>';

				echo '<td>'.$res['Area'].'<img src="img/tables-js/sq-ft-sign.png" alt="square foot sign"></td>';


			echo '</tr>';

			}
			echo '</table>';
			echo '</div>';

?>