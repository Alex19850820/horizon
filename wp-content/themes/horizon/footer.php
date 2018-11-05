<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package horizon
 */
$contacts = fw_get_db_customizer_option();
?>
<footer class="footer">
	<div class="container container container_flex-between">
		<div class="footer-coop">
			<p>2017 Horizon - Digital агентство полного цикла
			</p>
			<p>Все права защищены
			</p>
		</div>
		<div class="footer-soc-mail">
			<div class="footer-soc-mail__soc"><a class="footer-soc-mail__soc__links socal-links" href="#" target="_blank"><i class="fab fa-facebook-f social-hover"></i></a><a class="footer-soc-mail__soc__links socal-links" href="#" target="_blank"><i class="fab fa-vk social-hover"></i></a><a class="footer-soc-mail__soc__links socal-links" href="#" target="_blank"><i class="fab fa-telegram-plane social-hover"></i></a>
			</div>
			<a class="footer-soc-mail__number" href="tel:<?=$contacts['phone']?>">
				<?=$contacts['phone']?>
			</a>
			<a class="footer-soc-mail__mail" href="mailto:horizon@gmail.ru">horizon@gmail.ru</a>
		</div>
	</div>
</footer>
<div class="modal-window" id="modal">
	<div class="overlay-modal">
	</div>
	<div class="modal">
		<div class="modal-close"><span></span><span></span>
		</div>
		<div class="modal-block">
			<h2 class="modal-block__head">Хотите получить консультацию?
			</h2>
			<p class="modal-block__text">Заполните поля и наш специалист свяжется с Вами
			</p>
			<form class="form-review" id="modal_form">
				<input class="form-review__name" name="name" type="text" placeholder="Ваше Имя"/>
				<input class="form-review__number" name="phone" type="tel" placeholder="Ваш Телефон"/>
				<div class="form-review__btn-block">
					<button id="send__form" data-form="modal_form" class="form-review__btn-block__btn jsCheck" type="submit">заявку<span class="form-review__btn-block__btn__text">Оставить</span>
					</button>
				</div>
			</form>
		</div>
		<div class="modal-phone">
			<h2 class="modal-phone__head">
				Хотите получить консультацию?
			</h2>
			<p class="modal-phone__text">
				Заполните поля и наш специалист свяжется с Вами
			</p>
			<a class="modal-phone__phone" href="tel:<?=$contacts['phone']?>">
				<?=$contacts['phone']?>
			</a>
			<form class="form-review" id="p_modal">
				<input class="form-review__name"  name="name" type="text" placeholder="Ваше Имя"/>
				<input class="form-review__number" name="phone" type="tel" placeholder="Ваш Телефон"/>
				<div class="form-review__btn-block">
					<button class="form-review__btn-block__btn jsCheck" id="send__form" data-form="p_modal" type="submit">заявку<span class="form-review__btn-block__btn__text">Оставить</span>
					</button>
				</div>
			</form>
		</div>
		<div class="modal-thanks" id="thanks">
			<div class="modal-block-thanks">
				<h2 class="modal-block-thanks__head">Спасибо за заявку
				</h2>
				<p class="modal-block-thanks__text">Наш специалист свяжется с Вами в ближайшее время!
				</p>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
