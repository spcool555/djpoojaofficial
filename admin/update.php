<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odmsaid'] == 0)) {
    header('location:logout.php');
} else {

    // Code for deleting product from cart
    if (isset($_GET['delid'])) {
        $rid = intval($_GET['delid']);
        $sql = "delete from tbleventtype where ID=:rid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':rid', $rid, PDO::PARAM_STR);
        $query->execute();
        echo "<script>alert('Data deleted');</script>";
        echo "<script>window.location.href = 'manage-event-type.php'</script>";
    }

?>
    <!doctype html>
    <html lang="en" class="no-focus"> <!--<![endif]-->

    <head>
        <title>DJ POOJA-Admin</title>
        <link rel="icon" href="../img/headphones.png" />

        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    </head>

    <body>

        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">

            <?php include_once('includes/sidebar.php'); ?>

            <?php include_once('includes/header.php'); ?>


            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">Manage Event Type</h2>



                    <!-- Dynamic Table Full Pagination -->
                    <div class="block">

                        <?php
                        // Check if the form was submitted
                        if (isset($_POST['submit'])) {
                            // Get the ID and file information
                            $id = $_POST['id'];
                            $imageName = $_FILES['image']['name'];
                            $imageTmp = $_FILES['image']['tmp_name'];
                            $imagePath = 'img/' . $imageName;

                            // Move the uploaded file to the desired folder
                            move_uploaded_file($imageTmp, $imagePath);

                            // Store the ID and image path in the database or perform the update action

                            // Redirect or display a success message
                            echo "Update submitted successfully!";
                        }

                        // Delete selected data
                        if (isset($_GET['delete_id'])) {
                            $deleteId = $_GET['delete_id'];

                            // Connect to your database (replace 'database_name', 'username', and 'password' with your actual credentials)
                            $conn = new PDO('mysql:host=localhost;dbname=odmsdb', 'root', '');

                            // Prepare and execute the SQL query to delete the record
                            $stmt = $conn->prepare('DELETE FROM images WHERE id = ?');
                            $stmt->execute([$deleteId]);

                            // Close the database connection
                            $conn = null;

                            // Redirect or display a success message
                            echo "Record deleted successfully!";
                        }
                        ?>

                        <?php
                        // Retrieve the ID from the URL parameter
                        $id = isset($_GET['id']) ? $_GET['id'] : '';

                        // Connect to your database (replace 'database_name', 'username', and 'password' with your actual credentials)
                        $conn = new PDO('mysql:host=localhost;dbname=odmsdb', 'root', '');

                        // Retrieve data from the database
                        $stmt = $conn->query('SELECT * FROM images');
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($rows as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><img src="<?php echo $row['image_path']; ?>" alt="Image"></td>
                                    <td>
                                        <a href="change-event.php?id=<?php echo $row['id']; ?>">Update</a>
                                        <a href="?delete_id=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>

                        <form action="" method="POST" enctype="multipart/form-data">
                            ID: <input type="number" name="id" value="<?php echo $id; ?>"> <br><br>
                            Image: <input type="file" name="image"><br><br>
                            <input type="submit" name="submit" value="Submit">
                        </form>

                        <?php
                        // Close the database connection
                        $conn = null;
                        ?>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                    <!-- END Dynamic Table Simple -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <?php include_once('includes/footer.php'); ?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
    </body>

    </html>
<?php }  ?>