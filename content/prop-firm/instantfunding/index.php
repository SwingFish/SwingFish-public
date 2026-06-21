<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>

<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?></h1>
<p class="lead text-muted">Many traders report successful payouts. The main concerns are the smart-drawdown lock-in trap and the copy-trading ambiguity between the website and the PDF terms.</p>

<div class="row g-4 mb-4">

	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				<strong>InstantFunding</strong> is one of the most popular instant-funding firms. Products fall into four groups: <strong>Instant Funded</strong>, <strong>Standard</strong>, <strong>Micro</strong>, and the newer <strong>Clarity</strong> line.
			</div>
			<p class="text-muted small">InstantFunding also offers additional products (IF1, Crypto, Prime) that are not covered here yet.</p>

			<h2>Product Groups</h2>
			<p>All InstantFunding products share the same firm, the same terms documents, and the same support. The difference is in the mechanics.</p>

			<div class="row g-3 mb-4">
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#17a2b8">&#9679;</span> Instant Funded</h5>
						<p class="small text-muted">IF, IF GO</p>
						<ul class="small mb-0">
							<li><strong>No evaluation</strong></li>
							<li>No profit target</li>
							<li>No consistency rule</li>
							<li>10% DD &rarr; locks to 5%</li>
							<li>Smart drawdown</li>
							<li>Monthly payouts</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#17a2b8">&#9679;</span> Standard</h5>
						<p class="small text-muted">One Phase, Two Phase</p>
						<ul class="small mb-0">
							<li><strong>1 or 2 phase evaluation</strong></li>
							<li>8&ndash;10% static drawdown</li>
							<li>3&ndash;5% daily loss limit</li>
							<li>40% consistency rule</li>
							<li>Every 4 days payout</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100">
						<h5><span style="color:#17a2b8">&#9679;</span> Micro</h5>
						<p class="small text-muted">IF Micro, One Phase Micro, Two Phase Micro</p>
						<ul class="small mb-0">
							<li><strong>Lower price point</strong></li>
							<li>6&ndash;10% static drawdown</li>
							<li>3&ndash;4% daily loss limit</li>
							<li>15% consistency rule</li>
							<li>Every 8 days payout</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="sf2-widget h-100 border-danger">
						<h5><span style="color:#dc3545">&#9679;</span> Clarity</h5>
						<p class="small text-muted">IF Micro Clarity, One Phase Clarity</p>
						<ul class="small mb-0">
							<li><strong>Trailing drawdown</strong></li>
							<li>6% trailing max loss</li>
							<li>&ldquo;Risk Management Toolkit&rdquo;</li>
							<li>Equity auto-close 1.5&ndash;2%*</li>
							<li>50% split after RMT trigger</li>
							<li>Reduced funded leverage</li>
						</ul>
						<p class="small text-muted mt-2 mb-0">* Inconsistent across pages. Needs verification.</p>
					</div>
				</div>
			</div>

			<h2>Key Differences</h2>
			<div class="row g-3 mb-4">
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Drawdown</h6>
						<p class="small mb-0"><strong>Instant Funded</strong> starts generous (10%) but locks permanently to 5% after you profit. <strong>Standard</strong> and <strong>Micro</strong> are static &mdash; what you see is what you get, it never changes. <strong>Clarity</strong> uses trailing drawdown &mdash; the floor follows your highest balance, so you can never bank a safety buffer. Standard and Micro are the most predictable.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Risk Management Toolkit</h6>
						<p class="small mb-0">Clarity&rsquo;s headline feature. Marketed as a &ldquo;toolkit&rdquo; &mdash; in practice it&rsquo;s an auto-close mechanism similar to Blue Guardian&rsquo;s Guardian Shield. If floating equity exceeds the threshold, positions are force-closed and your profit split permanently drops to 50%. Second trigger breaches the account. InstantFunding is at least upfront about this existing &mdash; unlike some competitors.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Leverage</h6>
						<p class="small mb-0"><strong>Instant Funded</strong>, <strong>Standard</strong> and <strong>Micro</strong> maintain the same leverage from evaluation to funded. <strong>Clarity</strong> reduces leverage on metals, oil and indices for funded accounts (temporarily 1:5). Strategies that pass evaluation may not work once funded.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sf2-widget h-100">
						<h6>Who is each for?</h6>
						<p class="small mb-0"><strong>Instant Funded</strong> skips evaluation entirely &mdash; maximum flexibility, highest price. <strong>Standard</strong> suits traders comfortable with evaluation and wanting wider drawdown. <strong>Micro</strong> is the budget option with tighter consistency. <strong>Clarity</strong> suits &mdash; honestly, it&rsquo;s hard to say who benefits from trailing drawdown combined with an equity auto-close. <a href="/prop-firm/instantfunding/clarity">Read the full analysis</a>.</p>
					</div>
				</div>
			</div>

		<div class="alert alert-warning">
			<strong>Note: Three Conflicting Terms Documents</strong><br>
			InstantFunding has <strong>three different PDF terms documents</strong> on their website, all linked from the footer or contact page, with conflicting language:
			<ul class="mb-0 mt-2">
				<li><strong>Account Agreement (Oct 2025)</strong> - the controlling document. Explicitly states it governs all services. Has the most detailed prohibited list, including "copying between internal accounts", tick scalping, third-party EAs, latency arbitrage, front-running, and a 3% risk-per-trade rule. This takes precedence over the others.</li>
				<li><strong>Acello GTC (Dec 2025)</strong> - general terms that state "in the event of any inconsistency, the Instant Funding Agreement shall prevail." Adds VPN/VPS/datacenter usage and shared IPs to the prohibited list.</li>
				<li><strong>Acello GTC (Nov 2025)</strong> - older version of the GTC, missing the VPN/VPS ban. Still accessible via the contact form.</li>
			</ul>
			<p class="mb-0 mt-2"><strong>Why this matters:</strong> a trader reading only the Acello GTC would see "copy trading between accounts that are not owned by the same individual" - implying copying between your own accounts is fine. But the Account Agreement (which takes precedence) bans "copying between internal accounts" - no exception. The 3% risk-per-trade rule only exists in the Account Agreement, not the GTC. Three documents means the firm can choose which to enforce in a dispute.</p>
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

		<div class="sf2-alert">
			<strong>Note from SwingFish</strong>
			<p class="mb-0 mt-2"><em>No personal experience with this firm yet. The three conflicting PDFs are the biggest red flag - this is the only firm on this page where you cannot be sure which terms apply to your account. The smart-drawdown lock is the mechanical trap; the document chaos is the legal trap. If you sign up, screenshot which version of each PDF was active on your purchase date, and get any copy-trading assurances from support in writing.</em></p>
		</div>
	</div>

</div>
