@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitar consultoria</div>
                <form action="{{ route('consultoria.enviarResposta') }}" method="get">
                    @csrf

                    <div class="card-body">
                        <label>Escreva sua resposta</label>
                        <textarea name="conteudo" cols="30" rows="10"></textarea>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection