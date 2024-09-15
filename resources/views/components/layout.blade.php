<!DOCTYPE html>
<html lang="en">
<head class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Antasena | {{ $title }}</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body class="h-full bg-black">
  <div class="min-h-full">
    <x-navbar></x-navbar>
  
    {{-- <x-header>{{ $title }}</x-header> --}}
    <main>
      <div class="bg-cover bg-center" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>  
</body>
</html>