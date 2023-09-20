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
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Veuillez remplir ce formulaire</h5>

              <!-- General Form Elements -->
              <form method="post" action="{{ route('piece.store') }}">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Designation</label> 
                  <div class="col-sm-8">
                    <input type="text" name="designation" class="form-control">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-4 col-form-label">Prix</label>
                  <div class="col-sm-8">
                    <input type="number" name="prix" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-4 col-form-label">Quantité</label>
                  <div class="col-sm-8">
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

        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Les Pièces Enregistrées récement</h5>
               <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">CodePiece</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Date Ceation</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @forelse ($pieces as $piece)
                    
                
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $piece->CodePiece }}</td>
                    <td>{{ $piece->designation }}</td>
                    <td>${{ $piece->prix }}</td>
                    <td>{{ $piece->quantite }}</td>
                    <td>{{ $piece->created_at->format('d/m/Y') }}</td>
                    <td>
                    <a href="{{ route("piece.edit", $piece) }}" style="color:blue" ><i class="bi bi-pen"></i></a>
                    <a href="{{ route("piece.destroy",$piece) }}" style="color:red"><i class="bi bi-trash" color="red"></i></a>
                    </td>
                  </tr>
                    @empty
                    <div class="alert alert-info">Aucune piece Enregistrée</div>
                  @endforelse

                </tbody>
              </table>
                <a href="{{route('Piece.table')}}">Voir Plus</a>
            </div>

          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

@endsection
