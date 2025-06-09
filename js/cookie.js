
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Función para obtener el valor de una cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

// Función para controlar las cookies
function controlCookies(acceptCookies, controlCookiesObj) {
    var cookies_enabled = acceptCookies;

    // Establecer las cookies según el objeto de control
    for (var key in controlCookiesObj) {
        if (typeof controlCookiesObj[key] === 'object') {
            // Si el valor es un objeto, iterar sobre sus propiedades
            for (var subKey in controlCookiesObj[key]) {
                setCookie(subKey, controlCookiesObj[key][subKey], controlCookiesObj['tds_d00di00']);
            }
        } else {
            // Si el valor no es un objeto, establecer la cookie directamente
            setCookie(key, controlCookiesObj[key], controlCookiesObj['tds_d00di00']);
        }
    }
}

// Función para verificar si existe la cookie de preferencias de cookies
function hayCookieConEnabled() {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.indexOf("cookies_enabled=true") !== -1) {
            return true; // Se encontró una cookie con 'cookies_enabled' establecido en true
        } else {
            if (cookie.indexOf("tds_d00di00=2") !== -1) {
                // 'tds_d00di00' establecido en 2
                return true;
            }
        }
    }
    return false; // No se encontró ninguna cookie con 'cookies_enabled' establecido en true
}



document.addEventListener("DOMContentLoaded", function() {
    document.addEventListener("DOMContentLoaded", function() {
        // Verificar si la cookie está presente
        if (document.cookie.indexOf("cookies_enabled=true") === -1) {
            // Si la cookie no está presente, mostrar el banner de cookies
            document.getElementById("cookieBanner").style.display = "block";
        }
    });

    // Verificar si la cookie "cookiePreferences" existe
    if (hayCookieConEnabled()) {
        // console.log("Se encontró una cookie con 'cookies_enabled' establecido en true.");
        document.getElementById("cookieBanner").style.display = "none";
    } else {
        // console.log("No se encontró ninguna cookie con 'cookies_enabled' establecido en true.");
        document.getElementById("cookieBanner").style.display = "";
    }

});

document.addEventListener("DOMContentLoaded", function() {
    // Asignar evento de clic al botón de configuración de cookies

    document.getElementById("abrir-modal-cookies").addEventListener("click", function() {
        var cookieModal = document.getElementById('cookieModal');
        var bootstrapModal = new bootstrap.Modal(cookieModal);
        bootstrapModal.show();
    });

    document.getElementById("configureCookies").addEventListener("click", function() {
        var cookieModal = document.getElementById('cookieModal');
        var bootstrapModal = new bootstrap.Modal(cookieModal);
        bootstrapModal.show();
        // document.getElementById('cookieBanner').style.display = 'none';

    });

    // Asignar evento de clic al botón de configuración de cookies
    document.getElementById("configureCookies").addEventListener("click", function() {
        var cookieModal = document.getElementById('cookieModal');
        var bootstrapModal = new bootstrap.Modal(cookieModal);
        bootstrapModal.show();
        // document.getElementById('cookieBanner').style.display = 'none';

    });


    // Función para manejar el clic en el botón de aceptar cookies
    document.getElementById("acceptCookies").addEventListener("click", function() {
        var cookieSettings = {
            "controlCookies": {"functional":true,"analytics":true,"publicity":true},
            "tds_d00di00":1,
            "cookies_enabled":true
        };

        controlCookies(true, cookieSettings);
        // console.log("Todas las Cookies aceptadas.");
        document.getElementById("cookieBanner").style.visibility = 'hidden';
        window.location.reload();
    });

    // Función para manejar el clic en el botón de cancelar cookies
    document.getElementById("cancelCookies").addEventListener("click", function() {
        var cookieSettings = {
            "controlCookies": {"functional":false,"analytics":false,"publicity":false},
            "tds_d00di00":2,
            "cookies_enabled":false
        };
        controlCookies(false, cookieSettings);
        // console.log("Cookies canceladas.");
        document.getElementById("cookieBanner").style.visibility = 'hidden';
        window.location.reload(); // Recargar la página después de cancelar las cookies
    });



    // Manejar el clic en el botón de guardar y cerrar
    // document.getElementById("savePreferences").addEventListener("click", function() {

    //     console.log("Preferencias de cookies guardadas.");
    // });

        // Manejador de evento para el botón de "Acceptar todo"
        document.getElementById("acceptAll").addEventListener("click", function() {
            // Marcar todas las casillas de verificación
            document.getElementById("customizeCookies").checked = true;
            document.getElementById("thirdPartyCookies").checked = true;
            document.getElementById("advertisingPartyCookies").checked = true;
            var cookiePreferences = {
                "controlCookies": {
                    "functional": true,
                    "analytics": true,
                    "publicity": true
                },
                "tds_d00di00":1,
                "cookies_enabled":true
            };
            controlCookies(true, cookiePreferences);
            // Cerrar el modal
            var cookieModal = document.getElementById('cookieModal');
            var bootstrapModal = bootstrap.Modal.getInstance(cookieModal);
            bootstrapModal.hide();
            document.getElementById("cookieBanner").style.visibility = 'hidden';
            window.location.reload();
        });

        // Manejador de evento para el botón de "Acceptar todo"
        document.getElementById("calcelAll").addEventListener("click", function() {
            // Desmarcar todas las casillas de verificación
            document.getElementById("customizeCookies").checked = false;
            document.getElementById("thirdPartyCookies").checked = false;
            document.getElementById("advertisingPartyCookies").checked = false;
            var cookiePreferences = {
                "controlCookies": {
                    "functional": false,
                    "analytics": false,
                    "publicity": false
                },
                "tds_d00di00":2,
                "cookies_enabled":false
            };
            controlCookies(true, cookiePreferences);
            // Cerrar el modal
            var cookieModal = document.getElementById('cookieModal');
            var bootstrapModal = bootstrap.Modal.getInstance(cookieModal);
            bootstrapModal.hide();
            document.getElementById("cookieBanner").style.visibility = 'hidden';
            window.location.reload();
        });



        /// Manejador de eventos para el botón de "Confirmar Selección"
        document.getElementById("savePreferences").addEventListener("click", function() {
            // Crear objeto de preferencias de cookies
            // console.log("Preferencias de cookies guardadas.");
            var cookiePreferences = {
                "controlCookies": {
                    "functional": document.getElementById("customizeCookies").checked,
                    "analytics": document.getElementById("thirdPartyCookies").checked,
                    "publicity": document.getElementById("advertisingPartyCookies").checked
                },
                "tds_d00di00":3,
                "cookies_enabled":true
            };

            // Llamar a la función controlCookies pasando el objeto modificado
            controlCookies(true, cookiePreferences);

            // Cerrar el modal
            var cookieModal = document.getElementById('cookieModal');
            var bootstrapModal =  new bootstrap.Modal(cookieModal);
            bootstrapModal.hide();
            document.getElementById("cookieBanner").style.visibility = 'hidden';
            window.location.reload();
        });
    });
