<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreviousSearch;
use Unirest;


class WordController extends Controller
{
    //get previous search
    public function index ()
    {
    	$words = [];
    	// add order by updated date
    	$words = PreviousSearch::orderBy('updated_at', 'DESC')
    		->paginate(10);
    	
    	return view('index', compact('words'));

    }


    public function searchWord(Request $request)
    {
    	
    	$query = $request->get('word');
    	//save search word to Previous Search

    	//check if the word already exists
    	$new_word = PreviousSearch::where('word', 'like', $query)
    			->first();
    	if($new_word)
    	{
    		$new_word->touch();//update date
    	}
    	else
    	{
    		$new_word = new PreviousSearch;
    		$new_word->word = $query;
    		$new_word->save();
    	}
    	
	
		$url = "https://wordsapiv1.p.rapidapi.com/words/".$query."";
    	$word = 0;
    	$response = Unirest\Request::get($url,
		  array(
		    "X-RapidAPI-Host" => "wordsapiv1.p.rapidapi.com",
		    "X-RapidAPI-Key" => "adafe7ab57msh04c74863d0d927fp15d3bfjsn7d35e2d07c2b"
		  )
		);

		if($response->code == 200)
		{
			$word = $response->body;
		}
		
	
    		
		return view('result', compact('word'));
  		
  		

		
    }
  
}
