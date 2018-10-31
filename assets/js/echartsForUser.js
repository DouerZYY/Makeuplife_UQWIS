// JavaScript Document

jQuery(function($) {
        require.config({
            paths: {
                echarts: 'http://echarts.baidu.com/build/dist'
            }
        });
        
        require(
            [
                'echarts',
                'echarts/chart/bar' // 使用柱状图就加载bar模块，按需加载
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
                
                option = {
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['8-23','8-24','8-25','8-26','8-27','8-28','8-29']
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value}'
            }
        }
    ],
    series : [
        {
            name:'最高气温',
            type:'line',
            data:[1, 2, 3],
            markPoint : {
                data : [
                    {type : 'max', name: '最大值'},
                    {type : 'min', name: '最小值'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: '平均值'}
                ]
            }
        },
        {
            name:'最低气温',
            type:'line',
            data:[1, 2, 3,],
            markPoint : {
                data : [
                    {name : '周最低', value : -2, xAxis: 1, yAxis: -1.5}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name : '平均值'}
                ]
            }
        }
    ]
};
                    
                 
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
		
});