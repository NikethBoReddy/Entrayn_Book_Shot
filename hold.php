<html>
<head>
	<title>Response Page</title>
</head>
<body>
	<h2>Thank You</h2>
	<a id="link" href="#" onclick="history.go(-1); return false;">Click here to submit again</a>
	<?php
		$b = $_POST["filename"];
		$newfile = fopen("files/".$b.".txt","w");
		fwrite($newfile,$_POST["imgid"]);
	?>
</body>
</html>