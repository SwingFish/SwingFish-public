<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; IF Micro</h1>
<p class="lead text-muted">Instant funded with static drawdown, a consistency rule, and a lower price point. The predictable middle ground.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				IF Micro is the instant-funded alternative to the Standard line. No evaluation, but with tighter rules: static drawdown (never tightens), a 4% daily loss limit, and a 15% consistency requirement. What you see is what you get.
			</div>

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:70%">IF Micro</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$589</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>None</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>5% (to meet consistency + min payout)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>4%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>6% static</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td>Static &mdash; never changes</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td>15% &mdash; best day &le; 15% of total profit</td></tr>
						<tr><td><strong>Profit Split</strong></td><td>80% (90% after scaling)</td></tr>
						<tr><td><strong>Payout</strong></td><td>On demand after meeting consistency</td></tr>
						<tr><td><strong>Scaling</strong></td><td>Doubles each time, up to 100% of starting balance</td></tr>
					</tbody>
				</table>
			</div>

			<h2>Why Micro over Standard?</h2>
			<div class="sf2-widget mb-3">
				<p><strong>Predictability.</strong> The Standard line starts with 10% drawdown but locks to 5% permanently after you profit. Micro gives you 6% and it stays at 6%. No surprises, no ratchet. For consistent traders, this is often the safer pick.</p>
				<p class="mb-0">The tradeoff is the 15% consistency rule and 4% daily limit. If your strategy relies on a few big days, Micro will force you to spread gains out. If you trade with moderate, even sizing anyway, these rules cost you nothing.</p>
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
