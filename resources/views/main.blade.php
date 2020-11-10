<!doctype html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    @foreach($data as $item)
        <div class="card" style="width: 800px; margin: 0 auto">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->body }}</p>
                <a href="#" class="card-link">Card link</a>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->views }}</h6>
                <button>Edit</button>
                <button>Delete</button>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>