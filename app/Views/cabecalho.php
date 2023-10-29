<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= url_base('/assets/css/estilo.css')?>"> 
    <script src="<?= url_base('/assets/js/script.js')?>"></script>

    <script>
        function url_base( uri = ''){
            return " <?= url_base()?>"+uri;
        }
    </script>
</head>
<body>
    <div class="container"> <!--container--> 
        
        <div class="cabecalho">
            <div class="nome-sistema"><?=APP_NAME?></div>
            <div class="nome-usuario">
                <span>Raimunda Nonata Costa Lima</span>
                <a href="" class="btn">Sair</a>
            </div>
        </div>

        <div class="conteudo">
            <div class="menu-principal">
                <a href="<?= url_base('')?>" class="btn">Pedidos</a>
                <a href="<?= url_base('/cliente')?>" class="btn">Cliente</a>
                <a href="<?= url_base('/cardapio')?>" class="btn">Cardápio</a>
                <a href="<?= url_base('/usuario')?>" class="btn">Usuários</a>
            </div>

            <div class="div titulo-pagina">
               <?=$titulo?>
            </div>

            <div class="pagina">