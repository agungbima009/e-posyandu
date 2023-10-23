// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let toggle2 = document.querySelector(".toggle2");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let submenu = document.querySelector(".submenu");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
  submenu.classList.toggle("active");
};
toggle2.onclick = function () {
  navigation.classList.toggle2("active");
  main.classList.toggle2("active");
  submenu.classList.toggle2("active");
};

// aksi tombol pengaturan 
function toggleSettings() {
  var dashboard = document.getElementById('dashboard');
  var settings = document.getElementById('settings');
  
  if (dashboard.style.display !== 'none') {
      dashboard.style.display = 'none';
      settings.style.display = 'block';
  } else {
      dashboard.style.display = 'block';
      settings.style.display = 'none';
  }
}
