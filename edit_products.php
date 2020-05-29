<?php error_reporting(E_ALL);  ?>
<?php include "includes/header.php";?>
<!-- Navigation Bar-->
<?php include "includes/navigation.php";?>
<!-- End Navigation Bar-->

<?php

$product_id = $_GET['edit'];

$sql = query("SELECT * FROM products WHERE product_id = '$product_id' ");

while ($row = mysqli_fetch_array($sql)) {

    $product_id = $row['product_id'];
    $product_name = $row['product_name'];
    $rate = $row['rate'];
  
    $categories_id = $row['categories_id'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $status = $row['status'];
    $product_image = $row['product_image'];
    $product_image = substr($product_image, 3);

}

?>


<?php

if (isset($_POST['update'])) {
    $productImage = "";
    $productName = clean($_POST['productName']);
    $productStatus = clean($_POST['productStatus']);
    $price = clean($_POST['price']);
    $quantity = clean($_POST['quantity']);
    $rate = clean($_POST['rate']);
   
    $categoryName = clean($_POST['categoryName']);
    //$productImage = clean($_POST['productImage']);
    $edit_id = clean($_POST['id']);

    //product Image editing

    if (!empty($_FILES['productImage']['name'])) {
        $type = explode('.', $_FILES['productImage']['name']);
        $type = $type[count($type) - 1];
        $url = 'assets/images/stock/' . uniqid(rand()) . '.' . $type;
        if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
            if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
                if (move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {
                    $productImage = '../' . $url;

                    if (!empty($categoryName) && !empty($productName) && !empty($price)) {
                        $sql = "UPDATE products SET product_name = '$productName',product_image='$productImage', categories_id = '$categoryName',
                        quantity = '$quantity', rate = '$rate', active = '$productStatus', status = 1 WHERE product_id = $product_id ";
                
                        $update_query = query($sql);
                
                        if ($update_query) {
                            writeLog("Made an edit on the A Product : {$productName}  from {$IP}", $_SESSION['fullName'], "INFO");
                
                            $msg = '
                                <div class="col-lg-12">
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <button type="button" class="close" data-dismiss="alert">×</button> <strong>Well done!</strong> Saving changes! please wait ..............
                                    </div>
                                    <script type="text/javascript">setTimeout(function() { window.location.href = "products.php";}, 2000);</script>
                                 </div>
                                ';
                        } else {
                            die(mysqli_error($connection));
                        }
                
                    }


                }
            }

        }

    }else{

        if (!empty($categoryName) && !empty($productName) && !empty($price)) {
            $sql = "UPDATE products SET product_name = '$productName', categories_id = '$categoryName',
            quantity = '$quantity', rate = '$rate', active = '$productStatus', status = 1 WHERE product_id = $product_id ";
    
            $update_query = query($sql);
    
            if ($update_query) {
                writeLog("Made an edit on the A Product : {$productName}  from {$IP}", $_SESSION['fullName'], "INFO");
    
                $msg = '
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">×</button> <strong>Well done!</strong> Saving changes! please wait ..............
                        </div>
                        <script type="text/javascript">setTimeout(function() { window.location.href = "products.php";}, 2000);</script>
                     </div>
                    ';
            } else {
                die(mysqli_error($connection));
            }
    
        }



    }

 

}

?>

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>
                        </div>
                    </div>

                    <h4 class="page-title">Edit Product</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Product</a></li>

                    </ol>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Edit Product</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can Edit
                                Product
                            </div>

                            <?php if (isset($msg)) {echo $msg;}?>



                            <form class="form-horizontal" id="" method="POST"
                             enctype="multipart/form-data">


                                <div class="form-group row">
                                    <label for="productImage" class="col-sm-3 control-label">Product Image: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <!-- the avatar markup -->

                                        <div class="text-center">
                                            <input type="file" class="form-control" id="productImage"
                                                 name="productImage"
                                                style="width:auto;" />
                                                <small><img src="<?php echo $product_image; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="product Image" style="height:80px; width:80px;"></small>
                                        </div>

                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="productName" class="col-sm-3 control-label">Product Name: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                    <input type="hidden" name="id" value="<?php echo @$_GET['edit']; ?>">
                                        <input type="text" class="form-control" id="productName"
                                            value="<?php echo $product_name; ?>" name="productName" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-3 control-label">Quantity: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="quantity" value="<?php echo $quantity; ?>"
                                            name="quantity" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-3 control-label">Price: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price"   data-type="currency" value="<?php echo $price; ?>"
                                            name="price" autocomplete="off">
                                    </div>
                                </div> <!-- /form-group-->





                                <div class="form-group row">
                                    <label for="categoryName" class="col-sm-3 control-label">Category Name: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select type="text" class="form-control" id="categoryName"
                                            placeholder="Category Name" name="categoryName">

                                            <?php
                                            $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                            $result = $connection->query($sql);

                                            while ($row = $result->fetch_array()) {
                                                if ($categories_id === $row[0]) {
                                                    echo "<option selected value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                }
                                                echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                            } // while

                                            ?>
                                        </select>
                                    </div>
                                </div> <!-- /form-group-->

                                <div class="form-group row">
                                    <label for="productStatus" class="col-sm-3 control-label">Status: </label>
                                    <label class="col-sm-1 control-label">: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="productStatus" name="productStatus">

                                           <?php

if ($status == 1) {
    echo ' <option disabled selected value="' . $status . '">Available</option>';
} else {
    echo ' <option disabled selected value="' . $status . '">Not Available</option>';

}

?>

                                            <option value="1">Available</option>
                                            <option value="2">Not Available</option>
                                        </select>
                                    </div>
                                </div> <!-- /form-group-->


                                <div class="form-group">
                                    <div class="text-center">

                                        <button type="button"
                                            class="btn btn-dark waves-effect m-l-5" onclick="window.history.back();">
                                            <i class="mdi mdi-arrow-left"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="update">
                                            <i class="mdi mdi-content-save"></i> Update
                                        </button>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page content-->

</div>
<!-- page wrapper end -->


<!--   modal begins here -->




<!-- Footer -->
<?php include "includes/footer.php";?>