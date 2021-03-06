  <?php mh_before_footer(); ?>
  <footer class="mh-copyright-wrap">
  	<div class="mh-container mh-container-inner clearfix">
  		<p class="mh-copyright">Psiholjub &nbsp;Ψ<span class="narandzasta-slova srce">♥</span>&nbsp; Jer on zna odgovore na sva pitanja tvoje duše | <span class="float-right">Razvoj: <a href="http://skolakoda.org/">Škola koda</a></span></p>
  	</div>
  </footer>
  <?php mh_after_footer(); ?>
  <?php wp_footer(); ?>
  <noscript id="deferred-styles">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/includes/font-awesome.min.css'; ?>"/>
    <!--ink rel="stylesheet" type="text/css" href="wp-content/plugins/jetpack/css/jetpack.css"/-->
  </noscript>
  <script>
    function loadDeferredStyles() {
      var addStylesNode = document.getElementById("deferred-styles");
      var replacement = document.createElement("div");
      replacement.innerHTML = addStylesNode.textContent;
      document.body.appendChild(replacement)
      addStylesNode.parentElement.removeChild(addStylesNode);
    };
    var raf = requestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
  </script>
</body>
</html>
