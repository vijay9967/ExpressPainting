<!DOCTYPE html>
<html><head>
        <title> Express Painting</title>
        <link rel="stylesheet" href="newstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Anton&display=swap" rel="stylesheet">
        
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
p {
  padding-top: 8px;
        font-family: "Racing Sans One";
        font-size: 70px;
        font-weight: 1500;
        font-kerning: 0.3em; 
        position: absolute;
        color: #0a0a63;
        padding-left: 25px;
        background: -webkit-linear-gradient(rgb(255, 0, 0), rgb(90, 1, 255));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
}
.upper{
	background-color: white;
	
}
.upper a{
	position: absolute;
	left:48%;
	 font-size: 18px;
	font-family: "Anton";
	text-decoration: none;
	 text-shadow: 3px 3px 5px #474747;
}
</style>
</head>
<body>
  <header>
    <div class="page-header">
        <a href="#default" id="top"><h1>Express Painting</h1></a>
        <nav>
        <ul>
            <li><a href="home.php"><em>Home</em></a></li>
            <li><a href="about.php"><em>About us</em></a></li>
            <li><a href="feedback.php"><em>Feedback</em></a></li>
            <li><a href="mailto:exppainting@gmail.com" target="_top"><em>Mail</em></a></li>
        </ul>
    </nav>
    </div>
</header>
<div>
  <form action="store.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Your name.." required>

    <label for="suggestion">Suggestion</label>
    <input type="text" name="suggestion" placeholder="Any suggestion.." required>

    <label for="experience">your experience with our expert team</label>
    <input type="text" name="experience" placeholder="good or bad and why" required>

    <label for="complain">Complain</label>
    <input type="text" name="complain" placeholder="if yes then please give reason." required>


    <label for="city">City</label>
    <select name="city" required>
      <option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="Delhi">Delhi</option>
      <option value="Bangaluru">Bangaluru</option>
      <option value="Surat">Surat</option>
      <option value="Chennai">Chennai</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>
<p>Public Feedback<br></p>
<?php

require("conn.php");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, suggestion, experience, complain, city FROM feedback";
$result = mysqli_query($conn, $sql);
echo "<br><br><br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>"."<br>"."<br>"."<b>Name:</b> " . $row["name"]."<br>". "<b>suggestion:</b> " . $row["suggestion"]."<br>". "<b>experience:</b> " . $row["experience"]."<br>". "<b>complain:</b> " . $row["complain"]."<br>". "<b>city:</b> " . $row["city"];
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<div class="upper">
<a href="#top"><br><br><b><big>Go to top</big><b></a>
</div>
</body>
</html>
