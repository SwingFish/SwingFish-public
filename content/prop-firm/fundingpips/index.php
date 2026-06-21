<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>

<div class="sf2-cat-badges">
	<span class="badge text-dark" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?></h1>
<p class="lead text-muted">Many traders report successful payouts. The main concern is the way the terms are laid out &mdash; complex and misleading news rules create the impression the firm uses them to breach accounts over technicalities.</p>

<div class="row g-4 mb-4">

	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				<strong>FundingPips</strong> offers four products: <strong>Zero</strong> (instant funded), <strong>1 Step</strong>, <strong>2 Step</strong>, and <strong>2 Step Pro</strong>. All share the same firm, the same terms, and the same enforcement policy.
			</div>

			<h2>Product Overview</h2>
			<div class="row g-3 mb-4">
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100 border-danger">
						<h5><span style="color:#dc3545">&#9679;</span> Zero</h5>
						<p class="small text-muted">Instant funded</p>
						<ul class="small mb-0">
							<li><strong>No evaluation</strong></li>
							<li>1% profit target</li>
							<li>5% trailing drawdown</li>
							<li>3% daily loss</li>
							<li>15% consistency</li>
							<li>95% profit split</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#e67e22">&#9679;</span> 1 Step</h5>
						<p class="small text-muted">Single evaluation</p>
						<ul class="small mb-0">
							<li><strong>1 phase evaluation</strong></li>
							<li>10% profit target</li>
							<li>6% trailing drawdown</li>
							<li>3% daily loss</li>
							<li>35% consistency</li>
							<li>80% profit split</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#e67e22">&#9679;</span> 2 Step</h5>
						<p class="small text-muted">Two evaluations</p>
						<ul class="small mb-0">
							<li><strong>2 phase evaluation</strong></li>
							<li>8% + 5% targets</li>
							<li>10% trailing drawdown</li>
							<li>5% daily loss</li>
							<li>35% consistency</li>
							<li>80% profit split</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#e67e22">&#9679;</span> 2 Step Pro</h5>
						<p class="small text-muted">Two evaluations, relaxed</p>
						<ul class="small mb-0">
							<li><strong>2 phase evaluation</strong></li>
							<li>8% + 4% targets</li>
							<li>6% trailing drawdown</li>
							<li>3% daily loss</li>
							<li>No consistency rule</li>
							<li>80% profit split</li>
						</ul>
					</div>
				</div>
			</div>

			<h2>What Applies to All Products</h2>

			<div class="sf2-widget mb-3">
				<h5>The no-news rule</h5>
				<p class="mb-0">FundingPips terminates accounts immediately if trades are open within 10 minutes before or after major news events. This applies to <strong>all</strong> products. One accidental open trade near a news event costs you the account. Swing traders who hold positions through sessions are at constant risk.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>Minimum profitable days</h5>
				<p class="mb-0">All products require a minimum number of profitable days (each &ge;0.25% gain) before payout. Combined with the consistency rule, this forces nearly equal daily returns &mdash; making the effective profit target significantly higher than advertised.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>Copy trading</h5>
				<p class="mb-0">Outbound only &mdash; you can copy out to external accounts. Inbound copy (external &rarr; FundingPips) is prohibited and treated as third-party account management, resulting in immediate termination. The broad wording may also cover cloud-based copy services.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>Enforcement</h5>
				<p class="mb-0">Their policy lists possible restrictions (reduced leverage, trade limits, lot caps, lower drawdown, 1% risk rule, or being banned) &mdash; but in practice the outcome is almost always account termination. FundingPips does not distinguish between accidental and deliberate violations. No warning, no strike system, no appeal process.</p>
			</div>

			<div class="alert alert-warning">
				<strong>Payout Success</strong><br>
				FundingPips is a well-known firm that does pay traders. However, the structural traps (profitable-day requirements, no-news rule, 30-day inactivity) make it harder to reach payout than the headline targets suggest.
			</div>

		</div>
	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card p-3 text-center mb-3">
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener">
				<img src="/assets/prop-firms/fundingpips_logo.png" alt="FundingPips" class="img-fluid mb-2" style="max-height: 80px;" onerror="this.style.display='none'">
			</a>
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener" class="btn sf2-btn-primary w-100">Visit FundingPips</a>
		</div>

		<?php prop_firm_related_posts('FundingPips', 'FundingPips'); ?>
	</div>

</div>
