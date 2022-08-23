<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">
  <title>Norden</title>
</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="row">
        <a href="index.php" class="d-flex align-items-center logo col-2"><img src="assets/images/logo.png" alt="logo"></a>
        <div class="links-nav d-flex justify-content-between align-items-center col-5">
          <div class="mega-menu-item">
            <a href="#" class="d-block fw-600 fs-16">
              Planos
              <img src="assets/images/seta-baixo.png" alt="seta">
            </a>
            <div class="dropdown-item-header">
              <div class="row">
                <div class="col-3">
                  <h2 class="fw-600 fs-28 white">PLANOS</h2>
                  <p class="m-0 fw-300 fs-20 sans white">Você escolhe o planos,
                    nós cuidamos de você.</p>
                </div>
                <div class="col-3">
                  <p class="titulo-dropdown-header">CONTRATAR</p>
                  <div class="links-dropdown-header">
                    <a href="#">Simule seu Plano </a>
                    <a href="#">Comparar Planos</a>
                  </div>
                </div>
                <div class="col-3">
                  <p class="titulo-dropdown-header">CONHECER</p>
                  <div class="links-dropdown-header">
                    <a href="#">Para sua Família</a>
                    <a href="#">Para sua Empresa</a>
                    <a href="#">Perguntas Frequentes</a>
                    <a href="#">Rede Credenciada</a>
                  </div>
                </div>
                <div class="col-3">
                  <p class="titulo-dropdown-header">CONHECER</p>
                  <div class="links-dropdown-header">
                    <a href="#">Rede Credenciada</a>
                    <a href="#">Corpo Clínico</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mega-menu-item">
            <a href="#" class="d-block fw-600 fs-16">
              Hospital
              <img src="assets/images/seta-baixo.png" alt="seta">
            </a>
          </div>
          <div class="mega-menu-item">
            <a href="#" class="d-block fw-600 fs-16">
              Sobre nós
              <img src="assets/images/seta-baixo.png" alt="seta">
            </a>
          </div>
          <div class="mega-menu-item">
            <a href="#" class="d-block fw-600 fs-16">
              Contato
              <img src="assets/images/seta-baixo.png" alt="seta">
            </a>
          </div>
        </div>
        <div class="outros d-flex align-items-center justify-content-end col-5">
          <div class="facilidades">
            <div class="facilidades-button d-flex align-items-center justify-content-center">
              <p class="fw-600 fs-16 white m-0">Facilidades</p>
              <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L6 6L11 1" stroke="white" stroke-width="2" />
              </svg>
            </div>
            <div class="facilidades-menu">
              <div class="row">
                <div class="col-3">
                  <h2 class="fw-600 fs-28 white">FACILIDADES</h2>
                  <p class="m-0 fw-300 fs-20 sans white">Agilidade e transparência na comunicação, onde você estiver, como quiser</p>
                </div>
                <div class="col-3">
                  <p class="titulo-facilidades">USAR</p>
                  <div class="links-facilidades">
                    <a href="#">Agendamentos</a>
                    <a href="#">2ª Via de Boleto</a>
                    <a href="#">Documentos</a>
                  </div>
                </div>
                <div class="col-3">
                  <p class="titulo-facilidades">CONHECER</p>
                  <div class="links-facilidades">
                    <a href="#">Rede Credenciada</a>
                    <a href="#">Corpo Clínico</a>
                  </div>
                </div>
                <div class="col-3">
                  <p class="titulo-facilidades">INTERAGIR</p>
                  <div class="links-facilidades">
                    <a href="#">Aplicativos</a>
                    <a href="#">Área do beneficiário</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lupa d-flex align-items-center justify-content-center">
            <a href="#"><img src="assets/images/lupa.png" alt="lupa" class="lupa"></a>
          </div>
          <div class="burgir">
            <span class="top"></span>
            <span class="mid"></span>
            <span class="bot"></span>
          </div>
        </div>
      </nav>
    </div>
  </header>