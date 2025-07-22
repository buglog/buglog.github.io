


<article>
<?php
$baseDir = __DIR__ . '../../pages';
$baseUrl = '../../pages';

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

<div class="filters">
    <button class="filter-btn" data-filter="video">video</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="sculpture">sculpture</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="image">image</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="writing">text</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="other">other</button>
    <!--<span class="dot-separator">•</span>
    <button class="clear-btn" data-filter="clear">clear</button>-->
</div>

</article>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const links = document.querySelectorAll('.folder-link');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Toggle button visual state
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Highlight matching links
            links.forEach(link => {
                link.classList.remove('highlight');
                if (link.dataset.type === filter) {
                    link.classList.add('highlight');
                }
            });
        });
    });
});
</script>
