<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:#e67e22">&#9679; Caution</span>
	<span class="badge text-dark" style="background-color:<?=htmlspecialchars($firm_color)?>">Firm: <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; 2 Step Pro</h1>
<p class="lead text-muted">The only FundingPips product with no consistency rule. Lower targets, but tighter drawdown.</p>

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
						<tr><td><strong>Price (100K)</strong></td><td>$422</td></tr>
						<tr><td><strong>Type</strong></td><td>2 phase evaluation + funded</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>8% (phase 1) + 4% (phase 2), 1% (funded cycles)</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>~13%*</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>3%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>6% trailing</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td>Trailing</td></tr>
						<tr><td><strong>Min Trading Days</strong></td><td>Minimum profitable days required</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td>None</td></tr>
						<tr><td><strong>News Trading</strong></td><td>Banned &mdash; immediate termination</td></tr>
						<tr><td><strong>Profit Split</strong></td><td>80%</td></tr>
						<tr><td><strong>Payout Cycle</strong></td><td>7 days</td></tr>
					</tbody>
				</table>
			</div>
			<p class="text-muted small">* Effective 1st target based on minimum profitable day requirements.</p>

			<h2>The Best FundingPips Offer?</h2>
			<div class="sf2-widget mb-3">
				<p>The 2 Step Pro is the only product without a consistency rule &mdash; your best day can be as large as you want. That alone makes it the most trader-friendly option in the lineup. The lower price ($422) and lower funded target (1%) add to the appeal.</p>
				<p class="mb-0">The tradeoff is tighter drawdown (6% trailing vs 10% on the regular 2 Step) and a lower daily limit (3% vs 5%). The no-news rule and minimum profitable days still apply. But if you can work within those constraints, this is the FundingPips product where the rules get in the way the least.</p>
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
