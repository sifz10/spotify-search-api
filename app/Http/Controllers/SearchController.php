<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use pcrov\JsonReader\JsonReader;

class SearchController extends Controller
{
    public function index(Request $request)
    {
      return view('index');
    }

    public function searchPost(Request $request)
    {
      $response = Http::withToken('BQA2jxXtQ9U3gW3egxbbaK6oOXOXDE8rdTA_7vKFZdUod3Rw5pve1iIbldfIkELcNWACS55ds_-aSbfmJqEwYxZX0B6OAQbY-FOROIkc88bn9Cl_Ggd1B73KU_73KR6Ek8PnmUZf6K8TRj03eyn1HW13imrWti_evZY')->get('https://api.spotify.com/v1/search?q='.$request->search.'&type=track&limit=10&offset=10');
      $result = json_decode($response);
      return view('result', compact('result'));
    }
}
