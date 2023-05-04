<?php
// Start a session
include 'db/conn.php';
include 'db/function.php';

session_start();

// Check if form is submitted
if (isset($_POST['submit'])) {
	// Get form data
	$username = $_POST['username'];
   $password = $_POST['password'];
   $code = $_POST['code'];
	$password_hash = md5($_POST['password']);

	$query = "SELECT * FROM admins WHERE username='$username'";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0){
      $error[] = 'Username has been already taken';
   }else if (strlen($password) < 8) {
      $error[] = "Password must be at least 8 characters";
	}else{
      if ($_POST['code'] === '@bscoe42'){
         // Insert user details into database
         $code = md5($_POST['code']);
         $query = "INSERT INTO admins (username, password, code, user_type, avatar) VALUES ('$username', '$password_hash', '$code', 'admin', 'img/users_profile/5.png')";
         if (mysqli_query($conn, $query)) {
            $_SESSION['reg_status']=1;
            header('Location:admin_login.php');
            exit;
         }else {
            // $_SESSION['message'] = "Error registering user: " . mysqli_error($conn);
            // header("location: admin_register.php");
            // exit;
         }
      }
      else{
         // $_SESSION['form_status']=2;
         $_SESSION['reg_status']=2;
         header('Location:admin_register.php');
         exit;
      }
	}

	// Close database connection
	mysqli_close($conn);
}
?>

<?php
      if(isset($_SESSION['reg_status']) && $_SESSION['reg_status']==1){
      //   echo ' <div class="alert alert-success alert-dismissable">
      //   <button type="button" class="close" data-dismiss="alert">&times;</button>
      //   <strong>Success!</strong>"You have successfully registered"
      //   </div>';
      //   $_SESSION['reg_status']=0;
      }else if(isset($_SESSION['reg_status']) && $_SESSION['reg_status']==2){
         // echo ' <div class="alert alert-success alert-dismissable">
         // <button type="button" class="close" data-dismiss="alert">&times;</button>
         // <strong>Failed!</strong>"Invalid Code"
         // </div>';
         $error[] = 'Invalid Admin Code';
         // $_SESSION['reg_status']=0;
       }
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

      .form-container form p .login {
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
 
<div class="container">
   <div class="form-container">

      <!-- <a href="index.php">
      <div class="logo">
         <img src="img/pup-logo.png">
      </div>
      </a> -->

         <form action="" method="POST">
            <a href="index.php">
            <div class="logo">
               <img src="img/pup-logo.png">
            </div>
            </a>

            <h3>REGISTER AS ADMIN</h3>
            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>

            <input type="text" name="username" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="code" placeholder="Admin Code">
            <input type="submit" name="submit" value="Sign Up" class="form-btn">
            
            <p>Already have account? 
               <!-- Trigger/Open The Modal -->
               <span class="login" id="login" onclick="window.location='admin_login.php'">Log in</span></p>

         </form>
   </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>