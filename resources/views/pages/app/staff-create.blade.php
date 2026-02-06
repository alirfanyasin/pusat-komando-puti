@extends('layouts.app')
@section('page_title', 'Student Staf / Pegawai')
@section('content')
  <div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3">
      <div class="p-8 rounded-xl shadow bg-white flex justify-start items-center relative group hover:cursor-pointer">
        <div class="w-20 h-20 rounded-full overflow-hidden bg-gray-300 flex justify-center items-center">
          <iconify-icon icon="solar:user-linear" width="50" height="50"></iconify-icon>
        </div>
        <div class="ml-4">
          <h4 class="text-2xl font-bold">Irfan Yasin</h4>
          <p class="text-gray-600">Student Staff</p>
        </div>
        <div class="absolute top-3 right-3 hidden group-hover:block transition">
          <a href="" class="text-red-700">
            <iconify-icon icon="fluent:delete-12-regular" width="24" height="24"></iconify-icon>
          </a>
          <a href="" class="text-yellow-500">
            <iconify-icon icon="uil:edit" width="24" height="24"></iconify-icon>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
