@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div class="col-mf-6 offset-md-3" id="event-create-container">

    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do evento</label>
            <input type="file"  id="image" name="image" class="from-control-file image">
        </div>

        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>

        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>

        <div class="form-group">
            <label for="private">O evento é privado</label>
            <select name="private" id="private" class="forme-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btn-dark" value="Criar Evento">
    </form>
</div>

@endsection