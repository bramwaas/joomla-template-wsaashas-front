<?php
/* footer voor waasdorpsoekhan.nl (UA-7124553-2) en soekhan.nl (UA-7124553-3) soekdorp (UA-7124553-4)
*  nu alleen nog met google analytics
*  Bram Waasdorp 2009 02 11
*  variabel per website 18/11/2012
*/
?>

<!-- google analytics -->
<?php 
$ga_url  = JURI::base( );    
if (stristr($ga_url, "waasdorpsoekhan") > " " )
{  
 $ga_ua =  "UA-7124553-2";
}
elseif (stristr($ga_url, "soekhan") > " "  )
{
$ga_ua =  "UA-7124553-3";
}
elseif (stristr($ga_url, "soekdorp") > " "  )
{
$ga_ua =  "UA-7124553-4";
}
else
{
$ga_ua =  "";
}


if ($ga_ua > " ") : ?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo $ga_ua; ?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php endif; ?>
<!-- einde google-analytics -->
