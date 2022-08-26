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
  <header class="d-flex align-items-center" id="topo">
    <div class="container-fluid-sm w-100">
      <div class="itens-nav d-flex justify-content-between align-items-center">
        <a href="index.php" class="logo d-none d-sm-block"><img src="assets/images/logo.png" alt="logo"></a>
        <div class="links-nav fw-500 fs-18 d-none d-lg-flex">
          <div class="dropdown-nav">
            <a href="#" class="d-flex align-items-center">Planos <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>
          <div class="dropdown-nav">
            <a class="d-flex align-items-center">Hospital <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
            <div class="links-dropdown">
              <div class="row">
                <div class="col-12 col-lg-3 tema-dropdown">
                  <h3>Facilidades</h3>
                  <div class="itens-sub">
                    <p>Agilidade e transparência na comunicação, onde você estiver, como quiser</p>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>USAR</h5>
                  <div>
                    <a href="#" class="d-block">Diagnóstico e recomendação</a>
                    <a href="#" class="d-block">Planos de ação para implantação</a>
                    <a href="#" class="d-block">Implantação de planos de ação</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>CONHECER</h5>
                  <div class="itens-sub">
                    <a href="#" class="d-block">Conscientização de usuários</a>
                    <a href="#" class="d-block">Mapeamento de dados</a>
                    <a href="#" class="d-block">Gestão de acessos</a>
                    <a href="#" class="d-block">Automatização de políticas</a>
                    <a href="#" class="d-block">Definição de workflow</a>
                    <a href="#" class="d-block">Prevenção de vazamento de dados</a>
                    <a href="#" class="d-block">Automação e avaliação LGPD</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>INTERAGIR</h5>
                  <div>
                    <a href="#" class="d-block">Gerenciamento do risco de aplicativos</a>
                    <a href="#" class="d-block">Proteção as aplicações em nuvem</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-nav">
            <a href="#" class="d-flex align-items-center">Sobre nós<img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>
          <div class="dropdown-nav">
            <a href="#" class="d-flex align-items-center">Contato<img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>

        </div>
        <!-- fim links nav -->
        <div class="links-nav-mobile">
          <div class="dropdown-nav-mobile">
            <a href="" class="fw-500 fs-18">Planos <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Hospital <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
            <div class="links-dropdown-mobile">
              <div class="aaaa">
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown">
                    <h5>CONTRATAR</h5>
                    <div class="links">
                      <a href="#">Simule seu Plano</a>
                      <a href="#">Comparar Planos</a>
                    </div>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown">
                    <h5>CONHECER</h5>
                    <div class="links">
                      <a href="#">Simule seu Plano</a>
                      <a href="#">Comparar Planos</a>
                    </div>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown">
                    <h5>CONTRATAR</h5>
                    <div class="links">
                      <a href="#">Simule seu Plano</a>
                      <a href="#">Comparar Planos</a>
                    </div>
                  </div>
                </div>
                <div class="itens-dropdown-mobile">
                  <div class="sub-dropdown">
                    <h5>CONTRATAR</h5>
                    <div class="links">
                      <a href="#">Simule seu Plano</a>
                      <a href="#">Comparar Planos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Sobre nós <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>
          <div class="dropdown-nav-mobile">
            <a class="fw-500 fs-18">Contato <img src="assets/images/seta-baixo.png" alt="seta para baixo"></a>
          </div>
          <div class="parte-2">
            <div class="links-2">
              <a href="#" class="d-block fw-600 fs-18">Rede Credenciada</a>
              <a href="#" class="d-block fw-600 fs-18">Agendamentos</a>
              <a href="#" class="d-block fw-600 fs-18">2ª Via de Boleto</a>
              <a href="#" class="d-block fw-600 fs-18">Área do Beneficiário</a>
            </div>
          </div>
        </div>
        <div class="outros d-flex justify-content-center justify-content-sm-end align-items-center w-100">
          <div class="facilidades">
            <div class="facilidades-button d-flex align-items-center">
              <p class="m-0 fw-600 fs-16 white">Facilidades</p>
              <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L6 6L11 1" stroke="white" stroke-width="2" />
              </svg>
            </div>
            <div class="facilidades-dropdown">
              <div class="row">
                <div class="col-12 col-lg-3 tema-dropdown">
                  <h3>Facilidades</h3>
                  <p>Agilidade e transparência na comunicação, onde você estiver, como quiser</p>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>USAR</h5>
                  <div>
                    <a href="#" class="d-block">Diagnóstico e recomendação</a>
                    <a href="#" class="d-block">Planos de ação para implantação</a>
                    <a href="#" class="d-block">Implantação de planos de ação</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>CONHECER</h5>
                  <div class="itens-sub">
                    <a href="#" class="d-block">Conscientização de usuários</a>
                    <a href="#" class="d-block">Mapeamento de dados</a>
                    <a href="#" class="d-block">Gestão de acessos</a>
                    <a href="#" class="d-block">Automatização de políticas</a>
                    <a href="#" class="d-block">Definição de workflow</a>
                    <a href="#" class="d-block">Prevenção de vazamento de dados</a>
                    <a href="#" class="d-block">Automação e avaliação LGPD</a>
                  </div>
                </div>
                <div class="col-12 col-lg-3 itens-dropdown">
                  <h5>INTERAGIR</h5>
                  <div>
                    <a href="#" class="d-block">Gerenciamento do risco de aplicativos</a>
                    <a href="#" class="d-block">Proteção as aplicações em nuvem</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div><img src="assets/images/lupa.png" alt="lupa"></div>
          <div class="menu d-flex align-items-center">
            <div class="burgir">
              <span class="top"></span>
              <span class="mid"></span>
              <span class="bot"></span>
            </div>
          </div>
        </div>
        <div class="menu-fechado">
          <div class="links">
            <a href="#" class="fw-500 fs-18 white d-block">Rede credenciada</a>
            <a href="#" class="fw-500 fs-18 white d-block">Agendamentos</a>
            <a href="#" class="fw-500 fs-18 white d-block">2ª Via de Boleto</a>
            <a href="#" class="fw-500 fs-18 white d-block">Área do Beneficiário</a>
          </div>
        </div>
      </div>
  </header>