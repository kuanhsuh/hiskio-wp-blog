<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiskio-blog-finished
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="py-4 uppercase text-xs font-medium">
    <div class="container px-6 sm:px-0 mx-auto">
      <div class="flex flex-wrap justify-between items-center">
        <div class="logo">
          <img src="<?php echo get_theme_file_uri('/assets/img/logo.png') ?>" class="h-8 md:h-16 rounded" alt="">
        </div>
        <div class="md:hidden">
          <button type="button" onclick="toggleMenu()" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
              <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
            </svg>
          </button>
        </div>

        <ul id="responsive" class="md:flex hidden flex-col md:flex-row  w-full text-center sm:text-left sm:w-auto">
          <li class="py-2 sm:py-0 sm:mr-16">Home</li>
          <li class="py-2 sm:py-0 sm:mr-16"><a href="<?php echo esc_html(site_url("/")) ?>">Blog</a></li>
          <li class="py-2 sm:py-0 ">Contact</li>
        </ul>
      </div>
    </div>
  </nav>