<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <header>
            <div id="app"></div>
        </header>

        <main>
            <h2>Playlist:</h2>
            @if ($tracks->isEmpty())
                <p>TUT PU5T0</p>
            @else
                <ul>
                    @foreach ($tracks as $track)
                        <li>
                            <strong> {{ $track->title }} </strong><br>
                            Artist: {{ $track->artist }} <br>
                            Duration: {{ $track->duration }} sec.
                        </li>
                    @endforeach
                </ul>
            @endif

        </main>
        <footer></footer>

    </body>
</html>
