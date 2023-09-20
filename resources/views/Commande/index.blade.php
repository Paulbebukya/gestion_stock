@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <h1>AJOUTER UNE COMMANDE</h1>
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
              <form action="{{route('commande.store')}}" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Mecanicien</label>
                  <div class="col-sm-9">
                    <select id="inputNumber" name="mecaniciens_id" class="form-select">
                    <option selected></option>
                    @foreach ($mecaniciens as $mecanicien)
                      
                    <option value="{{ $mecanicien->id }}">{{ $mecanicien->nom }}</option>
                    @endforeach
                  </select>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Piece</label>
                  <div class="col-sm-9">
                    <select id="inputNumber" name="pieces_id" class="form-select">
                      <option ></option>
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
              <h5 class="card-title">Les Commandes Enregistrées</h5>
              <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mecancien</th>
                                    <th scope="col">Piece</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Date d'ajout</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($commandes as $commande)
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $commande->mecaniciens->nom }}</td>
                                        <td>{{ $commande->pieces->designation }}</td>
                                        <td>{{ $commande->quantite }}</td>
                                        <td>{{ $commande->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('commande.edit',$commande) }}" style="color:blue"><i class="bi bi-pen"></i></a>
                                            <a href="{{ route('commande.destroy', $commande) }}" style="color:red"><i class="bi bi-trash"
                                                    color="red"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                <a href="{{route('Commande.table')}}">Voir Plus</a>
            </div>

          </div>

        </div>
      </div>
    </section>


  </main><!-- End #main -->

@endsection
