


<article>
<?php
$baseDir = __DIR__ . '../../p';
$baseUrl = '../../p';

$subfolders = array_filter(glob($baseDir . '/*'), 'is_dir');

$links = [];

foreach ($subfolders as $folderPath) {
    $folderName = basename($folderPath);

    $phpFiles = glob("$folderPath/*.php");
    $htmlFiles = glob("$folderPath/*.html");

    $files = array_merge($phpFiles, $htmlFiles);

    if (!empty($files)) {
        $firstFilePath = $files[0];
        $firstFileName = basename($firstFilePath);
        $link = "$baseUrl/$folderName/$firstFileName";

        $fileContents = file_get_contents($firstFilePath);

        $type = 'default';
        if (preg_match('/<meta\s+name=["\']type["\']\s+content=["\']([^"\']+)["\']\s*\/?>/i', $fileContents, $matches)) {
            $type = strtolower($matches[1]);
        }

        $links[] = "<a href=\"$link\" class=\"folder-link\" data-type=\"$type\">$folderName</a>";
    }
}

?>

<!-- Render the filter buttons -->
<div class="filters">
    <button class="filter-btn" data-filter="video">Video</button>
    <button class="filter-btn" data-filter="sculpture">Sculpture</button>
    <button class="filter-btn" data-filter="image">Image</button>
    <button class="filter-btn" data-filter="writing">Writing</button>
    <button class="filter-btn" data-filter="clear">Clear</button>
</div>

<!-- Render the folder links -->
<div class="folder-links">
    <?php
    if (!empty($links)) {
        echo implode(' <span class="dot-separator">•</span> ', $links);
    } else {
        echo '<h3>No folders with .php or .html files found.</h3>';
    }
    ?>
</div>

</article>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const links = document.querySelectorAll('.folder-link');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            links.forEach(link => {
                // Remove all previous highlight-type classes
                link.classList.remove(
                    'highlight-video',
                    'highlight-writing',
                    'highlight-image',
                    'highlight-sculpture'
                );

                if (filter === 'clear') return;

                if (link.dataset.type === filter) {
                    link.classList.add(`highlight-${filter}`);
                }
            });
        });
    });
});
</script>

