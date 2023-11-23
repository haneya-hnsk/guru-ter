@extends('layouts.app')

@section('content')
    <div class="container " style="min-height: 90vh; margin-top:3vh;">

        <div class="container mt-auto">
            <div class="row d-flex justify-content-center mt-auto align-items-center">
                <div class="col-lg-8 col-sm-9">
                    <div class="text-center">
                        <h3>Tentang Aplikasi E-voting</h3>
                        <p>Aplikasi E-Voting Guru Berprestasi adalah sebuah aplikasi yang digunakan untuk melakukan Voting
                            Guru. Ada 6 Kategori Guru Berprestasi Yaitu</p>
                    </div>
                    <br>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Terdisiplin</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Terkratif Dan Inovatif</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Tersabar Dan Ramah</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Terhumoris Dan Menyenangkan</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Terkomunikatif Atau Mudah Dipahami</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h6 class="card-title"><b>Guru Favorit Jurusan</b></h6>
                            <p>Yang Disiplin</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/voting" class="btn btn-success ps-3 pe-3">
                    <h4>Mulai Voting</h1>
                </a>
            </div>
        </div>
    </div>
@endsection
