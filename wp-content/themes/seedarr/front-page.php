<?php
/**
 * Template Name: Landing Page
 * Front Page template
 *
 * @package Seedarr
 */

get_header();
?>

<section id="hero">
  <div class="container text-center">

    <img class="hero-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/seedarr-skull.svg" alt="Seedarr">
    <img class="hero-wordmark" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/seedarr-text.svg" alt="Seedarr">
    <p class="hero-tagline">The <em>*arr</em> approach to BitTorrent seeding &mdash; maintain your ratio, automatically.</p>

    <div class="hero-pills">
      <span class="hero-pill"><i class="fas fa-tachometer-alt"></i> Real-time Dashboard</span>
      <span class="hero-pill"><i class="fas fa-link"></i> Sonarr &amp; Radarr Integration</span>
      <span class="hero-pill"><i class="fas fa-shield-alt"></i> MSE/PE Encryption</span>
      <span class="hero-pill"><i class="fas fa-network-wired"></i> DHT + PEX</span>
      <span class="hero-pill"><i class="fab fa-docker"></i> Docker Ready</span>
    </div>

    <div class="hero-cta">
      <a href="#download" class="btn btn-seedarr"><i class="fas fa-download"></i> Download</a>
      <a href="https://github.com/dmzoneill/Seedarr" target="_blank" rel="noopener" class="btn btn-seedarr-outline"><i class="fab fa-github"></i> View on GitHub</a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════ STATS ═══════════════════════════════ -->
<section id="stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-value">.NET 10</div>
        <div class="stat-label">Runtime</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">React 19</div>
        <div class="stat-label">Frontend</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">9898</div>
        <div class="stat-label">Default Port</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">10+</div>
        <div class="stat-label">BEP Extensions</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">3</div>
        <div class="stat-label">Client Profiles</div>
      </div>
      <div class="stat-item">
        <div class="stat-value" id="latest-version">...</div>
        <div class="stat-label">Latest Version</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ SCREENSHOTS ═══════════════════════════════ -->
<section id="screenshots">
  <div class="container">
    <div class="section-header">
      <h2>See it in <span>Action</span></h2>
      <div class="divider"></div>
    </div>

    <div id="screenshotCarousel" class="carousel slide seedarr-carousel" data-ride="carousel" data-interval="4000">

      <!-- Indicators -->
      <ol class="carousel-indicators seedarr-indicators">
        <li data-target="#screenshotCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#screenshotCarousel" data-slide-to="1"></li>
        <li data-target="#screenshotCarousel" data-slide-to="2"></li>
        <li data-target="#screenshotCarousel" data-slide-to="3"></li>
        <li data-target="#screenshotCarousel" data-slide-to="4"></li>
        <li data-target="#screenshotCarousel" data-slide-to="5"></li>
        <li data-target="#screenshotCarousel" data-slide-to="6"></li>
        <li data-target="#screenshotCarousel" data-slide-to="7"></li>
        <li data-target="#screenshotCarousel" data-slide-to="8"></li>
      </ol>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-1.png" alt="Seedarr Dashboard" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-1.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-2.png" alt="Seedarr Torrents" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-2.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-3.png" alt="Seedarr Activity" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-3.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-4.png" alt="Seedarr Tracker" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-4.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-5.png" alt="Seedarr Peer Map" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-5.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-6.png" alt="Seedarr Schedule" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-6.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-7.png" alt="Seedarr Statistics" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-7.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-8.png" alt="Seedarr Settings" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-8.png" class="carousel-img">
        </div>
        <div class="item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slides/screen-9.png" alt="Seedarr System" data-full="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/screen-9.png" class="carousel-img">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control seedarr-control" href="#screenshotCarousel" data-slide="prev">
        <i class="fas fa-chevron-left"></i>
      </a>
      <a class="right carousel-control seedarr-control" href="#screenshotCarousel" data-slide="next">
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>

    <p class="carousel-hint"><i class="fas fa-expand-alt"></i> Click any screenshot to view full size</p>
  </div>
</section>

<!-- Lightbox -->
<div id="lightboxOverlay" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.92);z-index:99999;cursor:zoom-out;text-align:center;">
  <button id="lightboxClose" style="position:fixed;top:16px;right:20px;background:#2a2620;border:1px solid #3a352e;color:#b0a48e;font-size:22px;width:34px;height:34px;border-radius:4px;cursor:pointer;line-height:1;">&times;</button>
  <img id="lightboxImg" src="" alt="" style="max-width:92%;max-height:90vh;margin-top:4vh;border-radius:4px;cursor:default;box-shadow:0 8px 48px rgba(0,0,0,0.7);">
</div>

<!-- ═══════════════════════════════ FEATURES ═══════════════════════════════ -->
<section id="features">
  <div class="container">

    <div class="section-header">
      <h2>Features</h2>
      <div class="divider"></div>
      <p>Everything you need to keep your torrents seeding — beautifully, automatically, and without moving a single byte of real data.</p>
    </div>

    <!-- Feature 1: Dashboard -->
    <div class="feature-row">
      <div class="feature-visual">
        <div class="mock-dashboard">
          <div class="mock-titlebar">
            <span class="mock-dot red"></span>
            <span class="mock-dot yellow"></span>
            <span class="mock-dot green"></span>
            <span class="mock-url">localhost:9898 &mdash; Seedarr</span>
          </div>
          <div class="mock-body">
            <div class="mock-row">
              <span class="mock-name">Ubuntu.24.04.LTS.iso</span>
              <span class="mock-badge seeding">Seeding</span>
              <span class="mock-speed">&#8593; 4.2 MB/s</span>
            </div>
            <div class="mock-row">
              <span class="mock-name">Debian.12.Bookworm.x86_64</span>
              <span class="mock-badge seeding">Seeding</span>
              <span class="mock-speed">&#8593; 1.8 MB/s</span>
            </div>
            <div class="mock-row">
              <span class="mock-name">ArchLinux.2026.01.iso</span>
              <span class="mock-badge paused">Paused</span>
              <span class="mock-speed" style="color:var(--text-dim)">&#8213; 0 B/s</span>
            </div>
            <div class="mock-row">
              <span class="mock-name">Fedora.40.Workstation.x86_64</span>
              <span class="mock-badge seeding">Seeding</span>
              <span class="mock-speed">&#8593; 890 KB/s</span>
            </div>
            <div class="mock-bar"><div class="mock-bar-fill" style="width:72%"></div></div>
          </div>
        </div>
      </div>
      <div class="feature-info">
        <h3><i class="fas fa-tachometer-alt"></i> Real-time Dashboard</h3>
        <p>Monitor all your seeding torrents at a glance. Speed graphs, peer counts, tracker status, and ratio progress update live via SignalR — no page refresh needed.</p>
        <ul class="feature-list">
          <li><i class="fas fa-chevron-right"></i> Table and grid torrent views</li>
          <li><i class="fas fa-chevron-right"></i> Per-torrent upload speed graphs</li>
          <li><i class="fas fa-chevron-right"></i> Peer list with connection details</li>
          <li><i class="fas fa-chevron-right"></i> Drag-and-drop torrent upload</li>
          <li><i class="fas fa-chevron-right"></i> Dark / light theme with system detection</li>
          <li><i class="fas fa-chevron-right"></i> Responsive — desktop, tablet, mobile</li>
        </ul>
      </div>
    </div>

    <!-- Feature 2: Protocol Support -->
    <div class="feature-row reverse">
      <div class="feature-visual">
        <div style="width:100%">
          <div style="font-size:10px;color:var(--text-dim);margin-bottom:10px;text-transform:uppercase;letter-spacing:1px;">Protocol Stack</div>
          <div class="mock-protocols">
            <div class="mock-proto">
              <div class="mock-proto-name">HTTP Tracker</div>
              <div class="mock-proto-status">&#9679; BEP 3 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">UDP Tracker</div>
              <div class="mock-proto-status">&#9679; BEP 15 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">DHT</div>
              <div class="mock-proto-status">&#9679; BEP 5 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">Peer Exchange</div>
              <div class="mock-proto-status">&#9679; BEP 11 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">MSE/PE Encryption</div>
              <div class="mock-proto-status">&#9679; RC4 + DH &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">uTP Transport</div>
              <div class="mock-proto-status">&#9679; BEP 29 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">Fast Extension</div>
              <div class="mock-proto-status">&#9679; BEP 6 &mdash; Active</div>
            </div>
            <div class="mock-proto">
              <div class="mock-proto-name">Local Peer Disc.</div>
              <div class="mock-proto-status warn">&#9679; BEP 14 &mdash; LAN</div>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-info">
        <h3><i class="fas fa-network-wired"></i> Full Protocol Support</h3>
        <p>Seedarr speaks the full BitTorrent dialect. Peer connections, tracker announces, encryption, DHT — every extension needed to look and behave exactly like a real client.</p>
        <ul class="feature-list">
          <li><i class="fas fa-chevron-right"></i> HTTP &amp; UDP tracker announce/scrape (BEP 3, BEP 15)</li>
          <li><i class="fas fa-chevron-right"></i> Multi-tracker failover with tier support (BEP 12)</li>
          <li><i class="fas fa-chevron-right"></i> TCP peer connections with full handshake</li>
          <li><i class="fas fa-chevron-right"></i> MSE/PE stream encryption — RC4 + DH key exchange</li>
          <li><i class="fas fa-chevron-right"></i> DHT distributed hash table (BEP 5)</li>
          <li><i class="fas fa-chevron-right"></i> Metadata Exchange + Fast Extension (BEP 9, BEP 6)</li>
        </ul>
      </div>
    </div>

    <!-- Feature 3: Client Profiles -->
    <div class="feature-row">
      <div class="feature-visual">
        <div style="width:100%">
          <div style="font-size:10px;color:var(--text-dim);margin-bottom:10px;text-transform:uppercase;letter-spacing:1px;">Active Client Profile</div>
          <div style="background:var(--bg-dark);border:1px solid var(--border);border-radius:5px;padding:18px;">
            <div style="display:flex;gap:12px;margin-bottom:14px;">
              <div style="flex:1;text-align:center;padding:12px 8px;border:1px solid var(--accent-border);border-radius:4px;background:var(--accent-subtle);">
                <div style="font-size:11px;color:var(--accent);font-weight:700;">qBittorrent</div>
                <div style="font-size:10px;color:var(--text-dim);margin-top:3px;">-qB4420-</div>
              </div>
              <div style="flex:1;text-align:center;padding:12px 8px;border:1px solid var(--border);border-radius:4px;">
                <div style="font-size:11px;color:var(--text-muted);">Deluge</div>
                <div style="font-size:10px;color:var(--text-dim);margin-top:3px;">-DE2030-</div>
              </div>
              <div style="flex:1;text-align:center;padding:12px 8px;border:1px solid var(--border);border-radius:4px;">
                <div style="font-size:11px;color:var(--text-muted);">Transmission</div>
                <div style="font-size:10px;color:var(--text-dim);margin-top:3px;">-TR3000-</div>
              </div>
            </div>
            <div style="font-size:10px;color:var(--text-dim);margin-bottom:7px;text-transform:uppercase;letter-spacing:1px;">Speed Distribution</div>
            <div style="display:flex;gap:7px;flex-wrap:wrap;">
              <span style="font-size:11px;padding:3px 10px;border-radius:10px;background:var(--accent-bg);color:var(--accent);">Pareto 80/20</span>
              <span style="font-size:11px;padding:3px 10px;border-radius:10px;border:1px solid var(--border);color:var(--text-muted);">Power Law</span>
              <span style="font-size:11px;padding:3px 10px;border-radius:10px;border:1px solid var(--border);color:var(--text-muted);">Log-Normal</span>
              <span style="font-size:11px;padding:3px 10px;border-radius:10px;border:1px solid var(--border);color:var(--text-muted);">Equal</span>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-info">
        <h3><i class="fas fa-user-secret"></i> Client Profiles</h3>
        <p>Seedarr impersonates real BitTorrent clients, generating authentic peer IDs, user agents, and handshake behavior. Trackers see exactly what they expect to see.</p>
        <ul class="feature-list">
          <li><i class="fas fa-chevron-right"></i> qBittorrent, Deluge, Transmission profiles</li>
          <li><i class="fas fa-chevron-right"></i> Authentic peer ID generation per client</li>
          <li><i class="fas fa-chevron-right"></i> Configurable upload speed simulation</li>
          <li><i class="fas fa-chevron-right"></i> Multiple speed distribution algorithms</li>
          <li><i class="fas fa-chevron-right"></i> Time-of-day scheduling with day-of-week support</li>
          <li><i class="fas fa-chevron-right"></i> Burst/idle traffic pattern simulation</li>
        </ul>
      </div>
    </div>

    <!-- Feature grid -->
    <div class="feature-grid">
      <div class="feature-card">
        <i class="fas fa-calendar-alt"></i>
        <h4>Speed Scheduling</h4>
        <p>Define upload speed profiles by time of day and day of week. Max bandwidth at night, throttle during work hours.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-bell"></i>
        <h4>Notifications</h4>
        <p>Webhook, email, and Discord alerts when torrents change state, trackers go down, or health checks fail.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-heartbeat"></i>
        <h4>Health Monitoring</h4>
        <p>Built-in system health checks surface tracker issues, configuration problems, and connectivity errors.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-code"></i>
        <h4>REST API</h4>
        <p>Full API at <code>/api/v1/</code> with interactive Swagger docs at <code>/swagger</code>. Automate everything.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-tag"></i>
        <h4>Tag Organisation</h4>
        <p>Group torrents with tags for bulk speed profile assignment, filtering, and management.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-database"></i>
        <h4>SQLite + PostgreSQL</h4>
        <p>Lightweight SQLite by default; switch to PostgreSQL for multi-instance or high-volume deployments.</p>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════ INTEGRATION ═══════════════════════════════ -->
<section id="integration">
  <div class="container">
    <div class="section-header">
      <h2>*arr <span>Integration</span></h2>
      <div class="divider"></div>
      <p>Connect to your existing Sonarr and Radarr instances. Seedarr syncs your download history and automatically begins simulating seeds.</p>
    </div>
    <div class="integration-cards">
      <div class="int-card">
        <i class="fas fa-tv"></i>
        <h4>Sonarr</h4>
        <p>Auto-seed TV series downloads</p>
      </div>
      <div class="int-card">
        <i class="fas fa-film"></i>
        <h4>Radarr</h4>
        <p>Auto-seed movie downloads</p>
      </div>
      <div class="int-card">
        <i class="fas fa-music"></i>
        <h4>Lidarr</h4>
        <p>Auto-seed music downloads</p>
      </div>
      <div class="int-card">
        <i class="fas fa-book"></i>
        <h4>Readarr</h4>
        <p>Auto-seed book downloads</p>
      </div>
    </div>
    <div style="margin-top:36px;background:var(--bg-primary);border:1px solid var(--border);border-radius:6px;padding:26px;">
      <h4 style="color:var(--text-primary);font-weight:300;margin-bottom:10px;"><i class="fas fa-plug" style="color:var(--accent);margin-right:8px;"></i>Setup in 3 steps</h4>
      <ol style="color:var(--text-muted);margin:0;padding-left:20px;line-height:2.2;">
        <li>Go to <strong style="color:var(--text-secondary)">Settings &gt; Arr Connections</strong> in Seedarr</li>
        <li>Add your Sonarr/Radarr URL and API key</li>
        <li>Seedarr periodically syncs and begins simulating seeds for your download history</li>
      </ol>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ DOWNLOAD ═══════════════════════════════ -->
<section id="download">
  <div class="container">
    <div class="section-header">
      <h2>Download</h2>
      <div class="divider"></div>
      <p>Seedarr runs on any platform that supports .NET 10. Docker is the recommended deployment.</p>
    </div>

    <ul class="nav nav-tabs" id="downloadTabs" role="tablist">
      <li class="active"><a href="#tab-docker"  data-toggle="tab"><i class="fab fa-docker"></i> Docker</a></li>
      <li><a href="#tab-linux"   data-toggle="tab"><i class="fab fa-linux"></i> Linux</a></li>
      <li><a href="#tab-macos"   data-toggle="tab"><i class="fab fa-apple"></i> macOS</a></li>
      <li><a href="#tab-windows" data-toggle="tab"><i class="fab fa-windows"></i> Windows</a></li>
      <li><a href="#tab-nas"     data-toggle="tab"><i class="fas fa-hdd"></i> NAS</a></li>
      <li><a href="#tab-source"  data-toggle="tab"><i class="fas fa-code"></i> Source</a></li>
    </ul>

    <div class="tab-content">

      <div class="tab-pane active" id="tab-docker">
        <h4>Container Run (Podman / Docker)</h4>
        <p>The easiest way to run Seedarr. The official image is published to Docker Hub and GitHub Container Registry (GHCR).</p>
        <p><strong style="color:var(--text-secondary)">Option 1: Docker Hub</strong></p>
        <pre><code class="language-bash">docker run -d \
  --name seedarr \
  -p 9898:9898 \
  -v seedarr-config:/config \
  -v seedarr-data:/data \
  --restart unless-stopped \
  feeditout/seedarr:latest</code></pre>
        <p><strong style="color:var(--text-secondary)">Option 2: GitHub Container Registry (GHCR)</strong></p>
        <pre><code class="language-bash">docker run -d \
  --name seedarr \
  -p 9898:9898 \
  -v seedarr-config:/config \
  -v seedarr-data:/data \
  --restart unless-stopped \
  ghcr.io/dmzoneill/seedarr:latest</code></pre>
        <p>Then open <strong style="color:var(--text-primary)">http://localhost:9898</strong></p>
        <h4>Docker Compose / Podman Compose</h4>
        <pre><code class="language-yaml">services:
  seedarr:
    # Option 1 (Docker Hub):
    image: feeditout/seedarr:latest
    # Option 2 (GHCR):
    # image: ghcr.io/dmzoneill/seedarr:latest
    container_name: seedarr
    ports:
      - "9898:9898"
    volumes:
      - seedarr-config:/config
      - seedarr-data:/data
    restart: unless-stopped
    environment:
      - TZ=UTC
    healthcheck:
      test: ["CMD", "curl", "-f", "http://localhost:9898/api/v1/system/status"]
      interval: 30s
      timeout: 10s
      retries: 3
      start_period: 30s

volumes:
  seedarr-config:
  seedarr-data:</code></pre>
        <pre><code class="language-bash">docker compose up -d
# or
podman-compose up -d</code></pre>
        <div class="download-note">
          <strong style="color:var(--text-secondary)">Volumes:</strong> <code>/config</code> stores the database, settings, and logs. <code>/data</code> holds torrent files and the watch folder.
        </div>
      </div>

      <div class="tab-pane" id="tab-linux">
        <h4>Linux</h4>
        <p>Seedarr requires .NET 10 runtime. Use the generic tar.gz for manual installation on any Linux distribution.</p>
        <div style="margin-bottom:18px;">
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Linux x64</a>
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Linux arm64</a>
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Linux arm</a>
        </div>
        <ol>
          <li>Download the appropriate archive for your architecture.</li>
          <li>Extract and move to a suitable directory (e.g. <code>/opt/seedarr</code>).</li>
          <li>Run <code>./Seedarr</code> or create a systemd unit file for autostart.</li>
          <li>Browse to <strong style="color:var(--text-primary)">http://localhost:9898</strong></li>
        </ol>
        <div class="download-note">For production use on Linux, Docker is strongly recommended for isolation and easy updates.</div>
      </div>

      <div class="tab-pane" id="tab-macos">
        <h4>macOS</h4>
        <p>Seedarr supports macOS on both Intel and Apple Silicon (arm64).</p>
        <div style="margin-bottom:18px;">
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Intel (x64)</a>
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Apple Silicon (arm64)</a>
        </div>
        <ol>
          <li>Download the macOS archive for your CPU.</li>
          <li>Extract and move <code>Seedarr.app</code> to your Applications folder.</li>
          <li>Self-sign if needed: <code>codesign --force --deep -s - /Applications/Seedarr.app</code></li>
          <li>Open Seedarr.app and browse to <strong style="color:var(--text-primary)">http://localhost:9898</strong></li>
        </ol>
      </div>

      <div class="tab-pane" id="tab-windows">
        <h4>Windows</h4>
        <p>Seedarr can run as a Windows Service or System Tray Application. Supports Windows 10 / Server 2019 or later.</p>
        <div style="margin-bottom:18px;">
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Windows x64 Installer</a>
          <a href="https://github.com/dmzoneill/Seedarr/releases/latest" class="download-btn" target="_blank" rel="noopener"><i class="fas fa-download"></i> Windows x86 Installer</a>
        </div>
        <ol>
          <li>Download and execute the installer.</li>
          <li>Choose between Windows Service (always running) or System Tray Application (runs when logged in).</li>
          <li>Browse to <strong style="color:var(--text-primary)">http://localhost:9898</strong></li>
        </ol>
        <div class="download-note">Windows Service accounts do not have access to network drives by default. If your config is on a mapped drive, use the System Tray installation instead.</div>
      </div>

      <div class="tab-pane" id="tab-nas">
        <h4>NAS Devices</h4>
        <p>Seedarr runs on most NAS devices via Docker. Synology, QNAP, Unraid, and TrueNAS are all supported.</p>
        <h4>Synology</h4>
        <ol>
          <li>Install Container Manager from the Package Center.</li>
          <li>Pull <code>feeditout/seedarr:latest</code> from Docker Hub, or <code>ghcr.io/dmzoneill/seedarr:latest</code> from GHCR.</li>
          <li>Configure port <code>9898</code> and map volumes for <code>/config</code> and <code>/data</code>.</li>
          <li>Browse to <strong style="color:var(--text-primary)">http://&lt;NAS-IP&gt;:9898</strong></li>
        </ol>
        <h4>Unraid</h4>
        <ol>
          <li>Open the Community Applications plugin.</li>
          <li>Search for <strong style="color:var(--text-secondary)">Seedarr</strong>.</li>
          <li>Click Install and follow the prompts.</li>
        </ol>
        <h4>TrueNAS SCALE</h4>
        <ol>
          <li>Use the built-in Docker support or install via TrueCharts catalog.</li>
          <li>Set the app data path to a dataset on your pool.</li>
        </ol>
      </div>

      <div class="tab-pane" id="tab-source">
        <h4>Build from Source</h4>
        <p>Requirements: .NET 10 SDK, Node.js 24+, npm.</p>
        <pre><code class="language-bash">git clone https://github.com/dmzoneill/Seedarr.git
cd Seedarr

# Backend
dotnet run --project src/NzbDrone.Console/Seedarr.Console.csproj

# Frontend (hot reload dev server)
cd src/Seedarr.Frontend
npm install
npm start</code></pre>
        <h4>Makefile targets</h4>
        <pre><code class="language-bash">make setup          # Restore .NET + npm dependencies
make build          # Build release
make test           # Run unit tests
make publish        # Publish release artifacts
make frontend       # Build production frontend bundle</code></pre>
        <div class="download-note">The frontend dev server proxies API calls to the backend on port <code>9898</code>. Both must be running simultaneously during development.</div>
      </div>

    </div>
  </div>
</section>

<?php
get_footer();
