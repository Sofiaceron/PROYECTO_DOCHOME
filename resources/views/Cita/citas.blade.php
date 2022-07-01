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
    <link rel="stylesheet" href="css/citas.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Citas - DocHome</title>
</head>


<body>
    <section>
        <x-nav />
    </section>

    <section>
        <div class="container-flex">
            <div class="ro">

                <x-perfil2 />


                <article class="col-md-9  cajaa">
                    <br>

                    <form class="  container d-flex formulario1 " name="formulario1" action="#">

                        <select class="seleccionar container d-flex justify-content-start" name="cosa"
                            onchange="cambia()">
                            <option value="0">Seleccione la Especialidad
                            <option value="1">Medico General
                            <option value="2">Pediatra
                        </select>
                        <br>

                        <select class="seleccionar2 container  d-flex justify-content-end" name="opt">
                            <option value="-">
                        </select>

                    </form>

                    <script type="text/javascript">
                        //1) Definir Las Variables Correspondintes
                        var opt_1 = new Array("Seleccione el doctor", "Andres Gonzales", "Alberto Muñoz", "Maria Clara", "...");
                        var opt_2 = new Array("Seleccione el doctor", "Luis  Muñoz", "Alex Pino", "Alejandra Ortiz", "...");
                        // 2) crear una funcion que permita ejecutar el cambio dinamico

                        function cambia() {
                            var cosa;
                            //Se toma el vamor de la "cosa seleccionada"
                            cosa = document.formulario1.cosa[document.formulario1.cosa.selectedIndex].value;
                            //se chequea si la "cosa" esta definida
                            if (cosa != 0) {
                                //selecionamos las cosas Correctas
                                mis_opts = eval("opt_" + cosa);
                                //se calcula el numero de cosas
                                num_opts = mis_opts.length;
                                //marco el numero de opt en el select
                                document.formulario1.opt.length = num_opts;
                                //para cada opt del array, la pongo en el select
                                for (i = 0; i < num_opts; i++) {
                                    document.formulario1.opt.options[i].value = mis_opts[i];
                                    document.formulario1.opt.options[i].text = mis_opts[i];
                                }
                            } else {
                                //si no habia ninguna opt seleccionada, elimino las cosas del select
                                document.formulario1.opt.length = 1;
                                //ponemos un guion en la unica opt que he dejado
                                document.formulario1.opt.options[0].value = "-";
                                document.formulario1.opt.options[0].text = "-";
                            }
                            //hacer un reset de las opts
                            document.formulario1.opt.options[0].selected = true;

                        }
                    </script>
                    <form class=" buscar container d-flex col-2 justify-content-center ">
                        <input class="form-control col-6 " type="search" placeholder="Buscar">
                        <div style="margin: 10px" class="fa-3x">
                        </div>
                        <button class="btn btn-light border-secondary justify-content-end"
                            type="submit">Buscar</button>
                    </form>
                    <div>
                        <h3 class="container d-flex justify-content-start ">Doctores disponibles</h3>
                    </div>
                    <br>
                    <section class="tabladoc container-flex ">
                        <table>
                            <tr>
                                <td>
                                    <section class="conatiner d-flex justify-content-center ">
                                        <img class="LLOGIN "
                                            src="https://cdn.icon-icons.com/icons2/212/PNG/256/User-blue256_25016.png"
                                            width="100px" alt="Logo">
                                    </section>
                                <td>
                                    <section class=" d-flex">
                                        <p class="container d-flex justify-content-center"> Nombre del doctor</p>
                                    </section>
                                    <section class="container d-flex ">
                                        <p class="clasificacion container d-flex justify-content-center">
                                            <input id="radio1" type="radio" name="estrellas" value="5">
                                            <label for="radio1">★</label>
                                            <input id="radio2" type="radio" name="estrellas" value="4">
                                            <label for="radio2">★</label>
                                            <input id="radio3" type="radio" name="estrellas" value="3">
                                            <label for="radio3">★</label>
                                            <input id="radio4" type="radio" name="estrellas" value="2">
                                            <label for="radio4">★</label>
                                            <input id="radio5" type="radio" name="estrellas" value="1">
                                            <label for="radio5">★</label>
                                        </p>
                                    </section>
                                </td>
                                <td>
                                    <p class=" d-flex caj"> Medico general</p>
                                </td>
                                <td>
                                    <p class=" d-flex caj"> Costo: 30.000</p>
                                </td>
                                <td>

                                    <section class="container-flex d-flex justify-content-center ">
                                        <button type="button" class="btn btn-info ">Calendario
                                            disponible</button>
                                        <br>
                                        <button type="button" class="btn btn-info">Ver
                                            perfil</button>
                                    </section>
                                </td>
                            </tr>
                        </table>
                    </section>
                    <br>
                    <br>
                    <section class=" tabladoc container-flex ">
                        <table>
                            <tr>
                                <td>
                                    <section class="conatiner d-flex justify-content-center ">
                                        <img class="LLOGIN "
                                            src="https://cdn.icon-icons.com/icons2/212/PNG/256/User-blue256_25016.png"
                                            width="100px" alt="Logo">
                                    </section>
                                <td>
                                    <section class=" d-flex">
                                        <p class="container d-flex justify-content-center"> Nombre del doctor</p>
                                    </section>
                                    <section class="container d-flex ">
                                        <p class="clasificacion container d-flex justify-content-center">
                                            <input id="radio1" type="radio" name="estrellas" value="5">
                                            <label for="radio1">★</label>
                                            <input id="radio2" type="radio" name="estrellas" value="4">
                                            <label for="radio2">★</label>
                                            <input id="radio3" type="radio" name="estrellas" value="3">
                                            <label for="radio3">★</label>
                                            <input id="radio4" type="radio" name="estrellas" value="2">
                                            <label for="radio4">★</label>
                                            <input id="radio5" type="radio" name="estrellas" value="1">
                                            <label for="radio5">★</label>
                                        </p>
                                    </section>
                                </td>

                                <td>
                                    <p class="d-flex  caj"> Medico general</p>
                                </td>

                                <td>

                                    <p class="d-flex caj"> Costo: 40.000</p>

                                </td>
                                <td>

                                    <section class="conatiner-flex d-flex justify-content-center ">
                                        <button type="submit" class="btn btn-info">Calendario
                                            disponible</button>
                                        <br>
                                        <button type="submit" class="btn btn-info">Ver
                                            perfil</button>
                                    </section>
                                </td>
                            </tr>
                        </table>
                        <br>
                    </section>
                    <section class="botones container-fluid col-4 d-flex justify-content-evenly">

                        <button type="submit" class="btn btn-primary">Anterior</button>
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Siguiente</button>

                    </section>
                </article>

    </section>
    <br>



    </article>
    </div>
    </div>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
