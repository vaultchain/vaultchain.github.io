<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="container">
     <div class="upp">
        <div class="bacc">
            <a href="index.php"><img src="icons/icons8-back-30.png"></a>
        </div>
        <div class="titl">Account Detail</div>
        

     </div>
        <div class="main">
		
            
            <div class="mhead">
			<?php
			include("connfile.php");
			session_start();
			?>
                
                <div class="opp"><br><br>
                    <div class="oppd">
                        Names : <?php echo $_SESSION['names'];?> <?php echo $_SESSION['LastName'];?>
                    </div><br><br>
                    <div class="oppd">
                        Sex : <?php echo $_SESSION['gender'];?>
                    </div><br><br>
                    <div class="oppd">
                        Mobile No : <?php echo $_SESSION['mobile'];?>
                    </div><br><br>
                    <div class="oppd">
                        Email : <?php echo $_SESSION['Zip'];?>
                    </div><br><br>
                    <div class="oppd">
                        Address : <?php echo $_SESSION['Address'];?>
                    </div><br><br>
                    <div class="oppd">
                        Country : <?php echo $_SESSION['country'];?>
                    </div><br><br>
                    <div class="oppd">
                        State : <?php echo $_SESSION['state'];?>
                    </div><br><br>
                    <div class="oppd">
                        City : <?php echo $_SESSION['city'];?>
                    </div><br><br>
                    <div class="oppd">
                        Occupation : <?php echo $_SESSION['Occupation'];?>
                    </div><br><br>
                </div>
            </div>
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