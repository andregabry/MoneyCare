<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.svg">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Money Care</title>
</head>
<body>

<div class="background_sidebar"></div>
<div class="ajax"></div>
<div class="background_modal" id="background_modal"></div>

<div class="app">
    <div class="app_sidebar" data-mobilemenu="close">
        <div class="sidebar_brand">
            <img src="assets/img/logo.svg">
            <div class="brand_icons">
                <i class="icon_notify icon-bell-o"><small class="notify_quantity">3</small></i>
                <i class="icon_profile far fa-user-circle"></i>
            </div>
        </div>
        <div class="sidebar_user">
            <img src="assets/img/profile.JPG">
            <h3>André gabry</h3>
            <span>andre.gabry@icloud.com</span>
        </div>
        <div class="sidebar_map">
            <span>Dashboard</span>
            <small>Visão geral do sistema</small>
        </div>
        <div class="sidebar_menu">
            <a class="j_load active" href="dashboard" title="Dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a class="j_load" href="wallets" title="Carteiras"><i class="fas fa-wallet active"></i> Carteiras</a>
            <a class="j_load" href="receive" title="Receber"><i class="far fa-calendar-plus"></i> Receber</a>
            <a class="j_load" href="spend" title="Pagar"><i class="far fa-calendar-minus"></i> Pagar</a>
            <a class="j_load" href="fixed" title="Fixas"><i class="fas fa-people-arrows"></i> Fixas</a>
            <a class="j_load" href="signature" title="Assinatura"><i class="fas fa-file-signature"></i> Assinatura</a>
            <a class="j_load" href="support" title="Suporte"><i class="fas fa-medkit"></i> Suporte</a>
        </div>
    </div>
    <div class="app_main">
        <header class="app_header">
            <i class="menu_toggle fa fa-bars"></i>
            <div class="wallets">
                <i class="fas fa-wallet"></i>
                <p>Saldo geral</p>
            </div>
        </header>
        <main class="app_content">
            <?php require __DIR__ . "/views/dashboard.php"; ?>
        </main>
    </div>
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/grafic.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
