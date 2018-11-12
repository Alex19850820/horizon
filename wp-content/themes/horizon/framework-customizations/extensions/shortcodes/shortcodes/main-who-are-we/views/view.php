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
			<h2 class="who-head">
				<?=$atts['h2']?>
			</h2>
			<div class="strip strip-who"><hr class="strip__hr" id="jsWhoHR"/>
				<div class="strip__circle">
				</div>
			</div>
			<div class="who-block__left">
				<?php foreach ( $atts['advantages'] as $advantage ):?>
					<p class="who-block__left__text">
						<?=$advantage['h2']?>
					</p>
				<?php endforeach;?>
				<div class="btn jsWhoBtn jsModalWindow">
					<span class="btn__text">
						Получить
					</span>
					консультацию
				</div>
			</div>
			<div class="who-block__right">
				<p class="who-block__right__head" id="jsDigital">Digital
				</p>
				<div class="who-block-items" id="jsItems">
					<div class="who-block-items__item">
						<img src="<?php bloginfo('template_url')?>/assets/images/item-1.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text">
							<span class="who-block-items__item__text__number jsNum1" data-num="<?=$atts['customers_count']?>">
							
							</span>
							<p>
								<?=$atts['customers']?>
							</p>
						</div>
					</div>
					<div class="who-block-items__item">
						<img src="<?php bloginfo('template_url')?>/assets/images/item-2.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text">
							<span class="who-block-items__item__text__number jsNum2" data-num="<?=$atts['sites_count']?>">
							
							</span>
							<p>
								<?=$atts['sites']?>
							</p>
						</div>
					</div>
					<div class="who-block-items__item">
						<img src="<?php bloginfo('template_url')?>/assets/images/item-3.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text">
							<span class="who-block-items__item__text__number jsNum3" data-num="<?=$atts['years']?>">
							
							</span>
							<p>
								<?=$atts['years_text']?>
							</p>
						</div>
					</div>
					<div class="who-block-items__item">
						<img src="<?php bloginfo('template_url')?>/assets/images/item-4.png" alt="" role="presentation"/>
						<div class="who-block-items__item__text">
							<span class="who-block-items__item__text__number jsNum4" data-num="<?=$atts['people_count']?>">
							
							</span>
							<p>
								<?=$atts['people_text']?>
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