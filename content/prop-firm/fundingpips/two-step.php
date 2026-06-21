<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:#e67e22">&#9679; Caution</span>
	<span class="badge text-dark" style="background-color:<?=htmlspecialchars($firm_color)?>">Firm: <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; 2 Step</h1>
<p class="lead text-muted">Classic two-phase evaluation. Widest drawdown in the FundingPips lineup (10%), but still trailing &mdash; and the news rule applies.</p>

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
						<tr><td><strong>Price (100K)</strong></td><td>$544</td></tr>
						<tr><td><strong>Type</strong></td><td>2 phase evaluation + funded</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>8% (phase 1) + 5% (phase 2), 2% (funded cycles)</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>~15%*</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>5%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>10% trailing</td></tr>
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

			<h2>2 Step vs FTMO</h2>
			<div class="sf2-widget mb-3">
				<p>On paper, FundingPips 2 Step looks comparable to FTMO's 2-Step: similar price (~$544 vs $540), same 10% drawdown, similar combined target (~15% vs 15%). But there are key differences:</p>
				<ul class="mb-0">
					<li><strong>Trailing vs static</strong> &mdash; FundingPips uses trailing drawdown. FTMO uses static. Trailing means your buffer shrinks as you profit.</li>
					<li><strong>News rule</strong> &mdash; FundingPips terminates on news. FTMO allows news trading.</li>
					<li><strong>Consistency</strong> &mdash; FundingPips has 35% consistency. FTMO has none.</li>
					<li><strong>Payout cycle</strong> &mdash; FundingPips ~7 days. FTMO 14 days. FundingPips is faster here.</li>
				</ul>
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
