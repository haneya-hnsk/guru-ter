@extends('../layouts/app')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="Terdisiplin">
                        Terdisiplin
                    </h5>

                    <table id="terdisiplin">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disiplins as $terdisiplin)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $terdisiplin['name'] }}</td>
                                <td>{{ $terdisiplin['vote'] }}</td>
                                <td>{{ $terdisiplin['total_vote'] }}</td>
                                <td>{{ $terdisiplin['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="kreatif">
                        Kreatif dan Inovatif
                    </h5>

                    <table id="kreatif_inovatif">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kreatif_inovatifs as $kreatif_inovatif)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $kreatif_inovatif['name'] }}</td>
                                <td>{{ $kreatif_inovatif['vote'] }}</td>
                                <td>{{ $kreatif_inovatif['total_vote'] }}</td>
                                <td>{{ $kreatif_inovatif['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="Terdisiplin">
                        Sabar dan Ramah
                    </h5>

                    <table id="sabar_ramah">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sabar_ramahs as $sabar_ramah)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $sabar_ramah['name'] }}</td>
                                <td>{{ $sabar_ramah['vote'] }}</td>
                                <td>{{ $sabar_ramah['total_vote'] }}</td>
                                <td>{{ $sabar_ramah['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="kreatif">
                        Humoris dan Menyenangkan
                    </h5>

                    <table id="humoris_menyenangkan">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($humoris_menyenangkans as $humoris_menyenangkan)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $humoris_menyenangkan['name'] }}</td>
                                <td>{{ $humoris_menyenangkan['vote'] }}</td>
                                <td>{{ $humoris_menyenangkan['total_vote'] }}</td>
                                <td>{{ $humoris_menyenangkan['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="Terdisiplin">
                        Komunikatif
                    </h5>

                    <table id="komunikatif">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komunikatifs as $komunikatif)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $komunikatif['name'] }}</td>
                                <td>{{ $komunikatif['vote'] }}</td>
                                <td>{{ $komunikatif['total_vote'] }}</td>
                                <td>{{ $komunikatif['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-10">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="kreatif">
                       Favorit Jurusan
                    </h5>

                    <table id="favorit_jurusan">
                        <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($favorit_jurusans as $favorit_jurusan)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $favorit_jurusan['name'] }}</td>
                                <td>{{ $favorit_jurusan['vote'] }}</td>
                                <td>{{ $favorit_jurusan['total_vote'] }}</td>
                                <td>{{ $favorit_jurusan['presentage'] }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </div>
@endsection

@section('script')
    <script>
       new DataTable('#terdisiplin')
        new DataTable('#favorit_jurusan')
        new DataTable('#kreatif_inovatif')
        new DataTable('#komunikatif')
      new DataTable('#sabar_ramah')
     new DataTable('#humoris_menyenangkan')
    </script>
@endsection
