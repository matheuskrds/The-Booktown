<!-- Linkando templates: header -->
<?php
    include_once("templates/header.php");
?>

    <!-- CONTAINER DE POSICIONAMENTO DA PÁGINA -->
    <div class="container-fluid mt-5 mb-5">

    <!-- Linha com todos os itens: imagens e informações -->
        <div class="row d-flex">

            <!-- Colunas: Imagens e Informações -->

            <!-- Imagens -->
            <div class="col-8 p-5">
                <div class="row mb-3">
                    <div class="img-fluid col-6"><img src="img/A_img/b5.webp" style="width:450px;height:380px;" alt="" class="img_produto"></div>
                    <div class="img col-6"><img src="img/A_img/b8.webp" style="width:450px;height:380px;" alt="" class="img_produto"></div>
                </div>
                <div class="row mb-3">
                    <div class="img-fluid col-6"><img src="img/A_img/b9.webp" style="width:450px;height:380px;" alt="" class="img_produto"></div>
                    <div class="img col-6"><img src="img/A_img/b4.jpg" style="width:450px;height:380px;" alt="" class="img_produto"></div>
                </div>
                <div class="row mb-3">
                    <div class="img-fluid col-6"><img src="img/A_img/b10.jpeg" style="width:450px;height:380px;" alt="" class="img_produto"></div>
                </div>
                
            </div>

            <!-- Informações do Produto -->
            
            <div class="bordinha col-4">
                <!-- Nome -->
                <p class="h2 mt-5" style="font-weight:500;">A biblioteca da meia noite</p>
                <!-- Tipo do produto -->
                <p class="h4 mt-3" style="font-weight:400;">Romance</p>
                <!-- Avaliação do Produto -->
                <div class="star_avaliation mt-4">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star"></i>
                </div>
                <p class="h3 mt-3" style="font-weight:400;">Avaliação de Produto</p>
                <!-- Preço -->
                <p class="h2 mt-3">R$50,39</p>

                <!-- Outros Modelos -->
                <div class="carousel"></div>

                <!-- Adicionar ao Carrinho -->
                <button class="add_carrinho mt-4 text-center btn" type="submit">Adicionar ao Carrinho</button>
                <br><br>

                <div class="detalhes2 col-4">
                <p class="h4 mt-3" style="font-weight:400;"> &nbsp; &nbsp;Descrição do produto:</p>

                <p class="description mt-3 mb-4">Aos 35 anos, Nora Seed é uma mulher cheia de talentos e poucas conquistas. Arrependida das escolhas que fez no passado, ela vive se perguntando o que poderia ter acontecido caso tivesse vivido de maneira diferente. Após ser demitida e seu gato ser atropelado, Nora vê pouco sentido em sua existência e decide colocar um ponto final em tudo. Porém, quando se vê na Biblioteca da Meia-Noite, Nora ganha uma oportunidade única de viver todas as vidas que poderia ter vivido. Mas será que alguma dessas outras vidas é realmente melhor do que a que ela já tem?</p>
                </div>
            </div>
        </div>
    </div>

<!-- Linkando templates: footer -->
<?php
    include_once("templates/footer.php");
?>
