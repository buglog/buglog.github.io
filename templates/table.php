


<article>
<?php
$baseDir = __DIR__ . '../../p'; // Path to your subfolders
$baseUrl = '../../p'; // Relative URL path

$subfolders = array_filter(glob($baseDir . '/*'), 'is_dir');

$links = [];

foreach ($subfolders as $folderPath) {
    $folderName = basename($folderPath);

    // Look for any .php or .html file in the folder
    $phpFiles = glob("$folderPath/*.php");
    $htmlFiles = glob("$folderPath/*.html");

    $files = array_merge($phpFiles, $htmlFiles);

    if (!empty($files)) {
        $firstFilePath = $files[0];
        $firstFileName = basename($firstFilePath);
        $link = "$baseUrl/$folderName/$firstFileName";

        // Read meta type from file
        $fileContents = file_get_contents($firstFilePath);

        // Use regex to extract <meta name="type" content="...">
        $type = 'default';
        if (preg_match('/<meta\s+name=["\']type["\']\s+content=["\']([^"\']+)["\']\s*\/?>/i', $fileContents, $matches)) {
            $type = strtolower($matches[1]); // e.g., 'video', 'writing', etc.
        }

        // Map type to CSS class
        $typeClass = match ($type) {
            'video' => 'link-video',
            'writing' => 'link-writing',
            'image' => 'link-image',
            'sculpture' => 'link-sculpture',
            default => 'link-default',
        };

        $links[] = "<a href=\"$link\" class=\"folder-link $typeClass\">$folderName</a>";
    }
}

// Join with a hollow dot separator ∘ (U+2218)
if (!empty($links)) {
    echo '<div class="folder-links">' . implode(' <span class="dot-separator">•</span> ', $links) . '</div>';
} else {
    echo '<h3>No folders with .php or .html files found.</h3>';
}
?>

</article>


