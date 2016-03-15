<?php
/**
 * @file
 * This is the container file that other files will be pulled into.
 */

?>
<?php include 'includes/meta.php'; ?>
  <body>
  <?php include 'includes/header.php'; ?>
  <section>
    <div class="contained">
      <div class="content">
        <div class="question">
          <p>
            Ready to quit smoking? Forever?
          </p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="DNL6TT8ZSFY5G">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
          <p>
            Once you make your €5 purchase securely via PayPal,<br>
            you'll be redirected back to our guaranteed system to quit smoking.
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes/footer.php'; ?>
  </body>
</html>
