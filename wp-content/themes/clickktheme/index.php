<?php
get_header();
?>
<h1>
    Blog Page
</h1>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'archive');
    }
}
?>



<?php
get_footer()
?>