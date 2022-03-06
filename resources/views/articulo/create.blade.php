@extends('adminlte::page')

@section('title', 'Ajouter')

@section('content_header')
   <h1>Ajouter un client</h1>
@stop

@section('content')

<form action="/articulos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Client</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nature et couleur</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contact</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Montant</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Avance</label>
    <input id="mesure" name="mesure" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Restant</label>
    <input id="avance" name="avance" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Poitrine</label>
    <input id="poitrine" name="poitrine" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Epaule</label>
    <input id="epaule" name="epaule" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Taille</label>
    <input id="taille" name="taille" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Manche</label>
    <input id="manche" name="manche" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Fesse</label>
    <input id="fesse" name="fesse" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cou</label>
    <input id="cou" name="cou" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Tour de Hanche</label>
    <input id="tourh" name="tourh" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Pantalon</label>
    <input id="longp" name="longp" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Ceinture</label>
    <input id="ceint" name="ceint" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Boubou</label>
    <input id="longb" name="longb" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Longueur Jupe</label>
    <input id="longj" name="longj" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Cuisse</label>
    <input id="cuisse" name="cuisse" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Manche Courte</label>
    <input id="manchec" name="manchec" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Manche Longue</label>
    <input id="manchel" name="manchel" type="text" step="any" class="form-control" tabindex="3">
  </div>


  <a href="/articulos" class="btn btn-secondary" tabindex="5">Fermer</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Enregistrer</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
