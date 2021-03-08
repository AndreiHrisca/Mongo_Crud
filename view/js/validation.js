function validar() {
    let nombre = document.getElementsByName("nombre").value;
    let ceo = document.getElementsByName("CEO").value;
    let precio = document.getElementsByName("precio").value;

    if(nombre == ""){
        alert("Debes rellenar el campo nombre!!");
    }
}