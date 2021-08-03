@extends('layouts.persons')

@section('content')

            <div class="row">
                <div class="alert alert-success col-sm-12" role="alert">
                  Editar Personas
                </div>
                <div class="col-sm-12">
                    <form class="col-sm-12" action="../edit_persona/{{$id}}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="PUT">
                      <div class="form-group col-sm-8">
                        <label for="NameInput">Nombre</label>
                        <input type="text" class="form-control" value="{{$persona -> name}}" id="name" name="name" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-sm-8">
                        <label for="LastnameInput">Apellidos</label>
                        <input type="text" class="form-control" value="{{$persona -> last_name}}" id="last_name" name="last_name" placeholder="Apellidos" required>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="AgeInput">Edad</label>
                        <input type="number" class="form-control" value="{{$persona -> age}}" id="age" name="age" placeholder="Edad" required>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="GenderInput">Genero</label>
                        <select class="form-control" id="gender" name="gender" required>
                          <option value="" <?php if($persona -> gender == ''): echo 'selected'; endif;?>></option>
                          <option value="F" <?php if($persona -> gender == 'F'): echo 'selected'; endif;?>>F</option>
                          <option vallue="M" <?php if($persona -> gender == 'M'): echo 'selected'; endif;?>>M</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="PostalcodeInput">Codigo Postal</label>
                        <input type="number" class="form-control" value="{{$persona -> postal_code}}" id="postal_code" name="postal_code" placeholder="Codigo Postal" required>
                      </div>
                      <div class="form-group col-sm-12">
                        <label for="DirectionInput">Dirección</label>
                        <textarea class="form-control" id="direction" name="direction" rows="3" required>{{$persona -> direction}}</textarea>
                      </div>
                      <div class="col-sm-12">
                          <br>
                          <input type="submit" class="btn btn-success" id="send" value="Editar">
                      </div>
                    </form>
                </div>
            </div>
            <hr>

@endsection
