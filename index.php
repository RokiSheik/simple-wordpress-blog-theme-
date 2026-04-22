<?php get_header(); ?>

<main class="container">
    <h1 style="margin-bottom: 2rem; color: #ffffff;"><?php esc_html_e( 'Latest Recipes & Articles', 'easyplate' ); ?></h1>

    <div class="post-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'medium', array( 'class' => 'post-thumb' ) ); ?>
                    <?php else : ?>
                        <div class="post-thumb" style="display: flex; align-items: center; justify-content: center; background: #1e293b; color: #475569;">
                            <span style="font-size: 3rem;">🍲</span>
                        </div>
                    <?php endif; ?>
                </a>

                <div class="post-content">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <div class="post-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="read-more">
                        <?php esc_html_e( 'Read More →', 'easyplate' ); ?>
                    </a>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'No posts found.', 'easyplate' ); ?></p>
        <?php endif; ?>
    </div>

    <div class="pagination" style="margin-top: 3rem; display: flex; gap: 1rem; color: #94a3b8;">
        <?php the_posts_pagination( array(
            'prev_text' => __( '← Previous', 'easyplate' ),
            'next_text' => __( 'Next →', 'easyplate' ),
        ) ); ?>
    </div>
</main>

<?php get_footer(); ?>
