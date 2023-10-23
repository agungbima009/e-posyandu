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

// aksi tombol menu admin
function toggleContent(menuId) {
  var contentDivs = document.querySelectorAll('.content');
  for (var i = 0; i < contentDivs.length; i++) {
      contentDivs[i].style.display = 'none';
  }
  var selectedContent = document.getElementById(menuId);
  selectedContent.style.display = 'block';
}

document.getElementById('openPopup').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'block';
});

document.getElementById('closePopup').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});
