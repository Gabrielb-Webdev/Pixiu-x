let currentStep = 0;
const stepsVisible = 1; // Number of steps visible at a time
const totalSteps = document.querySelectorAll(".step").length;

document.addEventListener("DOMContentLoaded", () => {
    updateView();
    updateButtons();
});

function updateView() {
    const stepsElement = document.querySelector(".steps");
    const stepWidth = stepsElement.querySelector(".step").offsetWidth;
    stepsElement.style.transform = `translateX(-${currentStep * stepWidth}px)`;
}

function updateButtons() {
    document.getElementById("prev").disabled = currentStep === 0;
    document.getElementById("next").disabled =
        currentStep >= totalSteps - stepsVisible;
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

document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', event => {
        const faq = item.parentElement;
        faq.classList.toggle('open');
    });
});