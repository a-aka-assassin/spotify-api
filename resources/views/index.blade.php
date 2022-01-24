<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Code Challenge</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .img {
            width: 5vw
        }

        .search {
            margin-left: 100px;
        }
    </style>
</head>
<body>
<div class="flex-center full-height">
    <div>
        <label for="search-box"><img alt="logo" src="/img/logo.svg" class="img" /></label>
    </div>
    <div class="search">
        <form method="post" action="/search">
            {{csrf_field()}}
            <input id="search-box" name="query" type="text" placeholder="search term" />
            <button type="submit">Search for Artists</button>

        </form>
    </div>
</div>
</body>
</html>
