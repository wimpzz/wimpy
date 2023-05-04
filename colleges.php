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

    /*TTABBLLLEEE*/
    table {
      width: 100%;
      border-collapse: collapse;
      
    }
    .header_fixed {
      max-height: 150vh;
      width: 100%;
      overflow: auto;
    }

    .header_fixed thead th {
      position: sticky;
      top: 0;
      text-align: center;
      background-color: #a00303;
      color: #e8e6e6;
      font-size: 15px;
    }

    th,
    td {
        border-bottom: 1px solid #dddddd;
        padding: 10px 20px;
        font-size: 14px;
        text-align: center;
    }

    td img {
        height: 60px;
        width: 60px;
        border-radius: 100%;
        border: 2px solid #a00303;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    tr:nth-child(odd) {
        background-color: #f1eded;
    }

    tr:hover td {
        color: #251f1f;
        background-color: #f3e0e3;
    }

    td button {
        border: none;
        padding: 7px 20px;
        border-radius: 20px;
        background-color: black;
        color: #e8e6e6;
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
      <form action="index.php#branches" method="POST">
        <button class = "button2" style="margin-top:100px;"><i class="fa fa-chevron-circle-left"></i>Back&nbsp;&nbsp;&nbsp;</button>
      </form>
    </div>

    <div>
        <h3 style="color:#a00303; text-align:center;">List of Colleges</h3>
        <!-- <h3 style="color:black; text-align:center;">under Polytechnic University of the Philippines</h3> -->
    </div>

  <div class="wrapper-a" style = "margin-top:-50px;">
    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-ce.png" alt="cea"></div>
        <div class="right">
          <div class="title">College of Engineering (CE)</div>
          <?php
            $query = "SELECT * FROM college where id = 1";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        
      </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-caf.png" alt="caf"></div>
        <div class="right">
          <div class="title">College of Accountancy and Finance (CAF)</div>
          <?php
            $query = "SELECT * FROM college where id = 2 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
        
    </div>
    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cadbe.png" alt=""></div>
      <div class="right">
          <div class="title">College of Architecture, Design and the Built Environment (CADBE)</div>
          <?php
            $query = "SELECT * FROM college where id = 3 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        
      </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cal.png" alt="cal"></div>
        <div class="right">
          <div class="title">College of Arts and Letters (CAL)</div>
          <?php
            $query = "SELECT * FROM college where id = 4 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cba.png" alt="cba"></div>
        <div class="right">
          <div class="title">College of Business Administration (CBA)</div>
          <?php
            $query = "SELECT * FROM college where id = 5 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-coc.png" alt=""></div>
        <div class="right">
          <div class="title">College of Communication (COC)</div>
          <?php
            $query = "SELECT * FROM college where id = 6 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-ccis.png" alt="ccis"></div>
        <div class="right">
          <div class="title">College of Computer and Information Sciences (CCIS)</div>
          <?php
            $query = "SELECT * FROM college where id = 7 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-coed.png" alt="coed"></div>
        <div class="right">
          <div class="title">College of Education (COED)</div>
          <?php
            $query = "SELECT * FROM college where id = 8 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-chk.png" alt="chk"></div>
        <div class="right">
          <div class="title">College of Human Kinetics (CHK)</div>
          <?php
            $query = "SELECT * FROM college where id = 9 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cl.png" alt="cl"></div>
        <div class="right">
          <div class="title">College of Law (CL)</div>
          <?php
            $query = "SELECT * FROM college where id = 10 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-pspa.png" alt="pspa"></div>
        <div class="right">
          <div class="title">College of Political Science and Public Administration (CPSPA)</div>
          <?php
            $query = "SELECT * FROM college where id = 11 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cssd.png" alt="cssd"></div>
        <div class="right">
          <div class="title">College of Social Sciences and Development (CSSD)</div>
          <?php
            $query = "SELECT * FROM college where id = 12 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cs.png" alt="cs"></div>
        <div class="right">
          <div class="title">College of Science (CS)</div>
          <?php
            $query = "SELECT * FROM college where id = 13 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo-cthtm.png" alt=""></div>
        <div class="right">
          <div class="title">College of Tourism, Hospitality and Transportation Management (CTHTM)</div>
          <?php
            $query = "SELECT * FROM college where id = 14 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>

    <div class="announce-card">
      <div class="left"><img src="favicon/pup-logo.png" alt=""></div>
        <div class="right">
          <div class="title">Others</div>
          <?php
            $query = "SELECT * FROM college where id = 15 ";
            $query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $row){
                $text = $row['name'];
                $course_id = $row['course_key'];
              ?>
              <?php
              }
              ?>
              <?php
            }
          ?>
          <div>
            <form action="company.php?id=<?=$row['course_key'];?>" method="POST">
              <button>View More</button>
            </form>
          </div>  
        </div>
    </div>
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
              // when the document is ready
              $( document ) .ready(function() {
                  $ (" #myTable") . dataTable () ;
              });
</script>



<script src="https://kit.fontawesome.com/49bf074e28.js" crossorigin="anonymous"></script>

</body>
</html>