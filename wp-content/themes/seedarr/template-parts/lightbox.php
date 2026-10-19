<?php

/**
 * Screenshot lightbox overlay.
 *
 * Included from the landing page and the footer so every view has the same control.
 *
 * @package Seedarr
 */

?>
<!-- Lightbox -->
<div id="lightboxOverlay"
  style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.92);z-index:99999;
    cursor:zoom-out;text-align:center;">
  <button id="lightboxClose"
    style="position:fixed;top:16px;right:20px;background:#2a2620;border:1px solid #3a352e;color:#b0a48e;font-size:22px;
      width:34px;height:34px;border-radius:4px;cursor:pointer;line-height:1;">&times;</button>
  <img id="lightboxImg" src="" alt=""
    style="max-width:92%;max-height:90vh;margin-top:4vh;border-radius:4px;cursor:default;
      box-shadow:0 8px 48px rgba(0,0,0,0.7);">
</div>
