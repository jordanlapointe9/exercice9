<?php
    get_header();

    echo "<h1> Nos événements importants cette année </h1>";

    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        echo '
            <article class="articles-evenements" style="">

                <h3 class="title-article"><a target=_blank href='.get_the_permalink().'>'.get_the_title().'</a></h3>
                <h4 class=post-date>'.get_the_date().'</h4>
            </article>
            ';
        endwhile;
    endif;

    get_footer();
?>