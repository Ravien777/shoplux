filterSelection("speelgoed");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("product-layout-box");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    x[i].classList.add("hidden");
    x[i].classList.add("visuallyhidden");
    if (x[i].className.indexOf(c) > -1) {
      toggleVisibilityProd(x[i]);
    }
  }
}

function toggleVisibilityProd(el) {
  if (el.classList.contains("hidden")) {
    el.classList.remove("hidden");
    setTimeout(function () {
      el.classList.remove("visuallyhidden");
    }, 20);
  } else {
    el.classList.add("visuallyhidden");
    el.addEventListener(
      "transitionend",
      function (e) {
        el.classList.add("hidden");
      },
      {
        capture: false,
        once: true,
        passive: false,
      }
    );
  }
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("filterBtns");
var btns = btnContainer.getElementsByClassName("btn");
const meerLdnBtn = document.getElementById("meer-laden-filter-prod");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = btnContainer.getElementsByClassName("active");
    current[0].classList.remove("active");
    this.classList.add("active");
  });
}
