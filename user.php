<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST["name"];
$q="select * from users where name='$name' ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$email=$row["email"];
$amount=$row["amount"];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name;?></title>
	<link rel="stylesheet" href="button2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<style>
	.btn{
			cursor:pointer;
		}
		body {
			font-family: 'Segoe UI';
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:#006080;
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			color: #92c6df;
			padding: 11px 16px 11px 18px;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		body{
			background-image:url("phones.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background: #010114;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		.btn1 {
			background-color:RoyalBlue;
			border: none;
			color: white;
			border-radius:23px;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn1:hover {
			background-color:  DodgerBlue;
		}
	</style>
</head>
    <body style="background-image:url('phones.jpg');">
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="btn1"><i class="fa fa-home" style="font-size:24px"></i></button></li>
	</a>
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px" ><a class="nav-link"><?php echo $name?></a></li>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Amount</th>
				
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $amount; ?></td>
			</tr>

        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="btn btn-outline-light btn-lg">Transfer To</button>
	</a>
	</div>
	<br>
	<br>


               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="btn btn-outline-light btn-lg">Mini Statement</button>
		</a>
	</div>
               


    </body>
</html>