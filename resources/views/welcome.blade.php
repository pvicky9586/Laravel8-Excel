@extends('layouts.layout')

@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{asset('images/Larav&Excel.png')}}"  class="img-write-link" title="" style="width:100%; height: 50%;">
                </div>         
            </div>

            <div  class="row justify-content-end" > 
                <a href="{{ url('import') }}" class="btn btn-success btn-lg ">Import/Update Data</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                <a  href="{{ url('exportView') }}" class="btn btn-warning btn-lg">Export Data</a>   
            </div>

@endsection
