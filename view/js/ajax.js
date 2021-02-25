function ajax() {
    try {
        req = new XMLHttpRequest();
    } catch(err1) {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (err2) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err3) {
                req = false;
            }
        }
    }
    return req;
}

var borrar = new ajax();
function borrarSeleccion(id) {
   if(confirm("¿Seguro que deseas eliminar lo seleccionado de la BD?")) {
       var myurl = 'js/borrar.php';
       myRand = parseInt(Math.random() * 999999999999999);
       modurl = myurl + '?rand=' + myRand + '&id=' + id;
       borrar.open("GET", modurl, true);
       borrar.onreadystatechange = borrarSeleccionResponse;
       borrar.send(null);
   }
}

function borrarSeleccionResponse() {

    if (borrar.readyState == 4) {
        if(borrar.status == 200) {

           var listaDatos = borrar.responseText;
           //document.getElementsByClassName('lista')[0].innerHTML = listaDatos;
           //document.getElementById('lista').innerHTML =  listaDatos;
            //window.document.write(listaDatos);
            window.location.reload('listaEmpresas.php');

        }
    }
}

