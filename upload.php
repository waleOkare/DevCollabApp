<?php

/**
$path = "./";
if(is_dir($path)) {

    $dir_handle = opendir($path);

    while (($dir = readdir( $dir_handle)) !== false) {

        if (is_dir($dir)) {
            echo "is dir: " . $dir . "<br>";

        } elseif (is_file($dir)) {

            echo "is file: " . $dir . "<br>";
        }

    }
closedir( $dir_handle );

}

**/


$path = "/upload";

$handle = opendir($path);

while($file = readdir($handle)){

    if(substr($file,0,1)!= " .") {
        echo "<img src = '$file'/> ";
    }

}


closedir($handle);

