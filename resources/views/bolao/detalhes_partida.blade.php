<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Partida</title>
</head>
<body>
    <h1>Detalhes da Partida</h1>
    <p>Partida: {{ $detalhesPartida['nome'] }}</p>
    <p>Local: {{ $detalhesPartida['local'] }}</p>
    <p>Data: {{ $detalhesPartida['data_realizacao'] }}</p>
    <p>Hora: {{ $detalhesPartida['hora_realizacao'] }}</p>
    <!-- Exiba outras informações relevantes da partida aqui -->
</body>
</html>
