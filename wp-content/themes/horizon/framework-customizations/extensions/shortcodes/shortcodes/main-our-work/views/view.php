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
<section class="our-work" id="ourWork">
	<div class="container">
		<div class="work-block">
			<h2 class="who-head work-head">наши работы
			</h2>
			<div class="strip strip-work"><hr class="strip__hr" id="jsWorkHR"/>
				<div class="strip__circle">
				</div>
			</div>
			<div class="work-left">
				<div class="work-slider">
					<div class="work-slider__landing">
						<p>#landingepage_horizon
						</p><img src="<?php bloginfo('template_url')?>/assets/images/work_landing.png" alt="" role="presentation"/>
					</div>
					<div class="work-slider__bannner-logo">
						<div class="work-slider__bannner-logo__banner">
							<p>#banners_horizon
							</p><img src="<?php bloginfo('template_url')?>/assets/images/work_banner.png" alt="" role="presentation"/>
						</div>
						<div class="work-slider__bannner-logo__logo">
							<p>#Logo_horizon
							</p>
							<div class="work-slider__bannner-logo__logo__image"><img src="<?php bloginfo('template_url')?>/assets/images/work_logo.png" alt="" role="presentation"/>
							</div>
						</div>
					</div>
				</div>
				<div class="work-slider">
					<div class="work-slider__landing">
						<p>#landingepage_horizon
						</p><img src="<?php bloginfo('template_url')?>/assets/images/work_landing.png" alt="" role="presentation"/>
					</div>
					<div class="work-slider__bannner-logo">
						<div class="work-slider__bannner-logo__banner">
							<p>#banners_horizon
							</p><img src="<?php bloginfo('template_url')?>/assets/images/work_banner.png" alt="" role="presentation"/>
						</div>
						<div class="work-slider__bannner-logo__logo">
							<p>#Logo_horizon
							</p>
							<div class="work-slider__bannner-logo__logo__image"><img src="<?php bloginfo('template_url')?>/assets/images/work_logo.png" alt="" role="presentation"/>
							</div>
						</div>
					</div>
				</div>
				<div class="work-slider">
					<div class="work-slider__landing">
						<p>#landingepage_horizon
						</p><img src="<?php bloginfo('template_url')?>/assets/images/work_landing.png" alt="" role="presentation"/>
					</div>
					<div class="work-slider__bannner-logo">
						<div class="work-slider__bannner-logo__banner">
							<p>#banners_horizon
							</p><img src="<?php bloginfo('template_url')?>/assets/images/work_banner.png" alt="" role="presentation"/>
						</div>
						<div class="work-slider__bannner-logo__logo">
							<p>#Logo_horizon
							</p>
							<div class="work-slider__bannner-logo__logo__image"><img src="<?php bloginfo('template_url')?>/assets/images/work_logo.png" alt="" role="presentation"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="work-right">
				<div class="work-right__director">
					<div class="work-right__director__image"><img src="<?php bloginfo('template_url')?>/assets/images/work_image.png" alt="" role="presentation"/>
					</div>
					<div class="work-right__director__text">
						<p class="work-right__director__text__name">Григорий Дегтярёв
						</p>
						<p class="work-right__director__text__p">ген. директор “Алекс Моторс”
						</p>
					</div>
				</div>
				<div class="work-right__text" id="jsWorkText">
					<p class="work-right__text__p">Компании потребовалось полностью изменить фирменный стиль: логотип, сайт и прочие атребуты. Пососветовали партнеры компанию Horizont.  Долго не думал, так как не хотелось оттягивать. Отправил заявку, ответили опперативно. Проконсультировали по всем интеерсующим меня вопросам грамотно, четко, а главное понятно. После оформления заявки, быстро выполнили свою работу. В общем советую, проверенно на личном опыте.
					</p>
				</div>
				<h2 class="work-right__head work-right__head_mt">больше отзывов
				</h2>
				<h2 class="work-right__head">и работ в наших группах
				</h2>
				<div class="work-right__social"><a class="work-right__social__link socal-links" href="#" target="_blank"><i class="fab fa-vk social-hover"></i></a><a class="work-right__social__link socal-links" href="#" target="_blank"><i class="fab fa-facebook-f social-hover"></i></a><a class="work-right__social__link socal-links" href="#" target="_blank"><i class="fab fa-telegram-plane social-hover"></i></a>
				</div>
				<div class="btn work-btn jsWorkBtn jsModalWindow"><span class="btn__text">Заказать</span>проект
				</div>
			</div><pre class="who-code work-code" id="jsWorkCode">
          # This is a comment
          def expenses
            @expenses ||= user.expenses.find(:all,
              :conditions => conditions,
              :order => “created_at ASC”)
          end</pre>
		</div>
	</div>
</section>