@extends('layouts.layout')

@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{asset('images/Larav&Excel.png')}}"  class="img-write-link" title="" style="width:100%; height: 50%;">
                </div>

             
                    <div class="p-6" style="display:flex; ">
                        

                        <div class="ml-12" style="margin-right">
                            <a href="{{ url('importView') }}" class="btn btn-success">IMPORTAR</a>
                        </div>
                   
                        
                        <div class="ml-12">
                         <a class="btn btn-warning" href="{{ url('exportView') }}">Export User Data</a>
                        </div>
                    
                    </div>

          
            </div>

@endsection
