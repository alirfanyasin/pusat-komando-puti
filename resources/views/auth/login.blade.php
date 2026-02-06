@extends('layouts.auth')
@section('content')
  <div class="bg-white rounded-2xl shadow-xl p-6">
    <div class="mb-5">
      <img src="{{ asset('assets/img/logo-puti-text.png') }}" alt="Logo Puti" class="w-36 mx-auto">
    </div>
    <form action="" class="">
      <div class="mb-3">
        <label for="password" class="mb-10">Password</label>
        <input type="password" name="password" id="password" class="w-full p-3 rounded-md border-gray-300 border-2">
      </div>

    </form>
  </div>
@endsection
