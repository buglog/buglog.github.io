
<?php include 'templates/style.php'; ?>
<?php include 'templates/header.php'; ?>

<?php
$baseDir = __DIR__ . '/p'; // Path to your subfolders
$baseUrl = 'p'; // Relative URL path

$subfolders = array_filter(glob($baseDir . '/*'), 'is_dir');

$links = [];

foreach ($subfolders as $folderPath) {
    $folderName = basename($folderPath);
    $indexFile = "$folderPath/index.php";
    //$jsonFiles = glob("$folderPath/*.json");

    if (file_exists($indexFile) /*&& !empty($jsonFiles)*/) {
        $link = "$baseUrl/$folderName/index.php";
        $links[] = "<a href=\"$link\" class=\"folder-link\">$folderName</a>";
    }
}


// Join with a hollow dot separator ∘ (U+2218)
echo '<div class="folder-links">' . implode(' <span class="dot-separator">&#8728;</span> ', $links) . '</div>';
?>


<?php include 'templates/table.php'; ?>
<?php include 'templates/footer.php'; ?>
