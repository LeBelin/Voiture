@extends('voitures.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Détails de la voiture</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('voitures.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    </br></br>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro :</strong>
                {{ $voiture->numVoiture }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vin :</strong>
                {{ $voiture->vin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Couleur :</strong>
                {{ $voiture->couleur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de place :</strong>
                {{ $voiture->nbPlaces }} place{{ $voiture->nbPlaces > 1 ? 's' : '' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cylindree :</strong>
                {{ $voiture->cylindree }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Puissance :</strong>
                {{ $voiture->puissance }} Ch
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poids :</strong>
                {{ $voiture->poids }}Kg
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Longeur :</strong>
                <td>{{ $voiture->longeur }} Mètre{{ $voiture->longeur > 1 ? 's' : '' }}</td>
            </div>
        </div>
    </div>
@endsection