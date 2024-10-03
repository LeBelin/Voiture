@extends('voitures.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajout d'une voiture</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('voitures.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>


      <form method="post" action="{{url('voitures')}}" enctype="multipart/form-data">
@csrf
          @if ($errors->any())
              <div class="alert alert-danger">
                  <strong>Oops!</strong> Il y a des soucis dans votre formulaire.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Vin : </strong>
      <input type="text" class="form-control" name="vin">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Couleur : </strong>
      <input type="text" class="form-control" name="couleur">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Nombre de place : </strong>
      <input type="text" class="form-control" name="nbPlaces">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Cylindree : </strong>
      <input type="text" class="form-control" name="cylindree">
  </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"></div>
    <div class="form-group col-md-4">
        <strong>Puissance (Ch) : </strong>
        <input type="text" class="form-control" name="puissance">
    </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Poids (Kg) : </strong>
      <input type="text" class="form-control" name="poids">
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12"></div>
  <div class="form-group col-md-4">
      <strong>Longeur (Mètre) : </strong>
      <input type="text" class="form-control" name="longeur">
  </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12"></div>
    <div class="form-group col-md-4" style="margin-top:20px">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </div>
</div>
</form>
</div>

@endsection