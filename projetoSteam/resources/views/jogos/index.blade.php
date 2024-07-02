<x-app-layout>
    <div class="row">
        <a href="{{ route('jogos.create') }}" class="btn btn-success">Create New Game</a>
        @foreach ($jogo as $game)
            <div class="mb-4 col-md-4">
                <div class="mx-3 my-5 card">
                    <img src="{{ $game->imagens }}" class="card-img-top" alt="Game Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->nome }}</h5>
                        <p class="card-text">{{ $game->descricao }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('jogos.show', $game->id) }}" class="btn btn-primary">Details</a>
                            <form action="{{ route('jogos.destroy', $game->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('jogos.edit', $game->id) }}" class="btn btn-secondary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
