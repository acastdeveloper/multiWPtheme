<!-- HOME,
Será la plantilla que mostrará WordPress en caso de tener activa la opción Mostrar página estática como página de inicio. Este archivo está pensado para casos en los que la página de inicio es una página estática, como puede ser la página de inicio de un site corporativo.
-->

<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Listado de posts -->
HOME
<?php if ( have_posts() ) : ?>
<section>
    <?php while ( have_posts() ) : the_post(); ?>
    <article>
        <header>
            <h1>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        </header>
        <?php the_excerpt(); ?>
        <footer>
            <address>Por <?php the_author_posts_link() ?></address>
        </footer>
    </article>
    <?php endwhile; ?>
    <div class="pagination">
        <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
        <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
</section>
<?php else : ?>
<p>
    <?php _e('Ups!, no hay entradas.'); ?>
</p>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
