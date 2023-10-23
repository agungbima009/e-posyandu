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

// function myFunction() {
//   document.getElementById("myDropdown").classList.toggle("show");
// }

// window.onclick = function(event) {
//   if (!event.target.matches('.submenu')) {
//     var dropdowns = document.getElementsByClassName("sub-menu");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
