<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->


<!-- DEBUT CODE AJOUTE -->

<footer>
	<div class="conteneur">
		<div class="contenu01"><a href="#">Mentions légales</a></div>
		<div class="contenu02"><img src="../Planty2024/wp-content/uploads/2024/08/Canettes.png"/> </div>
	</div>
</footer>

<!-- FIN CODE AJOUTE -->


<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
