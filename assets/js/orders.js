function removeProductRow(row = null) {
    if (row) {
        $("#row" + row).remove();


        // subAmount();
    } else {
        alert('error! Refresh the page again');
    }
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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New Category has been Created Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New Brand has been Created Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been deleted!!',
                            type: 'success',

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
            })
        }
    });
};



function makeAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Available",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=available&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been changed to Available!!',
                            type: 'success',

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
            })
        }
    });
};



function notAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Unavailable",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_brands.php?t=notavailable&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Brand has been changed to Not Available!!',
                            type: 'success',

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
            })
        }
    });
};


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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New client has been Created Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_clients.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Client has been deleted!!',
                            type: 'success',

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
            })
        }
    });
};




$(document).on("submit", "#submitProductForm", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    swal({
        title: "Are you sure?",
        text: "Okay to add a  New Product",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New Product has been Created Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_products.php?t=delete&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been deleted!!',
                            type: 'success',

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
            })
        }
    });
};



function pMakeAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Available",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_products.php?t=available&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been changed to Available!!',
                            type: 'success',

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
            })
        }
    });
};



function pNotAvailable(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Make this Unavailable",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_products.php?t=notavailable&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait a Product has been changed to Not Available!!',
                            type: 'success',

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
            })
        }
    });
};

//user section


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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! Username Changed Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! Password Changed Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
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
                            title: 'Good job!',
                            padding: 20,
                            text: 'Good Job! A New User has been Created Successfully!',
                            type: 'success',

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
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_users.php?t=admin&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait, a User has been changed to Administrator!!',
                            type: 'success',

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
            })
        }
    });
};


//revoke admin

function revokeAdmin(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Revoke Administration Access!",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_users.php?t=notadmin&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait, Administration Previlages have been removed Successifully!!',
                            type: 'success',

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
            })
        }
    });
};


//deactivate account

function deactivateAccount(id) {
    var id = id;
    swal({
        title: "Are you sure?",
        text: "Okay to Deactivate Account!",
        type: "info",
        padding: 20,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No, cancel!',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger m-l-10',
        buttonsStyling: false
    }).then((willSave) => {
        if (willSave) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: 'php_action/create_users.php?t=deactivateAccount&id=' + id,

                success: function(result) {
                    console.log(result);
                    if (result.status) {


                        swal({
                            title: 'Good job!',
                            padding: 20,
                            text: ' While you wait, Administration Previlages have been removed Successifully!!',
                            type: 'success',

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
            })
        }
    });
};



function addRow() {
    $("#addRowBtn").button("loading");

    var tableLength = $("#productTable tbody tr").length;

    var tableRow;
    var arrayNumber;
    var count;

    if (tableLength > 0) {
        tableRow = $("#productTable tbody tr:last").attr('id');
        arrayNumber = $("#productTable tbody tr:last").attr('class');
        count = tableRow.substring(3);
        count = Number(count) + 1;
        arrayNumber = Number(arrayNumber) + 1;
    } else {
        // no table row
        count = 1;
        arrayNumber = 0;
    }

    $.ajax({

        type: 'GET',
        // type: "POST",
        dataType: "json",
        url: "php_action/fetchProductData.php?t=true",

        success: function(response) {


                $("#addRowBtn").button("reset");

                var tr = '<tr id="row' + count + '" class="' + arrayNumber + '">' +
                    '<td>' +
                    '<div class="form-group">' +

                    '<select class="form-control" name="productName[]" id="productName' + count + '" onchange="getProductData(' + count + ')" >' +
                    '<option value="">~~SELECT~~</option>';
                // console.log(response);
                $.each(response, function(index, value) {
                    tr += '<option value="' + value[0] + '">' + value[1] + '</option>';
                });

                tr += '</select>' +
                    '</div>' +
                    '</td>' +
                    '<td style="padding-left:20px;"">' +
                    '<input type="text" name="rate[]" id="rate' + count + '" autocomplete="off" disabled="true" class="form-control" />' +
                    '<input type="hidden" name="rateValue[]" id="rateValue' + count + '" autocomplete="off" class="form-control" />' +
                    '</td style="padding-left:20px;">' +
                    '<td style="padding-left:20px;">' +
                    '<div class="form-group">' +
                    '<p id="available_quantity' + count + '"></p>' +
                    '</div>' +
                    '</td>' +
                    '<td style="padding-left:20px;">' +
                    '<div class="form-group">' +
                    '<input type="number" name="quantity[]" id="quantity' + count + '" onkeyup="getTotal(' + count + ')" autocomplete="off" class="form-control" min="1" />' +
                    '</div>' +
                    '</td>' +
                    '<td style="padding-left:20px;">' +
                    '<input type="text" name="total[]" id="total' + count + '" autocomplete="off" class="form-control" disabled="true" />' +
                    '<input type="hidden" name="totalValue[]" id="totalValue' + count + '" autocomplete="off" class="form-control" />' +
                    '</td>' +
                    '<td>' +
                    '<button class="btn btn-default removeProductRowBtn" type="button" onclick="removeProductRow(' + count + ')"><i class="fas fa-trash"></i></button>' +
                    '</td>' +
                    '</tr>';
                if (tableLength > 0) {
                    $("#productTable tbody tr:last").after(tr);
                } else {
                    $("#productTable tbody").append(tr);
                }

            } // /success
    }); // get the product data

} // /add row


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
    $(".text-danger").remove();
    // remove form group error 
    $(".form-group").removeClass('has-success').removeClass('has-error');
} // /reset order form


// remove order from server
function removeOrder(orderId = null) {
    if (orderId) {
        $("#removeOrderBtn").unbind('click').bind('click', function() {
            $("#removeOrderBtn").button('loading');

            $.ajax({
                url: 'php_action/removeOrder.php',
                type: 'post',
                data: { orderId: orderId },
                dataType: 'json',
                success: function(response) {
                        $("#removeOrderBtn").button('reset');

                        if (response.success == true) {

                            manageOrderTable.ajax.reload(null, false);
                            // hide modal
                            $("#removeOrderModal").modal('hide');
                            // success messages
                            $("#success-messages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="fa fa-ok-sign"></i></strong> ' + response.messages +
                                '</div>');

                            // remove the mesages
                            $(".alert-success").delay(500).show(10, function() {
                                $(this).delay(3000).hide(10, function() {
                                    $(this).remove();
                                });
                            }); // /.alert	          

                        } else {
                            // error messages
                            $(".removeOrderMessages").html('<div class="alert alert-warning">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="fa fa-ok-sign"></i></strong> ' + response.messages +
                                '</div>');

                            // remove the mesages
                            $(".alert-success").delay(500).show(10, function() {
                                $(this).delay(3000).hide(10, function() {
                                    $(this).remove();
                                });
                            }); // /.alert	          
                        } // /else

                    } // /success
            }); // /ajax function to remove the order

        }); // /remove order button clicked


    } else {
        alert('error! refresh the page again');
    }
}
// /remove order from server



function getProductData(row = null) {

    if (row) {
        var productId = $("#productName" + row).val();

        if (productId == "") {
            $("#rate" + row).val("");

            $("#quantity" + row).val("");
            $("#total" + row).val("");

        } else {
            $.ajax({
                url: 'php_action/fetch_selected_category.php',
                type: 'post',
                data: { productId: productId },
                dataType: 'json',
                success: function(response) {
                        // setting the rate value into the rate input field

                        //console.log(response);

                        $("#rate" + row).val(response.rate);
                        $("#rateValue" + row).val(response.rate);

                        $("#quantity" + row).val(1);
                        $("#available_quantity" + row).text(response.quantity);

                        var total = Number(response.rate) * 1;
                        total = total.toFixed(2);
                        $("#total" + row).val(total);
                        $("#totalValue" + row).val(total);

                        //check
                        // if product name is selected
                        var tableProductLength = $("#productTable tbody tr").length;
                        for (x = 0; x < tableProductLength; x++) {
                            var tr = $("#productTable tbody tr")[x];
                            var count = $(tr).attr('id');
                            count = count.substring(3);

                            var productValue = $("#productName" + row).val()

                            if ($("#productName" + count).val() != productValue) {
                                // $("#productName"+count+" #changeProduct"+count).addClass('div-hide');	
                                $("#productName" + count).find("#changeProduct" + productId).addClass('div-hide');
                                // console.log("#changeProduct" + count);
                            }
                        } // /for

                        subAmount();
                    } // /success
            }); // /ajax function to fetch the product data	
        }

    } else {
        alert('no row! please refresh the page');
    }
} // /select on product data





// table total
function getTotal(row = null) {
    if (row) {
        var total = Number($("#rate" + row).val()) * Number($("#quantity" + row).val());
        total = total.toFixed(2);
        $("#total" + row).val(total);
        $("#totalValue" + row).val(total);

        subAmount();

    } else {
        alert('no row !! please refresh the page');
    }
}

function subAmount() {
    var tableProductLength = $("#productTable tbody tr").length;
    var totalSubAmount = 0;
    for (x = 0; x < tableProductLength; x++) {
        var tr = $("#productTable tbody tr")[x];
        var count = $(tr).attr('id');
        count = count.substring(3);

        totalSubAmount = Number(totalSubAmount) + Number($("#total" + count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);

    // sub total
    $("#subTotal").val(totalSubAmount);
    $("#subTotalValue").val(totalSubAmount);

    // vat
    var vat = (Number($("#subTotal").val()) / 100) * 18;
    vat = vat.toFixed(2);
    $("#vat").val(vat);
    $("#vatValue").val(vat);

    // total amount
    var totalAmount = (Number($("#subTotal").val()) + Number($("#vat").val()));
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