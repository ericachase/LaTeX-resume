<html>

<body>

</body>
</html>
<?php 
$name = echo $_GET["name"]; 
$output = shell_exec('pdflatex template_a.tex ' + $name);

$path = 'template_a.pdf';
header("Content-Length: " . filesize ( $path ) ); 
header("Content-type: application/pdf"); 
header("Content-disposition: inline; filename=".basename($path));
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
ob_clean();
flush();
readfile($path);

?>
