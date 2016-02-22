<html>
	<body>
		@foreach ($stories as  $story)
			<p>{{ $story->title }}</p>
			<p>{{ $story->description}}</p>
		@endforeach
	</body>
</html>