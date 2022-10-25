@extends('layouts.main')

@section('title', 'Editando' . $event->title)

@section('content')

<div class="col-mf-6 offset-md-3" id="event-create-container">

    <h1>Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group" id="checkbox-items">
            <label for="image">Imagem do evento</label>
            <input type="file"  id="image" name="image" class="from-control-file image">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="title">Data do evento</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="private">O evento é privado</label>
            <select name="private" id="private" class="forme-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="description">Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description}}</textarea>
        </div>
        <div class="form-group" id="checkbox-items">
            <label for="title">Adicione itens de infraestrutura: </label>
            <div class="from-group">
                <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
            </div>
        </div>
        <div class="form-group" id="checkbox-items">
            <div class="from-group">
                <input type="checkbox" name="items[]" value="Palco">Palco
            </div>
        </div>
        <div class="form-group" id="checkbox-items">
            <div class="from-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis">Cerveja grátis
            </div>
        </div>
        <div class="form-group" id="checkbox-items">
            <div class="from-group">
                <input type="checkbox" name="items[]" value="Open Food">Open Food
            </div>
        </div>
        <div class="form-group" id="checkbox-items">
            <div class="from-group">
                <input type="checkbox" name="items[]" value="Brindes">Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-dark" value="Editar Evento">
    </form>
</div>

@endsection