@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div class="col-mf-6 offset-md-3" id="event-create-container">

    <h1>Crie seu evento</h1>
    <form action="/evets" method="POST"></form>
    <div class="form-group">
        <label for="title">Evento</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
    </div>

    <div class="form-group">
        <label for="title">Cidade</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
    </div>

    <div class="form-group">
        <label for="title">O evento é privado</label>
        <select name="private" id="private" class="forme-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        
    </div>

    <div class="form-group">
        <label for="title">Descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <input type="submit">
</div>

@endsection