@extends('layouts.app')

@section('content')

    
<div class="container ">

  <div class="container mt-auto">
    <div class="row d-flex justify-content-center mt-auto">
      <div class="col-lg-6 col-sm-9">
        
        <div class="align-middle mt-4 pt-1 ">
        <h4  align="center"><b>E-Voting Guru Berprestasi</b></h3>
        <h6  align="center"><b>SMK Takhassus Al Qur`an Wonosobo</b></h6>
        <br>
        <div class="text-center">
        {{-- <p>Petunjuk :</p> --}}
      <p>Silahkan masukkan NIS dan Password anda di kolom yang tersedia</p>
    </div>  
          <div class="">
            <form method="post" action="/login">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIS</label>
                <input type="text"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1"   class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success  ">Login</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
  


@endsection
