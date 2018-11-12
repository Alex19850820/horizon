<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/
$contacts = fw_get_db_customizer_option();
?>
<section class="our-work" id="ourWork">
	<div class="container">
		<div class="work-block">
			<h2 class="who-head work-head">
				<?=$atts['h2']?>
			</h2>
			<div class="strip strip-work"><hr class="strip__hr" id="jsWorkHR"/>
				<div class="strip__circle">
				</div>
			</div>
			<div class="work-left">
				<?php foreach ($atts['slider'] as $slider) :?>
					<div class="work-slider">
						<div class="work-slider__landing">
							<p>
								<?=$slider['p_work']?>
							</p>
							<img src="<?=$slider['img_work']['url']?>" alt="" role="presentation"/>
						</div>
						<div class="work-slider__bannner-logo">
							<div class="work-slider__bannner-logo__banner">
								<p>
									<?=$slider['p_banner']?>
								</p>
								<img src="<?=$slider['img_banner']['url']?>" alt="" role="presentation"/>
							</div>
							<div class="work-slider__bannner-logo__logo">
								<p>
									<?=$slider['p_logo']?>
								</p>
								<div class="work-slider__bannner-logo__logo__image">
									<img src="<?=$slider['img_logo']['url']?>" alt="" role="presentation"/>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
			<div class="work-right">
				<div class="work-right__director">
					<div class="work-right__director__image">
						<img src="<?=$atts['img_director']?>" alt="" role="presentation"/>
					</div>
					<div class="work-right__director__text">
						<p class="work-right__director__text__name">
							<?=$atts['name_director']?>
						</p>
						<p class="work-right__director__text__p">
							<?=$atts['place_director']?>
						</p>
					</div>
				</div>
				<div class="work-right__text" id="jsWorkText">
					<p class="work-right__text__p">
						<?=$atts['description_director']?>
					</p>
				</div>
				<h2 class="work-right__head work-right__head_mt">
					больше отзывов
				</h2>
				<h2 class="work-right__head">
					и работ в наших группах
				</h2>
				<div class="work-right__social">
					<a class="work-right__social__link socal-links" href="<?=$contacts['vk']?>" target="_blank">
						<i class="fab fa-vk social-hover"></i>
					</a>
					<a class="work-right__social__link socal-links" href="<?=$contacts['facebook']?>" target="_blank">
						<i class="fab fa-facebook-f social-hover"></i>
					</a>
					<a class="work-right__social__link socal-links" href="<?=$contacts['telegram']?>" target="_blank">
						<i class="fab fa-telegram-plane social-hover"></i>
					</a>
				</div>
				<div class="btn work-btn jsWorkBtn jsModalWindow">
					<span class="btn__text">Заказать</span>проект
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