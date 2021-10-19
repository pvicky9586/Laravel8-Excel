@extends('layouts.layout')
@section('content')

<div class="card bg-light mt-3">

        <div class="card-header">
                <h1>Indique la tabla que desee exportar   </h1>
        </div>

        <div class="card-body">

   
    <ul class="display-6">
        <li>
            <a href="{{(route('exportUsers'))}}">Users</a>
        </li>
        <li>
                <a href="{{(route('exportProducts'))}}">Products</a>
        </li>
</ul>

    <div class="container">
            <div class="row">
              <div class="col text-center">
                    <a  href="{{ url('/') }}"> <button class="btn btn-danger bt-lg">
                            Volver </button> </a>
              </div>
            </div>
          </div>
</div>



@endsection