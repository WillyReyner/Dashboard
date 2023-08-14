<!DOCTYPE html>
<html>
<head>
    <title>Partidas em Tempo Real</title>
</head>
<body>
    <h1>Partidas em Tempo Real</h1>
    @if (!empty($partidasAoVivo))
        <ul>
            @foreach ($partidasAoVivo as $partida)
                <li>
                    <p>Partida: {{ $partida['nome'] }}</p>
                    <p>Local: {{ $partida['local'] }}</p>
                    <p>Data: {{ $partida['data_realizacao'] }}</p>
                    <p>Hora: {{ $partida['hora_realizacao'] }}</p>
                    <!-- Exiba outras informações relevantes da partida aqui -->
                </li>
            @endforeach
        </ul>
    @else
        <p>Não há partidas em tempo real disponíveis no momento.</p>
    @endif
</body>
</html>
