@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>ENREGISTREMENT PIECE</h1>
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
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text" name="designation" class="form-control">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Prix</label>
                  <div class="col-sm-10">
                    <input type="number" name="	prix" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Quantité</label>
                  <div class="col-sm-10">
                    <input type="number" name="quantite" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date Creation</label>
                  <div class="col-sm-10">
                    <input type="date" name="created_at" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Date Modification</label>
                  <div class="col-sm-10">
                    <input type="date" name="updated_at" class="form-control">
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
              <h5 class="card-title">Les Pièces Enregistrées</h5>
                <a href="{{route('Piece.table')}}">Voir Plus</a>
            </div>

          </div>
          <a href="#" type="button" class="btn btn-secondary rounded-pill">Suivant</a>

        </div>
      </div>
    </section>


  </main><!-- End #main -->

@endsection
