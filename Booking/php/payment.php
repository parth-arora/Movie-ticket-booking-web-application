<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../../js/jQuery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
    <title>Checkout</title>

</head>
<body>

	<div class="loader_1">
		<div class="loader">
			<span></span>
		</div>
	</div>

	<div id="outer">
    <div class="box" id="nav" style="height:100px;">
			<div align="right">
				<select>
					<option>Kurukshetra</option>
					<option>Delhi</option>
				</select>
			</div>

			<div align="left" style="margin-top: 5px; margin-left: 130px; color: #e54040; font-size: 40px;">MovieBuff</div>
			<div id="name">
				<a href="../../index.php"><img src="../images/logo_m.png" height="100px" width="100px"></a>
			</div>
		</div>

		<div><img width="100%"   src="../images/offer4.jpg" height="180px"></div>
		<div class="box boxpay">
		<div id="payfullbox">
		<h2 id="carddetails" style="color:white;">Enter your Card details</h2>
			<div class="box2" id="paymentdet">
			<form action="./booked.php">
				<br>Card Number<br>
				<input type="text" name="cardnumber" placeholder="ENTER YOUR CARD NUMBER" size="40" required>
			    <input type="text" name="cardnumber" placeholder="NAME ON THE CARD" size="40" required><br>
			   &emsp; Expiry &emsp;&emsp;&emsp;&emsp;&nbsp;CVV<br>
			    <input class="expiry" type="text" name="emonth" placeholder="MM" size="1" required>
			    <input class="expiry" id="emonth" type="text" name="eyear" placeholder="YY" size="1" required>
			    <input class="expiry" type="text" name="CVV" placeholder="CVV" size="1" required>
			</form>
			</div>
 			<a href="./booked.php"><button id="makepayment">MAKE PAYMENT</button></div></a>
 			<div id = "det">
 				<center><h1 id = "data">BOOKING SUMMARY</h1>
 				</center>
 				<h1 id ="data1" style="color:white;"></h1>
 				<br>
 				<h2 id ="data2" style="color:white;"></h2>
 				<br>
 				<h2 id ="data3" style="color:white;"></h2>
 				<br>
 				<h1 id ="data4" style="color:white;"></h1>
 				<br>
 				<br>
 			</div>
 			<div id="imgpop"><img src="../images/popcorn3.jpg" width="100%"></div>
 		</div>
		<div id="nav"></div>
    </div>
    <div id="bottom"></div><?php
?>

	<script type="text/javascript" src="../js//payment.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
