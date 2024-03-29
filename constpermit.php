<?php 
session_start();
if($_SESSION["userloggedin"]!=1)
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
    <script src="./js/validations.js"></script>
</head>
<body style="font-size: 100%;">
<?php include('./includes/nav.php')?>
    <h2 class="text-center">Construction Permit Application</h2>
<form class="form-horizontal" action="./utilityscripts/constpermitapply.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
<div class="col-sm-6">
    <div class="form-group">
      <label class="control-label col-sm-4">Applicant Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control user-name" name="aname" required>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="control-label col-sm-4">Applicant Email ID</label>
      <div class="col-sm-8">
        <input id="user-email" type="text" class="form-control" name="aemail" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4">Applicant Mobile</label>
      <div class="col-sm-8">
        <input id="user-phone" type="number" class="form-control" name="amobile" required>
      </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="form-group">
      <label class="control-label col-sm-2">Applicant Address</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" rows="2" name="address" required></textarea>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-sm-4 control-label">Group Number / C.S Number / G.P.M Number</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" name="gno" required>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-sm-4 control-label">Length Of Place</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" name="length" required>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-sm-4 control-label">Width Of Place</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" name="width" required>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label class="col-sm-4 control-label">Type Of Construction</label>
      <div class="col-sm-8">
      <select class="form-select" aria-label="Default select example" name="type" required>
            <option value="RCC" selected>RCC</option>
            <option value="Shelter">Shelter</option>
            <option value="Shed">Shed</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container-fluid">
        <h4>Document Upload</h4>
        <div class="mb-3">
        <label for="formFile" class="form-label">House Rent / Water Tax Receipt</label>
        <input class="form-control" type="file" id="formFile" name="houserent" required accept=".jpg,.jpeg">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Place Gharthan / 7/12</label>
        <input class="form-control" type="file" id="formFile" name="712" required accept=".jpg,.jpeg">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Samjuticha Map</label>
        <input class="form-control" type="file" id="formFile" name="map" required accept=".jpg,.jpeg">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Plan / Estimation</label>
        <input class="form-control" type="file" id="formFile" name="plan" required accept=".jpg,.jpeg">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Rupees 100 Stamp Paper Consent Letter</label>
        <input class="form-control" type="file" id="formFile" name="consent" required accept=".jpg,.jpeg">
        </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Grampanchayat Observation Survey Report</label>
        <input class="form-control" type="file" id="formFile" name="observation" required accept=".jpg,.jpeg">
        </div>
    </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I hereby declare that all above information is true as per best of my knowledge and I shall be liable to legal action in case of above information found fraud.
      </label>
    </div>
  </div>
  <div class="text-center">
    <button class="btn btn-primary waves-effect waves-light m-2" id="btn-submit">Apply</button>
  </div>
  <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />
</form>
    

    <?php include('./includes/footer.php') ?>
</body>
</html>