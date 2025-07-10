
<?php include 'templates/style.php'; ?>

<?php include 'templates/header.php'; ?>

<article>
<?php
$baseDir = __DIR__ . '/p'; // Path to your subfolders
$baseUrl = 'p'; // Relative URL path

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
    echo '<div class="folder-links">' . implode(' <span class="dot-separator">&#8728;</span> ', $links) . '</div>';
} else {
    echo '<p>No folders with .php or .html files found.</p>';
}
?>
</article>

<?php include 'templates/table.php'; ?>
<?php include 'templates/footer.php'; ?>
