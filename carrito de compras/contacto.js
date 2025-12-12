 // Validación de formulario con JavaScript
 document.getElementById('survey-form').addEventListener('submit', function(event) {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');

    var nameError = document.getElementById('name-error');
    var emailError = document.getElementById('email-error');

    // Validación del nombre (requerido)
    if (nameInput.value.trim() === '') {
        nameError.textContent = 'Por favor, ingrese su nombre';
        event.preventDefault();
    } else {
        nameError.textContent = '';
    }

    // Validación del correo electrónico (requerido y formato válido)
    if (emailInput.value.trim() === '') {
        emailError.textContent = 'Por favor, ingrese su correo electrónico';
        event.preventDefault();
    } else if (!isValidEmail(emailInput.value.trim())) {
        emailError.textContent = 'Por favor, ingrese un correo electrónico válido';
        event.preventDefault();
    } else {
        emailError.textContent = '';
    }
});

// Función para validar formato de correo electrónico
function isValidEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}