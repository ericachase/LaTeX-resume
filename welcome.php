<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php 
$name =  $_GET["name"];
$output = shell_exec('pdflatex command_test.tex' . ' ' . $name);
echo ('pdflatex command_test.tex ' . $name); 

$path = 'command_test.pdf';
header("Content-Length: " . filesize ( $path ) ); 
header("Content-type: application/pdf"); 
header("Content-disposition: inline; filename=".basename($path));
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
ob_clean();
flush();
readfile($path);

?>

</body>
</html>

