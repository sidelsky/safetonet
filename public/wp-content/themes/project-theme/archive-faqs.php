
<?php
/**
 * Archive FAQs
 */

include("header.php");
?>

<section class="u-section">
    <div class="u-l-container--center">   
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">   
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_title(); ?>
        <?php endwhile; endif; ?>

        </div>
    </div>
</section>

<?php include("footer.php"); ?>