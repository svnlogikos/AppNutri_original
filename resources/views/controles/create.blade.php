@extends('layouts.app')


@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Control</div>
                <div class="panel-body">
                	<form action="{{ url('/controles/create') }}" method="POST" role="form" id="form-alta-control">
                		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                		<div class="col-xs-2 col-sm-6 col-md-6 col-lg-6">                			
	                		<div class="form-group">
	                			<label for="">Fecha</label>
	                			<input value="" type="text" class="form-control" name="paciente_desde">
	                		</div>
	                		<div class="form-group">
	                			<label for="">Control</label>
	                			<input value="" type="text" class="form-control" name="nombre_apellido">
	                		</div>	                		
                		</div>                		
                		<button type="submit" class="btn btn-danger pull-right" id="alta_control">Crear</button>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>                
<script src="{{ url('/js') }}/paciente.js" type="text/javascript"></script>
@endsection