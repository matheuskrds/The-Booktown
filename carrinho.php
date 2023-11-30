<!-- incluir o cabeçario -->
<?php
include_once("templates/header.php");
?>
<!-- incluir o css -->
<link rel="stylesheet" href="css/carrinho.css">
<div class="cont">
    <!-- container cinza para os livros -->

    <div class="container">
        <h2>
            <!-- titulo carrinho de compras e icone de carrinho -->
            <i class="bi bi-cart3"></i> Carrinho de compras
        </h2>
    </div>

    <hr>
    <div class="container col-11 col-md-9 mt-5 mb-5" id="register-container">
        <div class="row gx-5 caixa" id="cont">
            <!-- simbolo de check -->
            <div class="form-check prods d-flex align-items-center">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <!-- imagem do livro -->
                <img src="img/A_img/capa_1.jpeg" class="img-fluid" alt="livro-one-piece">
                <h5 class="ms-3">One Piece vol. 103
                    <br><br> Por Eiichiro Oda
                </h5>
                <!-- titulo para o preço do livro -->
                <h5 class="preco">R$ 44,90</h5>


            </div>
        </div>
    </div>
    <div class="container col-11 col-md-9 mt-5 mb-5" id="register-container">
        <div class="row gx-5 caixa" id="cont">




            <div class="form-check prods d-flex align-items-center">
                <label class="form-check-label" for="flexCheckChecked"></label>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>

                <img src="img/A_img/livro-infantil.jpg" class="img-fluid" alt="livro-marcelo-marmelo-martelo">
                <h5 class="ms-3">Marcelo Marmelo Martelo
                    <br> <br> Por Ruth Rocha
                </h5>
                <h5 class="preco">R$ 44,90</h5>




            </div>
        </div>
    </div>
    <div class="container col-11 col-md-9 mt-5 mb-5" id="register-container">
        <div class="row gx-5 caixa" id="cont">




            <div class="form-check prods d-flex align-items-center">
                <label class="form-check-label" for="flexCheckChecked"></label>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>

                <img src="img/A_img/jamboeditora-crianca-amaldicoada.png" class="img-fluid" alt="livro-harry-potter">
                <h5 class="ms-3">Harry Potter e a Criança Amaldiçoada
                    <br> <br> Por J.K. Rowling
                </h5>


                <h5 class="preco">R$ 90,86</h5>


            </div>
        </div>
    </div>
</div>

<!-- para incluir o footer -->
<?php
include_once("templates/footer.php");
?>
