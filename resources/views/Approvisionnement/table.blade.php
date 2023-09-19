@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <a href="{{route('Approvisionnement.index')}}">Enregistrer une nouvelle Commande</a>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">APPROVISIONNEMENT</h5>
              <p>Voici La liste des Approvisionnements</p>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">IdFourn</th>
                    <th scope="col">IdPiece</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Date Ceation</th>
                    <th scope="col">Date Modification</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mec01</td>
                    <td>P01</td>
                    <td>10</td>
                    <td>2014-12-05</td>
                    <td>2014-12-05</td>
                    <td>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#disablebackdrop"><i class="bi bi-eye"></i></a>
                    <a href="#" style="color:green" type="button" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-pen"></i></a>
                    <a href="#" style="color:red"><i class="bi bi-trash" color="red"></i></a>
                    </td>
                  </tr>

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
      <!-- LA CLASSE MODALE POUR VOIR LES DETAILS SUR COMMANDE -->
      <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">PROFIL UTILISATEUR</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content pt-2">
                         <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">A propos</h5>
                            <p class="small fst-italic">Quelques details sur la commande</p>

                            <h5 class="card-title">Detail Sur la Commande</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">NomComplet</div>
                                <div class="col-lg-9 col-md-8">BEBUKYA Paul</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Achat</div>
                                <div class="col-lg-9 col-md-8">Achat Amortisseur</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Qté</div>
                                <div class="col-lg-9 col-md-8">2</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">PU</div>
                                <div class="col-lg-9 col-md-8">50</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">Goma</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">(243) 999 249 863</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">paul@gmail.com</div>
                            </div>

                        </div>
                        </div>
                        </div>
                  </div>
                </div>
              </div><!-- FIN-->

      <!-- LA CLASSE MODALE POUR MODIFIER  -->
      <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modification Fournisseur</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Id Fourn</label>
                            <div class="col-sm-10">
                                <select id="inputNumber" name="fournisseurs_id" class="form-select">
                                <option selected>Mec01</option>
                                <option>Mec02</option>
                            </select>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Id Pièce</label>
                            <div class="col-sm-10">
                                <select id="inputNumber" name="pieces_id" class="form-select">
                                <option selected>P01</option>
                                <option>P02</option>
                            </select>
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Quantité</label>
                            <div class="col-sm-10">
                                <input type="number" name="	quantite" class="form-control">
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
