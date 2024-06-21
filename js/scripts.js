let currentStep = 0;
const stepsVisible = 1; // Number of steps visible at a time
const totalSteps = document.querySelectorAll('.step').length;

document.addEventListener("DOMContentLoaded", () => {
    updateView();
    updateButtons();
});

function updateView() {
    const stepsElement = document.querySelector('.steps');
    const stepWidth = stepsElement.querySelector('.step').offsetWidth;
    stepsElement.style.transform = `translateX(-${currentStep * stepWidth}px)`;
}

function updateButtons() {
    document.getElementById("prev").disabled = currentStep === 0;
    document.getElementById("next").disabled = currentStep >= totalSteps - stepsVisible;
}

function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        updateView();
        updateButtons();
    }
}

function nextStep() {
    if (currentStep < totalSteps - stepsVisible) {
        currentStep++;
        updateView();
        updateButtons();
    }
}

const inputs = document.querySelectorAll('.form .input, .form .input01');

inputs.forEach(input => {
    input.addEventListener('input', () => {
        const label = input.parentElement.querySelector('span');
        if (input.value.trim() !== '') {
            label.style.display = 'none';
        } else {
            label.style.display = 'block';
        }
    });
});

// Captura el evento de cambio en el primer dropdown
document.getElementById('service-select').addEventListener('change', function() {
    var serviceValue = this.value;
    
    // Muestra u oculta el segundo dropdown dependiendo de la opción seleccionada
    if (serviceValue === 'option1') {
      document.querySelector('.custom-software-dropdown').style.display = 'block';
    } else {
      document.querySelector('.custom-software-dropdown').style.display = 'none';
    }
  });
  