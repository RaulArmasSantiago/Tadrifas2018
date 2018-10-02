@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5><strong>Buscar Concesión</strong></h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <div class="container">
                            <div class="row show-grid justify-content-center">
                                <div class="col-md-4">
                                    <form action="buscarConcesion" method="post" enctype="">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="text" class="form-control" name="concesion" maxlength="6" 
                                             >
                                        </div>
                                        <input type="submit"class="btn btn-yellow" value="Buscar">
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="row show-grid justify-content-center">
                                <div class="col-md-6">
                                    <img src="img/taxis.jpg" width="300px" class="img-thumbnail">
                                </div>
                            </div>
                            
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
