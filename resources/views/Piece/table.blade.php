@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <a href="{{route('piece.index')}}">Enregistrer une nouvelle Pièce</a>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LES PIECES</h5>
              <!-- Table with stripped rows -->
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
              <div class="d-flex justify-items-end mt-3">
                          <span>{{ $pieces->links() }}</span>
                        </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <!-- LA CLASSE MODALE POUR MODIFIER  -->
      <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modification Pièce</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Libbelé</label>
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

              </form><!-- End General Form Elements -->
                      </div>
                    <div class="modal-footer">  <button type="button" class="btn btn-primary">Enregistrer les Modifications</button>
                    </div>
                  </div>
                </div>
              </div>
    </section>


  </main><!-- End #main -->

@endsection
