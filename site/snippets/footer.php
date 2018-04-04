  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
      </p>
    
    </div>
  </footer>


  <!-- jquery Core-->
  <script src="assets/js/jquery-2.1.4.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Theme Menu -->
  <script src="assets/js/mobile-menu.js"></script>

  <!-- Owl carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>

  <!-- Theme Script -->
  <script src="assets/js/script.js"></script>
  </body>
  </html>