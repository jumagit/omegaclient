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



         //end of functions
     });