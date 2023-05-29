@extends('index')
@section('content')
    <div class="flex items-center justify-center">
        <div class="overflow-x-auto w-full">
            <div class="w-1/2 mx-auto">
                <h3 class="text-lg font-bold">Tambah Mahasiswa</h3>
                {{-- Form --}}
                <form action="{{route('mahasiswa.update', ['id' => $mahasiswa->id])}}" method="post" class="my-3">
                  @csrf
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Nama Mahasiswa</span>
                    </label>
                    <input type="text" name="nama" placeholder="Nama Mahasiswa" class="input input-bordered w-full max-w-xs" value="{{$mahasiswa->nama}}" required/>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Nomor Induk Mahasiswa</span>
                    </label>
                    <input type="text" name="nim" placeholder="NIM" class="input input-bordered w-full max-w-xs" value="{{$mahasiswa->nim}}" required/>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Kelas</span>
                    </label>
                    <select class="select select-bordered w-full max-w-xs" name="kelas">
                      <option disabled selected>Pilih Kelas</option>
                      @foreach ($kelas as $k)
                        <option value="{{$k->id}}" @if ($mahasiswa->kelas->id == $k->id) selected @endif>{{ $k->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <button type="submit" class="btn mt-3 ">Update</button>
                  <a href="/mahasiswa" class="btn mt-3 ">Batal</a>
                </form>
                {{-- End Form --}}
            </div>
        </div>
    </div>
@endsection