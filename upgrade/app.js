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
        if(graph_client){
            var canvas = $('#completion-tasks')[0].getContext('2d');
            var chart = new Chart(canvas, {
                type: 'bar',
                data: {
                labels: centre_s,
                datasets: [{
                    label: 'Clients Registered',
                    data: centre_v,
                    backgroundColor: centre_colors,
                    borderColor: centre_colors,
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
        if(graph_cases){
          var canvas1 = $('#completion-tasks-cases')[0].getContext('2d');
        var chart1 = new Chart(canvas1, {
            type: 'bar',
            data: {
              labels: centre_s,
              datasets: [{
                label: 'Case load',
                data: centre_c,
                backgroundColor: centre_colors,
                borderColor: centre_colors,
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
        /////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////
        if(graph_tested){
          var canvas1 = $('#completion')[0].getContext('2d');
        var chart1 = new Chart(canvas1, {
            type: 'bar',
            data: {
              labels: centre_s,
              datasets: [{
                label: 'Achieved',
                data: centre_c,
                backgroundColor: 
                [
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
                borderColor: 
                [
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
        //////////////////////////////////////////////////////////////////////////
        /////////////////////////////////////////////////////////////////////////
        if(graph_outreach){
            var canvas1 = $('#completion-tasks-outreaches')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
              type: 'bar',
              data: {
                labels: centre_s,
                datasets: [{
                  label: 'Outreaches Held',
                  data: centre_out,
                  backgroundColor: centre_colors,
                  borderColor: centre_colors,
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
        if(graph_media){
            var canvas1 = $('#completion-tasks-media')[0].getContext('2d');
            var chart1 = new Chart(canvas1, {
              type: 'bar',
              data: {
                labels: centre_s,
                datasets: [{
                  label: 'Media Activites Held',
                  data: centre_media,
                  backgroundColor: centre_colors,
                  borderColor: centre_colors,
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
    }
    $("table.data").DataTable({
        "ordering": false
    });
    $('#example, #example2').DataTable({
        "scrollY":        "700px",
        "scrollCollapse": true,
        dom: 'BfSRrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ]
        buttons: {
            buttons: [
                {
                    extend: 'excel',
                    text: '<i class="far fa-file-excel"></i> Excel',
                    title: $('h1').text(),
                    exportOptions: {
                        columns: ':not(.no-print)'
                    },
                    footer: true
                  },
                {
                extend: 'csv',
                text: '<i class="fa fa-file-csv"></i> Csv',
                title: $('h1').text(),
                exportOptions: {
                    columns: ':not(.no-print)'
                },
                footer: true
              },
            {
                extend: 'copy',
                text: '<i class="far fa-copy"></i> Copy',
                title: $('h1').text(),
                exportOptions: {
                    columns: ':not(.no-print)'
                },
                footer: true
                
              },{
              extend: 'print',
              text: '<i class="fa fa-print"></i> Print',
              title: $('h1').text(),
              exportOptions: {
                columns: ':not(.no-print)'
              },
              footer: true,
              autoPrint: false
            }, {
              extend: 'pdf',
              text: '<i class="far fa-file-pdf"></i> PDF',
              title: $('h1').text(),
              exportOptions: {
                columns: ':not(.no-print)'
              },
              footer: true
            }],
            dom: {
              container: {
                className: 'dt-buttons'
              },
              button: {
                className: 'btn btn-primary'
              }
            }
        }
    });
    $("select").chosen();
    $('[data-toggle="tooltip"]').tooltip();
    $('#trumbowyg').trumbowyg({
        btns: [
            ['viewHTML'],
            ['formatting'],
            'btnGrp-semantic', ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            'btnGrp-justify',
            'btnGrp-lists', ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ],
        autogrow: true
    });
    $('#trumbowyg1').trumbowyg({
        btns: [
            ['viewHTML'],
            ['formatting'],
            'btnGrp-semantic', ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            'btnGrp-justify',
            'btnGrp-lists', ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ],
        autogrow: true
    });

    // DELETE LINKS
    $('a.confirm').on('click', function() {
        var link_action;
        var params = $(this).attr('href');
        //console.log(params);
        show_confirm(params);
        return false;
    });

    

    function show_confirm(link_action) {
        var r = confirm("Are you sure you want to delete this item ?");
        if (r == true) {
            //alert(link_action);
            //console.log(link_action);
            $.post(link_action, function(data) {
                //alert(data);
                //location.reload(true);
                $(location).attr("href", data);
            });
        } else {
            //alert("Operation Cancelled");
        }
    }
});

function suggest(inputString) {
    if (inputString.length == 0) {
        $('#suggestions').fadeOut();
    } else {
        $('#refNumber').addClass('load');
        $.post("auto-search.php", { queryString: "" + inputString + "" }, function(data) {
            if (data.length > 0) {
                $('#suggestions').fadeIn();
                $('#suggestionsList').html(data);
                $('#refNumber').removeClass('load');
            }
        });
    }
}

function fill(thisValue) {
    $('#refNumber').val(thisValue);
    $('#loadButton').prop('disabled', false);
    setTimeout("$('#suggestions').fadeOut();", 600);
}
/* MENU */

$(function() {
    var current = location.pathname;
    $('ul#menu-content li a').each(function() {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
});


function generatex(refNumber){
    var url = 'jc-register-client.php';
    //console.log(url);
    $('.al').empty();
    var rel = "<div class='alert alert-success alert-dismissible' role='alert'>\
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>\
    External Referral letter generated successfully. go back to client details page.<a href='case-progress.php?refNumber="+ refNumber+"'>click here to go to page</a>\
                    </div>\
            ";
           // console.log(rel);
    $('.al').append(rel);
    
};


$(function() {
    $('#Monthlyrep').attr('disabled', 'disabled');
    $('.s_startdate').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight:true,
        autoclose: true,
    }).on('changeDate', function (ev) {
            $('.e_date').datepicker('setStartDate', $(".s_startdate").val());
    });

    $('.e_date').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight:true,
        autoclose: true,
    }).on('changeDate', function (ev) {
        var start  = $(".s_startdate").val();
        var startD = new Date(start);
        var end    = $(".e_date").val();
        var endD   = new Date(end);
        var diff   = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
        
        if(diff == parseInt(30) || diff == parseInt(31))
        {
            $('#Monthlyrep').removeAttr('disabled');
            $('#Monthlyrep').css('background-color', 'green').css('color', '#fff');;

            
        }else{
            $('#Monthlyrep').attr('disabled', 'disabled');
        }     
    });

    $('#wMonthlyrep').attr('disabled', 'disabled');
    $('.ws_startdate').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight:true,
        autoclose: true,
    }).on('changeDate', function (ev) {
            $('.e_date').datepicker('setStartDate', $(".ws_startdate").val());
    });

    $('.we_date').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight:true,
        autoclose: true,
    }).on('changeDate', function (ev) {
        var start  = $(".ws_startdate").val();
        var startD = new Date(start);
        var end    = $(".we_date").val();
        var endD   = new Date(end);
        var diff   = parseInt((endD.getTime()-startD.getTime())/(24*3600*1000));
        
        if(diff == parseInt(7))
        {
            $('#wMonthlyrep').removeAttr('disabled');
            $('#wMonthlyrep').css('background-color', 'green').css('color', '#fff');;
            
            
        }else{
            $('#wMonthlyrep').attr('disabled', 'disabled');
        }     
    });

});


$(function(){
    $('#adrbtn').attr('disabled', 'disabled');
    $('select[name="actionperformed"]').on('change', function(){
        var value          = $("select[name='actionperformed']").val();
        var status_actions = value.split('|');
        var next_action    = status_actions[0];
        var status         = status_actions[1];
        console.log(status_actions);
        if(value == ""){
            $('#adrbtn').attr('disabled', 'disabled');
        }else{
            $('#adrbtn').removeAttr('disabled');
        }
        if(next_action == 'sendmediationletters')
        {
            $('input[name="nextaction"]').val("Send mediation letters");
        }
        if(next_action == 'mediationsession')
        {
            $('input[name="nextaction"]').val("Mediation session");
        }
        if(next_action == 'mediationsession')
        {
            $('input[name="nextaction"]').val("Mediation session");
        }


        if(next_action == 'recommendforclosure')
        {
            $('input[name="nextaction"]').val("Recommend for closure");
        }

        if(next_action == 'recommendforclosure' && status == 'Mediation successfull'){
            $('#up').remove();
            $('#recommendlit').empty();
            $('#picker1').attr('readonly', true);
            $('#mo').attr('readonly', true);
            $('#adrbtn').removeAttr('disabled');
             // html = '<div class="col-md-12" id="up"><div class="form-group"><label for="">Upload MOU</label><input id="file-2" data-show-upload="false" class="file" name="userfile" placeholder="MOU File..." type="file" multiple data-min-file-count="1"></div></div>';
             // $('#uploadview').append(html);
             $('#file-2').fileinput('refresh');
        }else{
            $('#mo').attr('readonly', false);
            $('#picker1').attr('readonly', false);
            $('#up').remove();
        }

        if(next_action == 'closefile')
        {
            $('input[name="datevisit2"]').attr('readonly', true);
            $('input[name="nextaction"]').val("Close File");
        }
        if(next_action == 'recommendforlitigation')
        {
            $('input[name="datevisit2"]').attr('readonly', true);
            $('input[name="nextaction"]').val("Recommend for litigation");
        }

        if(next_action == 'followupmou')
        {
            $('input[name="nextaction"]').val("Follow up Mou");
            $('#up').remove();
            html = '<div class="col-md-12" id="up"><div class="form-group"><label for="">Upload MOU</label><input id="file-2" data-show-upload="false" class="file" name="userfile" placeholder="MOU File..." type="file" multiple data-min-file-count="1"></div></div>';
             $('#uploadview').append(html);
             $('#file-2').fileinput('refresh');
        }

    });
    $('textarea[name="outCome"]').keydown(function(){
        var text_length = $('textarea[name="outCome"]').val().length;
        if(text_length < parseInt(50))
        {
            $('#adrbtn').attr('disabled', 'disabled');

        }else{
            $('#adrbtn').removeAttr('disabled');
        }
    });
    $('textarea[name="Outcome"]').keydown(function(){
        var text_length1 = $('textarea[name="Outcome"]').val().length;
        var text_length2 = $('textarea[name="Reason"]').val().length;
        if(text_length1 < parseInt(50))
        {
            if(text_length2 < parseInt(50))
            {
                $('#adrbtn').attr('disabled', 'disabled');
            }else{
                $('#adrbtn').removeAttr('disabled');
            }
        }else{
            $('#adrbtn').removeAttr('disabled');
        }
    });
    $('textarea[name="Reason"]').keydown(function(){
        var text_length1 = $('textarea[name="Outcome"]').val().length;
        var text_length2 = $('textarea[name="Reason"]').val().length;
        if(text_length2 < parseInt(50))
        {
            if(text_length2 < parseInt(50)){
                $('#adrbtn').attr('disabled', 'disabled');
            }else{
                $('#adrbtn').removeAttr('disabled');
            }
            

        }else{
            $('#adrbtn').removeAttr('disabled');
        }
    });

    $('select[name="Outcome"]').on('change', function(){
        if($('select[name="Outcome"]').val() == 'On going'){
            
            $('#picker1').attr('readonly', false);
        }else{
            $('#picker1').attr('readonly', true);
        }
    });

    //$('')


});