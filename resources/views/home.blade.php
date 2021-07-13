<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">

        <title>Laravel Comics</title>
       
    </head>
    <body>
        @include('partials/header')

        <main>
            <div class="container">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                    <p>{{ $comic["series"] }}</p>
                </div>
            @endforeach 
            </div>
        </main>

        @include('partials/footer')
    </body>
</html>
