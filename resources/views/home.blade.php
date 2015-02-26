@extends('app')

@section('content')
<div class="container committee-view">
	@foreach ($committees as $committee)
		<div class="col-md-3">
			<div><a href="knowledge/{{ $committee['id'] }}"><h2 class="text-center">{{ $committee['name'] }}</h2></a></div>
		</div>
	@endforeach
</div>
@endsection
