<section class="app_wallets row">
    <div class="column">
        <div class="row">
            <div class="wallet_create widget_large gradient-purple gradient">
                <h2 class="fas fa-exclamation-circle"></h2>
                <h3>Crie e gerencie suas carteiras</h3>
                <p>Organize suas contas de diferentes fontes como <b>Minha Casa</b> para PF, <b>Minha Empresa</b>
                    para
                    PJ, ou ainda <b>Cartão 6431</b> para organizar cartões. Controle tudo...</p>
                <span class="create_wallet" id="create_wallet"><i
                            class="fas fa-plus-circle"></i>Adicionar Carteira</span>

                <article class="wallet_add gradient-blue gradient widget_large">
                    <p>Insira o nome da sua nova carteira, como <b>Minha Casa</b>, <b>Minha Empresa</b>, <b>Cartão
                            5546</b>...
                        e tudo pronto!</p>
                    <form action="#" method="post" autocomplete="off">
                        <input type="text" name="wallet_name" placeholder="Ex: Casa, Empresa, Cartão 5546" required/>
                        <button class="add_wallet"><i class="fas fa-check-circle"></i> Abrir Carteira</button>
                    </form>
                    <span class="exit_add_wallet"><i class="fas fa-sign-out-alt"></i>fechar</span>
                </article>
            </div>

        </div>
    </div>
    <div class="column">
        <div class="row">
            <article class="wallet widget_large gradient gradient-darck-blue" id="new_wallet">
                <i class="wallet_delete_icon fas fa-times-circle"></i>
                <h2 class="fas fa-wallet"></h2>
                <input data-walletedit="" type="text" name="wallet" value="SANTANDER">
                <h3 class="wallet_balance">R$ 1.400,00</h3>
                <p class="wallet_income">Receitas: R$ 5.000,00</p>
                <p class="wallet_expense">Despesas: R$ 3.600,00</p>

                <article class="wallet_delete widget_large gradient gradient-yellow">
                    <i class="wallet_delete_alert fas fa-exclamation-triangle"></i>
                    <h3>ATENÇÃO:</h3>
                    <p>Ao deletar uma carteira todos as contas lançadas nesta serão perdidas. Tem certeza que deseja deletar a carteira?</p>
                    <span class="wallet_delete_confirm"><i class="fas fa-exclamation-triangle"></i>Sim, <b>DELETAR!</b></span>

                    <span class="wallet_delete_skip"><i class="fas fa-sign-out-alt"></i>fechar</span>
                </article>
            </article>
        </div>
    </div>
</section>

<script>
    $(function () {
        /* WALLET CREATE */

        $(".create_wallet").click(function () {
            $(".wallet_add").fadeIn(100);
        });

        $(".exit_add_wallet").click(function () {
            $(".wallet_add").fadeOut(100);
        });

        $(".wallet_delete_icon").click(function () {
            $(".wallet_delete").fadeIn(100);
        });

        $(".wallet_delete_skip").click(function () {
            $(".wallet_delete").fadeOut(100);
        });
    });
</script>