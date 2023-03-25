<?php
session_start();
include_once('assets/cabecalho.php');
include_once('assets/rodape.php');
include('config/conexao.php');
// include_once("config/seguranca.php");
// seguranca_adm();
// $consulta = "SELECT * FROM clientes ";
// $resultado = mysqli_query($conn, $consulta);
?>


<div class="container">
            <div class="modal-header ">
                <h4 class="modal-title" id="exampleModalLabel">Formulário de Cadastro</h4>

                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>


            <!-- ALERTA PARA ERRO DE PREENCHIMENTO DE FORMULARIO -->
            <!-- <div class="alert alert-danger d-none fade show m-3" role="alert">
                <strong>ERRO!</strong> - <strong>Preencha o campo <span id="campo-erro"></span></strong>!
                <span id="msg"></span>
            </div> -->

            <div class="modal-body">
                <form  method="POST" action="forms_insert.php" id="insert_form">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-nome" class="col-form-label">Nome</label>
                            <input type="text" name="nome" id="nome" maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="email" name="email" id="email" maxlength="50" class="form-control -10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Endereço - Rua</label>
                            <input type="text" name="rua" id="rua" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="numero" maxlength="50" class="form-control -10">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="complemento" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="cep" maxlength="50" class="form-control -10 border border-warning" onblur="pesquisacep(this.value);">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="cidade" maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="uf" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10" required>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-assunto" class="col-form-label">Assunto</label>
                            <input type="text" name="assunto" id="assunto" maxlength="50" class="form-control -10" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cargo" class="col-form-label">Cargo</label>
                            <input type="text" name="cargo" id="cargo" maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-partido" class="col-form-label">Partido</label>
                            <input type="text" name="partido" id="partido" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="nascimento" class="form-control -10">
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Operador</label>
                            <input type="text" name="operador" id="operador" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                        </div> -->
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" id="data_cadastro" value="<?php echo date('d/m/Y - H:i:s') ?>">
                        </div>
                        <!-- <div class="col-md-4 col-sm-12"> -->

                        <!-- <label for="recipient-situacao" class="col-form-label">Situação</label>
                        <select class="form-control form-select-lg mb-5 select2" name="situacao" id="situacao" aria-label=".form-select-lg example">
                            <option value="Pendente">Pendente</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                            <option value="Cancelado">Cancelado</option>

                        </select> -->
                       
                        </div>
                    </div>

            </div>
            
            <div class="container">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="btn-cadastrar">Salvar</button>
            </div>

            </form>

        <!-- <div class="m-2 col-md-8 col-sm-8 alert alert-primary ">
            Informe o CEP e tecle [ ENTER ] para autopreencher o endereço !
        </div> -->
</div>

<script>
    // ================================ FUNÇÃO PARA MASCARA DE TELEFONE =============================================
    function mask(o, f) {
        setTimeout(function() {
            var v = telefone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function telefone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, ""); //limpa o campo se começar com ZERO (0)
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

    // ================================ FUNÇÃO PARA MASCARA DE NASCIMENTO =============================================
    $(document).ready(function() {
        $("#nascimento").mask("99/99/9999");
    });

</script>
