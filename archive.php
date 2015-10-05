<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <div id="archive" class="pattern">

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
            <div id="page-head" class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                       <h1 class="page-title"><?php single_cat_title(); ?> Quotes</h1>
                       
					   <?php $category = get_the_category(); ?>
                       <?php  if (category_description( $category ) == '') : ?>
						<?php else : ?>
                           <p id="description-large">
                               <?php echo strip_tags(category_description( $category[0]->term_id ) ); ?>
                           </p>
                       <?php endif ?>
                    </div>
                </div><!-- .row-fluid -->
            </div><!-- .container-fluid -->
            
        <?php /* If this is a tag archive */ } elseif (is_tag()) { ?>
            <div id="page-head" class="container-fluid">
                <div class="row-fluid">
                    <div class="span9">
                       <h1 class="page-title">Quotes about &#8216;<?php single_tag_title(); ?>&#8217;</h1>
                    </div>
                </div><!-- .row-fluid -->
            </div><!-- .container-fluid -->
           
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
           <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
           <h2>Archive for <?php the_time('F, Y'); ?></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
           <h2>Archive for <?php the_time('Y'); ?></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
           <h2>Author Archive</h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
           <h2>Blog Archives</h2>
        <?php } ?>
    
    
		<?php while (have_posts()) : the_post(); ?>
            <?php include (TEMPLATEPATH . '/inc/quote.php'); ?>
        <?php endwhile; ?>
    </div><!-- .pattern -->
    
    <div class="pagination">
       <span class="older"><?php next_posts_link('&laquo; Older Entries') ?></span>
       <span class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
    </div>

<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		
endif; ?>

<div class="container-fluid ">
    <div class="row-fluid">
        <div class="span12">
            <a href="/" id="refresh-link" class="btn btn-primary btn-large"><i class="icon-refresh"></i> I want another quote!</a>
        </div>
    </div><!-- .row-fluid -->
</div> <!-- .container-fluid -->


<?php get_footer(); ?>