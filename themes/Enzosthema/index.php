<?php
get_header();
?>

<main class="container my-5">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
    <h1 class="mt-5"><?php the_title()?></h1>
    <div class="col-lg-8 px-0">
        <?php the_excerpt() ?>
    </div>
</main>
<?php
endwhile;

else:
    echo 'Wat je zoekt is niet te vinden';
endif;
get_footer();
