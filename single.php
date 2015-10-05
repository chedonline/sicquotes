<?php get_header(); ?>
<?php the_post(); ?>	


<div class="pattern">
	<?php include (TEMPLATEPATH . '/inc/quote.php'); ?>
</div><!-- .pattern -->


<div class="container-fluid ">
    <div class="row-fluid">
        <div class="span12">
            <a href="/" id="refresh-link" class="btn btn-primary btn-large"><i class="icon-refresh"></i> I want another one!</a>
        </div>
    </div><!-- .row-fluid -->
</div> <!-- .container-fluid -->



<?php get_footer(); ?>