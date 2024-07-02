<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('jogos.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Nome -->
                        <div class="mb-4">
                            <label for="nome" class="block mb-2 text-sm font-bold text-gray-700">Nome:</label>
                            <input type="text" id="nome" name="nome" class="block w-full rounded-md shadow-sm form-input" value="{{ old('nome') }}">
                            @error('nome')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Descrição -->
                        <div class="mb-4">
                            <label for="descricao" class="block mb-2 text-sm font-bold text-gray-700">Descrição:</label>
                            <textarea id="descricao" name="descricao" rows="3" class="block w-full rounded-md shadow-sm form-textarea">{{ old('descricao') }}</textarea>
                            @error('descricao')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Requisitos -->
                        <div class="mb-4">
                            <label for="requisitos" class="block mb-2 text-sm font-bold text-gray-700">Requisitos:</label>
                            <textarea id="requisitos" name="requisitos" rows="3" class="block w-full rounded-md shadow-sm form-textarea">{{ old('requisitos') }}</textarea>
                            @error('requisitos')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Imagens -->
                        <!-- Imagens -->
<!-- Imagens -->
<div class="mb-4">
    <label for="imagens" class="block mb-2 text-sm font-bold text-gray-700">Imagem (URL):</label>
    <input type="text" id="imagens" name="imagens" class="block w-full rounded-md shadow-sm form-input" value="{{ old('imagens') }}">
    @error('imagens')
        <span class="text-red-500">{{ $message }}
    @enderror
</div>


                        <!-- Avaliação -->
                        <div class="mb-4">
                            <label for="avaliacao" class="block mb-2 text-sm font-bold text-gray-700">Avaliação:</label>
                             <input type="number" id="avaliacao" name="avaliacao" min="0" max="10" class="block w-full rounded-md shadow-sm form-input" value="{{ old('avaliacao') }}">
                            @error('avaliacao')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Data de Lançamento -->
                        <div class="mb-4">
                            <label for="data_lancamento" class="block mb-2 text-sm font-bold text-gray-700">Data de Lançamento:</label>
                            <input type="date" id="data_lancamento" name="data_lancamento" class="block w-full rounded-md shadow-sm form-input" value="{{ old('data_lancamento') }}">
                            @error('data_lancamento')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Distribuidora -->
                        <div class="mb-4">
                            <label for="distribuidoras_id" class="block mb-2 text-sm font-bold text-gray-700">Distribuidora:</label>
                            <select id="distribuidoras_id" name="distribuidoras_id" class="block w-full rounded-md shadow-sm form-select">
                                @foreach ($distribuidoras as $distribuidora)
                                    <option value="{{ $distribuidora->id }}" {{ old('distribuidoras_id') == $distribuidora->id ? 'selected' : '' }}>{{ $distribuidora->nome }}</option>
                                @endforeach
                            </select>
                            @error('distribuidoras_id')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Gênero -->
                        <div class="mb-4">
                            <label for="genero_id" class="block mb-2 text-sm font-bold text-gray-700">Gênero:</label>
                            <select id="genero_id" name="genero_id" class="block w-full rounded-md shadow-sm form-select">
                                @foreach ($generos as $genero)
                                    <option value="{{ $genero->id }}" {{ old('genero_id') == $genero->id ? 'selected' : '' }}>{{ $genero->nome }}</option>
                                @endforeach
                            </select>
                            @error('genero_id')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 btn btn-primary">
                            Criar Jogo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
