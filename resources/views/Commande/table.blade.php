@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <a href="{{ route('commande.index') }}">Enregistrer une nouvelle Commande</a>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LES COMMANDES ENREGISTREES</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mecancien</th>
                                    <th scope="col">Piece commandée</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Date Ceation</th>
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
                        <div class="d-flex justify-items-end mt-3">
                          <span>{{ $commandes->links() }}</span>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    </main><!-- End #main -->
@endsection
