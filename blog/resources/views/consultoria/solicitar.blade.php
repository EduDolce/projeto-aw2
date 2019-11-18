@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>
                <form action="{{ route('consultoria.solicitar') }}" method="post">
                    <div class="card-body">
                        @csrf
                        <label>Lesão ocular</label>
                        <input type="text" class="form-control" name="lesaoOcular" />
                    </div>
                    <div class="card-body">
                        @csrf
                        <label>Tempo de manifestação em dias</label>
                        <input type="number" class="form-control" name="tempoManifestacao" />
                    </div>
                    <div class="card-body">
                        @csrf
                        <label>Histórico ocular</label>
                        <textarea name="historicoOcular" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
                        @csrf
                        <label>Antecedentes</label>
                        <textarea name="antecedentes" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
                        @csrf
                        <label>Tratamento prévio</label>
                        <select name="tratamentoPrevio">
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                    <div class="card-body">
                        @csrf
                        <label>Motivo da consultoria</label>
                        <textarea name="motivo" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Solicitar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection