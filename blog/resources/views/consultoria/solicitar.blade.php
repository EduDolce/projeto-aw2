@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitar consultoria</div>
                <form action="{{ route('consultoria.salvar') }}" method="get">
                    @csrf

                    <div class="card-body">
                        <label>Iniciais do nome do paciente</label>
                        <input type="text" class="form-control" name="iniciaisNome" />
                    </div>
                    <div class="card-body">
                        <label>Data de nascimento do paciente</label>
                        <input type="date" class="form-control" name="dataNascimento" />
                    </div>
                    <div class="card-body">
                        <label>Gênero do paciente</label>
                        <select name="genero">
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <label>Lesão ocular</label>
                        <select name="lesaoOcular">
                            <option value="Unilateral">Unilateral</option>
                            <option value="Bilateral">Bilateral</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <label>Tempo de manifestação em dias</label>
                        <input type="number" class="form-control" name="tempoManifestacao" />
                    </div>
                    <div class="card-body">
                        <label>Resumo do histórico ocular</label>
                        <textarea name="historicoOcular" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
                        <label>Antecedentes pessoais relevantes ao caso</label>
                        <textarea name="antecedentes" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
                        <label>Anexar arquivos</label>
                        <select name="tipo">
                            <option value="Segmento anterior">Segmento anterior</option>
                            <option value="Segmento posterior">Segmento posterior</option>
                            <option value="Exames">Exames</option>
                            <option value="Comentários">Comentários</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <label>Tratamento prévio</label>
                        <select name="tratamentoPrevio">
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <label>Resumo do tratamento realizado e resposta obtida</label>
                        <textarea name="tratamentoResposta" cols="30" rows="10"></textarea>
                    </div>
                    <div class="card-body">
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