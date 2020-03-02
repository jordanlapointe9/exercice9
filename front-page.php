<?php
//Appel du header
get_header();

?>
<!-- Figure qui contrôle le cadre de l'image de mise en avant -->
<figure class="figure-post-thumbnail">
    
    <?php 
    //Appel de la fonction qui affiche l'image de mise en avant
    tp2_veille_post_thumbnail(); 
    ?>
</figure>

<?php
//Appel du footer
get_footer();
?>