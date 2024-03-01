<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Grampanchayat</title>

    <link rel="stylesheet" type="text/css" href="./Uttar Pradesh National Health Mission_files/bootstrap.min.css">
    <link id="pagestyle" rel="stylesheet" type="text/css"
        href="./Uttar Pradesh National Health Mission_files/style.css">
    <link rel="stylesheet" type="text/css" href="./Uttar Pradesh National Health Mission_files/font-awesome.min.css">
    <script type="text/javascript"
        src="./Uttar Pradesh National Health Mission_files/jquery.slim.min.js.download"></script>
    <script type="text/javascript"
        src="./Uttar Pradesh National Health Mission_files/bootstrap.bundle.min.js.download"></script>
    <script src="./Uttar Pradesh National Health Mission_files/bootstrap.min.js.download"></script>
    <link href="./Uttar Pradesh National Health Mission_files/css" rel="stylesheet">
    <link rel="stylesheet" href="./Uttar Pradesh National Health Mission_files/footer.css">
    <link rel="stylesheet" href="./Uttar Pradesh National Health Mission_files/more_nav.css">


    <link rel="stylesheet" href="./Uttar Pradesh National Health Mission_files/styles.css">
    <script src="./Uttar Pradesh National Health Mission_files/jquery-latest.min.js.download"
        type="text/javascript"></script>
    <script type="text/javascript" src="./Uttar Pradesh National Health Mission_files/script.js.download"></script>

    <script type="text/javascript">
        function changesheet(sheet) {
            document.getElementById('pagestyle').setAttribute('href', sheet);
        }
    </script>
    <script src="https://kit.fontawesome.com/f5126202d4.js" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</head>
<?php

    if(session_status() !== PHP_SESSION_ACTIVE)
    {
    session_start();
    }

    if(isset($_SESSION["loginstatus"]))
    {
        if($_SESSION["loginstatus"]===1)
        {
            echo '<div id="successtoast" class="alert alert-success container mt-4" role="alert">
            <h4 class="alert-heading">Welcome '.$_SESSION["username"].'!</h4>
            </div>
            <script>
                setTimeout(hidetoast,5000);
            </script>';
            $_SESSION['loginstatus']=0;
        }
    }
?>
<body style="font-size: 100%;">
    <?php include('./includes/nav.php')?>
    <div class="main_slider">
        <div id="mainCarousel" class="carousel" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./files/img/main_1.jpg"
                        alt="Digital Grampanchayat 1" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="./files/img/main_2.jpg"
                        alt="Digital Grampanchayat 2" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="./files/img/main_3.jpg"
                        alt="Digital Grampanchayat 3" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="./files/img/main_4.jpg"
                        alt="Digital Grampanchayat 4" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="./files/img/main_5.jpg"
                        alt="Digital Grampanchayat 5" width="100%">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="http://localhost/DigitalGrampanchayat/#mainCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="http://localhost/DigitalGrampanchayat/#mainCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>



    <!--Top Content-->

    <div class="top_content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 pd-40 bg1" data-toggle="modal" data-target="#exampleModal">
                    <div class="chairperson">
                        <h2 ><i class="fa fa-angle-right ic" aria-hidden="true"></i> Shri. Pratikraj Sutar</h2>
                        <p>Sarpanch &amp;
                            Kodoli Grampanchayat</p>
                    </div>
                </div>
                <br>
                <div class="col-md-4 col-12 pd-40 bg2" data-toggle="modal" data-target="#exampleModal1">
                    <div class="chairperson">
                        <h2><i class="fa fa-angle-right ic" aria-hidden="true"></i> Dr. Sunny Sutar</h2>
                        <p>Gramsevak &amp; Kodoli Grampanchayat</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 pd-40 bg1" data-toggle="modal" data-target="#exampleModal2">
                    <div class="chairperson">
                        <h2> <i class="fa fa-angle-right ic" aria-hidden="true"></i> Shri. Rushi Pawar</h2>
                        <p>Observation Officer
                            &amp;Kodoli Grampanchayat</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 pd-40 bg1" data-toggle="modal" data-target="#exampleModal3">
                    <div class="chairperson">
                        <h2> <i class="fa fa-angle-right ic" aria-hidden="true"></i> Shri. Omkar Tikudve</h2>
                        <p>Survey Officer
                            &amp; Kodoli Grampanchayat</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--Event & Important Links-->

    <div class="events mt-80 mb-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="event_container">
                        <h2><i class="fa fa-angle-right ic" aria-hidden="true"></i> Latest News &amp; Event<br></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" id="notices-content">

                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev"
                                href="http://schauhan.in/upnrhm/#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next"
                                href="http://schauhan.in/upnrhm/#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="latest_videos">
                        <div class="row m-2">
                            <div class="col-md-3 col-6 mr-2">
                            <div class="card bg-warning" style="width : fit-content; height :110px">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Population</h5>
                                        <p class="card-text">834</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 ml-4 mr-2">
                                <div class="card bg-warning" style="width : 150px; height :110px">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Male</h5>
                                        <p class="card-text">400</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 ml-4">
                            <div class="card bg-warning" style="width : 150px; height :110px">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Female</h5>
                                        <p class="card-text">250</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('./includes/footer.php') ?>
    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>



    <script src="./Uttar Pradesh National Health Mission_files/main.js.download"></script>
    <script src="./Uttar Pradesh National Health Mission_files/font.js.download"></script>
    <script src="./Uttar Pradesh National Health Mission_files/jquery.min.js.download"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 150px; height: 150px;" src="./Uttar Pradesh National Health Mission_files/main_profile.jpg">
        <div class="container">
            <label>Name</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Age</label>
            <h3>34</h3>
        </div>
        <div class="container">
            <label>Gender</label>
            <h3>Male</h3>
        </div>
        <div class="container">
            <label>Date of birth</label>
            <h3>06-04-2001</h3>
        </div>
        <div class="container">
            <label>Contact</label>
            <h3>34234234234</h3>
        </div>
        <div class="container">
            <label>Designation</label>
            <h3>Sarpanch</h3>
        </div>
        <div class="container">
            <label>Term Of Service</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Educational Qualification</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Achievements</label>
            <h3>XYZ</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 150px; height: 150px;" src="./Uttar Pradesh National Health Mission_files/main_profile.jpg">
        <div class="container">
            <label>Name</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Age</label>
            <h3>34</h3>
        </div>
        <div class="container">
            <label>Gender</label>
            <h3>Male</h3>
        </div>
        <div class="container">
            <label>Date of birth</label>
            <h3>06-04-2001</h3>
        </div>
        <div class="container">
            <label>Contact</label>
            <h3>34234234234</h3>
        </div>
        <div class="container">
            <label>Designation</label>
            <h3>Sarpanch</h3>
        </div>
        <div class="container">
            <label>Term Of Service</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Educational Qualification</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Achievements</label>
            <h3>XYZ</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 150px; height: 150px;" src="./Uttar Pradesh National Health Mission_files/main_profile.jpg">
        <div class="container">
            <label>Name</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Age</label>
            <h3>34</h3>
        </div>
        <div class="container">
            <label>Gender</label>
            <h3>Male</h3>
        </div>
        <div class="container">
            <label>Date of birth</label>
            <h3>06-04-2001</h3>
        </div>
        <div class="container">
            <label>Contact</label>
            <h3>34234234234</h3>
        </div>
        <div class="container">
            <label>Designation</label>
            <h3>Sarpanch</h3>
        </div>
        <div class="container">
            <label>Term Of Service</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Educational Qualification</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Achievements</label>
            <h3>XYZ</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img style="width: 150px; height: 150px;" src="./Uttar Pradesh National Health Mission_files/main_profile.jpg">
        <div class="container">
            <label>Name</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Age</label>
            <h3>34</h3>
        </div>
        <div class="container">
            <label>Gender</label>
            <h3>Male</h3>
        </div>
        <div class="container">
            <label>Date of birth</label>
            <h3>06-04-2001</h3>
        </div>
        <div class="container">
            <label>Contact</label>
            <h3>34234234234</h3>
        </div>
        <div class="container">
            <label>Designation</label>
            <h3>Sarpanch</h3>
        </div>
        <div class="container">
            <label>Term Of Service</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Educational Qualification</label>
            <h3>XYZ</h3>
        </div>
        <div class="container">
            <label>Achievements</label>
            <h3>XYZ</h3>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
<script src="./js/notices.js"></script>
</html>