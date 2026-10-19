<?php

declare(strict_types=1);

/**
 * Theme asset URL helper.
 *
 * @package Seedarr
 */

/**
 * Escape a theme asset URL the same way the templates did inline.
 */
function seedarr_asset_uri(string $path): string
{
    return esc_url(get_template_directory_uri()) . $path;
}
