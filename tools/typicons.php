<?php
require_once '../vendor/autoload.php';

$folderPath = '/home/sinevia/Downloads/typicons.font-master/src/svg';
$stub = "var iconsets = iconsets || {}; iconsets.typicons = iconsets.typicons || {};";

$filepath = __DIR__ . '/ty.js';
file_put_contents($filepath, $stub . "\n");


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
    $jsString .= "iconsets.typicons['" . $icon . "'] = '$data';\n";
}
// echo $jsString;
file_put_contents($filepath, $jsString . "\n", FILE_APPEND);
