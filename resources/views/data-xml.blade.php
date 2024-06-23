<?xml version="1.0" encoding="UTF-8"?>
<listaAlbums>
@foreach ($registros as $item)
    <album>
        <autor>{{ $item->autor }}</autor>   
        <generoMusical>{{ $item->genero_musical }}</generoMusical>
        <qtdMusicas>{{ $item->qtd_musicas }}</qtdMusicas>
        <tempoMin>{{ $item->tempo_min }}</tempoMin>
        <dataLancamento>{{ $item->data_lancamento }}</dataLancamento>
    </album>
@endforeach
</listaAlbums>