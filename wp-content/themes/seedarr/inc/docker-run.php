<?php

declare(strict_types=1);

/**
 * Shared docker run snippet for the download section.
 *
 * @package Seedarr
 */

/**
 * Print one docker run example. Both registries share every flag except the image.
 */
function seedarr_render_docker_run(string $label, string $image): void
{
    echo '        <p><strong style="color:var(--text-secondary)">'
        . $label
        . "</strong></p>\n";
    echo "        <pre><code class=\"language-bash\">docker run -d \\\n";
    echo "  --name seedarr \\\n";
    echo "  -p 9898:9898 \\\n";
    echo "  -v seedarr-config:/config \\\n";
    echo "  -v seedarr-data:/data \\\n";
    echo "  --restart unless-stopped \\\n";
    echo '  ' . $image . "</code></pre>\n";
}
