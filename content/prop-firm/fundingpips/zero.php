<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:#dc3545">&#9679; Caution</span>
	<span class="badge text-dark" style="background-color:<?=htmlspecialchars($firm_color)?>">Firm: <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; Zero</h1>
<p class="lead text-muted">Instant funded, no evaluation. The headline &ldquo;1% target&rdquo; hides an effective 1.8&ndash;2% requirement behind consistency and minimum-day rules.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-danger">
				<strong>The 1% target is misleading.</strong> To request a payout you must complete 7 profitable days, each with at least 0.25% gain. Minimum total: 1.77%. The 15% consistency rule forces nearly equal daily gains, pushing the effective target to 1.8&ndash;2.0%.
			</div>

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:70%">Value</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$444</td></tr>
						<tr><td><strong>Type</strong></td><td>Instant funded &mdash; no evaluation</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>1% (effective ~1.8&ndash;2.0%)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>3%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>5% trailing</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td>Trailing</td></tr>
						<tr><td><strong>Min Trading Days</strong></td><td>7 profitable days (&ge;0.25% each)</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td>15% &mdash; best day &le; 15% of total profit</td></tr>
						<tr><td><strong>Time Limit</strong></td><td>30 days</td></tr>
						<tr><td><strong>News Trading</strong></td><td>Banned &mdash; immediate termination if trades open within 10 min of major news</td></tr>
						<tr><td><strong>Profit Split</strong></td><td>95%</td></tr>
						<tr><td><strong>Payout Cycle</strong></td><td>~8 days (best case)</td></tr>
					</tbody>
				</table>
			</div>

			<h2>The Problem</h2>
			<div class="sf2-widget mb-3">
				<h5>Trailing drawdown on an instant account</h5>
				<p class="mb-0">5% trailing drawdown means your floor rises with every pip of profit. Combined with a 3% daily limit, you have very little room to operate. One bad day after a good run and you breach &mdash; not because you lost a lot, but because your buffer evaporated as you profited.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>30-day forced activity</h5>
				<p class="mb-0">You must complete 7 profitable days within 30 days. Take 3 weeks off and you lose the account. This forces trading when there are no setups, which is how accounts get breached &mdash; not from bad trades, but from forced trades.</p>
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
