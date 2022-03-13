$(function () {

	$('.datepicker').datepicker();

    var myChart = echarts.init($('#sincos')[0]);
    var option = {
        title: {
            text: 'echarts 入门示例'
        },
        tooltip: {
        },
        legend: {
            data: [
                '销量'
            ]
        },
        xAxis: {
            data: [
                'Hello', 'World', 'Hahaha~~~', 'skr',
            ]
        },
        yAxis: {
        },
        series: [
            {
                name: '销量',
                type: 'bar',
                data: [
                    5, 6, 20, 32, 10, 41, 0, 13
                ]
            }
        ]
    };
    myChart.setOption(option);
});
