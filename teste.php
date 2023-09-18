<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
    <nav class="navbar bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://www.bahia.ba.gov.br/wp-content/uploads/2023/01/Governo-da-Bahia_Cor-1024x328.png" alt="Logo" width="150" height="48" class="d-inline-block align-text-top">
        </a>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar por.." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
    </nav>
    </div>
    </nav>
    <div class="dropdown text-center mb-5">
    <div class="btn-group">
    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
        A setradiBA
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Informações</a></li>
        <li><a class="dropdown-item" href="#">Equipe</a></li>
        <li><a class="dropdown-item" href="#">Galeria</a></li>
    </ul>
    </div>
    <div class="btn-group">
    <button class="btn  btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    Notícias
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Atuais</a></li>
        <li><a class="dropdown-item" href="#">Antigas</a></li>
    </ul>
    </div>
    <div class="btn-group">
    <button class="btn  btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
        Fale Conosco
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Contatos</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div id="main">
    <div class="section-1 container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/imagem-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/imagem-2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    </div>
    </div>
    <div class="section-2 container mt-5 mb-0">
    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Notícias</strong>
          <h3 class="mb-0">Tradição soteropolitana</h3>
          <div class="mb-1 text-body-secondary">Set 16</div>
          <p class="card-text mb-auto">Salvador é uma cidade que encanta turistas e moradores com a sua história, cultura, gastronomia e belezas naturais.. </p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continuar lendo
            <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-0 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Notícias</strong>
          <h3 class="mb-0">Dia da Baiana do Acarajé</h3>
          <div class="mb-1 text-body-secondary">Set 17</div>
          <p class="mb-auto">O “Dia das Baianas do Acarajé”, celebrado nacionalmente no dia 25 de novembro, entrou agora para o calendário de datas..</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continuar lendo
            <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
      </div>
    </div>
  </div>  
  <div class="container">
  <form>
          <div class="form-group">
            <label for="InputName">Nome</label>
            <input
              type="text"
              class="form-control"
              id="InputName"
              placeholder="Nome"
            />
          </div>
  
          <div class="form-group">
            <label for="InputEmail">Email</label>
            <input
              type="email"
              class="form-control"
              id="InputEmail"
              placeholder="Email"
            />
          </div>
          
          <div class="form-group">
            <label for="InputCidade">Cidade</label>
            <input
              type="cidade"
              class="form-control"
              id="InputCidade"
              placeholder="Cidade"
            />
          </div>
  
          <div class="form-group">
            <label for="InputSubject">Dúvidas?</label>
            <textarea
              class="form-control"
              id="InputSubject"
              placeholder="Write something...."
              style="height: 100px"
            >
            </textarea>
          </div>
  
          <button type="submit" 
                  class="btn btn-dark mt-4">Enviar</button>
        </form>
    </div>
</body>
</html>