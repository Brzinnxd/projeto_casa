<?php
    if(!isset($_SESSION)){ /* $_SESSION é uma variavel seção */ /* Quando tiver o ! no isset significa não EX: !isset: não existe*/ 
        session_start();  /* isso é para começar a seção (n precisa colocar mais de uma vez) */
    }

    
?>

    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style..css">
</head>
<body>
    <div class="container text-center">
        <h1>Cadastro de Pessoas Lindas</h1>
    </div>
    <div class="container">
        <form action="" method="post"> <!-- method post -->

            <label for="">Nome:</label>
            <input class="form-control" type="text" name="bt_nome">
            <div class="mb-3">
                <label for="">Endereço:</label>
                <input class="form-control" type="text" name="bt_endereco">
            </div>
           
            <div class="mb-3">
                <label for="">Selecione o seu estado:</label>
                <select class="form-select" id="estados" name="bt_estado">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            
            <label for="">Cidade:</label>
            <input class="form-control" type="text" name="bt_cidade">
                
            <label for="">Telefone:</label>
            <input class="form-control" type="text"name="bt_telefone">
                
            <label for="">Email:</label>
            <input class="form-control" type="text"name="bt_email">

            <label for="">CPF:</label>
            <input class="form-control" type="text"name="bt_cpf">

            <label for="">Senha:</label> 
            <input required class="form-control" type="password"name="bt_senha">

            <div class="mb-3">
                <label for="">Repetir Senha:</label>
                <input required class="form-control" type="password"name="bt_repetirsenha">
            </div>
            

            <input class="btn btn-success" type="submit" value="Cadastrar">
            <input class="btn btn-danger" type="reset" value="Voltar">
            <br>
            <br>


        <?php
                
            

            if(isset($_POST["bt_nome"])){ /*  Se(existe)($_POST[]*/
                $bt_senha = $_POST["bt_senha"];    
                $bt_repetirsenha = $_POST["bt_repetirsenha"]; 
                $endereco= $_POST["bt_endereco"];
                $estado= $_POST["bt_estado"];
                $cidade= $_POST["bt_cidade"];
                $telefone= $_POST["bt_telefone"];       /* Criando Variaveis*/
                $email= $_POST["bt_email"];
                $cpf= $_POST["bt_cpf"];
                $senha= $_POST["bt_senha"];
                $rsenha= $_POST["bt_repetirsenha"];  

                if($bt_senha === $bt_repetirsenha){ 
                    
                    $_SESSION["nome"] = $_POST["bt_nome"];
                    $_SESSION["endereco"] = $_POST["bt_endereco"];
                    $_SESSION["estado"] = $_POST["bt_estado"];
                    $_SESSION["cidade"] = $_POST["bt_cidade"];
                    $_SESSION["telefone"] = $_POST["bt_telefone"];
                    $_SESSION["email"] = $_POST["bt_email"];
                    $_SESSION["cpf"] = $_POST["bt_cpf"];
                    $_SESSION["senha"] = $_POST["bt_senha"];

                    header("Location:banco.php"); /* Mudar de Página*/
                    
                    
                }else{ 
                    echo ("<div class='alert alert-danger' role='alert'>
                    Senha Incorreta!
                    </div>");
            
                }
            }
        ?>
        </form>
    </div>

</body>
</html>