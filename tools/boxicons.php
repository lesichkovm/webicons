<?php
require_once '../vendor/autoload.php';

$folderPaths = [];
$folderPaths['logos'] = '/home/sinevia/Downloads/boxicons-master/svg/logos';
$folderPaths['regular'] = '/home/sinevia/Downloads/boxicons-master/svg/regular';
$folderPaths['dolid'] = '/home/sinevia/Downloads/boxicons-master/svg/solid';
$stub = "var iconsets = iconsets || {}; iconsets.boxicons = iconsets.boxicons || {};";

$filepath = __DIR__ . '/webicons.boxicons.js';
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
        $contents = str_replace('width="24"', '', $contents);
        $contents = str_replace('height="24"', '', $contents);        
        $base64_contents = base64_encode($contents);
        
        if ($ext == 'svg') {
            $base64_imagedata = 'data:image/svg+xml;base64,' . $base64_contents;
        }
        $data[$filename] = $base64_imagedata;
    }
    // DEBUG: var_dump($data);
    $jsString = '';
    foreach ($data as $icon => $data) {
        $jsString .= "iconsets.boxicons['" . $key . "-" . $icon . "'] = '$data';\n";
    }
    // echo $jsString;
    file_put_contents($filepath, $jsString . "\n", FILE_APPEND);
}

