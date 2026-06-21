<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:#e67e22">&#9679; Caution</span>
	<span class="badge text-dark" style="background-color:<?=htmlspecialchars($firm_color)?>">Firm: <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; 1 Step</h1>
<p class="lead text-muted">Single evaluation with a 10% target. 35% consistency is more relaxed than Zero, but the trailing drawdown and news rule still apply.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:70%">Value</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$566</td></tr>
						<tr><td><strong>Type</strong></td><td>1 phase evaluation + funded</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>10% (evaluation), 2% (funded cycles)</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>~13%*</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>3%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>6% trailing</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td>Trailing</td></tr>
						<tr><td><strong>Min Trading Days</strong></td><td>Minimum profitable days required</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td>35% &mdash; best day &le; 35% of total profit</td></tr>
						<tr><td><strong>News Trading</strong></td><td>Banned &mdash; immediate termination</td></tr>
						<tr><td><strong>Profit Split</strong></td><td>80%</td></tr>
						<tr><td><strong>Payout Cycle</strong></td><td>~7 days (best case)</td></tr>
					</tbody>
				</table>
			</div>
			<p class="text-muted small">* Effective 1st target based on consistency and minimum profitable day requirements.</p>

			<h2>1 Step vs Zero</h2>
			<div class="sf2-widget mb-3">
				<p class="mb-0">The 1 Step trades a higher target (10% vs 1%) and an evaluation phase for a more relaxed consistency rule (35% vs 15%) and wider drawdown (6% vs 5%). The profit split drops from 95% to 80%. If you can pass the evaluation, the funded phase is more forgiving than Zero &mdash; but the trailing drawdown and news rule still make it structurally tighter than competitors at this price point.</p>
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
