@extends('layouts.master')
@section('content')

    <h1>Tableau de bord</h1>

    <div class="text-center">
        <a href="{{ url('ajouterFicheStar') }}">
            <button class="ajouter-fiche">Ajouter Fiche Star</button>
        </a>
    </div>
    <div class="container">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr id='tableHeader'>
                <th class="text-center">Nom</th>
                <th class="text-center">Prénom</th>
                <th class="text-center">Image</th>
                <th class="text-center">Description</th>
                <th class="text-center">Modifier</th>
                <th class="text-center">Supprimer</th>
            </tr>
            </thead>
            @foreach($mesStars as $uneStar)
                <tr>
                    <td>{{$uneStar->nom_star}}</td>
                    <td>{{$uneStar->prenom_star}}</td>
                    <td>{{$uneStar->image_star}}</td>
                    <td>{{$uneStar->description_star}}</td>
                    <td></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger">X</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

