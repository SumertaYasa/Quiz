function openSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.style.left = '0'; // Menampilkan sidebar
}

function closeSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.style.left = '-350px'; // Menyembunyikan sidebar
}

// Menambahkan event listener setelah DOM siap
document.addEventListener('DOMContentLoaded', function() {
  const menuBtn = document.getElementById('btn-menu');
  const closeBtn = document.getElementById('btn-closeSide');
  
  if (menuBtn) {
      menuBtn.addEventListener('click', openSidebar); // Buka sidebar
  }

  if (closeBtn) {
      closeBtn.addEventListener('click', closeSidebar); // Tutup sidebar
  }
});
