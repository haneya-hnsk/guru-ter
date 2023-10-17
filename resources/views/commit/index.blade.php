@extends('layouts.app')

@section('content')

<h3>orang yang belum pilih  = {{ $dahlah::where('candidate_id', false)->count() }}</h3><br>
<h3>orang yang pilih pasangan 1  = {{ $dahlah::where('candidate_id', 1)->count() }}</h3><br>
<h3>orang yang pilih pasangan 2  = {{ $dahlah::where('candidate_id', 2)->count() }}</h3><br>
<h3>orang yang pilih pasangan 3  = {{ $dahlah::where('candidate_id', 3)->count() }}</h3>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-4 me-4">
    <form action="/commit" method="get">
        <div class="mb-3 d-flex">
            <input type="text" placeholder="cari orang" name="cari" class="form-control" id="cari" value="{{ request('cari') }}" aria-describedby="emailHelp">
            <button class="btn btn-primary ms-4" type="submit"> cari</button>
          </div>
    </form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Peserta Voting</th>
            <th scope="col">Piihan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr class="{{ $user->candidate ? 'table-success' : 'table-danger' }}">
        <th>{{ $user->name }}</th>
        <td>{{ $user->candidate ? "Sudah Memilih" : "Belum Memilih" }}</td>
      </tr>
      @endforeach
      
    </tbody>
</table>

@endsection