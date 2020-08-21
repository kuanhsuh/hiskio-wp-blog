<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hiskio-blog-finished
 */

get_header();
while (have_posts()) : the_post(); ?>
  <section class="container mx-auto">
    <div class="flex flex-wrap md:-mx-6">
      <main class="w-full lg:w-9/12 px-6">
        <?php the_post_thumbnail('large', ['class' => 'w-full']); ?>
        <h2 class="article-heading"><?php the_title(); ?></h2>
        <div class="article-date"><?php the_author_nickname(); ?> / <?php echo get_the_date(); ?></div>
        <div class="mt-2 article-text"><?php the_content(); ?>
        </div>
      </main>

      <aside class="w-full lg:w-3/12 px-6 mt-8 sm:mt-0">
        <h3 class="heading-h3">Recent Posts</h3>
        <ul class="text-gray-600 text-sm">
          <li class="aside-li">Balance is important in design</li>
          <li class="aside-li">Tips for organizing things</li>
          <li class="aside-li">The shades of grey</li>
          <li class="aside-li">Inspiration from nature</li>
        </ul>
        <h3 class="heading-h3 mt-8">Categories</h3>
        <ul class="text-gray-600 text-sm">
          <li class="aside-li">Artificial</li>
          <li class="aside-li">Inspirational</li>
          <li class="aside-li">Intelligence</li>
          <li class="aside-li">Motivational</li>
        </ul>
      </aside>
    </div>
  </section>

<?php endwhile; ?>
<?php
get_footer();
