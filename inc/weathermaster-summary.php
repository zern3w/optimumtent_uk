<?php
if ($Diff<'0') {
  echo '<p>As the Elite Weathermaster is cheaper the choice is easy, ';
  echo ' <blockquote><center><strong>My pick would be the Elite Weathermaster pictured below on the right.</strong></blockquote></p>';

} elseif ($Diff>'40') {
  echo "<p>At today's prices".$gpd;
  echo '<i> "they often change"</i> $'.round($Diff, -1, PHP_ROUND_HALF_UP).' looks like a lot to pay extra, just for the convenience of self-rolling windows and an integrated lighting system that requires batteries.</p>';
  echo ' <blockquote><strong>My pick would be the Weathermaster 6 pictured below in the middle.</strong></blockquote>';

} else {

    echo "<p>At today's prices".$gpd ;
    echo '<i> "they often change"</i> $'.round($Diff, -1, PHP_ROUND_HALF_UP).' does not look like a lot to pay extra, for the convenience of self-rolling windows and an integrated lighting system.</p>';
    echo ' <blockquote><strong>My pick would be the Elite Weathermaster pictured below on the right.</strong></blockquote>';
}
?>