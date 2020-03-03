<?php
    get_header();

    echo "<h1> Nos événements importants cette année </h1>";

    if ( have_posts() ) :
        echo '<div class="container-evenements">';
            while ( have_posts() ) : the_post();
            echo '
            <article class="articles-evenements" style="">
                <div class="content-post">
                    <h3 class="title-article"><a target=_blank href='.get_the_permalink().'>'.substr(get_the_title(), 0, 20).'</a></h3>
                    <h4 class=post-date>'.get_the_date().'</h4>
                </div>
            </article>
            ';
            endwhile;
        echo '</div>';
    endif;

    get_footer();
?>