//controller.js
function calcularFactorial(numero) {
    if (numero < 0) {
        return "El factorial no está definido para números negativos.";
    } else if (numero === 0 || numero === 1) {
        return 1;
    } else {
        let resultado = 1;
        for (let i = 2; i <= numero; i++) {
            resultado *= i;
        }
        return resultado;
    }
}

function manejarFormulario() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Evita que el formulario se envíe por defecto

        const inputNumero = document.getElementsByName('num')[0];
        const numero = parseInt(inputNumero.value);

        const resultadoFactorial = calcularFactorial(numero);
        //console.log(`El factorial de ${numero} es: ${resultadoFactorial}`);

        // Enviamos el resultado al servidor utilizando el modelo
        enviarResultadoAlServidor(resultadoFactorial);
    });
}

// Llamada a la función para manejar el formulario
manejarFormulario();