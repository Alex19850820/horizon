<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package horizon
 */
$contacts = fw_get_db_customizer_option();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php the_title()?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="cloud-up">
	</div>
	<div class="cloud-bottom">
	</div>
	<div class="cloud-bottom2">
	</div>
	<div class="cloud-left">
	</div><img class="cloud-main-left" src="<?php bloginfo('template_url')?>/images/cloud_bottom_main_left.png" alt="" role="presentation"/><img class="cloud-main-right" src="<?php bloginfo('template_url')?>/images/cloud_bottom_main_right.png" alt="" role="presentation"/><img class="fon" src="<?php bloginfo('template_url')?>/images/fon.png" alt="" role="presentation"/>
	<div class="container container_max-height">
		<div class="header-block">
			<div class="header-block__left">
				<div class="burger-menu jsMenu"><span></span>
				</div>
				<div class="overlay">
					<div class="overlay-fon jsOverlay">
					</div>
					<nav class="overlayMenu">
						<ul class="menu">
							<li><a class="scroll" href="#">Главная</a>
							</li>
							<li><a class="scroll" href="#whoAreWe">О нас</a>
							</li>
							<li><a class="scroll" href="#ourWork">Наши проекты</a>
							</li>
							<li><a class="scroll" href="#jsForm">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="strip"><hr class="strip__hr jsHeaderHR"/>
					<div class="strip__circle">
					</div>
				</div><a class="header-block__left__links header-block__left__links_mb-1 socal-links jsModalPhone" href="#"><i class="fas fa-phone social-hover"></i></a>
				<!--+e('a')(href='#').left__links-->
				<!--  +b('i').fas.fa-search-->
				<!--+b('form').search-->
				<!--  +e('button')(type='reset').button-->
				<!--  +e.border-->
				<!--  +e('input')(type='text' autocomlete='off').input#input-->
				<!--  +e('label')(for='input').label-->
				<!--  +e.close x-->
			</div>
			<div class="header-block__text">
				<h2 class="header-block__text__head-small">digital heights
				</h2>
				<h1 class="header-block__text__head">horizon
				</h1>
			</div>
			<div class="header-block__right">
				<div class="strip"><hr class="strip__hr jsHeaderHR"/>
					<div class="strip__circle">
					</div>
				</div>
				<a class="header-block__right__links header-block__right__links_mb-1 socal-links" href="<?=$contacts['vk']?>" target="_blank">
					<i class="fab fa-vk social-hover"></i>
				</a>
				<a class="header-block__right__links header-block__right__links_mb-2 socal-links" href="<?=$contacts['facebook']?>" target="_blank">
					<i class="fab fa-facebook-f social-hover"></i>
				</a>
				<a class="header-block__right__links socal-links" href="<?=$contacts['telegram']?>" target="_blank">
					<i class="fab fa-telegram-plane social-hover"></i>
				</a>
			</div>
			<a class="scroll-image scroll" href="#whoAreWe">
				<img src="<?php bloginfo('template_url')?>/images/scroll.png" alt="" role="presentation"/>
			</a>
		</div>
	</div>
</header>