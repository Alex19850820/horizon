<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/

?>
<section class="form" id="jsForm">
	<div class="container">
		<div class="form-block">
			<h2 class="form-block-head">заказывайте
			</h2>
			<div class="strip strip-form"><hr class="strip__hr" id="jsFormHR"/>
				<div class="strip__circle">
				</div>
			</div>
			<h2 class="form-head">Остались вопросы?
			</h2>
			<p class="form-text"><span>Выбирая нас</span> в качестве партнера,<span> Вы получаете надежные деловые отношения,</span> основанные на взаимных интересах, успех вашего бизнеса - это цель всей нашей команды!
			</p>
			<form class="form-review" id="z_form">
				<input class="form-review__name" name="name" type="text" placeholder="Ваше Имя" required="required"/>
				<input class="form-review__number" name="phone" type="tel" placeholder="Ваш Телефон" required="required"/>
				<div class="form-review__btn-block">
					<button id="send__form" class="form-review__btn-block__btn jsCheck" data-form="z_form" type="submit" disabled="disabled"><span class="form-review__btn-block__btn__text">Оставить</span>заявку
					</button>
					<div class="form-review__btn-block__checkbox"><input class="form-review__btn-block__checkbox__check" type="checkbox" id="checkbox"/>
						<label class="form-review__btn-block__checkbox__label" for="checkbox">Я принимаю условия Соглашения
						</label>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>