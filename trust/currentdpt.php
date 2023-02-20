<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="currentdpt.css">
</head>
<body>
    <div class="container">
     <div class="upp">
        <div class="bacc">
            <a href="index.php"><img src="icons/icons8-back-30.png"></a>
        </div>
        <div class="titl">WIRE TRANSFER</div>
        

     </div>
        <div class="main">
            
            <div class="mhead">
			<?php
			include("connfile.php");
            session_start();
			$res="";
			
			if(isset($_POST['submit'])){
				
				$v1=$_POST['avialable'];
				$v2=$_POST['name'];
				$v3=$_POST['number'];
				$v4=$_POST['current'];
				
				
				
				
				$conn->autocommit(FALSE);
				$sqlvar="UPDATE customertab set Bal=$v1 where AccountNo=$v3";
				
				$sqlvar1="UPDATE customertab set CurrentBal=$v4 where AccountNo=$v3";
				
				if($conn->query($sqlvar)==TRUE && $conn->query($sqlvar1)==TRUE){
					$conn->commit();
					echo"CREDIT SUCCESSFULLY";
				}
				else
				{
					echo"ERROR";
				}
				
				
				
				
				
				
				
				
				
			}

			
			
			?>
                <form action="" method="POST">
                    <div class="fvk">
                        <label for="amount">avialable (USD $)</label>
                        <input type="text" id="amount" name="avialable" placeholder="Avialable Bal"> 
                    </div> 
                    <div class="fvk">
                        <label for="name">Beneficiary Amount Name</label>
                        <input type="text" id="name" name="name" placeholder="Beneficiary Amount Name"> 
                    </div>
                    <div class="fvk">
                        <label for="number">Beneficiary Amount Number</label>
                        <input type="text" id="number" name="number" placeholder="Beneficiary Amount Number"> 
                    </div>
                    <div class="fvk">
                        <label for="Current">Current Bal</label>
                        <input type="text" id="Current" name="current" placeholder="Current Bal"> 
                    </div>
					<div class="fvk">
                        <label for="bname">Bank Name</label>
                        <input type="text" id="bname" name="bname" placeholder="Bank Name"> 
                    </div>
                    <div class="fvk">
                        <label for="Desc">Desc.</label>
                        <textarea id="Desc" name="Desc" cols="25" rows="5" placeholder="Good Transaction"></textarea> 
                    </div>
                    <div class="radd">
                        <h4>Amount Type</h4>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">PERSONAL (Savings)</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">CURRENT</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp"> CHECKING</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">FIX DEPOSIT</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">NON RESIDENT</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">ONKINE BANKING</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">DOMICILARY ACCOUNT</label>
                        <br>
                        <input type="radio" id="actyp" name="actyp">
                        <label for="actyp">JOINT ACCOUNT</label>
                        
                    </div>
                    <hr />
                    <div class="butt">
                        <button name="submit">Transfer</button>
                    </div>
                </form>            
                
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