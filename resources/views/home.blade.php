<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
    <div id="app">
        <header>
            <App></App>
        </header>

        <main>
            <Playlist></Playlist>


            {{-- <h2>Playlist:</h2>
            @if ($tracks->isEmpty())
                <p>TUT PU5T0</p>
            @else
                <ul>
                    @foreach ($tracks as $track)
                        <li>
                            <strong>{{ $track->artist }} </strong> - {{ $track->title }} <br>
                            Duration: {{ $track->duration }}s.
                        </li>
                    @endforeach
                </ul>
            @endif

            <h3>Загрузить Трек:</h3>
            <form action="{{ route('tracks.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="file">Выберете файл</label>
                <input type="file" name="file" id="file" accept="audio/mp3" required>
                <button> Загрузить </button>

            </form> --}}

        </main>
        <footer></footer>
    </div>
    </body>
</html>
