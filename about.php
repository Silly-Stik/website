<html>
<head>
<title>Stik Site | About</title>
<link href="style.php" rel="stylesheet">
<style>
/* Three columns side by side */
.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
  background-color: #cce2f2;
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
a i.fab, a i.far {
	color: black;
}
</style>
</head>
<body>
<?php include ("topnav.php"); ?>
<h1>About the comic</h1>
<p>Silly Stik was created sometime in 2014 or 15 by Nick at a young age.<br/>
His brother, Sam, soon joined in and together they made comics.<br/>
They continue making them to this day, and enjoy making new adventures for the characters.</p>
<h2>Why a website?</h2>
<p>The comic was made into a website for a school project by Nick, but we hope to continue it long after.</p>
<h1>The Creators</h1>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/nickl.png" alt="Nick" style="width:100%">
      <div class="container">
        <h2>Nick</h2>
        <p class="title">Creator, Author, Website Maker</p>
        <p>Nick is the creator of Silly Stik.</p>
        <p>Contact him at: <i>nick@sillystik.com</i></p>
        <p><button class="button" onclick="window.location.href='mailto:nick@sillystik.com'">Contact</button></p>
      </div>
    </div>
  </div>

<!--  <div class="column">
    <div class="card">
      <img src="img2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>-->

  <div class="column">
    <div class="card">
      <img src="images/lol_i_changed_the_filename.png" alt="Sam" style="width:100%"><!--images/saml.png-->
      <div class="container">
        <h2>Sam</h2>
        <p class="title">Author, Co-Creator</p>
        <p>Sam is the brother of Nick, and the co-creator of Silly Stik.</p>
        <p>Contact him at: <i>sam@sillystik.com</i></p>
        <p><button class="button" onclick="window.location.href='mailto:sam@sillystik.com'">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php") ?>
</body>
</html>