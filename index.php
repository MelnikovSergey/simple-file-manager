<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Файлы и папки:</h1>
	<?php
		$folder = 'dir';
		if (is_dir($folder)) {
			if ($dh = opendir($folder)) {
				while (($file = readdir($dh)) !== false) {
					echo 'Файл'
				}
				closedir($dh)
			}
		}
	?>
</body>
</html>
