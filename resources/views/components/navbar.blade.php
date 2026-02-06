 <!-- Header -->
 <header class="bg-white shadow-sm sticky top-0 z-20">
   <div class="flex items-center justify-between px-4 py-4">
     <!-- Mobile Menu Button -->
     <button onclick="toggleSidebar()" class="lg:hidden text-gray-600 hover:text-gray-900">
       <iconify-icon icon="ic:round-menu" width="24" height="24"></iconify-icon>
     </button>

     <!-- Page Title -->
     <h1 class="text-xl font-semibold text-gray-800 ml-4 lg:ml-0">
       @yield('page_title', 'Page Untitled')
     </h1>

     <!-- Profile Dropdown -->
     <div class="relative">
       <button onclick="toggleProfileDropdown()" class="flex items-center space-x-3 focus:outline-none">
         <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-black font-semibold">
           <iconify-icon icon="solar:user-linear" width="24" height="24"></iconify-icon>
         </div>
         <div class="hidden md:block text-left">
           <p class="text-sm font-medium text-gray-700">John Doe</p>
           <p class="text-xs text-gray-500">Administrator</p>
         </div>
         <span class="iconify text-gray-400 text-sm hidden md:block" data-icon="mdi:chevron-down"></span>
       </button>

       <!-- Dropdown Menu Profile -->
       <div id="profileDropdown"
         class="hidden absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg py-2 border border-gray-100">
         {{-- <a href="#" onclick="editProfile()"
           class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-50 transition-colors">
           <iconify-icon icon="mingcute:user-edit-line" width="24" height="24"></iconify-icon>
           <span class="ml-3">Edit Profile</span>
         </a>
         <a href="#" onclick="changePassword()"
           class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-50 transition-colors">
           <iconify-icon icon="carbon:password" width="24" height="24"></iconify-icon>
           <span class="ml-3">Change Password</span>
         </a> --}}
         <a href="#" onclick="logout()"
           class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
           <iconify-icon icon="ic:round-logout" width="24" height="24"></iconify-icon>
           <span class="ml-3">Logout</span>
         </a>
       </div>
     </div>
   </div>
 </header>
