<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; Two Phase</h1>
<p class="lead text-muted">Two Phase &amp; Two Phase Micro &mdash; classic two-step evaluation with the widest drawdown in the lineup.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				The Two Phase line is InstantFunding&rsquo;s most traditional offering &mdash; two evaluation steps, then funded. In return you get the widest drawdown (10% static) and the highest effective first target. Closest to the classic FTMO model.
			</div>

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:35%">Two Phase</th>
							<th style="width:35%">Two Phase Micro</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$539</td><td>$413</td></tr>
						<tr><td><strong>Phases</strong></td><td colspan="2">2 evaluations + funded</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>8% + 5%</td><td>8% + 4%</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>14.5% (8% + 5% + 1.5% min payout)</td><td>13.5% (8% + 4% + 1.5% min payout)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>5%</td><td>4%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>10% static</td><td>10% static</td></tr>
						<tr><td><strong>Drawdown Type</strong></td><td colspan="2">Static</td></tr>
						<tr><td><strong>Consistency Rule</strong></td><td>40%</td><td>15%</td></tr>
						<tr><td><strong>Profit Split</strong></td><td colspan="2">80% (90% after scaling)</td></tr>
						<tr><td><strong>Payout</strong></td><td>Every 4 days*</td><td>Every 8 days*</td></tr>
						<tr><td><strong>Scaling</strong></td><td colspan="2">Doubles each time</td></tr>
					</tbody>
				</table>
			</div>
			<p class="text-muted small">* Best-case payout cycle &mdash; actual timing depends on meeting consistency and minimum profitable days.</p>

			<h2>Standard vs Micro</h2>
			<div class="row g-3 mb-3">
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Two Phase</h6>
						<p class="small mb-0">10% drawdown, 5% daily, 40% consistency. The widest safety net in the IF lineup. Two evaluation steps means a longer road to funding, but 10% static drawdown gives you serious room to operate. Closest competitor to FTMO&rsquo;s 2-Step.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Two Phase Micro</h6>
						<p class="small mb-0">Same 10% drawdown but tighter daily (4%) and strict consistency (15%). Cheaper ($413 vs $539). The consistency rule forces even daily returns, which pairs naturally with the two-step evaluation &mdash; you need sustained performance anyway.</p>
					</div>
				</div>
			</div>

			<div class="sf2-widget mb-3">
				<h5>Two Phase vs FTMO</h5>
				<p class="mb-0">Direct comparison: FTMO 2-Step is $540, 15% combined target, 10% drawdown, no consistency rule, 14-day payout cycle. IF Two Phase is $539, 14.5% combined target, 10% drawdown, 40% consistency, 4-day payout cycle. Nearly identical on price and drawdown. IF has a slight edge on target and payout speed, FTMO has the edge on no consistency rule and a decade-long track record. Both are solid.</p>
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
