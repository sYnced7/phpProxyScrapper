<?php
$filename = $_GET['key'];

if (file_exists($filename)) 
{
    echo "true";
	unlink($filename);
} else {
    echo "false";
}
?>
