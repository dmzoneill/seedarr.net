<?php

/**
 * Footer template
 *
 * @package Seedarr
 */

require_once __DIR__ . '/inc/asset-uri.php';
?>
<?php get_template_part('template-parts/lightbox'); ?>

<!-- footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="footer-logo">
          <img class="f-icon" src="<?php echo seedarr_asset_uri('/assets/img/favicon.svg'); ?>" alt="">
          <img class="f-text" src="<?php echo seedarr_asset_uri('/assets/img/seedarr-text.svg'); ?>" alt="Seedarr">
        </div>
        <p class="footer-tagline">BitTorrent Seeding Simulator &mdash; the <em>*arr</em> way.</p>
        <div class="footer-links">
          <a href="https://github.com/dmzoneill/Seedarr" target="_blank" rel="noopener"><i class="fab fa-github"></i>
            GitHub</a>
          <a href="https://hub.docker.com/r/feeditout/seedarr" target="_blank" rel="noopener"><i
            class="fab fa-docker"></i> Docker Hub</a>
          <a href="https://ghcr.io/dmzoneill/seedarr" target="_blank" rel="noopener"><i class="fas fa-box"></i> GHCR</a>
          <a href="https://wiki.servarr.com/" target="_blank" rel="noopener"><i class="fas fa-book"></i> Wiki</a>
          <a href="https://github.com/dmzoneill/Seedarr/issues" target="_blank" rel="noopener"><i
            class="fas fa-bug"></i> Issues</a>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top:20px;">
        <p style="color:var(--text-dim);font-size:13px;margin-bottom:10px;">Part of the <em>*arr</em> ecosystem</p>
        <div class="arr-family">
          <a href="https://sonarr.tv/"    class="arr-link" target="_blank" rel="noopener">Sonarr</a>
          <a href="https://radarr.video/" class="arr-link" target="_blank" rel="noopener">Radarr</a>
          <a href="https://lidarr.audio/" class="arr-link" target="_blank" rel="noopener">Lidarr</a>
          <a href="https://readarr.com/"  class="arr-link" target="_blank" rel="noopener">Readarr</a>
          <a href="https://prowlarr.com/" class="arr-link" target="_blank" rel="noopener">Prowlarr</a>
        </div>
      </div>
    </div>
    <div class="footer-copy">
      <p>
        &copy; <?php echo date('Y'); ?> Seedarr &mdash; Released under the
        <a href="https://github.com/dmzoneill/Seedarr/blob/main/LICENSE" target="_blank" rel="noopener">Apache License
          2.0</a>.
        Built on the <a href="https://sonarr.tv/" target="_blank" rel="noopener">Sonarr</a>/<a
          href="https://radarr.video/" target="_blank" rel="noopener">Radarr</a> architecture.
      </p>
    </div>
  </div>
</footer>

<script>
fetch('https://api.github.com/repos/dmzoneill/Seedarr/releases/latest')
  .then(function(r) { return r.json(); })
  .then(function(d) {
    var el = document.getElementById('latest-version');
    if (el && d.tag_name) el.textContent = d.tag_name;
  })
  .catch(function() {
    var el = document.getElementById('latest-version');
    if (el) el.textContent = 'v1.0.23';
  });

// Google Analytics - Custom Engagement & Outbound Tracking
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gtag !== 'function') return;

  // Outbound link tracking
  document.querySelectorAll('a[href^="http"]').forEach(function(link) {
    if (!link.href.includes(window.location.hostname)) {
      link.addEventListener('click', function() {
        gtag('event', 'outbound_click', {
          link_url: link.href,
          link_text: (link.innerText || link.textContent || '').trim().slice(0, 100)
        });
      });
    }
  });

  // Code snippet copy tracking
  document.addEventListener('copy', function() {
    var selection = window.getSelection().toString();
    if (selection && selection.length > 5) {
      var snippetType = selection.includes('docker') ? 'docker' : selection.includes('podman') ? 'podman' :
        selection.includes('git') ? 'git' : 'other';
      gtag('event', 'code_copy', {
        snippet_type: snippetType,
        snippet_preview: selection.trim().slice(0, 80)
      });
    }
  });

  // Download section tab / button clicks
  document.querySelectorAll('#download a, .btn-primary, .btn-secondary, .btn-action').forEach(function(btn) {
    btn.addEventListener('click', function() {
      gtag('event', 'cta_click', {
        cta_text: (btn.innerText || btn.textContent || '').trim().slice(0, 50),
        cta_href: btn.getAttribute('href') || ''
      });
    });
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
