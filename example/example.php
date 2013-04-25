<?php
/** 
 * phpDynamicThumbnailGenerate
 * @author Ali Haris (http://github.com/aliharis)
 * @since Aptil 25, 2013 : 11:10
 */
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Ali Haris - http://twitter.com/iharis">
	<meta name="description" content="Example for using phpDynamicThumbnailGenerate Script">
	<title>Example | Generate Dynamic Thumbnail using PHP</title>
	<style>
		body {
			font-family: "Courier New", Courier;
		}
	</style>
</head>
<body>

	<h1>Example &ndash; Generate Dynamic Thumbnail using PHP</h1>

<?php

require '../phpThumbGenerate.php';

if ($_FILES) {
	generateThumbnail($_FILES['thumbnail']['tmp_name'], "output/".$_FILES['thumbnail']['name'], $_FILES['thumbnail']['type'], 100, 100);
	echo 'Thumbnail Generated: <a href="output/'.$_FILES['thumbnail']['name'].'">View Generated Thumbnail</a>';
	echo '<br /><br />';
}

?>

	<form name="example" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label for="file">Select File:</label>
		<br />
		<input type="file" name="thumbnail" id="thumbnail" accept="image/*" required="required"> 
		<br />
		<input type="submit" value="Generate Thumbnail">
	</form>

</body>
</html>
