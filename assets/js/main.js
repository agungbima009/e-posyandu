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

// form anak
document.getElementById('openPopup').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'block';
});

document.getElementById('closePopup').addEventListener('click', function() {
  document.getElementById('popup').style.display = 'none';
});

// form ibu
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('openPopupibu').addEventListener('click', function() {
    document.getElementById('popupibu').style.display = 'block';
  });

  document.getElementById('closePopupibu').addEventListener('click', function() {
    document.getElementById('popupibu').style.display = 'none';
  });
});


// box cari 
document.addEventListener('DOMContentLoaded', function() {
const wrapper = document.querySelector(".wrapper-box-cari"),
selectBtn = wrapper.querySelector(".select-btn-cari"),
searchInp = wrapper.querySelector("input"),
options = wrapper.querySelector(".options-cari");

let countries = ["Afghanistan", "Algeria", "Argentina", "Australia", "Bangladesh", "Belgium", "Bhutan",
                 "Brazil", "Canada", "China", "Denmark", "Ethiopia", "Finland", "France", "Germany",
                 "Hungary", "Iceland", "India", "Indonesia", "Iran", "Italy", "Japan", "Malaysia",
                 "Maldives", "Mexico", "Morocco", "Nepal", "Netherlands", "Nigeria", "Norway", "Pakistan",
                 "Peru", "Russia", "Romania", "South Africa", "Spain", "Sri Lanka", "Sweden", "Switzerland",
                 "Thailand", "Turkey", "Uganda", "Ukraine", "United States", "United Kingdom", "Vietnam"];

function addCountry(selectedCountry) {
    options.innerHTML = "";
    countries.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
addCountry();

function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = countries.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active")); 
});