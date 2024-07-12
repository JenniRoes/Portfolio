<?php
get_header();
?>

<div class="container">
    <h1><?php post_type_archive_title(); ?></h1>
    <div class="proyectos-grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="proyecto-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="proyecto-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="proyecto-content">
                            <h2 class="title-card"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No projects found', 'text_domain' ); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>

