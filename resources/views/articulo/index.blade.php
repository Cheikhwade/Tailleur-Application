@extends('adminlte::page')

@section('title', 'tailleur')

@section('content_header')
    <h1>Liste des clients et de mesure</h1>
@stop

@section('content')
   <a href="articulos/create" class="btn btn-primary mb-3">Prendre une mesure</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Clients</th>
            <th scope="col">Tissus</th>
            <th scope="col">Tel</th>
            <th scope="col">Mt</th>
            <th scope="col">Avance</th>
            <th scope="col">restant</th>
            <th scope="col">P</th>
            <th scope="col">E</th>
            <th scope="col">T</th>
            <th scope="col">M</th>
            <th scope="col">F</th>
            <th scope="col">C</th>
            <th scope="col">T.H</th>
            <th scope="col">L.P</th>
            <th scope="col">Ct</th>
            <th scope="col">L.B</th>
            <th scope="col">L.J</th>
            <th scope="col">Cui</th>
            <th scope="col">M.C</th>
            <th scope="col">M.L</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>{{$articulo->mesure}}</td>
            <td>{{$articulo->avance}}</td>
            <td>{{$articulo->poitrine}}</td>
            <td>{{$articulo->epaule}}</td>
            <td>{{$articulo->taille}}</td>
            <td>{{$articulo->manche}}</td>
            <td>{{$articulo->fesse}}</td>
            <td>{{$articulo->cou}}</td>
            <td>{{$articulo->tourh}}</td>
            <td>{{$articulo->longp}}</td>
            <td>{{$articulo->ceint}}</td>
            <td>{{$articulo->longb}}</td>
            <td>{{$articulo->longj}}</td>
            <td>{{$articulo->cuisse}}</td>
            <td>{{$articulo->manchec}}</td>
            <td>{{$articulo->manchel}}</td>
            <td>
                <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Efface</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop
