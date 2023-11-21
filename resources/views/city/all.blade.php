@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="display-4 mt-4">Ini adalah Halaman Tabel City</h1>

    <div class="table-responsive mt-4">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Kota</th>
                    <th class="text-center">Nama Negara</th>

                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($city as $index => $city)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $city->kota }}</td>
                        <td>{{ $city->negara }}</td>
                        
                        <td class="text-center">
                            <a href='city/{{ $city->id }}' class="btn btn-info btn-sm"><i class="fas fa-info"></i></a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
