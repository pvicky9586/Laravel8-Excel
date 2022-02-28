@extends('layouts.layout')

@section('content')
            
            <div>
               <img src="{{asset('images/Larav&Excel.png')}}"  class="img-write-link" title="" style="width:80%; height: 10%;">
            </div>         
        

            <div  class="row justify-content-end" > 
                <a href="{{ url('import') }}" class="btn btn-success btn-lg ">Import/Update Data</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                <a  href="{{ url('exportView') }}" class="btn btn-warning btn-lg">Export Data</a>   
            </div>

@endsection
