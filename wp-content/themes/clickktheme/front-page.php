<?php
get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
<h1>test</h1>


<?php
get_footer()
?>