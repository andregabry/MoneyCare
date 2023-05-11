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