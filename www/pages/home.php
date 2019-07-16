<section class="slider slider--home">

	<div class="noise"></div>

	<div class="slider__arrow slider__arrow--prev js_prev_case js_link"></div>
	<div class="slider__arrow slider__arrow--next js_next_case js_link"></div>	

	<div class="slider__items">

		<?php for($i = 0; $i < count($accepted_ids); $i++) { ?>

		<div class="slider__item slider__item--<?= $i; ?> <?php if($accepted_ids[$i]==1) print 'slider__item--active'; ?>" data-id="<?= $accepted_ids[$i]; ?>">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="<?= $trad['projet'.$accepted_ids[$i].'_title']; ?>"><?= $trad['projet'.$accepted_ids[$i].'_title']; ?></h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/<?= $accepted_ids[$i]; ?>/<?= $trad['projet'.$accepted_ids[$i].'_slug']; ?>" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--<?= $accepted_ids[$i]; ?>"></div>
		</div>

		<?php } ?>

	</div>

	<footer class="slider__nav">

		<div class="slider__nav-counter slider__nav-counter--1">
			<span class="js_home_slider_counter slider__nav-counter-top">1</span> <em>/</em> <span class="slider__nav-counter-bottom">5</span>
		</div>

		<ul>
			<?php for($i = 0; $i < count($accepted_ids); $i++) { ?>
			<li class="js_link js_home_slider slider__nav-item <?php if($accepted_ids[$i]==1) print 'slider__nav-item--active'; ?>" data-id="<?= $accepted_ids[$i]; ?>"><?= $accepted_ids[$i]; ?></li>
			<?php } ?>
		</ul>

	</footer>

	<div class="slider__progress"></div>
	<div class="slider__progress-bg"></div>

</section>

<canvas id="blob"></canvas>