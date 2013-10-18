<?php get_header(); ?>
<div id="content" class="wrapper site-width center">
    <div class="section float-left span75">
        <section>
            <?php if ( have_posts() ) : ?>

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

                <?php devninjas_paging_nav(); ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </section>
        <div class="clearfix"></div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>