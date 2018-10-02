@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                    
            <div class="card-header"><h3><strong> Concesion: </strong>{{ $informacion->concesion}}</h3> <h4><strong> Ultima actualización: </strong>{{$informacion->fecha}}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row show-gid ">
                        <div class="col-md-4">
                            <div class="card border-dark" style="height: 33rem;">
                            <div class="card-header bg-warning text-black"><b><label style="font-size: 1.2em"> Concesionario</label></b><a href="#" class="create-modal btn"><img src="img/edit-icon.png" alt=""></a></div>
                                <div class="card-body">
                                    <h4 class="card-title tex-center "><strong>{{$informacion->nombre}}</strong></h4>
                                    <label  style="font-size:1.2em"><strong>Dirección: </strong>{{$informacion->direccion}}</label><br>
                                    <label  style="font-size:1.2em"><strong>Municipio: </strong>{{$informacion->municipio}}</label><br> 
                                    <label  style="font-size:1.2em"><strong>Estado: </strong>{{$informacion->estado}}</label>
                                    <br>
                                    @if ($informacion->fecha_nac == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Fecha De Nacimiento</strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Fecha De Nacimiento </strong>{{$informacion->fecha_nac}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->codigopostal == null)
                                        <label  style="font-size:1.2em"><strong class="text-danger">C.P.</strong></label>
                                    @else
                                        <label  style="font-size:1.2em"><strong>C.P </strong>{{$informacion->codigopostal}}</label>
                                    @endif
                                    <br>
                                    <label  style="font-size:1.2em"><strong>Contacto:</strong></label><br>
                                    @if ($informacion->telefono == null)
                                        <label  style="font-size:1.2em"><strong class="text-danger">Telefono: </strong></label>
                                    @else
                                        <label  style="font-size:1.2em"><strong>Telefono: </strong>{{$informacion->telefono}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->celular == null)
                                        <label  style="font-size:1.2em"><strong class="text-danger">Celular: </strong></label>
                                    @else
                                        <label  style="font-size:1.2em"><strong>Celular: </strong>{{$informacion->celular}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->celularsec == null)
                                        <label  style="font-size:1.2em"><strong class="text-danger">Celular alternativo: </strong></label>
                                    @else
                                        <label  style="font-size:1.2em"><strong>Celular alterniativo: </strong>{{$informacion->celularsec}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->email == null)
                                        <label  style="font-size:1.2em"><strong class="text-danger">Email: </strong></label>
                                    @else
                                        <label style="font-size:1.2em"><strong>Email: </strong>{{$informacion->email}}</label>
                                    @endif       
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-dark" style="height: 33rem;">
                                <div class="card-header bg-warning text-black"><b><label style="font-size: 1.2em"> Tramitador</label></b><a href="#" class="create-modal1 btn"><img src="img/edit-icon.png" alt=""></a></div>
                                <div class="card-body">
                                    <h4 class="card-title tex-center "><strong>{{$informacion->nombret}}</strong></h4>
                                    <label class="" style="font-size:1.2em"><strong>Dirección: </strong>{{$informacion->direcciont}}</label><br>
                                    <label  style="font-size:1.2em"><strong>Municipio: </strong>{{$informacion->municipiot}}</label><br> 
                                    <label  style="font-size:1.2em"><strong>Estado: </strong>{{$informacion->estadot}}</label>
                                    <br>
                                    @if ($informacion->codigopostalt == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">C.P.</strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>C.P </strong>{{$informacion->codigopostalt}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->fecha_nacimiento == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Fecha De Nacimiento</strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Fecha De Nacimiento </strong>{{$informacion->fecha_nacimiento}}</label>
                                    @endif
                                    <br>
                                    @if($informacion->rentador == 'si')
                                        <label style="font-size:1.4em" class="text-success"><strong>*Es rentador de la concesión</strong></label>
                                    @endif
                                    
                                    <label  style="font-size:1.2em"><strong>Contacto:</strong></label><br>
                                    @if ($informacion->telefonot == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Telefono: </strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Telefono: </strong>{{$informacion->telefonot}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->celulart == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Celular: </strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Celular: </strong>{{$informacion->celulart}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->celularsect == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Celular alternativo: </strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Celular alterniativo: </strong>{{$informacion->celularsect}}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->emailt == null)
                                    <label  style="font-size:1.2em"><strong class="text-danger">Email: </strong></label>
                                    @else
                                    <label  style="font-size:1.2em"><strong>Email: </strong>{{$informacion->emailt}}</label>
                                    @endif       
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-dark" style="height: 33rem;">
                                <div class="card-header bg-warning text-black"><b><label style="font-size: 1.2em">Vehiculo</label></b><a href="#" class="create-modal2 btn"><img src="img/edit-icon.png" alt=""></a></div>
                                <div class="card-body">
                                    @if ($informacion->marca == null)
                                        <label style="font-size:1.2em"><strong class="text-danger">Marca: </strong></label>   
                                    @else
                                        <label style="font-size:1.2em"><strong>Marca: </strong>{{$informacion->marca  }} </label>
                                    @endif
                                    <br>
                                    @if ($informacion->modelo == null)
                                        <label style="font-size:1.2em"><strong class="text-danger">Modelo: </strong></label>
                                    @else
                                        <label style="font-size:1.2em"><strong>Modelo: </strong>{{$informacion->modelo  }}</label>  
                                    @endif
                                    <br>
                                    @if ($informacion->año == null)
                                        <label style="font-size:1.2em"><strong class="text-danger">Año de fabricación: </strong> </label>   
                                    @else
                                        <label style="font-size:1.2em"><strong>Año de fabricación: </strong>{{$informacion->año  }}</label>
                                    @endif
                                    <br>
                                    @if ($informacion->placa == null)
                                        <label style="font-size:1.2em"><strong class="text-danger">Placas: </strong>    
                                    @else
                                        <label style="font-size:1.2em"><strong>Placas: </strong>{{$informacion->placa  }}  </label>  
                                    @endif
                                    <br><br>
                                    <center><h4>Taximetro</h4></center>
                                        <label style="font-size:1.2em"><strong>Marca: </strong>{{$informacion->marcat}}</label><br>
                                        <label style="font-size:1.2em"><strong>Modelo: </strong>{{$informacion->modelot}}</label><br>
                                    @if($informacion->serie != null)
                                        <label style="font-size:1.2em"><strong># Serie: </strong>{{$informacion->serie}}</label>
                                    @else
                                        <label style="font-size:1.2em"><strong class="text-danger"># Serie:</strong></label>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row show-grid justify-content-center">
                        <form action="acepted" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="concesion" value="{{$informacion->concesion}}">
                            <input type="hidden" disabled name="date" value="{{date("Y-m-d")}}">

                            <button type="submit" class="btn btn-success">
                            <h4>ACEPTADA</h4>
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>


<div id="create" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="updateConcesionario" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="idconcesionario" value="{{$informacion->fk_concesionario}}">
            <input type="hidden" name="concesion" value="{{$informacion->concesion}}">
            <div class="modal-body text-justify container">
                <label>Nombre: </label>
                <div class="form-group form-inline">
                    <input type="text" name="nombre" class="form-control" value="{{$informacion->nombre}}" size="35">
                </div>
                <label for="fecha">Fecha de nacimiento</label>
                <div class="form-group form-inline">
                    <input type="date" name="fecha_nac" value="{!! $informacion->fecha_nac !!}" id="fecha" class="form-control mdtxt" size="70" required="true">
                </div>
                <label>Dirección</label>
                <div class="form-group form-inline">
                    <input type="text" name="direccion" class="form-control" value="{{$informacion->direccion}}" size="50" placeholder="Direccion #, Colonia">
                </div>
                <label >Municipio&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Estado&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Codigo Postal</label>
                <div class="form-group form-inline">
                    <input type="text" name="municipio" class="form-control" value="{{$informacion->municipio}}" size="15" placeholder="Municipio">&nbsp;&nbsp;&nbsp;
                    <input type="text" name="estado" class="form-control" value="{{$informacion->estado}}" size="15" placeholder="Estado">&nbsp;&nbsp;&nbsp;
                    <input type="text" name="cp" class="form-control" value="{{$informacion->codigopostal}}" size="15" placeholder="Codigo Postal">
                </div>
                <label>Telefono fijo</label>
                <div class="form-group form-inline">
                <input type="tel" name="telefono" class="form-control" value="{{$informacion->telefono}}" placeholder="Telefono">
                </div>
                <label>Celulares</label>
                <div class="form-group form-inline">
                    <input type="tel" name="celular" class="form-control" value="{{$informacion->celular}}" placeholder="Celular Principal">&nbsp;&nbsp;&nbsp;
                <input type="tel" name="celularsec" class="form-control" value="{{$informacion->celularsec}}" placeholder="Celular Alternaivo">
                </div>
                <label>Email</label>
                <div class="form-group form-inline">
                <input type="email" name="email" class="form-control" value="{{$informacion->email}}" placeholder="example@mail.com">
                </div>
                <div class="form-group form-inline">
                    <label for=>Nuevo </label>&nbsp;<input type="radio" class="form-control" name="action" value="nuevo" required>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label for=>Actualizar </label>&nbsp;<input type="radio" name="action" value="actualizar">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Close
                </button>
            </div>
            </form>
        </div>
    </div>
</div>


<div id="create1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="updateTramitador" method="POST" id="formtax">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="idtramitador" value="{{$informacion->fk_tramitador}}">
                <input type="hidden" name="concesion" value="{{$informacion->concesion}}">
                <div class="modal-body text-justify container">
                    <label>Nombre: </label>
                    <div class="form-group form-inline">
                        <input type="text" name="nombre" class="form-control" value="{{$informacion->nombret}}" size="35">
                    </div>

                    <label for="fecha">Fecha de nacimiento</label>
                    <div class="form-group form-inline">
                        <input type="date" name="fecha_nacimiento" value="{!! $informacion->fecha_nacimiento !!}" id="fecha" class="form-control mdtxt" size="70" required="true">
                    </div>

                    <label>Dirección</label>
                    <div class="form-group form-inline">
                        <input type="text" name="direccion" class="form-control" value="{{$informacion->direcciont}}" size="50" placeholder="Direccion #, Colonia">
                    </div>
                    <label >Municipio&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Estado&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Codigo Postal</label>
                    <div class="form-group form-inline">
                        <input type="text" name="municipio" class="form-control" value="{{$informacion->municipiot}}" size="15" placeholder="Municipio">&nbsp;&nbsp;&nbsp;
                        <input type="text" name="estado" class="form-control" value="{{$informacion->estadot}}" size="15" placeholder="Estado">&nbsp;&nbsp;&nbsp;
                        <input type="text" name="cp" class="form-control" value="{{$informacion->codigopostalt}}" size="15" placeholder="Codigo Postal">
                    </div>
                    <label>Telefono fijo</label>
                    <div class="form-group form-inline">
                    <input type="tel" name="telefono" class="form-control" value="{{$informacion->telefonot}}" placeholder="Telefono">
                    </div>
                    <label>Celulares</label>
                    <div class="form-group form-inline">
                        <input type="tel" name="celular" class="form-control" value="{{$informacion->celulart}}" placeholder="Celular Principal">&nbsp;&nbsp;&nbsp;
                    <input type="tel" name="celularsec" class="form-control" value="{{$informacion->celularsect}}" placeholder="Celular Alternaivo">
                    </div>
                    <label>Email</label>
                    <div class="form-group form-inline">
                    <input type="email" name="email" class="form-control" value="{{$informacion->emailt}}" placeholder="example@mail.com">
                    </div>
                    <div>
                        <label>Es Rentador:</label>
                        <input type="checkbox" name="rentador" value="si">
                    </div>

                    <div class="form-group form-inline">
                        <label for=>Nuevo </label>&nbsp;<input type="radio" class="form-control" name="action" value="nuevo" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label for=>Actualizar </label>&nbsp;<input type="radio" name="action" value="actualizar">
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div id="create2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="updateVehiculo" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="idvehiculo" value="{{$informacion->fk_vehiculo}}">
                    <input type="hidden" name="idtaximetro" value="{{$informacion->fk_taximetro}}">
                    <input type="hidden" name="concesion" value="{{$informacion->concesion}}">
                    <div class="modal-body text-justify container">
                        <label>Marca</label>
                        <div class="form-group form-inline">
{{--                             <select name="marca" id="marcaV" class="form-control">
                                <option value="-- SELECCIONA UNA OPCIÓN --" selected>-- SELECCIONA UNA OPCIÓN --</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Ford">Ford</option>
                                <option value="Kia">Kia</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Renault">Renault</option>
                                <option value="Toyota">Toyota</option>
                                <option value="volkswagen">Volkswagen</option>
                                <option value="1">Otros</option>
                            </select>
                        <label class="ml-4">Otros: </label> --}}
                        <input type="text" name="marca" id="marc" class="form-control ml-2" value="{{$informacion->marca}}" placeholder="Marca del vehiculo" size="20">
                        </div>
                        <label>Modelo</label>
                        <div class="form-group form-inline">
{{--                                 <select name="modelo" id="modeloV" class="form-control">
                                <option value="-- SELECCIONA UNA OPCIÓN --" selected>-- SELECCIONA UNA OPCIÓN --</option>
                                <option value="Atos">Atos</option>
                                <option value="Aveo">Aveo</option>
                                <option value="Fiesta">Fiesta</option>
                                <option value="Focus">Focus</option>
                                <option value="March">March</option>
                                <option value="Matiz">Matiz</option>
                                <option value="Mirage">Mirage</option>
                                <option value="Sandero">Sandero</option>
                                <option value="Sentra">Sentra</option>
                                <option value="Spark">Spark</option>
                                <option value="Tsuru">Tsuru</option>
                                <option value="Versa">Versa</option>
                                <option value="otro">Otros</option>
                            </select>
                            <label class="ml-4">Otros: </label> --}}
                        <input type="text" name="modelo" class="form-control ml-2" value="{{$informacion->modelo}}" placeholder="Modelo del vehiculo" size="20">
                        </div>
                        <label >Año&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Placas</label>
                        <div class="form-group form-inline">
                            <input type="text" name="año" class="form-control" value="{{$informacion->año}}" size="15" placeholder="Año de fabricación">&nbsp;&nbsp;&nbsp;
                            <input type="text" name="placas" class="form-control" value="{{$informacion->placa}}" size="15" placeholder="Placas">&nbsp;&nbsp;&nbsp;
                        </div>
                        <center><h4>Taximetro</h4></center>
                        <label>Marca</label>
                        <div class="form-group form-inline">
                        <input type="text" name="marcat" class="form-control" value="{{$informacion->marcat}}" placeholder="Marca">
                        </div>
                        <label>Modelo</label>
                        <div class="form-group form-inline">
                            <input type="text" name="modelot" class="form-control" value="{{$informacion->modelot}}" placeholder="Celular Principal">&nbsp;&nbsp;&nbsp;
                        </div>
                        <label>Serie</label>
                        <div class="form-group form-inline">
                                <input type="serie" name="serie" class="form-control" value="{{$informacion->serie}}" placeholder="Serie">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> Close
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
