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
              <form method="post" action="{{route('approvionner.store')}}">
              @csrf
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label"> Fournisseur</label>
                  <div class="col-sm-9">
                    <select id="inputNumber" name="fournisseurs_id" class="form-select">
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
                    <input type="number" name="quantite" class="form-control">
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

        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Les Approvisionnements Enregistrées</h5>
                <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fournisseur</th>
                                    <th scope="col">Piece</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Date d'ajout</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($approvionners as $approvionner)
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $approvionner->fournisseurs->nom }}</td>
                                        <td>{{ $approvionner->pieces->designation }}</td>
                                        <td>{{ $approvionner->quantite }}</td>
                                        <td>{{ $approvionner->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('approvionner.edit', $approvionner) }}" style="color:blue"><i
                                                    class="bi bi-pen"></i></a>
                                            <a href="{{ route('approvionner.destroy', $approvionner) }}"
                                                style="color:red"><i class="bi bi-trash" color="red"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                <a href="{{route('approvisionnement.table')}}">Voir Plus</a>
            </div>

          </div>

        </div>
      </div>
    </section>


  </main><!-- End #main -->

@endsection
