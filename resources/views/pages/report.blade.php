<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pelaporan</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Library --}}
  <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>

  @stack('css')
</head>

<body class="bg-gray-100 relative min-h-screen py-8">
  <main class="flex items-center justify-center min-h-full px-4">
    <div class="bg-white rounded-lg shadow-md w-full max-w-3xl p-8">
      <div class="mb-8 flex items-center justify-start">
        <img src="{{ asset('assets/img/logo-puti-text.png') }}" alt="Logo PuTI" class="w-28">
        <div class="ml-5">
          <h1 class="text-3xl font-bold text-gray-800 mb-2">Form Pelaporan</h1>
          <p class="text-gray-600">Silakan isi formulir di bawah ini dengan lengkap</p>
        </div>
      </div>

      <form action="#" method="POST" class="space-y-6">
        @csrf

        {{-- Pekerjaan --}}
        <div>
          <label for="pekerjaan" class="block text-sm font-medium text-gray-700 mb-2">
            Laporan <span class="text-red-500">*</span>
          </label>
          <input type="text" id="pekerjaan" name="pekerjaan" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
        </div>

        {{-- Kategori --}}
        <div>
          <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">
            Kategori <span class="text-red-500">*</span>
          </label>
          <select id="kategori" name="kategori" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
            <option value="">Pilih Kategori</option>
            <option value="Permasalahan Jaringan">Permasalahan Jaringan</option>
            <option value="Permintaan Perangkat Jaringan">Permintaan Perangkat Jaringan</option>
            <option value="Layanan Lisensi">Layanan Lisensi</option>
            <option value="Layanan Microsoft">Layanan Microsoft</option>
            <option value="Maintenance Perangkat">Maintenance Perangkat</option>
            <option value="Maintenance Aplikasi">Maintenance Aplikasi</option>
            <option value="Realese Aplikasi">Realese Aplikasi</option>
            <option value="Request Aplikasi">Request Aplikasi</option>
          </select>
        </div>

        {{-- Layanan --}}
        <div>
          <label for="layanan" class="block text-sm font-medium text-gray-700 mb-2">
            Layanan <span class="text-red-500">*</span>
          </label>
          <select id="layanan" name="layanan" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
            <option value="">Pilih Layanan</option>
            <option value="Aplikasi">Aplikasi</option>
            <option value="Jaringan">Jaringan</option>
            <option value="Layanan IT">Layanan IT</option>
          </select>
        </div>

        {{-- Jenis --}}
        <div>
          <label for="layanan" class="block text-sm font-medium text-gray-700 mb-2">
            Jenis <span class="text-red-500">*</span>
          </label>
          <select id="layanan" name="layanan" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
            <option value="">Pilih Layanan</option>
            <option value="perbaikan">Incident</option>
            <option value="instalasi">Maintenance</option>
            <option value="maintenance">Monthly</option>
            <option value="konsultasi">Request</option>
          </select>
        </div>

        {{-- Nama Lengkap --}}
        <div>
          <label for="requester" class="block text-sm font-medium text-gray-700 mb-2">
            Nama Lengkap <span class="text-red-500">*</span>
          </label>
          <input type="text" id="requester" name="requester" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
            placeholder="Nama pemohon">
        </div>


        {{-- Nomor WA --}}
        <div>
          <label for="requester" class="block text-sm font-medium text-gray-700 mb-2">
            Nomor WA <span class="text-red-500">*</span>
          </label>
          <input type="text" id="requester" name="requester" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
            placeholder="Nomor WA pemohon">
        </div>

        {{-- Unit/Prodi --}}
        <div>
          <label for="unit_prodi" class="block text-sm font-medium text-gray-700 mb-2">
            Unit/Prodi <span class="text-red-500">*</span>
          </label>
          <input type="text" id="unit_prodi" name="unit_prodi" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
            placeholder="Nama unit atau program studi">
        </div>

        {{-- NDE --}}
        <div>
          <label for="nde" class="block text-sm font-medium text-gray-700 mb-2">
            NDE <span class="text-red-500">*</span>
          </label>
          <input type="text" id="nde" name="nde" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
            placeholder="">
        </div>

        {{-- Deadline --}}
        <div>
          <label for="deadline" class="block text-sm font-medium text-gray-700 mb-2">
            Deadline
          </label>
          <input type="datetime-local" id="deadline" name="deadline" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition">
        </div>

        {{-- Catatan --}}
        <div>
          <label for="catatan" class="block text-sm font-medium text-gray-700 mb-2">
            Catatan
          </label>
          <textarea id="catatan" name="catatan" rows="4"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition resize-none"
            placeholder="Tambahkan catatan atau keterangan tambahan (opsional)"></textarea>
        </div>

        {{-- Submit Button --}}
        <div class="flex gap-4 pt-4">
          <button type="submit"
            class="flex-1 bg-red-800 text-white px-6 py-3 rounded-lg font-medium hover:bg-red-900 hover:cursor-pointer transition duration-200 flex items-center justify-center gap-2">
            <iconify-icon icon="mdi:send" width="20"></iconify-icon>
            Kirim Laporan
          </button>
          <button type="reset"
            class="px-6 py-3 border border-gray-300 text-gray-700 hover:text-white rounded-lg font-medium hover:bg-red-900 hover:cursor-pointer transition duration-200">
            Reset
          </button>
        </div>
      </form>
    </div>

  </main>


  {{-- Floating Button WA --}}
  <div class="fixed bottom-5 right-5 ">
    <a href="" class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center">
      <iconify-icon icon="ic:sharp-whatsapp" width="40" height="40"></iconify-icon>
    </a>
  </div>


  @stack('js')
</body>

</html>
