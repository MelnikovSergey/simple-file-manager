<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple File-Manager</title>
	<link rel="stylesheet" href="css/file-manager.css">
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
						if(is_dir($folder . '/' . $file)) {
							echo "<li><img src='img/folder.svg' class='folder'> " . $file . "</li>";
						} else {
							echo "<li><img src='img/folder.svg' class='file'> " . $file . " " . filetype($folder . '/' . $file) . "</li>";
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
