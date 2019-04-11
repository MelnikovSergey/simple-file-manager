<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Файлы и папки:</h1>
	<ul>
	<?php
		$folder = 'dir';
		if (is_dir($folder)) {
			if ($dh = opendir($folder)) {
				while (($file = readdir($dh)) !== false) {
					if($file !='.' and $file !='..') {
						if(is_dir($file)) {
							echo "<li>dir " . $file . "</li>";
						} else {
							echo "<li>file " . $file . "</li>";
						}
					}
				}
				closedir($dh);
			}
		}
	?>
	</ul>
</body>
</html>
