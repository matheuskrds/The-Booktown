<?php
  include_once("templates/header.php");
?>

<!-- BANNER PRINCIPAL -->
<div class="container mt-5" id="fundo-banner-principal">


<!-- CARROSSEL -->
<div id="carouselExampleIndicators" class="carousel slide">

    <!-- Botão Carrossel Indicador de Onde está -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <!-- Carrossel Geral -->
    <div class="carousel-inner" id="carro">

        <!-- ? Items Carrossel Primeiro Carrossel -->
        <div class="carousel-item item-line-cont-1 active" id="mangaka">
            <div class="row justify-space-around item-line-1" id="item-line-1">

                <!-- Texto -->
                <div class="col-md-5 col-sm-12" style="margin-left: 50px;" id="semana-mangaka">
                    <p class="h1 text-center mt-5" style="color: yellow;">A Semana Mangaká está de
                        volta!</p>
                    <p class="h2 mt-5" style="font-style: italic;">"O evento mangaká com preço para o
                        seu bolso, acompanhe as melhores ilustrações, traduções e preços de São Paulo."
                    </p>
                    <p class="h2 text-end mt-5">-- The Booktown</p>
                </div>

                <!-- Imagem -->
                <div class="col-6 slide_respon">
                    <img src="img/A_img/joyboy_volta.jpeg" style="width: 582px;" class="d-block" alt="...">
                </div>
            </div>
        </div>

        <!-- ? Items Carrossel Segundo Carrossel -->
        <div class="carousel-item item-line-cont-2">
            <div class="row justify-space-around item-carro-2 item-line-2" id="item-line2">
                <div class="col-4 offset-md-1 carro-img carro-2 d-flex align-items-center slide_respon">
                    <img src="img/A_img/Capa_1.jpeg" class="d-block w-100" alt="...">
                </div>

                <div class="col col-6 justify-content-center mt-5" id="novos-cap">
                    <p class="h1 mt-5 mb-sm-1">
                        Os novos capítulos de One Piece chegaram!
                    </p>

                    <p class="h2 mt-5">
                        Confira já os mais novos capítulos do mangá mais vendido de 2023.
                    </p>

                    <div class="btnbtn d-flex justify-content-center">
                        <button style="background-color: red;" type="button" class="btn btn-danger mt-5">
                            <a style="color: white; font-weight: bold; text-decoration: none" href="#products">Conferir acervo</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ? Items Carrossel Terceiro Carrossel -->
        <div class="carousel-item item-line-cont-2">
            <div class="row justify-space-around item-line-3" id="item-line3">

                <!-- Primeira Imagem -->
                <div class="col-4 offset-md-2 carro-img d-flex align-items-center">
                    <img src="img/A_img/fundo_banner1.jpeg" class="d-block w-100" alt="...">
                </div>

                <!-- Segunda Imagem -->
                <div class="col-4 carro-img d-flex align-items-center">
                    <img src="img/A_img/fundo_banner2.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

    </div>
    <!-- Botões de próximo e anterior -->
    <button class="carousel-control-prev" style="width: 30px;" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" style="width: 30px;" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div><br><br><br><br>

</div>

    <!-- MINI BANNERS -->    
    <!-- deixar dentro da DIV CAROUSEL -->

    <div class="container" id="mini-banners">
      <div class="row justify-content-around">
        <div class="col-12 primary-bg-color" id="mini-banner-1">
          <h2>Lançamentos</h2>
          <img src="img/A_img/mini-banner-1-removebg-preview.png" alt="Lançamentos">
          <a style="color: black; text-decoration: none;" href="#">Ver mais</a>
        </div>
        <div class="col-12 primary-bg-color" id="mini-banner-2">
          <h2>Best Sellers</h2>
          <img src="img/A_img/mini-banner-2-removebg-preview.png" alt="best sellers">
          <a style="color: black; text-decoration: none;" href="#">Ver mais</a>
        </div>
        <div class="col-12 primary-bg-color" id="mini-banner-3">
          <h2 class="secondary-color">Classicos</h2>
          <img src="img/A_img/mini-banner-3-removebg-preview.png" alt="classicos">
          <a style="color: black; text-decoration: none;" href="#">Ver mais</a>          
        </div>
      </div>
    </div>
  </div>


<!-- BEST SELLERS -->

<div class="container" id="best-sellers">
<!-- Container para os produtos mais vendidos -->
<h2 class="title primary-color">Mais vendidos</h2>
<!-- Título da seção de produtos mais vendidos -->
<div class="row">
<!-- Linha que contém as colunas dos produtos -->
 <div class="col-12 col-md-3">
 <!-- Coluna para o primeiro produto -->
   <div class="card light-color">
     <img src="img/A_img/cora.jpg" class="card-img-top img-fluid" alt="Livro 1">
     <!-- Imagem do produto -->
     <div class="card-body">
     <!-- Corpo do cartão -->
     <p class="card-category secondary-color">Livro</p>
     <!-- Categoria do produto -->
     <h5 class="card-title primary-color">Coraline</h5>
     <!-- Nome do produto -->
     <p class="card-text primary-color">R$54,38</p>
     <!-- Preço do produto -->
     <a href="#" class="btn light-bg-color">Comprar</a>
     <!-- Botão de compra -->
     </div>
   </div>
 </div>
 <div class="col-12 col-md-3">
   <div class="card light-color">
     <img src="img/A_img/biblioteca.jpg" class="card-img-top img-fluid" alt="Livro 2">
     <div class="card-body">
       <p class="card-category secondary-color">Livro</p>
       <h5 class="card-title primary-color">A biblioteca da meia noite</h5>
       <p class="card-text primary-color">R$50,39</p>
       <a href="#" class="btn light-color">Comprar</a>
     </div>
   </div>
 </div>
 <div class="col-12 col-md-3">
   <div class="card light-color">
     <img src="img/A_img/opequenoprincipe-removebg-preview.png" class="card-img-top img-fluid" alt="Livro 3">
     <div class="card-body">
       <p class="card-category secondary-color">Livro</p>
       <h5 class="card-title primary-color">O pequeno principe</h5>
       <p class="card-text primary-color">R$24,99</p>
       <a href="#" class="btn light-color">Comprar</a>
     </div>
   </div>
 </div>
 <div class="col-12 col-md-3">
   <div class="card light-color">
     <img src="img/A_img/jamboeditora-crianca-amaldicoada.png" class="card-img-top img-fluid" alt="Livro 4">
     <div class="card-body">
       <p class="card-category secondary-color">Livro</p>
       <h5 class="card-title primary-color">HP e a criança amaldiçoada</h5>
       <p class="card-text primary-color">R$31,90</p>
       <a href="#" class="btn light-color">Comprar</a>
     </div>
   </div>
 </div>
</div>
</div>

<!-- BANNER DESTAQUE -->

<div style="background-color: #DBB372;" class="container-fluid primary-bg-color" id="bottom-banner">
<!-- Container de largura total da página -->
<div class="row primary-bg-color">
<!-- Linha que contém duas colunas -->
   <div class="col-12 col-md-8 primary-bg-color">
   <!-- Coluna para a seção de texto -->
       <p class="primary-bg-color offer-subtitle">Descontos de até 80% nas linhas infantis</p>
       <!-- Subtítulo da oferta -->
       <h2 class="primary-bg-color">Marcelo, marmelo, martelo</h2>
       <!-- Título do produto -->
       <p class="secondary-color">Marcelo conta com três amigos: Catapimba, Teresinha e Gabriela. <br>
        Juntos, eles aprontam muita bagunça no bairro do Caramelo.</p>
       <!-- Descrição do produto -->
       <a style="background-color: #DBB372;" href="#" class="btn">Comprar agora</a>
       <!-- Botão de compra -->
   </div>
   <!-- Coluna para a imagem -->
   <div class="col-12 col-md-4">
       <img class="livroinf" src="img/A_img/livro-infantil.jpg" alt="Relógio 6">
       <!-- Imagem do produto -->
   </div>
</div>
</div>

  <!-- PRODUTOS -->

  <!-- LIVROS DIVERSOS -->
<div class="container" id="products">
<!-- Container para a seção de produtos -->
<h2 class="title primary-color">Livros Diversos</h2>
<!-- Título da seção de produtos -->
<div class="row">
    <!-- Linha que contém duas colunas -->
    <div class="col-12 col-md-3 d-none d-md-flex" id="products-banner">
    <img class="imglivro img-fluid" src="img/A_img/img3.jpg" alt="" class="img-livro">
        <!-- Coluna para o banner de produtos (ATENÇÃO! visível apenas em desktop) -->
        <p class="secondary-color" style="color: white;">Os</p>
        <!-- Texto secundário -->
        <h3 style="color: white;">Livros</h3>
        <!-- Título da seção de relógios -->
        <p class="primary-color" style="color: white;">mais procurados!</p>
        <!-- Texto primário -->
    </div>
    <!-- Coluna para a seção de produtos individuais -->
    <div class="col-12 col-md-9">
        <!-- Coluna para os produtos individuais -->
        <div class="row">
            <!-- Nova linha para os produtos individuais -->
            <!-- Repetir estrutura semelhante para cada produto -->
            <div class="col-12 col-md-4">
                <!-- Coluna para um produto -->
                <div class="card">
                    <!-- Cartão do produto -->
                    <img src="img/A_img/Senhor_Aneis.jpeg" class="card-img-top img-fluid" alt="livro1">
                    <!-- Imagem do produto -->
                    <div class="card-body">
                        <!-- Corpo do cartão -->
                        <p class="card-category">Ficção</p>
                        <!-- Categoria do produto -->
                        <h5 class="card-title">Senhor dos Aneis</h5>
                        <!-- Nome do produto -->
                        <p class="card-text">R$59.63</p>
                        <!-- Preço do produto -->
                        <button type="button" class="btn primary-color">Comprar</button>
                        <!-- Botão de compra -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="img/A_img/Menina_roubava_livros.jpeg" class="card-img-top img-fluid" alt="livro2">
                    <div class="card-body">
                        <p class="card-category">Ficção Histórica</p>
                        <h5 class="card-title">A menina que roubava livros</h5>
                        <p class="card-text">R$36.99</p>
                        <button type="button" class="btn primary-color">Comprar</button>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="img/A_img/Os_Miseraveis.jpeg" class="card-img-top img-fluid" alt="livro3">
                    <div class="card-body">
                        <p class="card-category">Romance</p>
                        <h5 class="card-title">Os Miseraveis</h5>
                        <p class="card-text">R$71.63</p>
                        <button type="button" class="btn primary-color">Comprar</button>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="img/A_img/Reinacoes_Narizinho.jpeg" class="card-img-top img-fluid" alt="livro4">
                    <div class="card-body">
                        <p class="card-category">Fantasia</p>
                        <h5 class="card-title">Reinações de Narizinho</h5>
                        <p class="card-text">R$37.50</p>
                        <button type="button" class="btn primary-color">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="img/A_img/Pequeno_Principe.jpeg" class="card-img-top img-fluid" alt="livro5">
                    <div class="card-body">
                        <p class="card-category">Fantasia</p>
                        <h5 class="card-title">O pequeno Principe</h5>
                        <p class="card-text">R$63.99</p>
                        <button type="button" class="btn primary-color">Comprar</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img src="img/A_img/Nevoa_Floresta.jpeg" class="card-img-top img-fluid" alt="livro6">
                    <div class="card-body">
                        <p class="card-category">Fantasia</p>
                        <h5 class="card-title">A névoa da Floresta</h5>
                        <p class="card-text">R$75.6o</p>
                        <button type="button" class="btn primary-color">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
    include_once("templates/footer.php");
?>
