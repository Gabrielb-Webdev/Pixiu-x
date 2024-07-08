// let currentStep = 0;
// const stepsVisible = 1; // Number of steps visible at a time
// const totalSteps = document.querySelectorAll(".step").length;

// document.addEventListener("DOMContentLoaded", () => {
//     updateView();
//     updateButtons();
// });

// function updateView() {
//     const stepsElement = document.querySelector(".steps");
//     const stepWidth = stepsElement.querySelector(".step").offsetWidth;
//     stepsElement.style.transform = `translateX(-${currentStep * stepWidth}px)`;
// }

// function updateButtons() {
//     document.getElementById("prev").disabled = currentStep === 0;
//     document.getElementById("next").disabled =
//         currentStep >= totalSteps - stepsVisible;
// }

// function prevStep() {
//     if (currentStep > 0) {
//         currentStep--;
//         updateView();
//         updateButtons();
//     }
// }

// function nextStep() {
//     if (currentStep < totalSteps - stepsVisible) {
//         currentStep++;
//         updateView();
//         updateButtons();
//     }
// }

// document.querySelectorAll('.faq-question').forEach(item => {
//     item.addEventListener('click', event => {
//         const faq = item.parentElement;
//         faq.classList.toggle('open');
//     });
// });

// const inputs = document.querySelectorAll(".form .input, .form .input01");

// inputs.forEach(function(input) {
//     input.addEventListener("input", function() {
//         const label = input.parentElement.querySelector("span");
//         if (label) {
//             if (input.value.trim() !== "") {
//                 label.style.display = "none";
//             } else {
//                 label.style.display = "block";
//             }
//         }
//     });
// });

// const serviceSelect = document.getElementById("service-select");
// if (serviceSelect) {
//     serviceSelect.addEventListener("change", function() {
//         const serviceValue = this.value;
//         const dropdown = document.querySelector(".custom-software-dropdown");
//         if (dropdown) {
//             dropdown.style.display =
//                 serviceValue === "Custom Software Development" ? "block" : "none";
//         }
//     });
// }

// document.getElementById("contact-form").addEventListener("submit", function(event) {
//     event.preventDefault(); // Prevenir el envío por defecto del formulario

//     // Obtener los datos del formulario
//     const formData = new FormData(this);

//     // Enviar los datos a través de fetch
//     fetch(this.action, {
//             method: this.method,
//             body: formData,
//         })
//         .then((response) => {
//             if (response.ok) {
//                 // Mostrar el modal
//                 const modal = document.getElementById("success-modal");
//                 modal.style.display = "block";

//                 // Manejar el clic en el botón de cerrar
//                 document.querySelector(".close-button").onclick = function() {
//                     modal.style.display = "none";
//                     location.reload();
//                 };

//                 // Manejar el clic en el botón de aceptar
//                 document.getElementById("accept-button").onclick = function() {
//                     modal.style.display = "none";
//                     location.reload();
//                 };

//                 // Cerrar el modal al hacer clic fuera de él
//                 window.onclick = function(event) {
//                     if (event.target == modal) {
//                         modal.style.display = "none";
//                         location.reload();
//                     }
//                 };
//             } else {
//                 // Manejar errores si es necesario
//                 console.error("Error al enviar el formulario");
//             }
//         })
//         .catch((error) => {
//             console.error("Error:", error);
//         });
// });