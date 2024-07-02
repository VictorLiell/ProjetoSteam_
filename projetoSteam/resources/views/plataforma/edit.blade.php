<x-app-layout>
    <div class="container">
        <form action="{{ route('plataforma.update', $plataforma->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="text-white form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $plataforma->nome }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</x-app-layout>
