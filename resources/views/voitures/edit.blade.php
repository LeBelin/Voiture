@extends('voitures.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier une voiture</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('voitures.index') }}"><i class='fa fa-plus-circle'></i> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('voitures.update',$voiture->numVoiture) }}" method="POST">
        @csrf
        @method('PUT')

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
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Numéro :</strong>
                <input type="text" name="id" value="{{ $voiture->numVoiture }}" class="form-control" placeholder="{{ $voiture->numVoiture }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Vin :</strong>
                <input type="text" name="vin" value="{{ $voiture->vin }}" class="form-control" placeholder="{{ $voiture->vin }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Couleur :</strong>
                <input type="text" name="couleur" value="{{ $voiture->couleur }}" class="form-control" placeholder="{{ $voiture->couleur }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Nombre de place :</strong>
                <input type="text" name="nbPlaces" value="{{ $voiture->nbPlaces }}" class="form-control" placeholder="{{ $voiture->nbPlaces }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Cylindree :</strong>
                <input type="text" name="cylindree" value="{{ $voiture->cylindree }}" class="form-control" placeholder="{{ $voiture->cylindree }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Puissance (Ch):</strong>
                <input type="text" name="puissance" value="{{ $voiture->puissance }}" class="form-control" placeholder="{{ $voiture->puissance }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Poids (Kg):</strong>
                <input type="text" name="poids" value="{{ $voiture->poids }}" class="form-control" placeholder="{{ $voiture->poids }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Longeur (Mètres):</strong>
                <input type="text" name="longeur" value="{{ $voiture->longeur }}" class="form-control" placeholder="{{ $voiture->longeur }}">
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:30px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Mettre à jour</button>
            </div>
        </div>
    </form>
</div>
@endsection