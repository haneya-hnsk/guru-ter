@extends('layouts.app')

@section('content')
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-lg-6 col-11">
            <div class="">
                <div class="">
                    <div class="text-center">
                        <h5>
                            Pilih Guru Berprestasi
                        </h5>
                        <p>
                            Pilih Guru yang anda inginkan sesuai kriteria
                        </p>
                        <br>
                    </div>
                    <form action="/voting/{{ auth()->user()->id }}" method="post">
                        @csrf
                    
                        <div class="mb-4">
                            <label for="disiplin" class="form-label">Guru Ter <b>Disiplin</b></label>
                            <select name="disiplin" id="disiplin" class="form-control" required>
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

                        <div class="mb-4">
                            <label for="kreatif_inovatif" class="form-label">Guru Ter <b>Kreatif dan Inovatif</b></label>
                            <select name="kreatif_inovatif" id="kreatif_inovatif" class="form-control" required>
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

                        <div class="mb-4">
                            <label for="sabar_ramah" class="form-label">Guru Ter <b>Sabar dan Ramah</b></label>
                            <select name="sabar_ramah" id="sabar_ramah" class="form-control" required>
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

                        <div class="mb-4">
                            <label for="humoris_menyenangkan" class="form-label">Guru Ter <b>Humoris dan Menyenangkan</b></label>
                            <select name="humoris_menyenangkan" id="humoris_menyenangkan" class="form-control" required>
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

                        <div class="mb-4">
                            <label for="komunikatif" class="form-label">Guru Ter <b>Komunikatif</b></label>
                            <select name="komunikatif" id="komunikatif" class="form-control" required>
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

                        <div class="mb-4">
                            <label for="favorit_jurusan" class="form-label">Guru <b>Favorit Jurusan</b></label>
                            <select name="favorit_jurusan" id="favorit_jurusan" class="form-control" required>
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
                            <button type="submit" class="btn btn-success" onclick="return cek()">Kumpulkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <Script>
        function cek() {
            let check1 = confirm("Sudah yakin dengan pilihan kamu?");
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
