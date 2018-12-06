<?php

if($_GET['killme']=="true") {
	$healthfile = fopen("health.php", "w") or die("Unable to open file!");
	fwrite($healthfile, "<?php\nheader('HTTP/1.0 404 Not Found');\n?>");
	fclose($healthfile);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>PCAP Demo Applikation</title>
</head>
<body>

<h1>PCAP Demo Applikation</h1>
<a href="?killme=true">Kill me!</a>

</html>
