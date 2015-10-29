<div class="jumbotron {{ $other_classes or ''}}">
	<h1>{{ $title }}</h1>
	<p>{{ $message }}</p>
	@if (isset($button) && isset($button_message))
	<p>
		<a class="btn btn-primary btn-lg" href="{{ $button }}" role="button">
		{{ $button_message }}
		</a>
	</p>
	@endif
</div>