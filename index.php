<?php 
$cliente = 'meudominio.com.br';
$value = 'R$ 0,00';
$ref = '01/2021';
$vencimento = '01/01/2021';

$pix = array( 'Key' => '[Insira sua chave Pix aqui]', 'Benif' => '[Nome do Benificiario]');
$cpf = '000.000.000-00';
$barcode = '00000 00000 00000 000000 00000 000000 0 00000000000000';
$barcodeLink = '#';

$benificiario = '[Nome do Benificiario]';
$nu = array( 'BankID' => '260', 'Name' => 'Nu Pagamentos SA','Agencia' => '0000', 'Conta' => '00000000-0', 'Benif' => '[Nome do Benificiario]', 'id' => '000.000.000-00');
$bradesco = array ( 'BankID' => '237', 'Name' => 'Banco Bradesco SA', 'Agencia' => '0000', 'Conta' => '000000-0', 'Benif' => '[Nome do Benificiario]');



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icone.png" type="image/x-icon">
    <title>Cobranças de Hospedagem - Digital Profile Solutions</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="awesome/all.min.js"></script>
    <script type="text/javascript" src="uikit.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="uikit.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="awesome/all.min.css">
    <style>
        h1, h2, h3, h4, h5, p { 
            color: #fff ;
            font-family: 'Ubuntu', sans-serif;
        }
        p { margin-bottom: 5px;}
        @media (min-width: 768px){
            .payments .offset-md-2 { margin-left: 20%; }
        }
        .payment-btn { width: auto; height: 50px; padding: 5px; border: 1px solid #1f1f1f; border-radius: 7px;  }
    </style>
</head>
<body style="background-color: #121214;">
    <div class="container" style="text-align: center; padding: 40px;">
        <div class="row" style="">
            <div class="col-md-2 offset-md-2" style="margin-bottom: 20px;">
                <figcaption style="padding: 10px;">
                    <img src="logo-branca.png" alt="Logo Digital Profile" style="max-width: 120px; height: auto;">
                </figcaption>
            </div>
            <div class="col-md-6" style="margin-bottom: 20px;">
                <h2>Olá, <?= $cliente ?>!</h2>
                <p>Evite que seu site fique fora do ar!</p>
            </div>
        </div>
    </div>

    <div class="container" style="border: 1px solid #222; border-radius: 10px; text-align: center; padding: 50px; min-height: 400px; margin-bottom: 40px;">
        <div class="row payments">
            <div class="col-md-4" style="margin-bottom: 10px;">
                <h4>Hospedagem ref.: <?= $ref ?> </h4>
            </div>
            <div class="col-md-4" style="margin-bottom: 10px;">
                <h4>Vencimento: <?= $vencimento ?></h4>
            </div>
            <div class="col-md-4" style="margin-bottom: 10px;">
                <h4>Valor: <?= $value ?></h4>
            </div>
            <div class="col-12" style="margin-top: 50px;">
                <p>Opções para pagamento:</p>
            </div>
            <div class="col-md-2 col-3 offset-md-2" style="margin-top: 20px; margin-bottom: 20px;">
                <p>Pix:</p>
                <span class="btn-pay" id="btn-pix" onclick="showPayment(1)"><img src="pix.png" alt="Pix" class="payment-btn" style=""></span>
            </div>
            <div class="col-md-3 col-5" style="margin-top: 20px; margin-bottom: 20px;">
                <p>TED/DOC:</p>
                <span class="btn-pay" id="btn-nubank" onclick="showPayment(2)"><img src="nubank.png" alt="Nubank" class="payment-btn" style=""></span>
                <span class="btn-pay" id="btn-bradesco" onclick="showPayment(3)"><img src="bradesco.png" alt="Bradesco" class="payment-btn" style=""></span>
            </div>
            <div class="col-md-2 col-3" style="margin-top: 20px; margin-bottom: 20px;">
                <p>Boleto:</p> 
                <span class="btn-pay" id="btn-boleto" onclick="showPayment(4)"><img src="boleto.png" alt="Boleto" class="payment-btn" style=""></span>
            </div>
        </div>

        <div class="content" style="text-align: center; max-width: 600px; margin: 0 auto;">
            <!-- PIX DETAILS -->
            <div id="option-1">
                <p style="color: #aaa;">Chave Pix:</p>
                <p id="11" style="display: none;"><?= $pix['Key']; ?></p>
                <div  class="tooltip-btn">
                    <button class="content-box" id="11-btn" onclick="copy('#11', '11-tool', '11-btn')" onmouseout="outFunc('11-tool', '11-btn')">
                        <span class="tooltiptext" id="11-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        <?= $pix['Key']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="12" style="display: none;"><?= $pix['Benif']; ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="12-btn" onclick="copy('#12', '12-tool', '12-btn')" onmouseout="outFunc('12-tool', '12-btn')">
                        <span class="tooltiptext" id="12-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Benificiário: <?= $pix['Benif']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
            </div>

            <!-- NUBANK DETAILS -->
            <div id="option-2">
                <p id="21" style="display: none;"><?= $nu['BankID']; ?></p>
                <div  class="tooltip-btn">
                    <button class="content-box" id="21-btn" onclick="copy('#21', '21-tool', '21-btn')" onmouseout="outFunc('21-tool', '21-btn')">
                        <span class="tooltiptext" id="21-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Banco: <?= $nu['BankID']; ?> (<?= $nu['Name']; ?>)
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="22" style="display: none;"><?= $nu['Agencia']; ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="22-btn" onclick="copy('#22', '22-tool', '22-btn')" onmouseout="outFunc('22-tool', '22-btn')">
                        <span class="tooltiptext" id="22-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Agência: <?= $nu['Agencia']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="23" style="display: none;"><?= $nu['Conta']; ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="23-btn" onclick="copy('#23', '23-tool', '23-btn')" onmouseout="outFunc('23-tool', '23-btn')">
                        <span class="tooltiptext" id="23-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Conta: <?= $nu['Conta']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="24" style="display: none;"><?= $nu['Benif']; ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="24-btn" onclick="copy('#24', '24-tool', '24-btn')" onmouseout="outFunc('24-tool', '24-btn')">
                        <span class="tooltiptext" id="24-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Benificiário: <?= $nu['Benif']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="25" style="display: none;"><?= $nu['id']; ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="25-btn" onclick="copy('#25', '25-tool', '25-btn')" onmouseout="outFunc('25-tool', '25-btn')">
                        <span class="tooltiptext" id="25-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        CPF: <?= $nu['id']; ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
            </div>

            <!-- BRADESCO DETAILS -->
            <div id="option-3">
                <p id="31" style="display: none;"><?= $bradesco['BankID'] ?></p>
                <div  class="tooltip-btn">
                    <button class="content-box" id="31-btn" onclick="copy('#31', '31-tool', '31-btn')" onmouseout="outFunc('31-tool', '31-btn')">
                        <span class="tooltiptext" id="31-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Banco: <?= $bradesco['BankID'] ?> (<?= $bradesco['Name'] ?>)
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="32" style="display: none;"><?= $bradesco['Agencia'] ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="32-btn" onclick="copy('#32', '32-tool', '32-btn')" onmouseout="outFunc('32-tool', '32-btn')">
                        <span class="tooltiptext" id="32-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Agência: <?= $bradesco['Agencia'] ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="33" style="display: none;"><?= $bradesco['Conta'] ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="33-btn" onclick="copy('#33', '33-tool', '33-btn')" onmouseout="outFunc('33-tool', '33-btn')">
                        <span class="tooltiptext" id="33-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Conta: <?= $bradesco['Conta'] ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p id="34" style="display: none;"><?= $bradesco['Benif'] ?></p>
                <div  class="tooltip-btn" >
                    <button class="content-box" id="34-btn" onclick="copy('#34', '34-tool', '34-btn')" onmouseout="outFunc('34-tool', '34-btn')">
                        <span class="tooltiptext" id="34-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        Benificiário: <?= $bradesco['Benif'] ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
            </div>

            <!-- BOLETO DETAILS -->
            <div id="option-4" style="margin-top: 20px;">
                <p style="color: #aaa;">Código de barras:</p>
                <p id="41" style="display: none;"><?= $barcode ?></p>
                <div  class="tooltip-btn">
                    <button class="content-box" id="41-btn" onclick="copy('#41', '41-tool', '41-btn')" onmouseout="outFunc('41-tool', '41-btn')">
                        <span class="tooltiptext" id="41-tool">Copiar <i class="far fa-copy" style="color: #aaa; margin-left: 5px;"></i></span>
                        <?= $barcode ?>
                        <span style="margin-left: 10px; padding-left: 15px; color: #aaa; border-left: 1px solid #222;">
                            <i class="far fa-copy" style="color: #aaa"></i> Copiar
                        </span>
                    </button>
                </div>
                <p style="font-size: 12px; color: #aaa; margin-top: 5px;">Se preferir, <a href="<?= $barcodeLink ?>" target="_blank">acesse seu boleto aqui</a></p>
            </div>
        </div>

        <div class="content" style="text-align: center; margin: 40px auto 0;">
            <p style="color: #aaa; font-size: 12px;">Encaminhar comprovante de pagamento para <a href="mailto:lucascalgarog@gmail.com">lucascalgarog@gmail.com</a> ou via <a href="https://api.whatsapp.com/send?1=pt_br&phone=5544988150952">WhatsApp</a></p>
        </div>
    </div>
    <footer style="overflow: hidden;">
        <div class="row" style="background-color: #121214;">
            <div class="container">
                <nav class="uk-navbar-container uk-navbar" uk-navbar="" style="background-color: #121214;">
                    <div class="uk-navbar-left">
                        <span style="color: #bbb; margin-right: 0px; font-size: 8px;">© Copyright 2021 Digital Profile Solutions - All Rights Reserved</span>
                    </div>
                    <div class="uk-navbar-right">
                        <span style="color: #bbb; margin-right: 0px; font-size: 8px;">Desenvolvido por:</span>
                        <a class="uk-navbar-item" href="https://www.instagram.com/lucasec.dev/" target="_blank" style="text-decoration: none; min-height: 50px">
                            <img src="icone.png" class="" style="max-height: 30px;">
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </footer>
</body>
<script>
    function showPayment(id) {
        var element = document.getElementById('option-'+id);
        for(i = 1; i < 5; i++){
            if(i != id){
                var remove = document.getElementById('option-'+i);
                remove.classList.remove("active");
            }
        }
        element.classList.add("active");
    }
    function copy(id1, id2, id3){
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(id1).text()).select();
        //$temp.val($(id2).text()).setSelectionRange(0, 99999)
        document.execCommand("copy");
        $temp.remove();
        
        var tooltip = document.getElementById(id2);
        tooltip.innerHTML = 'Texto copiado! <i class="fas fa-check" style="margin-left: 5px;"></i>';
        var btn = document.getElementById(id3);
        btn.classList.add("copied");
    }

    function outFunc(id, id2) {
        var tooltip = document.getElementById(id);
        tooltip.innerHTML = 'Copiar <i class="far fa-copy" style="margin-left: 5px;"></i>';
        var btn = document.getElementById(id2);
        btn.classList.remove("copied");
    }
</script>
<style>
    .content-box{
        font-size: 12px; color: #aaa; background-color: #111; 
        padding: 5px 10px; margin: 0 auto; 
        border: 1px solid #222;
    }
    .content > div:not(.active) {
        display: none;
    }
    .content > .active {
        display: block;
    }
    .tooltip-btn {
        position: relative;
        display: block;
        margin-top: 5px;
    }

    .tooltip-btn .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: -120%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip-btn .tooltiptext::after {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color:  transparent transparent #333 transparent;
    }

    .tooltip-btn:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
    .content-box.copied { border: 1px solid #01930d; background: #333; }
    .content-box.copied .tooltiptext { background-color: #333; }
</style>
</html>