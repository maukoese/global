
      </div>
    </div>
  </div>
  <ul class="outer-nav" style="color: blue;">
    <style type="text/css">
      a {
        color: blue;
      }
    </style>
    <li class=""><a class="" href="<?php echo get_option('home'); ?>"><span>Home</span></a></li>
    <li class=""><a class="" href="<?php echo get_option('home'); ?>/portfolio"><span>Works</span></a></li>
    <li class=""><a class="" href="<?php echo get_option('home'); ?>/about"><span>About</span></a></li>
    <li class=""><a class="" href="<?php echo get_option('home'); ?>/find"><span>Find Me</span></a></li>
    <li class=""><a class="" href="<?php echo get_option('home'); ?>/contact"><span>Hire me</span></a></li>
</ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo ( get_template_directory_uri() ); ?>/assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<?php wp_footer(); ?>
</body>
</html>