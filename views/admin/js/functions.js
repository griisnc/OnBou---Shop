function createUser(nombre, direccion, correo, contraseña, id_Rol){
    cadena = "correo=" + correo + "&contraseña=" + contraseña + "&id_Rol=" + id_Rol + "&nombre=" + nombre + "&direccion=" + direccion;
    $.ajax({
        type: "POST",
        url: "db/createUser.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Agregado con exito");
                location.reload();
            } else {
                alertify.success("Hubo un error");
                location.reload();
            }
        }
    });
}

function validacion(id) {
    alertify.confirm('Eliminar dato', 'Estas seguro de eliminar?', function () { deleteUser(id); }
        , function () { alertify.error('Cancel') });
}

function deleteUser(id) {
    cadena = "id=" + id;
    $.ajax({
        type: "POST",
        url: "db/deleteUser.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Eliminado con exito");
                location.reload();
            } else {
                alertify.success("Hubo un error");
                location.reload();
            }
        }
    });
}

function createAdmin(nameA, passA){
    cadena = "correo=" + nameA + "&contraseña=" + passA;
    alert(cadena);
    $.ajax({
        type: "POST",
        url: "db/createAdmin.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Creado con exito");
                location.reload();
            } else {
                alertify.success("Hubo un error");
                location.reload();
            }
        }
    });
}

function deleteAdmin(id){

}

function updateAdmin(uptNameA, uptPassA){
    cadena = "correo=" + uptNameA + "&contraseña=" + uptPassA;
    $.ajax({
        type: "POST",
        url: "db/updateAdmin.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                alertify.success("Creado con exito");
                location.reload();
            } else {
                alertify.success("Hubo un error");
                location.reload();
            }
        }
    }); 
}