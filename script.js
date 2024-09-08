 const container = document.querySelector('.third');
const scrollDistance = 100; // Adjust the scroll distance as needed
 let currentPosition = 0;

function scrollDivs() {
  currentPosition += scrollDistance;
  if (currentPosition > container.scrollWidth - container.clientWidth) {
    currentPosition = 0;
  }
  
   container.scrollTo({
    left: currentPosition,
    behavior: 'smooth'   });
 }
 setInterval(scrollDivs, 1000); // Adjust the interval time (in milliseconds) as needed

