@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($consultorias as $consultoria)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <input type="hide" name="idConsultoria" value="{{ $consultoria->id }}">
            <div class="card-title"><h3>{{ $consultoria->motivo }}</h3></div>
            <div class="card-title"><h3>route('consultoria.responder', $consultoria->id)</h3></div>
            <div class="card-text">
                Created By: <b>{{ $consultoria->user->name }}</b><br />
                Created At: {{ $consultoria->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection