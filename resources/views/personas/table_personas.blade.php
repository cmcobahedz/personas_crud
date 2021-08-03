
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
                                  <td><form action="personas/{{$p -> id}}" method="get">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" value="Edit" class="btn btn-info">
                                      </form>
                                  </td>
                                  <td><form action="delete_persona" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="{{$p -> id}}">
                                        <input type="submit" value="Elim" class="btn btn-danger">
                                      </form></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>