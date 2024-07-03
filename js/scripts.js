document.addEventListener("DOMContentLoaded", function () {
  // Todo tu código JavaScript aquí dentro
  let currentStep = 0;
  const stepsVisible = 1; // Número de pasos visibles a la vez
  const totalSteps = document.querySelectorAll(".step").length;

  updateView();
  updateButtons();

  function updateView() {
    const stepsElement = document.querySelector(".steps");
    if (stepsElement) {
      const stepWidth = stepsElement.querySelector(".step").offsetWidth;
      stepsElement.style.transform = `translateX(-${currentStep * stepWidth}px)`;
    }
  }

  function updateButtons() {
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");

    if (prevButton) {
      prevButton.disabled = currentStep === 0;
    }

    if (nextButton) {
      nextButton.disabled = currentStep >= totalSteps - stepsVisible;
    }
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
});
