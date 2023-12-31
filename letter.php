<?php
session_start();
error_reporting(0);
include('connect.php');
if(empty($_SESSION['matric_no']))
    {   
    header("Location: login.php"); 
    }
    else{
	}
	
$ID = $_SESSION["ID"];
$matric_no = $_SESSION["matric_no"];

$sql = "select * from students where matric_no='$matric_no'"; 
$result = $conn->query($sql);
$rowaccess = mysqli_fetch_array($result);


date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clearance Letter | Kiriri University</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo2.png">



    <style type="text/css">
<!--
.style1 {
	font-size: xx-large;
	font-weight: bold;
}
.style2 {font-weight: bold}
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
-->
    </style>
</head>

<body>

            <div class="wrapper wrapper-content  animated fadeInRight article">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="ibox">
                        <div class="ibox-content">
                          <div class="text-center article-title">
                            <img src="images/text.png" alt="" height="70" width="1000">
                          </div>
                            <p align="center" class="style1">CLEARANCE LETTER </p>
                            <p>
                            HELLO <?php echo $rowaccess['fullname']; ?>, </p>
                            <p align="justify">This is to certify that you have been cleared by the following departments : </p>
                            
                          
                            
                          <table>
                                <tr>
                                    <th>NO.</th>
                                    <th>Department</th>
                                    <th>Officer Name</th>
                                    <th>Status</th>
                                    <th>Remaks</th>
                                    <th>Signature</th>
                                    <th>Date</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Admission Office</td>
                                    <td>Milka</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_admission'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_admission'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_admission'];?></td>
                                </tr> 
                                <tr>
                                    <td>3.</td>
                                    <td>H.o.D-<?php echo $rowaccess['dept'];?></td>
                                    
                                    <?php if (($rowaccess['dept'])==(("Mathematics")))  { ?>
                                    <td>Joseph</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_mathematics'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_mathematics'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_mathematics'];?></td>
                                    <?php } ?>
                                    <?php if (($rowaccess['dept'])==(("Computer Science")))  { ?>
                                    <td>Kariuki</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_compscience'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_compscience'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_compscience'];?></td>
                                    <?php } ?>
                                    <?php if (($rowaccess['dept'])==(("Business Administration")))  { ?>
                                    <td>Lilian</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_ba'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_ba'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_ba'];?></td>
                                    <?php } ?>
                                    <?php if (($rowaccess['dept'])==(("Education")))  { ?>
                                    <td>Jane</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_education'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_education'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_education'];?></td>
                                    <?php } ?>
                                    <?php if (($rowaccess['dept'])==(("Business Information Technology")))  { ?>
                                    <td>Lucy</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_bit'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_bit'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_bit'];?></td>
                                    <?php } ?>
                                </tr>                                                                                           
                                <tr>
                                    <td>3.</td>
                                    <td>Computer Laboratory</td>
                                    <td>Kimani</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_computerlab'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_computerlab'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_computerlab'];?></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Games</td>
                                    <td>Asher</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_games'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_games'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_games'];?></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>KWUSD (Dean of Students)</td>
                                    <td>Alex</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_dean'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_dean'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_dean'];?></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Hostel</td>
                                    <td>Mary</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_hostel'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_hostel'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_hostel'];?></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Examination office</td>
                                    <td>Ann</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_examination'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_examination'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_examination'];?></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Library</td>
                                    <td>James</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_library'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_library'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_library'];?></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Registrar Acardemics</td>
                                    <td>Derick</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_registrar'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_registrar'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_registrar'];?></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Finance</td>
                                    <td>Allan</td>
                                    <td style="color: lightgreen;">cleared</td>
                                    <td><?php echo $rowaccess['remarks_finance'];?></td>
                                    <td><img src="Officers/<?php echo $rowaccess['signature_finance'];?>"  width="91" height="30" border="2"/></td>
                                    <td><?php echo $rowaccess['date_finance'];?></td>
                                </tr>
                            </table>
                            <p align="justify">Your Details remains:</p>
                            <p align="justify"><strong>FULLNAME:</strong> <?php echo $rowaccess['fullname']; ?></p>
                            <p align="justify"><strong>REG NUMBER:</strong> <?php echo $rowaccess['matric_no']; ?></p>
                            <p align="justify"><strong>FACULTY:</strong> <?php echo $rowaccess['faculty']; ?></p>
                            <p align="justify"><strong>DEPARTMENT:</strong> <?php echo $rowaccess['dept']; ?></p>
                            <p align="justify">&nbsp;</p>
                            <p align="justify">
                                This letter will allow you process for convocation and National Youth Service Corp (NYSC) and any other if need arise. we wish you best of luck.</p>
                            <p align="right" class="style2">
                                SIGNED</p>
                            <p align="right">&nbsp;</p>
                            <p align="right"><strong>REGISTRA                            </strong></p>
                            <hr>
                            <div class="row">
                              <div align="center"><a href="#" id="print-button" onclick="window.print();return false;">Print this page</a> </div>
							  
							  
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
       

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

</body>

</html>
