@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4">
        <button type="button" class="btn btn-warning">
            <a href="{{route("fumetti.create")}}">Aggiungi un fumetto</a>
        </button>

        <div class="col d-flex flex-wrap">
            @foreach ($projects as $project)
            <div class="card m-3 " style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title">{{$project ->title}}</h5>
                 {{-- <a href="{{route("fumetti.show", $fumetto->id)}}"><img src="{{$fumetto ->thumb}}" alt="{{$fumetto ->title}}"></a>  --}}
                  <img src="{{$project ->img}}" alt="">
                  <p class="card-text">Descrizione: {{$project ->description}}</p>
                  <p class="card-text">Series: {{$fumetto ->series}}</p>
        
                </div>
            </div>
                
            @endforeach
        </div>
       
    </div>

</div>
@endsection