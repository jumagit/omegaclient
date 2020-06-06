     jQuery(document).ready(function($) {

         client_chart();
         customer_chart();
         // admin_client();
         // admin_pie_chart();

         function client_chart() {
             $.post('php_action/client_charts.php', function(data, textStatus, xhr) {
                 //console.log(data);
                 var day = [];
                 var total = [];

                 for (var i in data) {
                     day.push(data[i].day);
                     total.push(data[i].total);
                 }

                 var chartdata = {
                     
                     labels: day,
                     datasets: [{
                         label: 'orders',
                         backgroundColor: '#FE7117',
                         borderColor: '#ff6600',
                         hoverBackgroundColor: '#FE7417',
                         hoverBorderColor: '#FE7117',
                         data: total,

                     }]

                 };

                 var graphTarget = $("#clientSales");

                 var barGraph = new Chart(graphTarget, {
                     type: 'bar',
                     data: chartdata,
                     options: {
                         scales: {
                             yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                         }
                     },
                 });

             });

         }

         function customer_chart() {
             $.post('php_action/customers_charts.php', function(data, textStatus, xhr) {
                 //console.log(data);
                 var day = [];
                 var total = [];

                 for (var i in data) {
                     day.push(data[i].day);
                     total.push(data[i].total);
                 }

                 var chartdata = {
                     labels: day,
                     datasets: [{
                         label: 'customers',
                         backgroundColor: '#002F47',
                         borderColor: '#002F47',
                         hoverBackgroundColor: '#002F47',
                         hoverBorderColor: '#FE7117',
                         data: total
                     }],
                     options: {
                         scales: {
                             yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                         }
                     }
                 };

                 var graphTarget = $("#customersC");

                 var barGraph = new Chart(graphTarget, {
                     type: 'bar',
                     data: chartdata,
                     options: {
                         scales: {
                             yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                         }
                     },
                 });

             });

         }

         //admin 


         function admin_client() {


             $.post('php_action/admin_charts.php', function(data, textStatus, xhr) {

                 var date = [];
                 var grand_total = [];
                 var prod = [];

                 for (var i in data) {
                     date.push(data[i].created_at);
                     grand_total.push(data[i].grand_total);
                     prod.push(data[i].prod);
                 }

                 var chartdata = {
                     labels: date,
                     datasets: [{
                         label: 'Total Sales',
                         fill: true,
                         lineTension: 0.5,
                         borderCapStyle: 'butt',
                         borderDash: [],
                         borderDashOffset: 0.0,
                         borderJoinStyle: 'miter',
                         pointBorderColor: "#f5b225",
                         pointBackgroundColor: "#fff",
                         pointBorderWidth: 1,
                         pointHoverRadius: 5,
                         backgroundColor: "#EBF8A4",
                         borderColor: "#35a989",
                         borderWidth: 1,
                         pointHoverBackgroundColor: "#f5b225",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 2,
                         pointRadius: 1,
                         pointHitRadius: 10,
                         data: grand_total
                     }]
                 };

                 var graphTarget = $("#adminOrders");

                 var barGraph = new Chart(graphTarget, {
                     type: 'bar',
                     data: chartdata
                 });

             });

         }


         function admin_pie_chart() {
             $.post('php_action/admin_piecharts.php', function(data, textStatus, xhr) {
                 // console.log(data);
                 var item = ['products', 'orders', 'order-items', 'categories'];
                 var total = data;


                 var pieChart = {
                     labels: item,
                     datasets: [{
                         data: [300, 180, 30, 40],
                         backgroundColor: [
                             "#35a989",
                             "#e333f2",
                             "#43a232",
                             "#9e1232",
                             "#43eee2"
                         ],
                         hoverBackgroundColor: [
                             "#35a989",
                             "#eea989",
                             "#ebeff2",
                             "#ff9012",
                             "#dd9012"
                         ],
                         hoverBorderColor: "#fff"
                     }]
                 };




                 var graphTarget = $("#admin_pie");

                 var barGraph = new Chart(graphTarget, {
                     type: 'pie',
                     data: pieChart
                 });


             })


         }

         //end of functions
     });