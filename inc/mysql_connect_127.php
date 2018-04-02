<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());

mysql_select_db('optimumtents')  or die(mysql_error());


	$query=mysql_query("SELECT LastUpdate from all_tents WHERE Asin='B016N7DFMI'")  or die(mysql_error());

	while($res=mysql_fetch_array($query))

	{

	$LastUpdate = $res['LastUpdate'];

	}


$TimeNow = date("Y-m-d H:i:s");

$recentupdate = date("M jS, Y", strtotime(substr($LastUpdate, 0, -9)));


$timestamp = substr($LastUpdate, 0, -3).' PST ' ;

$footertimestamp = substr($LastUpdate, 0, -9);

$topselling = 3 ;
$totaltopten = 7 ;
$topdiff = "4" ;
$montanaposition = 18 ;

$spd = ' <a  href="/privacy-disclaimer.php#last-update" rel="nofollow"><i class="material-icons price-info" title=" Price on Amazon.com: ( as of '.$timestamp.') - More info ">info_outline</i></a>';
$gpd = ' <a  href="/privacy-disclaimer.php#last-update" rel="nofollow"><i class="material-icons price-info" title=" Prices on Amazon.com: ( as of '.$timestamp.') - More info ">info_outline</i></a>';

$background = '<img src="img/backgrounds/campsite.jpg" alt="campsite">';
$bgcoleman = '<img src="img/backgrounds/coleman-camping.jpg" alt="coleman camping">';

$update =  strtotime($LastUpdate);
$now =		strtotime("now");
$diff =	(($now - $update)-10800);


		{
		if (($diff/3600) < 17.41) :


			$shortdiff ='this morning' ;

				else:

			    	$shortdiff = 'yesterday morning' ;

				endif ;

		}


//Button Color Sitewide
$myButtonColor = " amber darken-4" ;


//simple class to convert number to words in php based on http://www.karlrixon.co.uk/writing/convert-numbers-to-words-with-php/
if ( !class_exists('NumbersToWords') ){
  /**
  * NumbersToWords
  */
  class NumbersToWords{

    public static $hyphen      = '-';
    public static $conjunction = ' and ';
    public static $separator   = ', ';
    public static $negative    = 'negative ';
    public static $decimal     = ' point ';
    public static $dictionary  = array(
      0                   => 'zero',
      1                   => 'one',
      2                   => 'two',
      3                   => 'three',
      4                   => 'four',
      5                   => 'five',
      6                   => 'six',
      7                   => 'seven',
      8                   => 'eight',
      9                   => 'nine',
      10                  => 'ten',
      11                  => 'eleven',
      12                  => 'twelve',
      13                  => 'thirteen',
      14                  => 'fourteen',
      15                  => 'fifteen',
      16                  => 'sixteen',
      17                  => 'seventeen',
      18                  => 'eighteen',
      19                  => 'nineteen',
      20                  => 'twenty',
      30                  => 'thirty',
      40                  => 'fourty',
      50                  => 'fifty',
      60                  => 'sixty',
      70                  => 'seventy',
      80                  => 'eighty',
      90                  => 'ninety',
      100                 => 'hundred',
      1000                => 'thousand',
      1000000             => 'million',
      1000000000          => 'billion',
      1000000000000       => 'trillion',
      1000000000000000    => 'quadrillion',
      1000000000000000000 => 'quintillion'
    );

    public static function convert($number){
      if (!is_numeric($number) ) return false;
      $string = '';
      switch (true) {
        case $number < 21:
            $string = self::$dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = self::$dictionary[$tens];
            if ($units) {
                $string .= self::$hyphen . self::$dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = self::$dictionary[$hundreds] . ' ' . self::$dictionary[100];
            if ($remainder) {
                $string .= self::$conjunction . self::convert($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = self::convert($numBaseUnits) . ' ' . self::$dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? self::$conjunction : self::$separator;
                $string .= self::convert($remainder);
            }
            break;
      }
      return $string;
    }
  }//end class
}//end if
/**
 * usage:
 */




?>


