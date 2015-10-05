<?php get_header(); ?>


<?php
$word = new WP_Query(); 
$word -> query( array(
	//'post_parent' => 694,
	//'post_type' => 'page', 
	//'order' =>  'ASC',
	//'include' => '11',
	//'cat' => '4',
	'showposts' => 1, 
	'orderby' =>  'rand' 
) );


?>

<div class="pattern">
	<?php while ($word->have_posts()) : $word->the_post(); ?>
        <?php include (TEMPLATEPATH . '/inc/quote.php'); ?>
    <?php endwhile; ?>
</div><!-- .pattern -->


<div class="container-fluid ">
    <div class="row-fluid">
        <div class="span12">
            <a href="/" id="refresh-link" class="btn btn-primary btn-large"><i class="icon-refresh"></i> I want another quote!</a>
        </div>
    </div><!-- .row-fluid -->
</div> <!-- .container-fluid -->


<?php get_footer(); ?>