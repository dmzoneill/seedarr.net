(function () {
  var loader = document.currentScript;
  if (!loader) {
    return;
  }
  var target = new URL(
    "../wp-content/themes/seedarr/assets/js/app.js",
    loader.src,
  );
  var script = document.createElement("script");
  script.src = target.href;
  script.async = false;
  loader.parentNode.insertBefore(script, loader.nextSibling);
})();
