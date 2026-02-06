<script>
  // Toggle Sidebar untuk mobile
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
  }

  // Toggle Dropdown Menu di Sidebar
  function toggleDropdown(id) {
    const submenu = document.getElementById('dropdownSubmenu' + id);
    const icon = document.getElementById('dropdownIcon' + id);

    submenu.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  }

  // Toggle Profile Dropdown
  function toggleProfileDropdown() {
    const dropdown = document.getElementById('profileDropdown');
    dropdown.classList.toggle('hidden');
  }

  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    const profileDropdown = document.getElementById('profileDropdown');
    const profileButton = event.target.closest('button');

    if (!profileButton && !profileDropdown.contains(event.target)) {
      profileDropdown.classList.add('hidden');
    }
  });
</script>


<script>
  let table = new DataTable('#DataTable', {
    // options
  });
</script>
