<?php

require_once '../vendor/autoload.php';

$folderPath = 'C:\Users\MILAN\Downloads\ionicons-master\src\svg';

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
foreach ($data as $icon=>$data) {
    $jsString .= "iconsets.ionicons['$icon'] = '$data';\n";
}

echo $jsString;
