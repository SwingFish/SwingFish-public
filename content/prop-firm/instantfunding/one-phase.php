<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; One Phase</h1>
<p class="lead text-muted">One Phase &amp; One Phase Micro &mdash; single evaluation, then funded. Static drawdown with consistency rules.</p>

<div class="row g-4 mb-4">
	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				The One Phase line requires a single evaluation pass before funding. Drawdown is static and the rules are straightforward. The Standard variant has looser consistency (40%) but tighter drawdown (8%); the Micro variant flips it &mdash; wider drawdown tolerance but stricter consistency (15%).
			</div>

			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:35%">One Phase</th>
							<th style="width:35%">One Phase Micro</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Price (100K)</strong></td><td>$649</td><td>$259</td></tr>
						<tr><td><strong>Phases</strong></td><td colspan="2">1 evaluation + funded</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>10%</td><td>7%</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>11.5% (10% + 1.5% min payout)</td><td>8.5% (7% + 1.5% min payout)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>3%</td><td>3%</td></tr>
						<tr><td><strong>Max Loss</strong></td><td>8% static</td><td>7% static</td></tr>
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
						<h6>One Phase</h6>
						<p class="small mb-0">Higher target (10%), wider drawdown (8%), relaxed consistency (40%). Suits traders who can deliver a big evaluation run but want room to breathe on individual days.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>One Phase Micro</h6>
						<p class="small mb-0">Lower target (7%), tighter drawdown (7%), strict consistency (15%). Much cheaper ($259 vs $649). Suits consistent traders with even daily performance. The lower price makes it a good entry point.</p>
					</div>
				</div>
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
