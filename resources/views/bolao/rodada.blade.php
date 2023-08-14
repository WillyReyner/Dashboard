<!DOCTYPE html>
<html>
<head>
    <title>Rodada do Campeonato</title>
</head>
<body>
    <h1>Detalhes da Rodada</h1>
    @if ($rodadaData)
        <p>Número da Rodada: {{ $rodadaData['rodada'] }}</p>
        <!-- Exiba outras informações relevantes da rodada aqui -->
    @else
        <p>Nenhum dado da rodada encontrado.</p>
    @endif
</body>
</html>
