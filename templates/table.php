


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
        // Use the first file found as the link target
        $firstFile = basename($files[0]);
        $link = "$baseUrl/$folderName/$firstFile";
        $links[] = "<a href=\"$link\" class=\"folder-link\">$folderName</a>";
    }
}

// Join with a hollow dot separator ∘ (U+2218)
if (!empty($links)) {
    echo '<div class="folder-links">' . implode(' <span class="dot-separator">•</span> ', $links) . '</div>';
} else {
    echo '<h3>No folders with .php or .html files found.</h3>';
}
?>

    <h3><a href= "blogpost2.php">blogpost2</a></h3>

</article>


