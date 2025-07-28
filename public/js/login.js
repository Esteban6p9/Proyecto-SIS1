// Esperamos a que todo el contenido de la página se haya cargado
document.addEventListener('DOMContentLoaded', () => {

    // Seleccionamos todos los elementos que queremos animar
    const elementsToAnimate = [
        document.querySelector('.logo-container'),
        document.querySelector('.app-name'),
        ...document.querySelectorAll('.input-group'), // los dos inputs
        document.querySelector('.login-button'),
        document.querySelector('.forgot-password')
    ];

    // Recorremos cada elemento para aplicarle la animación con un retraso
    elementsToAnimate.forEach((element, index) => {
        if (element) {
            // Calculamos un pequeño retraso para cada elemento
            // Esto crea el efecto de cascada
            setTimeout(() => {
                element.classList.add('visible');
            }, (index + 1) * 150); // 150ms de diferencia entre cada uno
        }
    });
});