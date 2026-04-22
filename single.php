<?php get_header(); ?>

<main class="container" style="max-width: 800px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="post-header" style="margin-bottom: 2rem;">
                <h1 style="font-size: 2.5rem; color: #ffffff; margin-bottom: 1rem;"><?php the_title(); ?></h1>
                <div class="post-meta" style="color: #64748b; font-size: 0.9rem;">
                    <span><?php echo get_the_date(); ?></span> • 
                    <span>By <?php the_author(); ?></span>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-image" style="margin-bottom: 2.5rem;">
                    <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; border-radius: 16px; height: auto;' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #cbd5e1;">
                <?php the_content(); ?>
            </div>

            <footer class="post-footer" style="margin-top: 4rem; padding-top: 2rem; border-top: 1px solid #1e293b;">
                <?php the_tags( '<div class="tags" style="color: #ff6b35;">Tags: ', ', ', '</div>' ); ?>
            </footer>
        </article>

        <?php 
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
