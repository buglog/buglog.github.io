<article>
<?php
$baseDir = __DIR__ . '../../sites';
$baseUrl = '../../sites';

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

<div>
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
    <button class = "clear-btn" id="clear">clear</button>-->
</div>

</article>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const links = document.querySelectorAll('.folder-link');

    // Get list of clicked links from localStorage
    let clickedLinks = JSON.parse(localStorage.getItem('clickedLinks')) || [];

    // Apply `.clicked` class to all previously clicked links
    links.forEach(link => {
        if (clickedLinks.includes(link.href)) {
            link.classList.add('clicked');
        }
    });

    // Handle filter buttons
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Toggle active button state
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Apply `.filtered` class to matching links
            links.forEach(link => {
                link.classList.remove('filtered');

                if (link.dataset.type === filter) {
                    link.classList.add('filtered');
                }
            });
        });
    });

    // Track new clicks
    links.forEach(link => {
        link.addEventListener('click', function () {
            const href = this.href;
            if (!clickedLinks.includes(href)) {
                clickedLinks.push(href);
                localStorage.setItem('clickedLinks', JSON.stringify(clickedLinks));
            }
        });
    });
});
</script>

<div><button class = "clear-btn" id="clear">clear</button></div>

<script>
document.getElementById('clear').addEventListener('click', () => {
    localStorage.removeItem('clickedLinks');
    document.querySelectorAll('.folder-link.clicked').forEach(link => {
        link.classList.remove('clicked');
    });
});
</script>


