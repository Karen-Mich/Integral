//sumar.js
function sumar() {
    var num1 = parseFloat(document.getElementById('numero1').value);
    var num2 = parseFloat(document.getElementById('numero2').value);

    if (!isNaN(num1) && !isNaN(num2)) {
        var resultado = num1 + num2;
        document.getElementById('resultado').innerText = 'Resultado: ' + resultado;
    } else {
        alert('Por favor, ingrese números válidos.');
    }
}
