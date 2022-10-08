<!--inicio home-->
 <div class="modHome"><!--mod home-->
	<?php $contador = 1; ?>
	<?php query_posts( array('posts_per_page' => 3, 'cat' => 7 ) ); ?>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<?php
	$featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	
	if (($contador == 1) || ($contador == 2) ) { 	
     
     if ($contador == 1){  ?>
      <div class="col-md-8 notasPrin"><!--notas principales-->

        <div class="notaSobre">
          <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>"></a>
          <span class="etiquetaCat"><a href="#">Federal</a></span>
          <span class="titNPrin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
        </div>
<?php 
						 $contador++;
						}
       else { ?> 
        <div class="notaLarga">
            <span class="imgLarga"><a href="#"><img src="<?php echo $featured_img_url; ?>"></a></span>
            <div class="infoLarga">
                  <span class="etiquetaCat izq"><a href="#">Federal</a></span>
                  <span class="titSecundario"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                  <span class="teaserNPrin">Tránsito de buques por Canal de Panamá también caerá en 2020 Redacción El Financiero (Con Información de EFE) </span>
            </div>
        </div>

      </div><!--notas principales-->
<?php
	$contador++;
	} 
		
	}else {
		?>
      <div class="col-md-4 notasPrin"><!--notas principales-->
        <span class="imgCuadro"><a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>"></a></span>
        <div class="infoCuadro">
          <span class="etiquetaCat amarilla"><a href="#">Federal</a></span>
          <span class="titNPrin chico"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
          <span class="teaserNPrin negro"><?php the_excerpt(''); ?> </span>
        </div>
      </div><!--notas principales-->
      
<?php } ?>
   

	<?php endwhile; ?>
	
	<?php else : ?>
	<h2>Oooopppsss...</h2>
	<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
	<?php endif; ?> 
   
    </div><!--mod home-->