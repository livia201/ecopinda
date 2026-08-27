<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "../../classe/hoteis.php";

$hotel = new Hotel();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hotel->cadastrar(
        $_POST['nome'],
        $_POST['endereco'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['cep'],
        $_POST['telefone'],
        $_POST['email'],
        $_POST['quantidade_quartos'],
        $_POST['possui_wifi'],
        $_POST['possui_estacionamento']
    );

    header("Location: ../hoteis.php");
    exit;
}

include "../../includes/head.php";
include "../../includes/header.php";

?>

<link rel="stylesheet" href="../../assets/css/style_hoteis.css">

<div class="formulario-container">

    <div class="formulario-hotel">

        <h2>Cadastrar Hotel</h2>

        <form method="POST">

            <div class="formulario-linha">

                <div class="campo">
                    <label for="nome">Nome do Hotel</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        required
                    >
                </div>

                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input
                        type="text"
                        id="cidade"
                        name="cidade"
                        required
                    >
                </div>

            </div>

            <div class="campo">

                <label for="endereco">Endereço</label>

                <input
                    type="text"
                    id="endereco"
                    name="endereco"
                    required
                >

            </div>

            <div class="formulario-linha">

                <div class="campo">

                    <label for="estado">Estado</label>

                    <input
                        type="text"
                        id="estado"
                        name="estado"
                        required
                    >

                </div>

                <div class="campo">

                    <label for="cep">CEP</label>

                    <input
                        type="text"
                        id="cep"
                        name="cep"
                        required
                    >

                </div>

            </div>

            <div class="formulario-linha">

                <div class="campo">

                    <label for="telefone">Telefone</label>

                    <input
                        type="text"
                        id="telefone"
                        name="telefone"
                    >

                </div>

                <div class="campo">

                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                    >

                </div>

            </div>

            <div class="formulario-linha">

                <div class="campo">

                    <label for="quantidade_quartos">
                        Quantidade de Quartos
                    </label>

                    <input
                        type="number"
                        id="quantidade_quartos"
                        name="quantidade_quartos"
                        min="1"
                    >

                </div>

                <div class="campo">

                    <label for="possui_wifi">
                        Possui Wi-Fi?
                    </label>

                    <select
                        id="possui_wifi"
                        name="possui_wifi"
                        required
                    >
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>

                </div>

            </div>

            <div class="campo">

                <label for="possui_estacionamento">
                    Possui Estacionamento?
                </label>

                <select
                    id="possui_estacionamento"
                    name="possui_estacionamento"
                    required
                >
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>

            </div>

            <div class="botoes-formulario">

                <a
                    href="../hoteis.php"
                    class="botao-voltar"
                >
                    Voltar
                </a>

                <button
                    type="submit"
                    class="botao-salvar"
                >
                    Salvar Hotel
                </button>

            </div>

        </form>

    </div>

</div>

<?php

include "../../includes/footer.php";

?>
