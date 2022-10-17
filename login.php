<?php include ("db.php")?>
<?php include ("includes/headerlogin.php")?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-googleplus"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
                <span>o use su correo para registrarse</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>iniciar sesión</h1>
                <div class="social-container">
                    <a href="#" class="social">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-googleplus"></ion-icon>
                    </a>
                    <a href="#" class="social">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
                <span>o use su cuenta</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>iniciar sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">iniciar sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola amigo</h1>
                    <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                    <button class="ghost" id="signUp">Registrarse</button>
                </div>
            </div>
        </div>
    </div>
<?php include ("includes/footerlogin.php")?>