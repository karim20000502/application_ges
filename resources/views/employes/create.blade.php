@extends('adminlte::page')

@section('title')

   Add New Employes | Application de gestion 
    
@endsection

@section('content_header')

   <h1 class="alert alert-info">Add New Employes</h1>
    
@endsection

@section('content')

    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h3 class="alert alert-info">Add New Employes</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{!!route('employes.store')!!}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="Registration Numner">Registration Number</label>
                                <input type="text" name="registration_number" maxlength="8" class="form-control" placeholder="Enter Registration Numner" value="{!!old('registration_numner')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="fullname">FullName</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter FullName" value="{!!old('fullname')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="departement">departement</label>
                                <input type="text" name="depart" class="form-control" placeholder="Enter departement" value="{!!old('depart')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="Hire date">Hire date</label>
                                <input type="date" name="hire_date" class="form-control" placeholder="Enter Hire date" value="{!!old('hire_date')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="Phone">Phone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Enter phone" value="{!!old('phone')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="Address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address" value="{!!old('address')!!}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="city">city</label>
                                <input type="text" name="city" class="form-control" placeholder="Enter city" value="{!!old('city')!!}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

