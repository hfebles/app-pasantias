
<nav class="navbar bg-body-tertiary" aria-label="Light offcanvas navbar">
    <div class="container-fluid">
    <img width="60"  height="60" src="./public/assets/images/Birrete.png" alt="">
      <h4>Sistema de Pasantias</h4>
      <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Configuración</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-user-large"></i> Mi Usuario</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-question"></i>  Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/app-pasantias/logout"><i class="fa-solid fa-door-closed"></i>  Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>



<nav class="navbar navbar-expand-lg  bg-primary navbar-dark">
  <div class="container-fluid justify-content-center" >
    <a class="navbar-brand" href="/app-pasantias/home"><i class="fa-solid fa-house"></i> |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/app-pasantias/mencion">Mención</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Tutor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Estudiante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Asistencia</a>
        </li>
        <li class="breadcrumb-item">
          <a class="nav-link active" href="#">Servicios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>