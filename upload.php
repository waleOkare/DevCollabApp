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


$path = ".//uploads/";
$dataToWrite = "";

$handle = opendir($path);

while($file = readdir($handle)) {

    echo " <img src = '$file' /> ";

    echo '<br>';
    $dataToWrite .= $file . "\n";


}

closedir($handle);


$writer = fopen("data.txt", 'w');
fwrite($writer, $dataToWrite);
fclose($writer);






