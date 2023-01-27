@extends('layouts.app')
@section('title', 'Détaile')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 pt-5">
            <a href="{{ route('blog.index') }}" class="btn btn-primary btn-sm">← Retouner à la liste d'étudients</a>
        </div>
    </div>
    <br>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom étudient</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">N° Téléphone</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Modifier</th>
            <th scope="col">Effacer</th>
        </tr>
        <tr>
            <td  scope="row">{{ $etudient->id }}</td>
            <td>{{ $etudient->nom }}</td>
            <td>{{ $etudient->email }}</td>
            <td>{{ $etudient->adresse}}</td>
            <td>{{ $etudient->phone }}</td>
            <td>{{ $etudient->date_de_naissance }}</td>
            <td><a class="btn btn-warning" href="{{ route('blog.edit', $etudient->id)}}">Modifier</a></td>
            <td>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Effacer
                    </button>           
                </div>
            </td>
        </tr>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un étudient</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous certain de vouloir effacer cette donnée?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{ route('blog.edit', $etudient->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
