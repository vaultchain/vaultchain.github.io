<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="transfer.css">
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
			$t1=$_SESSION['AccountNo'];
			$t2=$_SESSION['Bal'];
			$res="";
			
			if(isset($_POST['submit'])){
				
				$v1=$_POST['amount'];
				$v2=$_POST['name'];
				$v3=$_POST['number'];
				
				$sqlvar1="select * from customertab where AccountNo=$t1";
				
				$sqlvar="select * from customertab where AccountNo=$v3";
				$result= $conn ->query($sqlvar);
				
				
				
				if($row=$result->fetch_row()){
					
					$v4= $row[2];
					
					if($t2 >= $v1){
						$conn->autocommit(FALSE);
						$sqlvar1="UPDATE customertab set Bal=$t2-$v1 where AccountNo=$t1";
						
						$sqlvar="UPDATE customertab set Bal=$v4+$v1 where AccountNo=$v3";
						
						if($conn->query($sqlvar1)==TRUE && $conn->query($sqlvar)==TRUE){
							$conn->commit();
						}
					}
					else
					{
						echo"FVK";
					}
					
				}
				
				
				
			}

			
			
			?>
                <form action="" method="POST">
                    <div class="fvk">
                        <label for="amount">Amount (USD $)</label>
                        <input type="text" id="amount" name="amount"> 
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