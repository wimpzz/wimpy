<?php

include 'db/conn.php';
include 'db/function.php';

session_start();

if (isset ($_SESSION['user_type'])&& $_SESSION['user_type'] == "admin"){
  header("Location: user/index.php");
}else if(isset ($_SESSION['user_type'])&& $_SESSION['user_type'] == "user"){
  header("Location: user/index.php");
}
else{
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>Company Database</title>
  <link rel="shortcut icon" type="image/png" href="favicon/pup-logo.png">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <style>
    .alert {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      padding: 20px;
      background-color: #fff;
      z-index: 999;
    }

    .alert h2 {
      margin-top: 0;
    }

    .alert p {
      margin: 20px 0;
    }

    .alert button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    .alert button:hover {
      background-color: #0069d9;
    }

    .alert .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      font-weight: bold;
      color: #aaa;
      text-decoration: none;
    }

    .alert .close-btn:hover {
      color: #000;
    }

  </style>

<body>
  <?php
    include_once './includes/topbar.php';
  ?>

  <section class="home-section"> 
      <div class="section1" id="home">
        <div class="sec-1a">
            <div class="slider" >
              <div class="favicon">
                <img id="image" src="./img/pup-new-bldg.jpeg" alt="Image Description">
              </div>

              <div>
                <div class = "prev">
                  <button id="prevButton" style="font-size:30px;opacity:0.8">&lt;</button>
                </div>

                <div class = "nxt">
                  <button id="nextButton" style="font-size:30px;opacity:0.8">&gt;</button>                
                </div>

                <script>
                  const imageUrls = [
                    './img/pup-new-bldg.jpeg',
                    './img/pup1.jpeg',
                    './img/pup4.jpeg'
                  ];

                  const image = document.getElementById('image');
                  const prevButton = document.getElementById('prevButton');
                  const nextButton = document.getElementById('nextButton');
                  let currentImageIndex = 0;

                  prevButton.addEventListener('click', () => {
                    currentImageIndex = (currentImageIndex === 0) ? (imageUrls.length - 1) : (currentImageIndex - 1);
                    image.src = imageUrls[currentImageIndex];
                  });

                  nextButton.addEventListener('click', () => {
                    currentImageIndex = (currentImageIndex === imageUrls.length - 1) ? 0 : (currentImageIndex + 1);
                    image.src = imageUrls[currentImageIndex];
                  });
                </script>
              </div>
        </div>      
      </div>

      <?php
        $query = "SELECT * FROM info";  
        $query_run = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_run) > 0){
          foreach($query_run as $row){
            $slogan = $row['slogan'];
            $about = $row['about'];
            $mission = $row['mission'];
            $vision = $row['vision'];
          }
        }      
      ?> 
      
      <div class="sec-1b">
        <div class="title_head">Company Database</div>
          <div class="subtitle_head"><?= $slogan; ?></div>
          <button style="background-color:white; font-size:18px; border-radius:30px; color:#a00303; font-weight:600; padding:15px" onclick="showAlert()">View Partner Companies</button>
        </div>
      </div>

      <style>
        .alert {
            position: fixed;
            top: 50%;
            left: 50%;
            background-color: #ffffff; /* set the background color to white */
            transform: translate(-50%, -50%);
            border-radius: 10px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.5);
            text-align: center;
            height: 500px;
            width: 500px;
            z-index: 9999;
            border-left: #000;
        }

        .alert h2 {
          margin-left: 20px;
          color: #a00303;
          text-align: center;
          font-weight: 700;
        }

        .alert p {
          margin-bottom: 20px;
          font-size:16px;
          margin-left: 20px;
          text-align: justify;
          color: #a00303;
        }

        .alert button {
          background-color: #a00303;
          border: none;
          border-radius: 20px;
          margin-left:30px;
          color: #fff;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          transition: background-color 0.2s ease-in-out;
        }

        .alert button:hover {
          background-color: #800202;
        }

        .alert .close-btn {
          color: #ccc;
          cursor: pointer;
          position: absolute;
          top: 10px;
          right: 10px;
        }

      </style>

      <script>
        function showAlert() {
          // create the alert dialog box
          var alertBox = document.createElement('div');
          alertBox.className = 'alert';
          alertBox.innerHTML = `
            <h2>Are you sure?</h2>
            <p>Do you want to continue with this action?</p>
            <button id="yes-btn">Yes</button>
            <button id="no-btn">No</button>
            <a href="#" class="close-btn">&times;</a>
          `;

          // append the alert box to the document body
          document.body.appendChild(alertBox);

          // add event listeners to the buttons and close button
          document.getElementById('yes-btn').addEventListener('click', function() {
            // execute the action that the user confirmed
            // e.g. redirect to a new page or submit a form
            window.location.href = 'https://example.com';
          });

          document.getElementById('no-btn').addEventListener('click', function() {
            // hide the alert dialog box
            document.querySelector('.alert').style.display = 'none';
          });

          document.querySelector('.close-btn').addEventListener('click', function() {
            // hide the alert dialog box
            document.querySelector('.alert').style.display = 'none';
          });
        }
      </script>

      <div class="alert" style="display: none;">
          <div class="alert-box">
              <h2>Confidentiality Agreement</h2>
              <p>I acknowledge and agree that all information contained within the website of Polytechnic University of the Philippines (PUP) is the sole property of PUP and is confidential and proprietary. I understand that this information is not to be shared, distributed, or used for any purpose other than as expressly authorized by PUP. I further agree to maintain the confidentiality of this information and to take all reasonable measures to protect it from unauthorized disclosure or use. I understand that any violation of this agreement may result in legal action and/or disciplinary measures.</p>
              <button id="yes-btn">Yes</button>
              <button id="no-btn">No</button>
          </div>
      </div>

      <script>
          function showAlert() {
              // show the alert dialog box
              document.querySelector('.alert').style.display = 'flex';

              // add event listeners to the buttons
              document.getElementById('yes-btn').addEventListener('click', function() {
                  // execute the action that the user confirmed
                  // e.g. redirect to a new page or submit a form
                  window.location.href = '#branches';
              });

              document.getElementById('no-btn').addEventListener('click', function() {
                  // hide the alert dialog box
                  document.querySelector('.alert').style.display = 'none';
              });
          }
      </script>

      <div class="info-vm" id = "about">
        <div class="vm-container">
          <div class="head">
            <h2>About</h2> 
          </div>
            <div class="des">
              <?= $about;?>
            </div>
        </div>
        
        <div class="vm-container">
          <div class="head">
            <h2>Mission</h2>
          </div>
          <div class="des">
            <?= $mission;?>
          </div>
        </div>
      

        <div class="vm-container">
          <div class="head">
            <h2>Vision</h2>
          </div>

          <div class="des">
            <?= $vision;?>
          </div>
          
        </div>
      </div>  

    <div class="span" id="services"> 
      <div class="header">
        <strong><h1 style = "font-weight:500;">Dashboard</h1></strong>
      </div>
      <div class="wrapper-s"> 
            <a href = "company_all.php">
            <div class="row-services"> 
              <div class="column-services">
                <br><br>
                  <strong><p>Total Number of Partner Companies</p></strong> 
                    <?php
                      $query = "SELECT DISTINCT company_name FROM companies_1";  
                      $query_run = mysqli_query($conn, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h2> '.$row.'</h2>'; 
                    ?> 
            </div></a> 
          
            <a href = "company_moa.php">      
            <div class="column-services" >
              <br><br>
                <strong><p>Companies With Existing MOA</p></strong>
                  <?php
                    $query = "SELECT DISTINCT company_name FROM companies_1 WHERE moa != ' '";
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h2> '.$row.'</h2>';
                  ?>
            </div></a>   

            <a href = "company_no_moa.php">
            <div class="column-services" >
              <br><br>
                <strong><p>Companies without MOA</p></strong>
                  <?php
                    $query = "SELECT DISTINCT company_name FROM companies_1 WHERE moa = ' '";  
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                    echo '<h2> '.$row.'</h2>';
                  ?>
            </div></a>

            <a href = "company_moa_exp.php">
            <div class="column-services" >
              <br><br>
                <strong><p>Soon-to-Expire MOA</p></strong>
                <?php
                  $cur_date = date('Y-m-d');
                  $query = "SELECT *, DATE_FORMAT(moa, '%M %d, %Y') as start_date, DATE_FORMAT(exp_date, '%M %d, %Y') as end_date FROM companies_1 WHERE moa != ' ' AND exp_date > '{$cur_date}' AND DATEDIFF(exp_date, '{$cur_date}') <= 30";
                  $query_run = mysqli_query($conn, $query);
                  $row = mysqli_num_rows($query_run);
                  echo '<div><br>';
                  echo '<h2> '.$row.'</h2>';
                  echo '</div>';
                ?>
            </div></a>  


          </div>
    </div>        
  </div>  

<div class="span" >
  <div class="wrapper-s" id="branches" style="color:black; margin-top:-150px;"> 
          <div class="row-services">  
            <div class="name-container">
              <div class="upper-container">
                  <div class="image-container">
                    <a href="colleges.php"><img src="favicon/pup-logo.png" /></a>
                  </div>
              </div>

              <div class="lower-container">
                <div>
                  <h5>Main Campus</h5>
                  <!-- <h5>Sta. Mesa</h5> -->
                </div>   
              </div>
            </div>

            <div class="name-container">
            <div class="upper-container">
                <div class="image-container">
                  <a href="colleges.php"><img src="favicon/pup-logo.png"/></a>
                </div>
            </div>

            <div class="lower-container">
              <div>
                <h5>Branches/Campuses</h5>
                <!-- <h5>All</h5> -->
              </div>   
            </div>
          </div>
    </div>

  </div>
</section>

  <?php
        include_once './includes/footer.php';
  ?>


<script src="https://kit.fontawesome.com/49bf074e28.js" crossorigin="anonymous"></script>
</body>


</html>
