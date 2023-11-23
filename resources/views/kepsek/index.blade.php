@extends('../layouts/app')
@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="Terdisiplin">
                        Terdisiplin
                    </h5>

                    <table id="terdisiplin">
                        <tr>
                            <th>Nama Guru</th>
                            <th>Total Suara</th>
                            <th>Total Pemilih</th>
                            <th>Presentase</th>
                        </tr>
                        @foreach ($disiplins as $terdisiplin)
                        <?php
                        //  dd($terdisiplin)    
                         ?>
                            <tr>

                                <td>{{ $terdisiplin['name'] }}</td>
                                <td>{{ $terdisiplin['vote'] }}</td>
                                <td>{{ $terdisiplin['total_vote'] }}</td>
                                <td>{{ $terdisiplin['presentage'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
      let n =   new DataTable('#terdisiplin')
    </script>
@endsection
