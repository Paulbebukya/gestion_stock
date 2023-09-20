@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>MODIFIER LE MECANICIEN</h1>
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
              <form action="{{ route('mecanicien.update', $mecanicien) }}" method="post">
              @csrf
              @method("put")
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom Complet</label>
                  <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control" value="{{ $mecanicien->nom }}">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                    <input type="number" name="telephone" class="form-control" value="{{ $mecanicien->telephone }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{ $mecanicien->email }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                  <div class="col-sm-10">
                    <input type="text" name="adresses" class="form-control" value="{{ $mecanicien->adresses }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>


  </main><!-- End #main -->

@endsection
