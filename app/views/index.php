<div class="app" style="background-image: url('{{ asset('img/bgimg.jpg') }}');">
	<div class="overlay">
		<div class="header">
			<h1>{{ __('app.welcome') }}</h1>
		</div>

		<div class="content">
			<div class="content-message">
				<div class="content-message-icon">{!! html_entity_decode('&#x1F680') !!}</div>
				<div class="content-message-text">{{ __('app.description') }}</div>
			</div>

			<div class="content-stats">
				PHP {{ phpversion() }} | {{ php_uname('s') . ' ' . php_uname('v') . ' ' . php_uname('m')}} | {{ date('Y-m-d H:i') . ' (' . date_default_timezone_get() . ')' }} | Render time {{ round(microtime(true) - ASATRU_START, 4) }}s
			</div>
		</div>
		
		<div class="footer">
			<div class="footer-info">&copy; 2019 - 2025 {{ ASATRU_FW_AUTHOR }} - licensed under the MIT license</div>

			<did class="footer-buttons">
				<div class="link">
					<a class="button btn-col-repo" href="https://github.com/danielbrendel/dnyAsatruPHP-Framework">GitHub</a>
				</div>

				<div class="link">
					<a class="button btn-col-repo" href="https://packagist.org/packages/danielbrendel/asatru-php">Packagist</a>
				</div>

				<div class="link">
					<a class="button btn-col-doc" href="{{ asset('doc/documentation.pdf') }}">Documentation</a>
				</div>

				<div class="link">
					<a class="button btn-col-contact" href="mailto:{{ ASATRU_FW_CONTACT }}">Contact</a>
				</div>
			</div>
		</div>
	</div>
</div>