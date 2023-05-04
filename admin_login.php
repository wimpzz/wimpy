<?php

include 'db/conn.php';

session_start();

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM admins WHERE (username ='$username' or email = '$username') && password = '$pass' && user_type = 'admin'"; 
   $result = mysqli_query($conn, $select); 
   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){ 

         $_SESSION['admin_id'] = $row['id'];
         $_SESSION['user_type'] = $row['user_type'];
         $_SESSION['admin_photo'] = $row['avatar'];
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_uname'] = $row['username'];
         $_SESSION['admin_email'] = $row['email'];
         header('location:admin/index.php');
      }
     
   }else{
      $error[] = 'Incorrect Email or Password!';
   }

};

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

   *{
      font-family: 'Poppins', sans-serif;
      margin:0; padding:0;
      box-sizing: border-box;
      outline: none; border:none;
      text-decoration: none;
      
   }

   .container{
      width:100%;
      height:100%;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #a00303;
      /* background: linear-gradient(to bottom, #4d4d4d, #000000); */
      /* background-image:  url("https://www.skyscrapercity.com/attachments/60ac8dbc-6b5a-47c6-81a3-8315c5bd82b8-jpeg.3904590/");
      background-size: cover; */
   }
   
      /* .form-container{
         height:100%;
         display: block;
         padding:20px;
         padding-bottom: 60px;
         background: #a00303;
      } */

      .form-container .logo{
         /* margin: 20px; */
         display:flex;
         align-items: center;
         justify-content: center;
      }

      .form-container .logo img{
         display: inline-block;
         align-self:center;
         height: 100px;
         width: 100px;
      }

      .form-container .title{
         color: white;
         text-align:center;
         align-self:center;
         margin: 10px;
      }

      .form-container form{
         padding:30px;
         border-radius: 50px;
         box-shadow: 5px 10px 10px rgba(0,0,0,.5);
         background: #fff;
         text-align: center;
         /* height:400px; */
         width: 500px;
      }

   /*BUTTONS USERTYPE*/

      .form-container form .user-type{
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .form-container form .user-type .admin{
         background: #802a31;
         width: 30%;
         padding: 3px;
         margin: 10px;
         color:#fff;
         border-style:solid;
         border-width:3px;
         border-color:#802a31;
         border-radius:25px;
         box-shadow: 0 3px 3px rgba(0,0,0,.5);
         font-size: 20px;
      }

      .form-container form .user-type a{
         background: #fbd0d9;
         width: 30%;
         padding: 3px;
         margin: 10px;
         color:#802a31;
         font-size: 20px;
         border-style:solid;
         border-width:3px;
         border-color:#802a31;
         border-radius:25px;
         cursor: pointer;
         opacity: 0.50;
      }

      .form-container form .user-type a:hover{
         background: #802a31;
         color:#fff;
         border-style:solid;
         border-width:3px;
         border-color:#802a31;
         box-shadow: 0 3px 3px rgba(0,0,0,.5);
         opacity: 0.90;
      }

      /*END BUTTONS USERTYPE*/

      .form-container form h3{
         font-size: 26px;
         text-transform: uppercase;
         margin-bottom: 10px;
         color:#333;
      }

      .form-container form input,
      .form-container form select{
         width: 100%;
         padding:10px 15px;
         font-size: 17px;
         margin:8px 0;
         background: #eee;
         border-radius: 100px;
      }

      .form-container form select option{
         background: #fff;
      }

      .form-container form .form-btn{
         background: #a00303;
         color:#fff;
         height:50px;
         margin:0;
         border-style:solid;
         border-width:3px;
         border-color:#a00303;
         text-transform: capitalize;
         font-size: 20px;
         cursor: pointer;
      }

      .form-container form .form-btn:hover{
         background: #fbd0d9;
         color:#a00303;
         border-style:solid;
         border-width:3px;
         border-color:#a00303;
         box-shadow: 0 3px 3px rgba(0,0,0,.5);
      }

      .form-container form p{
         margin-top: 10px;
         font-size: 18px;
         color:#333;
      }

      .form-container form p .reg {
         color: #a00303;
         cursor: pointer;
      }  

      .form-container form p a{
         color:#a00303;
      }

      .form-container form .error-msg{
         display: block;
         background: #ed969e;
         color:#721c24;
         border-radius: 5px;
         font-size: 20px;
         /* padding:10px; */
      }
</style>

<?php
      if(isset($_SESSION['form_status']) && $_SESSION['form_status']==1){
        echo ' <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Saved!</strong> New Company has been successfully added on the database.
        </div>';
        $_SESSION['form_status']=0;

      }if(isset($_SESSION['form_status']) && $_SESSION['form_status']==2){
        echo ' <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Updated!</strong>Company Details is successfully edited.
        </div>';
        $_SESSION['form_status']=0;
        
      }if(isset($_SESSION['form_status']) && $_SESSION['form_status']==3){
        echo ' <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Deleted!</strong> Successfully removed from database.
        </div>';
        $_SESSION['form_status']=0;
      }
?>
 
<div class="container">
   
   <div class="form-container">
      
   <!-- <div class = "title">
      <h2>Polytechnic University of the Philippines</h2>
   </div> -->

   <form action="admin_login.php" method="post">

      <a href="index.php">
         <div class="logo">
            <img src="img/pup-logo.png">
         </div>
      </a>
    
      <br>
      <h3>login as admin</h3>
      <h4 style="margin-top:-20px;">Please enter your credentials</h4>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="username" required placeholder="Username">
      <input type="password" name="password" required placeholder="Password">
      <input type="submit" name="submit" value="login" class="form-btn">

      <p>Don't have account?
         <!-- Trigger/Open The Modal -->
         <span class="reg" id="register" onclick="window.location='admin_register.php'">Sign Up</span>
      </p>

   </form>

</div>
</div>
</body>
</html>