<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="history.css">
</head>
<body>
    <div class="container">
     <div class="upp">
        <div class="bacc">
            <a href="index.php"><img src="icons/icons8-back-30.png"></a>
        </div>
        <div class="titl">Transaction history</div>
        

     </div>
	 
        <div class="main">
            <table border="1" width="100%" bgcolor="#004156">
            <tr bgcolor="#004156"><td>#</td><td>Date</td><td>Amount</td><td>Transaction Detail</td></tr>
            <?php
			include("connfile.php");
			session_start();
			$v1=$_SESSION['AccountNo'];
			
			$sqlvar="select * from tranTab_$v1 order by tranNo desc";
			$result= $conn-> query($sqlvar);
            while($row=$result->fetch_row())
			{
				echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>$".$row[2]."</td><td>".$row[4]."</td></tr>");
			}			
			
			?>
	 
	            
            </table>            
            
        </div>     
        <div class="bottom">
            <img src=".\icons/dashboard.png">
        <hr>
            <img src=".\icons/checks.png">
        <hr>
            <img class="pm" src=".\icons/payments.png">
        </div>

    </div>
    
</body>
</html>