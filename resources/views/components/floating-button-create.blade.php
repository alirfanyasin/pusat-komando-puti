  {{-- Floating Button  --}}
  @if (!request()->routeIs('dashboard'))
    <div class="absolute bottom-5 right-5">
      <a href="{{ request()->routeIs('staff') ? route('staff.create') : '' }}"
        class="bg-red-800 text-white rounded-full flex items-center justify-center p-5 hover:bg-red-900 transition">
        <iconify-icon icon="mingcute:add-fill" width="27" height="27"></iconify-icon>
      </a>
    </div>
  @endif
