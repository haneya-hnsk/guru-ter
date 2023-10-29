@extends('layouts.app')

@section('content')


<div class="container " style="min-height: 90vh; margin-top:10vh;">

   <div class="container mt-auto text-center">
     <div class="row d-flex justify-content-center mt-auto align-items-center">
       <div class="col-8">

   <h3>E-VOTING PEMILOS (Pemilihan Ketua Osis)</h3>
   <h3>SMK TAKHASSUS AL QUR'AN WONOSOBO</h3>
   <br>
   <p style="font-size:20px;"> <small>Terima kasih sudah berpartisipasi dalam pemilos 2023/2024</small></p>
<br>
</div>
</div>
<form action="{{ route('logout') }}" method="post">
   @csrf
<button type="submit" class="btn btn-danger p-2 ps-4 pe-4"><h5>Logout</h5></button>
</form>
   </div>
   </div>

@endsection