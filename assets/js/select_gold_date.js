$(document).ready(function(){
		$('#gold_date').change(function(){
			var selDate = $(this).val();
			//console.log(selDate);
			$.ajax({
				url: "index/drop_down_data",		
				async: false,			
				type: "POST",					
				data: "gold_date="+selDate,		
				dataType: "json",				
				success: function chart(data) {
					var chart = new Highcharts.Chart({
		            chart: {
		                renderTo: 'current_gold',
		                type: 'column'
		            },
		            plotOptions: {
		          column: {
		                
		            dataLabels: {
		                enabled: true,
		            style: {
		                fontWeight: 'light'
		                }
		               }
		          }
				},	
		            title: {
		                text: ' Prices of Gold & Silver in NRs. (per 10 gm)'
		            },
            credits: {
            enabled: true,
              position: {
              align: 'left',
              x: 20
              },
              href:'http://www.negosida.com.np',
              text: 'Data from negosida.com.np'
            },
		            xAxis: {
		                title: {
		                    text: 'metal'
		                },
		               categories: [""]
		            },
		            yAxis: {
		                type: 'logarithmic',
		                title: {
		                    text: 'Price in NRs.'
		                }
		            },
		            tooltip: {
		                formatter: function() {
		                    return '<b>' + this.series.name + '</b><br />'+
		                    this.x + ': ' + this.y;
		                }
		            },
		            legend: {
		                align: 'center'
		            },
		            series: data
		        });
				}
			});
		});
});