@extends('layouts.layout')

@section('content')

    <div class="card bg-light mt-3">
   
        <div class="card-header">
            Laravel 8 Import Export Excel to database Example - 
            <small class="text-danger">php artisan migrate --> para insertar table BD.</small>
        </div>

        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf

               <div>
                    <select name="selectTable" style="margin-right: 10%">
                        <option value="">---------Table Update----------</option>
                        <option value="1">Usuarios</option>
                        <option value="2">Productor</option>
                    </select>

                    <input type="file" name="file" class="">
                </div> 

                @if ($errors->has('selectTable'))
                    <div class="alert text-danger" role="alert">Selecciona la tabla</div>
                @endif

                @if($errors->has('file'))
                    <div class="alert text-danger" role="alert">{{ $errors->first('file') }}
                    </div>
                @endif 
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