
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
        <section class="container-fluid ">
            <br>
            <h1 class="fs-3 fw-semibold">Crea una cuenta y trabaja con nosotros</h1>
            <h2 class="fs-4 fw-normal">¿Ya tienes una cuenta? <a href="{{route('Login1')}}" class="text-decoration-none">Iniciar Sesion</a> </h2>
        </section>
        <br>
        <br>
        <article class=" container-fluid  ">
            <div class=" row justify-content-evenly ">

                <div class="col-4">
                    <label for="nombres" class="form-label fw-semibold">Nombres y Apellidos</label>
                    <input type="text" class="form-control"> </input>
                </div>

                <div class="col-4">
                    <label for="sexo" class="form-label fw-semibold">Sexo</label>
                    <select class="form-select" id="country" required="">
                        <option value="">-Seleccionar</option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="row justify-content-evenly ">


                <div class="col-4">
                    <label for="cedula" class="form-label fw-semibold">Cedula de ciudadania</label>
                    <input type="number" class="form-control"> </input>
                </div>
                <div class="col-4">
                    <label for="fecha" class="form-label fw-semibold">Fecha de expedicion</label>
                    <input type="date" class="form-control"> </input>
                </div>
            </div>

            <br>
            <div class=" row justify-content-evenly ">

                <div class="col-4 ">
                    <label for="telefono" class="form-label fw-semibold">Numero de telefono</label>
                    <input type="tel" class="form-control"> </input>
                </div>
                <div class="col-4">
                    <label class="form-label fw-semibold">Añade una fotocopia de tu cedula</label>
                    <input type="file" class="form-control"> </input>
                </div>

            </div>
            <div class=" row justify-content-evenly ">

                <div class="col-4">
                    <label class="form-label fw-semibold">Añade una fotocopia de acta o
                        certificacion</label>
                    <input type="file" class="form-control"> </input>
                </div>
                <div class="col-4 ">
                    <label class="form-label fw-semibold">Añade una fotocopia de tu diploma</label>
                    <input type="file" class="form-control"> </input>
                </div>

            </div>

        </article>

        <section class=" botones container-fluid col-5 d-flex justify-content-evenly">

            <button type="submit" class="btn btn-primary"> <a class=" bot text-decoration-none"
                    href="{{url('http://127.0.0.1:8000')}}">Cancelar</a></button>
            <button type="submit" class="btn btn-primary"><a class=" bot text-decoration-none"
                    href="{{route('Perfildoc')}}">Continuar</a></button>

        </section>

    </article>
    <br>
    <br><br>
    <br>
    <footer>
        <x-footer />
    </footer>


</body>

</html>