<?php include_once('../config/db.php');?>
<?php include_once('project_function.php');?>
<?php 
    if(!isset($_SESSION['login-success'])){
        header('location:'.SITEURL.'admin/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cubic</title>
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="../assets/js/font-awesome.min.js"></script>
    <style>
      table select.form-control {
        display: unset;
        width: unset;
      }
    </style>
  </head>
  <body>
    <?php include('./component/header.php');
   
    if(isset($_SESSION['msg_project'])){
      echo $_SESSION['msg_project'];
      unset($_SESSION['msg_project']);
    }
    if(!isset($_GET['id'])){
        $_SESSION['msg_project'] = "<script> alert('Trang không tồn tài')</script>";
        header('location:'.SITEURL.'admin/accounts.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_account WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);

   $username =$row['username'];
    ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <form action="edit_account.php?id=<?php echo $id; ?>" class="col-5" method="POST">
                <h1 class="text-center text-primary fs-1">Đổi mật khẩu</h1>
                <div class="form-group">
                    <label>Tên tài khoản</label>
                    <input type="text" name="username" class="form-control" required value="<?php echo $username; ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Old password</label>
                    <input type="password" name="oldpassword" class="form-control"  >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"  >
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="repassword" class="form-control" onchange="checkRepassword()">
                    <span class="alert alert-pass alert-danger d-none">Mật khẩu mới phải trùng nhau</span>
                </div>
                <div class="d-flex justify-content-between"><button type="submit" name="submit"class="btn btn-primary">Sửa</button><a href="./accounts.php" class="btn btn-danger">Hủy</a></div>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
         function checkRepassword(){
            let pass = document.querySelector("input[name=password]").value;
            let repass = document.querySelector("input[name=repassword]").value;
            let alert = document.querySelector(".alert-pass");

            if(pass == repass){
                alert.classList.add("d-none");
            }else{
                alert.classList.remove("d-none");
            }

        }
    </script>
  </body>
</html>
