<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Personas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
        
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="alert alert-primary col-sm-12" role="alert">
                  Personas
                </div>
                <div class="col-sm-12">
                    <form class="col-sm-12">
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
                          <input type="submit" class="btn btn-primary" id="send" value="Enviar">
                      </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Nombre</th>
                              <th scope="col">Apellidos</th>
                              <th scope="col">Edad</th>
                              <th scope="col">Genero</th>
                              <th scope="col">CP</th>
                              <th scope="col">Dirección</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($personas as $p)
                                <tr>
                                  <td>{{$p -> name}}</td>
                                  <td>{{$p -> last_name}}</td>
                                  <td>{{$p -> age}}</td>
                                  <td>{{$p -> gender}}</td>
                                  <td>{{$p -> postal_code}}</td>
                                  <td>{{$p -> direction}}</td>
                                  <td><form action="editar_persona">
                                        <input type="button" value="Edit" class="btn btn-info">
                                        <input type="hidden" value="{{$p -> id}}">
                                      </form>
                                  </td>
                                  <td><form action="eliminar_persona">
                                        <input type="button" value="Elim" class="btn btn-danger">
                                        <input type="hidden" value="{{$p -> id}}">
                                      </form></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </body>
</html>
