<!DOCTYPE html>
<html>
<head>
    <title>Campeonato</title>
</head>
<body>
    <h1>Detalhes do Campeonato</h1>
    @if ($campeonato)
        <p>Nome do Campeonato: {{ $campeonato['nome'] }}</p>
        <!-- Exiba outras informações relevantes do campeonato aqui -->
    @else
        <p>Nenhum dado do campeonato encontrado.</p>
    @endif
</body>
</html>
