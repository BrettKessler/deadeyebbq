<?php 
add_action('plugins_loaded', 'wpsm_colorbox_tr');
function wpsm_colorbox_tr() {
	load_plugin_textdomain( wpshopmart_colorbox_text_domain, FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

function wpsm_colorbox_front_script() {
	wp_enqueue_script('jquery');
	//font awesome css
	wp_enqueue_style('wpsm_colorbox-font-awesome-front', wpshopmart_colorbox_directory_url.'assets/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('wpsm_colorbox_bootstrap-front', wpshopmart_colorbox_directory_url.'assets/css/bootstrap-front.css');
	
	wp_enqueue_script( 'wpsm_colorbox_masnory', wpshopmart_colorbox_directory_url.'assets/js/masonry.pkgd.min.js', array('jquery'), '', false );
	wp_enqueue_script( 'wpsm_colorbox_height', wpshopmart_colorbox_directory_url.'assets/js/jcolumn.min.js', array('jquery'), '', false );
}

add_action( 'wp_enqueue_scripts', 'wpsm_colorbox_front_script' );
add_filter( 'widget_text', 'do_shortcode');

add_action('media_buttons_context', 'wpsm_colorbox_editor_popup_content_button');
add_action('admin_footer', 'wpsm_colorbox_editor_popup_content');

function wpsm_colorbox_editor_popup_content_button($context) {
 $img = wpshopmart_colorbox_directory_url.'assets/images/icon.png';
  $container_id = 'WPSM_COLORBOX';
  $title = 'Select Colorbox to insert into post';
  $context .= '<style>.wp_colorbox_shortcode_button {
				background: #11CAA5 !important;
				border-color: #11CAA5 #11CAA5 #11CAA5 !important;
				-webkit-box-shadow: 0 1px 0 #11CAA5 !important;
				box-shadow: 0 1px 0 #11CAA5 !important;
				color: #fff;
				text-decoration: none;
				text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
			    }</style>
			    <a class="button button-primary wp_colorbox_shortcode_button thickbox" title="Select Colorbox to insert into post"    href="#TB_inline?width=400&inlineId='.$container_id.'">
					<span class="wp-media-buttons-icon" style="background: url('.$img.'); background-repeat: no-repeat; background-position: left bottom;"></span>
				Colorbox panels Shortcode
				</a>';
  return $context;
}

function wpsm_colorbox_editor_popup_content() {
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#wpsm_colorbox_insert').on('click', function() {
			var id = jQuery('#wpsm_colorbox_insertselect option:selected').val();
			window.send_to_editor('<p>[WPSM_COLORBOX id=' + id + ']</p>');
			tb_remove();
		})
	});
	</script>
<style>
.wp_colorbox_shortcode_button {
    background: #11CAA5; !important;
    border-color: #11CAA5; #11CAA5 #11CAA5 !important;
    -webkit-box-shadow: 0 1px 0 #11CAA5 !important;
    box-shadow: 0 1px 0 #11CAA5 !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: 0 -1px 1px #11CAA5 ,1px 0 1px #11CAA5,0 1px 1px #11CAA5,-1px 0 1px #11CAA5 !important;
}
</style>
	<div id="WPSM_COLORBOX" style="display:none;">
	  <h3>Select Colorbox To Insert Into Post</h3>
	  <?php 
		
		$all_posts = wp_count_posts( 'colorbox_panels')->publish;
		$args = array('post_type' => 'colorbox_panels', 'posts_per_page' =>$all_posts);
		global $All_rac;
		$All_rac = new WP_Query( $args );			
		if( $All_rac->have_posts() ) { ?>	
			<select id="wpsm_colorbox_insertselect" style="width: 100%;margin-bottom: 20px;">
				<?php
				while ( $All_rac->have_posts() ) : $All_rac->the_post(); ?>
				<?php $title = get_the_title(); ?>
				<option value="<?php echo get_the_ID(); ?>"><?php if (strlen($title) == 0) echo 'No Title Found'; else echo $title;   ?></option>
				<?php
				endwhile; 
				?>
			</select>
			<button class='button primary wp_colorbox_shortcode_button' id='wpsm_colorbox_insert'><?php _e('Insert Colorbox Shortcode', wpshopmart_colorbox_text_domain); ?></button>
			<?php
		} else {
			_e('No Colorbox Found', wpshopmart_colorbox_text_domain);
		}
		?>
	</div>
	<?php
}

function wpsm_colorbox_header_info() {
 	if(get_post_type()=="colorbox_panels") {
		?>
		<style>
		.wpsm_ac_h_i{
			background:url('<?php echo wpshopmart_colorbox_directory_url.'assets/images/slideshow-01.jpg'; ?>') 50% 0 repeat fixed;
			
			
			margin-left: -20px;
			font-family: Myriad Pro ;
			cursor: pointer;
			text-align: center;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b{
			color: white;
			font-size: 30px;
			font-weight: bolder;
			padding: 0 0 15px 0;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b .dashicons{
			font-size: 40px;
			position: absolute;
			margin-left: -45px;
			margin-top: -10px;
		}
		 .wpsm_ac_h_small{
			font-weight: bolder;
			color: white;
			font-size: 18px;
			padding: 0 0 15px 15px;
		}

		.wpsm_ac_h_i a{
		text-decoration: none;
		}
		@media screen and ( max-width: 600px ) {
			.wpsm_ac_h_i{ padding-top: 60px; margin-bottom: -50px; }
			.wpsm_ac_h_i .WlTSmall { display: none; }
		}
		.texture-layer {
			background: rgba(0,0,0,0.7);
    padding-top: 0px;
	padding: 27px 0 23px 0;
		}
		.wpsm_ac_h_i  li {
			
			color:#fff;
			font-size: 17px;
			line-height: 1.3;
			font-weight: 600;
			
		}
		 
		  .wpsm_ac_h_i .btn-danger{
			      font-size: 29px;
				  background-color: #E74B42;
				  border-radius:1px;
				  margin-right:10px;
				 
		  }
		  .wpsm_ac_h_i .btn-success{
			      font-size: 29px;
				  border-radius:1px;
		  }
		  
		</style>
		<div class="wpsm_ac_h_i ">
			<div class="texture-layer">
				<a href="http://wpshopmart.com/plugins/colorbox-pro/" target="_blank">
					<div class="wpsm_ac_h_b"><a class="btn btn-danger btn-lg " href="http://wpshopmart.com/plugins/colorbox-pro/" target="_blank">Get Colorbox Pro Only In $5</a><a class="btn btn-success btn-lg " href="http://demo.wpshopmart.com/colorbox-pro/" target="_blank">View Demo</a></div>
					<div style="overflow:hidden;display:block;width:100%">
						<div class="col-md-4">
							<ul>
								<li> 10 Types Of Box Layouts </li>
								<li> 8 Types Of Loading Animation </li>
								<li> 500+ Google Fonts Integrated </li>
								<li> External Link Option </li>
								<li> 4 Overlay Effect </li>
								
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li> Individual Box Color Option </li>
								<li> Icon Color Customization </li>
								<li> Border Customization Option </li>
								<li> Box Shadow Customization </li>
								<li> Border Radius Customization </li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li> Masonry Effect </li>
								<li> Default Settings Option For New Box Groups </li>
								<li> Icon Position and Layout Option </li>
								<li> Font Alignment </li>
								<li> Personal Support </li>
							</ul>
						</div>
						
					</div>
				</a>
			</div>
		</div>
		<?php  
	}
}
add_action('in_admin_header','wpsm_colorbox_header_info'); 

add_action( 'admin_notices', 'wpsm_colorbox_p_review' );
function wpsm_colorbox_p_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'wpsm_colorbox_p_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('wpsm_colorbox_p_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible wpsm-colorbox-p-review-notice">
		<div style="float:left;margin-right:10px;margin-bottom:5px;">
			<img style="width:100%;width: 150px;height: auto;" src="<?php echo wpshopmart_colorbox_directory_url.'assets/images/show-icon.png'; ?>" />
		</div>
		<p style="font-size:18px;">'Hi! We saw you have been using <strong>Colorbox  plugin</strong> for a few days and wanted to ask for your help to <strong>make the plugin better</strong>.We just need a minute of your time to rate the plugin. Thank you!</p>
		<p style="font-size:18px;"><strong><?php _e( '~ wpshopmart', '' ); ?></strong></p>
		<p style="font-size:19px;"> 
			<a style="color: #fff;background: #ef4238;padding: 5px 7px 4px 6px;border-radius: 4px;" href="https://wordpress.org/support/plugin/colorbox-panels/reviews/?filter=5#new-post" class="wpsm-colorbox-p-dismiss-review-notice wpsm-colorbox-p-review-out" target="_blank" rel="noopener">Rate the plugin</a>&nbsp; &nbsp;
			<a style="color: #fff;background: #27d63c;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#"  class="wpsm-colorbox-p-dismiss-review-notice wpsm-rate-later" target="_self" rel="noopener"><?php _e( 'Nope, maybe later', '' ); ?></a>&nbsp; &nbsp;
			<a style="color: #fff;background: #31a3dd;padding: 5px 7px 4px 6px;border-radius: 4px;" href="#" class="wpsm-colorbox-p-dismiss-review-notice wpsm-rated" target="_self" rel="noopener"><?php _e( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.wpsm-colorbox-p-dismiss-review-notice, .wpsm-colorbox-p-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('wpsm-colorbox-p-review-out') ) {
					var wpsm_rate_data_val = "1";
				}
				if ( $(this).hasClass('wpsm-rate-later') ) {
					var wpsm_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('wpsm-rated') ) {
					var wpsm_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'wpsm_colorbox_p_dismiss_review',
					wpsm_rate_data_colorbox_p : wpsm_rate_data_val
				});
				
				$('.wpsm-colorbox-p-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_wpsm_colorbox_p_dismiss_review', 'wpsm_colorbox_p_dismiss_review' );
function wpsm_colorbox_p_dismiss_review() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['wpsm_rate_data_colorbox_p']=="1"){
		
	}
	if($_POST['wpsm_rate_data_colorbox_p']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		update_option( 'wpsm_colorbox_p_review', $review );
	}
	if($_POST['wpsm_rate_data_colorbox_p']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		update_option( 'wpsm_colorbox_p_review', $review );
	}
	
	die;
}
?>