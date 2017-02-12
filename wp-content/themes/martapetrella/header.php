<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php include 'head.php'; ?>
	<?php wp_head(); ?>
	<?php if( paypal_ID() == true ) { $is_payed = true; } ?>
</head>

<body <?php body_class(); ?>>

	<?php include 'nav.php'; ?>

	<div class="main-content <?php echo ( 1==1 ) ? '' : 'onecol'; ?>">

				<div class="main-container <?php echo ( get_page_template_slug() == 'template-home.php') ? '' : 'container'; ?>">

					<section class="row">

						<?php if( '' === get_post()->post_content && is_single() ) { ?>
						<!-- COL ASIDE MOBILE -->
						<div class="col-md-4 hidden-md hidden-lg">
							<div class="hidden-md hidden-lg">
								<?php if( $is_payed == false ) { ?>
									<p>
										Compra le informazioni di contatto di questa richiesta di preventivo.
									</p>
									<button class="btn btn-primary " data-lightbox-button="contact-panel" onclick="addLightbox( $(this) )">
									  Compra il contatto
									</button>
								<?php } else {?>
									<h3>
										Contatto acquistato.
									</h3>
									<button class="btn btn-success" data-lightbox-button="contact-panel" onclick="addLightbox( $(this) )">
									  Clicca qui per contattare!
									</button>
								<?php } ?>
							</div>
							<div id="contact-panel" data-lightbox="contact-panel" class="hidden-md hidden-lg">
								<?php include 'components/contact-panel.php'; ?>
								<?php //include 'components/advices.php'; ?>
							</div>
						</div>
						<?php } ?>

<!-- FINE HEADER -->
