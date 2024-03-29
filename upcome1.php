<!DOCTYPE html>
<html>
<head>
	<title> Upcoming Events</title>
	<style type="text/css">
		*{
		box-sizing:border-box;
		margin:3px;
		padding:none;
		}
		body{
			background-color: #F6F6F2;
			height:100vh;
			background-position: center;
			background-attachment: fixed;
			background-size:1600.400px 713.600px;
            
		}
		th, td {
  		padding:10px;
  		text-align: left;
  		font-size:17px;
		}
		.table1 tr{
			border:1px solid black;
		}
		.table1{
			border:3px solid black;
			padding:7px;
			width:1400px;
		}
		.row{
			display:flex;
			flex-direction:column;
			align-items:center;
			justify-content: space-around;
		}
		.container{
			display:flex;
			flex-direction:column;
			align-items:center;
			justify-content: space-around;
		}
		.whole{
			/*border:2px solid black;*/
			padding:10px;
			display:flex;
			flex-direction:column;
			align-items:center;
			height:90vh;
			margin-left:23%;
			margin-right:23%;
		}
		form{
			display:flex;
			flex-direction:column;
			align-items:center;
			justify-content: center;
		}
		.text{
			align-items: center;
		}
		.drop{
			padding:9px;
			border-radius:10px;
			font-size:20px;
		}
		.submit{
			padding:10px;
			border-radius:5px;
		}
		.navbar{
			background-color:#388087;
		    margin:0px;
		    position:fixed;
		     top:0px; 
		    z-index:9999;
		     left: 0px;
		    right: 0px; 
		    margin-bottom:40px;
		}
		.container1{
			display:flex;
		    flex-direction: row;
		    align-items: center;
		    justify-content: space-between;
		    padding:none;
		    height:50px;
		    color: white;
		}
		.menu-items{
			display:flex;
			flex-direction:row;
			padding-right:20px;
		}
		.menu-items li{
    		float:right;
    		list-style:none;
    		font-size:20px;
    	}
    	.menu-items li a{
		    text-decoration:none;
		    color:white;
		    padding: 30px;
		}
		.logo{
		    font-size:50px;
		    padding-left: 20px;
		    font-style:serif;
		    align-items:center;
		}
		.tab{
			border:1px solid black;
		}
	</style>
</head>
<body>
	<nav class="navbar">
        <div class="container1">
            <h1 class="logo">AAJ KREEDA</h1>
            <ul class="menu-items">
                <li><a href="http://localhost/project1/Register.php">Register</a></li>
                <li><a href="http://localhost/project1/main_page.html#home">Home</a></li>
                <li><a href="http://localhost/project1/main_page.html#services">Services</a></li>
                <li><a href="http://localhost/project1/main_page.html#about">About Us</a></li>
                <li><a href="http://localhost/project1/main_page.html#contact">Contact Us</a></li>
            </ul>
        </div>
      </nav><br><br>
	<div class="whole">
	<div class="container">
	<form action="" method="POST">
		<div>
		<select name="sports" id="sports" class="drop">
			<option value="null">Choose a Sport</option>
			<option value="Cricket">Cricket</option>
			<option value="Volley Ball">Volley Ball</option>
			<option value="Kabaddi">Kabaddi</option>
			<option value="Throw Ball">Throw Ball</option>
			<option value="Kho-Kho">Kho-Kho</option>
			<option value="Batminton">Batminton</option>
			<option value="Tennis">Tennis</option>
		</select>


		<select name="states" id="states" class="drop">
			<option value="null">Choose a State</option>
			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		    <option value="Andhra Pradesh">Andhra Pradesh</option>
		    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
		    <option value="Assam">Assam</option>
		    <option value="Bihar">Bihar</option>
		    <option value="Chandigarh">Chandigarh</option>
		    <option value="Chhattisgarh">Chhattisgarh</option>
		    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		    <option value="Daman and Diu">Daman and Diu</option>
		    <option value="Delhi">Delhi</option>
		    <option value="Goa">Goa</option>
		    <option value="Gujarat">Gujarat</option>
		    <option value="Haryana">Haryana</option>
		    <option value="Himachal Pradesh">Himachal Pradesh</option>
		    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
		    <option value="Jharkhand">Jharkhand</option>
		    <option value="Karnataka">Karnataka</option>
		    <option value="Kerala">Kerala</option>
		    <option value="Ladakh">Ladakh</option>
		    <option value="Lakshadweep">Lakshadweep</option>
		    <option value="Madhya Pradesh">Madhya Pradesh</option>
		    <option value="Maharashtra">Maharashtra</option>
		    <option value="Manipur">Manipur</option>
		    <option value="Meghalaya">Meghalaya</option>
		    <option value="Mizoram">Mizoram</option>
		    <option value="Nagaland">Nagaland</option>
		    <option value="Odisha">Odisha</option>
		    <option value="Puducherry">Puducherry</option>
		    <option value="Punjab">Punjab</option>
		    <option value="Rajasthan">Rajasthan</option>
		    <option value="Sikkim">Sikkim</option>
		    <option value="Tamil Nadu">Tamil Nadu</option>
		    <option value="Telangana">Telangana</option>
		    <option value="Tripura">Tripura</option>
		    <option value="Uttar Pradesh">Uttar Pradesh</option>
		    <option value="Uttarakhand">Uttarakhand</option>
		    <option value="West Bengal">West Bengal</option>
        </select>


        <select name="districts" id="districts" class="drop">
        	<option value="null">Choose a district</option>
        	<option value="Srikakulam">Srikakulam</option>
		    <option value="Parvathipuram">Parvathipuram</option>
		    <option value="Vizianagaram">Vizianagaram</option>
		    <option value="Paderu">Paderu</option>
		    <option value="Anakapalli">Anakapalli</option>
		    <option value="Kakinada">Kakinada</option>
		    <option value="Rajamahendravaram">Rajamahendravaram</option>
		    <option value="Amalapuramu">Amalapuramu</option>
		    <option value="Eluru">Eluru</option>
		    <option value="Bhimavaram">Bhimavaram</option>
		    <option value="Vijayawada">Vijayawada</option>
		    <option value="Machilipatnam">Machilipatnam</option>
		    <option value="Narasaraopeta">Narasaraopeta</option>
		    <option value="Guntur">Guntur</option>
		    <option value="Bapatla">Bapatla</option>
            <option value="Ongole">Ongole</option>
		    <option value="Nellore">Nellore</option>
		    <option value="Kurnool">Kurnool</option>
		    <option value="Nandyal">Nandyal</option>
		    <option value="Anantapuramu">Anantapuramu</option>
		    <option value="Puttaparthi">Puttaparthi</option>
		    <option value="Kadapa">Kadapa</option>
            <option value="Rayachoti">Rayachoti</option>
		    <option value="Tirupati">Tirupati</option>
		    <option value="Chittoor">Chittoor</option>
		</select>
		</div>
		<div class="sub">
		<button name="submitted" class="submit"><b>Submit</b></button>
		</div>
	</form>



	</div>
	   <main class="row">
	            <h1 class="text">UPCOMING EVENTS</h1>
	            <br/>
	            <table class="table1">
	              <tr>
	                <th>Date</th>
	                <th>Venue</th>
	                <th>Match</th>
	                <th>Address</th>
	                <th>Time</th>
	                <th>Selection Deadline</th>
	                <th>Contact Number</th>
	                
	                <?php 
	                    $a=new mysqli("localhost","root","","projects");
	                    if ($a->connect_error){
	                        die("connection failure");
	                    }
	                    else{
							if(isset($_POST['submitted'])){
								if(isset($_POST['sports']) && isset($_POST['states']) && isset($_POST['districts']) && ($_POST['sports']!="null") && ($_POST['states']!="null") && ($_POST['districts']!="null")){
									$sports=$_POST["sports"];
									$states=$_POST['states'];
									$districts=$_POST['districts'];
									$date_now=date("Y-m-d");
									$z="select * from project1 WHERE sport='$sports' and state='$states' and district='$districts' and date>'$date_now'";

									if($c=$a->query($z)){
										if ($c->num_rows>0){
											while($v=$c->fetch_array()){
												?>
												<div class="tab">
												<?php
												echo("<tr>
				                            	<td>".$v['date']."</td>
				                            	<td>".$v['venue']."</td>
				                            	<td>".$v['match']."</td>
				                            	<td>".$v['address']."</td>
				                            	<td>".$v['time']."</td>
				                            	<td>".$v['deadline']."</td>
				                            	<td>".$v['number']."</td>
				                            	</tr>");
				                            	?>
				                            	</div>
				                            	<?php
											}
										}
										else{
											echo("Nothing Found");
										}
									}
								}
								else if(isset($_POST['sports']) && ($_POST['sports']!="null") && ($_POST['states']=="null") && ($_POST['districts']=="null")){
										$sports=$_POST["sports"];
										$date_now=date("Y-m-d");
										$z="select* from project1 WHERE sport='$sports' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else if(isset($_POST['states']) && ($_POST['sports']=="null") && ($_POST['states']!="null") && ($_POST['districts']=="null")){
										$states=$_POST["states"];
										$date_now=date("Y-m-d");
										$z="select* from project1 WHERE state='$states' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else if(isset($_POST['districts']) && ($_POST['sports']=="null") && ($_POST['states']=="null") && ($_POST['districts']!="null")){
										$districts=$_POST["districts"];
										$date_now=date("Y-m-d");
										$z="select* from project1 WHERE district='$districts' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else if(isset($_POST['districts']) && isset($_POST['sports']) && ($_POST['sports']!="null") && ($_POST['states']=="null") && ($_POST['districts']!="null")){
										$districts=$_POST["districts"];
										$sports=$_POST["sports"];
										$date_now=date("Y-m-d");
										$z="select* from project1 WHERE district='$districts' && sport='$sports' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else if(isset($_POST['districts']) && isset($_POST['states']) && ($_POST['sports']=="null") && ($_POST['states']!="null") && ($_POST['districts']!="null")){
										$districts=$_POST["districts"];
										$states=$_POST["states"];
										$date_now=date("Y-m-d");
										// echo($districts);
										$z="select* from project1 WHERE district='$districts' && state='$states' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else if(isset($_POST['states']) && isset($_POST['sports']) && ($_POST['sports']=="null") && ($_POST['states']!="null") && ($_POST['districts']!="null")){
										$states=$_POST["states"];
										$sports=$_POST["sports"];
										$date_now=date("Y-m-d");
										$z="select* from project1 WHERE state='$states' && sport='$sports' and date>'$date_now'";
										if($c=$a->query($z)){
											if ($c->num_rows>0){
												while($v=$c->fetch_array()){
													echo("<tr>
						                            <td>".$v['date']."</td>
						                            <td>".$v['venue']."</td>
						                            <td>".$v['match']."</td>
						                            <td>".$v['address']."</td>
					                            	<td>".$v['time']."</td>
					                            	<td>".$v['deadline']."</td>
					                            	<td>".$v['number']."</td>
						                            </tr>");
												}
											}
											else{
												echo("Nothing Found");
											}
										}	
									}
									else{
										$date_now=date("Y-m-d");
										$q="select * from project1 WHERE date>'$date_now'";
							            if ($x=$a->query($q)){
							                if ($x->num_rows>0){
							                    while($r=$x->fetch_array()){
							                    	echo("<tr>
							                        <td>".$r['date']."</td>
							                        <td>".$r['venue']."</td>
							                        <td>".$r['match']."</td>
							                        <td>".$r['address']."</td>
					                            	<td>".$r['time']."</td>
					                            	<td>".$r['deadline']."</td>
					                            	<td>".$r['number']."</td>
							                        </tr>");

							                    }
							                }
							                else{
												echo("<tr><th colspan='3'> nothing found </th></tr>");
							                }
							            }
							        }
								}
								
								else{
									$date_now=date("Y-m-d");
									$q="select * from project1 WHERE date>'$date_now'";
						            if ($x=$a->query($q)){
						                if ($x->num_rows>0){
						                    while($r=$x->fetch_array()){
						                    	echo("<tr>
						                        <td>".$r['date']."</td>
						                        <td>".$r['venue']."</td>
						                        <td>".$r['match']."</td>
						                        <td>".$r['address']."</td>
				                            	<td>".$r['time']."</td>
				                            	<td>".$r['deadline']."</td>
				                            	<td>".$r['number']."</td>
						                        </tr>");

						                    }
						                }
						                else{
											echo("<tr><th colspan='3'> nothing found </th></tr>");
						                }
						            }
						        }
				   		}
	                ?>
	            </tr>
	        </table>
	</main>
	</div>
</div>

	</body>
</html>