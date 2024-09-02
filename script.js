// Get the form element
const form = document.getElementById('startup-form');

// Get all steps
const steps = document.querySelectorAll('.step');

// Initialize current step
let currentStep = 0;

// Add event listener to form
form.addEventListener('click', (e) => {
    if (e.target.classList.contains('next-btn')) {
        currentStep++;
        updateForm();
    } else if (e.target.classList.contains('prev-btn')) {
        currentStep--;
        updateForm();
    }
});

// Function to update the form
function updateForm() {
    steps.forEach((step) => {
        step.classList.remove('active');
    });
    steps[currentStep].classList.add('active');
}

// Initialize the first step
steps[currentStep].classList.add('active');

