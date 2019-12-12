@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			@if(count($words) > 0)

				<div class="col-md-8 col-sm-12">
					<h6>Previous Searches</h6>
					<div class="list-group">
						@foreach($words as $result)
							<a href="{{ route('search', ['word'=>$result->word]) }}" class="list-group-item list-group-item-action">
								{{$result->word}}
							</a>
						@endforeach
						
					</div>
					<br>
					<span>{{ $words->links() }}</span>
				</div>
			@else
				<div class="col-md-8 col-sm-12">
					
					<div class="alert alert-info" role="alert">
					  	<strong>No Recent Searches!</strong> Please type a word and click search.
					</div>
					
				</div>

			@endif
		</div>
	</div>
	
@endsection