<section class="slider slider--home">

	<div class="noise"></div>

	<div class="slider__arrow slider__arrow--prev js_prev_case js_link"></div>
	<div class="slider__arrow slider__arrow--next js_next_case js_link"></div>	

	<div class="slider__items">

		<div class="slider__item slider__item--1 slider__item--active" data-id="1">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="D'Ieteren">D'Ieteren</h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/1/dieteren" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--1"></div>
		</div>

		<div class="slider__item slider__item--2" data-id="2">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="Balade">Balade</h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/2/balade" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--2"></div>
		</div>

		<div class="slider__item slider__item--3" data-id="3">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="Bruxelles">Bruxelles</h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/3/bruxelles-formation" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--3"></div>
		</div>
		
		<div class="slider__item slider__item--4" data-id="4">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="Velux">Velux</h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/4/velux" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--4"></div>
		</div>

		<div class="slider__item slider__item--5" data-id="5">
			<div class="slider__item-content">
				<div class="slider__item-title">
					<h3 class="slider__item-title-elem" data-text="Octobus">Octobus</h3>
				</div>
				<div class="slider__item-cta">
					<a href="<?= $domain; ?>/projets/5/octobus" class="slider__item-button js_open_case">Découvrir</a>
				</div>
			</div>
			<div class="slider__item-picture slider__item-picture--5"></div>
		</div>

	</div>

	<footer class="slider__nav">

		<div class="slider__nav-counter slider__nav-counter--1">
			<span class="js_home_slider_counter slider__nav-counter-top">1</span> <em>/</em> <span class="slider__nav-counter-bottom">5</span>
		</div>

		<ul>
			<li class="js_link js_home_slider slider__nav-item slider__nav-item--active" data-id="1">1</li>
			<li class="js_link js_home_slider slider__nav-item" data-id="2">2</li>
			<li class="js_link js_home_slider slider__nav-item" data-id="3">3</li>
			<li class="js_link js_home_slider slider__nav-item" data-id="4">4</li>
			<li class="js_link js_home_slider slider__nav-item" data-id="5">5</li>
		</ul>

	</footer>

	<div class="slider__progress"></div>
	<div class="slider__progress-bg"></div>

</section>

<canvas id="blob"></canvas>