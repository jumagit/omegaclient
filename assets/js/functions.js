       

//update Payments

  $(document).on("submit", "#updatePayment", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to update Payment",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/editPayment.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A Payment has been updated Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href ="orders.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });
    


   //customers

     $(document).on("submit", "#addCustomerForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Customer",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_customer.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New Customer has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "add_customer.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });


//end customers

  
     function sendMail(orderId) {

          var orderId = orderId;

          $.ajax({
               type: "POST",
               url: "php_action/send_email.php?t=true&id=" + orderId,
               data: { orderId: orderId },
               dataType: "json",
               success: function(result) {

                    if (result.status) {
                         swal({
                              title: "Good job!",
                              padding: 20,
                              text: "Good Job! Email Sent Successfully!",
                              type: "success"
                         });

                         setTimeout(function() {
                              window.location.reload();
                         }, 1000);
                    } else {
                         swal({
                              title: "Oops!",
                              padding: 20,
                              text: result.msg + "..please try again!",
                              type: "warning"
                         });
                    }

               }
          });
     }

     function deleteOrder(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to delete this Order",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/removeOrder.php?t=delete&id=" + id,

                         success: function(result) {
                              // console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait an Order has been deleted!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     $(document).on("submit", "#addCategoryForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Category",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_categories.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New Category has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "categories.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     //brand begins

     $(document).on("submit", "#addBrandForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Brand",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_brands.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New Brand has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "brands.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     function deleteBrand(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to delete this Brand",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_brands.php?t=delete&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Brand has been deleted!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     function deleteCategory(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to delete this Category",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_categories.php?t=delete&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Category has been deleted!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }


     function makeAvailable(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this Available",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_brands.php?t=available&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Brand has been changed to Available!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     function notAvailable(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this Unavailable",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_brands.php?t=notavailable&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Brand has been changed to Not Available!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     //clients

     $(document).on("submit", "#addClientForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Client",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_clients.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New client has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "clients.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     function deleteClient(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to delete this Client",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_clients.php?t=delete&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Client has been deleted!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     $(document).on("submit", "#submitProductForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Product",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_products.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New Product has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "products.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     function deleteProduct(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to delete this Product",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_products.php?t=delete&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Product has been deleted!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     function pMakeAvailable(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this Available",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_products.php?t=available&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Product has been changed to Available!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     function pNotAvailable(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this Unavailable",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_products.php?t=notavailable&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait a Product has been changed to Not Available!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     //user section

     //change profile Image

      $(document).on("submit", "#changeProfilePicture", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to change Profile Picture",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/change_profileImage.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Profile Image Changed Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });


     //changing username

     $(document).on("submit", "#changeUsername", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to change Username",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/change_username.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Username Changed Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     //change password

     $(document).on("submit", "#changePassword", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to change Your Password",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/change_password.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Password Changed Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     //addUserForm

     $(document).on("submit", "#addUserForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New User",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_users.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New User has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "users.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     //make admin

     function makeAdmin(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Make this User Admin",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=admin&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, a User has been changed to Administrator!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     //revoke admin

     function revokeAdmin(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Revoke Administration Access!",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=notadmin&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, Administration Previlages have been removed Successifully!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     //deactivate account

     function deactivateAccount(id) {
          var id = id;
          swal({
               title: "Are you sure?",
               text: "Okay to Deactivate Account!",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "GET",
                         dataType: "json",
                         url: "php_action/create_users.php?t=deactivateAccount&id=" + id,

                         success: function(result) {
                              console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: " While you wait, Administration Previlages have been removed Successifully!!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.reload();
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         }
                    });
               }
          });
     }

     //function add row

     function addRow() {

          var tableLength = $("#orderTable tbody tr").length;

          var tableRow;
          var arrayNumber;
          var count;

          if (tableLength > 0) {
               tableRow = $("#orderTable tbody tr:last").attr('id');
               arrayNumber = $("#orderTable tbody tr:last").attr('class');
               count = tableRow.substring(3);
               count = Number(count) + 1;
               arrayNumber = Number(arrayNumber) + 1;
          } else {
               // no table row
               count = 1;
               arrayNumber = 0;
          }

          $.ajax({
               type: "GET",
               // type: "POST",
               dataType: "json",
               url: "php_action/fetchProductData.php?t=true",

               success: function(response) {
                    $("#addRowBtn").button("reset");

                    var tr =
                         '<tr id="row' + count + '" class="' + arrayNumber + '">' +
                         '<td> ' +
                         '<div class="form-group">  <input type="checkbox" name="record"></div>' +
                         '</td>' +
                         '  <td>' +
                         '<div class="form-group">' +
                         '<img src=""  alt="image" width="50" height="50" id="img' + count + '" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">' +
                         '</div>' +
                         '</td>' +

                         '<td>' +
                         '<div class="form-group">' +
                         '<select class="custom-select" name="product_name[]"   id = "product_name' + count + '"    onchange="getProductData(' + count + ')"> ' +
                         "<option selected > ~~Select Product~~ </option>";

                    // console.log(response);
                    $.each(response, function(index, value) {
                         tr += '<option value="' + value[0] + '">' + value[1] + "</option>";
                    });

                    tr += "</select>" +
                         "</div>" +
                         "</td>" +
                         " <td>" +
                         ' <div class="form-group">' +
                         '<input type="text" name="quantity[]" id="quantity' + count + '"    class="form-control" placeholder="">' +
                         " </div>" +
                         "</td>" +
                         "<td>" +
                         '<div class="form-group">' +
                         '<input type ="text" class="form-control" name="price[]" disabled id ="price' + count + '">  </div> </td > <td>' +
                         '<div class="form-group"> <input type="number" name="quantityTaken[]" onchange="getTotal(' + count + ', this.value)" min="1" id="quantityTaken' + count + '"  class ="form-control" ></div> </td>' +
                         ' <td> <div class ="form-group"><input type="text" disabled  name="totalProductPrice[]"  id="totalProductPrice' + count + '"    class="form-control"> </div> </td>' +
                         '<td><div class="form-group"> <button class="btn btn-danger " onclick="deleteRow()"   type="button" > X </button> </div>' +
                         " </td>" +
                         "</tr>";
                    if (tableLength > 0) {
                         $("#orderTable tbody tr:last").after(tr);
                    } else {
                         $("#orderTable tbody").append(tr);
                    }
               } // /success
          }); // get the product data
     }

     function getProductData(row = null) {

          if (row) {
               var productId = $("#product_name" + row).val();

               if (productId == "") {
                    $("#price" + row).val("");

                    $("#quantity" + row).val("");
                    $("#img" + row).attr(['src']).val("");
                    $("#totalProductPrice" + row).val("");

               } else {
                    $.ajax({
                         url: 'php_action/fetch_selected_category.php',
                         type: 'post',
                         data: { productId: productId },
                         dataType: 'json',
                         success: function(response) {
                              // setting the rate value into the rate input field

                              //console.log(response);

                              $("#price" + row).val(response.price);
                              //$("#rateValue" + row).val(response.rate);
                              var img = response.product_image;
                              img = img.substring(3);
                              $("#img" + row).attr('src', img);
                              $("#quantity" + row).val(response.quantity);
                              $("#quantityTaken" + row).val('1');

                              //getting the product row total 

                              var b = Number(response.price);
                              var productRowTotal = 1 * b;

                              $("#totalProductPrice" + row).val(productRowTotal);

                              // var total = Number(response.rate) * 1;
                              // total = total.toFixed(2);
                              // $("#total" + row).val(total);
                              // $("#totalValue" + row).val(total);

                              //check
                              // if product name is selected
                              var tableProductLength = $("#orderTable tbody tr").length;
                              for (x = 0; x < tableProductLength; x++) {
                                   var tr = $("#orderTable tbody tr")[x];
                                   var count = $(tr).attr('id');
                                   count = count.substring(3);

                                   var productValue = $("#productName" + row).val()

                                   // if ($("#product_name" + count).val() != productValue) {
                                   //     // $("#productName"+count+" #changeProduct"+count).addClass('div-hide');  
                                   //     $("#product_name" + count).find("#changeProduct" + productId).addClass('div-hide');
                                   //     // console.log("#changeProduct" + count);
                                   // }
                              } // /for

                              subAmount();
                         } // /success
                    }); // /ajax function to fetch the product data 
               }

          } else {
               alert('no row! please refresh the page');
          }
     } // /select on product data

     function getTotal(row = null, value) {
          if (row) {
               var total = Number($("#price" + row).val()) * value;

               total = Number(total);

               $("#totalProductPrice" + row).val(total);

               subAmount();

          } else {
               alert('no row !! please refresh the page');
          }
     }

     //subamount function

     function subAmount() {
          var tableProductLength = $("#orderTable tbody tr").length;
          var totalSubAmount = 0;
          for (x = 0; x < tableProductLength; x++) {
               var tr = $("#orderTable tbody tr")[x];
               var count = $(tr).attr('id');
               count = count.substring(3);

               totalSubAmount = Number(totalSubAmount) + Number($("#totalProductPrice" + count).val());
          } // /for

          totalSubAmount = totalSubAmount.toFixed(2);

          // sub total
          $("#subTotal").val(totalSubAmount);
          $("#subTotalValue").val(totalSubAmount);

          // vat
          // var vat = (Number($("#subTotal").val()) / 100) * 18;
          // vat = vat.toFixed(2);
          // $("#vat").val(vat);
          // $("#vatValue").val(vat);

          // total amount
          var totalAmount = Number($("#subTotal").val());
          totalAmount = totalAmount.toFixed(2);
          $("#totalAmount").val(totalAmount);
          $("#totalAmountValue").val(totalAmount);

          var discount = $("#discount").val();
          if (discount) {
               var grandTotal = Number($("#totalAmount").val()) - Number(discount);
               grandTotal = grandTotal.toFixed(2);
               $("#grandTotal").val(grandTotal);
               $("#grandTotalValue").val(grandTotal);
          } else {
               $("#grandTotal").val(totalAmount);
               $("#grandTotalValue").val(totalAmount);
          } // /else discount   

          var paidAmount = $("#paid").val();
          if (paidAmount) {
               paidAmount = Number($("#grandTotal").val()) - Number(paidAmount);
               paidAmount = paidAmount.toFixed(2);
               $("#due").val(paidAmount);
               $("#dueValue").val(paidAmount);
          } else {
               $("#due").val($("#grandTotal").val());
               $("#dueValue").val($("#grandTotal").val());
          } // else

     } // /sub total amount

     function deleteRow() {
          $("#orderTable tbody").find('input[name="record"]').each(function() {
               if ($(this).is(":checked")) {
                    $(this).parents("tr").remove();
               }
               subAmount();
          });
     };

     function discountFunc() {
          var discount = $("#discount").val();
          var totalAmount = Number($("#totalAmount").val());
          totalAmount = totalAmount.toFixed(2);

          var grandTotal;
          if (totalAmount) {
               grandTotal = Number($("#totalAmount").val()) - Number($("#discount").val());
               grandTotal = grandTotal.toFixed(2);

               $("#grandTotal").val(grandTotal);
               $("#grandTotalValue").val(grandTotal);
          } else {}

          var paid = $("#paid").val();

          var dueAmount;
          if (paid) {
               dueAmount = Number($("#grandTotal").val()) - Number($("#paid").val());
               dueAmount = dueAmount.toFixed(2);

               $("#due").val(dueAmount);
               $("#dueValue").val(dueAmount);
          } else {
               $("#due").val($("#grandTotal").val());
               $("#dueValue").val($("#grandTotal").val());
          }
     } // /discount function

     function paidAmount() {
          var grandTotal = $("#grandTotal").val();

          if (grandTotal) {
               var dueAmount = Number($("#grandTotal").val()) - Number($("#paid").val());
               dueAmount = dueAmount.toFixed(2);
               $("#due").val(dueAmount);
               $("#dueValue").val(dueAmount);
          } // /if
     } // /paid amoutn function

     function resetOrderForm() {
          // reset the input field
          $("#createOrderForm")[0].reset();
          // remove remove text danger
          setTimeout(function() {
               window.location.reload();
          }, 100);
     } // /reset order form

     // print order function
     function printOrder(orderId) {

          var orderId = orderId;
          if (orderId) {
               $.ajax({
                    url: "php_action/print_order.php?t=true&id=" + orderId,
                    type: "post",
                    data: { orderId: orderId },
                    dataType: "text",
                    success: function(response) {
                         var mywindow = window.open(
                              "",
                              "Online Trade System",
                              "height=400,width=600"
                         );
                         mywindow.document.write("<html><head><title>Order Invoice</title>");
                         mywindow.document.write("</head><body>");
                         mywindow.document.write(response);
                         mywindow.document.write("</body></html>");

                         mywindow.document.close(); // necessary for IE >= 10
                         mywindow.focus(); // necessary for IE >= 10
                         mywindow.resizeTo(screen.width, screen.height);
                         setTimeout(function() {
                              mywindow.print();
                              mywindow.close();
                         }, 1250);

                         //mywindow.print();
                         //mywindow.close();
                    } // /success function
               }); // /ajax function to fetch the printable order
          } // /if orderId
     } // /print order function

     //remove order

     $("#orderDate").datepicker();
     $("#end_date").datepicker();
     $("#start_date").datepicker();

     $(document).on("submit", "#createOrderForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to add a  New Order",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/create_orders.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! A New Order has been Created Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "orders.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });

     //edit and update 

     $(document).on("submit", "#editOrderForm", function(e) {
          e.preventDefault();

          var formData = new FormData(this);

          swal({
               title: "Are you sure?",
               text: "Okay to Update this Order",
               type: "info",
               padding: 20,
               showCancelButton: true,
               confirmButtonText: "Yes",
               cancelButtonText: "No, cancel!",
               confirmButtonClass: "btn btn-success",
               cancelButtonClass: "btn btn-danger m-l-10",
               buttonsStyling: false
          }).then(willSave => {
               if (willSave) {
                    $.ajax({
                         type: "POST",
                         dataType: "json",
                         url: "php_action/edit_order.php?t=true",
                         data: formData,
                         success: function(result) {
                              //console.log(result);
                              if (result.status) {
                                   swal({
                                        title: "Good job!",
                                        padding: 20,
                                        text: "Good Job! Order has been Updated Successfully!",
                                        type: "success"
                                   });

                                   setTimeout(function() {
                                        window.location.href = "orders.php";
                                   }, 1000);
                              } else {
                                   swal({
                                        title: "Oops!",
                                        padding: 20,
                                        text: result.msg + "..please try again!",
                                        type: "warning"
                                   });
                              }
                         },
                         error: function(jqXHR) {
                              console.log(jqXHR);
                         },
                         cache: false,
                         contentType: false,
                         processData: false
                    });
               }
          });
     });