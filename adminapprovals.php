<?php
if(session_status() !== PHP_SESSION_ACTIVE)
{
session_start();
}

if($_SESSION["userloggedin"]==1)
{
  if($_SESSION["adminstatus"]!=1)
  {
    echo "You Dont Have Access to this page";
    die();
  }
}
else
{
  header("Location: http://localhost/DigitalGrampanchayat/login.php");
  exit();
}

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://schauhan.in/upnrhm/ -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Grampanchayat</title>

    <link rel="stylesheet" type="text/css" href="./Uttar Pradesh National Health Mission_files/bootstrap.min.css">
    <link id="pagestyle" rel="stylesheet" type="text/css"
        href="./Uttar Pradesh National Health Mission_files/style.css">
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
    <script src="./js/login.js"></script>
    <script src="https://kit.fontawesome.com/f5126202d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
</head>
<body style="font-size: 100%;">
<?php include('./includes/nav.php'); ?>
<button
    id="sidebartoggle"
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#sidebarMenu"
    aria-controls="sidebarMenu"
    aria-expanded="false"
    aria-label="Toggle navigation"
    >
    <i class="fas fa-bars"></i>
</button>
<div class="container-fluid d-flex flex-row">
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="./admindashboard.php"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true" 
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Admin dashboard</span>
        </a>
        <a href="./adminapplications.php" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fa-solid fa-grip"></i> <span>Application Requests</span>
        </a>
        <a href="./adminqueries.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fa-solid fa-clipboard-question"></i> <span>View Queries</span></a
        >
        <a href="./admincertificates.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fa-solid fa-certificate"></i> <span>View Certificates</span></a
        >
        <a href="./adminapprovals.php" class="list-group-item list-group-item-action py-2 ripple active"
          ><i class="fa-solid fa-check"></i> <span>Approvals</span></a
        >
        <a href="./adminnotices.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fa-solid fa-flag"></i> <span>Create/View Notice</span></a
        >
      </div>
    </div>
  </nav>
  <?php
  if(isset($_SESSION["applicationsapply"]))
  {
    if($_SESSION["applicationsapply"]==1)
    {
      echo '<div id="successtoast" class="alert alert-success container m-2 mt-4" role="alert">
      <h4 class="alert-heading">You Have Applied Successfully!</h4>
      </div>
      <script>
          setTimeout(hidetoast,5000);
      </script>';
    }
    elseif($_SESSION["applicationsapply"]==0)
    {
      echo '<div id="dangertoast" class="alert alert-danger container m-2 mt-4" role="alert">
      <h4 class="alert-heading">Application Failed Try Again Later</h4>
      </div>
      <script>
          setTimeout(hidetoast,5000);
      </script>';
    }
    $_SESSION["applicationsapply"]=-1;
  }
  ?>
  <div id="approvals-content" class="container d-flex flex-wrap">
  </div>
</div>
</body>
<script src="./js/approvals.js"></script>
</html>