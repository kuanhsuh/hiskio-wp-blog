<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiskio-blog-finished
 */

get_header();
?>

<section class="container mx-auto">
  <div class="flex flex-wrap sm:-mx-6">
    <main class="w-full lg:w-9/12 px-6">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article>
            <img src="./img/blog-cover-1.jpg" alt="" class="w-full">
            <h2 class="article-heading"><?php the_title(); ?></h2>
            <div class="article-date">By <?php the_author the_author_meta('nickname')_nickname(); ?> / <?php echo get_the_date(); ?></div>
            <div class="mt-2 article-text"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
          </article>
        <?php endwhile;
      else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
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

<?php
get_footer();
