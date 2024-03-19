<!--Primera Franja -->
<nav class="navbar bg-body-tertiary" aria-label="Light offcanvas navbar">
    <div class="container-fluid">
      
      <img width="60"  height="60" src="./public/assets/images/Birrete.png" alt="">
      
      
     
      <h4 class="text-right">Administrador</h4>
      
      <i class="fa-regular fa-user"></i>
      
      <button class="navbar-toggler " style="background-color: #72a4d6;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">
            <img width="40"  height="40" src="./public/assets/images/tuerca.png" alt="">   Configuración
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <img width="25"  height="25" src="./public/assets/images/usuarios.png"> Mi Usuario
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img width="20"  height="20" src="./public/assets/images/ayuda.png" alt="">  Ayuda
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/app-pasantias/logout">
                <i class="fa-solid fa-door-closed"></i>  Cerrar Sesión
              </a>
            </li>
          </ul></div>
      </div>
    </div>
  </nav>

<!--Segundda Franja -->

<nav class="navbar navbar-expand-lg  navbar-dark  " style="background-color: #3967A3;">
  <div class="container-fluid justify-content-center" >
    <a class="navbar-brand" href="#"><i class="fa-solid fa-house"></i> |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around " id="navbarNav">
      <ul class="navbar-nav justify-content-around nav nav-pills">
        <li class="nav-item px-3 mx-2">
          <a class="nav-link" aria-current="page" href="/app-pasantias/mencion"> 
            <i class="fa-solid fa-book"></i> Mención
          </a>
        </li>
        <li class="nav-item  px-3 mx-2 dropdown">
          <a class="nav-link "  aria-current="page"  href="/app-pasantias/empresa"  > 
            <i class="fa-solid fa-building"></i> Empresa
          </a>
          <ul class="dropdown-menu bg-body-tertiary">
            <li>
              <a class="dropdown-item " href="#"> 
                <img width="20"  height="20" src="./public/assets/images/asignar.png" alt="">   Asignar
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/control.png" alt=""> Control
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Reporte
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item  px-3 mx-2 dropdown">
          <a class="nav-link "  href="./app-pasantias/tutor" >
             <i class="fa-solid fa-user-tie"></i> Tutor
          </a>
          <ul class="dropdown-menu bg-body-tertiary">
            <li>
              <a class="dropdown-item " href="#"> 
                <img width="20"  height="20" src="./public/assets/images/asignar.png" alt="">   Asignar
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/control.png" alt=""> Control
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Reporte
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item px-3 mx-2 ">
          <a class="nav-link" href="/app-pasantias/estudiante"> 
            <i class="fa-solid fa-user-graduate"></i> Estudiante
          </a>
        </li>
        <li class="nav-item  px-3 mx-2 dropdown">
          <a class="nav-link "  href="#"  > 
            <i class="fa-solid fa-check"></i> Asistencia
          </a>
          <ul class="dropdown-menu bg-body-tertiary">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/control.png" alt=""> Control
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Reporte
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item px-3 mx-2">
          <a class="nav-link" href="#"> 
            <i class="fa-regular fa-calendar"></i> Agenda
          </a>
        </li>
        <li class="nav-item  px-3 mx-2 dropdown">
          <a class="nav-link "  href="#" > 
            <i class="fa-solid fa-gear"></i> Mantenimiento
          </a>
          <ul class="dropdown-menu bg-body-tertiary">
            <li>
              <a class="dropdown-item" href="#"> 
                <img width="20"  height="20" src="./public/assets/images/asignar.png" alt="">   Habilidades
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#"> 
                <img width="20"  height="20" src="./public/assets/images/asignar.png" alt="">   Conocimientos
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="/app-pasantias/usuario">
                <img width="20"  height="20" src="./public/assets/images/control.png" alt=""> Gestión Usuario
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Respaldar
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Restaurar
              </a>
            </li>
            <hr class="dropdown-divider">
            <li>
              <a class="dropdown-item" href="#">
                <img width="20"  height="20" src="./public/assets/images/reportes.png" alt="">  Restablecer
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>