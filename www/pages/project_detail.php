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

		<div class="container container--margin container--mini">
			<blockquote class="project__intro">
				<?= $trad['projet'.$id.'_intro']; ?>
			</blockquote>
		</div>

		<div class="container container--margin container--mini">
			<div class="picture picture--full">
				<img src="https://via.placeholder.com/1600x2400.png" />
			</div>
		</div>

		<div class="container--full container--margin">
			<div class="picture picture--third">
				<img src="https://via.placeholder.com/900x900.png" />
			</div>
			<div class="picture picture--third">
				<img src="https://via.placeholder.com/900x900.png" />
			</div>
			<div class="picture picture--third">
				<img src="https://via.placeholder.com/900x900.png" />
			</div>
		</div>

		<div class="container container--margin container--mini">
			<div class="picture picture--full">
				<img src="https://via.placeholder.com/1600x900.png" />
			</div>
		</div>

		<div class="container container--margin container--mini">
			<div class="picture picture--full">
				<img src="https://via.placeholder.com/1600x2400.png" />
			</div>
		</div>

	</section>

	<a href="<?= $domain; ?>/projets/<?= $next_id; ?>/<?= $trad['projet'.$next_id.'_slug']; ?>" class="slider slider--project slider--project--next">
		<div class="noise"></div>	
		<div class="slider__items">
			<div class="slider__item slider__item--<?= $next_id; ?> slider__item--active" data-id="<?= $next_id; ?>">
				<div class="slider__item-picture slider__item-picture--<?= $next_id; ?>"></div>
			</div>
		</div>

		<div class="line line--top line--1"></div>
		<div class="line line--top line--2"></div>
		<div class="line line--top line--3"></div>
		<div class="line line--top line--4"></div>

		<div class="container container--project">
			<h2 class="project__subtitle">Projet suivant</h2>
			<h3 class="project__title" data-text="<?= $trad['projet'.$next_id.'_title']; ?>"><?= $trad['projet'.$next_id.'_title']; ?></h3>
		</div>
	</a>

</div>