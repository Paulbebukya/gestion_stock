@extends('layouts.app')
@section('content')

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Veuillez remplir ce formulaire</h5>

          <!-- General Form Elements -->
          <form action="{{route('fournisseur.store')}}" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
              <div class="col-sm-10">
                <input type="text" name="nom" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Telephone</label>
              <div class="col-sm-10">
                <input type="number" name="telephone" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
              <div class="col-sm-10">
                <input type="text" name="adresses" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>

    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Les Fournisseurs Enregistrés</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Noms</th>
                <th scope="col">Télephone</th>
                <th scope="col">Email</th>
                <th scope="col">Adresse</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($fournisseurs as $fournisseur)
                  
                <th scope="row">{{$loop->index +1 }}</th>
                <td>{{ $fournisseur->nom }}</td>
                <td>{{ $fournisseur->telephone }}</td>
                <td>{{ $fournisseur->email }}</td>
                <td>{{ $fournisseur->adresses }}</td>
                <td>
                  <a href="{{ route('fournisseur.edit', $fournisseur) }}" style="color:blue"><i class="bi bi-pen"></i></a>
                  <a href="{{ route('fournisseur.destroy', $fournisseur) }}" style="color:red"><i class="bi bi-trash" color="red"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
          <a href="{{route('fournisseur-tables')}}">Voir Plus</a>
        </div>
      </div>
    </div>
  </div>
</section>


</main><!-- End #main -->

@endsection