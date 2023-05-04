<?php
include 'db/conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Company Details</title>
  <link rel="shortcut icon" type="image/png" href="favicon/pup-logo.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
	 <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      <!--table filter-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/und/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
       <!--table filter-->
   </head>
<body>

<style>
   .container-btn {
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		height: auto;
	}

   .square {
      display: inline-block;
      align-items: center;
      margin-top: 10px;
      margin-left: 3px;
      padding-left: 20px;
      padding-right: 20px;
      max-width: auto;
      position: wrap;
      justify-content: center;
      height: auto;  
      width: auto;
      font-size: 16px;
      border: none;
      outline: none;
      color: #fff;
      border-radius: 20px;
      background-color: #a00303;
      transition: all 0.1s linear;
      cursor:grab;
	}
   .square:hover{
      background: none;
      color:#802a31;
      font-weight: 500;
      border-style:solid;
      border-width:1px;
      border-color:#a00303;
      box-shadow: 0 3px 3px rgba(0,0,0,.5);
   }
   
   button{
      display: flex;
      align-items: center;
      margin-top: 10px;
      position: wrap;
      justify-content: center;
      height: auto;  
      width: auto;
      font-weight: 200;
      font-size: 20px;
      border: none;
      outline: none;
      color: #fff;
      border-radius: 20px;
      background-color: #a00303;
      transition: all 0.1s linear;
      cursor: pointer;
   }
          
   button:hover{
      background: none;
      color:#802a31;
      font-weight: 500;
      border-style:solid;
      border-width:1px;
      border-color:#a00303;
      box-shadow: 0 3px 3px rgba(0,0,0,.5);
   }
   .button2{
      display: flex;
      align-items: center;
      margin-top: 10px;
      position: wrap;
      justify-content: center;
      height: auto;  
      width: auto;
      font-weight: 200;
      font-size: 20px;
      border: none;
      outline: none;
      color: #fff;
      border-radius: 20px;
      background-color: #a00303;
      transition: all 0.1s linear;
      cursor: pointer;
   }
          
   .button2:hover{
      background: none;
      color:#802a31;
      font-weight: 500;
      border-style:solid;
      border-width:1px;
      border-color:#a00303;
      box-shadow: 0 3px 3px rgba(0,0,0,.5);
   }
   
</style>   

<?php
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      $row = "SELECT * FROM companies_1 WHERE id = '$id'";
      $result = mysqli_query($conn, $row);
      if(mysqli_num_rows($result) > 0){
         foreach($result as $rows){
         ?>
         <?php
         }
         }else{
         ?>
         <h4></h4>
         <?php
         
      }
   }
?>     

<div class="a_wrap" ><!--flex-direction=row-->
   <div class="a_contents" ><!--flex-direction=row-->
      <div class="a-border">
         <div>
            <form action="company2.php?id=<?=$row['course_key'];?>" method="POST">
               <button class = "button2" onclick="goBack()" style="float:left;"><i class="fa fa-chevron-circle-left"></i>Back&nbsp;&nbsp;&nbsp;</button>
               
               <script>
               function goBack() {
                  window.history.back();
               }
               </script>
            </form>
         </div>

         <?php
            if(isset($_GET['id'])){
               $id = $_GET['id'];
               $row = "SELECT *, DATE_FORMAT(moa, '%M %d, %Y') as start_date, DATE_FORMAT(exp_date, '%M %d, %Y') as end_date FROM companies_1 WHERE id = '$id'";
               $result = mysqli_query($conn, $row);
                  if(mysqli_num_rows($result) > 0){
                     foreach($result as $rows){ 
                        $google_pic = $rows['photo'];
                        $file_pic = $rows['photo_upload'];
                        $course1 = $rows['pref_courses'];
                        $courses = $rows['pref_course2'];
                        $email = $rows['email_add'];
                        $moa_start = $rows['moa'];
                        $moa_end = $rows['exp_date'];
                        $start_date = $rows['start_date'];
                        $end_date = $rows['end_date'];
                        $moa_type = $rows['moa_type'];
                  ?>

                  <div class="displaypic">
                     <?php
                        if($google_pic != ""){
                           echo '<img src="https://drive.google.com/uc?id=' . $google_pic . '" alt="" style="height:200px;width:200px;border-radius:50%;">';
                        }else if ($file_pic != ""){
                           echo '<img src="' . $file_pic . '" alt="" style="height:200px;width:200px;border-radius:50%;">';
                        }
                     ?> 
                  </div>
                  
                  <div class="displaytxt">
                     <div class="a_title">
                        <?= $rows['company_name'];?>
                     </div>
                  </div>

                  <div class="displaytxt">
                     <p class="a_caption" id="p">
                        <div class="td">
                           <?php
                              echo '<h3>Preferred Courses:</h3>';
                              $courses = explode(',', $courses);
                              foreach ($courses as $courses) {
                                 echo '<div  class="square" >'.$courses.'</div>';
                              }
                           ?>
                           
                        </div>
                     </p>
                     
                  </div>

                  <div class="info-content">
                     <div class="detail-info" >
                     <h2 style="color:#a00303; text-align:center; margin-top:30px;margin-bottom:30px;" class="sec">Company</h2>
                        <table>
                           <tr>
                              <td>Contact Person:</td>
                              <td><?= $rows['contact_person'];?></td>
                           </tr>
                           <tr>
                              <td>Position:</td>
                              <td><?= $rows['position'];?></td>
                           </tr>
                           <tr>
                              <td>Specific Business of Nature:</td>
                              <td><?= $rows['spec_business_nature'];?></td>
                           </tr>
                           <tr>
                              <td>Preferred Colleges:</td>
                              <td>
                                 <?php
                                    $college = explode(',', $rows['pref_college']);
                                    foreach ($college as $college) {
                                       echo  $college. '<br>';
                                    }
                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>Cellphone Number:</td>
                              <td>
                                 <?php
                                    $cell = explode(';', $rows['cell_no']);
                                    foreach ($cell as $cell) {
                                       echo  $cell. '<br>';
                                    }
                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>Telephone Number:</td>
                              <td>
                                 <?php
                                    $tel = explode(';', $rows['tel_no']);
                                    foreach ($tel as $tel) {
                                       echo  $tel. '<br>';
                                    }
                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>Email:</td>
                              <td>
                              <?php
                                 $email = explode(';', $rows['email_add']);
                                    foreach ($email as $email) {
                                       echo  $email. '<br>';
                                    }
                              ?>
                              </td>
                           </tr> 
                           <tr>
                              <td>Office Address:</td>
                              <td><?= $rows['office_add'];?></td>
                           </tr>
                           <tr>
                              <td>City Address:</td>
                              <td><?= $rows['city_add'];?></td>
                           </tr>
                             
                        </table>
                        
                     </div>

                     <div class="detail-info" id = "moa_deets">
                        <h2 style="color:#a00303; text-align:center; margin-top:30px;margin-bottom:30px;">Memorandum of Agreement (MOA)</h2>
                        <table>
                           <?php
                              if ($moa_start != "0000-00-00"){
                                 echo '<tr>';
                                 echo '<td>Starting Date:</td>';
                                 echo '<td>'.$start_date.'</td>';
                                 echo '</tr>';
                                 echo '<tr>';
                                 echo '<td>Expiration Date:</td>';
                                 echo '<td>'.$end_date.'</td>';
                                 echo '</tr>';
                                 echo '<tr>';
                                 echo '<td>Type of MOA:</td>';
                                 echo '<td>'.$moa_type.'</td>';
                                 echo '</tr>';

                                 $current_date = date('Y-m-d');
                                 $date_difference = strtotime($end_date) - strtotime($current_date);
                                 $month_seconds = 30 * 24 * 60 * 60;

                                 if($date_difference > 0 && $date_difference <= $month_seconds){
                                    echo '<td style="background-color: orange;"></td>';
                                    echo '<td style="background-color: orange;"></td>';
                                    echo '<i class="fa-regular fa-clock fa-2x" style="color: orange;"></i>'.'<p style="color:orange; font-weight:500;">Expiring Soon</p>';
                                    echo '</td>';
                                 }else if ($date_difference <= 0){
                                    echo '<td style="background-color: red;"></td>';
                                    echo '<td style="background-color: red;"></td>';
                                    echo '<i class="fa-solid fa-xmark fa-2x" style="color: red;"></i>'.'<p style="color:red; font-weight:500;">Expired</p>';
                                    echo '</td>';   
                                 }else{
                                    echo '<td style="background-color: green;"></td>';
                                    echo '<td style="background-color: green;"></td>';
                                    echo '<i class="fa-solid fa-check fa-2x" style="color: green;"></i>'.'<p style="color:green; font-weight:500;">Valid</p>';
                                    echo '</td>';
                                 }

                                 // $current_date = date('Y-m-d');
                                 // if (strtotime($current_date) > strtotime($moa_end)) {
                                 //    echo '<td style="background-color: red;"></td>';
                                 //    echo '<td style="background-color: red;"></td>';
                                 //    echo '<i class="fa-solid fa-xmark fa-2x" style="color: red;"></i>'.'<p style="color:red ; font-weight:600;">Expired</p>';
                                 // }else{
                                 //    echo '<tr>';
                                 //    echo '<td style="background-color: green;"></td>';
                                 //    echo '<td style="background-color: green;"></td>';
                                 //    echo '<i class="fa-solid fa-check fa-2x" style="color: green;"></i>'.'<p style="color:green; font-weight:600;">Valid</p>';
                                 //    echo '</tr>';
                                 // }

                              }else{
                                 echo '<h3>No MOA Available</h3>';
                                 echo '<tr>';
                                 echo '<td style="background-color: black;"></td>';
                                 echo '<td style="background-color: black;"></td>';
                                 echo '</tr>';
                              }
                           ?>
                            
                        </table>
                        
                     </div>
                     
                  </div>

                  <div>
                     <a href="" onclick="print()" class="add"><i class="fa-solid fa-print"></i>&nbsp;Print</a>
                  </div>
               

                  <?php
                     }
                  }else{
                  ?>
                     <h4></h4>
                  <?php
                  }
               }
         ?>  
      </div>
      
      

   </div>

   

</div>

<?php
   // include_once './includes/footer.php';
?>



<script src="https://kit.fontawesome.com/49bf074e28.js" crossorigin="anonymous"></script>
</body>
</html>
