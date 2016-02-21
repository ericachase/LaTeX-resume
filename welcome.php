<?php 

$name = $_GET['name'];
$email = $_GET['email'];

$Content = "Name, Email\n";
$Content .= "$name, $email\n";

echo $Content;
//resetting the db file on load.
shell_exec('rm database.csv');

//cat-ing the contents of the GET to a db file
shell_exec('cat' . ' ' . $Content . ' ' . '>' . ' ' . 'database.csv');

// //calling the complie command
// shell_exec('pdflatex' . ' ' . 'simpleres.tex' . ' ' . 'database.csv');

// //$output = shell_exec('pdflatex command_test.tex ' + $name);
// // echo ('pdflatex command_test.tex ' + $name); 
// $path = 'simpleres.pdf';
// header("Content-Length: " . filesize ( $path ) ); 
// header("Content-type: application/pdf"); 
// header("Content-disposition: inline; filename=".basename($path));
// header('Expires: 0');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// ob_clean();
// flush();
// readfile($path);

?>