<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
     <div class="upp"> 
        <input class="menu" type="checkbox" id="menu">
        <label class="check" for="menu"><span class="nav"></span></label>
        <ul class="nvar">
            <li><a href="index.php">Home</a></li>
            <hr />
            <li><a href="profile.php">Profile</a></li>
            <hr />
            <li><a href="transfer.php">Transfer</a></li>
            <hr />
            <li><a href="history.php">History</a></li>
            <hr />
            <li><a href="statement.php">Statement</a></li>
            <hr />
            <li><a href="loan.php">Loan</a></li>
            <hr />
            <li><a href="myaccount.php">My Account</a></li>
            <hr />
        </ul>
     </div>        
        <div class="up">
            <div class="header">
			<?php
			include("connfile.php");
            session_start();
            $v1=$_SESSION['AccountNo'];

            $sqlvar=("select * from customertab where AccountNo=$v1");
			
			
			?>
                <h1>Hi, <?php echo $_SESSION['names'];?></h1>
                <div class="cir">
                    <p><?php echo $_SESSION['FLN'];?></p>
                </div>
            </div>
            <div class="header acc">
                <p>Accounts</p>
                <h4>...</h4>
            </div>
            <div class="box">
                <div class="bal">
                    <h4>Checking</h4>
                    <h3>$ <?php echo $_SESSION['Bal'];?>.00</h3>
                </div>
                <div class="bal bala">
                    <h5>x0069</h5>
                    <p>Balance</p>
                </div>
            </div>
            <div class="box1">
                <div class="trans">
                    <img src=".\icons/transfers.png">
                    <p>Transfer</p>
                </div>
                <div class="trans">
                    <img src=".\icons/messages.png">
                    <p>Message</p>
                </div>
                <div class="trans">
                    <img src=".\icons/dashboard.png">
                    <p>Documents</p>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="see">
                <div class="tup">
                    <h3>Transactions</h3>
                    <div class="more">
                        <img src=".\icons/transfers.png">
                        <h3>...</h3>
                    </div>
                </div>
                <div class="tmid">
                    <h3>DEPOSIT - ACH</h3>
                    <P class="green">+$60,000.00</P>
                </div>
                <div class="tdw">
                    <p>30 Aug, 1YR 100K</p>
                    <span>0001</span>
                </div>
                <button class="giv">See more</button>
            </div>
            <div class="sea">
                <h3>Messages</h3>
                <div class="tupp">
                    <img src=".\icons/transfers.png">
                    <h3>...</h3>
                </div>
            </div>
            <div class="mess">
                <p>HOW CAN WE HELP YOU?</p>
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