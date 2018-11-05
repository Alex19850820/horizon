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
<section class="who-are-we" id="whoAreWe">
	<!--+b('img')(src='<?php bloginfo('template_url')?>/assets/images/fon.png' alt='').fon-->
	<div class="container">
		<div class="who-block">
			<h2 class="who-head">кто мы?
			</h2>
			<div class="strip strip-who"><hr class="strip__hr" id="jsWhoHR"/>
				<div class="strip__circle">
				</div>
			</div>
			<div class="who-block__left">
				<p class="who-block__left__text">Преимущества
				</p>
				<p class="who-block__left__text">1 Эффективный дизайн
				</p>
				<p class="who-block__left__text">Мало сделать “красиво”, нужно сделать еще и эффективно
				</p>
				<p class="who-block__left__text">2 SEO-адаптированность
				</p>
				<p class="who-block__left__text">Ваш сайт без проблем освоится в поисковых системах после запуска
				</p>
				<p class="who-block__left__text">3 Разнообразие
				</p>
				<p class="who-block__left__text">Готовы предложить вариант создания сайта  для любой задачи и бюджета
				</p>
				<p class="who-block__left__text">4 Комплекс
				</p>
				<p class="who-block__left__text">Полный сервис для дальнейшего развития вашего сайта
				</p>
				<div class="btn jsWhoBtn jsModalWindow"><span class="btn__text">Получить</span>консультацию
				</div>
			</div>
			<div class="who-block__right">
				<p class="who-block__right__head" id="jsDigital">Digital
				</p>
				<div class="who-block-items" id="jsItems">
					<div class="who-block-items__item"><img src="<?php bloginfo('template_url')?>/assets/images/item-1.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text"><span class="who-block-items__item__text__number jsNum1">0</span>
							<p>довольных клиентов
							</p>
						</div>
					</div>
					<div class="who-block-items__item"><img src="<?php bloginfo('template_url')?>/assets/images/item-2.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text"><span class="who-block-items__item__text__number jsNum2">0</span>
							<p>разработанных сайтов
							</p>
						</div>
					</div>
					<div class="who-block-items__item"><img src="<?php bloginfo('template_url')?>/assets/images/item-3.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text"><span class="who-block-items__item__text__number jsNum3">0</span>
							<p>лет опыта
							</p>
						</div>
					</div>
					<div class="who-block-items__item"><img src="<?php bloginfo('template_url')?>/assets/images/item-4.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text"><span class="who-block-items__item__text__number jsNum4">0</span>
							<p>сотрудников в штате
							</p>
						</div>
					</div>
				</div>
			</div><pre class="who-code" id="jsWhoCode">
          # This is a comment
          def expenses
            @expenses ||= user.expenses.find(:all,
              :conditions => conditions,
              :order => “created_at ASC”)
          end</pre>
		</div>
	</div>
</section>