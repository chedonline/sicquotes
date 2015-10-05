    <footer id="footer" class="main container_12 clear"></footer>
</div>
  
<?php /*  
        
<div id="top-trim" class="animated fadeInDown">
    <div class="container_12 clearfix">
        <div class="grid_6" style="margin-left:1%">
            <a class="chedonline-link" href="http://chedonline.com">A <strong>CHEDONLINE</strong> Project</a>                
        </div>

        <div id="share-this" class="grid_6">

            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" addthis:url="http://helveticurse.com" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet" addthis:url="http://helveticurse.com"></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=chedonline"></script>
            <!-- AddThis Button END -->            
        </div>
    </div>
</div>

*/ ?>

</div><!-- #page-wrap -->
	
	
<?php wp_footer(); ?>


<!-- JQUERY -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!-- LETTERING -->
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery.lettering.js'></script>
<script>
  $(document).ready(function() {
    $(".quote").lettering('words');
  });
</script>

<!-- FITVIDS -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#video").fitVids();
  });
</script>

<!-- BOOTSTRAP -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>

<!-- APPLICATION -->
<script src="<?php bloginfo( 'template_directory' ); ?>/js/application.js"></script>


<?php /*
<!-- FITTEXT -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fittext.js"></script>
<script>
	  $(document).ready(function() {
		$(".fancy_title").lettering();
	  });

  $("#responsive_headline").delay(3000).fitText();
</script>

*/ ?>

<div id="trim" class="container-fluid animated fadeInDown">
    <div class="row-fluid">
        <div class="span6">
            <a class="chedonline-link" href="http://chedonline.com">A <strong>CHEDONLINE</strong> Project</a>                
        </div>

        <div id="share-this" class="span6">

            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" addthis:url="http://sicquotes.com" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet" addthis:url="http://sicquotes.com"></a>
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=chedonline"></script>
            <!-- AddThis Button END -->            
        </div>
    </div><!-- .row-fluid -->
</div>




<?php edit_post_link(); ?>

</body>

</html>