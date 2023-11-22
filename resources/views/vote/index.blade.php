@extends('layouts.app')

@section('content')
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-8 ">
            <div class="card">
                <div class="card-body">
                    <form action="/voting/{{ auth()->user()->id }}" method="post">
                        @csrf
                    
                        <div class="mb-3">
                            <label for="disiplin" class="form-label">Guru Ter <b>Disiplin</b></label>
                            <select name="disiplin" id="disiplin" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($candidates as $candidate)
                                    <option value="{{ $candidate->name }}"
                                        
                                        {{ old('disiplin') == $candidate->name ? 'selected' : '' }}>{{ $candidate->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('disiplin')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kreatif_inovatif" class="form-label">Guru Ter <b>Kreatif dan Inovatif</b></label>
                            <select name="kreatif_inovatif" id="kreatif_inovatif" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($candidates as $candidate)
                                    <option value="{{ $candidate->name }}"
                                        
                                        {{ old('kreatif_inovatif') == $candidate->name ? 'selected' : '' }}>{{ $candidate->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kreatif_inovatif')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sabar_ramah" class="form-label">Guru Ter <b>Sabar dan Ramah</b></label>
                            <select name="sabar_ramah" id="sabar_ramah" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($candidates as $candidate)
                                    <option value="{{ $candidate->name }}"
                                        
                                        {{ old('sabar_ramah') == $candidate->name ? 'selected' : '' }}>{{ $candidate->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sabar_ramah')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="humoris_menyenangkan" class="form-label">Guru Ter <b>Humoris dan Menyenangkan</b></label>
                            <select name="humoris_menyenangkan" id="humoris_menyenangkan" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($candidates as $candidate)
                                    <option value="{{ $candidate->name }}"
                                        
                                        {{ old('humoris_menyenangkan') == $candidate->name ? 'selected' : '' }}>{{ $candidate->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('humoris_menyenangkan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="komunikatif" class="form-label">Guru Ter <b>Komunikatif</b></label>
                            <select name="komunikatif" id="komunikatif" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($candidates as $candidate)
                                    <option value="{{ $candidate->name }}"
                                        
                                        {{ old('komunikatif') == $candidate->name ? 'selected' : '' }}>{{ $candidate->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('komunikatif')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="favorit_jurusan" class="form-label">Guru <b>Favorit Jurusan</b></label>
                            <select name="favorit_jurusan" id="favorit_jurusan" class="form-control" >
                                 <option value="" selected disabled hidden>Pilih disini</option>
                                @foreach ($study_candidates as $study_candidates)
                                    <option value="{{ $study_candidates->name }}"
                                        
                                        {{ old('favorit_jurusan') == $study_candidates->name ? 'selected' : '' }}>{{ $study_candidates->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('favorit_jurusan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Kumpulkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <Script>
        function cek(tim) {
            let check1 = confirm("Yakin kamu mau pilih pasangan " + tim + "?");
            if (check1) {
                let check2 = confirm("Yakin banget nih??");
                if (check2) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    </Script>
@endsection
