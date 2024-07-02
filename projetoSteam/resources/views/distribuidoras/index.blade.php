<x-app-layout>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <div class="container mt-4">
        <a href="{{ route('distribuidoras.create') }}" class="mb-3 btn btn-primary">Nova Distribuidora</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($distribuidoras as $distribuidora)
                    <tr>
                        <td>{{ $distribuidora->id }}</td>
                        <td>{{ $distribuidora->nome }}</td>
                        <td>{{ $distribuidora->descricao }}</td>
                        <td>
                            <a href="{{ route('distribuidoras.show', $distribuidora->id) }}" class="btn btn-info me-2">Detalhes</a>
                            <a href="{{ route('distribuidoras.edit', $distribuidora->id) }}" class="btn btn-warning me-2">Editar</a>
                            <form action="{{ route('distribuidoras.destroy', $distribuidora->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
