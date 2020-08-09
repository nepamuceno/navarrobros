
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;
       <?php
        echo date_i18n(
         /* translators: Copyright date format, see https://www.php.net/date */
         _x( 'Y', 'copyright date format', 'twentytwenty' )
        );
       ?>
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
       <?php bloginfo( 'name' ); ?></a>
      </p><!-- .footer-copyright -->
    </p>
   </div>
  </footer>

  <?php wp_footer(); ?>

 </body>

</html>
