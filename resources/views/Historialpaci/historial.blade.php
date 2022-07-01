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
    <link rel="stylesheet" href="css/historial.css">
    <title>Mi Perfil - DocHome</title>
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

                    <form class="d-flex cuadro" role="search">
                        <input class="form-control buscar" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>

                    <table class="table">
                        <thead class="tabla">

                            <tr>
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>ESPECIALIDAD</th>
                                <th>MEDICO</th>
                                <th> ㅤ ㅤ</th>

                            </tr>
                        </thead>
                        <tbody class="table-light cuerpo">
                            <tr>
                                <td>2022-07-13</td>
                                <td>10:00 a.m</td>
                                <td>Medicina General</td>
                                <td>Alejandra Chavez</td>


                                <td>
                                    <a class="btn btn-danger btn-sm" href="" role="button">Eliminar</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2022-08-01</td>
                                <td>1:00 p.m</td>
                                <td>Psicologia</td>
                                <td>Andres Cardona</td>


                                <td>
                                    <a class="btn btn-danger btn-sm" href="" role="button">Eliminar</a>
                                </td>

                            </tr>
                            <tr>
                                <td>2022-08-20</td>
                                <td>8:00 a.m</td>
                                <td>Fisioterapia</td>
                                <td>Kevin sandoval</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="" role="button">Eliminar</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                </article>
            </div>
        </div>
    </section>

    <footer>
        <x-footer />
    </footer>
</body>

</html>
