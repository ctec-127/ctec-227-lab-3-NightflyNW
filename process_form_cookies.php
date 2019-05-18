<!doctype html>
<?php 
	
	setcookie("stateSelect", $_POST["stateSelect"], time() + 7200);
	setcookie("selectCountry", $_POST["selectCountry"], time() + 7200);
	
	$_COOKIE["stateSelect"] = $_POST["stateSelect"];
	$_COOKIE["selectCountry"] = $_POST["selectCountry"];

?>

<html>
<head>
	<title>Making Cookies</title>
</head>
<body>

<?php 	echo 'Your State cookie is ' . $_COOKIE["stateSelect"];
		echo '<br>';
		echo 'Your Country cookie is ' . $_COOKIE["selectCountry"];
?>

 	<pre>
		<?php print_r(headers_list()); ?>
		<?php print_r($_COOKIE); ?>
	</pre>
</body>
</html>