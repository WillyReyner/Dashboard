<!DOCTYPE html>
<html>
<head>
    <title>Partidas do Campeonato</title>
</head>
<body>
    <h1>Partidas do Campeonato</h1>
    <ul>
        @foreach ($partidas as $partida)
            <li>
                <p>Partida: {{ $partida['nome'] }}</p>
                <p>Local: {{ $partida['local'] }}</p>
                <p>Data: {{ $partida['data_realizacao'] }}</p>
                <p>Hora: {{ $partida['hora_realizacao'] }}</p>
                <!-- Exiba outras informações relevantes da partida aqui -->
            </li>
        @endforeach
    </ul>
</body>
</html>
