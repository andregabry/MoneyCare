<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Money Care</title>
</head>
<body>

<div class="background_sidebar"></div>

<div class="app">
    <div class="app_sidebar" data-mobilemenu="close">
        <div class="sidebar_brand">
            <img src="assets/img/logo.svg">
            <div class="brand_icons">
                <i class="icon_notify icon-bell-o"><small class="notify_quantity">3</small></i>

                <div class="background_modal"></div>

                <article class="notify">
                    <div class="notify_header">
                        <div class="header_icons">
                            <i class="header_x fas fa-times"></i>
                            <h3>Notificações</h3>
                        </div>
                        <i class="fas fa-envelope-open"></i>
                    </div>
                    <div class="notify_content">
                        <?php for ($i = 0; $i <= 10; $i++) { ?>
                            <div class="notify_content_message">
                                <div class="content_avatar">
                                    <img src="assets/img/profile.JPG">
                                </div>
                                <div class="content_message">
                                    <div class="message_sender">
                                        <h4>André Gabry</h4>
                                    </div>
                                    <div class="message_content">
                                        <p>Lembrar de entrar em contato com os funcionários</p>
                                    </div>
                                    <div class="message_date">
                                        <small>14 Jul, 13:25</small>
                                    </div>
                                </div>
                                <div class="content_action">
                                    <i class="content_action_circle fas fa-circle"></i>
                                    <i class="content_action_x fas fa-times"></i>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </article>


                <i class="icon_profile far fa-user-circle"></i>


                <article class="profile">
                    <div class="profile_header widget_column">
                        <div class="profile_header_avatar widget_row">
                            <img src="assets/img/profile.JPG">
                        </div>
                        <div class="profile_header_content widget_row">
                            <div class="widget_column">
                                <h4>André Gabry</h4>
                                <p>andre.gabry@icloud.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile_content widget_row">
                        <div class="widget_column">
                            <p><i class="far fa-user-circle"></i>Perfil</p>
                            <p><i class="fas fa-cog"></i>Configurações</p>
                        </div>
                    </div>
                    <div class="profile_footer widget_row">
                        <p><i class="fas fa-door-open"></i>Sair</p>
                    </div>
                </article>


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
            <a class="j_load" href="dashboard" title="Dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a class="j_load active" href="wallets" title="Carteiras"><i class="fas fa-wallet active"></i> Carteiras</a>
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
            <img class="app_content_load" src="assets/img/load.gif" alt="Carregando" title="Carregando"/>
        </main>
    </div>
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
