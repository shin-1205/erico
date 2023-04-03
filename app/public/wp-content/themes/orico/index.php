<?php get_header(); ?>
<?php if(is_home() || is_front_page()): ?>
<?php get_template_part('front-page'); ?>
<?php else: ?>
<?php get_template_part('404'); ?>
<?php endif; ?>
<?php get_footer();