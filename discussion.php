<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arid Alumni</title>
    <?php include "include/link.php"; ?>
    <style>
    @media only screen and (min-width: 1024px) {
        .modal-content .modal-body {
            padding: 18px 20px 40px !important;
            margin-right: 0;
        }
    }
    </style>
</head>

<body>
    <?php include "include/navbar.php"; ?>
    <?php
include('include/connection.php');
if(isset($_REQUEST['btn']))
{
$name= $_REQUEST['name'];
$msg = mysqli_real_escape_string($conn, $_REQUEST['msg']);

$sql="INSERT INTO `disscusion`(`name`, `qus`) VALUES ('$name','$msg')";
mysqli_query($conn, $sql);

echo "<script>
toastr.success('Thanks for Posting message!');
  </script>";
}


if(isset($_REQUEST['btnreply']))
{
$name= $_REQUEST['name'];
$disscussion_id= $_REQUEST['disscussion_id'];
$mssg = mysqli_real_escape_string($conn, $_REQUEST['mssg']);

$sql="INSERT INTO `disscussionreply`(`disscussion_id`,`name`, `mssg`) VALUES ('$disscussion_id','$name','$mssg')";
mysqli_query($conn, $sql);

echo "<script>
toastr.success('Your Reply to post submit successfully!');
  </script>";
}

?>

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="flip-left">
                    <h2>General Discussion Board</h2>
                </div>
                <div class="col-12" data-aos="fade-left">
                    <a href="">Home</a>
                    <a href="">Discussion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Forum Start -->
    <!-- Modal -->

    <div class="container">
        <div class="panel panel-default" style="margin-top: 50px">
            <div class="panel-body">
                <h3>General Discussion Board</h3>
                <hr />
                <form method="post">
                    <div class="form-group">
                        <label for="usr">Write your name:</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                    <div class="form-group">
                        <label for="comment">Write your question:</label>
                        <textarea class="form-control" rows="5" name="msg" required></textarea>
                    </div>
                    <input type="submit" id="butsave" name="btn" class="btn btn-primary" value="Send" />
                </form>
            </div>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Recent questions</h4>
                <section>



                    <?php
   include("include/connection.php");
              $qry = "SELECT * FROM disscusion";
              $res = mysqli_query($conn, $qry);
             
              while ($a = mysqli_fetch_array($res)) { ?>
                    <div class="alumni-card">
                        <div class="alumni-info">
                            <h2 data-aos="flip-left" class="aos-init aos-animate"><?php echo $a['name'] ?><span
                                    style="color:black;font-size:15px;cursor:pointer" data-toggle="modal"
                                    data-target="#ReplyModal-<?php echo $a['id'] ?>"> Reply</span></h2>
                            <p class="aos-init aos-animate" data-aos="fade-up">
                                <?php echo $a['qus'] ?> </p>
                            <?php
                          $rr= $a['id'];
              $qryy = "SELECT * FROM disscussionreply where disscussion_id='$rr'";
              $ress = mysqli_query($conn, $qryy);
             
              while ($b = mysqli_fetch_array($ress)) { ?>
                            <div style="margin-left: 50px">
                                <br>
                                <h4>Replies</h4>
                                <p class=" aos-init aos-animate" data-aos="fade-up"><span><b><?php echo $b['name'] ?>: </b></span>
                                <?php echo $b['mssg'] ?> </p>

                            </div>
                            <?php  } ?>
                        </div>
                    </div>
                    <div id="ReplyModal-<?php echo $a['id'] ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div style="position: relative;
    top: -150px;" class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        &times;
                                    </button>

                                </div>
                                <div class="modal-body">
                                    <h4 class="modal-title">Reply Question</h4>
                                    <form method="post">
                                        <input type="hidden" id="commentid" value="<?php echo $a['id'] ?>"
                                            name="disscussion_id" />
                                        <div class="form-group">
                                            <label for="usr">Write your name:</label>
                                            <input type="text" class="form-control" name="name" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Write your reply:</label>
                                            <textarea class="form-control" rows="5" name="mssg" required></textarea>
                                        </div>
                                        <input type="submit" name="btnreply" class="btn btn-primary" value="Reply" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php  } ?>

                </section>
            </div>
        </div>
    </div>
    <!-- Forum End -->

    <!-- fake Previous Code-->
    <!-- <div class="single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-comment">
              <h2>3 Comments</h2>
              <ul class="comment-list">
                <li class="comment-item">
                  <div class="comment-body">
                    <div class="comment-img">
                      <img src="img/user.jpg" />
                    </div>
                    <div class="comment-text">
                      <h3><a href="">Josh Dunn</a></h3>
                      <span>01 Jan 2045 at 12:00pm</span>
                      <p>
                        Lorem ipsum dolor sit amet elit. Integer lorem augue
                        purus mollis sapien, non eros leo in nunc. Donec a nulla
                        vel turpis tempor ac vel justo. In hac platea dictumst.
                      </p>
                      <a class="btn" href="">Reply</a>
                    </div>
                  </div>
                </li>
                <li class="comment-item">
                  <div class="comment-body">
                    <div class="comment-img">
                      <img src="img/user.jpg" />
                    </div>
                    <div class="comment-text">
                      <h3><a href="">Josh Dunn</a></h3>
                      <p><span>01 Jan 2045 at 12:00pm</span></p>
                      <p>
                        Lorem ipsum dolor sit amet elit. Integer lorem augue
                        purus mollis sapien, non eros leo in nunc. Donec a nulla
                        vel turpis tempor ac vel justo. In hac platea dictumst.
                      </p>
                      <a class="btn" href="">Reply</a>
                    </div>
                  </div>
                  <ul class="comment-child">
                    <li class="comment-item">
                      <div class="comment-body">
                        <div class="comment-img">
                          <img src="img/user.jpg" />
                        </div>
                        <div class="comment-text">
                          <h3><a href="">Josh Dunn</a></h3>
                          <p><span>01 Jan 2045 at 12:00pm</span></p>
                          <p>
                            Lorem ipsum dolor sit amet elit. Integer lorem augue
                            purus mollis sapien, non eros leo in nunc. Donec a
                            nulla vel turpis tempor ac vel justo. In hac platea
                            dictumst.
                          </p>
                          <a class="btn" href="">Reply</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- fake Previous Code End-->


    <?php include "include/footer.php"; ?>
    <?php include "include/script.php"; ?>

</body>

</html>