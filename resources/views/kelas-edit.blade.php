@extends('index')
@section('content')
    <div class="flex items-center justify-center">
        <div class="overflow-x-auto w-full">
            <div class="w-1/2 mx-auto">
                <h3 class="text-lg font-bold">Edit Kelas</h3>
                {{-- Form --}}
                <form action="{{route('kelas.update', ['id' => $kelas->id])}}" method="post" class="my-3">
                  @csrf
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Nama Kelas</span>
                    </label>
                    <input type="text" name="kelas" placeholder="Nama Kelas" class="input input-bordered w-full max-w-xs" value="{{$kelas->name}}" required/>
                  </div>
                  <button type="submit" class="btn mt-3 ">Update</button>
                  <a href="/mahasiswa" class="btn mt-3 ">Batal</a>
                </form>
                {{-- End Form --}}
            </div>
        </div>
    </div>
@endsection