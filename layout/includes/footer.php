<?php
$footnote = theme_academi_get_setting('footnote', 'format_html');

$fburl = theme_academi_get_setting('fburl');
$pinurl = theme_academi_get_setting('pinurl');
$twurl = theme_academi_get_setting('twurl');
$gpurl = theme_academi_get_setting('gpurl');

$address = theme_academi_get_setting('address');
$emailid = theme_academi_get_setting('emailid');
$phoneno = theme_academi_get_setting('phoneno');

?>
<footer id="footer">
	<div class="footer-main">
  	<div class="container-fluid">
    	<div class="row-fluid">
      	<div class="span5">
        	<div class="infoarea">
          	<div class="footer-logo"><a href="#"><img src="<?php echo get_logo_url(); ?>" width="251" height="37" alt="Academi"></a></div>
             <?php echo $footnote; ?>
          </div>
        </div>
      	<div class="span3">
        	<div class="foot-links">
          	<h2>Info</h2>
            <ul>            	
              <li><a href="<?php echo new moodle_url('/'); ?>">Home</a></li>
              <li><a href="https://moodle.org/forums/" target="_blank">Moodle community</a></li>
              <li><a href="https://docs.moodle.org" target="_blank">Moodle Docs</a></li>
              <li><a href="https://moodle.org/course/" target="_blank">Moodle support</a></li>
            </ul>
          </div>
        </div>
      	<div class="span4">
          <div class="contact-info">
            <h2 class="nopadding">Contact us</h2>
            <p><?php echo $address; ?><br>
              <i class="fa fa-phone-square"></i> Phone: <?php echo $phoneno; ?><br>
              <i class="fa fa-envelope"></i> E-mail: <a class="mail-link" href="mailto:<?php echo $emailid; ?>"><?php echo $emailid; ?></a><br>
            </p>
          </div>
          <div class="social-media">
            <h6>Follow us</h6>
            <ul>
              <li class="smedia-01"><a href="<?php echo $fburl; ?>"><i class="fa fa-facebook-square"></i></a></li>
              <li class="smedia-02"><a href="<?php echo $pinurl; ?>"><i class="fa fa-pinterest-square"></i></a></li>
              <li class="smedia-03"><a href="<?php echo $twurl; ?>"><i class="fa fa-twitter-square"></i></a></li>
              <li class="smedia-04"><a href="<?php echo $gpurl; ?>"><i class="fa fa-google-plus-square"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bootom">
  	<p>Developed by <a href="http://buymoodlethemes.com">Buymoodlethemes.com</a>. Powered by <a href="https://moodle.org">Moodle</a>.</p>
  </div>
</footer>
<!--E.O.Footer-->

<footer>
<?php  echo $OUTPUT->standard_footer_html(); ?>
</footer>
<?php  echo $OUTPUT->standard_end_of_body_html() ?>