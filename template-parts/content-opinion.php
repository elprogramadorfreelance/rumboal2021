<div class="modHome">
	<!--mod home-->

	<div class="seccionHome">
		<span><strong>Opinión</strong> <i class="fas fa-grip-lines-vertical"></i> <a href="#">Ver mas notas</a></span>
	</div>


<?php $contador_opinion = 1; ?>
	<?php query_posts( array('posts_per_page' => 3, 'cat' => 5 ) ); ?>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	
	
	$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	if ($contador_opinion == 1){
	?>
	<div class="col-md-6 notaDoble sm">
		<div class="notaSobre doble sm">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>"></a>
			<span class="etiquetaCat"><a href="#">Opinión</a></span>
			<span class="titNPrin sobre"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		</div>
	</div>
	<?php 
		$contador_opinion++;
	
	} else { 
	if ($contador_opinion == 2) {
	?>
	
	<div class="col-md-6 notaDoble sm">
		<div class="notaChicaLado">
			<div class="col-md-6 imgLado"><img src="<?php echo $featured_img_url; ?>">
			</div>
			<div class="col-md-6 txtLado">
				<span class="etiquetaCat amarilla"><a href="#">Opinión</a></span>
				<span class="titSecundario izquierda chico"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			</div>
		</div>
		<?php
		$contador_opinion++;
		} 
		else { ?>
		<div class="notaChicaLado">
			<div class="col-md-6 imgLado"><img src="<?php echo $featured_img_url; ?>">
			</div>
			<div class="col-md-6 txtLado">
				<span class="etiquetaCat amarilla"><a href="#">Opinión</a></span>
				<span class="titSecundario izquierda chico"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			</div>
		</div>
	</div>
	<?php $contador_opinion++;
			 }
	}?>
		<?php endwhile; ?>
	
	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php endif; ?> 

</div> <!--mod home-->