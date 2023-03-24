<?php
session_start();

include('config/conexao.php');

//$id_cliente = mysqli_real_escape_string($conn, $_POST['id']);
//if ( isset($nome) || isset($email) || isset($telefone) || isset($assunto) || isset($cep) || isset($rua) || isset($numero) || isset($bairro) || isset($complemento) || isset($cidade) || isset($uf) || isset($cargo) || isset($partido) || isset($nascimento) || isset($data_cadastro)) {

    $nome = mysqli_real_escape_string($conn, ucwords(strtolower($_POST['nome'])));
    $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $assunto = mysqli_real_escape_string($conn, $_POST['assunto']);
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);
    $rua = mysqli_real_escape_string($conn, $_POST['rua']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
    $complemento = mysqli_real_escape_string($conn, $_POST['complemento']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $uf = mysqli_real_escape_string($conn, $_POST['uf']);
    $cargo = mysqli_real_escape_string($conn, $_POST['cargo']);
    $partido = mysqli_real_escape_string($conn, $_POST['partido']);
    $nascimento = mysqli_real_escape_string($conn, $_POST['nascimento']);
    $data_cadastro = mysqli_real_escape_string($conn, $_POST['data_cadastro']);


    // $nascimento = str_replace("/", "-", $nascimento);
    // $nascimento = date('Y-m-d', strtotime($nascimento));
    
    //$data_cadastro = date('Y-m-d H:i:s');


    $sql = "INSERT INTO clientes (nome, email, telefone, assunto, cep, rua, numero, bairro, complemento, cidade, uf, cargo, partido, nascimento, data_cadastro)
    VALUES ('$nome', '$email', '$telefone', '$assunto', '$cep', '$rua', '$numero', '$bairro', '$complemento', '$cidade', '$uf', '$cargo', '$partido', '$nascimento', '$data_cadastro')";
    
    function mensagemAlerta ($texto, $tipo){

        echo "<script>alert('$texto');location.href='index.php';</script>";
        
        }

    if (mysqli_query($conn, $sql)){
        mensagemAlerta("$nome, Cadastro realizado com sucesso!", 'success');

    } else
       mensagemAlerta("$nome, Error! Cadastro não realizado.", 'danger');
    


//}


