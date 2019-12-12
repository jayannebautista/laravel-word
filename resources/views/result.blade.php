@extends('app')

@section('content')
	<div class="container ">
		<div class="row">
			@if($word)
				<div class="col-sm-12 border-success border px-md-5 py-md-5 rounded" >
				
						<h3>{{$word->word}}</h3>
						
						@foreach($word->results as $result)
							<p class="speech"><em>{{$result->partOfSpeech}}</em></p>
							<p> - {{$result->definition}}</p>
							
							@isset($result->synonyms)
								<p>synonyms : 
								
									@foreach($result->synonyms as $synonym)
										<span class="badge badge-warning">{{$synonym}}</span>

									@endforeach
								</p>
								
							@endisset
							@isset($result->examples)
								
								<p>examples : </p>
									<ul>
									@foreach($result->examples as $example)
										<li class="example"><em>{{$example}}</em></li>
									@endforeach
									</ul>
							@endisset

							<hr>
						@endforeach
						

					
				</div>
			@else
				<div class="col-sm-12">
					<div class="alert alert-info" role="alert">
					  	<strong>Oops!</strong> No results found.
					</div>
				</div>
			@endif
			
		</div>
		
	</div>
	
@endsection