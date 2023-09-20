@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <a href="{{ route('approvionner.index') }}">Enregistrer une nouvelle Commande</a>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">APPROVISIONNEMENT</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fournisseur</th>
                                    <th scope="col">Piece</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Date Ceation</th>
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
                        <div class="d-flex justify-items-end mt-3">
                            <span>{{ $approvionners->links() }}</span>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
        </main><!-- End #main -->
    @endsection
