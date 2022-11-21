<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/owl.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">
    <link rel="stylesheet" href="css/testyslider.css">
    <title>Document</title>
</head>
<body>
    <!--START STUDENT REGISTRATION-->
  <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenterLabel">Contact US</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--end STUDENT REGISTRATION-->
        <!--  form code start -->
          <form action="authentication.php" method="POST">
            <div class="form-group">
              <i class="fas fa-user"></i><label for="stuname"
             class="pl-2 font-weight-bold">Name</label><input type="text"
             class="form-control" placeholder="Name"
             name="stuname" id="stuname" required>
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i><label for="stuemail"
               class="pl-2 font-weight-bold">Mob.</label><input type="number"
               class="form-control" placeholder="email"
               name="stuemail" id="stuemail" required>
               <small class="form-text">we will never share your email with anyone else</small>
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i><label for="stupass"
               class="pl-2 font-weight-bold">Address</label><input type="text"
               class="form-control" placeholder="password"
               name="stupass" id="stupass" required>
               </div>
          
          <!--  form code end -->
        </div>
        <div class="modal-footer">
          <span id ="successMsg"></span>
            <input type="submit" class="btn btn-primary" name="signup" value="Done">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           </div>
          </form>
           </div>
          
      </div>
    </div>
  </div>
  <!--END STUDENT REGISTRATION-->
</body>
</html>