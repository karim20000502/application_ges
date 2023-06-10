@extends('adminlte::page')

@section('title')
    Work Certificate Request
@endsection

@section('content')
    <div class="container">
        <div class="row my-1">
            <div class="col-md-8 mx-auto">
                <div class="card my-5 p-3">
                    <div class="card-header">
                        <h3 class="alert alert-info">Certificate Request</h3>
                    </div>
                  <div class="card-body">
                    <p class="lead">
                        <b>{{$employe->fullname}}</b> is presntly employe with me in the following
                    </p>
                    <p class="lead">
                        <b>{{$employe->depart}}</b>  departmenet.
                    </p>
                    <p class="lead">
                        His emploment began on <b>{{$employe->hire_date}}</b>
                    </p>
                    <P class="laed">
                        thie certification is being issued upon the requset of <b>{{$employe->fullname}}</b> for what legal purpose is may serve.
                    </P>
                    <P class="laed">
                        thie issed on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> et <b>{{\Carbon\Carbon::now()->toTimeString()}}</b>
                    </P>

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