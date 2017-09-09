<html>
<head>
<title>Hello World App</title>
	<meta name="viewport" content="width-device-width; initial-scale=1.0"/>
	<link href="base_url('bootstrap/css/bootstrap.css')" rel="stylesheet" type="text/css" />
	<link href="base_url('bootstrap/css/bootstrap-theme.css')" rel="stylesheet" type="text/css" />
	<link href="base_url('assets/css/mybootstrap.css')" rel="stylesheet" type="text/css" />
	
	<script src="base_url('bootstrap/js/jquery.min.js')"></script>
	<script src="base_url('bootstrap/js/bootstrap.min.js')"></script>
</head>
<body>
<?php
for($ctr=1;$ctr<=6;$ctr++)
{
	echo "<h$ctr>Hello World</h$ctr>";
}
?>
</body>
</html>

