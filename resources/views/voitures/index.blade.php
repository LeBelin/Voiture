@extends('voitures.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gestion des voitures</h2>
            </div>
        </div>
    </div>
</br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Numero</th>
            <th>Vin</th>
            <th>Couleur</th>
            <th>Nombre de Places</th>
            <th>Cylindree</th>
            <th>Puissance</th>
            <th>Poids</th>
            <th>Longeur</th>
            <th width="255px">Actions <div class="pull-right"><a class="btn btn-success" href="{{ route('voitures.create') }}"><i class='fa fa-plus-circle'></i> Ajouter une voiture</a></div></th>
        </tr>
        @foreach($voitures as $voiture)
            <tr>
                <td>N° {{ $voiture['numVoiture'] }}</td>
                <td>{{ $voiture['vin'] }}</td>
                <td>{{ $voiture['couleur'] }}</td>
                <td>{{ $voiture->nbPlaces }} place{{ $voiture->nbPlaces > 1 ? 's' : '' }}</td>
                <td>{{ $voiture['cylindree'] }}</td>
                <td>{{ $voiture['puissance'] }}Ch</td>
                <td>{{ $voiture['poids'] }} Kg</td>
                <td>{{ $voiture->longeur }} Mètre{{ $voiture->longeur > 1 ? 's' : '' }}</td>
                <td>
                    <form action="{{ route('voitures.destroy',$voiture->numVoiture) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('voitures.show',$voiture->numVoiture) }}">Détails</a>
                        <a class="btn btn-primary" href="{{ route('voitures.edit',$voiture->numVoiture) }}">Editer</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <!-- Pagination -->
    {!! $voitures->links() !!}
@endsection
