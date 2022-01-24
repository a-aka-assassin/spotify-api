<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index()
    {
        return view('index');
    }

//Search function is dealing with the token generation and spotify api communication

    public function search(Request $request)
    {
        $query = $request->get('query');
        
        $guzzle = new \GuzzleHttp\Client;

        $tokenResponse = $guzzle->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '75388d2721bb4b82a3eff15b86316273',
                'client_secret' => '9dc4e88fce2043ce951836c89a6dc127',
              
            ],
          ]);
        
        $token=json_decode((string) $tokenResponse->getBody(), true)['access_token'];
       
        $artistFinder = $guzzle->get('https://api.spotify.com/v1/search?q='.$query.'&type=artist', [
          'headers' => [
            'Authorization' => "Bearer {$token}",
          ],
        
       ]);

      $trackFinder = $guzzle->get('https://api.spotify.com/v1/search?q='.$query.'&type=track', [
        'headers' => [
          'Authorization' => "Bearer {$token}",
        ],
      
    ]);
    
      $artists=json_decode((string) $artistFinder->getBody(), true);
      $tracks=json_decode((string) $trackFinder->getBody(), true);    

      return view('search', ['searchTerm' => $query, 'artists'=>$artists, 'tracks'=>$tracks]);
    }

 //Artist function is dealing with the token generation and specific artist api communication

    public function artist(Request $request)
    {
     
      $id=$request->id;
      $guzzle = new \GuzzleHttp\Client;

        $tokenResponse = $guzzle->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '75388d2721bb4b82a3eff15b86316273',
                'client_secret' => '9dc4e88fce2043ce951836c89a6dc127',
              
            ],
        ]);
        $token=json_decode((string) $tokenResponse->getBody(), true)['access_token'];
       
        
        $apiResponse = $guzzle->get('https://api.spotify.com/v1/artists/'.$id, [
          'headers' => [
            'Authorization' => "Bearer {$token}",
          ],
        
      ]);
      $artistInfo=json_decode((string) $apiResponse->getBody(), true);
      return view('find', ['artistInfo'=>$artistInfo]);
   
    }


 //Track function is dealing with the token generation and specific track api communication

 public function track(Request $request)
    {
     
      $id=$request->id;
      $guzzle = new \GuzzleHttp\Client;

        $tokenResponse = $guzzle->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '75388d2721bb4b82a3eff15b86316273',
                'client_secret' => '9dc4e88fce2043ce951836c89a6dc127',
              
            ],
        ]);
        $token=json_decode((string) $tokenResponse->getBody(), true)['access_token'];
       
        
        $apiResponse = $guzzle->get('https://api.spotify.com/v1/tracks/'.$id, [
          'headers' => [
            'Authorization' => "Bearer {$token}",
          ],
        
      ]);
      $trackInfo=json_decode((string) $apiResponse->getBody(), true);
      return view('tracks', ['trackInfo'=>$trackInfo]);
   
    }

//Album function is dealing with the token generation and specific album api communication

    public function album(Request $request)
    {
     
      $id=$request->id;
      $guzzle = new \GuzzleHttp\Client;

        $tokenResponse = $guzzle->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '75388d2721bb4b82a3eff15b86316273',
                'client_secret' => '9dc4e88fce2043ce951836c89a6dc127',
              
            ],
        ]);
        $token=json_decode((string) $tokenResponse->getBody(), true)['access_token'];
       
        
        $apiResponse = $guzzle->get('https://api.spotify.com/v1/albums/'.$id, [
          'headers' => [
            'Authorization' => "Bearer {$token}",
          ],
        
      ]);
      $albumInfo=json_decode((string) $apiResponse->getBody(), true);
      return view('album', ['albumInfo'=>$albumInfo]);
   
    }

}
