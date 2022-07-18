<div class="row">
    <div class="column_left">
        <div class="row">
            <article class="graphic widget_large">
                <div class="graphic_main">
                    <header>
                        <h3><i class="fas fa-chart-bar"></i> Controle</h3>
                    </header>
                    <div class="graphic_content" id="control"></div>
                </div>
            </article>
        </div>
        <div class="row">
            <article class="widget_receive widget_small">
                <div class="widget_receive_header widget_row">
                    <i class="far fa-calendar-plus"></i>
                    <h3>A receber:</h3>
                </div>
                <div class="widget_receive_main widget_row">
                    <div class="receive_title column_left">
                        <p>Salário <i class="fas fa-exclamation-circle"></i></p>
                        <small>Em 26 dias</small>
                    </div>
                    <div class="widget_receive_value column_right">
                        <p>R$ 1.000,00</p>
                        <i class="far fa-thumbs-up"></i>
                    </div>
                </div>
                <div class="widget_receive_footer widget_row">
                    <p>+ Receitas</p>
                </div>
            </article>

            <article class="spend widget_small">
                <div class="spend_header widget_row">
                    <i class="far fa-calendar-minus"></i>
                    <h3>A pagar:</h3>
                </div>
                <div class="spend_main widget_row">
                    <div class="spend_title column_left">
                        <p>Carro <i class="fas fa-exclamation-circle"></i></p>
                        <small>Em 26 dias</small>
                    </div>
                    <div class="spend_value column_right">
                        <p>R$ 1.000,00</p>
                        <i class="far fa-thumbs-up"></i>
                    </div>
                </div>
                <div class="spend_footer widget_row">
                    <p>+ Despesas</p>
                </div>
            </article>
        </div>
    </div>

    <div class="column_right">
        <div class="row">
            <article class="more_receive widget">
                <p><i class="fas fa-plus-circle"></i>Receitas</p>
            </article>
            <article class="more_spend widget">
                <p><i class="fas fa-plus-circle"></i>Despesas</p>
            </article>
        </div>

        <div class="row">
            <article class="balance widget_large">
                <i class="back_icon far fa-check-circle"></i>
                <div class="balance_header">
                    <p><i class="fas fa-wallet"></i>Balanço</p>
                </div>
                <div class="balance_general">
                    <h3><i class="far fa-money-bill-alt"></i>Saldo geral</h3>
                    <p>R$ 2350,00</p>
                </div>
                <div class="balance_main widget_row">
                    <div class="balance_receive column_left">
                        <h3><i class="far fa-calendar-plus"></i>Receitas</h3>
                        <p>R$ + 6000,00</p>
                    </div>
                    <div class="balance_spend column_right">
                        <h3><i class="far fa-calendar-minus"></i>Despesas</h3>
                        <p>R$ - 3650,00,00</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

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
            spacingRight: 5,
            height: (9 / 16 * 100) + '%',
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
            data: [3, 1, 5, 6, 9],
            color: '#0f9589',
            lineColor: '#15afa5'
        }, {
            name: 'Despesas',
            data: [4, 7, 0, 3, 10],
            color: '#cc3838',
            lineColor: '#ea7d7d'
        }]
    });

</script>
