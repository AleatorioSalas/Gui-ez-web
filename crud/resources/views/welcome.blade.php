<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/4df9f098ca.js" crossorigin="anonymous"></script>
    <title>
        <img src="" alt="">
    </title>
</head>

<body>
    <h1 class="text-center p-3"> Bienvenido a Guiñez Ingenieria</h1>

    @if (session("success"))
        <div class="alert alert-success">{{session("success")}}</div>
    @endif

    @if (session("incorrecto"))
        <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif

    <script>
        var res=function(){
            var not=confirm("¿Estas seguro de eliminar?")
            return not;
        }
    </script>

    <!-- Modal de registro de usuarios -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir usuario</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{route("crud.create")}}" method="post">
                @csrf
                  <div class="mb-3">
                      <label for="txtID" class="form-label">ID del usuario</label>
                      <input type="text" class="form-control" id="txtID" name="ID_Nombre">
                  </div>
                  <div class="mb-3">
                      <label for="txtNombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="txtNombre" name="Nombre">
                  </div>
                  <div class="mb-3">
                      <label for="txtSegundoNombre" class="form-label">Segundo Nombre</label>
                      <input type="text" class="form-control" id="txtSegundoNombre" name="Segundo_Nombre">
                  </div>
                  <div class="mb-3">
                      <label for="txtApellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="txtApellido" name="Apellido">
                  </div>
                  <div class="mb-3">
                      <label for="txtSegundoApellido" class="form-label">Segundo apellido</label>
                      <input type="text" class="form-control" id="txtSegundoApellido" name="Segundo_Apellido">
                  </div>
                  <div class="mb-3">
                      <label for="txtFecha" class="form-label">Fecha Actual</label>
                      <input type="date" class="form-control" id="txtFecha" name="Fecha_Actual">
                  </div>
                  <div class="mb-3">
                      <label for="txtRut" class="form-label">Rut</label>
                      <input type="text" class="form-control" id="txtRut" name="Rut">
                  </div>
                  <div class="mb-3">
                      <label for="txtCentrodecosto" class="form-label">Centro de costo</label>
                      <input type="text" class="form-control" id="txtCentrodecosto" name="Centro_costo">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

    <div class="p-5 table-responsive">
        <table class="table table-striped table-borderer table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalRegistrar" > Añadir Usuario</button>
                    <th scope="col">ID_Nombre</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Segundo_Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Segundo_apellido</th>
                    <th scope="col">Fecha_Actual</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Centro_Costo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    @foreach ($datos as $item)
                <tr>
                    <th>{{$item->ID_Nombre}}</th>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Segundo_Nombre}}</td>
                    <td>{{$item->Apellido}}</td>
                    <td>{{$item->Segundo_Apellido}}</td>
                    <td>{{$item->Fecha_Actual}}</td>
                    <td>{{$item->Rut}}</td>
                    <td>{{$item->Centro_costo}}</td>
                    <td>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->ID_Nombre}}"
                            class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{route("crud.delete",$item->ID_Nombre)}}" onclick="res()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>




                    <!-- Modal de modificar datos -->
                    <div class="modal fade" id="modalEditar{{$item->ID_Nombre}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del usuario
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route("crud.update")}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ID del usuario</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" name="txtID" value="{{$item->ID_Nombre}}" readonly>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" name="txtNombre" value="{{$item->Nombre}}">
                                              <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Segundo Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" name="txtSegundoNombre" value="{{$item->Segundo_Nombre}}">
                                                    <div class="mb-3">
                                                      <label for="exampleInputEmail1" class="form-label">Apellido</label>
                                                      <input type="text" class="form-control" id="exampleInputEmail1"
                                                          aria-describedby="emailHelp" name="txtApellido" value="{{$item->Apellido}}">
                                                          <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Segundo apellido</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" name="txtSegundoApellido" value="{{$item->Segundo_Apellido}}">
                                                                <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Fecha Actual</label>
                                                                  <input type="date" class="form-control" id="exampleInputEmail1"
                                                                      aria-describedby="emailHelp" name="txtFecha" value="{{$item->Fecha_Actual}}">
                                                                      <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Rut</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                            aria-describedby="emailHelp" name="txtRut" value="{{$item->Rut}}">
                                                                            <div class="mb-3">
                                                                              <label for="exampleInputEmail1" class="form-label">Centro de costo</label>
                                                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                                                                  aria-describedby="emailHelp" name="txtCentrodecosto" value="{{$item->Centro_costo}}">
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
