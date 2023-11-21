@extends('layouts.main')

@section('content')
<div class="container">
    <div class="pb-3">
        <a href='{{ url('city') }}' class="btn btn-danger"> Kembali </a> 
    </div>
    <h1 class="display-4 mb-4">Detail City</h1>

    <div class="form-group p-3">
        <label for="kota">Nama Kota</label>
        <input type="text" id="kota" name="kota" value="{{ $city->kota }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3">
        <label for="judul">Nama Negara</label>
        <input type="text" id="judul" name="judul" value="{{ $city->negara }}" class="form-control" readonly>
    </div>
    
    <div class="form-group p-3">
        <label for="berdiri">Kapan Berdiri nya</label>
        <input type="date" id="berdiri" name="berdiri" value="{{ $city->berdiri }}" class="form-control" readonly>
    </div>

    <div class="form-group p-3">
        <label for="jumlah">Jumlah Penduduk</label>
        <input type="int" id="jumlah" name="jumlah" value="{{ $city->jumlah }}" class="form-control" readonly>
    </div>
    

        </form>
    </div>
</div>
@endsection
