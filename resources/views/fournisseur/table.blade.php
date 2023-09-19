@extends('layouts.app')
@section('content')

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <a href="{{route('fournisseur.index')}}">Enregistrer un nouveau Fournisseur</a>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LES FOURNISSEURS</h5>
              <p>Voici La liste des Founisseurs enregistrés</p>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">CodeF</th>
                    <th scope="col">Noms</th>
                    <th scope="col">Télephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date Ceation</th>
                    <th scope="col">Date Modification</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>F01</td>
                    <td>BWIRABUCIZA Blondy</td>
                    <td>+243 999 249 863</td>
                    <td>achilleblondy@gmail.com</td>
                    <td>Mabanga-Sud</td>
                    <td>2014-12-05</td>
                    <td>2014-12-05</td>
                    <td>
                    <a href="#"><i class="bi bi-eye"></i></a>
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
      <!-- LA CLASSE MODALE POUR MODIFIER  -->
      <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modification Fournisseur</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
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
