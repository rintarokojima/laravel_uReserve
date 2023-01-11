<html>
  <head>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Styles -->
@livewireStyles
  </head>
  <body>
    livewireテスト <span class="text-blue-300">register</span>
    <div>
      @if (session()->has('message')) <div class="">
        {{ session('message') }} </div>
      @endif
    </div>

    @livewire('register')
    @livewireScripts
  </body>
</html>