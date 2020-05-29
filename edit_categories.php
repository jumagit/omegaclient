<?php include "includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include "includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<?php 

$categories_id = $_GET['edit'];

$sql = query("SELECT * FROM categories WHERE categories_id = '$categories_id' ");

while ($row = mysqli_fetch_array($sql)) {
    $categories_id = $row['categories_id'];
    $categories_status = $row['categories_status'];
    $categories_name = $row['categories_name'];
}

?>


<?php

if(isset($_POST['update'])){

   

        $categories_name = clean($_POST['categories_name']);
        $categories_status = clean($_POST['categories_status']);    
        $edit_id = clean($_POST['id']);
    
        if (!empty($categories_name)) {
            $query = "UPDATE categories SET  categories_name = '{$categories_name}', categories_status = '{$categories_status}'
            WHERE categories_id= '$edit_id'";
    
            $insert_query = query($query);
    
            if ($insert_query) {
                writeLog("Made an edit on the A Category : {$categories_name}  from {$IP}", $_SESSION['fullName'], "INFO");
    
                $msg = '
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">×</button> <strong>Well done!</strong> Saving changes! please wait ..............
                    </div>
                    <script type="text/javascript">setTimeout(function() { window.location.href = "categories.php";}, 2000);</script>
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

                    <h4 class="page-title">Edit Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Category</a></li>
                        
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

                            <h4 class="mt-0 header-title">Edit Category</h4>
                            <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong> Here you can Edit
                                Category
                            </div>

                            <?php if(isset($msg)){echo $msg; }?>



                            <form action="" method="POST">

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="categories_name">Category Name :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="categories_name" class="form-control"
                                           value="<?php echo $categories_name;  ?>">
                                           <input type="hidden" name="id" value="<?php echo @$_GET['edit']; ?>">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="categories_status"> Category Status :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <select name="categories_status" id="categories_status" class="custom-select">
                                            <option value=" <?php  $categories_status;  ?>" selected="selected" disabled="disabled"> 
                                            <?php if( $categories_status == 1){
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