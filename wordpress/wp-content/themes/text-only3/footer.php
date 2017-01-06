<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer--middle-section">
    <div class="mdl-mega-footer--drop-down-section">
    <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
    <h1 class="mdl-mega-footer--heading">Páginas</h1>
      <ul class="mdl-mega-footer--link-list">
        <li><a href="#"><?php wp_list_pages( array( 'title_li' => '' ) ); ?></a></li>
      </ul>
    </div>
      
    
  </div>
  <div class="mdl-mega-footer--bottom-section">
    <div class="mdl-logo">
      More Information
    </div>
    <ul class="mdl-mega-footer--link-list">
      <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy and Terms</a></li>
    </ul>
  </div>
</footer>
</main>
</div>
<!-- <a href="https://github.com/google/material-design-lite/blob/master/templates/text-only/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a> -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/material.min.js"></script>
</body>
</html>
