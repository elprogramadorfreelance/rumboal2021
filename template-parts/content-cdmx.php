  <div class="modHome"><!--mod home-->
      <div class="seccionHome">
        <span><strong>CDMX</strong> <i class="fas fa-grip-lines-vertical"></i> <a href="#">Ver mas notas</a></span>
      </div>    
    <?php $contador_cdmx = 1; ?>
	<?php query_posts( array('posts_per_page' => 5, 'cat' => 3 ) ); ?>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	
	if (($contador_cdmx == 1) || ($contador_cdmx == 2) ) { 
		?>
      <div class="col-md-6 notaDoble"><!--notas principales-->
        <div class="notaSobre doble">
          <a href="#"><img src="<?php echo $featured_img_url; ?>"></a>
          <span class="etiquetaCat"><a href="#">CDMX</a></span>
          <span class="titNPrin sobre"><a href="#"><?php the_title(); ?></a></span>
        </div>
        <span class="teaserNPrin sobre"><?php the_excerpt(); ?> </span>
      </div>


 <?php
		$contador_cdmx++;
	} 
	  else {
		  ?>


      <div class="col-md-4 nG">
        <div class="notaGris transparente">
          <span class="imgRecorte grande"><img src="<?php echo $featured_img_url; ?>"></span>
          <span class="etiquetaCat amarilla centro"><a href="#">CDMX</a></span>
          <span class="titSecundario centro"><a href="#"><?php the_title(); ?></a></span>
        </div>
      </div>
      <?php
		  $contador_cdmx++;
	  }
	  ?>


	<?php endwhile; ?>
	
	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php endif; ?> 
      
      

    </div><!--mod home-->