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

<!-- MODAL MORE RECEIVE -->

<div class="app_modal_box app_modal_income" style="display: block;" wfd-invisible="true">
    <p class="title icon-calendar-check-o">Nova Receita:</p>
    <form class="app_form" action="https://www.cafecontrol.com.br/app/launch" method="post">
        <input type="hidden" name="currency" value="BRL" wfd-invisible="true">
        <input type="hidden" name="type" value="income" wfd-invisible="true">

        <label>
            <span class="field icon-leanpub">Descrição:</span>
            <input class="radius" type="text" name="description" placeholder="Ex: Aluguel" required="">
        </label>

        <div class="label_group">
            <label>
                <span class="field icon-money">Valor:</span>
                <input class="radius mask-money" type="text" name="value" required="" placeholder="0,00" maxlength="22">
            </label>

            <label>
                <span class="field icon-filter">Data:</span>
                <input class="radius masc-date" type="date" name="due_at" required="">
            </label>
        </div>

        <div class="label_group">
            <label>
                <span class="field icon-briefcase">Carteira:</span>
                <select name="wallet_id">
                    <option value="2606">⦿ C6BANC</option>
                    <option value="2605">⦿ SANTANDER</option>
                </select>
            </label>

            <label>
                <span class="field icon-filter">Categoria:</span>
                <select name="category_id">
                    <option value="1">⦿ Salário</option>
                    <option value="3">⦿ Empréstimo</option>
                    <option value="2">⦿ Investimento</option>
                    <option value="4">⦿ Outras receitas</option>
                </select>
            </label>
        </div>

        <div class="label_check">
            <p class="field icon-exchange">Repetição:</p>
            <label class="check" data-checkbox="true"
                   data-slideup=".app_modal_income .repeate_item_fixed, .app_modal_income .repeate_item_enrollment">
                <input type="radio" name="repeat_when" value="single" checked="" wfd-invisible="true"> Única
            </label>

            <label data-checkbox="true" data-slideup=".app_modal_income .repeate_item_enrollment"
                   data-slidedown=".app_modal_income .repeate_item_fixed">
                <input type="radio" name="repeat_when" value="fixed" wfd-invisible="true"> Fixa
            </label>

            <label data-checkbox="true" data-slideup=".app_modal_income .repeate_item_fixed"
                   data-slidedown=".app_modal_income .repeate_item_enrollment">
                <input type="radio" name="repeat_when" value="enrollment" wfd-invisible="true"> Parcelada
            </label>
        </div>

        <label class="repeate_item repeate_item_fixed" style="display: none" wfd-invisible="true">
            <select name="period">
                <option value="month">⦿ Mensal</option>
                <option value="year">⦿ Anual</option>
            </select>
        </label>

        <label class="repeate_item repeate_item_enrollment" style="display: none" wfd-invisible="true">
            <input class="radius" type="number" value="1" min="1" max="420" placeholder="1 parcela" name="enrollments">
        </label>

        <button class="btn radius transition icon-check-square-o">
            Lançar Receita
        </button>
    </form>
</div>

<!-- MODAL MORE EXPENSE -->

<div class="app_modal_box app_modal_expense">
    <p class="title icon-calendar-check-o">Nova Despesa:</p>
    <form class="app_form" action="https://www.cafecontrol.com.br/app/launch" method="post">
        <input type="hidden" name="currency" value="BRL">
        <input type="hidden" name="type" value="expense">

        <label>
            <span class="field icon-leanpub">Descrição:</span>
            <input class="radius" type="text" name="description" placeholder="Ex: Aluguel" required="">
        </label>

        <div class="label_group">
            <label>
                <span class="field icon-money">Valor:</span>
                <input class="radius mask-money" type="text" name="value" required="" placeholder="0,00" maxlength="22">
            </label>

            <label>
                <span class="field icon-filter">Data:</span>
                <input class="radius masc-date" type="date" name="due_at" required="">
            </label>
        </div>

        <div class="label_group">
            <label>
                <span class="field icon-briefcase">Carteira:</span>
                <select name="wallet_id">
                    <option value="2606">⦿ C6BANC</option>
                    <option value="2605">⦿ SANTANDER</option>
                </select>
            </label>

            <label>
                <span class="field icon-filter">Categoria:</span>
                <select name="category_id">
                    <option value="5">⦿ Alimentação</option>
                    <option value="6">⦿ Aluguel</option>
                    <option value="7">⦿ Compras</option>
                    <option value="8">⦿ Educação</option>
                    <option value="9">⦿ Entretenimento</option>
                    <option value="10">⦿ Impostos e taxas</option>
                    <option value="11">⦿ Saúde</option>
                    <option value="12">⦿ Serviços</option>
                    <option value="13">⦿ Viagen</option>
                    <option value="14">⦿ Outras despesas</option>
                </select>
            </label>
        </div>

        <div class="label_check">
            <p class="field icon-exchange">Repetição:</p>
            <label class="check" data-checkbox="true"
                   data-slideup=".app_modal_expense .repeate_item_fixed, .app_modal_expense .repeate_item_enrollment">
                <input type="radio" name="repeat_when" value="single" checked=""> Única
            </label>

            <label data-checkbox="true" data-slideup=".app_modal_expense .repeate_item_enrollment"
                   data-slidedown=".app_modal_expense .repeate_item_fixed">
                <input type="radio" name="repeat_when" value="fixed"> Fixa
            </label>

            <label data-checkbox="true" data-slideup=".app_modal_expense .repeate_item_fixed"
                   data-slidedown=".app_modal_expense .repeate_item_enrollment">
                <input type="radio" name="repeat_when" value="enrollment"> Parcelada
            </label>
        </div>

        <label class="repeate_item repeate_item_fixed">
            <select name="period">
                <option value="month">⦿ Mensal</option>
                <option value="year">⦿ Anual</option>
            </select>
        </label>

        <label class="repeate_item repeate_item_enrollment">
            <input class="radius" type="number" value="1" min="1" max="420" placeholder="1 parcela" name="enrollments">
        </label>

        <button class="btn radius transition icon-check-square-o">
            Lançar Despesa
        </button>
    </form>
</div>