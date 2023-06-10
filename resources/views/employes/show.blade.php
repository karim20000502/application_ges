@extends('adminlte::page')

@section('title')

   Show Employes | Application de gestion 
    
@endsection

@section('content_header')

   <h1>Show Employes</h1>
    
@endsection

@section('content')

    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h1 class="alert alert-info">Show Employes</h1>
                        </div>
                    </div>
                   
                        <div class="card border-success mb-3 mt-3 container" style="max-width: 18rem;">
                            
                            <div class="card-body ">
                              <p class="card-text"><span class="text-success">Registration</span>: {{$employe->registration_number}}</p>
                              <p class="card-text"><span class="text-success">FullNmae</span>: {{$employe->fullname}}</p>
                              <p class="card-text"><span class="text-success">Hire_Date</span>:{{$employe->hire_date}}</p>
                              <p class="card-text"><span class="text-success">Dpart</span>:{{$employe->depart}}</p>
                              <p class="card-text"><span class="text-success">Phone</span>:{{$employe->phone}}</p>
                              <p class="card-text"><span class="text-success">Address</span>:{{$employe->address}}</p>
                              <p class="card-text"><span class="text-success">City</span>:{{$employe->city}}</p>
                            
                            </div>
                            <hr>
                            <div class="card-footer bg-transparent border-success text-center">
                                <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">Vacation Request</a><br><br>
                                <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">Work Certificate </a>
                            </div>
                          </div>
                           
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

