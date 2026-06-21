<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; Instant Funded</h1>
<p class="lead text-muted">IF &amp; IF GO &mdash; no evaluation, no profit target, no consistency rule. The most flexible products in the lineup.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				The Instant Funded line skips the evaluation phase entirely. You buy the account, you trade, you get paid. The catch is the smart drawdown lock &mdash; after +5% gain, your 10% drawdown permanently tightens to 5%.
			</div>

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:35%">IF</th>
							<th style="width:35%">IF GO</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$4,624*</td><td>$3,699*</td></tr>
						<tr><td><strong>Profit Target</strong></td><td colspan="2">None</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td colspan="2">5% (smart drawdown lock before payout)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>None</td><td>20% of max DD</td></tr>
						<tr><td><strong>Max Loss</strong></td><td colspan="2">10% &rarr; locks to 5% after +5% gain</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td colspan="2">Smart drawdown &mdash; static, then permanently tighter after lock</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td colspan="2">None</td></tr>
						<tr><td><strong>Profit Split</strong></td><td colspan="2">80% (90% after scaling)</td></tr>
						<tr><td><strong>Payout</strong></td><td colspan="2">Monthly after smart drawdown lock</td></tr>
						<tr><td><strong>Scaling</strong></td><td colspan="2">Doubles each time, up to $1.28M, costs 5% of starting balance</td></tr>
					</tbody>
				</table>
			</div>

			<h2>The Smart Drawdown Lock</h2>
			<div class="sf2-widget mb-3">
				<p>The main selling point is &ldquo;no profit target&rdquo; &mdash; but to request a payout you must first reach +5% to lock the smart drawdown. Before the lock, your max drawdown is 10% from the starting balance. After the lock, it permanently tightens to 5%.</p>
				<p class="mb-0">This means: the moment you qualify for payout, your safety buffer halves permanently. Every subsequent cycle starts with half the room. It&rsquo;s not a target &mdash; it&rsquo;s a one-way ratchet.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>IF vs IF GO</h5>
				<p class="mb-0">The GO variant is cheaper but adds a daily loss limit (20% of max drawdown). IF has no daily limit at all. If you need intraday flexibility, IF is the one. If cost matters more, GO trades a small constraint for a lower price.</p>
			</div>

		</div>
	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card p-3 text-center mb-3">
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener">
				<img src="/assets/prop-firms/instantfunding_logo.png" alt="InstantFunding" class="img-fluid mb-2" style="max-height: 80px;" onerror="this.style.display='none'">
			</a>
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener" class="btn sf2-btn-primary w-100">Visit InstantFunding</a>
		</div>
		<?php prop_firm_related_posts('instantfunding', 'InstantFunding'); ?>
	</div>

</div>
