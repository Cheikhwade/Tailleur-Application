@extends('adminlte::page')

@section('title', 'Editer')

@section('content_header')
    <h1>Editer le client</h1>
@stop

@section('content')
   <form action="/articulos/{{$articulo->id}}" method="POST">
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Client</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nature et couleur</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contact</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Montant</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Avance</label>
    <input id="mesure" name="mesure" type="text" step="any" class="form-control" value="{{$articulo->mesure}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Restant</label>
    <input id="avance" name="avance" type="text" step="any" class="form-control" value="{{$articulo->avance}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Poitrine</label>
    <input id="poitrine" name="poitrine" type="text" step="any" class="form-control" value="{{$articulo->poitrine}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Epaule</label>
    <input id="epaule" name="epaule" type="text" step="any" class="form-control" value="{{$articulo->epaule}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Taille</label>
    <input id="taille" name="taille" type="text" step="any" class="form-control" value="{{$articulo->taille}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Manche</label>
    <input id="manche" name="manche" type="text" step="any" class="form-control" value="{{$articulo->manche}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fesse</label>
    <input id="fesse" name="fesse" type="text" step="any" class="form-control" value="{{$articulo->fesse}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cou</label>
    <input id="cou" name="cou" type="text" step="any" class="form-control" value="{{$articulo->cou}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tour de Hanche</label>
    <input id="tourh" name="tourh" type="text" step="any" class="form-control" value="{{$articulo->tourh}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Pantalon</label>
    <input id="longp" name="longp" type="text" step="any" class="form-control" value="{{$articulo->longp}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Ceinture</label>
    <input id="ceint" name="ceint" type="text" step="any" class="form-control" value="{{$articulo->ceint}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Boubou</label>
    <input id="longb" name="longb" type="text" step="any" class="form-control" value="{{$articulo->longb}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Jupe</label>
    <input id="longj" name="longj" type="text" step="any" class="form-control" value="{{$articulo->longj}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cuisse</label>
    <input id="cuisse" name="cuisse" type="text" step="any" class="form-control" value="{{$articulo->cuisse}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Manche Courte</label>
    <input id="manchec" name="manchec" type="text" step="any" class="form-control" value="{{$articulo->manchec}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Manche Longue</label>
    <input id="manchel" name="manchel" type="text" step="any" class="form-control" value="{{$articulo->manchel}}">
  </div>


  <a href="/articulos" class="btn btn-secondary">Fermer</a>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
