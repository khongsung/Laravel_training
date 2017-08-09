<h1>index.php</h1>
{{ $title }}
<h2> {{ $name }} </h2>
<pre>
	@php
		@print_r($object)
	@endphp
</pre>