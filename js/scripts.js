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

const inputs = document.querySelectorAll(".form .input, .form .input01");

inputs.forEach(function (input) {
  input.addEventListener("input", function () {
    const label = input.parentElement.querySelector("span");
    if (label) {
      if (input.value.trim() !== "") {
        label.style.display = "none";
      } else {
        label.style.display = "block";
      }
    }
  });
});

const serviceSelect = document.getElementById("service-select");
if (serviceSelect) {
  serviceSelect.addEventListener("change", function () {
    const serviceValue = this.value;
    const dropdown = document.querySelector(".custom-software-dropdown");
    if (dropdown) {
      dropdown.style.display = serviceValue === "option1" ? "block" : "none";
    }
  });
}

// jQuery document ready
$(document).ready(function () {
  $("#date").datepicker({
    autoclose: true,
    todayHighlight: true,
    format: "yyyy-mm-dd",
  });
});