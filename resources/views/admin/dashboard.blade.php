@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                {{-- <button type="button" class="btn btn-warning">
                    <a href="{{route("project.index", $project)}}">Visita tutti i progetti</a>
                </button> --}}

            </div>
        </div>
    </div>
</div>
@endsection