<?php get_header(); ?>

<main class="container single-post-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="post-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="post-date"><?php echo get_the_date(); ?></span> • 
                    <span class="post-author">By <?php the_author(); ?></span>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-featured-image">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="post-footer">
                <?php the_tags( '<div class="tags">Tags: ', ', ', '</div>' ); ?>
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
