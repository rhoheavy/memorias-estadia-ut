@extends('layouts.app')

@section('content')
<body>
   

        @if(Auth::user()->type == 1 )
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Crear nuevo registro
        </button>
        @endif  

<br>
<br>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        th,td {
            padding: 0.4rem !important;
        }
        body>div {
            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
        }
    </style>
    <title>Paginacion</title>
</head>
<body>
    <div class="container" style="margin-top: 10px;padding: 5px">
    <table id="tablax" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
    <th scope="col">ID</th>
        <th scope="col">URL</th>
        
        @if(Auth::user()->type == 1 )
        <th scope="col">ELIMINAR</th>
        @endif  
    </tr>
        </thead>
        <tbody>
        @foreach($memories as $memorie)
      <tr>
        <td>{{$memorie->id}}</td>
        <td><a href="{{$memorie->Url}}" target="_blank">{{$memorie->Url}}</a></td>
     
      
        @if(Auth::user()->type == 1 )
           
             <td>
             <form action="{{route('home.destroy', $memorie)}}" method="POST">
               @csrf 
             @method('delete')
                <button  class="btn btn-primary" type="submit">Eliminar</button>
             </form>
     
            </td>
        @endif  
        @endforeach
      </tr>
        </tbody>
    </table>
</div>
      










  


<!-- Modal Registrar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva memoria</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Insertar Url</label>
                <input id="url" name="url" type="text" class="form-control" tabindex="1">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>



  <!-- Buscador -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
        });
    </script>
</body>
@endsection
