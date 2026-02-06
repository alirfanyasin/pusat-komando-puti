@extends('layouts.app')
@section('page_title', 'Tiket Baru')
@section('content')
  <div>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Tiket Masuk</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">32</p>
          </div>
          <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-broken" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Tiket Keluar</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-broken" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Tiket Belum Di Ambil</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-broken" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-gray-500">Total Tiket Selesai</p>
            <p class="text-5xl font-bold text-gray-800 mt-1">20</p>
          </div>
          <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
            <iconify-icon icon="solar:ticket-broken" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white p-6 rounded-2xl shadow">
    <table id="DataTable" class="stripe hover row-border">
      <thead class="bg-black text-white">
        <tr>
          <th width="20px">No</th>
          <th>Pekerjaan</th>
          <th>Kategori</th>
          <th>Layanan</th>
          <th>Jenis</th>
          <th>Tim Dispatch</th>
          <th>Requester</th>
          <th>Unit / Prodi</th>
          <th>Deadline</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Permintaan login akun adobe di laptop cahya sekpim</td>
          <td>Layanan Lisensi</td>
          <td>Aplikasi</td>
          <td>Request</td>
          <td>Irfan</td>
          <td>John Doe</td>
          <td>Sekpim</td>
          <td>12 Jan 2026</td>
          <td>
            <span>Finished</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
