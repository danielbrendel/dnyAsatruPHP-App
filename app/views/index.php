<!-- Example yield file -->

<div class="outer">
	<div class="inner">
		<div class="title">
			<h1>{{ __('app.welcome') }}</h1>
		</div>

		<div class="text">
			<p>
				{{ __('app.description') }}
			</p>
		</div>

		<div class="links">
			<div class="link">
				<button class="button btn-col-repo" type="button" onclick="window.open('https://github.com/danielbrendel/dnyAsatruPHP');">Visit on GitHub</button>&nbsp;
			</div>

			<div class="link">
				<button class="button btn-col-repo" type="button" onclick="window.open('https://packagist.org/packages/danielbrendel/asatru-php');">Visit on Packagist</button>&nbsp;
			</div>

			<div class="link">
				<button class="button btn-col-doc" type="button" onclick="location.href='{{ Asatru\Helper\base_url() }}/doc/documentation.pdf'">Documentation</button>
			</div>

			<div class="link">
				<button class="button btn-col-contact" type="button" onclick="location.href='mailto:{{ ASATRU_FW_CONTACT }}'">Contact me</button>
			</div>
		</div>

		<div class="footer">
			<div class="centered">&copy; 2019 {{ ASATRU_FW_AUTHOR }} - licensed under the MIT license</div>
		</div>
	</div>
</div>