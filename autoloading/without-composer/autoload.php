<?php

function loadBikeDirectoryClass($class_name) {
    $path_to_file = 'Bike/' . $class_name . '.php';

    if (file_exists(__DIR__ . '/' . $path_to_file)) {
        require $path_to_file;
    }
}

spl_autoload_register('loadBikeDirectoryClass');

// spl_autoload_register() automatically includes the files
// we are trying to create object from that file's class