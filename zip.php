<?php

// Create a new zip file called images.zip
$zip = new ZipArchive();
$zip->open('images.zip',  ZipArchive::CREATE);

// Add the cottage image to the zip file
$zip->addFile('./cottage.jpeg');

// Add the forest image to the zip file
$zip->addFile('./forest.jpeg');

// Add the lake image to the zip file
$zip->addFile('./lake.jpeg');

// Display zip file information
echo 'Number of files: '.$zip->numFiles;
echo '<br>';
echo 'Zip status: '.$zip->status;

// Close the zip file
$zip->close();
