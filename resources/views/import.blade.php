@extends('layouts.layout')

@section('content')

    <div class="card bg-light mt-3">

        <div class="card-header">
            Laravel 8 Import Export Excel to database Example - 
            <small class="text-danger">la data a importar debe contener una tabla ya previamente creada.</small>
        </div>

        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import/Update Data</button>    

            </form>
        </div>
        

        @if (session('mensaje'))
		<div class="alert alert-success">             
		{{ session('mensaje') }}
		</div>
     @endif
     
     
      
    </div>

    <div style="padding-left:70%;" class=" justify-content-end">
            <a  href="{{ url('/') }}">
                <button class="btn btn-danger bt-lg">
                    Volver
                </button>
            </a>
            </div>
@endsection