console.log("Co-founders : Sneha and sumit");

// toggle button for mobile nav bar
document.querySelector('.toggle-button').addEventListener('click', function() {
    document.querySelector('.side-menu').classList.toggle('open');
});

document.addEventListener('click', function(event) {
    const sideMenu = document.querySelector('.side-menu');
    const toggleButton = document.querySelector('.toggle-button');

    if (!sideMenu.contains(event.target) && !toggleButton.contains(event.target) && window.innerWidth < 768) {
        sideMenu.classList.remove('open');
    }
});

window.addEventListener('resize', function() {
    const sideMenu = document.querySelector('.side-menu');
    if (window.innerWidth >= 768) {
        sideMenu.classList.remove('open');
    }
});
//surprise
document.addEventListener('DOMContentLoaded', function() {
    var params = new URLSearchParams(window.location.search);
    var showText = params.get('showText');
    var hiddenText = document.getElementById('surprisetext');
    var notHiddenText = document.getElementById('text');

    if (showText === 'true') {
        hiddenText.style.display = 'block';
        notHiddenText.style.display = 'none';
    }
  
});
// comparison table horizontal scroll animation
const comparisonTable = document.querySelector("#comparison table");

comparisonTable.addEventListener("scroll", function() {
  const scrollPercentage = (comparisonTable.scrollLeft / (comparisonTable.scrollWidth - comparisonTable.clientWidth)) * 100;

  if (scrollPercentage === 100) {
    comparisonTable.classList.remove("scroll-animation");
  } else {
    comparisonTable.classList.add("scroll-animation");
  }
});




