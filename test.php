<?php
$dir = ".";
$files = scandir($dir);

echo "Files in directory: $dir\n";
foreach($files as $file) {
    echo $file . "\n";
}
?>
