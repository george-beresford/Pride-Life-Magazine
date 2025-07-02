<?php

$directory = __DIR__;
$quality = 80; // Adjust WebP quality here

$allowedDirs = [
    // realpath($directory . '/adverts'),
    // realpath($directory . '/articles'),
    // realpath($directory . '/assets/img/front-cover')
];

$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

foreach ($rii as $file) {
    if ($file->isDir()) continue;

    $filepath = $file->getPathname();
    $ext = strtolower($file->getExtension());

    // Only process files inside /adverts/ or /articles/
    $inAllowedDir = false;
    foreach ($allowedDirs as $allowedDir) {
        if ($allowedDir && strpos($filepath, $allowedDir . DIRECTORY_SEPARATOR) === 0) {
            $inAllowedDir = true;
            break;
        }
    }
    if (!$inAllowedDir) continue;

    if (!in_array($ext, ['jpg', 'jpeg', 'png'])) continue;

    $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $filepath);

    // Skip if .webp already exists and is newer
    if (file_exists($webpPath) && filemtime($webpPath) >= filemtime($filepath)) {
        echo "Skipping: $filepath (already converted)\n";
        continue;
    }

    switch ($ext) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($filepath);
            break;
        case 'png':
            $image = imagecreatefrompng($filepath);
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
            break;
    }

    if ($image === false) {
        echo "Failed to open: $filepath\n";
        continue;
    }

    // Resize if needed (max 1500px width or height, keep aspect ratio)
    $maxDim = 1500;
    $width = imagesx($image);
    $height = imagesy($image);
    if ($width > $maxDim || $height > $maxDim) {
        if ($width >= $height) {
            $newWidth = $maxDim;
            $newHeight = intval($height * ($maxDim / $width));
        } else {
            $newHeight = $maxDim;
            $newWidth = intval($width * ($maxDim / $height));
        }
        $resized = imagecreatetruecolor($newWidth, $newHeight);
        // Preserve transparency for PNG
        if ($ext === 'png') {
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
        }
        imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagedestroy($image);
        $image = $resized;
    }

    if (imagewebp($image, $webpPath, $quality)) {
        echo "Converted: $filepath → $webpPath\n";
    } else {
        echo "Failed to convert: $filepath\n";
    }

    imagedestroy($image);
}