
<!-- Mensaje de consentimiento de cookies -->
<div id="cookie-consent" class="cookie-consent" style="display: none;">
    <p>Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</p>
    <button onclick="acceptCookies()">Aceptar</button>
</div>

<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="http://localhost/grecangoss/imagenes/grecangoss_logo.png" alt="Logo de la empresa" class="logofooter">
            <p>© Grecangoss 2023</p>
        </div>
        <div class="footer-info">
            <h3>Contactenos</h3>
            <p>Constructora Grecangoss S.A</p>
            <p>Tunguragua 2900 y General Gomez Guayaquil</p>
            <p>0000000000 - 0000000000</p>
            <p>mail@grecangoss.com</p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/ConstructoraGrecangossSA"><img src="http://localhost/grecangoss/imagenes/facebook.png"  alt="Facebook Grecangoss" class="social-logo">Facebook</a>
            <a href="https://www.instagram.com/techoseternosec/"><img src="http://localhost/grecangoss/imagenes/instagram.png" alt="Instagram Grecangoss" class="social-logo">Instagram</a>
            <!-- <a href="#"><img src="http://localhost/grecangoss/imagenes/twitterlogo.jpg" alt="Twitter Grecangoss" class="social-logo">Twitter</a> -->
        </div>
    </div>
</footer>


<!-- Script para manejar las cookies -->
<script type="text/javascript">
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var cookieAccepted = getCookie("cookies_accepted");
        if (cookieAccepted != "") {
            // El usuario ya aceptó las cookies, no es necesario mostrar el mensaje.
            return;
        } else {
            // Mostrar el mensaje de consentimiento de cookies
            document.getElementById("cookie-consent").style.display = "block";
        }
    }

    function acceptCookies() {
        setCookie("cookies_accepted", "true", 30); // Acepta las cookies y establece la expiración en días
        document.getElementById("cookie-consent").style.display = "none"; // Oculta el mensaje de consentimiento
    }

    // Ejecutar la función para comprobar las cookies cuando se carga la página
    window.onload = checkCookie;
</script>
</body>
</html>
