@extends('index')
@section('content')
    <div class="flex items-center justify-center">
        <div class="overflow-x-auto w-full">
            <div class="w-1/2 mx-auto">
              <h1 class="mb-3 text-2xl">Tabel Mahasiswa</h1>
            <!-- The button to open modal -->
            <!-- The button to open modal -->
            <label for="my-modal-3" class="btn my-3">Tambah data</label>
            <form action="{{route('mahasiswa.cari')}}" method="POST" class="my-3">
              @csrf
              <input type="text" name="nama" placeholder="Cari mahasiswa" class="input input-bordered w-full max-w-xs" required/>
              <button type="submit" class="btn mt-3 ">Cari</button> <a href="/mahasiswa" class="btn mt-3 ">Bersihkan Filter</a>
            </form>
            <!-- Put this part before </body> tag -->
            <input type="checkbox" id="my-modal-3" class="modal-toggle" />
            <div class="modal">
              <div class="modal-box relative">
                <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="text-lg font-bold">Tambah Mahasiswa</h3>
                {{-- Form --}}
                <form action="{{route('mahasiswa.add')}}" method="post" class="my-3">
                  @csrf
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Nama Mahasiswa</span>
                    </label>
                    <input type="text" name="nama" placeholder="Nama Mahasiswa" class="input input-bordered w-full max-w-xs" required/>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Nomor Induk Mahasiswa</span>
                    </label>
                    <input type="text" name="nim" placeholder="NIM" class="input input-bordered w-full max-w-xs" required/>
                  </div>
                  <button type="submit" class="btn mt-3 ">Tambah</button>
                </form>
                {{-- End Form --}}
              </div>
            </div>
            <table class="table w-full flex mx-auto">
              <!-- head -->
              <thead>
                <tr>
                  <th></th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th class="">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                @foreach ($mahasiswa as $m)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->nim}}</td>
                        <td class="inline-flex">
                          <a href="{{ route('mahasiswa.edit', ['id' => $m->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                          </a>
                          <a href="{{route('mahasiswa.delete', ['id' => $m->id])}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                          </a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection