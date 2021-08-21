<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
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
	html,body
	{
		hight:100%;
	}
		.buttons{
			text-align:center;
		}
		
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
			hight:100%;
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
			font-size:26px;
			padding:16px;
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
		.buttons{
			position: absolute;
			bottom:   8%;
			right:42%;
			text-align:center;
		}
		.btn{
			cursor:pointer;
		}
	</style>
	</head>
	<body>
		<ul class="nav-ul"">
	<a href="index.php">
		<li class="nav-li"><button class="btn1"><i class="fa fa-home"></i></button></li>
	</a>
	</ul><br>
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
		</form>
		
	</body>
</html>