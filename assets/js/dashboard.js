$.ajax({
url: 'assets/api/dashboard.php?vendedor='+$("#idvendedor").val(),
async: true,
contentType: "application/json",
   success: function(data) {
	   var obj=JSON.parse(data);

//objetivoMinorista
var optionsobjetivoMinorista = {
            chart: {
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '70%',
                    }
                },
            },
            series: [obj[0].minorista],
            labels: ['Objetivo'],

        }

var chart = new ApexCharts(document.querySelector("#objetivoMinorista"), optionsobjetivoMinorista);

chart.render();

//objetivoMayorista
var optionsobjetivoMayorista = {
            chart: {
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '70%',
                    }
                },
            },
            series: [obj[0].mayorista],
            labels: ['Objetivo'],

        }

var chart = new ApexCharts(document.querySelector("#objetivoMayorista"), optionsobjetivoMayorista);

chart.render();

//misventasMinorista
var misventasMinorista = {
            chart: {
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '70%',
                    }
                },
            },
            series: [obj[0].vendedorMinorista],
            labels: ['Mis ventas'],

        }

var chart = new ApexCharts(document.querySelector("#misventasMinorista"), misventasMinorista);

chart.render();

  

   //misventasMayorista
   var misventasMayorista = {
               chart: {
                   type: 'radialBar',
               },
               plotOptions: {
                   radialBar: {
                       hollow: {
                           size: '70%',
                       }
                   },
               },
               series: [obj[0].vendedorMayorista],
               labels: ['Mis ventas'],

           }

   var chart = new ApexCharts(document.querySelector("#misventasMayorista"), misventasMayorista);

   chart.render();

      }

 });
