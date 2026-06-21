<?php if (!isset($broker_meta)) { header('Location: /brokers'); exit; } ?>

<div class="row g-4">
	<div class="col-lg-8">

		<div class="sf2-post-card">
			<div class="p-3">
				<img src="<?=htmlspecialchars($broker_logo)?>" alt="Fondex" class="float-end ms-3 mb-2" style="max-width:120px">

				<p>Fondex, the "Investment Supermarket", is one of the very few brokers that take full advantage of the cTrader/cServer suite. All functions you need are seamlessly integrated into the cTrader platform.</p>

				<div class="alert alert-warning">
					<strong>WARNING:</strong> Fondex has a very edgy "volatility rule" in the Fraud Section of the Terms of Service, check below for more details.<br>
					We followed up on this per email but got no meaningful response.<br>
					On 30 November 2018, Fondex canceled the IB Agreement with SwingFish (no more rebates being paid).
				</div>

				<p><img src="/assets/brokers/fondex-ctradermenu.png" class="float-start me-3 mb-2" style="max-width:100px" alt="Fondex cTrader menu">Things like contacting the broker, partner actions, account management, deposits and withdrawals are all reachable via the platform itself &mdash; accessible via Windows, Android, iOS and web.</p>
				<p>This also brings some disadvantages, such as moving funds between accounts requires a support ticket. Fondex allows <strong>crypto currencies to be traded 24/7 (incl. weekends and holidays)</strong>.</p>
				<p>Also notable: they focus more on investors with a very large range of products, all CFD based but most carry a large spread, making this broker not very attractive to day traders.</p>
				<p>Fondex is a TopFX brand, shares the CySEC Regulation 138/11, which is held by TopFX, a liquidity provider at the same address.</p>
			</div>
		</div>

		<div class="accordion mt-3" id="broker-accordion">
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#markets">Markets offered (977 Symbols)</button>
				</h2>
				<div id="markets" class="accordion-collapse collapse" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<ul>
							<li>43 Forex Symbols</li>
							<li>12 Cryptocurrency pairs [XRP, BTC, ETH, LTC, DSH, EMC]</li>
							<li>9 Metal &amp; Oil</li>
							<li>13 Indices</li>
							<li>291 US (American) CFD Stocks <small class="text-muted">**</small></li>
							<li>50 CFD ETF (iShares / Powershares)</li>
							<li>133 Australia CFD Stocks <small class="text-muted">**</small></li>
							<li>75 Japan CFD Stocks <small class="text-muted">**</small></li>
							<li>66 Italy CFD Stocks <small class="text-muted">**</small></li>
							<li>55 British CFD Stocks <small class="text-muted">**</small></li>
							<li>41 France CFD Stocks <small class="text-muted">**</small></li>
							<li>33 Swiss CFD Stocks <small class="text-muted">**</small></li>
							<li>32 Hong Kong CFD Stocks <small class="text-muted">**</small></li>
							<li>29 German CFD Stocks <small class="text-muted">**</small></li>
							<li>29 Singapore CFD Stocks <small class="text-muted">**</small></li>
							<li>26 Spain CFD Stocks <small class="text-muted">**</small></li>
							<li>16 Netherlands CFD Stocks <small class="text-muted">**</small></li>
							<li>10 Portugal CFD Stocks <small class="text-muted">**</small></li>
							<li>14 Belgium CFD Stocks <small class="text-muted">**</small></li>
						</ul>
						<p class="text-end"><small class="text-muted">All assets are offered on CFD basis.<br>** Dividends may be deducted/added from the account balance<br>Symbol totals from October 2018</small></p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#no-scalping">WARNING: No-Scalping / Volatility rule</button>
				</h2>
				<div id="no-scalping" class="accordion-collapse collapse show" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<h6>Fondex has a No-Scalping rule in the Terms of Service</h6>
						<p>In Section 2 of the ToS they define "scalping" with holding times shorter than 120 seconds, meaning all trades should be held longer than 2 minutes to avoid a breach of contract.</p>
						<hr>
						<p class="small text-muted">TOS from October 2018 [2 (scalping) and 32.4 Fraud]</p>
						<code>The Company reasonably suspects that the Client performed abusive trading such as, but not limited to, Snipping, Scalping, Pip-hunting, hedging, placing "buy stop" or "sell stop" Orders prior to the release of financial data, arbitrage, manipulations or a combination of faster/slower feeds.</code>
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
