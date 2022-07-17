<!-- MODAL NOTIFY ON HEADER BRAND -->

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


<!-- MODAL PROFILE USER ON HEADER BRAND -->

<article class="profile" id="profile">
    <div class="profile_header column">
        <div class="profile_header_avatar widget_row">
            <img src="assets/img/profile.JPG">
        </div>
        <div class="profile_header_content widget_row">
            <div class="column">
                <h4>André Gabry</h4>
                <p>andre.gabry@icloud.com</p>
            </div>
        </div>
    </div>
    <div class="profile_content widget_row">
        <div class="column">
            <p><i class="far fa-user-circle"></i>Perfil</p>
            <p><i class="fas fa-cog"></i>Configurações</p>
        </div>
    </div>
    <div class="profile_footer widget_row">
        <p><i class="fas fa-door-open"></i>Sair</p>
    </div>
</article>

<!-- MODAL ADD WALLETS ON WALLET APP -->

<div class="wallet_overlay" id="wallet_add">
    <div class="widget_small">
        <p>Insira o nome da sua nova carteira, como <b>Minha Casa</b>, <b>Minha Empresa</b>, <b>Cartão 5546</b>...
            e tudo pronto!</p>
        <form action="" method="post" autocomplete="off">
            <input type="text" name="wallet_name" placeholder="Ex: Casa, Empresa, Cartão 5546" required/>
            <button class="form_btn icon-check gradient radius transition gradient-blue gradient-hover">Abrir
                Carteira
            </button>
        </form>
        <span class="wallet_overlay_close"><i class="fas fa-times-circle"></i>fechar</span>
    </div>
</div>