<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body><!-- questions taken from http://davidshariff.com/quiz/ -->
<header>
	<small>Multiple Choice Quiz w/ jQuery</small>
</header>
<div id="emc-score"></div>
<div class="wrap">
	<div class="row">
		<section data-quiz-item>
			<div class="question">
				Are CSS property names case-sensitive?<br>Ex:
				<code>baCkgRouNd: #333;</code>
			</div>
			<div class="choices" data-choices='["Yes","No"]'></div>
		</section>
		<section data-quiz-item>
			<div class="question">
				Does setting
				<code>margin-top:</code>
				and
				<code>margin-bottom:</code>
				have an affect on an inline element?
			</div>
			<div class="choices" data-choices='["Yes","No"]'></div>
		</section>
	</div>
	<div class="row">
		<section data-quiz-item>
			<div class="question">
				The
				<code>translate()</code>
				function can move the position of an element on the z-axis.
			</div>
			<div class="choices" data-choices='["True","False"]'></div>
		</section>
		<section data-quiz-item>
			<div class="question">
				The pseudo class
				<code>:checked</code>
				will select inputs with type radio or checkbox, but not option
				elements.
			</div>
			<div class="choices" data-choices='["True","False"]'></div>
		</section>
	</div>
	<div class="row">
		<section data-quiz-item>
			<div class="question">
				Does setting
				<code>padding-top:</code>
				and
				<code>padding-bottom:</code>
				on an inline element add to its dimensions?
			</div>
			<div class="choices" data-choices='["Yes","No"]'></div>
		</section>
		<section data-quiz-item>
			<div class="question">
				If you have a
				<code>p</code>
				element with
				<code>font-size: 10rem;</code>
				, will the text be responsive when the user resizes / drags the
				browser window?
			</div>
			<div class="choices" data-choices='["Yes","No"]'></div>
		</section>
	</div>
	<div class="row last">
		<section data-quiz-item>
			<div class="question">
				In a HTML document, the pseudo class
				<code>:root</code>
				always refers to the html element.
			</div>
			<div class="choices" data-choices='["True","False"]'></div>
		</section>
		<section data-quiz-item>
			<div class="question">The formula context/target = result is useful
				when building responsive layouts.</div>
			<div class="choices" data-choices='["True","False"]'></div>
		</section>
	</div>
	<div class="submit">
		<button id="emc-submit">Submit Answers</button>
	</div>
</div>

<footer>
	<div id="emc-progress"></div>
</footer>
<div class="attrib">
	<p>
		Take the full quiz <i class="fa fa-long-arrow-right"></i> <a
			href="http://davidshariff.com/quiz/" target="_blank">http://davidshariff.com/quiz/</a>
	</p>
</div>
</body>
</html>