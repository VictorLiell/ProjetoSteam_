<x-app-layout>
    <div class="card">
        <img src="{{ $jogo->imagens }}" class="card-img-top" alt="{{ $jogo->nome }}">
        <div class="card-body">
            <h5 class="card-title">{{ $jogo->nome }}</h5>
            <p class="card-text">{{ $jogo->descricao }}</p>
            <p class="card-text"><strong>Gênero:</strong> {{ $jogo->genero->nome }}</p>
            <p class="card-text"><strong>Distribuidora:</strong> {{ $jogo->distribuidora->nome }}</p>
            <p class="card-text"><strong>Data de Lançamento:</strong> {{ $jogo->data_lancamento }}</p>
            <p class="card-text"><strong>Avaliação:</strong> {{ $jogo->avaliacao }}</p>
        </div>
    </div>
</x-app-layout>
