
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../images/IMG_2391-e1671020212100-1024x551.jpg'); background-size: cover;">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form action='../backend/register.php'  method="POST" id="signup-form" role="form">
                    <div class="input-group input-group-outline mb-3" >
                      <label class="form-label"></label>
                      <input type="text" placeholder="First name" class="form-control" name="firstName" id="inputFirstName" >
                      
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="text" placeholder="Last name"class="form-control" name="lastName" id="inputLastName">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="email" placeholder="email"class="form-control" name="email" id="inputEmail" required pattern="[a-zA-Z0-9._%+-]+@ashesi\.edu\.gh$" title="Please enter a valid Ashesi University email address">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <select name="yearGroup" id="inputYearGroup" class="form-control" required>
                        <option value="">Select Year Group</option>
                        <option value="2021">2027</option>
                        <option value="2022">2026</option>
                        <option value="2023">2025</option>
                        <option value="2024">2024</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <select name="major" id="inputMajor" class="form-control" required>
                        <option value="">Select Major</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="MIS">MIS</option>
                        <option value="BA">BA</option>
                        <option value="Engineering">Engineering</option>
                      </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label" name="telephone"></label>
                      <input type="text" placeholder="Telephone" class="form-control" name="telephone" id="inputTelephone">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" placeholder="Password"class="form-control" name="password" id="inputPassword">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label"></label>
                      <input type="password" placeholder="Confirm Password"name="ComformPass" class="form-control" id="inputConfirmPassowrd">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body>



</html>