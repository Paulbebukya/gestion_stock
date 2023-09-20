@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <a href="{{ route('fournisseur.index') }}">Enregistrer un nouveau Fournisseur</a>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LES FOURNISSEURS</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Noms</th>
                                    <th scope="col">Télephone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($fournisseurs as $fournisseur)
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $fournisseur->nom }}</td>
                                        <td>{{ $fournisseur->telephone }}</td>
                                        <td>{{ $fournisseur->email }}</td>
                                        <td>{{ $fournisseur->adresses }}</td>
                                        <td>
                                            <a href="{{ route('fournisseur.edit', $fournisseur) }}" style="color:blue"><i
                                                    class="bi bi-pen"></i></a>
                                            <a href="{{ route('fournisseur.destroy', $fournisseur) }}" style="color:red"><i
                                                    class="bi bi-trash" color="red"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-items-end mt-3">
                          <span>{{ $fournisseurs->links() }}</span>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
        <!-- LA CLASSE MODALE POUR MODIFIER  -->

    </section>


    </main><!-- End #main -->
@endsection
