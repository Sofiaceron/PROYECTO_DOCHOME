<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Mi Perfil - DocHome</title>
</head>


<body>
    <section>
        <x-nav />
    </section>

    <section>
        <div class="container-flex">
            <div class="ro">

                <x-perfil1 />


                <article class="col-md-9  caja2">
                    <br>
                    <div class="row justify-content-evenly d-flex flex-wrap">
                        <div class="col-4">

                            <label for="sexo" class="form-label fw-semibold">Sexo</label>
                            <select class="form-control" id="" required="">
                                <option value="">-Seleccionar</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="telefono" class="form-label fw-semibold">Telefono</label>
                            <input type="number" class="form-control"> </input>
                        </div>

                    </div>
                    <br>

                    <div class="row justify-content-evenly d-flex flex-wrap">
                        <div class="col-4">
                            <label for="correo electronico" class="form-label fw-semibold">Correo
                                electronico</label>
                            <input type="email" class="form-control"> </input>
                        </div>

                        <div class="col-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control"> </input>
                        </div>

                    </div>
                    <br>
                    <div class="row justify-content-evenly d-flex flex-wrap">
                        <div class="col-4">
                            <label for="especialidad" class="form-label fw-semibold">Especialidad</label>
                            <select class="form-control" id="" required="">
                                <option value="">-Seleccionar</option>
                                <option>Medico General</option>
                                <option>Pediatra</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label for="precio_consulta" class="form-label fw-semibold">Precio Consulta</label>
                            <input type="float" class="form-control"> </input>
                        </div>

                    </div>
                    <br>
                    <div class="row justify-content-evenly d-flex flex-wrap">
                        <div class="col-4">
                            <label for="whatsApp" class="form-label fw-semibold">Link WhatsApp</label>
                            <input type="float" class="form-control"> </input>
                        </div>

                        <div class="col-4">
                            <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                            <input type="longtext" class="form-control"> </input>
                        </div>

                    </div>
                    <section class="botones container-fluid col-4 d-flex justify-content-evenly">

                        <button type="submit" class="btn btn-primary">Cancelar</button>
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Aceptar</button>

                    </section>


                </article>
            </div>
        </div>
    </section>

<br><br>
    <br>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
