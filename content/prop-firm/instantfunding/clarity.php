<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>
<div class="sf2-cat-badges">
	<span class="badge" style="background-color:#dc3545">&#9679; Avoid</span>
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">Firm: <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?> &mdash; Clarity Products</h1>
<p class="lead text-muted">IF Micro Clarity &amp; One Phase Clarity &mdash; the marketing says &ldquo;Risk Management Toolkit&rdquo;, the rules say &ldquo;permanent penalty on normal trading&rdquo;.</p>

<div class="row g-4 mb-4">

	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-danger">
				<strong>This product line has a fundamentally different risk profile from InstantFunding's other offerings.</strong> The firm's overall "Positive" rating does not apply here. This page covers both Clarity products: IF Micro Clarity (instant funded) and One Phase Clarity (evaluation).
			</div>

			<h2>The Products</h2>
			<div class="table-responsive">
				<table class="table table-striped align-middle">
					<thead>
						<tr>
							<th style="width:30%">Rule</th>
							<th style="width:35%">IF Micro Clarity</th>
							<th style="width:35%">One Phase Clarity</th>
						</tr>
					</thead>
					<tbody>
						<tr><td><strong>Type</strong></td><td>Instant funded</td><td>One-phase evaluation</td></tr>
						<tr><td><strong>Profit Target</strong></td><td>None (5% to payout)</td><td>9% to pass</td></tr>
						<tr><td><strong>1st Target (effective)</strong></td><td>5%</td><td>10.5% (9% + 1.5% min withdrawal)</td></tr>
						<tr><td><strong>Max Daily Loss</strong></td><td>4%</td><td>4%</td></tr>
						<tr><td><strong>Max Drawdown</strong></td><td colspan="2">6% <strong>trailing</strong></td></tr>
						<tr><td><strong>Risk Management Toolkit</strong></td><td colspan="2">Equity auto-close at 1.5&ndash;2%* &mdash; first trigger permanently drops split to 50%, second trigger breaches the account</td></tr>
						<tr><td><strong>Profit Split</strong></td><td colspan="2">80% (90% with add-on) &mdash; 50% after RMT trigger</td></tr>
						<tr><td><strong>Consistency</strong></td><td>15%</td><td>None stated</td></tr>
						<tr><td><strong>Payout</strong></td><td>On demand</td><td>Instant, then every 7 days (1.5% min)</td></tr>
						<tr><td><strong>Scaling</strong></td><td colspan="2">+25% every 90 days at 10% profit, up to 2x starting size</td></tr>
						<tr><td><strong>Leverage (funded)</strong></td><td colspan="2">Forex 1:30, Indices 1:20, Metals/Oil 1:5*</td></tr>
						<tr><td><strong>Inactivity</strong></td><td colspan="2">60 days</td></tr>
					</tbody>
				</table>
			</div>
			<p class="text-muted small">* The equity auto-close threshold shows as 1.5% on some pages and 2% on others. These are brand new products &mdash; we need to verify the actual value on a live account. Funded leverage on metals, oil and indices is reduced to 1:5 (&ldquo;temporarily&rdquo;).</p>

			<h2>The Risk Management Toolkit</h2>

			<div class="sf2-widget mb-3">
				<h5>What it is</h5>
				<p>InstantFunding markets this as a &ldquo;Risk Management Toolkit&rdquo; &mdash; a set of automated safeguards to protect traders from large drawdowns. In practice, it&rsquo;s an equity auto-close: if your floating P&amp;L exceeds the threshold, positions are force-closed.</p>
				<p class="mb-0">This is functionally identical to Blue Guardian&rsquo;s &ldquo;Guardian Shield&rdquo;. The difference is that <strong>InstantFunding is upfront about it</strong> &mdash; it&rsquo;s named, documented, and explained on the product page. Credit where it&rsquo;s due: they&rsquo;re not hiding the mechanic. Whether the mechanic itself is good for traders is a different question.</p>
			</div>

			<div class="sf2-widget mb-3">
				<h5>Why it&rsquo;s a problem</h5>
				<p>The RMT punishes normal trading. Holding a winner through a move, scaling into a position, or being in a trade during a volatility spike &mdash; all of these can trigger the auto-close. First trigger permanently halves your profit split from 80% to 50%. Second trigger breaches the account.</p>
				<p class="mb-0">This effectively caps per-trade upside at 1.5&ndash;2% while daily downside remains at 4%. The risk/reward is inverted by design.</p>
			</div>

			<h2>The Trailing Drawdown</h2>

			<div class="sf2-widget mb-3">
				<h5>Not the same as Standard or Micro</h5>
				<p>InstantFunding&rsquo;s Standard products use smart drawdown (static that locks tighter). Micro products use static drawdown (never changes). Clarity uses <strong>trailing drawdown</strong> &mdash; the floor follows your highest closed balance.</p>
				<p class="mb-0">With a 9% target and 6% trailing DD on the One Phase, the math is brutal: you need to gain 9% without ever pulling back 6% from your peak. You can never build a cushion. For context, FTMO gives you 10% static DD with similar targets.</p>
			</div>

			<h2>Leverage Mismatch</h2>

			<div class="sf2-widget mb-3">
				<p class="mb-0">Evaluation runs at full leverage. Funded accounts get reduced leverage on metals, oil and indices (&ldquo;temporarily&rdquo; 1:5). A strategy that passes evaluation may not be executable once funded. This applies to both Clarity products.</p>
			</div>

			<div class="alert alert-warning">
				<strong>Bottom line:</strong> The Clarity line combines trailing drawdown with an equity auto-close that permanently penalises normal trading behaviour. Each of these alone would be a yellow flag. Together they create products where the odds are structurally stacked against the trader. InstantFunding deserves credit for being transparent about the RMT mechanic &mdash; but transparency doesn&rsquo;t make the mechanic fair. Their Standard and Micro products don&rsquo;t have these issues.
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

		<div class="sf2-alert">
			<strong>Note from SwingFish</strong>
			<p class="mb-0 mt-2"><em>InstantFunding is generally a decent firm &mdash; their Standard and Micro products are rated "Positive" for a reason. The Clarity products, however, are not something we would recommend. The trailing drawdown combined with the equity auto-close creates a scenario where normal trading behaviour triggers penalties. That said, unlike some competitors, InstantFunding is at least honest about what the RMT does. The product is bad; the disclosure is not.</em></p>
		</div>
	</div>

</div>
