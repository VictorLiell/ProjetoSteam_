<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<x-app-layout>
    <div class="container">
        <a href="{{ route('genero.create') }}" class="my-3 btn btn-primary">Novo Genero</a>

        <table class="table my-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genero as $genero)
                <tr>
                    <td>{{ $genero->id }}</td>
                    <td>{{ $genero->nome }}</td>
                    <td class="flex flex-row min-w-full">
                        <form action="{{ route('genero.destroy', $genero) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this genre?')">Excluir</button>
                        </form>
                        <a href="{{ route('genero.edit', $genero) }}" class="mx-3 btn btn-primary ">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
