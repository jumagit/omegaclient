     jQuery(document).ready(function($) {



          any_text_validate = function($field, $length) {
               $("#" + $field).keyup(function() {
                    id = "#" + $field + "_" + "error";
                    var first = $(this).val();
                    if (first == '') {
                         $(id).html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your " + $field + "</small> ");
                    } else if (first.length < $length) {
                         $(id).html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i>  Your " + $field + " is too short</small> ");
                    } else {                  
                        $(id).html("<small class='h6 text-success'> <i class='fas fa-check'></i> " + $field + " is ok continue !!</small>");
                    }
               });

          }


          //any column without db



          text_validate = function($field, $length) {
               $("#" + $field).keyup(function() {
                    id = "#" + $field + "_" + "error";
                    var first = $(this).val();
                    if (first == '') {
                         $(id).html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your " + $field + "</small> ");
                    } else if (first.length < $length) {
                         $(id).html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i>  Your " + $field + " is too short</small> ");
                    } else {                  
                         $.ajax({
                         type: "POST",
                         url: "php_action/validation_all.php",
                         data: "field=" + first,
                         success: function(msg) {
                              $(id).html(msg);
                         }
                    });
                    }
               });

          }

          
//contact 

          $("#contact").on('keyup', function(event) { 
               var vall = $(this).val();                
               if (vall == '') {
                    $("#contact_error").html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your  Mobile Contact</small>");
                 } else {
                  $.ajax({
                         type: "POST",
                         url: "php_action/validation_all.php",
                         data: "contact=" + vall,
                         success: function(msg) {          
                              $("#contact_error").html(msg);
                         }
                    });
                }

          });

//end contact 

//start contact 

  $("#customerContact").on('keyup', function(event) { 
               var vall = $(this).val();                
               if (vall == '') {
                    $("#customerContact_error").html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your  Mobile Contact</small>");
                 } else {
                  $.ajax({
                         type: "POST",
                         url: "php_action/validation_all.php",
                         data: "contact=" + vall,
                         success: function(msg) {          
                              $("#customerContact_error").html(msg);
                         }
                    });
                }

          });


//end contact 
         

          //for the email

          $("#email_address").keyup(function() {
               var email = $(this).val();
               if (vall == '') {
                    $("#email_address_error").html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your  Email Address</small>");
               } else {
                    $.ajax({
                         type: "POST",
                         url: "php_action/validation_all.php",
                         data: {email:email},
                         success: function(msg) {  
                              $("#email_address_error").html(msg);
                         }
                    });
               }

          });

          //email end

          //for the email

          $("#emailAddress").keyup(function() {
               var email= $(this).val();
               if (vall == '') {
                    $("#emailAddress_error").html("<small class='h6 text-danger'> <i class='fas fa-times-circle text-danger'></i> Please enter your  Email Address</small>");
               } else {
                    $.ajax({
                         type: "POST",
                         url: "php_action/validation_all.php",
                         data: {email:email},
                         success: function(msg) {  
                              $("#emailAddress_error").html(msg);
                         }
                    });
               }

          });

          //email end






          text_validate('customer_names', 10);
         // text_validate('address', 10);
          text_validate('customerName', 10);
          any_text_validate('address',10);



     });