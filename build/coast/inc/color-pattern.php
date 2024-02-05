<?php

/**
 * Coast Pro: Color Patterns
 *
 * @package WordPress
 * @subpackage Coast Pro
 * @since 1.0
 */

/**
 * Generate the CSS for the current custom color scheme.
 */
function coast_pro_custom_colors_css()
{
	$options = coast_pro_get_theme_options();

	$color_value = $options['colorscheme_hue'];

	$css = '
	.backtotop,
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	.main-navigation .count,
	.main-navigation .search-form .search-submit:hover,
	.main-navigation .search-form .search-submit:focus,
	.menu-toggle:hover,
	.menu-toggle:focus,
	.pagination .page-numbers.current,
	.pagination .page-numbers:hover,
	.pagination .page-numbers:focus,
	.author-name:after,
	.reply a,
	.btn,
	.slick-dots li.slick-active button,
	.featured-slider .read-more a:hover,
	.featured-slider .read-more a:focus,
	.single-wrapper .entry-meta>span.tags-links a:hover,
	.single-wrapper .entry-meta>span.tags-links a:focus,
	span.discount-offer,
	.dark-version .pagination .page-numbers.current,
	.dark-version .pagination .page-numbers:hover,
	.dark-version .pagination .page-numbers:focus,
	#subscribe-email:after,
	.btn:after,
	.slick-prev:hover,
	.slick-next:hover,
	.slick-prev:focus,
	.slick-next:focus,
	#coast_pro_partners .slick-arrow:hover,
	#coast_pro_partners .slick-arrow:focus,
	.main-navigation .header-button ul li:nth-child(2) a:hover,
	.main-navigation .header-button ul li:nth-child(2) a:focus,
	.wp-travel-search input[type="submit"],
	#coast_pro_destinations article .btn:hover,
	#coast_pro_destinations article .btn:focus,
	#coast_pro_experience .btn:hover,
	#coast_pro_experience .btn:focus,
	#coast_pro_testimonials .slick-arrow:hover,
	#coast_pro_testimonials .slick-arrow:focus,
	#coast_pro_get_started,
	#coast_pro_timer #timer,
	#coast_pro_testimonial_section .slick-arrow:hover,
	#coast_pro_testimonial_section .slick-arrow:focus,
	#wp-travel-tab-content-bookings .my-order .book-more a,
	#wp-travel-tab-content-bookings .my-order table.order-list-table td .contact-title a,
	#coast_pro_event_schedules article:nth-child(odd):before,
	#coast_pro_event_schedules article:nth-child(even):before,
	#coast_pro_event_schedules article:nth-child(odd):after,
	#coast_pro_event_schedules article:nth-child(even):after,
	ul.product-nav li.active a,
	ul.product-nav li a.active,
	ul.product-nav li a:hover,
	ul.product-nav li a:focus,
	#coast_hero_banner .hero-banner-play-video-button .search-submit,
	.testimonial-slider .seperator,
	.dark-version .slick-prev:hover, .dark-version .slick-next:hover, .dark-version .slick-prev:focus, .dark-version .slick-next:focus,
	.wptravel-layout-v2 .wptravel-archive-wrapper .view-box .view-image .offer,
	.mfp-content .wp-travel-form-field input[type=submit],
	.wp-travel-explore .wp-block-button__link,
	.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background),
	#subscribe-now .wp-block-button__link,
	.wptravel-layout-v2 .wptravel-archive-wrapper.grid-view .view-box .view-content .right-content .explore-btn {
	    background-color: ' . esc_attr($color_value) . ';
	}

	.dashboard-tab ul.resp-tabs-list li.resp-tab-active {
	    box-shadow: inset 2px 0px 0 ' . esc_attr($color_value) . ';
	}

	#wp-travel-tab-content-bookings .my-order .book-more a:hover,
	#wp-travel-tab-content-bookings .my-order table.order-list-table td .contact-title a:hover,
	#coast_hero_banner .hero-banner-play-video-button .search-submit:hover {
	    background-color: #fff;
	    color: #000;
	}

	#coast-blog .posted-on a {
		color:  ' . esc_attr($color_value) . ';
	  }
	  #coast-blog .entry-title a{
		color:#000;
	  }
	  
	.dark-version #coast-blog .posted-on a,
	.mfp-content .wp-travel-form-field input[type=submit] {
	color: #fff;
	}
	
	#subscribe-now .btn {
	border: solid 1px #fff;
	padding: 18px 32px;
	}

	a:hover,
	.site-title a:hover,
	.site-title a:focus,
	.main-navigation ul.nav-menu li:hover>a,
	.main-navigation ul.nav-menu li:focus>a,
	.main-navigation a:hover,
	.main-navigation a:focus,
	.main-navigation ul.nav-menu>li>a:hover,
	.main-navigation ul.nav-menu>li>a:focus,
	.post-navigation a,
	.posts-navigation a,
	.navigation.post-navigation a:hover,
	.navigation.posts-navigation a:hover,
	.navigation.post-navigation a:focus,
	.navigation.posts-navigation a:focus,
	#secondary ul li a:hover,
	#secondary ul li a:focus,
	.page-header small,
	.posted-on a:hover,
	.posted-on a:focus,
	#secondary .posted-on a:hover,
	#secondary .posted-on a:focus,
	.single-wrapper span.tags-links a:hover,
	.single-wrapper span.tags-links a:focus,
	.comment-metadata a:hover,
	.comment-metadata a:focus,
	.comment-meta .url:hover,
	.comment-meta .url:focus,
	.section-subtitle,
	.section-title a:hover,
	.section-title a:focus,
	.entry-title a,
	.entry-title a:hover,
	.entry-title a:focus,
	.product_meta a:hover,
	.product_meta a:focus,
	.archive-blog-wrapper .post-footer-meta a:hover,
	.archive-blog-wrapper .post-footer-meta a:focus,
	.product_meta a:hover,
	.product_meta a:focus,
	#colophon a:hover,
	#colophon a:focus,
	#colophon .site-info a,
	#colophon .site-info a:not(:first-child):hover,
	#colophon .site-info a:not(:first-child):focus,
	.entry-meta span:not(:last-child):after,
	.main-navigation .header-button ul li:not(:last-child) a:hover,
	.main-navigation .header-button ul li:not(:last-child) a:focus,
	#coast_pro_hero_banner .image .entry-title a:hover,
	#coast_pro_hero_banner .image .entry-title a:focus,
	#coast_pro_destinations .trip-price ins span span,
	#coast_pro_experience p.subtitle,
	#coast_pro_download_data p.subtitle,
	#coast_pro_experience .counter-value,
	#coast_pro_about_section p.subtitle,
	#coast_pro_featured_section p.subtitle,
	#coast_pro_about_section .counter-value,
	#coast_pro_about_section p.subtitle,
	#coast_pro_blog_section .read-more,
	#coast_pro_featured_section p.subtitle,
	#coast_pro_about_section .counter-value,
	#coast_pro_blog .read-more,
	.coast_pro_destination_section-slider .entry-title a:hover,
	ul.post-categories li a:hover,
	ul.post-categories li a:focus,
	.dark-version .entry-title a:hover,
	.dark-version .entry-title a:focus,
	.dark-version .section-subtitle,
	.dark-version ul.post-categories li a:hover,
	.dark-version ul.post-categories li a:focus,
	#coast_pro_blog_slider ul.post-categories li a:hover,
	#coast_pro_blog_slider ul.post-categories li a:focus,
	#coast_pro_blog_slider .posted-on a:hover,
	#coast_pro_blog_slider .posted-on a:focus,
	.featured-content-wrapper .entry-title a:hover,
	.featured-content-wrapper .entry-title a:focus,
	.dark-version .byline a:hover,
	.dark-version .byline a:focus,
	.dark-version.second-design .posted-on a:hover,
	.dark-version.second-design .posted-on a:focus,
	.dark-version ul.post-categories li a:hover,
	.dark-version ul.post-categories li a:focus,
	.dark-version #secondary ul li a:hover,
	.dark-version #secondary ul li a:focus,
	.third-design ul.post-categories li a,
	.dark-version .location a:hover,
	.dark-version .location a:focus,
	#coast_pro_we_have .we-have-title,
	#coast_pro_department .department-icon i,
	.archive-blog-wrapper .read-more,
	.dark-version a:hover,
	.dark-version a:focus,
	.dark-version .navigation.post-navigation a:hover,
	.dark-version .navigation.post-navigation a:focus,
	#coast_pro_medical_product .trip-price,
	#wp-travel-tab-content-bookings .my-order table.order-list-table td .name-title a,
	#wp-travel-tab-content-bookings .my-order table.my-order-payment-details td .name-title a,
	.mfp-content .my-order table.order-list-table td .name-title a,
	.mfp-content .my-order table.my-order-payment-details td .name-title a,
	.dark-version .comment-meta .url:hover,
	.dark-version .comment-meta .url:focus,
	.coast-rate:not(:checked)>label:hover,
	.coast-rate:not(:checked)>label:hover~label,
	.entry-title a:hover,
	#coast_counter .counter-item h2,
	#coast-interest article:hover .entry-title a,
	#coast-interest article:focus .entry-title,
	#coast-blog .posted-on a:hover {
	    color: ' . esc_attr($color_value) . ';
	}

	.btn,
	#wp-travel-tab-content-bookings .my-order table.order-list-table td .name-title a:hover,
	#wp-travel-tab-content-bookings .my-order table.order-list-table td .name-title a:focus,
	.dark-version.third-design ul.post-categories li a:hover,
	.dark-version.third-design ul.post-categories li a:focus,
	#subscribe-now h2.section-title,
	#subscribe-now .section-subtitle {
	    color: #fff;
	}



	.loader-container svg,
	.main-navigation ul.nav-menu li:hover>svg,
	.main-navigation ul.nav-menu li:focus>svg,
	.main-navigation li.menu-item-has-children:hover>a>svg,
	.main-navigation li.menu-item-has-children>a:hover>svg,
	.main-navigation li.menu-item-has-children>a:focus>svg,
	.main-navigation ul.nav-menu>li.current-menu-item>a>svg,
	.main-navigation ul.nav-menu>li>a.search:hover svg.icon-search,
	.main-navigation ul.nav-menu>li>a.search:focus svg.icon-search,
	.main-navigation li.search-menu a:hover svg,
	.main-navigation li.search-menu a:focus svg,
	.main-navigation li.search-menu a.search-active svg,
	.navigation.post-navigation a:hover svg,
	.navigation.posts-navigation a:hover svg,
	.navigation.post-navigation a:focus svg,
	.navigation.posts-navigation a:focus svg,
	.widget_search form.search-form button.search-submit:hover svg,
	.widget_search form.search-form button.search-submit:focus svg,
	.single-wrapper span.posted-on svg,
	.single-wrapper span.cat-links svg,
	#colophon .social-icons li a svg,
	.entry-fee span svg ,
	#coast_hero_banner .video-icon svg circle {
	    fill: ' . esc_attr($color_value) . ';
	}

	.main-navigation ul.sub-menu li a:hover,
	.main-navigation ul.sub-menu li a:focus{
	    color: ' . esc_attr($color_value) . ' !important;
	}

	.main-navigation ul.sub-menu li a:hover svg,
	.main-navigation ul.sub-menu li a:focus svg{
	    fill: ' . esc_attr($color_value) . ' !important;
	}

	.dark-version .btn:hover, 
	.dark-version .btn:focus {
	    background-color: #fff;
	    border-color: #fff;
	    color: #000;
	}

	#coast_pro_about_section .btn:hover, 
	#coast_pro_about_section .btn:focus,
	.btn-wp-travel-filter,
	.wp-element-button,
	.wp-travel-form-field input[type="submit"],
	.wp-travel.trip-headline-wrapper .wptravel-book-your-trip,
	#coast_pro_popular_destination_section article .btn:hover, 
	#coast_pro_popular_destination_section article .btn:focus,
	#coast_pro_destination_section .slick-prev:hover, #coast_pro_destination_section .slick-next:hover, #coast_pro_destination_section .slick-prev:focus, #coast_pro_destination_section .slick-next:focus{
	    background-color: ' . esc_attr($color_value) . '; 
	    border-color: ' . esc_attr($color_value) . ';
	}
	
	#coast_pro_speaker .speaker-item-wrapper,
	#coast_pro_partners .slick-arrow,
	#coast_pro_testimonial_section .slick-arrow,
	.pagination .page-numbers.current,
	.pagination .page-numbers:hover,
	.pagination .page-numbers:focus,
	.single-wrapper span.tags-links a:hover,
	.single-wrapper span.tags-links a:focus,
	.slick-dots li button,
	.single-wrapper .entry-meta>span.tags-links a:hover,
	.single-wrapper .entry-meta>span.tags-links a:focus,
	.dark-version .pagination .page-numbers.current,
	.dark-version .pagination .page-numbers:hover,
	.dark-version .pagination .page-numbers:focus,
	.btn,
	.main-navigation .header-button ul li:nth-child(2) a:hover,
	.main-navigation .header-button ul li:nth-child(2) a:focus,
	.wp-travel-search input[type="submit"],
	#coast_pro_destinations article .btn:hover,
	#coast_pro_destinations article .btn:focus,
	#coast_pro_experience .btn:hover,
	#coast_pro_experience .btn:focus,
	#coast_pro_testimonials .slick-arrow,
	#coast_pro_upcoming_event .entry-container,
	.dark-version .slick-prev, .dark-version .slick-next {
	    border-color: ' . esc_attr($color_value) . ';
	}

	#coast_pro_latest_event article:hover {
	    background-image: linear-gradient(rgb(3 169 245 / 72%), rgb(3 169 245 / 27%));
	}

	@media screen and (min-width: 1024px) {
	    .main-navigation ul.nav-menu > li > a.custom-button:hover,
	    .main-navigation ul.nav-menu > li > a.custom-button:focus,
	    .main-navigation ul.nav-menu > li.current-menu-item > a:hover:before, 
	    .main-navigation ul.nav-menu > li.current-menu-item > a:focus:before {
	        background-color: ' . esc_attr($color_value) . ';
	    }
	    .dark-version .main-navigation ul.nav-menu > li:hover > a, 
	    .dark-version .main-navigation ul.nav-menu > li:focus > a {
	        color: ' . esc_attr($color_value) . ';
	    }
	    .dark-version .main-navigation li.menu-item-has-children:hover > a > svg,
	    .dark-version .main-navigation li.menu-item-has-children:focus > a > svg {
	        fill: ' . esc_attr($color_value) . ';
	    }
	}

	@keyframes preloader {
	    0% {height:5px;transform:translateY(0px);background: ' . esc_attr($color_value) . ';}
	    25% {height:30px;transform:translateY(15px);background: ' . esc_attr($color_value) . ';}
	    50% {height:5px;transform:translateY(0px);background: ' . esc_attr($color_value) . ';}
	    100% {height:5px;transform:translateY(0px);background: ' . esc_attr($color_value) . ';}
	}';

	/**
	 * Filters Coast Pro custom colors CSS.
	 *
	 * @since Coast Pro 1.0.0
	 *
	 * @param string $css        Base theme colors CSS.
	 */
	return apply_filters('coast_pro_custom_colors_css', $css);
}
