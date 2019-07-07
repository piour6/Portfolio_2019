<div class="project">

	<section class="slider slider--project">
		<div class="noise"></div>	
		<div class="slider__items">
			<div class="slider__item slider__item--<?= $id; ?> slider__item--active" data-id="<?= $id; ?>">
				<div class="slider__item-picture slider__item-picture--<?= $id; ?>"></div>
			</div>
		</div>

		<div class="line line--top line--1"></div>
		<div class="line line--top line--2"></div>
		<div class="line line--top line--3"></div>
		<div class="line line--top line--4"></div>

		<div class="container container--project">
			<h1 class="project__title" data-text="<?= $trad['projet'.$id.'_title']; ?>"><?= $trad['projet'.$id.'_title']; ?></h1>
			<ul class="project__infos">
				<li>
					<small class="project__infos-title">Contexte</small>
					<?= $trad['projet'.$id.'_context']; ?>
				</li>
				<li>
					<small class="project__infos-title">Année</small>
					<?= $trad['projet'.$id.'_year']; ?>
				</li>
				<li>
					<small class="project__infos-title">Tâches</small>
					<?= $trad['projet'.$id.'_tasks']; ?>
				</li>
			</ul>
		</div>
	</section>

	<section class="project__content">
		<div class="container container--mini">
			<blockquote class="project__intro">
				<?= $trad['projet'.$id.'_intro']; ?>
			</blockquote>
		</div>
	</section>

</div>