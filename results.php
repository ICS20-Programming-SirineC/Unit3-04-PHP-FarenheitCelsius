<?php
  // get the Fahrenheits from the textfield
  $fahrenheits = $_POST['fahrenheits'];

  // calculate the celsius
  $celsius = 5.0/9.0 * ($fahrenheits-32);

  // round celcius to 1 decimal places
  $rounded_celsius = round($celsius, 1);
?>
<h3>Results:</h3>
The temperature is <?php echo $rounded_celsius ?>°C.