<article>
    <!-- Content area to inject page HTML -->
  <div id="page-content"></div>
  <div class="folder-links" id="folder-links">
    <!-- Links will be injected here -->
  </div>

  <div>
    <button class="filter-btn" data-filter="video">video</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="sculpture">sculpture</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="image">image</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="text">text</button>
    <span class="dot-separator">•</span>
    <button class="filter-btn" data-filter="other">other</button>
  </div>

  <div><button class="clear-btn" id="clear">clear</button></div>  
</article>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const folderLinksContainer = document.getElementById('folder-links');
  const contentContainer = document.getElementById('page-content');
  const buttons = document.querySelectorAll('.filter-btn');
  let clickedLinks = JSON.parse(localStorage.getItem('clickedLinks')) || [];

  fetch('../../sites/sites.json')
    .then(response => response.json())
    .then(data => {
      if (!Array.isArray(data) || data.length === 0) {
        folderLinksContainer.innerHTML = '<h3>No folder entries found.</h3>';
        return;
      }

      const links = data.map(item => {
        const url = `../../sites/${item.name}/${item.file}`;
        const type = item.type || 'default';
        const isClicked = clickedLinks.includes(url);

        return `<span class="folder-link${isClicked ? ' clicked' : ''}" data-url="${url}" data-type="${type}">${item.name}</span>`;
      });

      folderLinksContainer.innerHTML = links.join(' <span class="dot-separator">•</span> ');
      addClickHandlers();
    });

  function addClickHandlers() {
    const links = document.querySelectorAll('.folder-link');

    // Track clicks and load content
    links.forEach(link => {
      link.addEventListener('click', function () {
        const url = this.dataset.url;

        if (!clickedLinks.includes(url)) {
          clickedLinks.push(url);
          localStorage.setItem('clickedLinks', JSON.stringify(clickedLinks));
        }

        this.classList.add('clicked');

        fetch(url)
          .then(response => response.text())
          .then(html => {
            contentContainer.innerHTML = html;
          })
          .catch(err => {
            contentContainer.innerHTML = `<p>Error loading content from ${url}</p>`;
          });
      });
    });

    // Filter buttons
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const filter = button.getAttribute('data-filter');
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        links.forEach(link => {
          link.classList.remove('filtered');
          if (link.dataset.type === filter) {
            link.classList.add('filtered');
          }
        });
      });
    });
  }

  // Clear clicked links
  document.getElementById('clear').addEventListener('click', () => {
    localStorage.removeItem('clickedLinks');
    document.querySelectorAll('.folder-link.clicked').forEach(link => {
      link.classList.remove('clicked');
    });
    contentContainer.innerHTML = '';
  });
});

</script>