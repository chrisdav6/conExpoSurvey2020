<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
  <title>ConExpo 2020 Survey</title>
</head>

<body>
  <header class="py-5 text-center bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-lg-6">
          <img class="img-fluid" src="./img/transtech-logo-bold-type.png" alt="TransTech Systems Logo">
          <h2 class="sub-text ml-3">ConExpo 2020 Survey</h2>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-11 col-lg-8 mx-auto">
        <form action="./submit.php" method="POST">

          <div class="form-group">
            <label for="email" class="bold">Email:</label>
            <input class="form-control form-control-lg" type="text" name="email" id="email" placeholder="Enter your email">
            <small class="text-warning">Optional</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Are you a current TransTech Systems customer?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="currentCustomer" id="currentCustomer1" value="Yes" required>
              <label class="form-check-label" for="currentCustomer1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="currentCustomer" id="currentCustomer2" value="No" required>
              <label class="form-check-label" for="currentCustomer2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you currently perform compaction where testing is needed?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="compaction" id="compaction1" value="Yes" required>
              <label class="form-check-label" for="compaction1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="compaction" id="compaction2" value="No" required>
              <label class="form-check-label" for="compaction2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you perform your own density testing?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="density" id="density1" value="Yes" required>
              <label class="form-check-label" for="density1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="density" id="density2" value="No" required>
              <label class="form-check-label" for="density2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you or would you utilize onboard data storage? </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="storage" id="storage1" value="I do" required>
              <label class="form-check-label" for="storage1">I do</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="storage" id="storage2" value="I might" required>
              <label class="form-check-label" for="storage2">I might</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="storage" id="storage3" value="I don't like to type!" required>
              <label class="form-check-label" for="storage3">I don't like to type!</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Is a GPS tagged location useful for your work?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gps" id="gps1" value="Yes" required>
              <label class="form-check-label" for="gps1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gps" id="gps2" value="No" required>
              <label class="form-check-label" for="gps2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">What level of accuracy would you require? </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="accuracy" id="accuracy1" value="Sub cm" required>
              <label class="form-check-label" for="accuracy1">Sub cm</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="accuracy" id="accuracy2" value="Sub meter" required>
              <label class="form-check-label" for="accuracy2">Sub meter</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="accuracy" id="accuracy3" value="Nearest Dinner!" required>
              <label class="form-check-label" for="accuracy3">Nearest Dinner!</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">What level of vertical accuracy would you require? </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="verticalAccuracy" id="verticalAccuracy1" value="Cm" required>
              <label class="form-check-label" for="verticalAccuracy1">Cm</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="verticalAccuracy" id="verticalAccuracy2" value="Meter" required>
              <label class="form-check-label" for="verticalAccuracy2">Meter</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="verticalAccuracy" id="verticalAccuracy3" value="10 Meters" required>
              <label class="form-check-label" for="verticalAccuracy3">10 Meters</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="verticalAccuracy" id="verticalAccuracy4" value="Doesn't Matter" required>
              <label class="form-check-label" for="verticalAccuracy4">Doesn't Matter</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you use Survey Grade Systems?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="survey" id="survey1" value="Yes" required>
              <label class="form-check-label" for="survey1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="survey" id="survey2" value="No" required>
              <label class="form-check-label" for="survey2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group">
            <label for="surveyBrand" class="bold">If you do use Survey Grade Systems, what brand?</label>
            <input class="form-control form-control-lg" type="text" name="surveyBrand" id="surveyBrand" placeholder="Survey Grade System Brand">
            <small class="text-warning">Optional</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you use Site Management Systems such as Topcon, SiteLink3D or Trimble Siteworks?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="siteManagement" id="siteManagement1" value="Yes" required>
              <label class="form-check-label" for="siteManagement1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="siteManagement" id="siteManagement2" value="No" required>
              <label class="form-check-label" for="siteManagement2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group">
            <label for="siteBrand" class="bold">If you do use Site Management Systems, what brand?</label>
            <input class="form-control form-control-lg" type="text" name="siteBrand" id="siteBrand" placeholder="Site Management Systems Brand">
            <small class="text-warning">Optional</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Do you like the idea of controlling the gauge from a handheld device such as a tablet via Bluetooth?</p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bluetoothCapable" id="bluetoothCapable1" value="Yes" required>
              <label class="form-check-label" for="bluetoothCapable1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bluetoothCapable" id="bluetoothCapable2" value="No" required>
              <label class="form-check-label" for="bluetoothCapable2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <div class="form-group mt-4">
            <p class="bold">Would you use remote access via WiFi, Bluetooth or cellular to transfer/review data from the gauge? </p>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="reviewData" id="reviewData1" value="Yes" required>
              <label class="form-check-label" for="reviewData1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="reviewData" id="reviewData2" value="No" required>
              <label class="form-check-label" for="reviewData2">No</label>
            </div>
            <small class="text-danger d-block">* Required</small>
          </div>

          <button class="btn btn-warning btn-lg btn-block mt-5 p-3">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>