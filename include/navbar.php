<div class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand">ARID <span>ALUMNI</span></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                <a href="events.php" class="nav-item nav-link">Events</a>
                <a href="success-stories.php" class="nav-item nav-link">Success Stories</a>
                <a href="discussion.php" class="nav-item nav-link">Discussions</a>
               
                <?php if (!isset($_SESSION["id"])) { ?>
                <a href="login.php" class="nav-item nav-link">Login</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Register</a>
                    <div class="dropdown-menu">
                        <a href="alumni-form.php" class="dropdown-item">New Alumni</a>
                        <a href="student-form.php" class="dropdown-item">New Student</a>
                    </div>
                </div>
                <?php } ?>
                <?php if (isset($_SESSION["id"])) { ?>
                    <a href="jobs.php" class="nav-item nav-link">Jobs</a>
                <div class="nav-item dropdown my-account-nav">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account</a>
                    <div class="dropdown-menu">
                        <?php if ($_SESSION["type"]=="alumni") { ?>
                        <a class="dropdown-item" href="update-profile-alumni.php">Update Profile</a>
                        <?php }else{ ?>
                        <a class="dropdown-item" href="update-profile-student.php">Update Profile</a>
                        <?php } ?>
                        <a class="dropdown-item" href="update-password.php">Change Password</a>
                        <a class="dropdown-item" href="testimonial.php">Feedback</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                    <?php } ?>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>