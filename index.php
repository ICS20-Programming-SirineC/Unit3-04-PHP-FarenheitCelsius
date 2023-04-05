<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Unit3-04-PHP-FarenheitCelsius">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Sirine Cherkaoui">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
      <link rel="manifest" href="./fav/site.webmanifest" />

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Fahrenheit to Celsius in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Fahrenheit to Celsius in PHP</h1>";
			echo "<h3>This program will convert Fahrenheits to Celsius.</h3>";
		?>
		<!-- form to get the Fahenheits from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="radius">Fahrenheits :</label>
      <input type="text" id="fahreinheits" placeholder="Enter Fahrenheits" name="fahrenheits"><br><br>
      <input type="submit" value="Calculate Celsius">
		</form>

			<!-- iframe for the results to show on the web page -->
			<iframe id="celsius" name="results">			
	    </iframe>

	</body>
</html>