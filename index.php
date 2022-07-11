<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Money Care</title>
</head>
<body>


<div class="app">
    <div class="app_sidebar">
        <div class="sidebar_brand">
            <img src="assets/img/logo.svg">
            <div class="brand_icons">
                <i class="icon_notify icon-bell-o"><small>3</small></i>
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
            <a href="#" title="Dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a href="#" title="Carteiras"><i class="fas fa-wallet active"></i> Carteiras</a>
            <a href="#" title="Receber"><i class="far fa-calendar-plus"></i> Receber</a>
            <a href="#" title="Pagar"><i class="far fa-calendar-minus"></i> Pagar</a>
            <a href="#" title="Fixas"><i class="fas fa-people-arrows"></i> Fixas</a>
            <a href="#" title="Assinatura"><i class="fas fa-file-signature"></i> Assinatura</a>
            <a href="#" title="Suporte"><i class="fas fa-medkit"></i> Suporte</a>
        </div>
    </div>
    <div class="app_main">
        <header class="app_header">
            <i class="menu_toggle fa fa-bars"></i>
            <div>
                <i class="icon_search fa fa-search"></i>
                <i class="icon_bookmark far fa-bookmark"></i>
                <i class="icon_comment far fa-comment-dots"></i>
            </div>
        </header>
        <main class="app_content">
            <?php include __DIR__ . "/views/dashboard.php"?>
        </main>
    </div>
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/highcharts.js"></script>
<script>

    Highcharts.setOptions({
        lang: {
            decimalPoint: ',',
            thousandsSep: '.'
        }
    });
    Highcharts.chart('control', {
        chart: {
            type: 'areaspline',
            spacingBottom: 0,
            spacingTop: 5,
            spacingLeft: 0,
            spacingRight: 0,
            height: '360px'
        },
        title: null,
        xAxis: {
            categories: ["Jan", "Fev", "Mar", "Abr", "Mai"]
        },
        yAxis: {
            title: null,
        },
        tooltip: {
            shared: true,
            valueDecimals: 2,
            valuePrefix: 'R$ '
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'Receitas',
            data: [3,1,5,6,9],
            color: '#0f9589',
            lineColor: '#15afa5'
        }, {
            name: 'Despesas',
            data: [4,7,0,3,10],
            color: '#cc3838',
            lineColor: '#ea7d7d'
        }]
    });

</script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
