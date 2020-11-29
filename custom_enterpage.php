<?php
/**
 * Template Name: Startseite mit Bild
 * Author: Simon Uhrmann, DPSG Salzweg
 * Description: Das Bild das angezeigt wird, ist das Beitragsbild, das auf die Breite skaliert wird.
 */

get_header();

    the_post(); ?>
    <div class="row">
        <!-- enterpage Bild -->
        <div class="col-xs-12 col-sm-12 col-lg-12 text-center">

            <!-- Page content -->
            <?php dpsg_content_edit(); ?>

        </div>

        <p>&nbsp;</p>

        <div class="content col-xs-12 col-sm-6 col-lg-8">
            <article class="post">
                <div>
                    <!-- Übersicht aller Beiträge -->
                    <?php
                    $home_page_id = get_option('page_for_posts');
                    $wp_query = new WP_Query( array( 'page_id' => $home_page_id ) );
                    get_template_part('loop');
                    ?>
                </div>
            </article><!-- /.post -->

        </div><!-- /.col-xs-6 -->

        <?php get_sidebar(); ?>
    </div><!-- /.row -->
<?php get_footer(); ?>
