<link rel="stylesheet" href="../css/sour.css">
<?php include('partials/menu.php'); ?>

        <!-- Main content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manager Admin</h1>

                <br /><br />


                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                        
                    }
                ?>

                <br><br>
                <a href="add-admin.php" class="btn-primary">Add Admin </a>

                <br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Full name</th>
                        <th>Username</th>
                        <th>Actions </th>
                    </tr>

                    <?php
                        //query to get all admin
                        $sql = "SELECT * FROM tbl_admin";
                        // execute the query
                        $res = mysqli_query($conn, $sql);

                        if($res==TRUE)
                        {
                            $count = mysqli_num_rows($res);
                            
                            $sn=1;

                            if($count>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    ?>
                                        <tr>
                                            <td><?php echo $sn++; ?></td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td>
                                                <a href="#" class="btn-secondary">Update Admin</a>
                                                <a href="#" class="btn-danger">Delet Admin</a>
                                                
                                            </td>
                                        </tr>

                                    <?php

                                }
                            }
                            else
                            {

                            }

                        }


                    ?>


                </table>

            </div>
        </div>
        <!-- Main content Section ends -->

<?php include('partials/footer.php');?>