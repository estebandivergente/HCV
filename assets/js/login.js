function login() {

    let usuario = 'prueba@gmail.com';
    let pass = 'admin321';

    if(usuario == $('#txt_usuario').val() && pass == $('#txt_password').val()) {

        window.location.href = 'dashboard.html';

    } else {

        Swal.fire({
            title: '¡Error!',
            text: 'Usuario o contraseña incorrectos, por favor vuelva a intentar.',
            icon: 'error'
        }).then(() => {

            $('#txt_usuario').val('').focus();
            $('#txt_password').val('');

        });
    }

};