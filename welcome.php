<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php 
$name =  $_GET["name"];

<<<<<<< HEAD
<<<<<<< HEAD
$command = 'pdflatex template_a.tex';
=======
$command = 'pdflatex test.tex';
>>>>>>> f12a2e467ebd7bc9267d1d2863ad6ff3a0ffbc75
=======
$command = 'pdflatex test.tex';
=======
$command = 'pdflatex template_a.tex';
>>>>>>> 1688f2a5006d0f2e6da72204c0bd95dfda56b3c7
>>>>>>> 84711445b6359ec32f402b12487ae53470d7fe01
$output = shell_exec($command);
echo "<pre>$output</pre>";



<<<<<<< HEAD
<<<<<<< HEAD
//echo ('pdflatex template_a.tex ' . $name); 

// $path = 'template_a.pdf';
=======
//echo ('pdflatex template_.tex ' . $name); 

// $path = 'test.pdf';
>>>>>>> f12a2e467ebd7bc9267d1d2863ad6ff3a0ffbc75
=======
//echo ('pdflatex template_.tex ' . $name); 

// $path = 'test.pdf';
=======
//echo ('pdflatex template_a.tex ' . $name); 

// $path = 'template_a.pdf';
>>>>>>> 1688f2a5006d0f2e6da72204c0bd95dfda56b3c7
>>>>>>> 84711445b6359ec32f402b12487ae53470d7fe01
// header("Content-Length: " . filesize ( $path ) ); 
// header("Content-type: application/pdf"); 
// header("Content-disposition: inline; filename=".basename($path));
// header('Expires: 0');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// ob_clean();
// flush();
// readfile($path);

?>

</body>
</html>


