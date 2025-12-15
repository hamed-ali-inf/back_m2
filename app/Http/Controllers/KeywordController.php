<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeywordSearch;
use App\Services\GoogleSearchService;
use App\Services\GeminiService;

class KeywordController extends Controller
{
    /**
     * Search keywords using Google Search + Gemini
     */
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|min:3',
        ]);

        $query = $request->input('query');

        // 1️⃣ Get text from Google Search
        $googleText = app(GoogleSearchService::class)->search($query);

        // 2️⃣ Extract keywords using Gemini
        $keywords = app(GeminiService::class)->extractKeywords($googleText);

        // 3️⃣ Save result in database
        $record = KeywordSearch::create([
            'query'    => $query,
            'keywords' => $keywords,
        ]);

        return response()->json([
            'success' => true,
            'data' => [
                'query'    => $query,
                'keywords' => $keywords,
            ],
        ], 200);
    }
}
