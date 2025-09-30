<body class="bg-primary text-white">
  <nav class="fixed top-0 left-0 w-full bg-transparent z-50">
    <div class="container mx-auto flex items-center justify-between py-6 px-4">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="text-2xl font-condensed tracking-widest">SPACE TOURISM</a>
      <!-- Menu -->
      <ul class="flex space-x-8">
        @php $current = Route::currentRouteName(); @endphp
        <li>
          <a href="{{ route('home') }}"
             class="nav-link {{ $current === 'home' ? 'active' : '' }}">
            ACCUEIL
          </a>
        </li>
        <li>
          <a href="{{ route('destination.index') }}"
             class="nav-link {{ Str::startsWith($current, 'destination.') ? 'active' : '' }}">
            DESTINATION
          </a>
        </li>
        <!-- autres items… -->
      </ul>
    </div>
  </nav>

  <main class="pt-24">
    @yield('content')
  </main>
</body>
