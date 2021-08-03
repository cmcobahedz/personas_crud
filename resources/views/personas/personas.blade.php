
@extends('layouts.persons')

@section('content')

            <div class="row">
                <div class="alert alert-primary col-sm-12" role="alert">
                  Agregar Personas
                </div>
                <div class="col-sm-12">
                    <form class="col-sm-12" action="personas" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group col-sm-8">
                        <label for="NameInput">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-sm-8">
                        <label for="LastnameInput">Apellidos</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" required>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="AgeInput">Edad</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Edad" required>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="GenderInput">Genero</label>
                        <select class="form-control" id="gender" name="gender" required>
                          <option value=""></option>
                          <option value="F">F</option>
                          <option vallue="M">M</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="PostalcodeInput">Codigo Postal</label>
                        <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="Codigo Postal" required>
                      </div>
                      <div class="form-group col-sm-12">
                        <label for="DirectionInput">Dirección</label>
                        <textarea class="form-control" id="direction" name="direction" rows="3" required></textarea>
                      </div>
                      <div class="col-sm-12">
                          <br>
                          <input type="submit" class="btn btn-primary" id="send" value="Guardar">
                      </div>
                    </form>
                </div>
            </div>
            

@endsection
