<?php

  // Incluindo os arquivos necessários para funcionamento
  include_once("models/Products.php");
  include_once("models/Message.php");

  // Classe UserController implementando a interface UserInterface
  class ProductsController implements ProductsInterface {

    // Propriedades da classe
    private $conn;
    private $url;
    private $message;

    // Método construtor que recebe uma instância de PDO (conexão com o banco de dados) e a URL base
    public function __construct(PDO $conn, $url) {
      $this->conn = $conn;
      $this->url = $url;
      $this->message = new Message($url);
    }

    // Função que constrói o objeto Usuário a partir dos dados fornecidos
    public function buildUser($data) {

      $product = new Product();

      $product->id = $data["id"];
      $product->nome = $data["nome"];
      $product->descricao = $data["descricao"];
      $product->preco = $data["preco"];
      $product->image = $data["image"];
      $product->token = $data["token"];

      return $product;

    }

    // Função para criar um novo usuário no banco de dados
    public function create(Product $product, $authProduct = false) {

      $stmt = $this->conn->prepare("INSERT INTO cadastro(
          nome, descricao, preco, token
        ) VALUES (
          :nome, :descricao, :preco,, :token
        )");

      $stmt->bindParam(":nome", $product->nome);
      $stmt->bindParam(":descricao", $product->descricao);
      $stmt->bindParam(":preco", $product->preco);
      $stmt->bindParam(":token", $product->token);

      $stmt->execute();

      // Autenticar usuário, caso a variável 'authUser' seja true
      if($authProduct) {
        $this->setTokenToSession($product->token);
      }

    }

    public function update(Product $product, $redirect = true) {

        $stmt = $this->conn->prepare("UPDATE produtos SET
        nome = :nome,
        descricao = :descricao,
        preco = :preco,
        image = :image,
        token = :token
        WHERE id = :id
      ");

      $stmt->bindParam(":nome", $user->nome);
      $stmt->bindParam(":descricao", $user->descricao);
      $stmt->bindParam(":preco", $user->preco);
      $stmt->bindParam(":image", $user->image);
      $stmt->bindParam(":token", $user->token);
      $stmt->bindParam(":id", $user->id);

      $stmt->execute();

      if($redirect) {

        // Redireciona para o perfil do usuario
        $this->message->setMessage("Compra efetuada com sucesso!", "success", "../profile.php");

      }

    }

    public function verifyToken($protected = false) {

      if(!empty($_SESSION["token"])) {

        // Pega o token da session
        $token = $_SESSION["token"];

        $product = $this->findByToken($token);

        if($product) {
          return $product;
        } else if($protected) {

          // Redireciona usuário não autenticado
          $this->message->setMessage("Algo deu errado, você será redirecionado à página inicial!", "error", "index.php");

        }

      } else if($protected) {

        // Redireciona usuário não autenticado
        $this->message->setMessage("Faça a autenticação para acessar esta página!", "error", "index.php");

      }

    }

    public function setTokenToSession($token, $redirect = true) {

      // Salvar token na session
      $_SESSION["token"] = $token;

      if($redirect) {

        // Redireciona para o perfil do usuario
        $this->message->setMessage("Seja bem-vindo!", "success", "../profile.php");

      }

    }

    public function authenticateProduct($nome, $id) {

      $product = $this->findById($id);

    }

    public function findById($id) {

      if($id != "") {

        $stmt = $this->conn->prepare("SELECT * FROM produtos WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        if($stmt->rowCount() > 0) {

          $data = $stmt->fetch();
          $user = $this->buildUser($data);
          
          return $user;

        } else {
          return false;
        }

      } else {
        return false;
      }

    }

    public function findById($id) {

      if($id != "") {

        $stmt = $this->conn->prepare("SELECT * FROM cadastro WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        if($stmt->rowCount() > 0) {

          $data = $stmt->fetch();
          $user = $this->buildUser($data);
          
          return $user;

        } else {
          return false;
        }

      } else {
        return false;
      }
    }

    public function findByToken($token) {

      // Verifica se o token não está vazio
      if($token != "") {

          // Preparando a consulta SQL para buscar um usuário pelo token
          $stmt = $this->conn->prepare("SELECT * FROM cadastro WHERE token = :token");

          // Substituindo o parâmetro na consulta SQL pelo valor do token
          $stmt->bindParam(":token", $token);

          // Executando a consulta SQL
          $stmt->execute();

          // Verificando se há registros retornados
          if($stmt->rowCount() > 0) {

              // Obtendo os dados do usuário encontrado
              $data = $stmt->fetch();

              // Construindo um objeto usuário com os dados encontrados
              $user = $this->buildUser($data);

              // Retornando o objeto usuário
              return $product;

          } else {
              // Caso não haja registros, retorna false
              return false;
          }

      } else {
          // Caso o token esteja vazio, retorna false
          return false;
        }
    }

    public function destroyToken() {

      // Remove o token da session
      $_SESSION["token"] = "";

      // Redirecionar e apresentar a mensagem de sucesso
      $this->message->setMessage("Você fez o logout com sucesso!", "success", "index.php");

    }

    // Este método é responsável por alterar a senha de um usuário no banco de dados.
    public function changePassword(User $user) {

      // Preparando a consulta SQL para atualizar a senha no banco de dados
      $stmt = $this->conn->prepare("UPDATE cadastro SET
        passw = :passw
        WHERE id = :id
      ");

      // Substituindo os parâmetros na consulta SQL pelos valores do objeto $user
      $stmt->bindParam(":passw", $user->passw);
      $stmt->bindParam(":id", $user->id);

      // Executando a consulta SQL
      $stmt->execute();

      // Redirecionar e apresentar a mensagem de sucesso
      $this->message->setMessage("Senha alterada com sucesso!", "success", "../profile.php");

    }

  }