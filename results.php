<?php
	// get the input from text field
	$farenheit = $_POST['farenheit'];
?>
<?php
	// calculate the volume
	$celsius = 5/9 * ($farenheit - 32) 
?>

<?php
  $celsius = number_format($celsius, 2);
?>

<h3>Results:</h3>
The temperature from farenheit to celsius is <?php echo "$celsius" ?> °C
</div>