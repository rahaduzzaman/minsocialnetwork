@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-body panel-center text-center">
			<img style="max-width: 150px; border: 5px solid #fff;
			box-shadow: 0,2px,2px, rgba(0,0,0,0.3);" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRe2n0dQjseCRehcrwOlUBRRWUoi3jk1lcsLmYKOZcg3t3iQUPoyw">

			<h1>{{ $user->username }}</h1>
		</div>
	</div>
</div>

@endsection







