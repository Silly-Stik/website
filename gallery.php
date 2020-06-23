<html>
<head>
<title>Stik Site | Gallery</title>
<link href="style.php" rel="stylesheet">
<?php
include ("topnav.php");
?>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  font-family: 'Quicksand', sans-serif;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</html>
<h1>Gallery</h1>
<p>Welcome to the Silly Stik Site Comic Gallery.<br/>
Here you will find all of the past comics, from newest to oldest.</p>
<?php
foreach(array_reverse($the_big_array,true) as $com){
	echo "<div class=\"responsive\"><div class=\"gallery\">
  <a href=\"comic?c=".(array_search($com, $the_big_array)+1)."\">
    <img src=\"comics/".$com[2]."\" alt=\"".$com[0]."\" width=\"600\" height=\"400\">
  </a>
  <div class=\"desc\">".$com[0]."</div>
</div></div>";
}
?>