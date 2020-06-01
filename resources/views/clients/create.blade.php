@extends('layouts.dashboardMenu')


@section('contentMenu')

<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Nuevo Cliente</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Clientes</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Nuevo Cliente</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                        <div class="card">
                            <h5 class="card-header">Formulario Nuevo Cliente</h5>
                            <div class="card-body">
                            @include('inc.messages')
                                <form action="/clients" method="POST">
                                    @csrf
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Nombres</label>
                                            <input name="inputClientName" id="inputClientName" type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Apellidos</label>
                                            <input name="inputClientLastName" id="inputClientLastName" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </div>        
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Fecha de Nacimiento</label>
                                            <input name="inputClientDob" id="inputClientDob" class="form-control" type="date">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Sexo</label>
                                            <select class="form-control" id="inputClientGender" name="inputClientGender">
                                                <option>Por favor seleccione </option>
                                            </select>                                        
                                        </div>
                                    </div>
                                    </div>          
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Tipo de Documento</label>
                                            <select class="form-control" id="inputClientDocType" name="inputClientDocType">
                                                <option>Por favor seleccione</option>
                                            </select>                                          
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Numero de Documento</label>
                                            <input name="inputDocNumber" id="inputDocNumber" type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">E-mail</label>
                                            <input name="inputClientEmail" id="inputClientEmail" type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Numero Domicilio</label>
                                            <input name="inputClientPhoneNumb" id="inputClientPhoneNumb" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </div>               
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Numero Celular</label>
                                            <input name="inputClientCellPhoneNumb" id="inputClientCellPhoneNumb" type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Notas</label>
                                            <input name="inputClientNotes" id="inputClientNotes" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Direccion</label>
                                            <textarea name="inputClientAddress1" id="inputClientAddress1" type="text" class="form-control"></textarea> 
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Direccion(opcional)</label>
                                            <textarea name="inputClientAddress2" id="inputClientAddress2" type="text" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    &nbsp;
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                                        </div>
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>



<script>

    $(document).ready(function(){

        $.get('/getGenderRequest', function(datagender){

            for (var i = 0; i <= Object.keys(datagender).length; i++) {
                var gender = {id:datagender[i]['id'], genderDescription:datagender[i]['genderDescription']};

                $("#inputClientGender").append
                ('<option value='+ gender.id+'>'+ gender.genderDescription+'</option>')

            }   
        })

        $.get('/getDocumentsRequest', function(datadoc){

            for (var i = 0; i <= Object.keys(datadoc).length; i++) {
                var document = {id:datadoc[i]['id'], documentDescription:datadoc[i]['documentDescription']};

                $("#inputClientDocType").append
                ('<option value='+ document.id+'>'+ document.documentDescription+'</option>')

            }   
        })


    })

</script>


@endsection