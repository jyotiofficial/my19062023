<?php
$title = "Dashboard";
$style = "./styles/global.css";
$favicon = "../../assets/favicon.ico";
include_once("../../components/head.php");
?>
<?php
require './auth.php';

if (isset($_POST['submit'])) {
    $CompanyName = mysqli_real_escape_string($db_connection, $_POST['CompanyName']);
    $CompanyAddress = mysqli_real_escape_string($db_connection, $_POST['CompanyAddress']);
    $CompanyLocation = mysqli_real_escape_string($db_connection, $_POST['CompanyLocation']);
    $startDate = mysqli_real_escape_string($db_connection, $_POST['startDate']);
    $endDate = mysqli_real_escape_string($db_connection, $_POST['endDate']);
    $branch = mysqli_real_escape_string($db_connection, $_POST['branch']);
    $semester = mysqli_real_escape_string($db_connection, $_POST['semester']);
    $Stipend = mysqli_real_escape_string($db_connection, $_POST['Stipend']);
    $Location = mysqli_real_escape_string($db_connection, $_POST['Location']);
  
    // Insert the data into the database or perform the desired actions
    // ...

    // Redirect to a success or failure page
    // header("Location: success.php"); // Redirect to success page
    // header("Location: failure.php"); // Redirect to failure page
}
?>
<body>
    <?php
    include_once("../../components/navbar/index.php");
    ?>
    <div class="container my-2 greet">
        <p>New Application</p>
    </div>

    <!-- Display success or failure messages -->
    <?php if (isset($_POST['submit'])): ?>
        <?php if ($success): ?>
            <div class="alert alert-success container col-8" role="alert">
                <h2 class="alert-heading">Application Success</h2>
                <hr>
                <p>You have successfully requested NOC letter for <b>XYZ pvt ltd</b>.<br>
                Please keep checking your email inbox for further updates.</p>
            </div>
        <?php else: ?>
            <div class="alert alert-danger container col-8" role="alert">
                <h2 class="alert-heading">Application Failed</h2>
                <hr>
                <p><b>Something went wrong</b><br>
                We cannot register your application at this moment. Please try again later or contact TPO for further updates.</p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container my-3" id="content">
        <div class="bg-light p-5 rounded">
            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

                <!-- Form fields -->
                <!-- ... -->

                <div class="container text-center">
                    <div class="row mx-auto">
                        <div class="col mt-3">
                            <button class="btn btn-primary btn-lg col-md-12" name="submit" role="button">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
