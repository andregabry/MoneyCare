<!-- MODAL NOTIFY ON HEADER BRAND -->

<article class="notify" id="notify">
    <div class="notify_header">
        <div class="header_icons">
            <i class="header_x fas fa-times"></i>
            <h3>Notificações</h3>
        </div>
        <i class="fas fa-envelope-open"></i>
    </div>
    <div class="notify_content">
        <?php
        for ($i = 0; $i <= 40; $i++) { ?>
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
        <?php
        } ?>
    </div>
</article>


<!-- MODAL PROFILE USER ON HEADER BRAND -->

<article class="profile" id="profile">
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


<!-- MODAL MORE SPEND -->

<article class="modal_more_spend">
    <i class="modal_close fas fa-times-circle"></i>
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
                <input class="radius mask-money" type="text" name="value" required="" placeholder="0,00"
                       maxlength="22">
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
            <input class="radius" type="number" value="1" min="1" max="420" placeholder="1 parcela"
                   name="enrollments">
        </label>

        <button class="btn radius transition icon-check-square-o">
            Lançar Despesa
        </button>
    </form>
</article>
