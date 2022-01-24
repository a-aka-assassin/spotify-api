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
        Extra Information
    </div>
   
    <div class="result">
        <div class="container">
            <div class="row">
                
              <div class="col-sm-4">
                  <h1>Artist</h1>
                  <h2>Name: {{$artistInfo['name']}}</h2>
                  <hr>
                  <h2>Popularity: {{$artistInfo['popularity']}}</h2>
                  <hr>
                  <h2>Type: {{$artistInfo['type']}}</h2>
              </div>

                     <div class="col-sm-4">
                        <h1>Genres</h1>
                        @foreach($artistInfo['genres'] as $artist)
                        {{$artist}}
                        <hr>
                        @endforeach
                     </div>
                     
                            <div class="col-sm-4">
                                <h1>Image</h1>
                                @if(!empty($artistInfo['images'][0]['url']))
                                <?php   $image=$artistInfo['images'][0]['url']; 
                                ?>
                                <image src="{{$image}}" alt="Picture" width=350 height= 350/>
                                @endif
                               
                             </div>
            </div>
        </div>
            
              
            </div>
          </div>
       
    </div>
</div>
</body>
</html>
