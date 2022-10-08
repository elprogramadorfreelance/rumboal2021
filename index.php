<?php get_header(); ?>
<div class="container">
	<!--contenedor-->
	<div class="skin-container">
		<!--skin contenedor-->
		<div class="publicidad margin">
			<span class="aP">PUBLICIDAD</span>
			<div class="leader">
				<img src="<?php bloginfo('template_url'); ?>/images/leader.jpg">
			</div>
		</div>
		
		<?php //get_template_part( 'template-parts/content/content-none' ); ?>
		<?php get_template_part( 'template-parts/content', 'destacado' ); ?>	
		<?php get_template_part( 'template-parts/content', 'federal' ); ?>
		<?php get_template_part( 'template-parts/content', 'cdmx' ); ?>
		<?php get_template_part( 'template-parts/content', 'estados' ); ?>
		<?php get_template_part( 'template-parts/content', 'camaras' ); ?>
		<?php get_template_part( 'template-parts/content', 'opinion' ); ?>
		<!--fin home-->
		<button class="btn btn-primary scroll-top" data-scroll="up" type="button" style="display: inline-block;"><i class="fa fa-chevron-up"></i></button>
	</div>
	<!--contenedor-->
</div> <!--skin contenedor-->
<?php get_footer(); ?>