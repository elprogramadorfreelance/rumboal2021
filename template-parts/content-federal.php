<div class="modHome">
	<!--mod home-->
	<div class="seccionHome">
		<span><strong>Federal</strong> <i class="fas fa-grip-lines-vertical"></i> <a href="#">Ver mas notas</a></span>
	</div>
	<?php query_posts( array('posts_per_page' => 3, 'cat' => 2 ) ); ?>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div class="notaGris">
		<span class="imgRecorte">
			<?php
			$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			?>
			<img src="<?php echo $featured_img_url; ?>">
		</span>
		<span class="titSecundario centro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
	</div>

	<?php endwhile; ?>

	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<?php endif; ?>

	<div class="boxHome">
		<img src="<?php bloginfo('template_url'); ?>/images/box.jpg">
	</div>
</div> <!--mod home-->