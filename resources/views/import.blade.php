@extends('layouts.layout')

@section('content')

    <div class="card bg-light mt-3">
   
        <div class="card-header">
            Laravel 8 Import Export Excel to database Example - 
            <small class="text-danger">php artisan migrate --> para insertar table BD.</small>
        </div>
{{$tables}}
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <select>
                    <option>Seccione tabla a insertar</option>
                </select>
                <input type="file" name="file" class="form-control">

    @error('file')
        <span class="invalid-feedback" role="alert">
            <strong>Nada por Actualizar</strong>
        </span>
    @enderror

                <br>
                <button class="btn btn-success">Import/Update Data</button>    

            </form>
        </div>
        
    
    @if (session('mensaje'))
		<div class="alert alert-success">             
		{{ session('mensaje') }}
		</div>
     @endif

     @if(!empty($numRows))
      <h1>registros insertados {{$numRows}}</h1>
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