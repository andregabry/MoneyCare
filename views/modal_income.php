<!-- MODAL MORE RECEIVE -->

<div class="app_modal_box">
        <article class="widget_modal">
            <i class="modal_close fas fa-times-circle"></i>
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
                    <input class="radius" type="number" value="1" min="1" max="420" placeholder="1 parcela"
                           name="enrollments">
                </label>

                <button class="btn radius transition icon-check-square-o">
                    Lançar Receita
                </button>
            </form>
        </article>
</div>