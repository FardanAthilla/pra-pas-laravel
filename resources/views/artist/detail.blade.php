@extends('layouts.main')

@section('content')
<div class="container">
    <div class="pb-3">
        <a href='{{ url('artist') }}' class="btn btn-danger"> Kembali </a> 
    </div>
    <h1 class="display-4 mb-4">Detail Artist</h1>

    <img src="{{ $artist->image }}" class="img-fluid mb-4" style="max-width: 300px; border-radius: 10px;">

    <div class="form-group p-3" data-aos="fade-up">
        <label for="nama">Nama Artist</label>
        <input type="nama" id="nama" name="nama" value="{{ $artist->nama }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="umur">Umur Artist</label>
        <input type="int" id="umur" name="umur" value="{{ $artist->umur }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="lahir">Lahir</label>
        <input type="date" id="lahir" name="lahir" value="{{ $artist->lahir }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3" data-aos="fade-up">
        <label for="kota">Kota Asal</label>
        <input type="text" id="kota" name="kota" value="{{ $artist->kota }}" class="form-control" readonly>
    </div>

    <div class="form-group p-3" data-aos="fade-up">
        <label for="umur">Umur Penyanyi</label>
        <input type="int" id="umur" name="umur" value="{{ $artist->umur }}" class="form-control" readonly>
    </div>

</div>
@endsection
