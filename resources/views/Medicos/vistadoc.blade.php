<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/vistas.css">

    <title>Lista de Medicos - DocHome</title>
</head>


<body>
    <section>
        <x-nav />
    </section>

    <section>
        <div class="container-flex">
            <div class="ro">

                <x-perfil3 />


                <article class="col-md-9  cajaa">
                    <br>

                    <section class="tabladoc container ">
                        <table style="width:99% ">
                            <tr>
                                <td>
                                    <section class="conatiner d-flex justify-content-center ">
                                        <img class="LLOGIN "
                                            src="https://cdn.icon-icons.com/icons2/212/PNG/256/User-blue256_25016.png"
                                            width="100px" alt="Logo">
                                    </section>
                                <td>
                                    <p class="container d-flex justify-content-center"> Psicologo</p>
                                </td>
                                <td>
                                    <p class="container d-flex justify-content-center"> </p>
                                </td>
                                <td>

                                    <section class="container d-flex justify-content-center ">
                                        <button style="margin: 10px" type="button" class="btn btn-info ">Ver
                                            perfil</button>
                                        <button style="margin: 10px" type="button" class="btn btn-success ">Verificar
                                            perfil</button>
                                        <br>
                                        <br>
                                        <button style="margin: 10px" type="button" class="btn btn-danger">Eliminar
                                            perfil</button>
                                    </section>
                                </td>
                            </tr>
                        </table>
                    </section>
                    <br>
                    <br>
                    <section class=" tabladoc container ">
                        <table style="width:99% ">
                            <tr>
                                <td>
                                    <section class="conatiner d-flex justify-content-center ">
                                        <img class="LLOGIN "
                                            src="https://cdn.icon-icons.com/icons2/212/PNG/256/User-blue256_25016.png"
                                            width="100px" alt="Logo">
                                    </section>

                                <td>
                                    <p class="container d-flex justify-content-center"> Pediatra</p>
                                </td>
                                <td>
                                    <p class="container d-flex justify-content-center"> </p>
                                </td>
                                <td>

                                    <section class="container d-flex justify-content-center ">
                                        <button style="margin: 10px" type="button" class="btn btn-info ">Ver
                                            perfil</button>
                                        <button style="margin: 10px" type="button" class="btn btn-success ">Verificar
                                            perfil</button>
                                        <br>
                                        <button style="margin: 10px" type="button" class="btn btn-danger">Eliminar
                                            perfil</button>
                                    </section>
                                </td>
                            </tr>
                        </table>
                    </section>
                    <br>
                    <br>
                    <section class="tabladoc container ">
                        <table style="width:99% ">
                            <tr>
                                <td>
                                    <section class="conatiner d-flex justify-content-center ">
                                        <img class="LLOGIN "
                                            src="https://cdn.icon-icons.com/icons2/212/PNG/256/User-blue256_25016.png"
                                            width="100px" alt="Logo">
                                    </section>
                                <td>
                                    <p class="container d-flex justify-content-center"> Medico general</p>
                                </td>
                                <td>

                                    <section class="container d-flex justify-content-center ">
                                        <button style="margin: 10px" type="button" class="btn btn-info ">Ver
                                            perfil</button>
                                        <br>
                                        <button style="margin: 10px" type="button" class="btn btn-success ">Verificar
                                            perfil</button>
                                        <br>
                                        <button style="margin: 10px" type="button" class="btn btn-danger">Eliminar
                                            perfil</button>
                                    </section>
                                </td>
                            </tr>
                        </table>
                    </section>
                    <section class="botones container-fluid col-4 d-flex justify-content-evenly">

                        <button type="submit" class="btn btn-primary">Anterior</button>
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Siguiente</button>

                    </section>


                </article>
            </div>
        </div>

    </section>

    <footer>
        <x-footer />
    </footer>
</body>

</html>
