<?php
require_once 'vendor/autoload.php';

$folderPaths = [];
$folderPaths['fab'] = 'C:\Users\MILAN\Downloads\fontawesome-free-5.10.1-web/svgs/brands';
$folderPaths['far'] = 'C:\Users\MILAN\Downloads\fontawesome-free-5.10.1-web/svgs/regular';
$folderPaths['fas'] = 'C:\Users\MILAN\Downloads\fontawesome-free-5.10.1-web/svgs/solid';
$stub = "var iconsets = iconsets || {}; iconsets.fontawesome = iconsets.fontawesome || {};";

$filepath = __DIR__ . '/fa.js';
file_put_contents($filepath, $stub . "\n");

foreach ($folderPaths as $key => $folderPath) {
    $files = \Sinevia\FileUtils::directoryListFiles($folderPath);
    $data = [];
    foreach ($files as $file) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $filename = pathinfo($file, PATHINFO_FILENAME);
        if (in_array($ext, ['svg']) == false) {
            continue;
        }
        $contents = file_get_contents($file);
        $base64_contents = base64_encode($contents);
        if ($ext == 'svg') {
            $base64_imagedata = 'data:image/svg+xml;base64,' . $base64_contents;
        }
        $data[$filename] = $base64_imagedata;
    }
    // DEBUG: var_dump($data);
    $jsString = '';
    foreach ($data as $icon => $data) {
        $jsString .= "iconsets.fontawesome['" . $key . "-" . $icon . "'] = '$data';\n";
    }
    // echo $jsString;
    file_put_contents($filepath, $jsString . "\n", FILE_APPEND);
}

