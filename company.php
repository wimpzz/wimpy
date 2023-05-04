<?php
include 'db/conn.php';
include 'db/function.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Company</title>
    <link rel="shortcut icon" type="image/png" href="favicon/pup-logo.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--table filter-->
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/und/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
       <!--table filter-->
   </head>


<style>
  .container-btn{
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
		height: auto;
	}

  .button2{
      display: flex;
      align-items: center;
      margin-top: 10px;
      margin-left: 10px;
      position: wrap;
      justify-content: center;
      height: auto;  
      width: auto;
      font-weight: 200;
      font-size: 16px;
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
      color:#a00303;
      font-weight: 500;
      border-style:solid;
      border-width:1px;
      border-color:#802a31;
      box-shadow: 0 3px 3px rgba(0,0,0,.5);
    }

    .button2.active {
      background-color: blue;
      color: white;
    }


</style>

<body>
    <?php
      include_once './includes/topbar.php';
    ?>
  
    <?php
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $row = "SELECT * FROM college WHERE id = '$id'";
        $result = mysqli_query($conn, $row);
        if(mysqli_num_rows($result) > 0){
          foreach($result as $rows){
            $name = $rows['name'];
            $course = $rows['course_key'];
            $college = $rows['college_name'];
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

    <?php
      $query = "SELECT * FROM college where id = '1'";
      $query_run = mysqli_query($conn, $query);
      if(mysqli_num_rows($query_run) > 0){
        foreach($query_run as $row){
                    
        ?>
        <?php
        }
        ?>
        <?php
      }
    ?>

    <div>
      <form action="colleges.php" method="POST">
        <button class = "button2" style="margin-top:100px;"><i class="fa fa-chevron-circle-left"></i>Back&nbsp;&nbsp;&nbsp;</button>
      </form>
    </div>

    <div>
        <h2 style="color:#a00303; text-align:center;"><?= $name?></h2>
    </div>

      <div class = header_fixed>
        <table id="myTable">
          <thead>
            <tr>
              <th>Company</th>
              <th>Name</th>
              <th>Nature of Business</th>
              <th>City</th>
              <th>College</th>
              <th>Action</th>
            </tr>
          </thead>
        
      </div>
          
          <?php
            if ($course == 1) {
              $query = "SELECT * FROM companies_1 WHERE course_key = 1";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                  $course = "College of Engineering";
                ?>
                  <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                  </tr>
                <?php
                }
                }else{
                ?>
                <?php
                }

              $course = $row["course_key"];
              
              echo '<div class = "container-btn">';
              
              echo '<form action="company.php?id=' .$course. '" method="POST">';
              echo '<button id = all_btn class = "button2" type="submit" name="all_sort" onclick = "all_alert()" title="College of Engineering">ALL</button>';
              echo '</form>';

              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="ce_sort" onclick = "ce_alert()" title="Bachelor of Science in Civil Engineering">BSCE</button>';
              
              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="cpe_sort" onclick = "cpe_alert()" title="Bachelor of Science in Computer Engineering">BSCPE</button>';

              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="ee_sort" onclick = "ee_alert()" title="Bachelor of Science in Electrical Engineering">BSEE</button>';
              
              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="ece_sort" onclick = "ece_alert()" title="Bachelor of Science in Electronics Engineering">BSECE</button>';
              
              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="ie_sort" onclick = "ie_alert()" title="Bachelor of Science in Industrial Engineering">BSIE</button>';

              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="me_sort" onclick = "me_alert()" title="Bachelor of Science in Mechanical Engineering">BSME</button>';

              echo '<form action="company2.php?id=' .$course. '" method="POST">';
              echo '<button class = "button2" type="submit" name="re_sort" onclick = "re_alert()" title="Bachelor of Science in Railway Engineering">BSRE</button>';
              
              $script = '<script>';


              $script .= 'function ce_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Civil Engineering");';
              $script .= '}';

              $script .= 'function cpe_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Computer Engineering");';
              $script .= '}';

              $script .= 'function ee_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Electrical Engineering");';
              $script .= '}';

              $script .= 'function ece_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Electronics Engineering");';
              $script .= '}';

              $script .= 'function ie_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Industrial Engineering");';
              $script .= '}';

              $script .= 'function me_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Mechanical Engineering");';
              $script .= '}';

              $script .= 'function re_alert(){';
              $script .= 'alert("Sorting Bachelor of Science in Railway Engineering");';
              $script .= '}';

              $script .= '</script>';

              echo $script;

              echo '</form>';

              echo '</div>';

              //COURSE//

              if (isset($_POST['all_sort'])) {
                $query = "SELECT *,photo FROM companies_1 WHERE course_key = 1";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "College of Engineering";
                    ?>
                    <tr>
                      <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                      <td><?= $row['company_name']; ?></td>
                      <td><?= $row['spec_business_nature']; ?></td>
                      <td><?= $row['city_add']; ?></td>
                      <td><?= $course;?></td>
                      <td>
                        <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                          <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                        </form>
                      </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }

              }else if (isset($_POST['ce_sort'])) {
                $query = "SELECT * FROM companies_1  WHERE course_key = 1 and business_nature LIKE '%Civil Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Civil Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip" id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
              }else if (isset($_POST['cpe_sort'])) {
                $query = "SELECT * FROM companies_1  WHERE course_key = 1 and business_nature LIKE '%Computer Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Computer Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
              }else if (isset($_POST['ee_sort'])) {
                $query = "SELECT * FROM companies_1 WHERE course_key = 1 and business_nature LIKE '%Electrical Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Electrical Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
                
            }else if (isset($_POST['ece_sort'])) {
                $query = "SELECT * FROM companies_1 WHERE course_key = 1 and business_nature LIKE '%Electronics Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Electronics Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }    
            }else if (isset($_POST['ie_sort'])) {
                $query = "SELECT * FROM companies_1 WHERE course_key = 1 and business_nature LIKE '%Industrial Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Industrial Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
            }else if (isset($_POST['me_sort'])) {
                $query = "SELECT * FROM companies_1 WHERE course_key = 1 and business_nature LIKE '%Mechanical Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Mechanical Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
            }else if (isset($_POST['re_sort'])) {
                $query = "SELECT * FROM companies_1 WHERE course_key = 1 and business_nature LIKE '%Railway Engineering%'";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $row){
                        $course = "Bachelor of Science in Railway Engineering"
                    ?>
                    <tr>
                    <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>"></td>
                    <td><?= $row['company_name']; ?></td>
                    <td><?= $row['spec_business_nature']; ?></td>
                    <td><?= $row['city_add']; ?></td>
                    <td><?= $course;?></td>
                    <td>
                      <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                        <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                      </form>
                    </td>
                    </tr>
                    <?php
                    }
                }else{
                ?>
                <?php
                }
            }

            }elseif ($course == 2){
              $query = "SELECT *, photo FROM companies_1 where course_key = 2";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }elseif ($course == 3){
              $query = "SELECT *, photo FROM companies_1 where course_key = 3";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 4){
              $query = "SELECT *, photo FROM companies_1 where course_key = 4";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 5){
              $query = "SELECT *, photo FROM companies_1 where course_key = 5";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 6){
              $query = "SELECT *, photo FROM companies_1 where course_key = 6";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 7){
              $query = "SELECT *, photo FROM companies_1 where course_key = 7";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 8){
              $query = "SELECT *, photo FROM companies_1 where course_key = 8";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 9){
              $query = "SELECT *, photo FROM companies_1 where course_key = 9";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 10){
              $query = "SELECT *, photo FROM companies_1 where course_key = 10";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 11){
              $query = "SELECT *, photo FROM companies_1 where course_key = 11";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 12){
              $query = "SELECT *, photo FROM companies_1 where course_key = 12";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 13){
              $query = "SELECT *, photo FROM companies_1 where course_key = 13";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 14){
              $query = "SELECT *, photo FROM companies_1 where course_key = 14";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }else if ($course == 15){
              $query = "SELECT *, photo FROM companies_1 where course_key = 15";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $row){
                  $name = "Any four-year course";
                ?>
              
                <tr>
                  <td><img src="https://drive.google.com/uc?id=<?= $row['photo']; ?>" alt=''></td>
                  <td><?= $row['company_name']; ?></td>
                  <td><?= $row['spec_business_nature']; ?></td>
                  <td><?= $row['city_add']; ?></td>
                  <td><?= $name?></td>
                  <td>
                    <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
                      <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
                    </form>
                  </td>
                </tr>
                  <?php
                  }
              }else{
              ?>
              <?php
              }
            }  
          ?>
        </table>
      </div>
      

  <?php
    include_once './includes/footer.php';
  ?>

<script>//search-engine  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script> 

<script>//table-filters 
    $( document ) .ready(function() {
    $ (" #myTable") . dataTable () ;
    });
  </script>       

  <script>//View All Entities
    var table = $('#myTable').dataTable({
      dom: 'Blfrtip',
      buttons: [
        'csvHtml5'
      ],
      lengthMenu: [
        [-1, 10, 25, 50, 100],
        ['All', 10, 25, 50, 100]
      ],
      pageLength: -1
    });

    $('select[name="myTable_length"]').on('change', function() {
      if ($(this).val() == '-1') {
        table.page.len(table.data().length).draw();
      }
    });
  </script>



<script src="https://kit.fontawesome.com/49bf074e28.js" crossorigin="anonymous"></script>

</body>
</html>