<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>

<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?></h1>
<p class="lead text-muted">Multiple red flags: the footer says payouts are &ldquo;discretionary&rdquo;, Guardian Shield has permanent consequences, risk reviews are subjective, and support &amp; management come across as immature.</p>

<div class="row g-4 mb-4">

	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-warning">
				<strong>Caution with Blue Guardian</strong><br>
				Blue Guardian has the most aggressive fine print of any firm on this page. Their footer states that "payouts are discretionary, not guaranteed" - a direct contradiction of their marketing. Read every word carefully.
			</div>

			<div class="alert alert-danger">
				<strong>Guardian Shield</strong><br>
				The Guardian Shield (1% floating loss auto-close) permanently drops your profit split to 50% on first activation, and terminates the account on the second.
			</div>

			<div class="alert alert-danger">
				<strong>The Drawdown Lock Trap</strong><br>
				Blue Guardian's trailing drawdown locks at the initial balance once you reach +6% profit. This means: if you make 10% on a $100K account ($110K) and withdraw 8% ($8K, leaving $102K), your max loss is still calculated from the starting $100K - so you can only lose $2K more before breaching. Normal trailing drawdown would still give you 6% of $110K ($6,600) as buffer. The lock-in mechanism makes your risk buffer shrink with every withdrawal.
			</div>

			<div class="alert alert-secondary">
				<strong>Note from SwingFish</strong><br>
				<strong>Personal experience:</strong> signed up and paid for a Blue Guardian account. The registration form auto-filled the wrong country. Immediately emailed support asking them to correct the error. Instead of helping, they accused me of fraud, banned my account, and refused a refund. No warning, no opportunity to provide ID proof - just an immediate ban and loss of my fee. This behaviour is consistent with their "discretionary" payout policy: if they can deny a simple correction request and call it fraud, they can deny a legitimate payout request the same way.
			</div>

		</div>
	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card p-3 text-center mb-3">
			<img src="/assets/prop-firms/Blue-Guardian_logo.png" alt="Blue Guardian" class="img-fluid" style="max-height: 80px;" onerror="this.style.display='none'">
		</div>

		<?php prop_firm_related_posts('blueguardian', 'Blue Guardian'); ?>
	</div>

</div>
