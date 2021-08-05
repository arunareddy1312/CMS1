<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/CMS/public/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost/CMS/public/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Edit Admin User
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="http://localhost/CMS/resources/admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="http://localhost/CMS/resources/admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="http://localhost/CMS/public/admin/img/sidebar-1.jpg">
     
      <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
          CMS
        </a>
      </div>
      <?php
        include("./app/views/admin/sidebar.php");
      ?>
    </div>
    <div class="main-panel">
      <?php
        include("./app/views/admin/navbar.php");
      ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">   
             <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>                                                   
                </div>
                <div class="card-body">
                  <form method="post" action="http://localhost/CMS/admin/User/update">
                     <?php
                    foreach($result as $data)
                    {
                    ?>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
                        </div>
                      </div>   
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                        </div>
                      </div>                   
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="inputGroupSelect01">Role</label>
                          <select class="custom-select bmd-label-floating" id="inputGroupSelect01" name="role" required="required">                            
                            <option value="1" "<?php echo $data['role'] == 1 ? 'selected' : '' ?>">Administrator</option>
                            <option value="0" "<?php echo $data['role'] == 0 ? 'selected' : '' ?>">Moderator</option>
                          </select>
                        </div>
                      </div>                      
                    </div>                    
                    <button type="submit" class="btn btn-primary pull-right">Update User</button>
                    <div class="clearfix"></div>
                    <?php
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <?php
        include("./app/views/admin/footer.php");
      ?>
    </div>
  </div> 
  <script src="http://localhost/CMS/resources/admin/js/core/jquery.min.js"></script>
  <script src="http://localhost/CMS/resources/admin/js/core/popper.min.js"></script>
  <script src="http://localhost/CMS/resources/admin/js/core/bootstrap-material-design.min.js"></script>
</body>

</html>