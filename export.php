<?php
/**
 * SENATI ETI Static Site Exporter
 * Crawls all local development routes, rewrites absolute links to relative paths,
 * and saves self-contained static HTML pages into dist/ for direct GitHub Pages deployment.
 */

$port = 8001;
$baseUrl = "http://localhost:$port";
$distDir = __DIR__ . '/dist';

// Define all routes and their output paths & depths
// Depth determines how many "../" prefixes are needed to reach the root
$routes = [
    '/' => ['path' => 'index.html', 'depth' => 0],
    '/nosotros' => ['path' => 'nosotros/index.html', 'depth' => 1],
    '/carreras' => ['path' => 'carreras/index.html', 'depth' => 1],
    '/admision' => ['path' => 'admision/index.html', 'depth' => 1],
    '/contacto' => ['path' => 'contacto/index.html', 'depth' => 1],
    
    // Careers
    '/carrera/desarrollo-software' => ['path' => 'carrera/desarrollo-software/index.html', 'depth' => 2],
    '/carrera/videojuegos-realidad-aumentada' => ['path' => 'carrera/videojuegos-realidad-aumentada/index.html', 'depth' => 2],
    '/carrera/diseno-desarrollo-web' => ['path' => 'carrera/diseno-desarrollo-web/index.html', 'depth' => 2],
    '/carrera/ciberseguridad' => ['path' => 'carrera/ciberseguridad/index.html', 'depth' => 2],
    '/carrera/cloud-computing' => ['path' => 'carrera/cloud-computing/index.html', 'depth' => 2],
    '/carrera/software-ia' => ['path' => 'carrera/software-ia/index.html', 'depth' => 2],
    '/carrera/soporte-ti' => ['path' => 'carrera/soporte-ti/index.html', 'depth' => 2],
    '/carrera/redes-seguridad' => ['path' => 'carrera/redes-seguridad/index.html', 'depth' => 2],
    '/carrera/iot-machine-learning' => ['path' => 'carrera/iot-machine-learning/index.html', 'depth' => 2],
    '/carrera/soporte-mantenimiento' => ['path' => 'carrera/soporte-mantenimiento/index.html', 'depth' => 2],
];

echo "=== ETI Static Site Exporter ===\n";
echo "Starting crawl of $baseUrl...\n\n";

// 1. Create or clear dist directory
if (is_dir($distDir)) {
    deleteDirectory($distDir);
}
mkdir($distDir, 0755, true);

// 2. Crawl and rewrite each route
foreach ($routes as $route => $info) {
    $url = $baseUrl . $route;
    echo "Crawling: $route -> ";
    
    $html = @file_get_contents($url);
    if ($html === false) {
        echo "FAILED (Is artisan serve running on port $port?)\n";
        continue;
    }
    
    $depth = $info['depth'];
    $rootPrefix = str_repeat('../', $depth);
    if ($rootPrefix === '') {
        $rootPrefix = './';
    }
    
    // Process HTML links to be relative
    // Replaces href="/" with href="index.html" or "../../index.html"
    // Replaces href="/nosotros" with href="nosotros/" or "../nosotros/"
    $processedHtml = preg_replace_callback('/(href|src)="\/([^"]*)"/', function($matches) use ($rootPrefix) {
        $attr = $matches[1];
        $val = $matches[2];
        
        if ($val === '') {
            // Root "/" link
            return $attr . '="' . $rootPrefix . 'index.html"';
        }
        
        // Don't modify external links or anchors
        if (strpos($val, 'http') === 0 || strpos($val, '#') === 0) {
            return $matches[0];
        }
        
        // If it's a static asset (assets/...)
        if (strpos($val, 'assets/') === 0) {
            return $attr . '="' . $rootPrefix . $val . '"';
        }
        
        // Marketing pages & career pages links
        // Append a trailing slash so directory loading works on gh-pages
        return $attr . '="' . $rootPrefix . $val . '/"';
    }, $html);
    
    // Special fix for the breadcrumb "Inicio" link if it's relative
    // (Ensure any href="/" or href="./" is correctly matching)
    
    // Determine target file location
    $targetFile = $distDir . '/' . $info['path'];
    $targetDir = dirname($targetFile);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }
    
    file_put_contents($targetFile, $processedHtml);
    echo "SAVED to " . $info['path'] . "\n";
}

// 3. Copy public assets folder
$srcAssets = __DIR__ . '/public/assets';
$destAssets = $distDir . '/assets';
if (is_dir($srcAssets)) {
    echo "\nCopying static assets folder...\n";
    copyDirectory($srcAssets, $destAssets);
    echo "Static assets copied successfully.\n";
}

echo "\nBuild complete! Static site is exported to " . $distDir . "/\n";

/**
 * Recursive directory delete helper
 */
function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}

/**
 * Recursive directory copy helper
 */
function copyDirectory($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst, 0755, true);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDirectory($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}
