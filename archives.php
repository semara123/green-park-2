<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="container">
<div id="content">

    <div class="hentry post">
        <h1><?php _e('Archives by Month', 'greenpark'); ?></h1>
        <div class="entry">
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>

        <h1><?php _e('Archives by Subject', 'greenpark'); ?></h1>
        <div class="entry">
            <ul>
                <?php wp_list_categories('title_li=&depth=-1'); ?>
            </ul>
        </div>
    </div>

</div>
</div>

<?php if(get_option('greenpark2_sidebar_disablesidebar') != true) get_sidebar(); ?>
<?php get_footer(); ?>