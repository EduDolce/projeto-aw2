@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <div> <h2>Médico Solicitante</h2>
                            <div>
                                <p>Crm*: <input type="text" name="CRM" maxlength="12" required="required"></p>
                            </div>
                            <div>
                                <p>Nome*: <input type="text" name="Nome" maxlength="50" required="required"></p>
                            </div>
                            <div>
                                <p>Email*: <input type="email" name="email" maxlength="50" required="required"></p>
                            </div>
                        </div>
                        <div> <h2>Paciente</h2>
                            <div>
                                <p>Iniciais do nome*: <input type="text" name="IniNome" maxlength="5" required="required"></p>
                            </div>
                            <div>
                                <p>Data de nascimento: <input type="text" name="DtNasc" maxlength="10"></p>
                            </div>
                            <div>
                                <p>Gênero*: <input type="text" name="gen" maxlength="1" required="required"></p>
                            </div>
                            <div>
                                <p>Cor de Pele: <input type="text" name="Pele" maxlength="10"></p>
                            </div>
                            <div>
                                <p>Profissão: <input type="text" name="Profissão" maxlength="25"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection