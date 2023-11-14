@extends('layouts.main')

@section('content')
<div class="container">
    <div class="pb-3">
        <a href='{{ url('song') }}' class="btn btn-danger"> Kembali </a> 
    </div>
    <h1 class="display-4 mb-4">Detail Song</h1>

    <div class="form-group p-3">
        <label for="judul">Judul Lagu</label>
        <input type="text" id="judul" name="judul" value="{{ $song->judul }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3">
        <label for="judul">Penyanyi Lagu</label>
        <input type="text" id="judul" name="judul" value="{{ $song->penyanyi }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3">
        <label for="kelas">Rilis</label>
        <input type="text" id="kelas" name="kelas" value="{{ $song->tahun }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3">
        <label for="jenis">Jenis Lagu</label>
        <input type="text" id="jenis" name="jenis" value="{{ $song->jenis }}" class="form-control" readonly>
    </div>

    <div class="form-group p-3">
        <label for="umur">Umur Penyanyi</label>
        <input type="int" id="umur" name="umur" value="{{ $song->umur }}" class="form-control" readonly>
    </div>
    

        </form>
    </div>
</div>
@endsection
