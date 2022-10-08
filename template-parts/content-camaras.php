<div class="modHome"><!--mod home-->
      <div class="seccionHome">
        <span><strong>Cámaras</strong> <i class="fas fa-grip-lines-vertical"></i> <a href="#">Ver mas notas</a></span>
      </div>
<?php query_posts( array('posts_per_page' => 3, 'cat' => 6 ) ); ?>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	?>
      <div class="col-md-4 nG">
        <div class="notaGris transparente">
          <span class="imgNg"><img src="<?php echo $featured_img_url; ?>"></span>
          <span class="etiquetaCat amarilla"><a href="<?php the_permalink(); ?>">Cámaras</a></span>
          <span class="titSecundario izquierda"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
          <span class="teaserNPrin negro izquierda"><?php the_excerpt(); ?> </span>
        </div>
      </div>
   	<?php endwhile; ?>
	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php endif; ?>   
 </div><!--mod home-->