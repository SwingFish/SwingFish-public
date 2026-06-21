<?php if (!isset($broker_meta)) { header('Location: /brokers'); exit; } ?>

<div class="row g-4">
	<div class="col-lg-8">

		<div class="sf2-post-card">
			<div class="p-3">
				<img src="<?=htmlspecialchars($broker_logo)?>" alt="Pepperstone" class="float-end ms-3 mb-2" style="max-width:120px">

				<p>An Australian Foreign Exchange Broker with strong execution and competitive spreads across multiple platforms.</p>
				<p>With multiple server locations, providing an average execution speed of under 40ms. Close to 50 liquidity providers including Citi, XTX, UBS, Credit Suisse, Goldman Sachs, HSBC and more.</p>
				<p>Pepperstone provides outstanding execution even on exotic assets and keeps spreads at a minimum even during major events.</p>
			</div>
		</div>

		<div class="accordion mt-3" id="broker-accordion">
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#markets">Markets offered</button>
				</h2>
				<div id="markets" class="accordion-collapse collapse" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<ul>
							<li>60 Forex Symbols</li>
							<li>19 Commodities <small class="text-muted">**</small></li>
							<li>120 CFD Stocks <small class="text-muted">**</small></li>
							<li>17 Indices</li>
							<li>5 Bonds <small class="text-muted">**</small></li>
						</ul>
						<p class="text-end"><small class="text-muted">All assets are offered on CFD basis.<br>** not or only partly available on cTrader</small></p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#opinion">SwingFish Opinion on Pepperstone</button>
				</h2>
				<div id="opinion" class="accordion-collapse collapse show" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<h6>A solid alternative with strong regulation</h6>
						<p>Pepperstone is a well-regarded broker with ASIC and FCA regulation, competitive spreads, and support for cTrader, MT4, and MT5. Execution speed and withdrawal speed are among the best in the industry.</p>
						<p>Note: Pepperstone does not currently offer a SwingFish rebate program.</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card">
			<?php $visit_url = $broker_ib ?: $broker_url; ?>
			<?php if ($broker_logo) : ?>
			<a href="<?=htmlspecialchars($visit_url)?>" target="_blank">
				<div class="sf2-post-card-media"><img src="<?=htmlspecialchars($broker_logo)?>" alt="<?=htmlspecialchars($broker_name)?>" class="sf2-post-card-img"></div>
			</a>
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

		<?php if (!empty($broker_meta['ratings'])) : ?>
		<div class="sf2-post-card mt-3">
			<div class="p-3">
				<h6><i class="bi bi-bar-chart"></i> Quick Ratings</h6>
				<?php foreach ($broker_meta['ratings'] as $label => $score) :
					$color = $score >= 7 ? 'bg-success' : ($score >= 4 ? 'bg-warning' : 'bg-danger');
				?>
				<div class="mb-2">
					<div class="d-flex justify-content-between small">
						<span><?=htmlspecialchars($label)?></span>
						<span><?=$score?>/10</span>
					</div>
					<div class="progress" style="height:6px">
						<div class="progress-bar <?=$color?>" style="width:<?=$score * 10?>%"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>

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
