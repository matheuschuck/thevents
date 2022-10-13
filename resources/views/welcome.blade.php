@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h2 class="search-container-h2 text-white">Próximos eventos</h2>
    <div class="">
        <h1 class="text-white bg-secondary w-50 mb-4 rounded mx-auto">Buscar evento</h1>
        <form action="/" method="GET">
            <input type="text" id='search' name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
</div>
<div id="events-container" class="col-md-12">
    <h2 class="text-white bg-secondary">Próximos Eventos</h2>
    <p >Veja os eventos dos próximos dias</p>
    <div id="cards-containers" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <!-- <img class="mb-3" src="/img/plane.jpeg" alt="{{$event->title}}"> -->
                <img class="mb-3" src="/img/events/{{ $event->image }}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0)
            <p>Não há eventos disponíveis!</p>
        @endif
    </div>
</div>
<div class="h5 m-5 p-5" >

    <!-- <img class="mb-3" src="/img/plane.jpeg" alt="PLANE"> -->

    <br><a href="/sobre">Sobre</a>
</div>
{{--comentario no blade--}}
@endsection