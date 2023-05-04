<?php


$spa_salon_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$spa_salon_text_transform = get_theme_mod( 'menu_text_transform_spa_salon','UPPERCASE');
    if($spa_salon_text_transform == 'CAPITALISE'){

		$spa_salon_custom_css .='#main-menu ul li a{';

			$spa_salon_custom_css .='text-transform: capitalize ; font-size: 14px;';

		$spa_salon_custom_css .='}';

	}else if($spa_salon_text_transform == 'UPPERCASE'){

		$spa_salon_custom_css .='#main-menu ul li a{';

			$spa_salon_custom_css .='text-transform: uppercase ; font-size: 14px;';

		$spa_salon_custom_css .='}';

	}else if($spa_salon_text_transform == 'LOWERCASE'){

		$spa_salon_custom_css .='#main-menu ul li a{';

			$spa_salon_custom_css .='text-transform: lowercase ; font-size: 14px;';

		$spa_salon_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

	$spa_salon_container_width = get_theme_mod('spa_salon_container_width');

			$spa_salon_custom_css .='body{';

				$spa_salon_custom_css .='width: '.esc_attr($spa_salon_container_width).'%; margin: auto;';

			$spa_salon_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

	$spa_salon_slider_content_alignment = get_theme_mod( 'spa_salon_slider_content_alignment','LEFT-ALIGN');

	 if($spa_salon_slider_content_alignment == 'LEFT-ALIGN'){

			$spa_salon_custom_css .='.blog_box{';

				$spa_salon_custom_css .='text-align:left;';

			$spa_salon_custom_css .='}';


		}else if($spa_salon_slider_content_alignment == 'CENTER-ALIGN'){

			$spa_salon_custom_css .='.blog_box{';

				$spa_salon_custom_css .='text-align:center;';

			$spa_salon_custom_css .='}';


		}else if($spa_salon_slider_content_alignment == 'RIGHT-ALIGN'){

			$spa_salon_custom_css .='.blog_box{';

				$spa_salon_custom_css .='text-align:right;';

			$spa_salon_custom_css .='}';

		}
