<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Basic Banking System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<style>
	button{
		background-color:#8cbed6;
		
	}
	tr{
		text-align:center;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:url("phones.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	p{
		font-family: 'Segoe UI';
	}
	</style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSF Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="getdetail.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="transaction.php">Transaction Details</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<div id="header">
       <br>
	   <br>
	   <br>
	   <br>
	   <br>
       <h2 class="text-light" style=" font-family:Algerian; font-size: 55px;text-shadow: 2px 2px black;"> TSF Bank </h2>
		<p style="font-size:18px" class="text-light">Transfer money? Now just one touch away.</p>
	</div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="btn btn-outline-light" type="button" href="getdetail.php">View all Customers</button>
                </a>
                </tr>
				
			   <tr>        
               <br> <br>
			   <a href="transaction.php">
			   <button class="btn btn-outline-light" type="button">All Transaction</button>
               </a>
               
               </tr>
            </table><br><br>
    </div>
</body>
</html>