<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
        
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi Agenda - DocHome</title>
</head>


<body>
    <header>
        <x-nav />
    </header>
    <section>
        <div class="container-flex ">
            <div class="ro ">

                <x-perfil1 />


                <article class="col-md-8  d-flex flex-wrap caja2">
                    <br>
                    <br>
                    <div class="container">
                        <br>
                        <div id='calendar'></div>


                        <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <h5 class="modal-title" id="titulo"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="formulario">
                                        <div class="modal-body">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="title"
                                                    name='title'>
                                                <label for="title" class="form-label">Evento</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="color" class="form-control" id="color"
                                                    name='color'>
                                                <label for="color" class="form-label">Color</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="start"
                                                    name='start'>
                                                <label for="start" class="form-label">Fecha</label>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-warning">Cancelar</button>
                                            <button class="btn btn-danger">Eliminar</button>
                                            <button class="btn btn-info" id="btnAccion" type="submit">Registar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="Assets/js/bootstrap.bundle.min.js"></script>
                        <script src="Assets/js/main.min.js"></script>
                        <script src="Assets/js/moment.js"></script>
                        <script src="Assets/js/sweetalert2.all.min.js"></script>
                        <script src="Assets/js/es.js"></script>
                        {{-- <!-- <script>
                        const base_url = '';
                      </script> --> --}}
                        <script src="Assets/js/app.js"></script>

                    </div>
                </article>
            </div>

    </section>

    <footer>
        <x-footer />
    </footer>
</body>

</html>
