
function formValid() {
    

    let nombre = document.forms["Empresas"]["Nombre"].value;
    let ceo = document.forms["Empresas"]["CEO"].value;
    let precio = document.forms["Empresas"]["Precio"].value;
    let comentario = document.forms["Empresas"]["Comentario"].value;

    if (nombre, ceo, precio, comentario == ""){
        alert("Debes rellenar los campos.")
    }

}