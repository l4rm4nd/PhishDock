<!DOCTYPE html>
<html>
<head>
<title>Welcome to nginx!</title>
<style>
html { color-scheme: light dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif;
font-size: 20px; }
</style>
</head>
<body>
<h1>Welcome to nginx!</h1>

<table>
	<tr>
		<td style="padding: 10px;"><span style="color:lightgreen">✅</span></td>
		<td>If you see this page, the nginx docker web service is successfully running and working.</td>
	</tr>
	<tr>
		<td style="padding: 10px;"><span style="color:lightgreen">✅</span></td>
		<td>PHP should also be working if the version is displayed below.</td>
	</tr>
	<tr>
		<td style="padding: 10px;"><span style="color:orange">⚠</span></td>
		<td>Please store your final web content here to inform phishing victims about the campaign. Use the docker bind mountpoints and place your HTML/CSS/JS/PHP code snippets accordingly.</td>
	</tr>
	<tr>
		<td style="padding: 10px;"><span style="color:red">⚠</span></td>
		<td>This is not the first landing page. Use Gophish instead. This nginx container is used for custom websites or redirect pages solely.</td>
	</tr>
</table>

<p></p>

<span style="color:lightgreen"><i>
<?php

echo(system("php -v"));
?></i>
</span>
</body>
</html>