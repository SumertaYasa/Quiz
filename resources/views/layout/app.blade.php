<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>dashboard</title>
  @vite('resources/css/app.css')
</head>
<body>
  <x-navigation />
  
  <main class="dashboard-content">
    {{-- logic role untuk menampilkan dashboard sesuai role --}}
    {{-- 
      @if(auth()->user()->role == 'admin')
        @include('components.dashboard-admin')
      @elseif(auth()->user()->role == 'dosen')
        @include('components.dashboard-dosen')
      @elseif(auth()->user()->role == 'mahasiswa')
        @include('components.dashboard-mahasiswa')
      @endif
    --}}
  </main>

  @vite('resources/js/navigation.js')
</body>
</html>