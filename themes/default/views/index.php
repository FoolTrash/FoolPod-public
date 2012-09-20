<?php if (!defined('DOCROOT')) exit('No direct script access allowed');?>
<div class="row">
	<div class="span9">	
		<div class="row">
			<div class="span9">	
				<div class="hero-unit">
					<h1>The future is (not) here.</h1>
					<p>Are we there yet?</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span9">
				<h4>Presenting FoolFuuka, the most advanced (and complex*) Imageboard ever created.</h4>
				<h6 style="color:#aaa">[*] you will never see the complex stuff.</h6>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<p>FoolFuuka is born to be a high performance imageboard, that does everything.</p>
				<p>We've included the most wanted user interface features, we've implemented the best search engine, cooked in a brilliant administration interface, baked some themes, wrote a dozen of plugins.</p>
				<p>And we've made this work with one hundred million posts and hundreds of users connected at the same time.<strong>*</strong>
				<p>FoolFuuka is the best solution to create a honest community. Check it out.</p>
				<h6 style="color:#aaa">[*] without caching.</h6>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<h3><i class="icon icon-search"></i> Search</h3>
				<p>Good by itself, glorious if you use SphinxSearch. The search function is the most wanted feature of FoolFuuka. You could have a field day with it.</p>
			</div>

			<div class="span3">
				<h3><i class="icon icon-comments-alt"></i> Ghost</h3>
				<p>Unlike other imageboards, FoolFuuka never prunes its data. The Ghost mode allows talking indefinitely in threads without bumping the old ones.</p>
			</div>

			<div class="span3">
				<h3><i class="icon icon-dashboard"></i> Administrate</h3>
				<p>We went heavy-handed on the admin panel. We dislike the idea of writing into config files, so about the 70% of the work we did went into caring about you.</p>
			</div>
		</div>

		<div class="row">
			<div class="span3">
				<h3><i class="icon icon-leaf"></i> Light</h3>
				<p>FoolFuuka is incredibly light. It is built for the biggest 4chan archive ever existed, and chances are you're never going to reach such amount of visitors and data.</p>
			</div>

			<div class="span3">
				<h3><i class="icon icon-picture"></i> Themes</h3>
				<p>FoolFuuka sports a very complete theme system. Ever heard of child themes? You can remix your imageboard without limits, so it won't look like all the others.</p>
			</div>

			<div class="span3">
				<h3><i class="icon icon-gift"></i> Plugins</h3>
				<p>We've put several functions into small packages that you can activate from the admin panel. That way you can keep the bloat off your site.</p>
			</div>
		</div>
	</div>
		
	<div class="span3">
		<div class="row">
			<div class="span3">
				<h3><i class="icon icon-github"></i> The Foolz repos</h3>
				<p>Just like every lovely person we store all our Open Source code on Github.</p>
				<p>Not all of it is still functional, so read the README!</p>
				<p><a href="https://github.com/foolrulez" class="btn btn-large btn-primary">github.com/FoolRulez</a>
			</div>
		</div>
		
		<div class="row" style="margin-top:10px">
			<div class="span3">
				<img src="<?= \Uri::base().$this->fallback_asset('images/foolslide_logo.png') ?>">
				<h5 style="text-align:center">PHP Comic Reader</h5>
				<p>Our comic reader. The reading experience your loyal followers deserve to have in a browser.</p>
				<p><a href="https://github.com/foolrulez/foolslide" class="btn btn-large btn-primary">FoolRulez/FoolSlide</a>
			</div>
		</div>
		
		<div class="row">
			<div class="span3">
				<h5><i class="icon icon-search"></i> SphinxQL Query Builder for PHP</h5>
				<p>Our PHP query builder for the SphinxQL SQL dialect. Much faster than the API, incredibly more flexible.</p>
				<p><a href="https://github.com/foolrulez/fuel-sphinxql" class="btn btn-large btn-primary">FoolRulez/Fuel-SphinxQL</a>
			</div>
		</div>
		
		<div class="row">
			<div class="span3">
				<h5><i class="icon icon-globe"></i> Inet: decimal IPs in PHP</h5>
				<p>IPs are numbers. Numbers are faster to process than strings, and occupy less space. That's why you want IPs as numbers. This class does that, and is IPv6 compatible.</p>
				<p><a href="https://github.com/foolrulez/inet" class="btn btn-large btn-primary">FoolRulez/Inet</a>
			</div>
		</div>
	</div>
</div>