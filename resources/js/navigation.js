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

document.addEventListener("DOMContentLoaded", function () {
  const dropdownButton = document.getElementById("dropdownButton");
  const dropdownMenu = document.getElementById("dropdownMenu");
  const icon = dropdownButton.querySelector('i');

  dropdownButton.addEventListener("click", function () {
      dropdownMenu.classList.toggle("hidden");
      if (dropdownMenu.classList.contains("hidden")) {
        icon.classList.remove('bx-chevron-up');
        icon.classList.add('bx-chevron-down');
    } else {
        icon.classList.remove('bx-chevron-down');
        icon.classList.add('bx-chevron-up');
    }
  });

  // Tutup dropdown jika klik di luar
  window.addEventListener("click", function (event) {
      if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.add("hidden");
      }
  });
});

