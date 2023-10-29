@extends('layouts.app')

@section('content')

<h3>orang yang belum pilih  = {{ $dahlah::where('candidate_id', false)->count() }}</h3><br>
<h3>orang yang pilih pasangan 1  = {{ $dahlah::where('candidate_id', 1)->count() }}</h3><br>
<h3>orang yang pilih pasangan 2  = {{ $dahlah::where('candidate_id', 2)->count() }}</h3><br>
<h3>orang yang pilih pasangan 3  = {{ $dahlah::where('candidate_id', 3)->count() }}</h3>
<br>
<h3>Presentasi  = {{ $dahlah::where('candidate_id', true)->count() / $dahlah::all()->count() * 100 }} %</h3>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-4 me-4">
  <form action="/admin" method="get">
      @if (request('class'))
          <input type="hidden" name="class" value="{{ request('class') }}">
      @endif
      <div class="mb-3">
          <input type="text" onchange="this.form.submit()" placeholder="cari orang" name="name" class="form-control" id="name" value="{{ request('name') }}" aria-describedby="emailHelp">
         
        </div>
      </form>
  <form action="/admin" method="get">
      @if (request('name'))
      <input type="hidden" name="name" value="{{ request('name') }}">
  @endif
      <div class="mb-3 ">
          <select onchange="this.form.submit()" class="form-select" aria-label="Default select example"  name="class">
              <option value="" {{ request('class')==null ? 'selected' : '' }}>SEMUA PESERTA</option>
             @foreach ($classes as $class)
              <option value="{{ $class['class'] }}" {{ $class['class'] == request('class') ? 'selected' : ''}} >{{ $class['class'] }}</option>
                 
             @endforeach
            </select>
      </div>
  </form>
     
</div>
<table class="table table-primary" >
  <thead>
      <tr>
          <th scope="col">Peserta Voting</th>
          <th scope="col">Piihan</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($users as $user)
    <tr class="{{ $user->candidate ? 'table-success' : 'table-danger' }}">
      <td>{{ $user->name }}</td>
      <td>{{ $user->candidate ? "Sudah Memilih" : "Belum Memilih" }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{-- 
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <tables>

              </tables>
          </div>
      </div>
  </div> --}}



<div class="d-flex justify-content-center">

  {{ $users->links() }}

</div>

@endsection