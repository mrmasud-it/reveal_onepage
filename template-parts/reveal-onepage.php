<?php

/**
 * Template Name: Reveal Onepage
 */
get_header();
?>
<div class="container">
    <?php
    // Strat loop
    while (have_posts()) :
        the_post();

        the_content();

    endwhile;
    ?>
</div>
<?php
get_footer();
