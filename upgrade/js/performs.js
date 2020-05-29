$('document').ready(function() {
        if(load_graphics){
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: centre_pie_chart_labels,
                datasets: [{
                backgroundColor: [
                    "#D50000",
                    "#6A1B9A",
                    "#AD1457",
                    "#4527A0",
                    "#00695C",
                    "#D84315",
                    "#4E342E",
                    "#E65100",
                    "#37474F"
                ],
                data: centre_pie_chart_values
                }]
            }, options: {
                responsive: true,
                legend: {
                position: 'top',
                },
                animation: {
                animateScale: true,
                animateRotate: true
                }
            }
            });
        }
        
        if(so1){
            var canvas1 = $('#strategic_one')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
                type: 'horizontalBar',
                data: {
                labels: objective,
                datasets: [{
                    label: 'strategic objective one',
                    data: objectiv_value,
                    backgroundColor: ["#D50000"],
                    borderColor: ["#D50000"],
                    borderWidth: 2
                }]
                },
                options: {
                responsive: true,
                scales: {
                    xAxes: [{
                    ticks: {
                        maxRotation: 90,
                        minRotation: 80,
                        stacked: true
                    }
                    }],
                    yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stacked: true
                    }
                    }]
                }
                }
            });
        }

        if(so2){
            var canvas1 = $('#strategic_two')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
                type: 'horizontalBar',
                data: {
                  labels: objective_2,
                  datasets: [{
                    label: 'strategic objective two',
                    data: objectiv_value_2,
                    backgroundColor: centre_color,
                    borderColor: centre_color,
                    borderWidth: 1
                  }]
                },
                options: {
                  responsive: true,
                  scales: {
                    xAxes: [{
                      ticks: {
                        maxRotation: 90,
                        minRotation: 80,
                        stacked: true
                      }
                    }],
                    yAxes: [{
                      ticks: {
                        beginAtZero: true,
                        stacked: true
                      }
                    }]
                  }
                }
              });
        }
        /////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////
        if(so3){
            var canvas1 = $('#strategic_three')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
                type: 'horizontalBar',
                data: {
                  labels: objective_3,
                  datasets: [{
                    label: 'strategic objective two',
                    data: objectiv_value_3,
                    backgroundColor: centre_color,
                    borderColor: centre_color,
                    borderWidth: 1
                  }]
                },
                options: {
                  responsive: true,
                  scales: {
                    xAxes: [{
                      ticks: {
                        maxRotation: 90,
                        minRotation: 80,
                        stacked: true
                      }
                    }],
                    yAxes: [{
                      ticks: {
                        beginAtZero: true,
                        stacked: true
                      }
                    }]
                  }
                }
              });
        }
        if(so4){
            var canvas1 = $('#strategic_four')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
              type: 'horizontalBar',
              data: {
                labels: objective_4,
                datasets: [{
                  label: 'strategic objective four',
                  data: objectiv_value_4,
                    backgroundColor: centre_color,
                    borderColor: centre_color,
                  borderWidth: 2
                }]
              },
              options: {
                responsive: true,
                scales: {
                  xAxes: [{
                    ticks: {
                      maxRotation: 90,
                      minRotation: 80,
                      stacked: true
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      beginAtZero: true,
                      stacked: true
                    }
                  }]
                }
              }
            });
        }
    //}

});
