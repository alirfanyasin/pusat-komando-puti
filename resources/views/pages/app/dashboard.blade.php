@extends('layouts.app')
@section('page_title', 'Dashboard')
@section('content')
  <div>
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang!</h2>
      <p class="text-gray-600">Ini adalah halaman dashboard utama Anda.</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Tiket</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-red-800 text-white rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-outline" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Tiket Baru</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-red-800 text-white rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-outline" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Lama</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-red-800 text-white rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-outline" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total User</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-red-800 text-white rounded-lg flex items-center justify-center">
            <iconify-icon icon="mage:users" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white p-6 rounded-2xl shadow">
    <h3 class="mb-5 font-bold text-2xl">Tiket Baru Masuk</h3>
    <table id="DataTable" class="stripe hover row-border">
      <thead class="bg-black text-white">
        <tr>
          <th width="20px">No</th>
          <th>Pekerjaan</th>
          <th>Kategori</th>
          <th>Layanan</th>
          <th>Requester</th>
          <th>Unit / Prodi</th>
          <th>Deadline</th>
          <th>Status</th>
          <th>Waktu</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-sm">
          <td>1</td>
          <td>Permintaan login akun adobe di laptop cahya sekpim</td>
          <td>Layanan Lisensi</td>
          <td>Aplikasi</td>
          <td>John Doe</td>
          <td>Sekpim</td>
          <td>12 Jan 2026</td>
          <td>
            <small class="bg-yellow-500 px-2 py-1 rounded-xl font-bold">Pending</small>
          </td>
          <td>
            <small class="bg-gray-300 px-2 py-1 rounded-xl font-bold">3 menit yg lalu</small>
          </td>
          <td>
            <a href="" class="inline-block">
              <div
                class="w-10 h-10 rounded-full flex items-center justify-center bg-gray-200 hover:bg-red-800 hover:text-white">
                <iconify-icon icon="clarity:eye-show-line" width="24" height="24"></iconify-icon>
              </div>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
