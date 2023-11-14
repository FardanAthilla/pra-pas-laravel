    @extends('layouts.main')

    @section('content')
    <div class="container">
        <h1 class="display-4 mt-4">Ini adalah Halaman Tabel Artist</h1>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Artist</th>
                        <th class="text-center">Umur</th>

                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artist as $index => $artist)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $artist->nama }}</td>
                            <td>{{ $artist->umur }}</td>
                            
                            <td class="text-center">
                                <a href='artist/{{ $artist->id }}' class="btn btn-info btn-sm"><i class="fas fa-info"></i></a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
