<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Book - Piano Progress Tracker</title>
    <style>
      body {
	font-family: Arial, sans-serif;
	max-width: 600px;
	padding: 20px;
	background-color: #f4f4f4;
      }
      h1 {
	color: #333;
	text-align: center;
      }
      .form-container {
	background: white;
	padding: 30px;
	border-radius: 8px;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1)
      }
      label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
	color: #555;
      }
      select {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 2px solid #ddd;
	border-radius: 4px;
	font-size: 16px;
      }
      button {
	width: 100%;
	padding: 12px;
	background-color: #4CAF50;
	color: white;
	border: none;
	border-radius: 4px;
	font-size: 16px;
	cursor: pointer;
      }
      button:hover {
	background-color: #45a049;
      }
      .result {
	margin-top: 20px;
	padding: 15px;
	background-color: #e8f5e9;
	border-left: 4px solid #4CAF50;
	border-radius: 4px;
      }
    </style>
  </head>
  <body>
    <h1>🎹 Select Your Book</h1>

    <div class="form-container">
      <form method="POST" action="select-book.php">
	<label for="book">Choose an Alfred's Piano Book:</label>
	<select name="book" id="book" required>
	  <option value="">-- Select a Book --</option>
	  <option value="scales-chords-arpeggios">Scales, Chords, Arpeggios & Cadences</option>
	  <option value="basic-piano-level-1A">Basic Piano Course - Level 1A</option>
	</select>
	
	<button type="submit">Select Book</button>
      </form>

      <?php
      // Check if form was submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the selected book
	$selectedBook = $_POST['book'];

	// Display a message
	echo "<div class='result'>";
	echo "<strong>You selected:</strong> ";

	// Convert the value to a readable name
	switch ($selectedBook) {
	  case 'scales-chords-arpeggios':
	    echo "Scales, Chords, Arpeggios & Cadences";
	    break;
	  case 'basic-piano-level-1A':
	    echo "Basic Piano level 1A";
	    break;
	  default:
	    echo "Unknown book";
	}

	echo "</div>";
    }
    ?>
    </div>
  </body>
</html>
