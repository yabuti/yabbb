var texts = ["web developer", "coder", "mobile application developer","program solver"];
var index = 0;
function changeText() {
  document.getElementById("changeText").innerHTML = "I'm " + texts[index];
  index = (index + 1) % texts.length;
  var h3 = document.getElementById("changeText");
  if (h3.classList.contains("change")) {
    h3.classList.remove("change");
  } else {
    h3.classList.add("change");
  }
}
setInterval(changeText, 2000); // Change text every 2 seconds
// JavaScript for menu icon toggle
document.getElementById("menu-icon").addEventListener("click", function () {
  var nav = document.querySelector("nav ul");
  this.classList.toggle("active");

  if (nav.style.display === "flex") {
    nav.style.display = "none";
  } else {
    nav.style.display = "flex";
  }
});
