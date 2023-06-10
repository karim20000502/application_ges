@extends('adminlte::page')

@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row my-1">
            <div class="col-md-8 mx-auto">
                <div class="card my-5 p-3">
                    <div class="card-header">
                        <h3 class="alert alert-info">Vacation Request</h3>
                    </div>
                  <div class="card-body">
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> is presntly employe with me in the following
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b>  departmenet.
                    </p>
                    <p class="lead">
                        he is requesting a vacation starting from<b>__________</b>
                    </p>
                    <p class="lead">
                        and ends on <b>__________</b>
                    </p>
                    <p class="m-5">
                        ___________
                        ___________

                    </p>
                  </div>
                  <div class="my-4">
                    <a href="#" id="printLink" class="btn btn-info" 
                    onclick=
                    "document.getElementById('printLink').style.display='none';
                    setTimeout(function(){
                        document.getElementById('printLink').style.display='inline-block'
                    },2000);
                    window.print();">
                        <i class="fas fa-print" ></i>
                    </a>
                  </div>
                </div>
               
            </div>
        </div>
    </div>

@endsection