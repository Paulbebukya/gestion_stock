@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>AJPPROVISIONNEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Veuillez remplir ce formulaire</h5>

              <!-- General Form Elements -->
              <form method="post" action="{{route('approvionner.update' , $approvionner)}}">
              @csrf
              @method('put')
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label"> Fournisseur</label>
                  <div class="col-sm-9">
                    <select id="inputNumber" name="fournisseurs_id" class="form-select">
                    <option value="{{ $approvionner->fournisseurs_id }}"> {{ $approvionner->fournisseurs->nom }}</option>
                    <option></option>

                    @foreach ($fournisseurs as $fournisseur)
                      
                      <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                      @endforeach
                  </select>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label"> Pièce</label>
                  <div class="col-sm-9">
                    <select id="inputNumber" name="pieces_id" class="form-select">
                    <option value="{{ $approvionner->pieces_id }}"> {{ $approvionner->pieces->designation }}</option>
                    <option></option>
                     @foreach ($pieces as $piece)
                    <option value="{{ $piece->id }}">{{ $piece->designation }}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Quantité</label>
                  <div class="col-sm-9">
                    <input type="number" name="quantite" class="form-control" value="{{ $approvionner->quantite }}">
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
