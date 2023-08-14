<!DOCTYPE html>
<html>
<head>
    <title>Fase do Campeonato</title>
</head>
<body>
    <h1>Detalhes da Fase</h1>
    @if ($fase)
        <p>Nome da Fase: {{ $fase['nome'] }}</p>
        <!-- Exiba outras informações relevantes da fase aqui -->
    @else
        <p>Nenhum dado da fase encontrado.</p>
    @endif
</body>
</html>
