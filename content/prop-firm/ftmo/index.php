<?php if (!isset($firm_meta)) { header('Location: /prop-firms'); exit; } ?>

<div class="sf2-cat-badges">
	<span class="badge" style="background-color:<?=htmlspecialchars($firm_color)?>">&#9679; <?=htmlspecialchars($firm_flag)?></span>
</div>
<h1 class="sf2-page-title"><?=htmlspecialchars($firm_name)?></h1>
<p class="lead text-muted">Clear rules, a simple process, over a decade of proven consistency, and overwhelmingly positive customer feedback.</p>

<div class="row g-4 mb-4">

	<div class="col-lg-8">
		<div class="sf2-post-content">

			<div class="alert alert-info">
				<strong>FTMO</strong> is the pioneer of prop trading, and has kept the clean approach from 2015 until today. There isn't really anything to mention about the practice and process - it just works.
			</div>

			<div class="alert alert-secondary">
				The classic 2-Step Challenge has no additional rules, while the newer 1-Step Challenge comes with a 50% consistency requirement - but honestly, if 50% consistency is a problem, trading is likely not for you anyway.
			</div>

			<div class="sf2-widget mb-3">
				<h5>Note from SwingFish</h5>
				<p>My experience is shaped not only by being a trader, but also by years of direct interaction with the company and management, in both business-to-business and business-to-client environments.</p>
				<p>Those interactions provided a unique perspective on how FTMO operates behind the scenes, from day-to-day support and problem resolution up to larger operational and strategic decisions. Throughout that time, I consistently found their team to be professional, responsive, and focused on creating sustainable outcomes for all parties involved.</p>
				<p class="mb-0">In my opinion, <strong>FTMO remains the gold standard of prop trading</strong>.</p>
                <br>
                <center><img src="/assets/prop-firms/ftmo/ftmo_payout_Jun-2021.jpg"></center>
			</div>

		</div>
	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card p-3 text-center mb-3">
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener">
				<img src="/assets/prop-firms/FTMO_Logo_darktransparent-Martin-Mihalik.png" alt="FTMO" class="img-fluid mb-2" style="max-height: 80px;" onerror="this.style.display='none'">
			</a>
			<a href="<?=htmlspecialchars($firm_meta['url'] ?? '#')?>" target="_blank" rel="noopener" class="btn sf2-btn-primary w-100">Visit FTMO</a>
		</div>

		<?php prop_firm_related_posts('ftmo', 'FTMO'); ?>
	</div>

</div>
