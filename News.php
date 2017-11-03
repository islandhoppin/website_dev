<?php
require 'connection.inc.php'; 
$query = "SELECT * FROM test_table";
$result = $dbconn->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['id'];
    echo $row['name'];
}

?>

<div class="content" >
															<fieldset>
																<form action = "predict.php" method = "post">
																<h2>Company Name:</h2>
																<select name="ticker" style="width: 300px" type="text">

																<option value="AXP">Amex</option>
																<option value="BAC">Bank of America</option>
																<option value="BBT">BB&T Financial</option>
																<option value="BCS">Barclays PLC</option>
																<option value="C">Citibank</option>
																<option value="CFG">Citizens Financial Group, Inc.</option>
																<option value="CMA">Comerica</option>
																<option value="COF">Capital One</option>
																<option value="DFS">Discover</option>
																<option value="ECPG">Encore Capital Group</option>
																<option value="EFX">Equifax</option>
																<option value="ENVA">Enova International, Inc.</option>
																<option value="EVER">EverBank</option>
																<option value="F">Ford Motor Credit Company</option>
																<option value="FBC">Flagstar Bank</option>
																<option value="FDC">First Data Corporation</option>
																<option value="FIS">Fidelity National Information Services, Inc. (FNIS)</option>
																<option value="FITB">Fifth Third Financial Corporation</option>
																<option value="GM">GM Financial</option>
																<option value="HSBC">HSBC North America Holdings Inc.</option>
																<option value="JPM">JPMorgan Chase & Co.</option>
																<option value="KEY">KeyCorp</option>
																<option value="MTB">M&T Bank Corporation</option>
																<option value="NNI">Nelnet</option>
																<option value="NSM">Nationstar Mortgage</option>
																<option value="OCN">Ocwen</option>
																<option value="PMT">PennyMac Loan Services, LLC</option>
																<option value="PNC">PNC Bank N.A.</option>
																<option value="PYPL">PayPal Holdings, Inc.</option>
																<option value="RF">Regions Financial Corporation</option>
																<option value="SAN">Santander Bank US</option>
																<option value="SC">Santander Consumer USA Holdings Inc</option>
																<option value="STI">SunTrust Banks, Inc.</option>
																<option value="SYF">Synchrony Financial</option>
																<option value="THC">Tenet HealthCare Corporation</option>
																<option value="TM">Toyota Motor Credit Corporation</option>
																<option value="TRU">TransUnion Intermediate Holdings, Inc.</option>
																<option value="USB">U.S. Bancorp</option>
																<option value="WFC">Wells Fargo & Company</option>
																<option value="WU">The Western Union Company</option>
																</select>
																<h2>Volume Traded:</h2>
																<select name="volume" style="width: 300px" type="text">
																<option value="Increased">Increased</option>
																<option value="Decreased">Decreased</option>
																<option value="Same">Same</option>
																</select>

																<h2>Season:</h2>
																<select name="season" style="width: 300px" type="text">
																<option value="Autumn">Autumn</option>
																<option value="Spring">Spring</option>
																<option value="Summer">Summer</option>
																<option value="Winter">Winter</option>
																</select>

																<h2>Day of the Week:</h2>
																<select name="day" style="width: 300px" type="text">
																<option value="Monday">Monday</option>
																<option value="Tuesday">Tuesday</option>
																<option value="Wednesday">Wednesday</option>
																<option value="Thursday">Thursday</option>
																<option value="Friday">Friday</option>
																</select>
																
																<br />
																
																<input type="submit" value = "Get Results" style = "padding-bottom = 20px">
																</form>
															</fieldset>
															</div>