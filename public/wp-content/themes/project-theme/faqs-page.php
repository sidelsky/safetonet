
<?php
/**
 * Template name: FAQs
 */

include("header.php");
?>

<section class="u-section">
    <div class="u-l-container--center">   
        <div class="u-l-container u-l-horizontal-padding u-l-vertical-padding">

        	<?php
            $args = [
                'post_type' => 'faqs',
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'DEC'
            ];
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <a href="<?php echo the_permalink(); ?>" style="display:block"><?php the_title(); ?></a>
                    
            <?php
			endwhile; 
			?>

        <?php /*
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_title(); ?>
            <?php endwhile; endif; ?>
        */ ?>

        </div>
    </div>
</section>

<?php include("footer.php"); ?>