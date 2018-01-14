<?php
/**
 * The template for displaying a list of properties from a json feed.
 */
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- include our stylesheet -->
</head>
<body>
	<?php 
	$json_data = file_get_contents('data.json', true); // read the contents of the json file to a string.

	$listings = json_decode($json_data, true); // decodes the string into a PHP variable, with 'true' being set to convert the object into an array.
	
	print_r($listings); // output our newly created $listings variable
	
	?>
</body>