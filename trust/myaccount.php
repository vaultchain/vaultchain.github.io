<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="myaccount.css">
</head>
<body>
    <div class="container">
     <div class="upp">
        <div class="bacc">
            <a href="index.php"><img src="icons/icons8-back-30.png"></a>
        </div>
        <div class="titl">My Account</div>
        

     </div>
        <div class="main">
            
            <div class="mhead">
			<?php
			include("connfile.php");
			session_start();
			?>
                
                <div class="opp"><br><br>
                    <div class="oppd">
                        Country : <?php echo $_SESSION['country'];?>
                    </div><br><br>
                    <div class="oppd">
                        Account Number : <?php echo $_SESSION['AccountNo'];?>
                    </div><br><br>
                    <div class="oppd">
                        Account Name : <?php echo $_SESSION['names'];?> <?php echo $_SESSION['LastName'];?>
                    </div><br><br>
                    <div class="oppd">
                        Account Type : <?php echo $_SESSION['AcType'];?>
                    </div><br><br>
                    <div class="oppd">
                        Date Of Birth : <?php echo $_SESSION['Dob'];?>
                    </div><br><br>
                    <div class="oppd">
                        Account Status : <?php echo $_SESSION['Status'];?>
                    </div><br><br>
                    <div class="oppd">
                        Email Id : <?php echo $_SESSION['email'];?>
                    </div><br><br>
                    <div class="oppd">
                        Available Balance : $<?php echo $_SESSION['Bal'];?>
                    </div><br><br>
                    <div class="oppd">
                        Current Balance: <?php echo $_SESSION['CurrentBal'];?>
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