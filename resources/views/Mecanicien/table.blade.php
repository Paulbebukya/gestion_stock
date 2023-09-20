@extends('layouts.app')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <a href="{{ route('mecanicien.index') }}">Enregistrer un nouveau Mecanicien</a>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LES MECANICIENS</h5>
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
                                    @foreach ($mecaniciens as $mecanicien)
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $mecanicien->nom }}</td>
                                        <td>{{ $mecanicien->telephone }}</td>
                                        <td>{{ $mecanicien->email }}</td>
                                        <td>{{ $mecanicien->adresses }}</td>
                                        <td>
                                            <a href="{{ route('mecanicien.edit', $mecanicien) }}" style="color:blue"><i
                                                    class="bi bi-pen"></i></a>
                                            <a href="{{ route('mecanicien.destroy', $mecanicien) }}" style="color:red"><i
                                                    class="bi bi-trash" color="red"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-items-end mt-3">
                          <span>{{ $mecaniciens->links() }}</span>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    </main><!-- End #main -->
@endsection
