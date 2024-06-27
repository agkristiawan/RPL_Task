<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak; // Replace with your actual model

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform search query using your model
        $results = Anak::where('nama_anak', 'LIKE', '%'.$query.'%')->get();

        // Return view with results
        return view('search-results', compact('results'));
    }
}

