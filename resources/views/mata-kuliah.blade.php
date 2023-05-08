@extends('index')
@section('content')
    <div class="flex items-center justify-center">
        <div class="overflow-x-auto">
            <h1>Tabel Mata Kuliah</h1>
            <table class="table w-full">
              <!-- head -->
              <thead>
                <tr>
                  <th></th>
                  <th>Mata Kuliah</th>
                  <th>Jadwal</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                @foreach ($mk as $d)
                    <tr>
                        <th>{{$d->id}}</th>
                        <td>{{$d->mata_kuliah}}</td>
                        <td>{{$d->jadwal}}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection