<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<title>Iniciar secion</title>
<br>

<body>

    <body>
        <article class="container-fluid  fondo p-2">

            <br>
            <header>
                <h3 class="container d-flex justify-content-center">Iniciar sesion</h3>
            </header>

            <article class="caja d-flex container-fluid flex-column ">
                <br>
                <div class="col-10 ">

                    <label for="correo" class="form-label fw-semibold">Correo Electronico</label>
                    <input type="email" class="form-control"> </input>
                </div>

                <div class="col-10 ">
                    <label for="contraseña" class="form-label fw-semibold">Contraseña</label>
                    <input type="password" class="form-control"> </input>
                </div>


            </article>


            <section class="botones container-fluid col-5 d-flex justify-content-evenly">

                <button type="submit" class="btn btn-primary"><a class=" bot text-decoration-none"
                        href="{{url('http://127.0.0.1:8000')}}"> Cancelar </a></button>
                &nbsp;

                <button type="submit" class="btn btn-primary"><a class=" bot text-decoration-none" href="{{route('Perfiladmin')}}">
                        Iniciar sesión </a></button>

            </section>



            <br>




        </article>

</html>
