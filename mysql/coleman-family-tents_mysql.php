<?php

//START DEFINE PAGE TYPE n SELECTORS

		$sql_type = "'Coleman'" ;
		$sql_area = 125 ;
		$sql_reviews = 50 ;
		$uc_type = "Coleman" ;
		$lc_type = "coleman" ;
		$less_than = 100 ;
		$sections = 5 ;
		$min_price = 149 ;

//END DEFINE PAGE TYPE n SELECTORS

		//START Queries on whole group

		//FIND Number of Tents in Group / Page

			$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$TotalTents = mysql_num_rows($query);
			}

		//Find MIN Weight

			$query=mysql_query("SELECT MIN(TotalWeight) AS TotalWeight from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$MINTotalWeight = $res ['TotalWeight'] ;

			}

		//Find MAX Weight

			$query=mysql_query("SELECT MAX(TotalWeight) AS TotalWeight from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$MAXTotalWeight = $res ['TotalWeight'] ;

			}

		//Find Number of Brands

			$query=mysql_query("SELECT DISTINCT Brand from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$TotalBrands = mysql_num_rows($query);
			}

		//Find Minimum Area

			$query=mysql_query("SELECT MIN(Area) AS Area from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$Smallest = $res ['Area'] ;
			}

		//Find Maximum Area

			$query=mysql_query("SELECT MAX(Area) AS Area from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$Largest = $res ['Area'] ;
			}

		//Find Minimum Price

			$query=mysql_query("SELECT MIN(AmazonPrice) AS AmazonPrice from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
				$LowestPrice = $res ['AmazonPrice'] ;
			}

		//Find Maximum Price

			$query=mysql_query("SELECT MAX(AmazonPrice) AS AmazonPrice from all_tents WHERE Brand = ".$sql_type." ")  or die(mysql_error());
				while($res=mysql_fetch_array($query))
			{
			$HighestPrice = $res ['AmazonPrice'] ;
			}


		//Find Total Top Rated

		$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND OverallScore > 87 AND Reviews > ".$sql_reviews." ")  or die(mysql_error());

			while($res=mysql_fetch_array($query))
		{
			$TotalTopRated = mysql_num_rows($query);

		}



		//Find Total Best Value


				//FIRST Find AVERAGE PRICE per Sq foot

					$query=mysql_query("SELECT SUM(AREA) AS SumArea from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 ")  or die(mysql_error());
						while($res=mysql_fetch_array($query))
					{
						$TotalArea = $res ['SumArea'];
					}

					$query=mysql_query("SELECT SUM(AmazonPrice) AS SumAmazonPrice from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 ")  or die(mysql_error());
						while($res=mysql_fetch_array($query))
					{
						$TotalAmazonPrice = $res ['SumAmazonPrice'];
					}

					$AveragePricePerSqFoot = ( $TotalAmazonPrice / $TotalArea) ;

				//END AVERAGE PRICE per Sq foot


			$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice > ".$min_price." AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot." ")  or die(mysql_error());

				while($res=mysql_fetch_array($query))
			{
				$TotalBestValue = mysql_num_rows($query);

			}



		//Find Total Largest

			$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND Area > ".$sql_area." ")  or die(mysql_error());

				while($res=mysql_fetch_array($query))
			{
				$TotalLargest = mysql_num_rows($query);

			}


		//Find Total Cheapest

			$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND AmazonPrice < ".$less_than." ")  or die(mysql_error());

				while($res=mysql_fetch_array($query))
			{
				$TotalCheapest = mysql_num_rows($query);

			}


		//Find Total Most Popular

			$query=mysql_query("SELECT * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND Reviews > 99 ")  or die(mysql_error());

				while($res=mysql_fetch_array($query))
			{
				$TotalPopular = mysql_num_rows($query);

			}

		//END Queries on whole group


				//GET PRICES FOR MAIN CONTENT

					//Hampton 6

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B00ZG3HHWK'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB00ZG3HHWK = $res ['AmazonPrice'] ;
							}

					//Evanston 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B001RPH7JY'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB001RPH7JY = $res ['AmazonPrice'] ;
							}

					//Elite Montana 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B001TS6R2W'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB001TS6R2W = $res ['AmazonPrice'] ;
							}

					//Echo Lake 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B00S57N68S'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB00S57N68S = $res ['AmazonPrice'] ;
							}

					//Red Canyon 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B000W7BHJY'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB000W7BHJY = $res ['AmazonPrice'] ;
							}

					//Red Canyon 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B00HN987K6'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB00HN987K6 = $res ['AmazonPrice'] ;
							}

					//Sundome 4

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B004J2GUOU'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB004J2GUOU = $res ['AmazonPrice'] ;
							}

					//Montana 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B001TSCF96'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB001TSCF96 = $res ['AmazonPrice'] ;
							}


					//Tenya Lake 8

							$query=mysql_query("SELECT * from all_tents WHERE Asin='B00TFY8Z54'")  or die(mysql_error());
							while($res=mysql_fetch_array($query))
							{
							$AmazonPriceB00TFY8Z54 = $res ['AmazonPrice'] ;
							}


				//END PRICES


						//START to FIND TOP 5 in each SECTION

								//FIND #1 TopRated

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND Reviews > ".$sql_reviews."  ORDER BY OverallScore DESC , Reviews DESC LIMIT 1 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$TopRated1DISC = $res ['DISC'];
									$TopRated1LastUpdate = $res ['LastUpdate'];
									$TopRated1ID = $res ['ID'];
									$TopRated1Asin = $res ['Asin'];
									$TopRated1OutOfStock = $res ['OutOfStock'];
									$TopRated1Size = $res ['Size'];
									$TopRated1Brand = $res ['Brand'];
									$TopRated1Manufacture = $res ['Manufacture'];
									$TopRated1Model = $res ['Model'];
									$TopRated1Type = $res ['Type'];
									$TopRated1MSRP = $res ['MSRP'];
									$TopRated1Ratings = $res ['Ratings'];
									$TopRated1Height = $res ['Height'];
									$TopRated1Area = $res ['Area'];
									$TopRated1Image = $res ['Image'];
									$TopRated1Reviews = $res ['Reviews'];
									$TopRated1OverallScore = $res ['OverallScore'];
									$TopRated1AmazonPrice = $res ['AmazonPrice'];
									$TopRated1LastPrice = $res ['LastPrice'];
									$TopRated1AmazonPage = $res ['AmazonPage'];
									$TopRated1alt = $res ['alt'];
									$TopRated1aname = $res ['aname'];
									$TopRated1LargeImage = $res ['LargeImage'];
									$TopRated1Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #2 TopRated

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Reviews > ".$sql_reviews." ORDER BY OverallScore DESC, Reviews DESC LIMIT 2 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$TopRated2DISC = $res ['DISC'];
									$TopRated2LastUpdate = $res ['LastUpdate'];
									$TopRated2ID = $res ['ID'];
									$TopRated2Asin = $res ['Asin'];
									$TopRated2OutOfStock = $res ['OutOfStock'];
									$TopRated2Size = $res ['Size'];
									$TopRated2Brand = $res ['Brand'];
									$TopRated2Manufacture = $res ['Manufacture'];
									$TopRated2Model = $res ['Model'];
									$TopRated2Type = $res ['Type'];
									$TopRated2MSRP = $res ['MSRP'];
									$TopRated2Ratings = $res ['Ratings'];
									$TopRated2Height = $res ['Height'];
									$TopRated2Area = $res ['Area'];
									$TopRated2Image = $res ['Image'];
									$TopRated2Reviews = $res ['Reviews'];
									$TopRated2OverallScore = $res ['OverallScore'];
									$TopRated2AmazonPrice = $res ['AmazonPrice'];
									$TopRated2LastPrice = $res ['LastPrice'];
									$TopRated2AmazonPage = $res ['AmazonPage'];
									$TopRated2alt = $res ['alt'];
									$TopRated2aname = $res ['aname'];
									$TopRated2LargeImage = $res ['LargeImage'];
									$TopRated2Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #3 TopRated

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND Reviews > ".$sql_reviews."  ORDER BY OverallScore DESC , Reviews DESC LIMIT 3 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$TopRated3DISC = $res ['DISC'];
									$TopRated3LastUpdate = $res ['LastUpdate'];
									$TopRated3ID = $res ['ID'];
									$TopRated3Asin = $res ['Asin'];
									$TopRated3OutOfStock = $res ['OutOfStock'];
									$TopRated3Size = $res ['Size'];
									$TopRated3Brand = $res ['Brand'];
									$TopRated3Manufacture = $res ['Manufacture'];
									$TopRated3Model = $res ['Model'];
									$TopRated3Type = $res ['Type'];
									$TopRated3MSRP = $res ['MSRP'];
									$TopRated3Ratings = $res ['Ratings'];
									$TopRated3Height = $res ['Height'];
									$TopRated3Area = $res ['Area'];
									$TopRated3Image = $res ['Image'];
									$TopRated3Reviews = $res ['Reviews'];
									$TopRated3OverallScore = $res ['OverallScore'];
									$TopRated3AmazonPrice = $res ['AmazonPrice'];
									$TopRated3LastPrice = $res ['LastPrice'];
									$TopRated3AmazonPage = $res ['AmazonPage'];
									$TopRated3alt = $res ['alt'];
									$TopRated3aname = $res ['aname'];
									$TopRated3LargeImage = $res ['LargeImage'];
									$TopRated3Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}



								//FIND #4 TopRated

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Reviews > ".$sql_reviews." ORDER BY OverallScore DESC, Reviews DESC LIMIT 4 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$TopRated4DISC = $res ['DISC'];
									$TopRated4LastUpdate = $res ['LastUpdate'];
									$TopRated4ID = $res ['ID'];
									$TopRated4Asin = $res ['Asin'];
									$TopRated4OutOfStock = $res ['OutOfStock'];
									$TopRated4Size = $res ['Size'];
									$TopRated4Brand = $res ['Brand'];
									$TopRated4Manufacture = $res ['Manufacture'];
									$TopRated4Model = $res ['Model'];
									$TopRated4Type = $res ['Type'];
									$TopRated4MSRP = $res ['MSRP'];
									$TopRated4Ratings = $res ['Ratings'];
									$TopRated4Height = $res ['Height'];
									$TopRated4Area = $res ['Area'];
									$TopRated4Image = $res ['Image'];
									$TopRated4Reviews = $res ['Reviews'];
									$TopRated4OverallScore = $res ['OverallScore'];
									$TopRated4AmazonPrice = $res ['AmazonPrice'];
									$TopRated4LastPrice = $res ['LastPrice'];
									$TopRated4AmazonPage = $res ['AmazonPage'];
									$TopRated4alt = $res ['alt'];
									$TopRated4aname = $res ['aname'];
									$TopRated4LargeImage = $res ['LargeImage'];
									$TopRated4Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #5 TopRated

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND Reviews > ".$sql_reviews." ORDER BY OverallScore DESC, Reviews DESC LIMIT 5 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$TopRated5DISC = $res ['DISC'];
									$TopRated5LastUpdate = $res ['LastUpdate'];
									$TopRated5ID = $res ['ID'];
									$TopRated5Asin = $res ['Asin'];
									$TopRated5OutOfStock = $res ['OutOfStock'];
									$TopRated5Size = $res ['Size'];
									$TopRated5Brand = $res ['Brand'];
									$TopRated5Manufacture = $res ['Manufacture'];
									$TopRated5Model = $res ['Model'];
									$TopRated5Type = $res ['Type'];
									$TopRated5MSRP = $res ['MSRP'];
									$TopRated5Ratings = $res ['Ratings'];
									$TopRated5Height = $res ['Height'];
									$TopRated5Area = $res ['Area'];
									$TopRated5Image = $res ['Image'];
									$TopRated5Reviews = $res ['Reviews'];
									$TopRated5OverallScore = $res ['OverallScore'];
									$TopRated5AmazonPrice = $res ['AmazonPrice'];
									$TopRated5LastPrice = $res ['LastPrice'];
									$TopRated5AmazonPage = $res ['AmazonPage'];
									$TopRated5alt = $res ['alt'];
									$TopRated5aname = $res ['aname'];
									$TopRated5LargeImage = $res ['LargeImage'];
									$TopRated5Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

							//END FIND TopRated




						//START FIND Best Value

								//FIND #1 BestValue

								$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot."  AND AmazonPrice > ".$min_price." ORDER BY (AmazonPrice/Area) LIMIT 1 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$BestValue1DISC = $res ['DISC'];
									$BestValue1LastUpdate = $res ['LastUpdate'];
									$BestValue1ID = $res ['ID'];
									$BestValue1Asin = $res ['Asin'];
									$BestValue1OutOfStock = $res ['OutOfStock'];
									$BestValue1Size = $res ['Size'];
									$BestValue1Brand = $res ['Brand'];
									$BestValue1Manufacture = $res ['Manufacture'];
									$BestValue1Model = $res ['Model'];
									$BestValue1Type = $res ['Type'];
									$BestValue1MSRP = $res ['MSRP'];
									$BestValue1Ratings = $res ['Ratings'];
									$BestValue1Height = $res ['Height'];
									$BestValue1Area = $res ['Area'];
									$BestValue1Image = $res ['Image'];
									$BestValue1Reviews = $res ['Reviews'];
									$BestValue1OverallScore = $res ['OverallScore'];
									$BestValue1AmazonPrice = $res ['AmazonPrice'];
									$BestValue1LastPrice = $res ['LastPrice'];
									$BestValue1AmazonPage = $res ['AmazonPage'];
									$BestValue1alt = $res ['alt'];
									$BestValue1aname = $res ['aname'];
									$BestValue1LargeImage = $res ['LargeImage'];
									$BestValue1Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #2 BestValue

								$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot."  AND AmazonPrice > ".$min_price." ORDER BY (AmazonPrice/Area) LIMIT 2 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$BestValue2DISC = $res ['DISC'];
									$BestValue2LastUpdate = $res ['LastUpdate'];
									$BestValue2ID = $res ['ID'];
									$BestValue2Asin = $res ['Asin'];
									$BestValue2OutOfStock = $res ['OutOfStock'];
									$BestValue2Size = $res ['Size'];
									$BestValue2Brand = $res ['Brand'];
									$BestValue2Manufacture = $res ['Manufacture'];
									$BestValue2Model = $res ['Model'];
									$BestValue2Type = $res ['Type'];
									$BestValue2MSRP = $res ['MSRP'];
									$BestValue2Ratings = $res ['Ratings'];
									$BestValue2Height = $res ['Height'];
									$BestValue2Area = $res ['Area'];
									$BestValue2Image = $res ['Image'];
									$BestValue2Reviews = $res ['Reviews'];
									$BestValue2OverallScore = $res ['OverallScore'];
									$BestValue2AmazonPrice = $res ['AmazonPrice'];
									$BestValue2LastPrice = $res ['LastPrice'];
									$BestValue2AmazonPage = $res ['AmazonPage'];
									$BestValue2alt = $res ['alt'];
									$BestValue2aname = $res ['aname'];
									$BestValue2LargeImage = $res ['LargeImage'];
									$BestValue2Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #3 BestValue

								$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot."  AND AmazonPrice > ".$min_price." ORDER BY (AmazonPrice/Area) LIMIT 3 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$BestValue3DISC = $res ['DISC'];
									$BestValue3LastUpdate = $res ['LastUpdate'];
									$BestValue3ID = $res ['ID'];
									$BestValue3Asin = $res ['Asin'];
									$BestValue3OutOfStock = $res ['OutOfStock'];
									$BestValue3Size = $res ['Size'];
									$BestValue3Brand = $res ['Brand'];
									$BestValue3Manufacture = $res ['Manufacture'];
									$BestValue3Model = $res ['Model'];
									$BestValue3Type = $res ['Type'];
									$BestValue3MSRP = $res ['MSRP'];
									$BestValue3Ratings = $res ['Ratings'];
									$BestValue3Height = $res ['Height'];
									$BestValue3Area = $res ['Area'];
									$BestValue3Image = $res ['Image'];
									$BestValue3Reviews = $res ['Reviews'];
									$BestValue3OverallScore = $res ['OverallScore'];
									$BestValue3AmazonPrice = $res ['AmazonPrice'];
									$BestValue3LastPrice = $res ['LastPrice'];
									$BestValue3AmazonPage = $res ['AmazonPage'];
									$BestValue3alt = $res ['alt'];
									$BestValue3aname = $res ['aname'];
									$BestValue3LargeImage = $res ['LargeImage'];
									$BestValue3Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}



								//FIND #4 BestValue

								$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot."  AND AmazonPrice > ".$min_price." ORDER BY (AmazonPrice/Area) LIMIT 4 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$BestValue4DISC = $res ['DISC'];
									$BestValue4LastUpdate = $res ['LastUpdate'];
									$BestValue4ID = $res ['ID'];
									$BestValue4Asin = $res ['Asin'];
									$BestValue4OutOfStock = $res ['OutOfStock'];
									$BestValue4Size = $res ['Size'];
									$BestValue4Brand = $res ['Brand'];
									$BestValue4Manufacture = $res ['Manufacture'];
									$BestValue4Model = $res ['Model'];
									$BestValue4Type = $res ['Type'];
									$BestValue4MSRP = $res ['MSRP'];
									$BestValue4Ratings = $res ['Ratings'];
									$BestValue4Height = $res ['Height'];
									$BestValue4Area = $res ['Area'];
									$BestValue4Image = $res ['Image'];
									$BestValue4Reviews = $res ['Reviews'];
									$BestValue4OverallScore = $res ['OverallScore'];
									$BestValue4AmazonPrice = $res ['AmazonPrice'];
									$BestValue4LastPrice = $res ['LastPrice'];
									$BestValue4AmazonPage = $res ['AmazonPage'];
									$BestValue4alt = $res ['alt'];
									$BestValue4aname = $res ['aname'];
									$BestValue4LargeImage = $res ['LargeImage'];
									$BestValue4Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #5 BestValue

								$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0 AND (AmazonPrice/Area) < ".$AveragePricePerSqFoot."  AND AmazonPrice > ".$min_price." ORDER BY (AmazonPrice/Area) LIMIT 5 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$BestValue5DISC = $res ['DISC'];
									$BestValue5LastUpdate = $res ['LastUpdate'];
									$BestValue5ID = $res ['ID'];
									$BestValue5Asin = $res ['Asin'];
									$BestValue5OutOfStock = $res ['OutOfStock'];
									$BestValue5Size = $res ['Size'];
									$BestValue5Brand = $res ['Brand'];
									$BestValue5Manufacture = $res ['Manufacture'];
									$BestValue5Model = $res ['Model'];
									$BestValue5Type = $res ['Type'];
									$BestValue5MSRP = $res ['MSRP'];
									$BestValue5Ratings = $res ['Ratings'];
									$BestValue5Height = $res ['Height'];
									$BestValue5Area = $res ['Area'];
									$BestValue5Image = $res ['Image'];
									$BestValue5Reviews = $res ['Reviews'];
									$BestValue5OverallScore = $res ['OverallScore'];
									$BestValue5AmazonPrice = $res ['AmazonPrice'];
									$BestValue5LastPrice = $res ['LastPrice'];
									$BestValue5AmazonPage = $res ['AmazonPage'];
									$BestValue5alt = $res ['alt'];
									$BestValue5aname = $res ['aname'];
									$BestValue5LargeImage = $res ['LargeImage'];
									$BestValue5Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

						//END FIND BestValue


						//START FIND Largest

								//FIND #1 Largest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Area > ".$sql_area."  ORDER BY AREA DESC LIMIT 1 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Largest1DISC = $res ['DISC'];
									$Largest1LastUpdate = $res ['LastUpdate'];
									$Largest1ID = $res ['ID'];
									$Largest1Asin = $res ['Asin'];
									$Largest1OutOfStock = $res ['OutOfStock'];
									$Largest1Size = $res ['Size'];
									$Largest1Brand = $res ['Brand'];
									$Largest1Manufacture = $res ['Manufacture'];
									$Largest1Model = $res ['Model'];
									$Largest1Type = $res ['Type'];
									$Largest1MSRP = $res ['MSRP'];
									$Largest1Ratings = $res ['Ratings'];
									$Largest1Height = $res ['Height'];
									$Largest1Area = $res ['Area'];
									$Largest1Image = $res ['Image'];
									$Largest1Reviews = $res ['Reviews'];
									$Largest1OverallScore = $res ['OverallScore'];
									$Largest1AmazonPrice = $res ['AmazonPrice'];
									$Largest1LastPrice = $res ['LastPrice'];
									$Largest1AmazonPage = $res ['AmazonPage'];
									$Largest1alt = $res ['alt'];
									$Largest1aname = $res ['aname'];
									$Largest1LargeImage = $res ['LargeImage'];
									$Largest1Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}



								//FIND #2 Largest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Area > ".$sql_area."  ORDER BY AREA DESC LIMIT 2 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Largest2DISC = $res ['DISC'];
									$Largest2LastUpdate = $res ['LastUpdate'];
									$Largest2ID = $res ['ID'];
									$Largest2Asin = $res ['Asin'];
									$Largest2OutOfStock = $res ['OutOfStock'];
									$Largest2Size = $res ['Size'];
									$Largest2Brand = $res ['Brand'];
									$Largest2Manufacture = $res ['Manufacture'];
									$Largest2Model = $res ['Model'];
									$Largest2Type = $res ['Type'];
									$Largest2MSRP = $res ['MSRP'];
									$Largest2Ratings = $res ['Ratings'];
									$Largest2Height = $res ['Height'];
									$Largest2Area = $res ['Area'];
									$Largest2Image = $res ['Image'];
									$Largest2Reviews = $res ['Reviews'];
									$Largest2OverallScore = $res ['OverallScore'];
									$Largest2AmazonPrice = $res ['AmazonPrice'];
									$Largest2LastPrice = $res ['LastPrice'];
									$Largest2AmazonPage = $res ['AmazonPage'];
									$Largest2alt = $res ['alt'];
									$Largest2aname = $res ['aname'];
									$Largest2LargeImage = $res ['LargeImage'];
									$Largest2Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}




								//FIND #3 Largest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Area > ".$sql_area."  ORDER BY AREA DESC LIMIT 3 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Largest3DISC = $res ['DISC'];
									$Largest3LastUpdate = $res ['LastUpdate'];
									$Largest3ID = $res ['ID'];
									$Largest3Asin = $res ['Asin'];
									$Largest3OutOfStock = $res ['OutOfStock'];
									$Largest3Size = $res ['Size'];
									$Largest3Brand = $res ['Brand'];
									$Largest3Manufacture = $res ['Manufacture'];
									$Largest3Model = $res ['Model'];
									$Largest3Type = $res ['Type'];
									$Largest3MSRP = $res ['MSRP'];
									$Largest3Ratings = $res ['Ratings'];
									$Largest3Height = $res ['Height'];
									$Largest3Area = $res ['Area'];
									$Largest3Image = $res ['Image'];
									$Largest3Reviews = $res ['Reviews'];
									$Largest3OverallScore = $res ['OverallScore'];
									$Largest3AmazonPrice = $res ['AmazonPrice'];
									$Largest3LastPrice = $res ['LastPrice'];
									$Largest3AmazonPage = $res ['AmazonPage'];
									$Largest3alt = $res ['alt'];
									$Largest3aname = $res ['aname'];
									$Largest3LargeImage = $res ['LargeImage'];
									$Largest3Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #4 Largest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Area > ".$sql_area."  ORDER BY AREA DESC LIMIT 4 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Largest4DISC = $res ['DISC'];
									$Largest4LastUpdate = $res ['LastUpdate'];
									$Largest4ID = $res ['ID'];
									$Largest4Asin = $res ['Asin'];
									$Largest4OutOfStock = $res ['OutOfStock'];
									$Largest4Size = $res ['Size'];
									$Largest4Brand = $res ['Brand'];
									$Largest4Manufacture = $res ['Manufacture'];
									$Largest4Model = $res ['Model'];
									$Largest4Type = $res ['Type'];
									$Largest4MSRP = $res ['MSRP'];
									$Largest4Ratings = $res ['Ratings'];
									$Largest4Height = $res ['Height'];
									$Largest4Area = $res ['Area'];
									$Largest4Image = $res ['Image'];
									$Largest4Reviews = $res ['Reviews'];
									$Largest4OverallScore = $res ['OverallScore'];
									$Largest4AmazonPrice = $res ['AmazonPrice'];
									$Largest4LastPrice = $res ['LastPrice'];
									$Largest4AmazonPage = $res ['AmazonPage'];
									$Largest4alt = $res ['alt'];
									$Largest4aname = $res ['aname'];
									$Largest4LargeImage = $res ['LargeImage'];
									$Largest4Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #5 Largest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND Area > ".$sql_area."  ORDER BY AREA DESC LIMIT 5 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Largest5DISC = $res ['DISC'];
									$Largest5LastUpdate = $res ['LastUpdate'];
									$Largest5ID = $res ['ID'];
									$Largest5Asin = $res ['Asin'];
									$Largest5OutOfStock = $res ['OutOfStock'];
									$Largest5Size = $res ['Size'];
									$Largest5Brand = $res ['Brand'];
									$Largest5Manufacture = $res ['Manufacture'];
									$Largest5Model = $res ['Model'];
									$Largest5Type = $res ['Type'];
									$Largest5MSRP = $res ['MSRP'];
									$Largest5Ratings = $res ['Ratings'];
									$Largest5Height = $res ['Height'];
									$Largest5Area = $res ['Area'];
									$Largest5Image = $res ['Image'];
									$Largest5Reviews = $res ['Reviews'];
									$Largest5OverallScore = $res ['OverallScore'];
									$Largest5AmazonPrice = $res ['AmazonPrice'];
									$Largest5LastPrice = $res ['LastPrice'];
									$Largest5AmazonPage = $res ['AmazonPage'];
									$Largest5alt = $res ['alt'];
									$Largest5aname = $res ['aname'];
									$Largest5LargeImage = $res ['LargeImage'];
									$Largest5Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

						//END Largest


						//START Cheapest

								//FIND #1 Cheapest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice < ".$less_than."  ORDER BY AmazonPrice LIMIT 1 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Cheapest1DISC = $res ['DISC'];
									$Cheapest1LastUpdate = $res ['LastUpdate'];
									$Cheapest1ID = $res ['ID'];
									$Cheapest1Asin = $res ['Asin'];
									$Cheapest1OutOfStock = $res ['OutOfStock'];
									$Cheapest1Size = $res ['Size'];
									$Cheapest1Brand = $res ['Brand'];
									$Cheapest1Manufacture = $res ['Manufacture'];
									$Cheapest1Model = $res ['Model'];
									$Cheapest1Type = $res ['Type'];
									$Cheapest1MSRP = $res ['MSRP'];
									$Cheapest1Ratings = $res ['Ratings'];
									$Cheapest1Height = $res ['Height'];
									$Cheapest1Area = $res ['Area'];
									$Cheapest1Image = $res ['Image'];
									$Cheapest1Reviews = $res ['Reviews'];
									$Cheapest1OverallScore = $res ['OverallScore'];
									$Cheapest1AmazonPrice = $res ['AmazonPrice'];
									$Cheapest1LastPrice = $res ['LastPrice'];
									$Cheapest1AmazonPage = $res ['AmazonPage'];
									$Cheapest1alt = $res ['alt'];
									$Cheapest1aname = $res ['aname'];
									$Cheapest1LargeImage = $res ['LargeImage'];
									$Cheapest1Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #2 Cheapest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice < ".$less_than."  ORDER BY AmazonPrice LIMIT 2 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Cheapest2DISC = $res ['DISC'];
									$Cheapest2LastUpdate = $res ['LastUpdate'];
									$Cheapest2ID = $res ['ID'];
									$Cheapest2Asin = $res ['Asin'];
									$Cheapest2OutOfStock = $res ['OutOfStock'];
									$Cheapest2Size = $res ['Size'];
									$Cheapest2Brand = $res ['Brand'];
									$Cheapest2Manufacture = $res ['Manufacture'];
									$Cheapest2Model = $res ['Model'];
									$Cheapest2Type = $res ['Type'];
									$Cheapest2MSRP = $res ['MSRP'];
									$Cheapest2Ratings = $res ['Ratings'];
									$Cheapest2Height = $res ['Height'];
									$Cheapest2Area = $res ['Area'];
									$Cheapest2Image = $res ['Image'];
									$Cheapest2Reviews = $res ['Reviews'];
									$Cheapest2OverallScore = $res ['OverallScore'];
									$Cheapest2AmazonPrice = $res ['AmazonPrice'];
									$Cheapest2LastPrice = $res ['LastPrice'];
									$Cheapest2AmazonPage = $res ['AmazonPage'];
									$Cheapest2alt = $res ['alt'];
									$Cheapest2aname = $res ['aname'];
									$Cheapest2LargeImage = $res ['LargeImage'];
									$Cheapest2Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #3 Cheapest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice < ".$less_than."  ORDER BY AmazonPrice LIMIT 3 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Cheapest3DISC = $res ['DISC'];
									$Cheapest3LastUpdate = $res ['LastUpdate'];
									$Cheapest3ID = $res ['ID'];
									$Cheapest3Asin = $res ['Asin'];
									$Cheapest3OutOfStock = $res ['OutOfStock'];
									$Cheapest3Size = $res ['Size'];
									$Cheapest3Brand = $res ['Brand'];
									$Cheapest3Manufacture = $res ['Manufacture'];
									$Cheapest3Model = $res ['Model'];
									$Cheapest3Type = $res ['Type'];
									$Cheapest3MSRP = $res ['MSRP'];
									$Cheapest3Ratings = $res ['Ratings'];
									$Cheapest3Height = $res ['Height'];
									$Cheapest3Area = $res ['Area'];
									$Cheapest3Image = $res ['Image'];
									$Cheapest3Reviews = $res ['Reviews'];
									$Cheapest3OverallScore = $res ['OverallScore'];
									$Cheapest3AmazonPrice = $res ['AmazonPrice'];
									$Cheapest3LastPrice = $res ['LastPrice'];
									$Cheapest3AmazonPage = $res ['AmazonPage'];
									$Cheapest3alt = $res ['alt'];
									$Cheapest3aname = $res ['aname'];
									$Cheapest3LargeImage = $res ['LargeImage'];
									$Cheapest3Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #4 Cheapest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice < ".$less_than."  ORDER BY AmazonPrice LIMIT 4 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Cheapest4DISC = $res ['DISC'];
									$Cheapest4LastUpdate = $res ['LastUpdate'];
									$Cheapest4ID = $res ['ID'];
									$Cheapest4Asin = $res ['Asin'];
									$Cheapest4OutOfStock = $res ['OutOfStock'];
									$Cheapest4Size = $res ['Size'];
									$Cheapest4Brand = $res ['Brand'];
									$Cheapest4Manufacture = $res ['Manufacture'];
									$Cheapest4Model = $res ['Model'];
									$Cheapest4Type = $res ['Type'];
									$Cheapest4MSRP = $res ['MSRP'];
									$Cheapest4Ratings = $res ['Ratings'];
									$Cheapest4Height = $res ['Height'];
									$Cheapest4Area = $res ['Area'];
									$Cheapest4Image = $res ['Image'];
									$Cheapest4Reviews = $res ['Reviews'];
									$Cheapest4OverallScore = $res ['OverallScore'];
									$Cheapest4AmazonPrice = $res ['AmazonPrice'];
									$Cheapest4LastPrice = $res ['LastPrice'];
									$Cheapest4AmazonPage = $res ['AmazonPage'];
									$Cheapest4alt = $res ['alt'];
									$Cheapest4aname = $res ['aname'];
									$Cheapest4LargeImage = $res ['LargeImage'];
									$Cheapest4Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #5 Cheapest

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0  AND AmazonPrice < ".$less_than."  ORDER BY AmazonPrice LIMIT 5 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Cheapest5DISC = $res ['DISC'];
									$Cheapest5LastUpdate = $res ['LastUpdate'];
									$Cheapest5ID = $res ['ID'];
									$Cheapest5Asin = $res ['Asin'];
									$Cheapest5OutOfStock = $res ['OutOfStock'];
									$Cheapest5Size = $res ['Size'];
									$Cheapest5Brand = $res ['Brand'];
									$Cheapest5Manufacture = $res ['Manufacture'];
									$Cheapest5Model = $res ['Model'];
									$Cheapest5Type = $res ['Type'];
									$Cheapest5MSRP = $res ['MSRP'];
									$Cheapest5Ratings = $res ['Ratings'];
									$Cheapest5Height = $res ['Height'];
									$Cheapest5Area = $res ['Area'];
									$Cheapest5Image = $res ['Image'];
									$Cheapest5Reviews = $res ['Reviews'];
									$Cheapest5OverallScore = $res ['OverallScore'];
									$Cheapest5AmazonPrice = $res ['AmazonPrice'];
									$Cheapest5LastPrice = $res ['LastPrice'];
									$Cheapest5AmazonPage = $res ['AmazonPage'];
									$Cheapest5alt = $res ['alt'];
									$Cheapest5aname = $res ['aname'];
									$Cheapest5LargeImage = $res ['LargeImage'];
									$Cheapest5Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

						//END Cheapest


						//START Popular

								//FIND #1 Popular

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0   ORDER BY Reviews DESC LIMIT 1 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Popular1DISC = $res ['DISC'];
									$Popular1LastUpdate = $res ['LastUpdate'];
									$Popular1ID = $res ['ID'];
									$Popular1Asin = $res ['Asin'];
									$Popular1OutOfStock = $res ['OutOfStock'];
									$Popular1Size = $res ['Size'];
									$Popular1Brand = $res ['Brand'];
									$Popular1Manufacture = $res ['Manufacture'];
									$Popular1Model = $res ['Model'];
									$Popular1Type = $res ['Type'];
									$Popular1MSRP = $res ['MSRP'];
									$Popular1Ratings = $res ['Ratings'];
									$Popular1Height = $res ['Height'];
									$Popular1Area = $res ['Area'];
									$Popular1Image = $res ['Image'];
									$Popular1Reviews = $res ['Reviews'];
									$Popular1OverallScore = $res ['OverallScore'];
									$Popular1AmazonPrice = $res ['AmazonPrice'];
									$Popular1LastPrice = $res ['LastPrice'];
									$Popular1AmazonPage = $res ['AmazonPage'];
									$Popular1alt = $res ['alt'];
									$Popular1aname = $res ['aname'];
									$Popular1LargeImage = $res ['LargeImage'];
									$Popular1Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}



								//FIND #2 Popular

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0    ORDER BY Reviews DESC LIMIT 2 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Popular2DISC = $res ['DISC'];
									$Popular2LastUpdate = $res ['LastUpdate'];
									$Popular2ID = $res ['ID'];
									$Popular2Asin = $res ['Asin'];
									$Popular2OutOfStock = $res ['OutOfStock'];
									$Popular2Size = $res ['Size'];
									$Popular2Brand = $res ['Brand'];
									$Popular2Manufacture = $res ['Manufacture'];
									$Popular2Model = $res ['Model'];
									$Popular2Type = $res ['Type'];
									$Popular2MSRP = $res ['MSRP'];
									$Popular2Ratings = $res ['Ratings'];
									$Popular2Height = $res ['Height'];
									$Popular2Area = $res ['Area'];
									$Popular2Image = $res ['Image'];
									$Popular2Reviews = $res ['Reviews'];
									$Popular2OverallScore = $res ['OverallScore'];
									$Popular2AmazonPrice = $res ['AmazonPrice'];
									$Popular2LastPrice = $res ['LastPrice'];
									$Popular2AmazonPage = $res ['AmazonPage'];
									$Popular2alt = $res ['alt'];
									$Popular2aname = $res ['aname'];
									$Popular2LargeImage = $res ['LargeImage'];
									$Popular2Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #3 Popular

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0    ORDER BY Reviews DESC LIMIT 3 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Popular3DISC = $res ['DISC'];
									$Popular3LastUpdate = $res ['LastUpdate'];
									$Popular3ID = $res ['ID'];
									$Popular3Asin = $res ['Asin'];
									$Popular3OutOfStock = $res ['OutOfStock'];
									$Popular3Size = $res ['Size'];
									$Popular3Brand = $res ['Brand'];
									$Popular3Manufacture = $res ['Manufacture'];
									$Popular3Model = $res ['Model'];
									$Popular3Type = $res ['Type'];
									$Popular3MSRP = $res ['MSRP'];
									$Popular3Ratings = $res ['Ratings'];
									$Popular3Height = $res ['Height'];
									$Popular3Area = $res ['Area'];
									$Popular3Image = $res ['Image'];
									$Popular3Reviews = $res ['Reviews'];
									$Popular3OverallScore = $res ['OverallScore'];
									$Popular3AmazonPrice = $res ['AmazonPrice'];
									$Popular3LastPrice = $res ['LastPrice'];
									$Popular3AmazonPage = $res ['AmazonPage'];
									$Popular3alt = $res ['alt'];
									$Popular3aname = $res ['aname'];
									$Popular3LargeImage = $res ['LargeImage'];
									$Popular3Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}


								//FIND #4 Popular

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0    ORDER BY Reviews DESC LIMIT 4 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Popular4DISC = $res ['DISC'];
									$Popular4LastUpdate = $res ['LastUpdate'];
									$Popular4ID = $res ['ID'];
									$Popular4Asin = $res ['Asin'];
									$Popular4OutOfStock = $res ['OutOfStock'];
									$Popular4Size = $res ['Size'];
									$Popular4Brand = $res ['Brand'];
									$Popular4Manufacture = $res ['Manufacture'];
									$Popular4Model = $res ['Model'];
									$Popular4Type = $res ['Type'];
									$Popular4MSRP = $res ['MSRP'];
									$Popular4Ratings = $res ['Ratings'];
									$Popular4Height = $res ['Height'];
									$Popular4Area = $res ['Area'];
									$Popular4Image = $res ['Image'];
									$Popular4Reviews = $res ['Reviews'];
									$Popular4OverallScore = $res ['OverallScore'];
									$Popular4AmazonPrice = $res ['AmazonPrice'];
									$Popular4LastPrice = $res ['LastPrice'];
									$Popular4AmazonPage = $res ['AmazonPage'];
									$Popular4alt = $res ['alt'];
									$Popular4aname = $res ['aname'];
									$Popular4LargeImage = $res ['LargeImage'];
									$Popular4Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//FIND #5 Popular

									$query=mysql_query("SELECT  * from all_tents WHERE Brand = ".$sql_type."  AND  OutOfStock = 0    ORDER BY Reviews DESC LIMIT 5 ")  or die(mysql_error());
										while($res=mysql_fetch_array($query))
									{

									$Popular5DISC = $res ['DISC'];
									$Popular5LastUpdate = $res ['LastUpdate'];
									$Popular5ID = $res ['ID'];
									$Popular5Asin = $res ['Asin'];
									$Popular5OutOfStock = $res ['OutOfStock'];
									$Popular5Size = $res ['Size'];
									$Popular5Brand = $res ['Brand'];
									$Popular5Manufacture = $res ['Manufacture'];
									$Popular5Model = $res ['Model'];
									$Popular5Type = $res ['Type'];
									$Popular5MSRP = $res ['MSRP'];
									$Popular5Ratings = $res ['Ratings'];
									$Popular5Height = $res ['Height'];
									$Popular5Area = $res ['Area'];
									$Popular5Image = $res ['Image'];
									$Popular5Reviews = $res ['Reviews'];
									$Popular5OverallScore = $res ['OverallScore'];
									$Popular5AmazonPrice = $res ['AmazonPrice'];
									$Popular5LastPrice = $res ['LastPrice'];
									$Popular5AmazonPage = $res ['AmazonPage'];
									$Popular5alt = $res ['alt'];
									$Popular5aname = $res ['aname'];
									$Popular5LargeImage = $res ['LargeImage'];
									$Popular5Discount = ((($res ['MSRP'] - $res ['AmazonPrice'])/ $res ['MSRP'])*100);

								}

								//END Popular

							//END FIND TOP 5 in each SECTION



					// START to DEFINE topten scores

						// Create Empty Array

						$TotalScores = Array();

						// Populate Array

						$TopRated1 = $TopRated1Asin;
						$TopRated1Divisor = $TopRated1Reviews / 1000000;
						$TopRated1Score = 5 + $TopRated1Divisor;


							$TotalScores [$TopRated1] = $TopRated1Score;

						$TopRated2 = $TopRated2Asin;
						$TopRated2Divisor = $TopRated2Reviews / 1000000;
						$TopRated2Score = 4 + $TopRated2Divisor;

							$TotalScores [$TopRated2] = $TopRated2Score;

						$TopRated3 = $TopRated3Asin;
						$TopRated3Divisor = $TopRated3Reviews / 1000000;
						$TopRated3Score = 3 + $TopRated3Divisor;

							$TotalScores [$TopRated3] = $TopRated3Score;

						$TopRated4 = $TopRated4Asin;
						$TopRated4Divisor = $TopRated4Reviews / 1000000;
						$TopRated4Score = 2 + $TopRated4Divisor;

							$TotalScores [$TopRated4] = $TopRated4Score;

						$TopRated5 = $TopRated5Asin;
						$TopRated5Divisor = $TopRated5Reviews / 1000000;
						$TopRated5Score = 1 + $TopRated5Divisor;

							$TotalScores [$TopRated5] = $TopRated5Score;



						$BestValue1 = $BestValue1Asin;
						$BestValue1Divisor = $BestValue1Reviews / 1000000;
						$BestValue1Score = 5 + $BestValue1Divisor ;


							if (array_key_exists($BestValue1, $TotalScores)) {
									$TotalScores[$BestValue1] = ($TotalScores[$BestValue1] + $BestValue1Score );
							} else {

								$TotalScores [$BestValue1] = $BestValue1Score;
							}


						$BestValue2 = $BestValue2Asin;
						$BestValue2Divisor = $BestValue2Reviews / 1000000;
						$BestValue2Score = 4 + $BestValue2Divisor ;


							if (array_key_exists($BestValue2, $TotalScores)) {
									$TotalScores[$BestValue2] = ($TotalScores[$BestValue2] + $BestValue2Score );
							} else {

								$TotalScores [$BestValue2] = $BestValue2Score;
							}

						$BestValue3 = $BestValue3Asin;
						$BestValue3Divisor = $BestValue3Reviews / 1000000;
						$BestValue3Score = 3 + $BestValue3Divisor ;


							if (array_key_exists($BestValue3, $TotalScores)) {
									$TotalScores[$BestValue3] = ($TotalScores[$BestValue3] + $BestValue3Score );
							} else {

								$TotalScores [$BestValue3] = $BestValue3Score;
							}


						$BestValue4 = $BestValue4Asin;
						$BestValue4Divisor = $BestValue4Reviews / 1000000;
						$BestValue4Score = 2 + $BestValue4Divisor ;


							if (array_key_exists($BestValue4, $TotalScores)) {
									$TotalScores[$BestValue4] = ($TotalScores[$BestValue4] + $BestValue4Score );
							} else {

								$TotalScores [$BestValue4] = $BestValue4Score;
							}

						$BestValue5 = $BestValue5Asin;
						$BestValue5Divisor = $BestValue5Reviews / 1000000;
						$BestValue5Score = 1 + $BestValue5Divisor ;


							if (array_key_exists($BestValue5, $TotalScores)) {
									$TotalScores[$BestValue5] = ($TotalScores[$BestValue5] + $BestValue5Score );
							} else {

								$TotalScores [$BestValue5] = $BestValue5Score;
							}


						$Largest1 = $Largest1Asin;
						$Largest1Divisor = $Largest1Reviews / 1000000;
						$Largest1Score = 5 + $Largest1Divisor ;


							if (array_key_exists($Largest1, $TotalScores)) {
									$TotalScores[$Largest1] = ($TotalScores[$Largest1] + $Largest1Score );
							} else {

								$TotalScores [$Largest1] = $Largest1Score;
							}


						$Largest2 = $Largest2Asin;
						$Largest2Divisor = $Largest2Reviews / 1000000;
						$Largest2Score = 4 + $Largest2Divisor ;


							if (array_key_exists($Largest2, $TotalScores)) {
									$TotalScores[$Largest2] = ($TotalScores[$Largest2] + $Largest2Score );
							} else {

								$TotalScores [$Largest2] = $Largest2Score;
							}

						$Largest3 = $Largest3Asin;
						$Largest3Divisor = $Largest3Reviews / 1000000;
						$Largest3Score = 3 + $Largest3Divisor ;


							if (array_key_exists($Largest3, $TotalScores)) {
									$TotalScores[$Largest3] = ($TotalScores[$Largest3] + $Largest3Score );
							} else {

								$TotalScores [$Largest3] = $Largest3Score;
							}


						$Largest4 = $Largest4Asin;
						$Largest4Divisor = $Largest4Reviews / 1000000;
						$Largest4Score = 2 + $Largest4Divisor ;


							if (array_key_exists($Largest4, $TotalScores)) {
									$TotalScores[$Largest4] = ($TotalScores[$Largest4] + $Largest4Score );
							} else {

								$TotalScores [$Largest4] = $Largest4Score;
							}

						$Largest5 = $Largest5Asin;
						$Largest5Divisor = $Largest5Reviews / 1000000;
						$Largest5Score = 1 + $Largest5Divisor ;


							if (array_key_exists($Largest5, $TotalScores)) {
									$TotalScores[$Largest5] = ($TotalScores[$Largest5] + $Largest5Score );
							} else {

								$TotalScores [$Largest5] = $Largest5Score;
							}




						$Cheapest1 = $Cheapest1Asin;
						$Cheapest1Divisor = $Cheapest1Reviews / 1000000;
						$Cheapest1Score = 5 + $Cheapest1Divisor ;


							if (array_key_exists($Cheapest1, $TotalScores)) {
									$TotalScores[$Cheapest1] = ($TotalScores[$Cheapest1] + $Cheapest1Score );
							} else {

								$TotalScores [$Cheapest1] = $Cheapest1Score;
							}


						$Cheapest2 = $Cheapest2Asin;
						$Cheapest2Divisor = $Cheapest2Reviews / 1000000;
						$Cheapest2Score = 4 + $Cheapest2Divisor ;


							if (array_key_exists($Cheapest2, $TotalScores)) {
									$TotalScores[$Cheapest2] = ($TotalScores[$Cheapest2] + $Cheapest2Score );
							} else {

								$TotalScores [$Cheapest2] = $Cheapest2Score;
							}

						$Cheapest3 = $Cheapest3Asin;
						$Cheapest3Divisor = $Cheapest3Reviews / 1000000;
						$Cheapest3Score = 3 + $Cheapest3Divisor ;


							if (array_key_exists($Cheapest3, $TotalScores)) {
									$TotalScores[$Cheapest3] = ($TotalScores[$Cheapest3] + $Cheapest3Score );
							} else {

								$TotalScores [$Cheapest3] = $Cheapest3Score;
							}


						$Cheapest4 = $Cheapest4Asin;
						$Cheapest4Divisor = $Cheapest4Reviews / 1000000;
						$Cheapest4Score = 2 + $Cheapest4Divisor ;


							if (array_key_exists($Cheapest4, $TotalScores)) {
									$TotalScores[$Cheapest4] = ($TotalScores[$Cheapest4] + $Cheapest4Score );
							} else {

								$TotalScores [$Cheapest4] = $Cheapest4Score;
							}

						$Cheapest5 = $Cheapest5Asin;
						$Cheapest5Divisor = $Cheapest5Reviews / 1000000;
						$Cheapest5Score = 1 + $Cheapest5Divisor ;


							if (array_key_exists($Cheapest5, $TotalScores)) {
									$TotalScores[$Cheapest5] = ($TotalScores[$Cheapest5] + $Cheapest5Score );
							} else {

								$TotalScores [$Cheapest5] = $Cheapest5Score;
							}


						$Popular1 = $Popular1Asin;
						$Popular1Divisor = $Popular1Reviews / 1000000;
						$Popular1Score = 5 + $Popular1Divisor ;


							if (array_key_exists($Popular1, $TotalScores)) {
									$TotalScores[$Popular1] = ($TotalScores[$Popular1] + $Popular1Score );
							} else {

								$TotalScores [$Popular1] = $Popular1Score;
							}


						$Popular2 = $Popular2Asin;
						$Popular2Divisor = $Popular2Reviews / 1000000;
						$Popular2Score = 4 + $Popular2Divisor ;


							if (array_key_exists($Popular2, $TotalScores)) {
									$TotalScores[$Popular2] = ($TotalScores[$Popular2] + $Popular2Score );
							} else {

								$TotalScores [$Popular2] = $Popular2Score;
							}

						$Popular3 = $Popular3Asin;
						$Popular3Divisor = $Popular3Reviews / 1000000;
						$Popular3Score = 3 + $Popular3Divisor ;


							if (array_key_exists($Popular3, $TotalScores)) {
									$TotalScores[$Popular3] = ($TotalScores[$Popular3] + $Popular3Score );
							} else {

								$TotalScores [$Popular3] = $Popular3Score;
							}


						$Popular4 = $Popular4Asin;
						$Popular4Divisor = $Popular4Reviews / 1000000;
						$Popular4Score = 2 + $Popular4Divisor ;


							if (array_key_exists($Popular4, $TotalScores)) {
									$TotalScores[$Popular4] = ($TotalScores[$Popular4] + $Popular4Score );
							} else {

								$TotalScores [$Popular4] = $Popular4Score;
							}

						$Popular5 = $Popular5Asin;
						$Popular5Divisor = $Popular5Reviews / 1000000;
						$Popular5Score = 1 + $Popular5Divisor ;


							if (array_key_exists($Popular5, $TotalScores)) {
									$TotalScores[$Popular5] = ($TotalScores[$Popular5] + $Popular5Score );
							} else {

								$TotalScores [$Popular5] = $Popular5Score;
							}


						//THIS is Just so I remember how I got the key
						//foreach ($TopScoring1 as $key => $val) {
							 // echo "$key = $val\n";
						//}

						///Find The Top 10 Results

							// Sort results Descending
								arsort($TotalScores);

								//Define position of each
								$TopScoring1 = array_slice($TotalScores, 0,1, true);
								$TopScoring2 = array_slice($TotalScores, 1,1, true);
								$TopScoring3 = array_slice($TotalScores, 2,1, true);
								$TopScoring4 = array_slice($TotalScores, 3,1, true);
								$TopScoring5 = array_slice($TotalScores, 4,1, true);
								$TopScoring6 = array_slice($TotalScores, 5,1, true);
								$TopScoring7 = array_slice($TotalScores, 6,1, true);
								$TopScoring8 = array_slice($TotalScores, 7,1, true);
								$TopScoring9 = array_slice($TotalScores, 8,1, true);
								$TopScoring10 = array_slice($TotalScores, 9,1, true);

						//Convert to usable Variables

						$Number1 = key($TopScoring1);
						$Number2 = key($TopScoring2);
						$Number3 = key($TopScoring3);
						$Number4 = key($TopScoring4);
						$Number5 = key($TopScoring5);
						$Number6 = key($TopScoring6);
						$Number7 = key($TopScoring7);
						$Number8 = key($TopScoring8);
						$Number9 = key($TopScoring9);
						$Number10 = key($TopScoring10);

						foreach ($TopScoring1 as $key => $val) {
							$Number1Score = $val ;
						}

						foreach ($TopScoring2 as $key => $val) {
							$Number2Score = $val ;
						}

						foreach ($TopScoring3 as $key => $val) {
							$Number3Score = $val ;
						}

						foreach ($TopScoring4 as $key => $val) {
							$Number4Score = $val ;
						}

						foreach ($TopScoring5 as $key => $val) {
							$Number5Score = $val ;
						}

						foreach ($TopScoring6 as $key => $val) {
							$Number6Score = $val ;
						}

						foreach ($TopScoring7 as $key => $val) {
							$Number7Score = $val ;
						}

						foreach ($TopScoring8 as $key => $val) {
							$Number8Score = $val ;
						}

						foreach ($TopScoring9 as $key => $val) {
							$Number9Score = $val ;
						}


						foreach ($TopScoring10 as $key => $val) {
							$Number10Score = $val ;
						}


						// Get Data for each of the products

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number1'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number1Price = $res ['AmazonPrice'] ;
								$Number1Model = $res ['Model'] ;
								$Number1Brand = $res ['Brand'] ;
								$Number1Image = $res ['Image'] ;
								$Number1aname = $res ['aname'] ;
								$Number1Area = $res ['Area'] ;
								$Number1Height = $res ['Height'] ;
							}

							if ($Number1Area > 81) {
									$Number1Size = 'It makes an ideal choice for families' ;
								} else {
									$Number1Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number1Price < 151) {
									$Number1Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number1Budget = ' and those looking for a tent that will last many years.' ;
								}


									if ($TopRated1Asin === $Number1) {
											$Number1Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory1Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number1) {
											$Number1Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory1Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number1) {
											$Number1Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory1Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number1) {
											$Number1Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory1Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number1) {
											$Number1Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory1Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number1Winner = '';
											$isCategory1Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number2'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number2Price = $res ['AmazonPrice'] ;
								$Number2Model = $res ['Model'] ;
								$Number2Brand = $res ['Brand'] ;
								$Number2Image = $res ['Image'] ;
								$Number2aname = $res ['aname'] ;
								$Number2Area = $res ['Area'] ;
								$Number2Height = $res ['Height'] ;
							}

							if ($Number2Area > 81) {
									$Number2Size = 'It makes  an ideal choice for families' ;
								} else {
									$Number2Size = 'It makes an ideal choice for couples' ;
								}

							if ($Number2Price < 151) {
									$Number2Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number2Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number2) {
											$Number2Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory2Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number2) {
											$Number2Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory2Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number2) {
											$Number2Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory2Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number2) {
											$Number2Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory2Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number2) {
											$Number2Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory2Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number2Winner = '';
											$isCategory2Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number3'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number3Price = $res ['AmazonPrice'] ;
								$Number3Model = $res ['Model'] ;
								$Number3Brand = $res ['Brand'] ;
								$Number3Image = $res ['Image'] ;
								$Number3aname = $res ['aname'] ;
								$Number3Area = $res ['Area'] ;
								$Number3Height = $res ['Height'] ;
							}

							if ($Number3Area > 81) {
									$Number3Size = 'It makes an ideal choice for families' ;
								} else {
									$Number3Size = 'It makes an ideal choice for couples' ;
								}

							if ($Number3Price < 151) {
									$Number3Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number3Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number3) {
											$Number3Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory3Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number3) {
											$Number3Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory3Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number3) {
											$Number3Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory3Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number3) {
											$Number3Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory3Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number3) {
											$Number3Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory3Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number3Winner = '';
											$isCategory3Winner = '';
									}


						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number4'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number4Price = $res ['AmazonPrice'] ;
								$Number4Model = $res ['Model'] ;
								$Number4Brand = $res ['Brand'] ;
								$Number4Image = $res ['Image'] ;
								$Number4aname = $res ['aname'] ;
								$Number4Area = $res ['Area'] ;
								$Number4Height = $res ['Height'] ;
							}

							if ($Number4Area > 81) {
									$Number4Size = 'It makes an ideal choice for families' ;
								} else {
									$Number4Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number4Price < 151) {
									$Number4Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number4Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number4) {
											$Number4Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory4Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number4) {
											$Number4Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory4Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number4) {
											$Number4Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory4Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number4) {
											$Number4Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory4Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number4) {
											$Number4Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory4Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number4Winner = '';
											$isCategory4Winner = '';
									}


						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number5'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number5Price = $res ['AmazonPrice'] ;
								$Number5Model = $res ['Model'] ;
								$Number5Brand = $res ['Brand'] ;
								$Number5Image = $res ['Image'] ;
								$Number5aname = $res ['aname'] ;
								$Number5Area = $res ['Area'] ;
								$Number5Height = $res ['Height'] ;
							}

							if ($Number5Area > 81) {
									$Number5Size = 'It makes an ideal choice for families' ;
								} else {
									$Number5Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number5Price < 151) {
									$Number5Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number5Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number5) {
											$Number5Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory5Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number5) {
											$Number5Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory5Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number5) {
											$Number5Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory5Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number5) {
											$Number5Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory5Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number5) {
											$Number5Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory5Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number5Winner = '';
											$isCategory5Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number6'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number6Price = $res ['AmazonPrice'] ;
								$Number6Model = $res ['Model'] ;
								$Number6Brand = $res ['Brand'] ;
								$Number6Image = $res ['Image'] ;
								$Number6aname = $res ['aname'] ;
								$Number6Area = $res ['Area'] ;
								$Number6Height = $res ['Height'] ;
							}

							if ($Number6Area > 81) {
									$Number6Size = 'It makes an ideal choice for families' ;
								} else {
									$Number6Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number6Price < 151) {
									$Number6Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number6Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number6) {
											$Number6Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory6Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number6) {
											$Number6Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory6Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number6) {
											$Number6Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory6Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number6) {
											$Number6Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory6Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number6) {
											$Number6Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory6Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number6Winner = '';
											$isCategory6Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number7'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number7Price = $res ['AmazonPrice'] ;
								$Number7Model = $res ['Model'] ;
								$Number7Brand = $res ['Brand'] ;
								$Number7Image = $res ['Image'] ;
								$Number7aname = $res ['aname'] ;
								$Number7Area = $res ['Area'] ;
								$Number7Height = $res ['Height'] ;
							}

							if ($Number7Area > 81) {
									$Number7Size = 'It makes an ideal choice for families' ;
								} else {
									$Number7Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number7Price < 151) {
									$Number7Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number7Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number7) {
											$Number7Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory7Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number7) {
											$Number7Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory7Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number7) {
											$Number7Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory7Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number7) {
											$Number7Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory7Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number7) {
											$Number7Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory7Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number7Winner = '';
											$isCategory7Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number8'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number8Price = $res ['AmazonPrice'] ;
								$Number8Model = $res ['Model'] ;
								$Number8Brand = $res ['Brand'] ;
								$Number8Image = $res ['Image'] ;
								$Number8aname = $res ['aname'] ;
								$Number8Area = $res ['Area'] ;
								$Number8Height = $res ['Height'] ;
							}

							if ($Number8Area > 81) {
									$Number8Size = 'It makes an ideal choice for families' ;
								} else {
									$Number8Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number8Price < 151) {
									$Number8Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number8Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number8) {
											$Number8Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory8Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number8) {
											$Number8Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory8Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number8) {
											$Number8Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory8Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number8) {
											$Number8Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory8Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number8) {
											$Number8Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory8Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number8Winner = '';
											$isCategory8Winner = '';
									}


						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number9'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number9Price = $res ['AmazonPrice'] ;
								$Number9Model = $res ['Model'] ;
								$Number9Brand = $res ['Brand'] ;
								$Number9Image = $res ['Image'] ;
								$Number9aname = $res ['aname'] ;
								$Number9Area = $res ['Area'] ;
								$Number9Height = $res ['Height'] ;
							}

							if ($Number9Area > 81) {
									$Number9Size = 'It makes an ideal choice for families' ;
								} else {
									$Number9Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number9Price < 151) {
									$Number9Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number9Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number9) {
											$Number9Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory9Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number9) {
											$Number9Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory9Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number9) {
											$Number9Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory9Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number9) {
											$Number9Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory9Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number9) {
											$Number9Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory9Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number9Winner = '';
											$isCategory9Winner = '';
									}

						$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number10'")  or die(mysql_error());
								while($res=mysql_fetch_array($query))
							{
								$Number10Price = $res ['AmazonPrice'] ;
								$Number10Model = $res ['Model'] ;
								$Number10Brand = $res ['Brand'] ;
								$Number10Image = $res ['Image'] ;
								$Number10aname = $res ['aname'] ;
								$Number10Area = $res ['Area'] ;
								$Number10Height = $res ['Height'] ;
							}

							if ($Number10Area > 81) {
									$Number10Size = 'It makes an ideal choice for families' ;
								} else {
									$Number10Size = 'It makes  an ideal choice for couples' ;
								}

							if ($Number10Price < 151) {
									$Number10Budget = ' looking for a great tent on a budget.' ;
								} else {
									$Number10Budget = ' and those looking for a tent that will last many years.' ;
								}

									if ($TopRated1Asin === $Number10) {
											$Number10Winner = '<div class="winner"><span>Winner Top Rated</span></div>';
											$isCategory10Winner = 'It is also the winner of the <a href="#top-rated">Top Rated Category</a>';

									} elseif ($BestValue1Asin === $Number10) {
											$Number10Winner = '<div class="winner"><span>Winner Best Value</span></div>';
											$isCategory10Winner = 'It is also the winner of the <a href="#best-value">Best Value Category</a>';

									} elseif ($Largest1Asin === $Number10) {
											$Number10Winner = '<div class="winner"><span>Winner Largest</span></div>';
											$isCategory10Winner = 'It is also the winner of the <a href="#largest">Largest Category</a>';

									} elseif ($Cheapest1Asin === $Number10) {
											$Number10Winner = '<div class="winner"><span>Winner Cheapest</span></div>';
											$isCategory10Winner = 'It is also the winner of the <a href="#cheapest">Cheapest Category</a>';

									} elseif ($Popular1Asin === $Number10) {
											$Number10Winner = '<div class="winner"><span>Winner Most Popular</span></div>';
											$isCategory10Winner = 'It is also the winner of the <a href="#most-popular">Most Popular Category</a>';

									} else {
											$Number10Winner = '';
											$isCategory10Winner = '';
									}

		// END to DEFINE topten scores


		//GET TOP TEN ASIN

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number1'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition1 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number2'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition2 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number3'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition3 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number4'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition4 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number5'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition5 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number6'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition6 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number7'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition7 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number8'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition8 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number9'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition9 = $res ['AmazonPrice'] ;
					}

					$query=mysql_query("SELECT * from all_tents WHERE Asin='$Number10'")  or die(mysql_error());
					while($res=mysql_fetch_array($query))
					{
					$TopTenPosition10 = $res ['AmazonPrice'] ;
					}

		//END TOP TEN ASINS


?>