<?php
function startsWith($string, $startString) { 
  $len = strlen($startString); 
  return (substr($string, 0, $len) === $startString); 
} 
if(($_SERVER["REQUEST_URI"]=="/topnav.php")||($_SERVER["REQUEST_URI"]=="/topnav")){
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index\" />";
}
?>
<script src="https://kit.fontawesome.com/1d8183d999.js" crossorigin="anonymous"></script>
<style>
* {box-sizing: border-box;}

.title {
	/*stuff*/
}

/* Style the navbar */
.topnav {
  overflow: hidden;
  background-color: #dddddd;
  border-radius: 10px;
  border-style: solid;
  border-width: 1px;
  border-color: #888888;
}

/* Navbar links */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.topnav a:hover {
  background-color: #eee;
  color: black;
}

/* Active/current link */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the input container */
.topnav .search-container {
  float: right;
}

/* Style the input field inside the navbar */
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

/* Style the button inside the input container */
.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ccc;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #bbb;
}

@media screen and (min-width: 675px) {
	.topnav {
		height: 49px;
	}
}

/* Add responsiveness - On small screens, display the navbar vertically instead of horizontally */
@media screen and (max-width: 675px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
</style>

<?php
// Put anything that you want to run at the start of the program here
if(startsWith($_SERVER["REQUEST_URI"], "/error")){
	$filename = "../cdata.csv";
} else {
	$filename = 'cdata.csv';
}

// The nested array to hold all the arrays
$the_big_array = []; 
$titles = [];
// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE) 
{
  // Each line in the file is converted into an individual array that we call $data
  // The items of the array are comma separated
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    // Each individual array is being pushed into the nested array
    $the_big_array[] = $data;		
  }
  foreach($the_big_array as $line){
	$titles[] = $line[0];
  }
  // Close the file
  fclose($h);
}
?>

<!-- Add meta tags for ALL pages here -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="webcomic, comedy, stick figure, doodles">
<meta name="author" content="Nick & Sam">

<div class="pageContentWrapper">
<link rel="icon" src="favicon.ico" type="image/x-icon" /> <!-- Replace "../stiksite/favicon.ico" with "/favicon.ico" when uploaded to web -->
<h1 class="head">Silly Stik Site</h1>
<div class="topnav">
  <a <?php if(($_SERVER["REQUEST_URI"]=="/index")||($_SERVER["REQUEST_URI"]=="/")||($_SERVER["REQUEST_URI"]=="/index.php")){
  echo "class=\"active\" ";}?>href="/">Home</a>
  <a <?php if(($_SERVER["REQUEST_URI"]=="/about.php")||($_SERVER["REQUEST_URI"]=="/about")){
  echo "class=\"active\" ";}?>href="about">About</a>
  <a <?php if(($_SERVER["REQUEST_URI"]=="/gallery.php")||($_SERVER["REQUEST_URI"]=="/gallery")){
  echo "class=\"active\" ";}?>href="gallery">Gallery</a>
  <div class="search-container">
    <form action="search">
      <input type="text" placeholder="Search.." name="q">
      <button type="submit">Go!</button>
    </form>
  </div>
</div>