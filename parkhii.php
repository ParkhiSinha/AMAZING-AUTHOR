<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="test";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if($_POST){
    $comment = $_POST['comment'];
$sql = "INSERT INTO feedback (comments)
VALUES ('$comment')";
if ($conn->query($sql) === TRUE) {
  echo "<script>
  alert ('your words added to website');
</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background:palevioletred ;
}
/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background:white;
}
/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 50%;
  padding:20px;
}
/* Right column */
.rightcolumn {
  float: right;
  width: 50%;
  padding: 20px;
}
/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.text{
  background-color: pink;
  width: 100%;
  padding: 20px;
}
/* Add a card effect for articles */
.card {
   background-color: palevioletred;
   padding: 20px;
   margin-top: 20px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: pink;
  margin-top: 20px;
}
.submit{
  padding: 20px;
  text-align:left;
  background: palevioletred;
  margin-top: 20px;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
<div class="header">
  <h2>AMAZING AUTHOR</h2>
</div>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>THE FONDNESS I FOUND</h2>
      <h5></h5>
      <img src="img/the fondness i found.jpg">
      <p>Reading you is my kind of intimacy,</p>
      <p>The love, I found in books of romance.</p>
      <p>Never thought to be true,</p>
      <p>Love do exist with eternity.</p>
      <br> <br>
      <p>Love is true,</p>
      <p>When efforts are made.</p>
      <p>Love is divine,</p>
      <p>When handled with care.</p>
      <br> <br>
      <p>The secrets you kept and the scars you carried,</p>
      <p>The pain you hide behind a smile.</p>
      <p>The loneliness and love songs you heard,</p>
      <p>When you are alone.</p>
      <br> <br>
      <p>I wish to feel every bit of you,</p>
      <p>Please tell me those things.</p>
      <p>That you are hiding since ages,</p>
      <p>I wish to know from you.</p>
      <br> <br>
      <p>I ask you! my dear!</p>
      <p>You know you are hard to define.</p>
      <p>With merely worthless words,</p>
      <p>I see a magic in you with no limits.</p>
      <br> <br>
      <p>There exists something which goes beyond and beyond.</p>
      <p>Is it love or fantasy!</p>
      <p>Your looks as amazing as you are,</p>
      <p>Your eyes as shinning as stars in sky.</p>
      <br> <br>
      <p>Love do exist,</p>
      <p>When you will find me in your arms.</p>
      <p>With invisible touches of feelings,</p>
      <p>I fell in love with you.</p>
          </div>
    <div class="card">
      <h2>DEAR ME</h2>
      <h5></h5>
      <img src="img/WhatsApp Image 2023-09-08 at 23.15.40.jpg">
      <p>You know you are the best,</p>
      <p>Remember who you are.</p>
      <p>Your voice is as sweet as you are,</p>
      <p>Just a gentle reminder</p>
      <br> <br>
      <p>Nothing much like evergreen,</p>
      <p>But you are a girl with high emotions.</p>
      <p>Neither too sensitive nor too weak,</p>
      <p>To fall upon your words.</p>
      <br> <br>
      <p>If you make an effort,</p>
      <p>May be she be the cure.</p>
      <p>If you honor her past,</p>
      <p>May be she dwell on your heart.</p>
      <br> <br>
      <p>Apart from fun at all times,</p>
      <p>She turns twenty.</p>
      <p>Accepting the ups and downs,</p>
      <p>Making it a perfect place to live in.</p>
      <br> <br>
      <p>No matter how hard or easy,</p>
      <p>The biggest mountain called life is.</p>
      <p>Each day passing and reminding of fantasy,</p>
      <p>That literally no one but only she knows.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <img src="img/grin.jpg">
      <p>STAGE IS MY LOVE,</p>
      <p>ANCHORING IS MY PASSION.</p>
      <p>WRITE-UPS IS MY GOAL.</p>
      <p><b>AMAZING AUTHOR IS MY FAME,</b></h3>
      <p><b>STUDENT IS STILL MY NAME.</b></p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <img src="img/pix.jpg">
      <a href="https://www.instagram.com/p/CSAKTRfizd1/?igshid=MzRlODBiNWFlZA=="> CLICK HERE TO READ</a>
    </div>
    <div class="card">
      <img src="img/girl.jpg">
      <a href="https://www.instagram.com/p/CRHTHJPhB2L/?igshid=MzRlODBiNWFlZA=="> CLICK HERE TO READ</a>
    </div>
    <div class="card">
      <img src="img/WhatsApp Image 2023-09-09 at 23.11.43.jpg">
      <a href="https://www.instagram.com/p/CdrsD4TvzT1/?igshid=MzRlODBiNWFlZA=="> CLICK HERE TO READ</a>
    </div>
    <div class="card">
      <img src="img/WhatsApp Image 2023-09-09 at 23.35.39.jpg">
      <a href="https://www.instagram.com/p/CfddsaBv-Ti/?igshid=MzRlODBiNWFlZA=="> CLICK HERE TO READ</a>
    </div>
  </div>
</div>
<form action = "?" method = "post">
<div class="text">
<textarea name="comment" rows="5" cols="180" width="100%" >FEEL FREE TO SHARE YOUR VALUABLE WORDS</textarea>
</div>
  <div class="submit">
  <input type="submit" value="submit" >
  </div>
  </form>
<div class="footer">
  <style>
    table{
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
    }
    th,td{
      text-align: left;
      padding: 16px;
    }
  </style>
  <table>
    <tr>
      <th><img src="img/WhatsApp Image 2023-09-11 at 15.33.29.jpg" height="100" width="90"></th>
      <th><img src="img/WhatsApp Image 2023-09-11 at 15.37.07.jpg" height="100" width="90"></th>
      <th><img src="img/WhatsApp Image 2023-09-11 at 16.00.04.jpg" height="100" width="90" ></th>
      <th><img src= "img/WhatsApp Image 2023-09-11 at 16.06.06.jpg" height="100" width="90"></th>
    </tr>
    <tr>
      <th>INSTAGRAM</th>
      <th>LINKEDIN</th>
      <th>YOUTUBE</th>
      <th>GMAIL</th>
    </tr>
  </table>
    <br> <br>
    <a href= "https://instagram.com/parkhisinha_22?igshid=NGVhN2U2NjQ0Yg==">FOLLOW US</a>  <a href= "https://www.linkedin.com/feed/">CONNECT  US</a>
</div>
</body>
</html>
