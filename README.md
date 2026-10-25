# seedarr.net

WordPress site for seedarr.net. Seedarr is a BitTorrent seeding simulator. The
custom theme describes itself as a BitTorrent seeding simulator theme based on
the official Seedarr design. The application is not in this repository; the
theme links to
[github.com/dmzoneill/Seedarr](https://github.com/dmzoneill/Seedarr).

`CNAME` contains `seedarr.net`. The site version recorded in `version` is
`1.0.38`. WordPress core in this tree is 7.1.1 (`wp-includes/version.php`).

## Layout

The repository is a WordPress installation plus a static HTML copy of the same
landing page.

- `index.php` is the front controller. It sets `WP_USE_THEMES` and loads
  `wp-blog-header.php`.
- `wp-admin/` and `wp-includes/` are WordPress core. `wp-includes/version.php`
  requires PHP 7.4, the `json` and `hash` extensions, and MySQL 5.5.5.
- `wp-content/themes/seedarr/` is the Seedarr theme (theme header version 1.0.0,
  requires WordPress 6.0 and PHP 7.4). `front-page.php` is the landing page:
  hero, stats, a screenshot carousel, feature copy, \*arr integration, and
  download instructions for the Seedarr application. `index.php`, `page.php`,
  and `single.php` cover the blog index, pages, and single posts.
- `wp-content/themes/twentytwentythree/`, `twentytwentyfour/`, and
  `twentytwentyfive/` are the default themes shipped with WordPress.
- `wp-content/plugins/akismet/` is the Akismet plugin shipped with WordPress.
  The Seedarr theme also attaches the Yoast SEO filters `wpseo_opengraph_image`
  and `wpseo_twitter_image`. That plugin is not in this tree.
- `img/`, `js/`, `vendor/`, `favicon.ico`, and `index.html.original` are a
  static HTML version of the landing page. `index.html.original` loads CSS and
  JavaScript from `vendor/` and `js/app.js`. `js/app.js` injects
  `wp-content/themes/seedarr/assets/js/app.js`. There is no `index.html`;
  requests are handled by `index.php`.
- `wp-config.php` is listed in `.gitignore` and is not in the repository.
  `wp-content/uploads/` is ignored as well. On `init`, the theme copies
  `assets/img/og-image.png` into the uploads directory when that copy is missing
  or differs.

Theme PHP:

| Path                       | Role                                                                                                            |
| -------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `functions.php`            | Theme supports, the `primary` nav menu, enqueued assets, the Open Graph image copy, and the Yoast image filters |
| `inc/asset-uri.php`        | `seedarr_asset_uri()`                                                                                           |
| `inc/docker-run.php`       | `seedarr_render_docker_run()`, used by the download section                                                     |
| `header.php`, `footer.php` | Document shell, navigation, footer links, and a request for the latest `dmzoneill/Seedarr` release tag          |
| `template-parts/`          | Singular content, post meta, and the screenshot lightbox                                                        |

`functions.php` enqueues Bootstrap 3.4.1, Font Awesome 6.0.0, and highlight.js
11.0.0 from `wp-content/themes/seedarr/assets/`, plus the theme style sheet and
`assets/js/app.js`. Those scripts depend on WordPress's bundled jQuery. The same
minified libraries are also stored under `vendor/` for the static page, which
loads `vendor/js/jquery.min.js` directly. `assets/js/app.js` handles in-page
scrolling, the active nav item, syntax highlighting, and the screenshot
lightbox. `header.php` includes a Google tag; the measurement ID is in that file
and is not repeated here.

## Running

This repository has no Dockerfile, Compose file, Makefile, or install script,
and it does not contain `wp-config.php` or database credentials. WordPress reads
that file at startup (`wp-load.php`); it has to be created outside version
control.

The versions above are the requirements recorded in code: PHP 7.4 or newer with
`json` and `hash`, and MySQL 5.5.5 or newer. Serve the repository root with a
PHP-capable web server so `index.php` can load WordPress. The Seedarr theme has
no build step; its CSS and JavaScript are already in the theme.

`wp-content/themes/twentytwentyfive/package.json` defines `build` and `watch`
scripts that minify that theme's `style.css` with PostCSS and cssnano (Node
`>=20.10.0`, npm `>=10.2.3`). That package belongs to the bundled Twenty
Twenty-Five theme, not the Seedarr theme.

How the live site is hosted is not described in this repository.
`.github/workflows/main.yml` runs on pushes and pull requests to `main`, and on
a `repository_dispatch` of type `refresh`. It calls the reusable workflow
`dmzoneill/dmzoneill/.github/workflows/dispatch.yaml` at `main` with `basic` set
to `"true"` and `VALIDATE_CSS` set to `"false"`.

## Automation

- `.github/workflows/ai-responder.yml` runs when an issue or pull request is
  opened (skipped for `dependabot[bot]`) and can be started with
  `workflow_dispatch`. It downloads `ai-responder.py` from
  `dmzoneill/dmzoneill`. Credentials come from repository secrets and are not
  stored in the tree.
- `.github/dependabot.yml` opens weekly grouped updates for GitHub Actions, the
  Twenty Twenty-Five npm dependencies, and the Composer dependencies of
  `wp-includes/sodium_compat`.
- `.github/linters/phpstan.neon` (level 5) and `.github/linters/psalm.xml` both
  load `wordpress-stubs.phpstub`. `.ignore` lists paths for jscpd to skip,
  including WordPress core and the vendored CSS and JavaScript.

## License

[`LICENSE`](LICENSE) is the Apache License, Version 2.0. The Seedarr theme
header states the same license. Bundled WordPress components declare their own
terms. The Twenty Twenty-Three, Twenty Twenty-Four, and Twenty Twenty-Five theme
headers, and Akismet (`akismet.php`), use the GNU General Public License v2 or
later.
