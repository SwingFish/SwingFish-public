<?php if (!isset($broker_meta)) { header('Location: /brokers'); exit; } ?>

<div class="row g-4">
	<div class="col-lg-8">

		<div class="sf2-post-card">
			<div class="p-3">
				<img src="<?=htmlspecialchars($broker_logo)?>" alt="Kawase" class="float-end ms-3 mb-2" style="max-width:150px">

				<p>The "Investment Supermarket" &mdash; no kidding, this is how they called themselves, which is kind of cool to be honest.</p>

				<div class="alert alert-warning">
					<strong>Kawase is no longer operating.</strong> Towards December 2018, all Kawase accounts were moved to <a href="/broker/fondex">Fondex</a> or closed.
				</div>

				<p><a href="/broker/fondex">Fondex</a> is also a brand of TopFX, licensed just as Kawase under the same CySEC registration number.</p>

				<a href="/broker/fondex" class="btn btn-warning">See Fondex for more details</a>
			</div>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card">
			<?php $visit_url = $broker_ib ?: $broker_url; ?>
			<?php if ($broker_logo) : ?>
			<?php if ($visit_url) : ?>
			<a href="<?=htmlspecialchars($visit_url)?>" target="_blank">
				<div class="sf2-post-card-media"><img src="<?=htmlspecialchars($broker_logo)?>" alt="<?=htmlspecialchars($broker_name)?>" class="sf2-post-card-img"></div>
			</a>
			<?php else : ?>
			<div class="sf2-post-card-media"><img src="<?=htmlspecialchars($broker_logo)?>" alt="<?=htmlspecialchars($broker_name)?>" class="sf2-post-card-img"></div>
			<?php endif; ?>
			<?php endif; ?>
			<div class="p-3">
				<?php if ($visit_url) : ?>
				<p class="mb-3"><a href="<?=htmlspecialchars($visit_url)?>" target="_blank" class="btn btn-sm btn-outline-primary w-100">Visit <?=htmlspecialchars($broker_name)?></a></p>
				<?php endif; ?>
				<h6><i class="bi bi-award"></i> Features</h6>
				<ul class="list-unstyled mb-0">
					<?php foreach ($broker_meta['features'] ?? array() as $f) : ?>
					<li class="mb-1"><i class="bi bi-check-circle text-success me-1"></i> <?=htmlspecialchars($f)?></li>
					<?php endforeach; ?>
					<?php foreach ($broker_meta['restrictions'] ?? array() as $r) : ?>
					<li class="mb-1"><i class="bi bi-x-circle text-danger me-1"></i> <?=htmlspecialchars($r)?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<?php if (!empty($broker_related_posts)) : ?>
		<div class="sf2-post-card mt-3">
			<div class="p-3">
				<h6><i class="bi bi-link-45deg"></i> Recent Posts</h6>
				<ul class="list-unstyled mb-0 small">
					<?php foreach ($broker_related_posts as $rp) : ?>
					<li class="mb-1"><a href="<?=htmlspecialchars($rp['link'])?>"><?=htmlspecialchars($rp['title'])?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
