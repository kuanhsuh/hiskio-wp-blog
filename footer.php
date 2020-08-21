<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiskio-blog-finished
 */

?>
<footer class="py-10 text-xs font-medium tracking-wide border-t border-gray-300 mt-6">
  <div class="container mx-auto">
    <div class="flex sm:-mx-6">
      <div class="w-full px-6">
        &copy;2020 Big Boy
      </div>
    </div>
  </div>
</footer>

<script>
  function toggleMenu() {
    var navList = document.querySelector('#responsive')
    navList.classList.toggle('hidden')
  }
</script>

<?php wp_footer(); ?>

</body>

</html>