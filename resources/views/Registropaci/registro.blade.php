<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
    <title>Registrarse</title>
</head>


<body>
    <article class="fondos">
        <section class="container-fluid">
            <br>
            <h1 class="fs-3 fw-semibold">Crear cuenta</h1>
            <h2 class="fs-4 fw-normal"> ¿Ya tienes creada una cuenta? <a href="{{route('Login2')}}" class="text-decoration-none">Iniciar Sesion</a> </h2>
        </section>
        <br>
        <article class=" container-fluid p-3 ">
            <div class=" row justify-content-evenly ">

                <div class="col-4">
                    <label for="nombres" class="form-label fw-semibold">Correo Electronico</label>
                    <input type="text" class="form-control"> </input>
                </div>

                <div class="col-4">
                    <label for="apellidos" class="form-label fw-semibold">Contraseña</label>
                    <input type="text" class="form-control"> </input>
                </div>
            </div>
            <br>
            <div class=" row justify-content-evenly ">
                <div class="col-4">
                    <label for="nombres" class="form-label fw-semibold">Confirma tu contraseña</label>
                    <input type="text" class="form-control"> </input>
                </div>

                <div class="col-4">
                    <label for="apellidos" class="form-label fw-semibold">Cedula</label>
                    <input type="int" class="form-control"> </input>
                </div>
            </div>
            <br>
            <div class=" row justify-content-evenly ">
                <div class="col-4">
                    <label for="nombres" class="form-label fw-semibold">Telefono</label>
                    <input type="tel" class="form-control"> </input>
                </div>
                <div class="col-4">
                    <label for="nombres" class="form-label fw-semibold">Dirección</label>
                    <input type="text" class="form-control"> </input>
                </div>

            </div>

        </article>

        <section class=" botones container-fluid col-5 d-flex justify-content-evenly">

            <button type="submit" class="btn btn-primary"> <a class=" bot text-decoration-none"
                    href="{{url('http://127.0.0.1:8000')}}">Cancelar</a></button>
            <button type="submit" class="btn btn-primary"><a class=" bot text-decoration-none"
                    href="{{route('Perfilpaci')}}">Continuar</a></button>

        </section>

    </article>

    <br>

    <footer>
        <x-footer />
    </footer>


</body>

</html>
