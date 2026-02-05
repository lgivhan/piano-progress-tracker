<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Piano Progress Tracker</title>
    <style>
      body {
	font-family: Arial, sans-serif;
	text-align: center;
	padding-top: 100px;
        background-color: #f4f4f4;  
      }
      h1 {
	color: #333;
      }
    </style>
  </head>
  <body>
    <h1>🎹 Piano Progress Tracker</h1>
    <p>Track your progress through Alfred's Complete Piano Book series</p>
    <p><em>Build with PHP & MySQL</em></p>

    <?php
      echo "<p>Current time: " . date("h:i:sa") . "</p>";
    ?>
  </body>
</html>
