<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="container mt-3">
    <h2>Detalhes da Distribuidora</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $distribuidora->nome }}</h5>
            <p class="card-text">{{ $distribuidora->descricao }}</p>
            <a href="{{ route('distribuidoras.edit', $distribuidora->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
</div>
