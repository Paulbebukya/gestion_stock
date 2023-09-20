@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>MODIFICATION PIECE</h1>
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
              <form method="post" action="{{ route('piece.store') }}">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Designation</label> 
                  <div class="col-sm-9">
                    <input type="text" name="designation" class="form-control" value="{{ $piece->designation }}">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Prix</label>
                  <div class="col-sm-9">
                    <input type="number" name="prix" class="form-control" value="{{ $piece->prix }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-3 col-form-label">Quantité</label>
                  <div class="col-sm-9">
                    <input type="number" name="quantite" class="form-control" value="{{ $piece->quantite }}">
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
