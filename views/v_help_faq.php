	<!-- if user is logged in, display their profile -->
	<?php if ($user): ?>

<div class="faq-div">
<span  class='score-title-span'>FAQ</span>
</div>

<div id="accordion">
	<h3>What is Devanagari?</h3>
		<div>
			<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
		</div>
	<h3>Velar, Palatal... What is this?</h3>
		<div>
			<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
		</div>
	<h3>Why do 1,3,4 look so familiar</h3>
		<div>
			<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
		</div>
</div>

	<!-- else ask them to sign up or log in -->
	<?php else: ?>

		<div class="nouser">

			<!-- make these links -->
			Please sign up or log in

		</div>

	<?php endif; ?>
