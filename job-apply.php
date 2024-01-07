<?php include "include/middleware.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arid Alumni</title>
    <?php include "include/link.php"; ?>
</head>

<body>
    <?php include "include/navbar.php"; ?>
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down">
                    <h2>Job Apply</h2>
                </div>
                <div class="col-12" data-aos="fade-right">
                    <a href="">Home</a>
                    <a href="">Job Apply</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Form-Start -->
    <section class="sec-std-form">
        <div class="wrapper">
            <div class="title" data-aos="flip-right">Job Apply Form</div>
            <form id="up_pro" data-netlify="true">
                <div class="form">
                    <div class="inputfield" data-aos="fade-right">
                        <label>Candidate Name</label>
                        <input type="text" class="input" id="name" name="CandidateName" placeholder="Enter Full Name"
                            maxlength="30" title="Enter only alphabets"  />
                    </div>
                    <span style="color:red;" class="null-CandidateName  null"></span>

                    <div class="inputfield" data-aos="fade-right">
                        <label>Email Address</label>
                        <input type="email" class="input" name="Email" placeholder="Enter your email"  />
                    </div>
                    <span style="color:red;" class="null-Email  null"></span>

                    <div class="inputfield" data-aos="fade-right">
                        <label for="">Contact No.</label>
                        <input type="tel" class="input" name="CandiadateContactNo" maxlength="15"  id="phone-number"
                            placeholder="Enter Contact No." title="Please enter valid phone number" />
                    </div>
                    <span style="color:red;" class="null-CandiadateContactNo  null"></span>

                    <div class="inputfield" data-aos="fade-right">
                        <label>Cover Letter</label>
                        <input type="text" class="input" id="name" name="CoverLetter"
                            placeholder="Please consider my application..." maxlength="100" title="Enter only alphabets"
                             />
                    </div>
                    <span style="color:red;" class="null-CoverLetter  null"></span>
                    <input name="idd"  type="hidden" value="<?php echo $_GET['id'] ?>" >
                    <div class="inputfield" id="gender" data-aos="fade-right">
                        <label for="">Gender</label>
                        <input type="radio" name="gender" id="radio" value="Male" />Male
                        <input type="radio" name="gender" id="radio" value="Female" />Female
                    </div>
                    <span style="color:red;" class="null-gender  null"></span>

                    <div class="inputfield" data-aos="fade-right">
                        <label>Upload Resume</label>
                        <!-- <p id="file-size">* Max size 100kb.</p> -->
                        <input type="file" name="UploadResume" accept="image/*" id="myfile" placeholder="Upload your photo"
                            rows="7"  />
                    </div>
                    <span style="color:red;" class="null-UploadResume  null"></span>

                    <div class="inputfield btns" id="btn" data-aos="fade-up">
                        <button type="submit"  value="Register" class="btn" onclick="checkPassword()">
                            Apply
                        </button>
                        <button type="reset" value="Reset" class="btn" data-aos="fade-up">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
$(document).ready(function() {
 
  $('#up_pro').submit(function(event) {
    event.preventDefault();
    // alert("ok")
    $('.null').html('');

    // Create a FormData object to handle the form data
    var formData = new FormData(this);

    // Append additional data to the FormData object
    formData.append('type', 'apply');

    $.ajax({
      type: 'POST',
      url: 'backend.php',
      data: formData,
      processData: false, // Prevent jQuery from processing the data
      contentType: false, // Set content type to false
      dataType: 'json',
      success: function(response) {
        // Handle the response from the server
       
        if (response.success) {
          toastr.success(response.message);
          $('#up_pro').find('input, select, textarea').val('');

        }
        
         else {
        
    // Display error message(s) here
          var errors = response.message;         
         $.each(errors, function(key, value) {
        // key is the name of the field that has the error
            $('.null-'+key).html(value);
          
      });
}
      }
    });
  });
});
</script>
    <!-- Form-End -->

    <?php include "include/footer.php"; ?>
    <?php include "include/script.php"; ?>
</body>

</html>