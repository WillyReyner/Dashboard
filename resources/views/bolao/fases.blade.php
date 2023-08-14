<!DOCTYPE html>
<html>
<head>
    <title>Fases do Campeonato</title>
</head>
<body>
    <h1>Fases do Campeonato</h1>
    <ul>
        @foreach ($fases as $fase)
            <li>
                <a href="{{ route('api-futebol.fase', ['campeonato_id' => $campeonato_id, 'fase_id' => $fase['fase_id']]) }}">
                    {{ $fase['nome'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
