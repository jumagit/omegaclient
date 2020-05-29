<?php include "includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include "includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<?php 

$brand_id = $_GET['edit'];

$sql = query("SELECT * FROM brands WHERE brand_id = '$brand_id' ");

while ($row = mysqli_fetch_array($sql)) {
    $brand_id = $row['brand_id'];
    $brand_status = $row['brand_status'];
    $brand_name = $row['brand_name'];
}

?>


<?php

if(isset($_POST['update'])){

   

        $brand_name = clean($_POST['brand_name']);
        $brand_status = clean($_POST['brandStatus']);    
        $edit_id = clean($_POST['id']);
    
        if (!empty($brand_name)) {
            $query = "UPDATE brands SET  brand_name = '{$brand_name}', brand_status = '{$brand_status}'
            WHERE brand_id= '$brand_id'";
    
            $insert_query = query($query);
    
            if ($insert_query) {
                writeLog("Made an edit on the Brand : {$brand_name}  from {$IP}", $_SESSION['username'], "INFO");
    
                $msg = '
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button> <strong>Well done!</strong> Saving changes! please wait ..............
                    </div>
                    <script type="text/javascript">setTimeout(function() { window.location.href = "brands.php";}, 2000);</script>
                 </div>
                ';
            } else {
                die(mysqli_error($connection));
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

                    <h4 class="page-title">Edit Brand</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Edit User</a></li>
                        
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

                            <h4 class="mt-0 header-title">Edit Brand</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can Edit
                                User
                            </div>

                            <?php if(isset($msg)){echo $msg; }?>



                            <form action="" method="POST">

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="brand_name">Brand Name :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="brand_name" class="form-control"
                                           value="<?php echo $brand_name;  ?>">
                                           <input type="hidden" name="id" value="<?php echo @$_GET['edit']; ?>">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="password"> Brand Status :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="brandStatus" id="brandStatus" class="custom-select">
                                            <option value=" <?php  $brand_status;  ?>" selected="selected" disabled="disabled"> 
                                            <?php if( $brand_status == 1){
                                                echo "Available";
                                            }else{
                                                echo " Not Available";  
                                            };  ?>
                                            </option>
                                            <option value="1">Available</option>
                                            <option value="0">Not Available</option>
                                        </select>
                                    </div>
                                </div>



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



                            </form>



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
<?php include"includes/footer.php"; ?>