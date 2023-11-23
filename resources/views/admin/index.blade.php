@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 me-4">
        <form action="logout" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
        <form action="/admin" method="get">
            @if (request('class'))
                <input type="hidden" name="class" value="{{ request('class') }}">
            @endif
            <div class="mb-3">
                <input type="text" onchange="this.form.submit()" placeholder="cari orang" name="name"
                    class="form-control" id="name" value="{{ request('name') }}" aria-describedby="emailHelp">

            </div>
        </form>
        <form action="/admin" method="get">
            @if (request('name'))
                <input type="hidden" name="name" value="{{ request('name') }}">
            @endif
            <div class="mb-3 ">
                <select onchange="this.form.submit()" class="form-select" aria-label="Default select example"
                    name="class">
                    <option value="" {{ request('class') == null ? 'selected' : '' }}>SEMUA PESERTA</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class['class'] }}" {{ $class['class'] == request('class') ? 'selected' : '' }}>
                            {{ $class['class'] }}</option>
                    @endforeach
                </select>
            </div>
        </form>

    </div>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">
          Tabel Ajar
        </h5>
        <table id="myTable">
          <thead>
              <tr>
                  <th>Peserta Voting</th>
                  <th>Piihan</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
                  <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->candidate ?? 'Belum Memilih' }}</td>
                  </tr>
              @endforeach
  
          </tbody>
      </table>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
          Tabel Siswa
        </h5>
        <table id="myTable2">
          <thead>
              <tr>
                  <th>Nama Guru</th>
                  <th>Kelas</th>
                  <th>Mapel</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($teachers as $teacher)
                  <tr>
                      <td>{{ $teacher->name }}</td>
                      <td>{{ $teacher->class }}</td>
                      <td>{{ $teacher->subject }}</td>
                  </tr>
              @endforeach
  
          </tbody>
      </table>
      </div>
    </div>
   
    {{-- 
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <tables>

              </tables>
          </div>
      </div>
  </div> --}}   
@endsection

@section('script')
<script>
  let baru = new DataTable('#myTable')
  let baru2 = new DataTable('#myTable2')
</script>
@endsection
