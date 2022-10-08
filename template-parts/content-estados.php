<div class="modHome">
	<!--mod home-->
	<div class="seccionHome">
		<span><strong>Estados</strong> <i class="fas fa-grip-lines-vertical"></i> <a href="#">Ver mas notas</a></span>
	</div>
	<?php query_posts( array('posts_per_page' => 4, 'cat' => 4 ) ); ?>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	?>
	<div class="col-md-3 nG">
		<div class="notaGris azul">
			<span class="imgRecorte largo"><img src="<?php echo $featured_img_url; ?>"></span>
			<span class="titSecundario blanco centro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		</div>
	</div>
	<?php endwhile; ?>

	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php endif; ?>
</div> <!--mod home-->