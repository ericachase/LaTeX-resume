<html>

<body>
Welcome <?php echo $_GET["name"]; ?>
</body>
</html>
<?php
$output = shell_exec('ls -lart');
echo "<pre>$output</pre>";
?>