<?php if (!isset($broker_meta)) { header('Location: /brokers'); exit; } ?>

<div class="row g-4">
	<div class="col-lg-8">

		<div class="sf2-post-card">
			<div class="p-3">
				<?php if ($broker_ib) : ?>
				<a href="<?=htmlspecialchars($broker_ib)?>" target="_blank" class="btn btn-sm btn-danger float-end">IC Markets Website</a>
				<?php endif; ?>
				<a href="<?=htmlspecialchars($broker_ib ?: '#')?>" target="_blank"><img src="<?=htmlspecialchars($broker_logo)?>" alt="IC Markets" class="float-end ms-3 mb-2" style="max-width:120px"></a>

				<p>An Australian Foreign Exchange Broker, with by far the best execution background we have seen in the Retail Realm so far.</p>
				<p>With multiple server locations, providing an average execution speed of under 40ms. Close to 50 liquidity providers such as Citi, XTX, UBS, Credit Suisse, Goldman Sachs, HSBC and more.</p>
				<p>IC Markets provides outstanding execution even on exotic assets and keeps spreads at a minimum even during major events. With 468 BILLION USD traded just in August 2018, over 60,000 worldwide clients, IC Markets is THE go-to partner.</p>
			</div>
		</div>

		<div class="accordion mt-3" id="broker-accordion">
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#markets">Markets offered (221 Symbols, 77 for cTrader)</button>
				</h2>
				<div id="markets" class="accordion-collapse collapse" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<ul>
							<li>60 Forex Symbols</li>
							<li>19 Commodities <small class="text-muted">**</small></li>
							<li>120 CFD Stocks <small class="text-muted">**</small></li>
							<li>17 Indices</li>
							<li>5 Bonds <small class="text-muted">**</small></li>
						</ul>
						<p class="text-end"><small class="text-muted">All assets are offered on CFD basis.<br>** not or only partly available on cTrader</small></p>
					</div>
				</div>
			</div>

			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#opinion">SwingFish Opinion on IC Markets</button>
				</h2>
				<div id="opinion" class="accordion-collapse collapse show" data-bs-parent="#broker-accordion">
					<div class="accordion-body">
						<h6>Performance, Flexibility, and Potentials resulting of it, outweigh by far the downsides</h6>
						<p>You don't have to search for long to find things to complain about IC Markets:</p>
						<ul>
							<li>Horrible front end support</li>
							<li>Website is full of marketing but little facts</li>
							<li>Front-page looks like from the future, but once you signed up &amp; logged on, you're right back in 2005</li>
							<li>Basically no client care beyond the business itself</li>
							<li>Massive advertising showing a clear message about the target clients they pursue</li>
						</ul>
						<hr>
						<p>The online support is very responsive, even in peak times there is basically never a queue to use the online chat. But asking anything that's not public information leads to being told to contact support via email. On the other side, with the huge client creation through advertising and partners, there is likely a huge amount of basic questions being asked anyway. If you do have some volume you trade with, you will have an account manager which you can call or email directly.</p>
						<hr>
						<p><img src="/assets/brokers/icmarkets-clientcabinet.png" class="float-end ms-3 mb-2" style="max-width:180px" alt="IC Markets Client Cabinet">To back that claim, here's a nice example: the screenshot shows the sidebar of the Client Cabinet. Having a 5-digit account balance makes the currency show one line below, messing with the layout. It's not a bug, all data is displayed correctly, however the fact that this is happening since several years now makes it clear that the majority of clients may never see this "issue".</p>
						<hr>
						<p>With all the gossip out of the way, SwingFish does highly recommend IC Markets as primary broker. The good outweighs the bad by far:</p>
						<ul>
							<li>Transferring really large amounts (higher than 50k) is just the same matter to them as transferring $50. They may call you to confirm it, and the money is on your account in a jiff. It is your money, and IC Markets treats it like it.</li>
							<li>Having an account manager can solve almost all of the support issues mentioned</li>
							<li>The execution speed is lightning fast and extremely stable</li>
							<li>There is basically no slippage to note, even on larger sizes like 35 lots and more &mdash; this fact alone is already a huge edge against most other brokers</li>
							<li>The "low spread" promise is solid even on so called "exotics" &mdash; if the liquidity is given, IC Markets will relay it to the clients</li>
							<li>Almost all indices have overnight price feeds &mdash; where all others are waiting for the gap, with IC Markets you can already be in the trade</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="sf2-post-card">
			<?php $visit_url = $broker_ib ?: $broker_url; ?>
			<?php if ($broker_logo) : ?>
			<a href="<?=htmlspecialchars($visit_url)?>" target="_blank">
				<div class="sf2-post-card-media"><img src="<?=htmlspecialchars($broker_logo)?>" alt="<?=htmlspecialchars($broker_name)?>" class="sf2-post-card-img"></div>
			</a>
			<?php endif; ?>
			<div class="p-3">
				<?php if ($visit_url) : ?>
				<p class="mb-3"><a href="<?=htmlspecialchars($visit_url)?>" target="_blank" class="btn btn-sm btn-outline-primary w-100">Visit <?=htmlspecialchars($broker_name)?></a></p>
				<?php endif; ?>
				<h6><i class="bi bi-award"></i> Features</h6>
				<ul class="list-unstyled mb-0">
					<?php foreach ($broker_meta['features'] ?? array() as $f) : ?>
					<li class="mb-1"><i class="bi bi-check-circle text-success me-1"></i> <?=htmlspecialchars($f)?></li>
					<?php endforeach; ?>
					<?php foreach ($broker_meta['restrictions'] ?? array() as $r) : ?>
					<li class="mb-1"><i class="bi bi-x-circle text-danger me-1"></i> <?=htmlspecialchars($r)?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<?php if (!empty($broker_meta['ratings'])) : ?>
		<div class="sf2-post-card mt-3">
			<div class="p-3">
				<h6><i class="bi bi-bar-chart"></i> Quick Ratings</h6>
				<?php foreach ($broker_meta['ratings'] as $label => $score) :
					$color = $score >= 7 ? 'bg-success' : ($score >= 4 ? 'bg-warning' : 'bg-danger');
				?>
				<div class="mb-2">
					<div class="d-flex justify-content-between small">
						<span><?=htmlspecialchars($label)?></span>
						<span><?=$score?>/10</span>
					</div>
					<div class="progress" style="height:6px">
						<div class="progress-bar <?=$color?>" style="width:<?=$score * 10?>%"></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php endif; ?>

		<?php if (!empty($broker_related_posts)) : ?>
		<div class="sf2-post-card mt-3">
			<div class="p-3">
				<h6><i class="bi bi-link-45deg"></i> Recent Posts</h6>
				<ul class="list-unstyled mb-0 small">
					<?php foreach ($broker_related_posts as $rp) : ?>
					<li class="mb-1"><a href="<?=htmlspecialchars($rp['link'])?>"><?=htmlspecialchars($rp['title'])?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
