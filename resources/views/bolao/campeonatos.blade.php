<!DOCTYPE html>
<html>
<head>
    <title>Campeonatos</title>
</head>
<body>
    <h1>Campeonatos Disponíveis</h1>
    <ul>
        @foreach ($campeonatos as $campeonato)
            <li>
                <a href="{{ route('api-futebol.partidas', $campeonato['campeonato_id']) }}">
                    {{ $campeonato['nome'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
