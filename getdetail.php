<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="button2.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   
	<style>
	.btn{
			cursor:pointer;
		}
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: #ffffff;
		}
		h1{
			font-family:'Segoe UI';
		}
		table{
			text-align:center;
			margin-right: 50px;
			border:3px solid gray;
			border-collapse:collapse;
			}
		th{
			color:#006080;
			font-size:24px;
			padding:2px;
		}
		
		td{
			text-align:center;
			font-size:20px;
			color: #ffffff;
			padding: 0px;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
		.button1{
			background-color:green;
			text-align:center;
			padding-top:2px;
		}
		
		.button1:hover{
			background-color:blue;
		}
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("phones.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	
</head>
	
<body>
	<h1 style="color:#006080;">User Information</h1>
	<table class="table table-dark">
  	<thead>
    	<tr>
      		<th scope="col">S.No</th>
      		<th scope="col">Name</th>
      		<th scope="col">Email</th>
      		<th scope="col">Account Balance</th>
			<th scope="col">Profile</th>
   	 </tr>
  	</thead>
  	<tbody>
    <tr>
	<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="btn-success" type="submit" name="name" value="Monika">View</button>
				</form>
			</td>
    </tr>
    <tr>
	<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success" type="submit" name="name" value="Paul">View</button>
				</form>
			</td>
    </tr>
    <tr>
	<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success" type="submit" name="name" value="Ravi">View</button>
				</form>
			</td>
    </tr>
	<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success" type="submit" name="name" value="Amit">View</button>
				</form>
			</td>
   

    </tr>
    <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success" type="submit" name="name" value="Ali">View</button>
				</form>
			</td>
	</tr>
    <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success" type="submit" name="name" value="Piya">View</button>
				</form>
			</td>
    </tr>
    <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success"type="submit" name="name" value="Mukesh">View</button>
				</form>
			</td>
	</tr>
    <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success"type="submit" name="name" value="Athar">View</button>
				</form>
			</td>
	</tr>
    <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success"type="submit" name="name" value="Avinash">View</button>
				</form>
			</td>
    </tr>
    <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td scope="row"> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn-success"type="submit" name="name" value="Vaishnavi">View</button>
				</form>
			</td>
	</tr>
	</tbody>
  	</table><br><br>

<div class="buttons">
	<a href="index.php">
    <button class=" btn btn-outline-light">HOME</button>
	</a>
</div>
</body>
</html>