<link rel="stylesheet" href="css/perfil.css">

<article class="col-md-3">

    <div class="d-flex">

        <nav class=" caja ">
            <div class="row ">
                <ul class="nav d-flex flex-column ">
                    <br>
                    <li class="p-3 flex-column flex-wrap">
                        <img class="foto" src="img/usuario.webp" alt="">
                        <h4 class="text-center">Stiven Dorado</h4>
                    </li>
                    <br>
                    <li class=" d-flex lista  flex-wrap ">
                        <a class="nav-link color " href="{{ route('Perfiladmin') }}">
                            Perfil
                        </a>
                    </li>
                    <li class="d-flex lista  flex-wrap">
                        <a class="nav-link color " href="{{ route('Medicos') }}">
                            Medicos
                        </a>
                    </li>

                    <li class="d-flex lista  flex-wrap">
                        <a class="nav-link color " href="{{route('Pacientes')}}">
                            Pacientes
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</article>
