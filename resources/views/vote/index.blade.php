@extends('layouts.app')

@section('content')


<div class="row row-cols-1 row-cols-md-3 g-4 mt-4 me-4">
<?php
$j =1;
?>
    @foreach ($candidates as $candidate)
        
  <div class="col">
    <div class="card">
      <img src="paslon{{ $j++    }}.jpg" class="card-img-top" alt="..." style="height:300px; ">
      <div class="card-body">
        <h2 class="card-title">{{ $candidate->lead }}</h5>
        <h5 class="card-text">{{ $candidate->co_lead }}</h5>
        <p class="card-text">{{ $candidate->motto }}</p>

        {{-- <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p> --}}
            <form action="/voting" method="post">
            @csrf
            <button type="submit" name="candidate_id" value="{{ $candidate->id }}" class="btn btn-success" onclick="return cek('{{ $candidate->lead }} sama {{ $candidate->co_lead }}')"> pilih </button>
            </form>
      </div>
    </div>
  </div>

  @endforeach
</div>
<Script>
    function cek(tim)
{
let check1=confirm("Yakin kamu mau pilih pasangan "+tim+"?");
if (check1)
    {
    let check2=confirm("Yakin banget nih??");
        if (check2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
else
    {
        return false;
    }
}
</Script>


@endsection