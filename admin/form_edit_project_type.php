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
              header('location:'.SITEURL.'admin/project_type.php');
          }
      
          $id = $_GET['id'];
          $sql = "SELECT * FROM tb_project_type WHERE id = $id";
          $res = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($res);
      
         $name =$row['name'];
        
    ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <form action="edit_project_type.php?id=<?php echo $id; ?>" class="col-5" method="POST" >
                <h1 class="text-center text-primary fs-1">Sửa loại project</h1>
                <div class="form-group">
                    <label>Tên loại</label>
                    <input type="title" name="name" class="form-control" required value="<?php echo $name; ?>">
                </div>
                <div class="d-flex justify-content-between"><button type="submit" name="submit"class="btn btn-primary">Sửa</button><a href="./project_type.php" class="btn btn-danger">Hủy</a></div>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
