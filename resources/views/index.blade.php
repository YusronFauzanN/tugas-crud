<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section>
        <div class="navbar bg-base-100">
            <div class="flex-1">
              <a class="btn btn-ghost normal-case text-xl">CRUD</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-1">
                <li><a href="{{url('mahasiswa')}}" class="text-white">Mahasiswa</a></li>
                <li><a href="{{url('kelas')}}" class="text-white">Kelas</a></li>
                {{-- {{-- <li><a href="{{url('dosen')}}" class="text-white">Dosen</a></li> --}}
              </ul>
            </div>
          </div>
    </section>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>