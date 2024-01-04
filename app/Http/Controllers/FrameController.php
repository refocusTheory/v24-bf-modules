<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IframeEndpoints;

class FrameController extends Controller
{
    //
    public function getUrl() {
        // Get the first URL from the DB.
        $url = IframeEndpoints::first();
//dd($url);
        // Pass the URL to the view.
        return view('dashboard', ['url' => $url->url]);
    }

    public function showPageWithIframe()
{
    // Assuming you have retrieved the user's email and preAuthToken
    $userEmail = Auth::user()->email;
    $preAuthToken = "dgsgdgdg"; // Generate and pass this token from App A

    // Send API request to App B to log in the user
    $response = Http::post('https://app-b.example.com/preauthtoken/' . $preAuthToken, [
        'email' => $userEmail,
    ]);

    // Check the response from App B
    if ($response->successful()) {
        return view('page_with_iframe');
    } else {
        return response()->json(['error' => 'Unable to log in user in App B'], 500);
    }
}
}
