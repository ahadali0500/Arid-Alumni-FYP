<?php
session_start();
include('include/connection.php');
if (!isset($_SESSION['admintype'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Admin Dashboard | Add Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ARID ALUMNI</div>
            <div class="list-group list-group-flush my-3">
                <a href="verify_alumni.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-lock me-2"></i>Verify Alumni</a>
                <a href="verify_student.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-shield me-2"></i>Verify Student</a>
                <a href="add_admin.php"
                    class="list-group-item text-success list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-plus-circle me-2"></i>Add Admin</a>
                <a href="job_approve.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paper-plane me-2"></i>Jobs Approval</a>
                <a href="job_applicant.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paper-plane me-2"></i>Jobs Applicant</a>
                <a href="contact.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        style='font-size:15px' class='fas me-2'>&#xf2bb;</i>Contact</a>
                <a href="testimonial.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="far fa-comment-alt me-2"></i>Testimonial</a>
                <a href="success-stories.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-gem me-2"></i>Success Stories</a>
                <a href="logout.php"
                    class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li>
                            <i class="fas fa-user me-2"></i>
                            <?php echo $_SESSION['adminname'] ?>
                        </li>
                    </ul>
                </div>
            </nav>
            <section>
                <h3 class="admin">Add Admin</h3>
                <div class="container">
                    <form method="POST">
                        <label for="full-name">Full Name : </label><input type="text" id="full-name" name="name"
                            required>

                        <label for="email">Email : </label><input type="email" id="email" name="email" required>

                        <label for="contact-no">Contact Number : </label><input type="tel" id="contact-no" name="number"
                            required>

                        <label for="password">Password : </label> <input type="password" id="password" name="password"
                            required>

                        <!-- <label for="confirm-password">Confirm Password : </label> <input type="password"
                            id="confirm-password" name="confirm-password" required> -->

                        <button type="submit" name="btn" class="add">Add</button>
                        <button type="button" class="cancel">Cancel</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <?php
    include('include/connection.php');
    if (isset($_REQUEST['btn'])) {
        $email = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];
        $number = $_REQUEST['number'];

        $sql = "INSERT INTO `admin`(`email`, `password`, `name`, `number`) VALUES ('$email','$password','$name','$number')";
        mysqli_query($conn, $sql);

        echo "<script>
toastr.success('Admin added successfully');
  </script>";
    }

    ?>
</body>

</html>