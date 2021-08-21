<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button2.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("phones.jpg");
			background-repeat: no-repeat;
			background-size:cover;
			
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #010114;
			}
		th{
			color:#006080;
			font-size:24px;
			padding:5px;
		}
		
		td{
			font-size:23px;
			color: #ffffff;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#006080;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn{
			cursor:pointer;
		}
	</style>
	</head>
	<body>
		<br>
		<h2><?php echo "All Transaction"?></h2>
		<table class="table">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons" >
				<button class=" btn btn-outline-light" type="submit" name="name">Home</button>
			</div>
		</form>
		
	</body>
</html>