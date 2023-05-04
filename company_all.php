<?php
include 'db/conn.php';
include 'db/function.php';

  if(isset($_POST['generate'])){
        
    require('pdfmysql_table.php');

    class PDF extends PDF_MySQL_Table
    {
    function Header()
    {
    $this->Image('img/pup-logo.png',65,4,20);
    $this->SetFont('Helvetica','B',20);
    $this->SetXY(30, 10);
    $this->Cell(0,6,'Polytechnic University of the Philippines',0,1,'C');
    
    $this->Ln(10);
    // Ensure table header is printed
    parent::Header();
    }

    }
    
    $pdf = new PDF();
    //header

    //footer page
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',10,);
    //set width for each 9 columns
    // page table
    $pdf->AddPage('L');
    $pdf->SetFont('Arial','',14);

    $pdf->Cell(0,5,'All Partner Companies',0,1, 'C');
    
  // Set the font
    $pdf->SetFont('helvetica', '', 10);
    
    // Output each row of data as a table row
  
    $pdf->AddCol('company_name',70,'Company');
    $pdf->AddCol('spec_business_nature',40,'Nature of Business');
    $pdf->AddCol('pref_courses',50,'Preferred Colleges');
    $pdf->AddCol('contact_person',50,'Contact Person');
    $pdf->AddCol('cell_no',30,'Contact No.');
    $pdf->AddCol('email_add',30,'Email Address');
    $prop = array('HeaderColor'=>array(255,150,100),
                'color1'=>array(210,245,255),
                'color2'=>array(255,255,210),
                'padding'=>1);

    $pdf->Table($conn,'select company_name, spec_business_nature, pref_courses, contact_person, cell_no, email_add from companies_1',$prop);
    $pdf->Output();
  }

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
  
    <div>
      <!-- <h3 style="color:black; text-align:center; font-weight:normal; margin-top:100px;">Here are the lists of</h3> -->
      <h2 style="color:#a00303; text-align:center; margin-top:100px;">All Partner Companies</h2>
    </div>

    <div>
      <form action="index.php#services" method="POST">
        <button class = "button2" style="float:left;"><i class="fa fa-chevron-circle-left"></i>Back&nbsp;&nbsp;&nbsp;</button>
      </form>
      
      <button type="submit" id="csvs" id="exportButton" class = "button2" style="float:right; margin-right:10px;" onclick="exportToCsv('AllCompanies.csv', ',', [0, 17], 
        ['All Partner Companies'])"
        title="Generate Report as CSV" data-rel="tooltip"><i class="fa fa-download"></i>CSV&nbsp;&nbsp;&nbsp;</button>
          
      
      <form action="" method="POST" style="margin:0;">
        <button class = "button2" type="submit" id="pdf" name="generate"  title="Generate Report into PDF" data-rel="tooltip" style="margin: 10px; float:right;"><i class="fa fa-download"></i>PDF&nbsp;&nbsp;&nbsp;</button>
      </form>
 
    </div>

    <div class="header_fixed">

<table id="myTable">
  <thead>
  <tr>
    <tr>
      <th>Company</th>
      <th>Name</th>
      <th>Nature of Business</th>
      <th style="display:none;">Contact Person</th>
      <th style="display:none;">Position</th>
      <th>Preferred College</th>
      <th style="display:none;">Preferred Courses</th>
      <th style="display:none;">Telephone No.</th>
      <th style="display:none;">Cellphone No.</th>
      <th style="display:none;">Email Address</th>
      <th style="display:none;">Office Address</th>
      <th>City</th>
      <th style="display:none;">Starting Date (MOA)</th>
      <th style="display:none;">Expiration Date (MOA)</th>
      <th style="display:none;">Type of MOA</th>
      <th style="display:none;">Status of MOA</th>
      <th style="display:none;">Facilitator</th>
      <th>Action</th>
    </tr>
  </tr>
  </thead>

  <?php
    $query = "SELECT * FROM companies_1";
    $query_run = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($query_run) > 0){
      foreach($query_run as $row){
        $college = $row['pref_courses'];
        $google_pic = $row['photo'];
        $file_pic = $row['photo_upload'];
    
  ?>
                  
  <tr>
      <td>
        <?php
          if($google_pic != ""){
            echo '<img src="https://drive.google.com/uc?id=' . $row['photo'] . '" alt="">';
          }else if ($file_pic != ""){
            echo '<img src="' . $row['photo_upload'] . '" alt="">';
          }
        ?> 
      </td>
      <td><?= $row['company_name']; ?></td>
      <td><?= $row['spec_business_nature']; ?></td>
      <td style="display:none;"><?= $row['contact_person']; ?></td>
      <td style="display:none;"><?= $row['position']; ?></td>
      <td><?= $row['college_name']; ?></td>
      <td style="display:none;"><?= $row['pref_course2']; ?></td>
      <td style="display:none;"><?= $row['tel_no']; ?></td>
      <td style="display:none;"><?= $row['cell_no']; ?></td>
      <td style="display:none;"><?= $row['email_add']; ?></td>
      <td style="display:none;"><?= $row['office_add']; ?></td>
      <td><?= $row['city_add']; ?></td>
      <td style="display:none;"><?= $row['moa']; ?></td>
      <td style="display:none;"><?= $row['exp_date']; ?></td>
      <td style="display:none;"><?= $row['moa_type']; ?></td>
      <td style="display:none;"><?= $row['moa_status']; ?></td>
      <td style="display:none;"><?= $row['facilitator']; ?></td>
      <td >
        <form action="company_view.php?id=<?=$row['id'];?>" method="POST" >
          <button class="button2" title="View" data-rel="tooltip"  id="button"><i class="fa-solid fa-eye color-white"></i></button>
        </form>
      </td>
  </tr>
  <?php
          }
      }
      else{
    ?>

    <?php
    }
    ?>

</table>
</div>
      

  <?php
    include_once './includes/footer.php';
  ?>

<script>
  
  function exportToCsv(filename, separator, columnsToSkip, headers) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");

    // Add headers to CSV data
    csv.push(headers.join(separator));

    for (var i = 1; i < rows.length; i++) {
      var row = [], cols = rows[i].querySelectorAll("td, th");

      for (var j = 0; j < cols.length; j++) {
      if (!columnsToSkip.includes(j)) {
        var value = cols[j].innerText;
        value = value.replace(/[\r\n]/g, ' ').replace(separator, '');
        if (value.indexOf(separator) !== -1) {
          value = '"' + value + '"';
        }
        row.push(value);
      }
    }

      csv.push(row.join(separator));        
    }

    // Download CSV file
    downloadCsv(csv.join("\n"), filename);
  }

  function downloadCsv(csv, filename) {
    var csvFile;
    var downloadLink;

    // Create CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Create download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
    
  }
</script>


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