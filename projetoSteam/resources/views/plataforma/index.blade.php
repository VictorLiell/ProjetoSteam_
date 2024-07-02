<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<x-app-layout>
    <div class="container">
        <h2 class="my-3 text-white">Plataformas</h2>
        <a href="{{ route('plataforma.create') }}" class="my-3 btn btn-primary">Nova Plataforma</a>
        <table class="table my-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plataformas as $plataforma)
                <tr>
                    <td>{{ $plataforma->id }}</td>
                    <td>{{ $plataforma->nome }}</td>
                    <td class="flex flex-row">
                        <form action="{{ route('plataforma.destroy', $plataforma->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                        <a href="{{ route('plataforma.edit', $plataforma->id) }}" class="px-3 mx-3 btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
