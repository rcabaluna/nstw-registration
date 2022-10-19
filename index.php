<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>National Science and Technolgy Week - Register</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

  <script>
    var BASE_URL = 'http://localhost/nstw-registration/';
  </script>

</head>

<body class="">
  <main class="main-content  mt-0" style="background-color: #0d2155;">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">National Science and Technology Week (NSTW) sa Amihanang Mindanao</h4>
                  <p class="mb-0">The Department of Science and Technology Region X, in collaboration with the Technology Applications and Promotions Institute, will be celebrating the National Science and Technology Week (NSTW) sa Amihanang Mindanao with the theme, “Agham at Teknolohiya: Kabalikat sa Maunlad at Matatag na Kinabukasan”, this coming October 25-30, 2022, at the Limketkai Center, Cagayan de Oro City, Misamis Oriental. NSTW highlights the significant contributions of science and technology to national development and has become a platform for heralding S&T advocacy in the country. Other important activities of the NSTW include exhibitions, awarding of stakeholders, technical and investment forums, technology demonstrations, and scientific meetings.<br>The six-day celebration is simultaneous with the Mindanao Food Congress and Orobest Expo 2022 organized by the Cagayan de Oro Chamber of Commerce and Industry Foundation, Inc. (OROCHAMBER). It will be attended by national guests, entrepreneurs, students, and faculty from the academe, private sectors, industry, and other stakeholders.</p>
                </div>
                <div class="card-body" id="regisration-card-body-container" style="background-color: white;">
                  <form role="form" id="registration-form">
                    <div class="row">
                      <div class="col-md-4">
                      <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name Name (First, M.I., Last Name, Suffix)</label>
                      <input type="text" name="fullname" class="form-control" required>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control">
                    </div>
                    
                    </div>
                    <div class="col-md-4">
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Contact No</label>
                      <input type="text" name="contactno" class="form-control">
                    </div>
                    </div>
                      
                    </div>
                    <div class="input-group input-group-static mb-2">
                      <label for="exampleFormControlSelect1" class="ms-0">Sex</label>
                      <select class="form-control" name="sex" required>
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="input-group input-group-static mb-2">
                      <label for="exampleFormControlSelect1" class="ms-0">Age</label>
                      <select class="form-control" name="age" required>
                        <option value=""></option>
                        <option value="Below 13">Below 13</option>
                        <option value="13-25">13-25</option>
                        <option value="26-35">26-35</option>
                        <option value="36-45">36-45</option>
                        <option value="46-59">46-59</option>
                        <option value="60 above">60 above</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <div class="input-group input-group-static mb-3">
                      <label for="exampleFormControlSelect1"  class="ms-0">Affiliation</label>
                      <select class="form-control" name="affiliation">
                        <option value=""></option>
                        <option value="Entrepreneur/Investor">Entrepreneur/Investor</option>
                        <option value="Employee (Government)">Employee (Government)</option>
                        <option value="Employee (Private)">Employee (Private)</option>
                        <option value="Researcher/Educator">Researcher/Educator</option>
                        <option value="Student">Student</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">City/Municipality</label>
                          <input type="text" name="mun_city" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Province</label>
                          <input type="texxt" name="province" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="input-group input-group-static mb-2">
                          <label for="exampleFormControlSelect1" class="ms-0">Institution/Agency Category</label>
                          <select class="form-control" name="inst_agency">
                            <option value=""></option>
                            <option value="Cooperative / Community Association">Cooperative / Community Association</option>
                            <option value="Academe">Academe</option>
                            <option value="MSMEs">MSMEs</option>
                            <option value="Large Industry">Large Industry</option>
                            <option value="LGUs">LGUs</option>
                            <option value="Regional Line Agency">Regional Line Agency</option>
                            <option value="Non-government Organization">Non-government Organization</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Name of Institution/agency</label>
                          <input type="text" name="inst_agency_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Designation</label>
                          <input type="texxt" name="designation" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-check form-check-primary text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Register</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="barcode-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Barcode</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="generated-barcode-img"></div>
            </div>
            <div class="modal-footer">
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="register/script/register-script.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
  
</body>

</html>