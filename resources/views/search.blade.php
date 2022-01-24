<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Code Challenge</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: sans-serif;
            height: 100vh;
            margin: 50px;
        }

        .full-height {
            height: 100vh;
        }

        .result {
        }
    </style>
</head>
<body>
    
<div class="full-height">
    <div class="result">
        Your Search Term Was: <b>{{$searchTerm}}</b>
    </div>
   
    <div class="result">
        <div class="container">
            <div class="row">
               
                {{-- Below Div shows the Artists' Information --}}
              <div class="col-sm-4">
                  <h1>Artists</h1>
                  <hr>
                        @foreach($artists as $singleArtist)
                            
                        @foreach($singleArtist['items'] as $artist)
                        
                        <a href="{{url('/artist/'.$artist['id'])}}">{{$artist['name']}} :</a>   
                        @if(!empty($artist['images'][1]['url']))
                        <?php   $image=$artist['images'][1]['url']; 
                        ?>
                    <a href="{{url('/artist/'.$artist['id'])}}"><image src="{{$image}}" alt="Picture" width=40 height= 40/></a>
                        @endif


                        <br>
                        <hr>
                        @endforeach  
                        @endforeach
                    </div>

                    {{-- Below Div shows the Tracks' Information --}}
                            <div class="col-sm-4">
                                <h1>Tracks</h1>
                                <hr>
                                @foreach($tracks as $singletrack)
                            
                                @foreach($singletrack['items'] as $track)
                               
                                <a href="{{url('/track/'.$track['id'])}}">  {{$track['name']}} : </a>
                                @if(!empty($track['album']['images'][0]['url']))
                                <?php   $image=$track['album']['images'][0]['url']; 
                                ?>
                             <a href="{{url('/track/'.$track['id'])}}"><image src="{{$image}}" alt="Picture" width=40 height= 40/></a>
                                @endif
                                
                                
                                <br>
                                <hr>
                                @endforeach  
                                @endforeach
                            </div>

                            {{-- Below Div shows the Albums' Information --}}
                                        <div class="col-sm-4">
                                            <h1>Albums</h1>
                                            <hr>
                                            @foreach($tracks as $albums)
                                        
                                            @foreach($albums['items'] as $album)
                                            
                                            <a href="{{url('/album/'.$album['album']['id'])}}">{{$album['album']['name']}} : </a>
                                            @if(!empty($album['album']['images'][2]['url']))
                                            <?php   $image=$album['album']['images'][2]['url']; 
                                            ?>
                                              <a href="{{url('/album/'.$album['album']['id'])}}"><image src="{{$image}}" alt="Picture" width=40 height= 40/></a>
                                            @endif
                                            
                                            
                                            <br>
                                            <hr>
                                            @endforeach  
                                            @endforeach
                                        </div>
            </div>
        </div>
            
              
            </div>
          </div>
       
    </div>
</div>
</body>
</html>
