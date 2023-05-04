<?php
//General
$sps_orderby = get_post_meta( get_the_ID(), 'sps_orderby', true );
$sps_video_banner = get_post_meta( get_the_ID(), 'sps_video_banner', true );
$sps_navigation_style = get_post_meta( get_the_ID(), 'sps_navigation_style', true );
$sps_post_page = get_post_meta( get_the_ID(), 'sps_post_page', true );
$sps_slide_item = get_post_meta( get_the_ID(), 'sps_slide_item', true );
$sps_slide_item= empty($sps_slide_item) ? 2 : $sps_slide_item;
$sps_slide_img =get_post_meta( get_the_ID(), 'sps_slide_img', true );
$sps_dt_enable = get_post_meta( get_the_ID(), 'sps_dt_enable', true );
$sps_cat_enable = get_post_meta( get_the_ID(), 'sps_cat_enable', true );
$sps_comment_enable = get_post_meta( get_the_ID(), 'sps_comment_enable', true );
$sps_auth_enable = get_post_meta( get_the_ID(), 'sps_auth_enable', true );
$sps_read = get_post_meta( get_the_ID(), 'sps_read', true );
if(empty(get_post_meta( get_the_ID(), 'sps_slider_type', true ))) {
    $sps_slider_type ='blog_post_slider';
}
else {
    $sps_slider_type = get_post_meta( get_the_ID(), 'sps_slider_type', true );
}
$sps_title_enable = get_post_meta( get_the_ID(), 'sps_title_enable', true );
$sps_desc_enable = get_post_meta( get_the_ID(), 'sps_desc_enable', true );
$sps_banner_overlay_enable = get_post_meta( get_the_ID(), 'sps_banner_overlay_enable', true );
$sps_banner_overlay_opacity = get_post_meta( get_the_ID(), 'sps_banner_overlay_opacity', true );
$sps_banner_padding_top = get_post_meta( get_the_ID(), 'sps_banner_padding_top', true );
$sps_banner_padding_bottom = get_post_meta( get_the_ID(), 'sps_banner_padding_bottom', true );
$sps_banner_height = get_post_meta( get_the_ID(), 'sps_banner_height', true );

//Slide
$sps_speed = get_post_meta( get_the_ID(), 'sps_speed', true );

//Typography
$sps_title_ff= get_post_meta( get_the_ID(), 'sps_title_ff', true );
$sps_title_fs= get_post_meta( get_the_ID(), 'sps_title_fs', true );
$sps_title_lheight= get_post_meta( get_the_ID(), 'sps_title_lheight', true );
$sps_title_fw= get_post_meta( get_the_ID(), 'sps_title_fw', true );
$sps_title_fstyle= get_post_meta( get_the_ID(), 'sps_title_fstyle', true );
$sps_title_trans= get_post_meta( get_the_ID(), 'sps_title_trans', true );
$sps_content_ff= get_post_meta( get_the_ID(), 'sps_content_ff', true );
$sps_content_fs= get_post_meta( get_the_ID(), 'sps_content_fs', true );
$sps_content_lheight= get_post_meta( get_the_ID(), 'sps_content_lheight', true );
$sps_content_fw= get_post_meta( get_the_ID(), 'sps_content_fw', true );
$sps_content_fstyle= get_post_meta( get_the_ID(), 'sps_content_fstyle', true );
$sps_content_trans= get_post_meta( get_the_ID(), 'sps_content_trans', true );
$sps_meta_ff= get_post_meta( get_the_ID(), 'sps_meta_ff', true );
$sps_meta_fs= get_post_meta( get_the_ID(), 'sps_meta_fs', true );
$sps_meta_lheight= get_post_meta( get_the_ID(), 'sps_meta_lheight', true );
$sps_meta_fw= get_post_meta( get_the_ID(), 'sps_meta_fw', true );
$sps_meta_fstyle= get_post_meta( get_the_ID(), 'sps_meta_fstyle', true );
$sps_meta_trans= get_post_meta( get_the_ID(), 'sps_meta_trans', true );
$sps_read_ff= get_post_meta( get_the_ID(), 'sps_read_ff', true );
$sps_read_fs= get_post_meta( get_the_ID(), 'sps_read_fs', true );
$sps_read_lheight= get_post_meta( get_the_ID(), 'sps_read_lheight', true );
$sps_read_fw= get_post_meta( get_the_ID(), 'sps_read_fw', true );
$sps_read_fstyle=get_post_meta( get_the_ID(), 'sps_read_fstyle', true );
$sps_read_trans= get_post_meta( get_the_ID(), 'sps_read_trans', true );

//Color
$sps_icon_clr=get_post_meta( get_the_ID(), 'sps_icon_clr', true );
$sps_meta_clr= get_post_meta( get_the_ID(), 'sps_meta_clr', true );
$sps_meta_hov_clr= get_post_meta( get_the_ID(), 'sps_meta_hov_clr', true );
$sps_title_clr= get_post_meta( get_the_ID(), 'sps_title_clr', true );
$sps_title_hov_clr= get_post_meta( get_the_ID(), 'sps_title_hov_clr', true );
$sps_content_clr= get_post_meta( get_the_ID(), 'sps_content_clr', true );
$sps_btn_bg_clr= get_post_meta( get_the_ID(), 'sps_btn_bg_clr', true );
$sps_btn_txt_clr= get_post_meta( get_the_ID(), 'sps_btn_txt_clr', true );
$sps_btn_bg_hov_clr= get_post_meta( get_the_ID(), 'sps_btn_bg_hov_clr', true );
$sps_btn_txt_hov_clr= get_post_meta( get_the_ID(), 'sps_btn_txt_hov_clr', true );
$sps_nav_clr= get_post_meta( get_the_ID(), 'sps_nav_clr', true );
$sps_banner_overlay_clr= get_post_meta( get_the_ID(), 'sps_banner_overlay_clr', true );

$sps_cat_query=explode(',',get_post_meta(get_the_ID(),'sps_cat_query',true));
$sps_post_slider_terms = get_terms( array(
  'taxonomy' => 'category',
  'hide_empty' => true,
) );

$sps_font_size = array();
    for($i=10; $i<=100; $i++) {
      $sps_font_size[$i] = $i;
    }
$sps_line_height = array();
    for($i=10; $i<=100; $i++) {
        $sps_line_height[$i] = $i;
    }
$sps_font_family = sps_typo_fonts();?>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1"><?php echo esc_html__('General','spice-post-slider');?></a></li>
    <li><a href="#tabs-2"><?php echo esc_html__('Navigation','spice-post-slider');?></a></li>
    <li><a href="#tabs-3"><?php echo esc_html__('Typography','spice-post-slider');?></a></li>
    <li><a href="#tabs-4"><?php echo esc_html__('Color','spice-post-slider');?></a></li>
  </ul>

  <div id="tabs-1">
    <table class="sps-tbl">
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Select Post Slider Layout','spice-post-slider');?>
          <span class="sps-td-span"><?php echo esc_html__('Select slider type for project creation','spice-post-slider');?></span>
        </td>
        <td class="sps-td-attr">
          <input class="sps-td-post-type" id="sps-input-item-banner-btn" <?php if ($sps_slider_type=='banner_slider') echo "checked";?> type="radio" name="sps_slider_type" value="banner_slider"><label class="sps-chose-item-btn <?php if ($sps_slider_type=='banner_slider') echo "active";?>" id="sps-choose-item-banner-btn"><?php esc_html_e('Banner Slider','spice-slider-pro');?></label>&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="sps-td-post-type" id="sps-input-item-post-btn" <?php if ($sps_slider_type=='blog_post_slider') echo "checked";?> type="radio" name="sps_slider_type" value="blog_post_slider"><label class="sps-chose-item-btn <?php if ($sps_slider_type=='blog_post_slider') echo "active";?>" id="sps-choose-item-post-btn"><?php esc_html_e('Post Slider','spice-slider-pro');?></label>&nbsp;&nbsp;&nbsp;&nbsp;
          <input class="sps-td-post-type" id="sps-input-item-video-btn" <?php if ($sps_slider_type=='vdo_slider') echo "checked";?> type="radio" name="sps_slider_type" value="vdo_slider"><label class="sps-chose-item-btn <?php if ($sps_slider_type=='vdo_slider') echo "active";?>" id="sps-choose-item-video-btn"><?php esc_html_e('Video Slider','spice-slider-pro');?></label>

        </td>
      </tr>

      <!--Banner Slider Pattern-->
      <tr id="sps-banner-layout" <?php if($sps_slider_type=='blog_post_slider') echo 'class="sps-blog-post-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Design/Layout','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Choose your favourite design','spice-post-slider');?></span></td>
        <td class="sps-post-design">
           <?php
           $sps_demo_type = ($sps_slider_type=='banner_slider') ? ('banner-slider') : ('video-slider');
           if(!empty($sps_banner_design)) 
            {
              $templates = $sps_banner_design;
            }
            else{
               $templates = 1;
            }
            for($i=1;$i<=11;$i++){ 
              ?>
              <div class="sps-design-select <?php echo $sps_slider_type;?>" id="sps-pro-banner-badge-<?php echo esc_attr($i);?>"> 
                <span class="sps_checked_temp banner" id="sps_checked_banner_<?php echo esc_attr($i); ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i style="line-height:30px;" class="fa fa-check"></i></span>
                <div class="">
                  <div class="sps_admin_showcase">
                     <?php if($i!=1):?><a class="sps-fetch-demo-url" style="color:#fff;text-decoration:none" target="_blank" href="https://plugin-demo.spicethemes.com/spice-slider-pro/<?php echo esc_attr($sps_demo_type); ?>/#design-<?php echo esc_attr($i);?>"><div class="ribbon-pro">
                    <img src="<?php echo SPS_URL.'assets/img/pro-icon.png';?>">
                  </div><?php endif;?>
                    <img class="sps_responsive ftr_img" src="<?php echo SPS_URL.'assets/img/b-'.$i.'.png';?>" id="templates_banner_btn<?php echo esc_attr($i); ?>" >
                    <?php if($i!=1):?></a><?php endif;?>
                    
                  </div>
                </div>
              </div>
              
              <?php
            }
            ?>
        </td>
      </tr>
      <!--Post Slider Pattern-->
      <tr id="sps-post-layout" <?php if($sps_slider_type=='banner_slider' || $sps_slider_type=='vdo_slider') echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Design/Layout','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Choose your favourite design','spice-post-slider');?></span></td>
        <td class="sps-post-design">
           <?php
           if(!empty($sps_slide_design)) 
            {
              $templates = $sps_slide_design;
            }
            else{
               $templates = 1;
            }
            for($i=1;$i<=6;$i++){ 
              ?>
              <div class="sps-design-select" id="sps-pro-badge-<?php echo esc_attr($i);?>">
                <span class="sps_checked_temp post" id="sps_checked_temp_<?php echo esc_attr($i); ?>" <?php if($templates!=$i) { ?>  style="display:none" <?php } ?> ><i style="line-height:30px;" class="fa fa-check"></i></span>
                <div class="">
                  <div class="sps_admin_showcase">
                    <?php if($i!=1):?><a style="color:#fff;text-decoration:none" target="_blank" href="https://plugin-demo.spicethemes.com/spice-slider-pro/post-slider/#design-<?php echo esc_attr($i);?>"><div class="ribbon-pro">
                    <img src="<?php echo SPS_URL.'assets/img/pro-icon.png';?>">
                  </div><?php endif;?>
                    <img class="sps_responsive ftr_img" src="<?php echo SPS_URL.'assets/img/'.$i.'.png';?>" >
                  <?php if($i!=1):?></a><?php endif;?>

                  </div>
                </div>  
              </div>
              
              <?php
            }
            ?>
        </td>
      </tr> 
      

      <!-- Video Section-->
      <tr id="sps-video-item" <?php if ($sps_slider_type=='blog_post_slider' || $sps_slider_type=='banner_slider') echo 'class="sps-vdo-sec"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Video','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Upload your video','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input readonly="true" type="text" name="sps_video_banner" id="sps_video_banner" class="sps-td-attr-width-full" placeholder="<?php esc_attr_e( 'Upload your file using the button', 'spice-post-slider' ); ?>" value="<?php echo esc_attr( $sps_video_banner ); ?>" />
           <a href="javascript:;" id="sps_video_upload" class="button button-secondary" data-format="mp4">
              <?php esc_html_e( 'Upload File', 'spice-post-slider' ); ?>
            </a>
        </td>
      </tr>

      <!--Category-->
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Categories','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Select categories to display the slider.(Default: All)','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
         <select class="sps-cat-query-cls" name="sps_cat_query[]" multiple="multiple">
          <?php if ($sps_post_slider_terms) :
            foreach ($sps_post_slider_terms as $sps_post_slider_term) { ?>
          <option value="<?php echo esc_attr($sps_post_slider_term->term_id);?>" <?php if (in_array($sps_post_slider_term->term_id, $sps_cat_query)) { echo "selected"; } ?> > <?php echo esc_html($sps_post_slider_term->name);?></option>
           <?php } endif; ?>
          </select></td>
      </tr>   
      

      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Order','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Sort in ascending or descending order.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
         <select class="sps-orderby" name="sps_orderby">
            <option value="ASC" <?php if($sps_orderby=='ASC') { echo "selected"; } ?> > <?php echo esc_html__('Ascending Order','spice-post-slider');?></option>
            <option value="DESC" <?php if($sps_orderby=='DESC') { echo "selected"; } ?> > <?php echo esc_html__('Descending Order','spice-post-slider');?></option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Number','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enter the number of posts to display. (Default is 4 )','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input class="sps-td-attr-width" type="number" name="sps_post_page" value="<?php if (!empty($sps_post_page)) echo esc_attr($sps_post_page);?>" min="1" step="1"/></td>
      </tr>
      <tr id="sps-post-item-tr" <?php if($sps_slider_type=='banner_slider') echo 'class="sps-banner-slider"'; if ($sps_slider_type=='vdo_slider') echo 'class="sps-vdo-sec"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Post Item','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Choose post items per page.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div id="sps_slide_item_id" class="size-slider" ></div>
            <input type="text" class="slider-text" id="sps_slide_item" name="sps_slide_item"  readonly="readonly">
        </td>
      </tr>
      <tr id="sps-img-type" <?php if ($sps_slider_type=='vdo_slider') echo 'class="sps-vdo-sec"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Size','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Select the size of your images.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <select class="sps-orderby" name="sps_slide_img">
                <option value="thumbnail" <?php if($sps_slide_img == "thumbnail") { echo "selected"; } ?> ><?php echo esc_html__('Thumbnail - 150 x 150','spice-post-slider');?></option>
                <option value="medium" <?php if($sps_slide_img == "medium") { echo "selected"; } ?>><?php echo esc_html__('Medium - 300 x 300','spice-post-slider');?></option>
                <option value="medium_large" <?php if($sps_slide_img == "medium_large") { echo "selected"; } if(empty($sps_slide_img)) { echo "selected"; } ?> ><?php echo esc_html__('Medium Large - 768 x 0','spice-post-slider');?></option>
                <option value="large" <?php if($sps_slide_img == "large") { echo "selected"; } ?>><?php echo esc_html__('Large - 1024 x 1024','spice-post-slider');?></option>
                <option value="1536x1536" <?php if($sps_slide_img == "1536x1536") { echo "selected"; } ?>><?php echo esc_html__('1536x1536 - 1536 x 1536','spice-post-slider');?></option>
                <option value="2048x2048" <?php if($sps_slide_img == "2048x2048") { echo "selected"; } ?>><?php echo esc_html__('2048x2048 - 2048 x 2048','spice-post-slider');?></option>
                <option value="full" <?php if($sps_slide_img == "full") { echo "selected"; } ?>><?php echo esc_html__('Full','spice-post-slider');?></option>
              </select>
        </td>
      </tr>
      <tr id="sps-date-tr" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Date','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the date.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
              <input type="radio" class="switch-input" name="sps_dt_enable" value="yes" id="enable_masonry_title" <?php if($sps_dt_enable == 'yes' ) { echo "checked"; } if($sps_dt_enable == '' ) { echo "checked"; } ?>/>
              <label for="enable_masonry_title" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
              <input type="radio" class="switch-input" name="sps_dt_enable" value="no" id="disable_masonry_title" <?php if($sps_dt_enable == 'no' ) { echo "checked"; } ?> />
              <label for="disable_masonry_title" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
              <span class="switch-selection"></span>
        </div>
        </td>
      </tr>
      <tr id="sps-cat-tr" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Category','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the category.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
            <input type="radio" class="switch-input" name="sps_cat_enable" value="yes" id="enable_sps_category" <?php if($sps_cat_enable == 'yes' ) { echo "checked"; } if($sps_cat_enable == '' ) { echo "checked"; } ?> />
            <label for="enable_sps_category" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
            <input type="radio" class="switch-input" name="sps_cat_enable" value="no" id="disable_sps_category" <?php if($sps_cat_enable == 'no' ) { echo "checked"; } ?>  />
            <label for="disable_sps_category" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
            <span class="switch-selection"></span>
        </div>
        </td>
      </tr>
      <tr id="sps-comment-tr" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Comments','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the comments.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
            <input type="radio" class="switch-input" name="sps_comment_enable" value="yes" id="enable_sps_comments" <?php if($sps_comment_enable == 'yes' ) { echo "checked"; } if($sps_comment_enable == '' ) { echo "checked"; } ?> />
            <label for="enable_sps_comments" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
            <input type="radio" class="switch-input" name="sps_comment_enable" value="no" id="disable_sps_comments" <?php if($sps_comment_enable == 'no' ) { echo "checked"; } ?>  />
            <label for="disable_sps_comments" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
            <span class="switch-selection"></span>
        </div>
        </td>
      </tr>
      <tr id="sps-author-tr" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Author','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the author.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
            <input type="radio" class="switch-input" name="sps_auth_enable" value="yes" id="enable_sps_auth" <?php if($sps_auth_enable == 'yes' ) { echo "checked"; } if($sps_auth_enable == '' ) { echo "checked"; } ?> />
            <label for="enable_sps_auth" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
            <input type="radio" class="switch-input" name="sps_auth_enable" value="no" id="disable_sps_auth" <?php if($sps_auth_enable == 'no' ) { echo "checked"; } ?>  />
            <label for="disable_sps_auth" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
            <span class="switch-selection"></span>
        </div>
        </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Read More Text','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enter your custom text for the read more button.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input class="sps-td-attr-width" type="text" name="sps_read" value="<?php if (!empty($sps_read)) { if($sps_read=='sps_blank') { } else { echo esc_attr($sps_read); } }  else { echo esc_html__('Read More','spice-post-slider');} ?>"></td>
      </tr>

      <tr id="sps-hide-slide-height-tr"  class="<?php if($sps_slider_type=='blog_post_slider') echo 'sps-blog-post-slider';?>" >
        <td class="sps-td-title"><?php echo esc_html__('Height','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enter the height of the slider.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input class="sps-td-attr-width" type="number" name="sps_banner_height" value="<?php if (!empty($sps_banner_height)) { echo esc_attr($sps_banner_height); }  else { echo '90'; } ?>" min="20" max="150" step="1"/></td>
      </tr>

      <tr id="sps-hide-title-tr" <?php if($sps_slider_type=='blog_post_slider') echo 'class="sps-blog-post-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Enable/Disable Title','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the title.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
              <input type="radio" class="switch-input" name="sps_title_enable" value="yes" id="enable_post_title" <?php if($sps_title_enable == 'yes' ) { echo "checked"; } if($sps_title_enable == '' ) { echo "checked"; } ?>/>
              <label for="enable_post_title" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
              <input type="radio" class="switch-input" name="sps_title_enable" value="no" id="disable_post_title" <?php if($sps_title_enable == 'no' ) { echo "checked"; } ?> />
              <label for="disable_post_title" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
              <span class="switch-selection"></span>
        </div>
        </td>
      </tr>

      <tr id="sps-hide-desc-tr" <?php if($sps_slider_type=='blog_post_slider') echo 'class="sps-blog-post-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Enable/Disable Description','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the description.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
              <input type="radio" class="switch-input" name="sps_desc_enable" value="yes" id="enable_post_description" <?php if($sps_desc_enable == 'yes' ) { echo "checked"; } if($sps_desc_enable == '' ) { echo "checked"; } ?>/>
              <label for="enable_post_description" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
              <input type="radio" class="switch-input" name="sps_desc_enable" value="no" id="disable_post_description" <?php if($sps_desc_enable == 'no' ) { echo "checked"; } ?> />
              <label for="disable_post_description" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
              <span class="switch-selection"></span>
        </div>
        </td>
      </tr>

      <tr id="sps-hide-overlay-tr" <?php if($sps_slider_type=='blog_post_slider') echo 'class="sps-blog-post-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Enable/Disable Overlay','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enable or disable the slider overlay.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <div class="switch">
              <input type="radio" class="switch-input" name="sps_banner_overlay_enable" value="yes" id="enable_banner_overlay" <?php if($sps_banner_overlay_enable == 'yes' ) { echo "checked"; } if($sps_banner_overlay_enable == '' ) { echo "checked"; } ?>/>
              <label for="enable_banner_overlay" class="switch-label switch-label-off"><?php echo esc_html__('Yes','spice-post-slider'); ?></label>
              <input type="radio" class="switch-input" name="sps_banner_overlay_enable" value="no" id="disable_banner_overlay" <?php if($sps_banner_overlay_enable == 'no' ) { echo "checked"; } ?> />
              <label for="disable_banner_overlay" class="switch-label switch-label-on"><?php echo esc_html__('No','spice-post-slider'); ?></label>
              <span class="switch-selection"></span>
        </div>
        </td>
      </tr>

      <tr id="sps-hide-opacity-tr"  class="<?php if($sps_banner_overlay_enable == 'no' ) echo 'sps-overlay-enable';?> <?php if($sps_slider_type=='blog_post_slider') echo 'sps-blog-post-slider';?>" >
        <td class="sps-td-title"><?php echo esc_html__('Opacity','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enter the opacity of the slider image. (Default is 0.5 )','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input class="sps-td-attr-width" type="number" name="sps_banner_overlay_opacity" value="<?php if (!empty($sps_banner_overlay_opacity)) { echo esc_attr($sps_banner_overlay_opacity); }  else { echo '0.5'; } ?>" min="0.1" max="0.9" step="0.1"/></td>
      </tr>

      <tr id="sps-hide-padding-tr"  class="<?php if($sps_slider_type=='blog_post_slider') echo 'sps-blog-post-slider';?>" >
        <td class="sps-td-title"><?php echo esc_html__('Padding','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Enter the top & bottom padding of the slider section.','spice-post-slider');?></span>
        </td>
        <td class="sps-td-attr">
          <?php echo esc_html__('Top','spice-post-slider');?> <input class="sps-td-attr-width" type="number" name="sps_banner_padding_top" value="<?php if (!empty($sps_banner_padding_top)) { echo esc_attr($sps_banner_padding_top); }  else { echo '0'; } ?>" min="0" max="100" step="1"/>
          <?php echo esc_html__('Bottom','spice-post-slider');?> <input class="sps-td-attr-width" type="number" name="sps_banner_padding_bottom" value="<?php if (!empty($sps_banner_padding_bottom)) { echo esc_attr($sps_banner_padding_bottom); }  else { echo '0'; } ?>" min="0" max="100" step="1"/></td>
      </tr>

    </table>
  </div>

  <!-- Tabs 2 -->
  <div id="tabs-2">
    <table class="sps-tbl">
       <tr>
          <td class="sps-td-title"><?php echo esc_html__('Speed','spice-post-slider');?>
              <span class="sps-td-span"><?php echo esc_html__('Enter the transition speed of the slides.','spice-post-slider');?></span>
          </td>
          <td class="sps-td-attr">
              <input class="sps-td-attr-width" type="number" name="sps_speed" value="<?php if (!empty($sps_speed)) { echo esc_attr($sps_speed); } else { echo esc_html__('700','spice-post-slider'); } ?>" min="1" step="1"/>
          </td>
        </tr>
        <tr>
          <td class="sps-td-title"><?php echo esc_html__('Navigation Style','spice-post-slider');?>
          <span class="sps-td-span"><?php echo esc_html__('Select navigation style for post slider.','spice-post-slider');?></span>
          </td>
          <td class="sps-td-attr">
            <select class="sps-navigation-style" name="sps_navigation_style">
              <option value="none" <?php if($sps_navigation_style=='none') { echo "selected"; } ?> > <?php echo esc_html__('None','spice-post-slider');?></option>
              <option value="bullets" <?php if($sps_navigation_style=='bullets') { echo "selected"; } ?> > <?php echo esc_html__('Bullets','spice-post-slider');?></option>
              <option value="navigation" <?php if($sps_navigation_style=='navigation') { echo "selected"; } ?> > <?php echo esc_html__('Navigation','spice-post-slider');?></option>
              <option value="both" <?php if($sps_navigation_style=='both') { echo "selected"; }  if(empty($sps_navigation_style)) { echo "selected"; } ?>> <?php echo esc_html__('Both','spice-post-slider');?></option>          
            </select>
          </td>
        </tr>
    </table>
  </div>

  <!-- Tab 3 -->
  <div id="tabs-3">
    <!-- Posy Title Typography -->
    <table class="sps-tbl">
      <tr>
          <td class="sps-td-title"><?php echo esc_html__('Post Title','spice-post-slider');?>
              <span class="sps-td-span"><?php echo esc_html__('Typography for the post title.','spice-post-slider');?></span>
          </td>
          <td class="sps-td-attr-30">
            <?php echo esc_html__('Font Family','spice-post-slider');?>
            <select class="sps-font-select" name="sps_title_ff" style="display:block;">
              <?php
              foreach ($sps_font_family as $sps_key => $sps_value) { ?>
                <option value="<?php echo esc_attr($sps_key);?>" <?php if($sps_title_ff == $sps_key) { echo "selected"; } if(empty($sps_title_ff) && ($sps_key=='Poppins')) { echo "selected"; } ?> ><?php echo esc_html($sps_value);?></option>
              <?php }  ?>           
            </select> 
          </td>
          <td class="sps-td-attr-30">
            <?php echo esc_html__('Font Size in px','spice-post-slider');?>
            <select class="sps-font-select" name="sps_title_fs" style="display:block;">
              <?php
              foreach ($sps_font_size as $sps_font_size_key => $sps_font_size_value) { ?>
                <option value="<?php echo esc_attr($sps_font_size_key);?>" <?php if($sps_title_fs == $sps_font_size_key) { echo "selected"; } if( empty($sps_title_fs) && ($sps_font_size_key==24)) { echo "selected"; }  ?> ><?php echo esc_html($sps_font_size_value);?></option>
                <?php } ?>
            </select>
          </td>
      </tr>
      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Line Height in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_title_lheight" style="display:block;">
            <?php
            foreach ($sps_line_height as $sps_line_height_key => $sps_line_height_value) { ?>
              <option value="<?php echo esc_attr($sps_line_height_key);?>" <?php if($sps_title_lheight == $sps_line_height_key) { echo "selected"; } if( empty($sps_title_lheight) && ($sps_line_height_key==36)) { echo "selected"; }  ?> ><?php echo esc_html($sps_line_height_value);?></option>
              
            <?php }  ?>           
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Weight','spice-post-slider');?>
          <select class="sps-font-select" name="sps_title_fw" style="display:block;">
           <option value="100" <?php if($sps_title_fw == 100) { echo "selected"; } ?> ><?php echo esc_html__('100','spice-post-slider');?></option>   
            <option value="200" <?php if($sps_title_fw == 200) { echo "selected"; } ?> ><?php echo esc_html__('200','spice-post-slider');?></option>
            <option value="300" <?php if($sps_title_fw == 300) { echo "selected"; } ?> ><?php echo esc_html__('300','spice-post-slider');?></option>
            <option value="400" <?php if($sps_title_fw == 400) { echo "selected"; } ?> ><?php echo esc_html__('400','spice-post-slider');?></option>
            <option value="500" <?php if($sps_title_fw == 500) { echo "selected"; } ?> ><?php echo esc_html__('500','spice-post-slider');?></option>
            <option value="600" <?php if($sps_title_fw == 600) { echo "selected"; }  if(empty($sps_title_fw)) { echo "selected"; } ?> ><?php echo esc_html__('600','spice-post-slider');?></option>
            <option value="700" <?php if($sps_title_fw == 700) { echo "selected"; } ?> ><?php echo esc_html__('700','spice-post-slider');?></option>
            <option value="800" <?php if($sps_title_fw == 800) { echo "selected"; } ?> ><?php echo esc_html__('800','spice-post-slider');?></option>
            <option value="900" <?php if($sps_title_fw == 900) { echo "selected"; } ?> ><?php echo esc_html__('Line Height in px','spice-post-slider');?></option>     
          </select>
        </td>
      </tr>
      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font style','spice-post-slider');?>
          <select class="sps-font-select" name="sps_title_fstyle" style="display:block;">
            <option value="normal" <?php if($sps_title_fstyle == 'normal') { echo "selected"; } ?>><?php echo esc_html__('Normal','spice-post-slider');?></option>   
            <option value="italic" <?php if($sps_title_fstyle == 'italic') { echo "selected"; } ?>><?php echo esc_html__('Italic','spice-post-slider');?></option>          
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Text Transform','spice-post-slider');?>
          <select class="sps-font-select" name="sps_title_trans" style="display:block;">
            <option value="initial" <?php if($sps_title_trans == 'initial') { echo "selected"; } ?>><?php echo esc_html__('Default','spice-post-slider');?></option>
            <option value="capitalize" <?php if($sps_title_trans == 'capitalize') { echo "selected"; } ?>><?php echo esc_html__('Capitalize','spice-post-slider');?></option>
            <option value="lowercase" <?php if($sps_title_trans == 'lowercase') { echo "selected"; } ?>><?php echo esc_html__('Lowercase','spice-post-slider');?></option>
            <option value="Uppercase" <?php if($sps_title_trans == 'Uppercase') { echo "selected"; } ?>><?php echo esc_html__('Uppercase','spice-post-slider');?></option>
          </select>
        </td>
      </tr>
    </table>
  <hr> 
    <!-- Post Content Typography -->
    <table class="sps-tbl">
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Post Content','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Typography for the post content.','spice-post-slider');?></span></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Family','spice-post-slider');?>
          <select class="sps-font-select" name="sps_content_ff" style="display:block;">
              <?php
              foreach ($sps_font_family as $sps_key => $sps_value) { ?>
                <option value="<?php echo esc_attr($sps_key);?>" <?php if($sps_content_ff == $sps_key) { echo "selected"; } if(empty($sps_content_ff) && ($sps_key=='Poppins')) { echo "selected"; } ?> ><?php echo esc_html($sps_value);?></option>
              <?php }  ?>           
            </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Size in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_content_fs" style="display:block;">
              <?php
              foreach ($sps_font_size as $sps_font_size_key => $sps_font_size_value) { ?>
                <option value="<?php echo esc_attr($sps_font_size_key);?>" <?php if($sps_content_fs == $sps_font_size_key) { echo "selected"; } if( empty($sps_content_fs) && ($sps_font_size_key==18)) { echo "selected"; } ?> ><?php echo esc_html($sps_font_size_value);?></option>
                <?php } ?>
            </select>
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Line Height in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_content_lheight" style="display:block;">
            <?php
            foreach ($sps_line_height as $sps_line_height_key => $sps_line_height_value) { ?>
              <option value="<?php echo esc_attr($sps_line_height_key);?>" <?php if($sps_content_lheight == $sps_line_height_key) { echo "selected"; } if( empty($sps_content_lheight) && ($sps_line_height_key==30)) { echo "selected"; } ?> ><?php echo esc_html($sps_line_height_value);?></option>
            <?php }  ?>           
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Weight','spice-post-slider');?>
           <select class="sps-font-select" name="sps_content_fw" style="display:block;">
           <option value="100" <?php if($sps_content_fw == 100) { echo "selected"; } ?> ><?php echo esc_html__('100','spice-post-slider');?></option>   
            <option value="200" <?php if($sps_content_fw == 200) { echo "selected"; } ?> ><?php echo esc_html__('200','spice-post-slider');?></option>
            <option value="300" <?php if($sps_content_fw == 300) { echo "selected"; } if(empty($sps_content_fw)) { echo "selected"; } ?> ><?php echo esc_html__('300','spice-post-slider');?></option>
            <option value="400" <?php if($sps_content_fw == 400) { echo "selected"; } ?> ><?php echo esc_html__('400','spice-post-slider');?></option>
            <option value="500" <?php if($sps_content_fw == 500) { echo "selected"; } ?> ><?php echo esc_html__('500','spice-post-slider');?></option>
            <option value="600" <?php if($sps_content_fw == 600) { echo "selected"; } ?> ><?php echo esc_html__('600','spice-post-slider');?></option>
            <option value="700" <?php if($sps_content_fw == 700) { echo "selected"; } ?> ><?php echo esc_html__('700','spice-post-slider');?></option>
            <option value="800" <?php if($sps_content_fw == 800) { echo "selected"; } ?> ><?php echo esc_html__('800','spice-post-slider');?></option>
            <option value="900" <?php if($sps_content_fw == 900) { echo "selected"; } ?> ><?php echo esc_html__('900','spice-post-slider');?></option>     
          </select> 
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font style','spice-post-slider');?>
          <select class="sps-font-select" name="sps_content_fstyle" style="display:block;">
            <option value="normal" <?php if($sps_content_fstyle == 'normal') { echo "selected"; } ?> ><?php echo esc_html__('Normal','spice-post-slider');?></option>   
            <option value="italic" <?php if($sps_content_fstyle == 'italic') { echo "selected"; } ?> ><?php echo esc_html__('Italic','spice-post-slider');?></option>          
          </select>  
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Text Transform','spice-post-slider');?>
          <select class="sps-font-select" name="sps_content_trans" style="display:block;">
            <option value="initial" <?php if($sps_content_trans == 'initial') { echo "selected"; } ?> ><?php echo esc_html__('Default','spice-post-slider');?></option>
            <option value="capitalize" <?php if($sps_content_trans == 'capitalize') { echo "selected"; } ?>><?php echo esc_html__('Capitalize','spice-post-slider');?></option>
            <option value="lowercase" <?php if($sps_content_trans == 'lowercase') { echo "selected"; } ?>><?php echo esc_html__('Lowercase','spice-post-slider');?></option>
            <option value="Uppercase" <?php if($sps_content_trans == 'Uppercase') { echo "selected"; } ?>><?php echo esc_html__('Uppercase','spice-post-slider');?></option>
          </select>
        </td>
      </tr>
    </table>   
<hr>   
<!-- Post Meta -->
    <table id="sps-post-meta-typo" class="sps-tbl <?php if($sps_slider_type=='banner_slider') echo 'sps-banner-slider';?>">
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Post Meta','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Typography for the post meta.','spice-post-slider');?></span></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Family','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_ff" style="display:block;">
              <?php
              foreach ($sps_font_family as $sps_key => $sps_value) { ?>
                <option value="<?php echo esc_attr($sps_key);?>" <?php if($sps_meta_ff == $sps_key) { echo "selected"; } if(empty($sps_meta_ff) && ($sps_key=='Poppins')) { echo "selected"; } ?> ><?php echo esc_html($sps_value);?></option>
              <?php }  ?>           
            </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Size in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_fs" style="display:block;">
              <?php
              foreach ($sps_font_size as $sps_font_size_key => $sps_font_size_value) { ?>
                <option value="<?php echo esc_attr($sps_font_size_key);?>" <?php if($sps_meta_fs == $sps_font_size_key) { echo "selected"; } if( empty($sps_meta_fs) && ($sps_font_size_key==16)) { echo "selected"; } ?> ><?php echo esc_html($sps_font_size_value);?></option>
                <?php } ?>
            </select> 
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Line Height in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_lheight" style="display:block;">
            <?php
            foreach ($sps_line_height as $sps_line_height_key => $sps_line_height_value) { ?>
              <option value="<?php echo esc_attr($sps_line_height_key);?>" <?php if($sps_meta_lheight == $sps_line_height_key) { echo "selected"; } if( empty($sps_meta_lheight) && ($sps_line_height_key==26)) { echo "selected"; } ?> ><?php echo esc_html($sps_line_height_value);?></option>
            <?php }  ?>
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Weight','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_fw" style="display:block;">
           <option value="100" <?php if($sps_meta_fw == 100) { echo "selected"; } ?> ><?php echo esc_html__('100','spice-post-slider');?></option>  
            <option value="200" <?php if($sps_meta_fw == 200) { echo "selected"; } ?> ><?php echo esc_html__('200','spice-post-slider');?></option>
            <option value="300" <?php if($sps_meta_fw == 300) { echo "selected"; } ?> ><?php echo esc_html__('300','spice-post-slider');?></option>
            <option value="400" <?php if($sps_meta_fw == 400) { echo "selected"; } if(empty($sps_meta_fw)) { echo "selected"; } ?> ><?php echo esc_html__('400','spice-post-slider');?></option>
            <option value="500" <?php if($sps_meta_fw == 500) { echo "selected"; } ?> ><?php echo esc_html__('500','spice-post-slider');?></option>
            <option value="600" <?php if($sps_meta_fw == 600) { echo "selected"; } ?> ><?php echo esc_html__('600','spice-post-slider');?></option>
            <option value="700" <?php if($sps_meta_fw == 700) { echo "selected"; } ?> ><?php echo esc_html__('700','spice-post-slider');?></option>
            <option value="800" <?php if($sps_meta_fw == 800) { echo "selected"; } ?> ><?php echo esc_html__('800','spice-post-slider');?></option>
            <option value="900" <?php if($sps_meta_fw == 900) { echo "selected"; } ?> ><?php echo esc_html__('900','spice-post-slider');?></option>
          </select>
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font style','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_fstyle" style="display:block;">
            <option value="normal" <?php if($sps_meta_fstyle == 'normal') { echo "selected"; } ?>><?php echo esc_html__('Normal','spice-post-slider');?></option>
            <option value="italic" <?php if($sps_meta_fstyle == 'italic') { echo "selected"; } ?>><?php echo esc_html__('Italic','spice-post-slider');?></option>
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Text Transform','spice-post-slider');?>
          <select class="sps-font-select" name="sps_meta_trans" style="display:block;">
            <option value="initial" <?php if($sps_meta_trans == 'initial') { echo "selected"; } ?>><?php echo esc_html__('Default','spice-post-slider');?></option>   
            <option value="capitalize" <?php if($sps_meta_trans == 'capitalize') { echo "selected"; } ?>><?php echo esc_html__('Capitalize','spice-post-slider');?></option> 
            <option value="lowercase" <?php if($sps_meta_trans == 'lowercase') { echo "selected"; } ?>><?php echo esc_html__('Lowercase','spice-post-slider');?></option> 
            <option value="Uppercase" <?php if($sps_meta_trans == 'Uppercase') { echo "selected"; } ?>><?php echo esc_html__('Uppercase','spice-post-slider');?></option>          
          </select>
        </td>
      </tr>
    </table>  
<hr>
<!-- Read More Button -->
    <table class="sps-tbl">
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Read More','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('Typography for the read more button.','spice-post-slider');?></span></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Family','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_ff" style="display:block;">
              <?php
              foreach ($sps_font_family as $sps_key => $sps_value) { ?>
                <option value="<?php echo esc_attr($sps_key);?>" <?php if($sps_read_ff == $sps_key) { echo "selected"; } if(empty($sps_read_ff) && ($sps_key=='Poppins')) { echo "selected"; } ?> ><?php echo esc_html($sps_value);?></option>
              <?php }  ?>           
            </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Size in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_fs" style="display:block;">
              <?php
              foreach ($sps_font_size as $sps_font_size_key => $sps_font_size_value) { ?>
                <option value="<?php echo esc_attr($sps_font_size_key);?>" <?php if($sps_read_fs == $sps_font_size_key) { echo "selected"; } if( empty($sps_read_fs) && ($sps_font_size_key==15)) { echo "selected"; } ?> ><?php echo esc_html($sps_font_size_value);?></option>
                <?php } ?>
            </select> 
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Line Height in px','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_lheight" style="display:block;">
            <?php
            foreach ($sps_line_height as $sps_line_height_key => $sps_line_height_value) { ?>
              <option value="<?php echo esc_attr($sps_line_height_key);?>" <?php if($sps_read_lheight == $sps_line_height_key) { echo "selected"; } if( empty($sps_read_lheight) && ($sps_line_height_key==22)) { echo "selected"; } ?> ><?php echo esc_html($sps_line_height_value);?></option>
              
            <?php }  ?>           
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font Weight','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_fw" style="display:block;">
           <option value="100" <?php if($sps_read_fw == 100) { echo "selected"; } ?> ><?php echo esc_html__('100','spice-post-slider');?></option>   
            <option value="200" <?php if($sps_read_fw == 200) { echo "selected"; } ?> ><?php echo esc_html__('200','spice-post-slider');?></option>
            <option value="300" <?php if($sps_read_fw == 300) { echo "selected"; } ?> ><?php echo esc_html__('300','spice-post-slider');?></option>
            <option value="400" <?php if($sps_read_fw == 400) { echo "selected"; } ?> ><?php echo esc_html__('400','spice-post-slider');?></option>
            <option value="500" <?php if($sps_read_fw == 500) { echo "selected"; } if(empty($sps_read_fw)) { echo "selected"; } ?> ><?php echo esc_html__('500','spice-post-slider');?></option>
            <option value="600" <?php if($sps_read_fw == 600) { echo "selected"; } ?> ><?php echo esc_html__('600','spice-post-slider');?></option>
            <option value="700" <?php if($sps_read_fw == 700) { echo "selected"; } ?> ><?php echo esc_html__('700','spice-post-slider');?></option>
            <option value="800" <?php if($sps_read_fw == 800) { echo "selected"; } ?> ><?php echo esc_html__('800','spice-post-slider');?></option>
            <option value="900" <?php if($sps_read_fw == 900) { echo "selected"; } ?> ><?php echo esc_html__('900','spice-post-slider');?></option>     
          </select>
        </td>
      </tr>

      <tr>
        <td class="sps-td-title"></td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Font style','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_fstyle" style="display:block;">
            <option value="normal" <?php if($sps_read_fstyle == 'normal') { echo "selected"; } ?>><?php echo esc_html__('Normal','spice-post-slider');?></option>
            <option value="italic" <?php if($sps_read_fstyle == 'italic') { echo "selected"; } ?>><?php echo esc_html__('Italic','spice-post-slider');?></option>
          </select>
        </td>
        <td class="sps-td-attr-30">
          <?php echo esc_html__('Text Transform','spice-post-slider');?>
          <select class="sps-font-select" name="sps_read_trans" style="display:block;">
            <option value="initial" <?php if($sps_read_trans == 'initial') { echo "selected"; } ?>><?php echo esc_html__('Default','spice-post-slider');?></option>   
            <option value="capitalize" <?php if($sps_read_trans == 'capitalize') { echo "selected"; } ?>><?php echo esc_html__('Capitalize','spice-post-slider');?></option>
            <option value="lowercase" <?php if($sps_read_trans == 'lowercase') { echo "selected"; } ?>><?php echo esc_html__('Lowercase','spice-post-slider');?></option>
            <option value="Uppercase" <?php if($sps_read_trans == 'Uppercase') { echo "selected"; } ?>><?php echo esc_html__('Uppercase','spice-post-slider');?></option>
          </select>
        </td>
      </tr>
    </table>
  </div>

   <div id="tabs-4">
    <table class="sps-tbl">
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Icon Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change font awesome icon color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_icon_clr" name="sps_icon_clr" type="text" value="<?php if( empty($sps_icon_clr) ) { echo '#ff6f61'; } else {  echo esc_attr($sps_icon_clr); } ?>" class="sps-color-field" data-default-color="#ff6f61" />
         </td>
      </tr>
      <tr id="sps-post-meta-color" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?>>
        <td class="sps-td-title"><?php echo esc_html__('Meta Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change meta color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_meta_clr" name="sps_meta_clr" type="text" value="<?php if( empty($sps_meta_clr) ) { echo '#858585'; } else {  echo esc_attr($sps_meta_clr); } ?>" class="sps-color-field" data-default-color="#858585" />
         </td>
      </tr>
      <tr id="sps-post-meta-hover-color" <?php if($sps_slider_type=='banner_slider')echo 'class="sps-banner-slider"';?> >
        <td class="sps-td-title"><?php echo esc_html__('Meta Hover Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change meta hover color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_meta_hov_clr" name="sps_meta_hov_clr" type="text" value="<?php if( empty($sps_meta_hov_clr) ) { echo '#ff6f61'; } else {  echo esc_attr($sps_meta_hov_clr); } ?>" class="sps-color-field" data-default-color="#ff6f61" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Title Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change title color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_title_clr" name="sps_title_clr" type="text" value="<?php if( empty($sps_title_clr) ) { echo '#000000'; } else {  echo esc_attr($sps_title_clr); } ?>" class="sps-color-field" data-default-color="#000000" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Title Hover Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change title hover color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_title_hov_clr" name="sps_title_hov_clr" type="text" value="<?php if( empty($sps_title_hov_clr) ) { echo '#ff6f61'; } else {  echo esc_attr($sps_title_hov_clr); } ?>" class="sps-color-field" data-default-color="#ff6f61" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Content Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change content color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_content_clr" name="sps_content_clr" type="text" value="<?php if( empty($sps_content_clr) ) { echo '#858585'; } else {  echo esc_attr($sps_content_clr); } ?>" class="sps-color-field" data-default-color="#858585" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Button Background Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change button background color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_btn_bg_clr" name="sps_btn_bg_clr" type="text" value="<?php if( empty($sps_btn_bg_clr) ) { echo '#ffffff'; } else {  echo esc_attr($sps_btn_bg_clr); } ?>" class="sps-color-field" data-default-color="#ffffff" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Button Text Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change button text color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_btn_txt_clr" name="sps_btn_txt_clr" type="text" value="<?php if( empty($sps_btn_txt_clr) ) { echo '#000000'; } else {  echo esc_attr($sps_btn_txt_clr); } ?>" class="sps-color-field" data-default-color="#000000" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Button Background Hover Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change button background hover color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_btn_bg_hov_clr" name="sps_btn_bg_hov_clr" type="text" value="<?php if( empty($sps_btn_bg_hov_clr) ) { echo '#ff6f61'; } else {  echo esc_attr($sps_btn_bg_hov_clr); } ?>" class="sps-color-field" data-default-color="#ff6f61" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Button Text Hover Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change button text hover color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_btn_txt_hov_clr" name="sps_btn_txt_hov_clr" type="text" value="<?php if( empty($sps_btn_txt_hov_clr) ) { echo '#ffffff'; } else {  echo esc_attr($sps_btn_txt_hov_clr); } ?>" class="sps-color-field" data-default-color="#ffffff" />
         </td>
      </tr>
      <tr>
        <td class="sps-td-title"><?php echo esc_html__('Navigation/Bullets Hover Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change navigation/bullets color.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_nav_clr" name="sps_nav_clr" type="text" value="<?php if( empty($sps_nav_clr) ) { echo '#ff6f61'; } else {  echo esc_attr($sps_nav_clr); } ?>" class="sps-color-field" data-default-color="#ff6f61" />
         </td>
      </tr>

      <tr id="sps-hide-overlay-color-tr" class="<?php if($sps_banner_overlay_enable == 'no' ) echo 'sps-overlay-color-tr';?> <?php if($sps_slider_type=='blog_post_slider') echo 'sps-blog-post-slider';?>">
        <td class="sps-td-title"><?php echo esc_html__('Image Overlay Color','spice-post-slider');?>
        <span class="sps-td-span"><?php echo esc_html__('You can change overlay color of the slider image.','spice-post-slider');?></span></td>
        <td class="sps-td-attr">
          <input id="sps_banner_overlay_clr" name="sps_banner_overlay_clr" type="text" value="<?php if( empty($sps_banner_overlay_clr) ) { echo '#000000'; } else {  echo esc_attr($sps_banner_overlay_clr); } ?>" class="sps-color-field" data-default-color="#000000" />
         </td>
      </tr>
    </table>
  </div>
</div>

<script>
  jQuery(function() {
    jQuery( "#sps_slide_item_id" ).slider({
    orientation: "horizontal",
    range: "min",
    default:2,
    max: 4,
    min:1,
    slide: function( event, ui ) {
    jQuery( "#sps_slide_item" ).val( ui.value );
      }
    });
    jQuery( "#sps_slide_item_id" ).slider("value",<?php echo intval($sps_slide_item);?> );
    jQuery( "#sps_slide_item" ).val( jQuery( "#sps_slide_item_id" ).slider( "value") );
  });
</script>

<script>
jQuery(document).ready(function(){
    jQuery("#sps-choose-item-banner-btn").click(function(){
      jQuery('.sps-fetch-demo-url').hover(function(){
        var url = jQuery(this).attr('href').replace('video-slider', 'banner-slider');
        jQuery(this).attr('href',url);
      });
      jQuery("#sps-pro-banner-badge-3").show();
      jQuery("#sps-pro-banner-badge-6").show();
      jQuery("#sps-pro-banner-badge-10").show();
      jQuery("#sps-pro-banner-badge-11").show();
      jQuery('.sps-chose-item-btn ').removeClass("active");
      jQuery(this).addClass('active');
      jQuery('#sps-input-item-banner-btn').prop('checked', true);
      jQuery('#sps-input-item-post-btn').prop('checked', false);
      jQuery('#sps-input-item-video-btn').prop('checked', false);
      if(jQuery("input[name='spsp_banner_design']:checked").val()==1)
          {
            jQuery("#spsp-tag-tr").show();
            jQuery("#spsp-tag-tab").show();
          }
          jQuery("#sps-video-item").hide();
          jQuery("#sps-post-layout").hide();
          jQuery("#sps-post-item-tr").hide();
          jQuery("#sps-date-tr").hide();
          jQuery("#sps-cat-tr").hide();
          jQuery("#sps-comment-tr").hide();
          jQuery("#sps-author-tr").hide();
          jQuery("#sps-post-meta-typo").hide();
          jQuery("#sps-post-meta-color").hide();
          jQuery("#sps-post-meta-hover-color").hide();
          jQuery("#sps-hide-title-tr").show();
          jQuery("#sps-hide-desc-tr").show();
          jQuery("#sps-hide-overlay-tr").show();
          jQuery("#sps-hide-opacity-tr").show();
          jQuery("#sps-hide-overlay-color-tr").show();
          jQuery("#sps-hide-padding-tr").show();
          jQuery("#sps-hide-slide-height-tr").show();
          jQuery("#sps-banner-layout").show();
          jQuery("#sps-img-type").show();
    });

    jQuery("#sps-choose-item-post-btn").click(function(){
      jQuery('.sps-chose-item-btn ').removeClass("active");
      jQuery(this).addClass('active');
      jQuery('#sps-input-item-post-btn').prop('checked', true);
      
      jQuery('#sps-input-item-banner-btn').prop('checked', false);
      jQuery('#sps-input-item-video-btn').prop('checked', false);
          if(jQuery("input[name='spsp_banner_design']:checked").val()==1)
          {
            jQuery("#spsp-tag-tr").hide();
            jQuery("#spsp-tag-tab").hide();
          }
          //jQuery("input[name='spsp_slide_design']:checked").val()
          jQuery("#sps-post-item-tr").show();
          jQuery("#sps-date-tr").show();
          jQuery("#sps-cat-tr").show();
          jQuery("#sps-comment-tr").show();
          jQuery("#sps-author-tr").show();
          jQuery("#sps-post-meta-typo").show();
          jQuery("#sps-post-meta-color").show();
          jQuery("#sps-post-meta-hover-color").show();
          jQuery("#sps-post-layout").show();
          jQuery("#sps-img-type").show();
          jQuery("#sps-hide-title-tr").hide();
          jQuery("#sps-hide-desc-tr").hide();
          jQuery("#sps-hide-overlay-tr").hide();
          jQuery("#sps-hide-opacity-tr").hide();
          jQuery("#sps-hide-overlay-color-tr").hide();
          jQuery("#sps-hide-padding-tr").hide();
          jQuery("#sps-hide-slide-height-tr").hide();
          jQuery("#sps-banner-layout").hide();
          jQuery("#sps-video-item").hide();
    });

    jQuery("#sps-choose-item-video-btn").click(function(){
      jQuery('.sps-fetch-demo-url').hover(function(){
        var url = jQuery(this).attr('href').replace('banner-slider', 'video-slider');
        jQuery(this).attr('href',url);
      });
      jQuery("#sps-pro-banner-badge-3").hide();
      jQuery("#sps-pro-banner-badge-6").hide();
      jQuery("#sps-pro-banner-badge-10").hide();
      jQuery("#sps-pro-banner-badge-11").hide();
      jQuery('.sps-chose-item-btn ').removeClass("active");
      jQuery(this).addClass('active');
      jQuery('#sps-input-item-video-btn').prop('checked', true);
      jQuery('#sps-input-item-banner-btn').prop('checked', false);
      jQuery('#sps-input-item-post-btn').prop('checked', false);

          jQuery("#sps-video-item").show();
          jQuery("#sps-post-item-tr").hide();
          jQuery("#sps-img-type").hide();
          jQuery("#sps-post-layout").hide();   // Post Design
          jQuery("#sps-banner-layout").show(); // Banner Design
      
    });
});
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('input[name="sps_banner_overlay_enable"]:radio').change(function () {
        var x =jQuery("input[name='sps_banner_overlay_enable']:checked").val();
        if(x == 'yes'){
          jQuery("#sps-hide-opacity-tr").show();
          jQuery("#sps-hide-overlay-color-tr").show();
        }else{
          jQuery("#sps-hide-opacity-tr").hide();
          jQuery("#sps-hide-overlay-color-tr").hide();
        }
    });
});
</script>