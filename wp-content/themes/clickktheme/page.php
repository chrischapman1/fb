<?php
get_header();
?>
<h1>
    <?php the_title() ?>
</h1>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'page');
    }
}
?>



<?php
get_footer()
?>