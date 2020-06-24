<html>
<head>
<title>Stik Site | Search - "<?php echo $_GET["q"];?>"</title>
<link href="style.php" rel="stylesheet">
</head>
<body onpageshow="myFunction()">
<?php include ("topnav.php"); ?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." value=<?php echo '"'.$_GET["q"].'"'; ?>>
<ul id="myUL">
<?php
foreach($titles as $value){
	echo "<li><a href=\"comic.php?c=".(array_search($value, $titles)+1)."\">".$value."</a></li>";
}
?>
</ul>
<?php include("footer.php") ?>
</body>
</html>