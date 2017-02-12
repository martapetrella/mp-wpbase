<!-- INIZIO FOOTER -->

<x/xdxxixvx> <!-- fine box-->

      </section>
    </div> <!-- fine container -->
  </div> <!-- fine main-content -->



    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- copyright -->
            <p class="copyright">
              &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?> Marco Saracino e Marta Petrella
            </p>
            <!-- /copyright -->
          </div>
        </div>
      </div>
    </footer>


 <!-- jQuery e plugin JavaScript  -->
 <script src="http://code.jquery.com/jquery.js"></script>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/init.js"></script>
 <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bookmark.js"></script>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
