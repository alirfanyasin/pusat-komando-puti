<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Library --}}
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>

  @stack('css')
</head>

<body class="bg-gray-100 relative h-screen">
  @include('components.sidebar')
  <!-- Main Content -->
  <div class="lg:ml-64">
    @include('components.navbar')

    <!-- Content Area -->
    <main class="p-4 md:p-6">
      @yield('content')
    </main>
  </div>

  @include('components.floating-button-create')

  {{-- Javascript Code Default --}}
  @include('helper.default_script')
  @stack('js')
</body>

</html>
