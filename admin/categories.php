<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>Author</small>
                        </h1>
                    <div class="col-xs-6"><!-- Add Category Form Start -->

                    <!-- ADD CATEGORY QUERY -->
                    <?php insert_categories(); ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                            </div>
                        </form>

                        <?php
                            if(isset($_GET['edit']))
                            {
                                $cat_id = $_GET['edit'];
                                include "includes/update_categories.php";
                            }
                        ?>
                        
                    </div><!-- Add Category Form End -->
                    <div class="col-xs-6"><!-- Category Table Start -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <!-- FIND CATEGORY QUERY -->
                            <?php findAllCategories(); ?>

                            <!-- DELETE CATEGORY QUERY -->
                            <?php deleteCategories(); ?>
                            
                            </tbody>
                        </table>
                    </div><!-- Category Table End -->

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
