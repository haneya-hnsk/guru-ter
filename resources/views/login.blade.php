@extends('layouts.app')

@section('content')

    
<div class="container ">

  <div class="container mt-auto">
    <div class="row d-flex justify-content-center mt-auto">
      <div class="col-7">
        
        <div class="card align-middle mt-4 pt-1">
        <h1 class="h1" align="center"><b>Login</b></h1>
          <div class="card-body">
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
              
              <button type="submit" class="btn btn-primary ms-auto">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
  


@endsection
