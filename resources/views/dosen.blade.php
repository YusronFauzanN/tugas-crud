@extends('index')
@section('content')
    <div class="flex items-center justify-center">
        <div class="overflow-x-auto">
            <h1>Tabel Dosen</h1>
            <table class="table w-full">
              <!-- head -->
              <thead>
                <tr>
                  <th></th>
                  <th>Nama</th>
                  <th>NIP</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                @foreach ($dosen as $d)
                    <tr>
                        <th>{{$d->id}}</th>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->nip}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection