<?php
	if(!isset($_SESSION))
	{
		session_start();
	}


  if (!isset($_SESSION) || $_SESSION["role"] != "sales") {
    include_once '../controllers/redirect.php';
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Row (sales)</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.3);
		}

    .pick{
            position: relative;
            z-index: 1;
            padding: 15% 0 50px;
            
        }

		h1 {
			font-size: 24px;
			text-align: center;
			margin-bottom: 30px;
		}

		form {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-row-gap: 20px;
			grid-column-gap: 30px;
			align-items: center;
		}

		label {
			font-weight: bold;
			margin-bottom: 10px;
			display: block;
		}

		input,
		select {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
			background-color: #f9f9f9;
			margin-top: 5px;
			margin-bottom: 15px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		@media screen and (max-width: 600px) {
			form {
				grid-template-columns: 1fr;
			}
		}
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/tables.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.svg"/>
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <?php include 'head.html' ?>
</head>
<header class="header">
  
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="../../index.php">
                  <img src="../../assets/img/logo/lg.webp" style="width:80%" alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="page-scroll" href="../controllers/redirect.php">Home</a>
                    </li>
              
                    <li class="nav-item">
                        <a href="../controllers/logout.php">logout</a>
                    </li>
                    
                  </ul>
                </div>
                
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
      
    </header>
<body>
<section class="pick">
	<div class="container">
		<h1>Edit a row (sales)</h1>
		<form action="../controllers/salesEditor2.php" method="POST">

            
    <label for="od">Outbound Delivery:</label>
        <input type="text" id="od" name="od" value="<?php echo $_SESSION["fetch_sales"][0]["od"]; ?>">

<label for="region">Region:</label>
<?php 
echo "<input type='text' id='region' name='region' value='".$_SESSION["fetch_sales"][0]["region"]."'>";
?>

<label for="tdate">Date:</label>
<?php 
echo "<input type='date' id='tdate' name='tdate' value='".$_SESSION["fetch_sales"][0]["tdate"]."'>";
?>


<label for="country">Country:</label>
<?php 
echo "<input type='text' id='country' name='country' value='".$_SESSION["fetch_sales"][0]["country"]."'>";
?>

<label for="discharging_port">Discharging Port:</label>
<?php 
echo "<input type='text' id='discharging_port' name='discharging_port' value='".$_SESSION["fetch_sales"][0]["discharging_port"]."'>";
?>

<label for="delivery_mode">Delivery Mode:</label>
<?php 
echo "<input type='text' id='delivery_mode' name='delivery_mode' value='".$_SESSION["fetch_sales"][0]["delivery_mode"]."'>";
?>

<label for="customer_name">Customer Name:</label>
<?php 
echo "<input type='text' id='customer_name' name='customer_name' value='".$_SESSION["fetch_sales"][0]["customer_name"]."'>";
?>

<label for="customer_group">Customer Group:</label>
<?php 
echo "<input type='text' id='customer_group' name='customer_group' value='".$_SESSION["fetch_sales"][0]["customer_group"]."'>";
?>

<label for="category">Category:</label>
<?php 
echo "<input type='text' id='category' name='category' value='".$_SESSION["fetch_sales"][0]["category"]."'>";
?>

<label for="pid">PID:</label>
<?php 
echo "<input type='text' id='pid' name='pid' value='".$_SESSION["fetch_sales"][0]["pid"]."'>";
?>

<label for="pallets">Pallets:</label>
<?php 
echo "<input type='text' id='pallets' name='pallets' value='".$_SESSION["fetch_sales"][0]["pallets"]."'>";
?>

<label for="branding">Branding:</label>
<?php 
echo "<input type='text' id='branding' name='branding' value='".$_SESSION["fetch_sales"][0]["branding"]."'>";
?>

<label for="total_volume">Total Volume:</label>
<?php 
echo "<input type='text' id='total_volume' name='total_volume' value='".$_SESSION["fetch_sales"][0]["total_volume"]."'>";
?>

<label for="volume_per_container">Volume per Container:</label>
<?php 
echo "<input type='text' id='volume_per_container' name='volume_per_container' value='".$_SESSION["fetch_sales"][0]["volume_per_container"]."'>";
?>



<label for="incoterm">Incoterm:</label>
<?php 
echo "<input type='text' id='incoterm' name='incoterm' value='".$_SESSION["fetch_sales"][0]["incoterm"]."'>";
?>

<label for="status1">Status 1:</label>
<?php 
echo "<input type='text' id='status1' name='status1' value='".$_SESSION["fetch_sales"][0]["status1"]."'>";
?>

<label for="status2">Status 2:</label>
<?php 
echo "<input type='text' id='status2' name='status2' value='".$_SESSION["fetch_sales"][0]["status2"]."'>";
?>

<label for="payment_terms">Payment Terms:</label>
<?php 
echo "<input type='text' id='payment_terms' name='payment_terms' value='".$_SESSION["fetch_sales"][0]["payment_terms"]."'>";
?>

<label for="payment_terms_days">Payment Terms Days:</label>
<?php 
echo "<input type='text' id='payment_terms_days' name='payment_terms_days' value='".$_SESSION["fetch_sales"][0]["payment_terms_days"]."'>";
?>

<label for="estimated_freight">Estimated Freight:</label>
<?php 
echo "<input type='text' id='estimated_freight' name='estimated_freight' value='".$_SESSION["fetch_sales"][0]["estimated_freight"]."'>";
?>

<label for="estimated_fob">Estimated FOB:</label>
<?php 
echo "<input type='text' id='estimated_fob' name='estimated_fob' value='".$_SESSION["fetch_sales"][0]["estimated_fob"]."'>";
?>


      <input type="submit" value="Submit">

<?php 
include '../models/User.php';
?>


</div>
	</section>
	</body>
</html>