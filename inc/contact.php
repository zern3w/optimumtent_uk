<div id="contact">
<form method="post" action="sendmail.php">

<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>

<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


<strong>Your Name:</strong>
<input type="text" name="visitor" style="width: 100%;" />
<strong>Your email address:</strong>
<input type="text" name="visitormail" style="width: 100%;" />


<strong>Ask a question, make a suggestion, or add a comment:</strong>
<textarea name="notes" rows="7" style="width: 100%;"></textarea>

<input type="submit" value="Send Mail" />
</form>
</div>
