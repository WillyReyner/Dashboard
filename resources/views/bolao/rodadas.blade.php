<!DOCTYPE html>
<html>
<head>
    <title>Rodadas do Campeonato</title>
</head>
<body>
    <h1>Rodadas do Campeonato</h1>
    <ul>
        @foreach ($rodadas as $rodada)
            <li>
                <a href="{{ route('api-futebol.rodada', ['campeonato_id' => $campeonato_id, 'rodada' => $rodada['rodada']]) }}">
                    Rodada {{ $rodada['rodada'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
