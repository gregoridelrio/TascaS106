<?php

require 'vendor/autoload.php';

use League\Flysystem\Filesystem;
use League\Flysystem\Local\LocalFilesystemAdapter;

$adapter = new LocalFilesystemAdapter(__DIR__);
$filesystem = new Filesystem($adapter);

$filesystem->write('archivo.txt', "Hola Mundo");

echo "Archivo escrito correctamente";
