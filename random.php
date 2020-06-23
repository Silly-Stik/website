<html>
<link href="style.php" rel="stylesheet">
<?php 
include ("topnav.php")
?>
<meta http-equiv="refresh" content="0; url=comic?c=<?php echo rand(1, count($titles)); ?>" />
</html>