<!DOCTYPE html>
<html>
<head>
	<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:900&display=swap" rel="stylesheet">
    <title>Application Form - Villetorte Asset Management</title>
    <style type="text/css">
    	body{
    		background: #525659;
    		font-family: Calibri;
    	}
    	.parent{
        width: 21cm;
        height: 29.7cm;
        margin: 0 auto; 
        background: #fff;
        /*padding: 0 15px;*/
        margin-top: 50px;
        /*box-shadow: 0px 0px 5px #000;*/
        /* change the margins as you want them to be. */
	   }
	   .logomargin{
		    margin-top: 100px;
	   }
	   .heading{
		   	font-family: 'Noto Sans TC', sans-serif;
		   	font-size: 62px;
		   	letter-spacing: -4px;
		   	text-transform: uppercase;
		   	text-align: left;
		   	margin-top: 70px;
		   	color: #4f3118;
	   }
	   .content-pdf{
		   	margin: 0 50px;
	   }
	   p, label{
		   	font-size: 12px;
	   }
	   p{
	   }
	   label input{vertical-align: middle;}
	   .topmargin1{
		   	margin-top: 180px;
	   }
	   .green-head{
		   	background: #82944b;
		   	padding: 4px 13px;
		   	margin: 20px 0;
	   }
	   .green-head h5{
		   	font-size: 16px; color: #fff; font-weight: bold; line-height: 1; margin-bottom: 0;margin-top: 0;
	   }
	   td.borderline{position: relative;}
	   td.borderline:after { content: ""; position: absolute; background: #000; height: 100%; top: 20px; right: 12px; width: 1px; }
	   table.col2 tr td{width: calc(100%/2);}
	   table.col4 tr td{width: calc(100%/4);}
	   label span{display: block;color: #7f7e7c;}
	   input[type="text"], input[type="email"], input[type="date"], textarea{width: 90%;padding: 2px 3px;text-transform: uppercase;outline: none;border: 1px solid #353030; margin-bottom: 10px;
	   /*background: url(img/inputbar2.png) repeat; */
	   letter-spacing: 2px; padding-left: 5px; font-family: Consolas;}
	   input[type="radio"]{vertical-align: middle;margin-top: 0;}
	   .terms p{font-family: Arial;width: 95%;}
	   .fontsize14 p{font-size: 14px;}
	   input[type="submit"]{
		    background: #000;
		    border: none;
		    color: #fff;
		    padding: 10px 20px;
		    text-transform: uppercase;
		    margin-top: 10px;
		}
		button{
			background: #000;
		    border: none;
		    color: #fff;
		    padding: 5px 20px;
		    text-transform: uppercase;
		    margin-top: 10px;
		    font-size: 12px;
		}
    </style>
</head>
<body>
	<form action="pdfnew.php" method="post">
    <div class="parent">
    	<div class="content-pdf">
	    	<a href="#"><img class="logomargin" src="img/logo.png"></a>
	    	<h1 class="heading">Application Form</h1>
		    <table class="topmargin1 fontsize14">
		    	<tr>
		    		<td><p><strong>Anti-Money Laundering & Legal Requirements</strong></p>
		    		<p>Anti-Money Laundering (the AML Act) requires us to collect identification information and documentation from prospective investors. Our Application Form captures personal information about investors to comply with the requirements of the AML act.</p>
		    		<p>This includes details such as your occupation (for individuals) or business activity (for companies I other entities) as well as your source of funds. Under the AML Act we are prohibited from processing your application until we have received all the required information and identification documents.</p>
		    		<p>Please note, in some cases we may need to collect further information and/or documentation from you in order to comply with our obligations under the AML Act.</p>
		    		<p>For more information please visit our website: www.villetorteam.com</p></td>
		    		<td><p><strong>Important Instructions for completing this form</strong></p>
		    		<p>Start filling out the requested information in the corresponding fields. Once completed print the forms out. (Please note: Adobe Reader does not allow you the option to save your work, it is important that you print out your form immediately after completion.)</p>
		    		<p>When your forms have been completed and ensured that no mistakes have been made, please sign, date, scan and together with the Account Terms & Conditions send the following forms back via email or fax as advised below.</p>
		    		<p>Should you have any questions or need further assistance with completing the form, please contact us via email or telephone and one of our advisors will assist you.</p></td>
		    	</tr>
		    </table>
		</div>
		<div class="fullwidth">
			<img style="width: 100%;" src="img/front-footer.png">
		</div>
		<div class="content-pdf" style="margin-top: 10px;">
			<p>Villetorte is authorised and regulated by the Financial Conduct Authority (EEA Authorisation number 577049)</p>
		</div>
	</div>
	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<p>Establish your Villetorte account. Complete all sections below. Villetorte will use theinformation you provide service your accounts, communicate with you, and to use the information provided below to verify your identity.</p>
			<p><strong>Please use a black or blue pen to complete this Application Form, print within the boxes in CAPITAL letters and mark the appropriate boxes with an “X.”</strong></p>

			<div class="green-head">
				<h5>Section 1 - Type of Account</h5>
			</div>
			<label style="display: block;"><input type="checkbox" name="individual" value="Individual" id="individual">Individual</label>
			<label style="display: block;"><input type="checkbox" name="individual" value="Corporate" id="corporate">Corporate</label>
			<label style="display: block;"><input type="checkbox" name="individual" value="Joint Tenants with right of survivorship > if owner dies, his/her interest passes to the surviving owner(s)." id="survivorship">Joint Tenants with right of survivorship <span style="color: #ccc;display: inline-block;">> if owner dies, his/her interest passes to the surviving owner(s).</span></label>
			<div class="green-head">
				<h5>Section 2 - Individual Details</h5>
			</div>
			<div class="row">
				<table class="col2" style="width: 100%;">
					<tr>
						<td class="borderline">
							<div style="display: flex;margin-bottom:20px;">
								<p style="color: #7f7e7c;margin-right: 10px;margin-top: 0; margin-bottom: 0;">Title</p>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="individual_title" value="Mr" id="mr">Mr</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="individual_title" value="Mrs" id="mrs">Mrs</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="individual_title" value="Miss" id="miss">Miss</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="individual_title" value="Ms" id="ms">Ms</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="individual_title" value="Other" id="other">Other</label>
							</div>
							<label><span>Full given name(s)</span><textarea name="individual_name" id="individual_name"></textarea></label>
							<label><span>Surname</span><input type="text" name="individual_surname" id="individual_surname"></label>
							<label><span>Date of birth (dd/mm/yy)</span><input type="date" name="individual_date" id="individual_date"></label>
							<label><span>Occupation</span><input type="text" name="individual_occupation" id="individual_occupation"></label>
							<label><span>Nationality</span><input type="text" name="individual_nationality" id="individual_nationality"></label>
							<label><span>Country of Residence</span><input type="text" name="individual_country" id="individual_country"></label>
							<label><span>Mothers Maiden Name (For security and client identification purposes)</span><input type="text" name="individual_mother" id="individual_mother"></label>
							<label><span>Mobile Telephone Number (Country Code, Number</span><input type="text" name="individual_mobile" id="individual_mobile"></label>
							<label><span>Home Telephone Number (Country Code, City/Area Number)</span><input type="text" name="individual_home_telephone" id="individual_home_telephone"></label>
							<label><span>Business Telephone Number (Country Code, City.Area Number)</span><input type="text" name="individual_business_telephone" id="individual_business_telephone"></label>
							<label><span>Email Address</span><input type="email" name="individual_email" id="individual_email"></label>
						</td>
						<td>
							<p style="color: #7f7e7c;"><strong style="color: #000;">Address -</strong> Permanent residential address (we are unable to accept a 'care of' or post box)</p>
							<label><span>Permanent Residential Address</span><textarea type="text" name="individual_address" id="individual_address"></textarea></label>
							<label><span>City</span><input type="text" name="individual_city"></label>
							<label><span>State or Province</span><input type="text" name="individual_state" id="individual_state"></label>
							<label><span>Country</span><input type="text" name="individual_country" id="individual_country"></label>
							<label><span>Postal or Zip Code</span><input type="text" name="individual_zip" id="individual_zip"></label>
							<p><strong>For Corporate Accounts please complete below</strong></p>
							<p>(we are unable to accept a 'care of' or box)</p>
							<label><span>Company Name & Address</span><textarea type="text" name="individual_company_name_address" id="individual_company_name_address"></textarea></label>
							<label><span>City</span><input type="text" name="individual_city_corporate" id="individual_city_corporate"></label>
							<label><span>State or Province</span><input type="text" name="individual_state_corporate" id="individual_state_corporate"></label>
							<label><span>Country</span><input type="text" name="individual_country_corporate" id="individual_country_corporate"></label>
							<label><span>Postal or Zip Code</span><input type="text" name="individual_zip_corporate" id="individual_zip_corporate"></label>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<div class="green-head">
				<h5>Section 3 - Account Holder Details</h5>
			</div>
			<p style="margin-bottom: 0;"><strong>1. Establish your Villetorte account (Continued)</strong></p>
			<p style="margin-top: 0;">Account Holder (Continued) Investment Industry Regulations require that we collect the following information:</p>
			<table class="col2">
				<tr>
					<td>
						<p style="color: #7f7e7c;margin-right: 10px;margin-bottom:10px;">Check only one:</p>
						<div style="display: flex;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Employed" id="holder_status_employed">Employed</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Student" id="holder_status_student">Student</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Homemaker" id="holder_status_homemaker">Homemaker</label>
					</div>
					<div style="display: flex;margin-bottom: 20px;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Self-Employed" id="holder_status_self_employed">Self-Employed</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Retired" id="holder_status_retired">Retired</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="holder_status" value="Not Employed" id="holder_status_not_employed">Not Employed</label>
					</div>
					<label><span>Employer</span><input type="text" name="employer" id="employer"></label>
					<label><span>Occupation/Position</span><input type="text" name="occupation_position" id="occupation_position"></label>
					<label><span>Industry of Employment</span><input type="text" name="industryofemployment" id="industryofemployment"></label>
					<p style="color: #7f7e7c;margin-right: 10px;margin-bottom:10px;">Martial Status</p>
						<div style="display: flex;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="marital" value="Single" id="single">Single</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="marital" value="Married" id="married">Married</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="marital" value="Divorced" id="divorced">Divorced</label>

						<label>Number of <br>Dependents<input style="width: 45px; margin-top: -18px; margin-left: 10px;" type="number" name="dependents" id="dependents"></label>
					</td>
					<td>
						<p style="color: #7f7e7c;">Are you a director, 10% shareholder or policy-making officer of a publicly held company?</p>
						<label><input type="radio" name="director" value="Yes" id="directoryes">Yes</label>
						<label><input type="radio" name="director" value="No" id="directorno">No</label>
						<p style="color: #7f7e7c;margin-top: 15px;margin-bottom: 20px;"><span>*If yes, which compan(ies)?</span></p>
						<label><span>Company Name</span><input type="text" name="company_name_1" id="company_name_1"></label>
						<label><span>Trading Symbol</span><input type="text" name="trading_symbol_1" id="trading_symbol_1"></label>
						<label><span>Company Name</span><input type="text" name="company_name_2" id="company_name_2"></label>
						<label><span>Trading Symbol</span><input type="text" name="trading_symbol_2" id="trading_symbol_2"></label>
					</td>
				</tr>
			</table>


			<table class="col4">
				<tr>
					<td>
						<p style="color: #7f7e7c;">Investment knowledge & Experience</p>
						<label style="display: block;"><input type="checkbox" value="None" name="investment_knowledge" id="none">None</label>
						<label style="display: block;"><input type="checkbox" value="Limited" name="investment_knowledge" id="limited">Limited</label>
						<label style="display: block;"><input type="checkbox" value="Good" name="investment_knowledge" id="good">Good</label>
						<label style="display: block;"><input type="checkbox" value="Extensive" name="investment_knowledge" id="extensive">Extensive</label>
					</td>
					<td>
						<p style="color: #7f7e7c;">Annual Income</p>
						<label style="display: block;"><input type="checkbox" name="annual" value="25,000 - 49,000" id="annual">25,000 - 49,000</label>
						<label style="display: block;"><input type="checkbox" name="annual" value="50,000 - 99,000" id="annual">50,000 - 99,000</label>
						<label style="display: block;"><input type="checkbox" name="annual" value="100,000 - 249,999" id="annual">100,000 - 249,999</label>
						<label style="display: block;"><input type="checkbox" name="annual" value="250,000 - 499,000" id="annual">250,000 - 499,000</label>
						<label style="display: block;"><input type="checkbox" name="annual" value="500,000 - 999,000" id="annual">500,000 - 999,000</label>
						<label style="display: block;"><input type="checkbox" name="annual" value="Over 1,000,000" id="annual">Over 1,000,000</label>
					</td>
					<td>
						<p style="color: #7f7e7c;">Liquid Net Worth</p>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="50,000 - 100,000" id="liquid_net_worth">50,000 - 100,000</label>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="100,000 - 250,000" id="liquid_net_worth">100,000 - 250,000</label>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="250,000 - 500,000" id="liquid_net_worth">250,000 - 500,000</label>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="500,000 - 1,000,000" id="liquid_net_worth">500,000 - 1,000,000</label>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="1,000,000 - 3,000,000" id="liquid_net_worth">1,000,000 - 3,000,000</label>
						<label style="display: block;"><input type="checkbox" name="liquid_net_worth" value="Over 3,000,000" id="liquid_net_worth">Over 3,000,000</label>
					</td>
					<td>
						<p style="color: #7f7e7c;">Tot Net Worth</p>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="50,000 - 100,000" id="total_net_worth">50,000 - 100,000</label>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="100,000 - 500,000" id="total_net_worth">100,000 - 500,000</label>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="500,000 - 1,000,000" id="total_net_worth">500,000 - 1,000,000</label>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="1,000,000 - 3,000,000" id="total_net_worth">1,000,000 - 3,000,000</label>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="3,000,000 - 5,000,000" id="total_net_worth">3,000,000 - 5,000,000</label>
						<label style="display: block;"><input type="checkbox" name="total_net_worth" value="Over 5,000,000" id="total_net_worth">Over 5,000,000</label>

					</td>
				</tr>
			</table>
			<hr>
			<table>
				<tr>
					<td>
						<p style="margin-top: 0;"><strong>2. Overall Investment Objective of Account</strong></p>
						<div style="display: flex;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="overall_investment" id="overall_investment" value="Capital Reservation">Capital Reservation</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="overall_investment" id="overall_investment" value="Income">Income</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="overall_investment" id="overall_investment" value="Growth">Growth</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="overall_investment" id="overall_investment" value="Speculation">Speculation</label>
					</td>
				</tr>
			</table>
			<hr>
			<table>
				<tr>
					<td>
						<p style="margin-top: 0;"><strong>3. How did you hear about us</strong></p>
						<div style="display: flex;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="hear" id="hear" value="General">General Reputation</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="hear" id="hear" value="TV Interview">TV Interview</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="hear" id="hear" value="Yahoo Finance">Yahoo Finance</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="hear" id="hear" value="General Advertisement">General Advertisement</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="hear" id="hear" value="Referral">Referral</label>
					</td>
				</tr>
			</table>

			<hr>
			<table>
				<tr>
					<td>
						<p style="margin-top: 0;"><strong>4. Additional Regulatory Questions</strong></p>
						<p>A. Are you, or are any of your immediate family members, a current or former senior official in the executive, legislative, administrative, military or judicial branch of any goverment; a senior official of a major political party; or a senior executive of an enterprise owned by a goverment; or do you maintain a close personal or professional relationship with such an individual?</p>
						<div style="display: flex;">
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="question" id="question" value="Yes">Yes</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="question" id="question" value="No">No</label>
					</td>
				</tr>
			</table>
			<hr>
			<table>
				<tr>
					<td>
						<p style="margin-bottom: 5px;margin-top: 0;">*if yes, please describe the person who has the position and your relationship if it is not yourself</p>
						<label><input type="text" name="relationship" id="relationship"></label>
						<p style="margin-top: 0;">B. Describe how you accumulated the fund that you intend to invest with us:</p>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="accumulatedfunds" id="accumulatedfunds" value="Salary/Wages/Savings">Salary/Wages/Savings</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="accumulatedfunds" id="accumulatedfunds" value="Investment/Capital Gains">Investment/Capital Gains</label>
						<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="accumulatedfunds" id="accumulatedfunds" value="Family/Relatives/Inheritance">Family/Relatives/Inheritance</label>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<div class="green-head">
				<h5>Section 4 - Joint Account Holders (if applicable)</h5>
			</div>
			<p><strong>Account Holder (Continued) Investment industry regulations require that we collect the following information:</strong></p>
			<div class="row">
				<table class="col2" style="width: 100%;">
					<tr>
						<td class="borderline">
							<div style="display: flex;margin-bottom:20px;">
								<p style="color: #7f7e7c;margin-right: 10px;margin-top: 0; margin-bottom: 0;">Title</p>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="group_title" value="Mr" id="mr">Mr</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="group_title" value="Mrs" id="mrs">Mrs</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="group_title" value="Miss" id="miss">Miss</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="group_title" value="Ms" id="ms">Ms</label>
								<label style="margin-right: 10px;"><input style="margin-right: 2px;" type="checkbox" name="group_title" value="Other" id="other">Other</label>
							</div>
							<label><span>Full given name(s)</span><textarea name="group_name" id="group_name"></textarea></label>
							<label><span>Surname</span><input type="text" name="group_surname" id="group_surname"></label>
							<label><span>Date of birth (dd/mm/yy)</span><input type="date" name="group_dob" id="group_dob"></label>
							<label><span>Occupation</span><input type="text" name="group_occupation" id="group_occupation"></label>
							<label><span>Nationality</span><input type="text" name="group_nationality" id="group_nationality"></label>
							<label><span>Country of Residence</span><input type="text" name="group_country" id="group_country"></label>
							<label><span>Mothers Maiden Name (For security and client identification purposes)</span><input type="text" name="group_mother" id="group_mother"></label>
							<label><span>Mobile Telephone Number (Country Code, Number</span><input type="text" name="group_mobile_telephone" id="group_mobile_telephone"></label>
							<label><span>Home Telephone Number (Country Code, City/Area Number)</span><input type="text" name="group_home_telephone" id="group_home_telephone"></label>
							<label><span>Business Telephone Number (Country Code, City.Area Number)</span><input type="text" name="group_business_telephone" id="group_business_telephone"></label>
							<label><span>Email Address</span><input type="email" name="group_email_address"></label>
						</td>
						<td style="vertical-align: top;">
							<p style="color: #7f7e7c;"><strong style="color: #000;">Address -</strong> Permanent residential address (we are unable to accept a 'care of' or post box)</p>
							<label><span>Permanent Residential Address</span><textarea type="text" name="group_address" id="group_address"></textarea></label>
							<label><span>City</span><input type="text" name="group_city" id="group_city"></label>
							<label><span>State or Province</span><input type="text" name="group_state" id="group_state"></label>
							<label><span>Country</span><input type="text" name="group_country2" id="group_country2"></label>
							<label><span>Postal or Zip Code</span><input type="text" name="group_zip" id="group_zip"></label>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<div class="green-head">
				<h5>Section 5 - Authorization to Open Account</h5>
			</div>
			<p style="font-size: 14px;">By signing this application, you acknowledge that you have received and read a copy of the attached Application Agreement. You acknowledge that your signature signifies and constitutes your agreement that this account and your relationship with "Villetorte' will be governed by the Application Agreement and all incorporated agreements and disclosures</p>
			<p style="font-size: 14px;">For purposes of this Account Application and the attached Application Agreement, the terms "you," "your" and "Account Holder" refer to each person who signs this Account Application. The terms "we," "us," and "Villetorte" refer to "Villetorte Management". (Account Holder(s)) represent that the foregoing information is true and correct, and will notify "Villetorte" of any material changes, 'Villetorte' reserves the right, but has no duty, to verify the accuracy of information provided, and to contact such bankers, brokers and others as it deems necessary.</p>
			<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 style="margin: 0;">Signature (s) and Date (s) Required</h4>
				<p style="margin-top: 0;">Sign in the canvas below and save your signature as an image!</p>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="sig-canvas2" name="sig-canvas2" width="620" height="160">
		 			Get a better browser.
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" id="sig-submitBtn2" type="button" id="sig-submitBtn2">Submit Signature</button>
				<button class="btn btn-default" id="sig-clearBtn2" type="button" id="sig-clearBtn2">Clear Signature</button>
				<input style="display: inline-block; width: 23%; padding: 4px 10px; margin-left: 5px;" type="date" name="sign_date2" id="sign_date2">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label style="display: block;margin: 10px 0;"><input type="checkbox" required>It is required to click on 'Submit Signature' to generate image below</label>
				<textarea id="sig-dataUrl2" name="sig-dataUrl2" class="form-control" rows="1">Image Code</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img id="sig-image2" style="width: 40%;" name="sig-image2" src="" alt="Your signature will go here!"/>
			</div>
		</div>
	</div>
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 style="margin-bottom: 0;margin-bottom:5px; ">Additional E-Signature</h4>
				<p style="margin-top: 0;">Sign in the canvas below and save your signature as an image!</p>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="sig-canvas3" name="sig-canvas3" width="620" height="160">
		 			Get a better browser.
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" id="sig-submitBtn3" type="button" id="sig-submitBtn3">Submit Signature</button>
				<button class="btn btn-default" id="sig-clearBtn3" type="button" id="sig-clearBtn3">Clear Signature</button>
				<input style="display: inline-block; width: 23%; padding: 4px 10px; margin-left: 5px;" type="date" name="sign_date3" id="sign_date3">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- <label style="display: block;margin: 10px 0;"><input type="checkbox" required>It is required to click on 'Submit Signature' to generate image below</label> -->
				<textarea id="sig-dataUrl3" name="sig-dataUrl3" class="form-control" rows="1">Image Code</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-13">
				<img id="sig-image3" style="width: 40%;" name="sig-image3" src="" alt="Your signature will go here!"/>
			</div>
		</div>
	</div>	
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<div class="green-head" style="margin-bottom: 5px;">
				<h5>Section 6 - Terms & Conditions</h5>
			</div>
			<table class="col2 terms">
				<tr>
					<td style="vertical-align: top;">
						<p style="margin-bottom:0;font-size:10px;">1. Company information</p> 
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">This website (“Website”) is operated by Villetorte Management (“Villetorte”/”we”/”us”/”our”). Any Villetorte financial products detailed on this website are managed by Villetorte or the associated Villetorte companies in the Villetorte group and there is further reference to this in Part B below. Villetorte Finance Management (authorised and regulated by the Financial Conduct Authority) (defined in Part B below. Registered Office: 30 Dukes Place, Aldgate, London, EC3A 7HX and on the FCA’s Financial Services Register no. 577049 <a href="//www.fca.org.uk/register/">(www.fca.org.uk/register/)</a>.</p>

						<p style="margin-bottom:0;font-size:10px;">2. Scope of these terms & conditions (“Terms”)</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">These Terms, as amended by us from time to time, set out the basis on which you may use this website and provide information about the way we present the various Villetorte financial products and related services detailed on this website. This website contains some information and services that is/are freely available and accessible to all United Kingdom based users and users in those countries as listed on the “Our offices” page.</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">These Terms are effective from July 2016. We may change them from time to time by updating this page so please revisit and reread it periodically. We may change the content or availability of any of the information or services available through this website (including changing these Terms) or add additional services.</p>

						<p style="margin-bottom:0;font-size:10px;">3. Accessing this website and our services</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">You are responsible for making all arrangements necessary for you to have access to this website and for all telephone, internet service provider and other costs incurred in accessing and using this Website. You are also responsible for ensuring that all persons who access this website through your internet connection are aware of these Terms (including our Privacy and Cookies Policy) and that they comply with and accept them, as relevant.</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Unless otherwise indicated, you are only permitted to use this website for your own personal, non-commercial purposes, and you may not in any way resell any of these services or make these services available to any third party</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">You must not establish a link to any pages of this website from another website or document without our prior written consent. See “Contact Us” below</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">You agree that you will provide us with full and accurate details whenever you submit personal information through this website and that you will promptly notify us in writing if those details change at any time.</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">See “Contact Us” below. We may stop the provision of any services to you through this website if we discover or have reason to suspect that the information or details you have given to us is/are false, misleading, inaccurate or incomplete. Whilst Villetorte uses every reasonable effort to maintain the availability of this website, we cannot guarantee its availability or the continuation of the services offered through it or that access will be uninterrupted or error free</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">From time to time, we may restrict access to some parts of this website, or this entire website, to users irrespective of whether they are registered users, as relevant.</p>

						<p style="margin-bottom:0;font-size:10px;">4. Disclaimer: Reliance on information posted and security</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Whilst Villetorte uses every reasonable effort to ensure that the accuracy of the information contained on this website which was prepared by or on behalf of Villetorte (as distinct from third party content – see "Disclaimer: Links, third party information and websites" below) as at the date of publication, all such information is provided “as is” and this means that except where prohibited by law no warranties are given, whether express or implied, as to the reliability, accuracy, suitability or completeness of the information.</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any use, or misuse, of the information presented on this website or for any loss or damage which may arise from access to or reliance on information published on this website, except where that liability may not be excluded or limited by law. Accordingly, to the maximum extent permitted by law, we provide you with this website on the basis that we exclude all representations, warranties, conditions and other terms which are not expressly set out in these Terms (including our Privacy and Cookies Policy). This does not affect any mandatory legal rights that cannot be excluded under applicable law. Nothing in these Terms shall limit or exclude our liability\ (if any) for:</p>
						 <p style="margin-top:0;margin-bottom:0;font-size:10px;">Fraud or fraudulent misrepresentation Personal injury or death resulting from our negligence Our breach of our statutory obligation to provide the website and related services with reasonable skill and care Any other matter for which it would be illegal for us to exclude, or attempt to exclude, liability</p>
					</td>
					<td>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">We take all reasonable precautions to seek to keep secure all confidential information you send to us, including precautions against unauthorised access or loss. However, in common with all website operators, we cannot guarantee the security of any data transmitted by internet email or through this website. Please do not communicate with us by these methods unless you accept the security implications of dealing online. We strongly recommend that you do not send us any confidential information or commercially sensitive information or sensitive personal data (e.g. data about health or medical conditions, actual or suspected crimes by email or through this website. Communications sent by you via Internet email, or through this website, are sent at your own risk.</p>

						<p style="margin-bottom:0;font-size:10px;">5. Disclaimer: Links, third party information and websites</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">This website may contain, or be linked to, advice or statements from third parties. No company in the Villetorte Limited group, which includes Villetorte, makes any representation as to the accuracy,completeness, timeliness or suitability of such information and we have not, and will not, review or update such information. Any use made of such information is at your own risk.Some of the information contained on this website may also have been prepared or provided by third parties and may not have been verified by us. Except where prohibited by law (see above, no warranties are given, whether express or implied, as to the reliability, accuracy, suitability or completeness of the information. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any use, or misuse, of the information published on this website, except where that liability may not be excluded or limited by law (see above.The links we provide from this website to other websites are provided for information only. Other sites may link to this website. We do not assume any responsibility or liability with respect to any website accessed via this website or linking to this website or for any of the content on those websites. Those websites will have their own terms and privacy policies and you should read them carefully before using those sites.The presence of any advert on this website is not an endorsement of the goods, services, business or website advertised.</p>

						<p style="margin-bottom:0;font-size:10px;">6. Copyright and trademarks</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Except where indicated otherwise, the copyright subsisting in the content on this website and in the materials made available through this website, including in all information, text, images and layout is the exclusive property of Villetorte or another company in the Villetorte Limited group or is licensed to Villetorte for use on this website. You are only permitted to print, copy, download or temporarily store extracts of content which is owned by Villetorte companies as strictly necessary and for your personal use, provided that you do not change or remove any copyright notices. You are not permitted to distribute or otherwise make available or communicate to the public any part of the same. All copyright and other intellectual property rights shall continue to be held by or used under licence by Villetorte or the other companies in the Villetorte Limited group, as relevant, and no rights of any kind in it shall pass to you. Copyright in certain content and materials is owned by third parties and is reproduced on or made available through this website with the permission of the third-party copyright owners pursuant to licences to Villetorte or the other companies in the Villetorte Limited group, as relevant. You are not permitted to print, copy, download or temporarily store extracts of any content which is owned by third parties and used by Villetorte companies on this website under licence. This means that where you see a disclaimer at the end of or beside links to e.g. videos on this website you must not print, copy, download or temporarily store any part of that content whatsoever.The trademarks and logos shown on this website are either owned by Villetorte, other companies in the Villetorte Limited group, or a third party. No rights are granted to use any trade marks on this website without the prior written consent of Villetorte</p>

						<p style="margin-bottom:0;font-size:10px;">7. Information you submit through this website</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">You agree that you will not:</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Place on or submit through this website any information or material which is abusive, illegal, threatening, defamatory, obscene, pornographic, discriminatory or otherwise offensive or which constitutes or encourages conduct that would be considered a criminal offence, give rise to civil liability, or is otherwise contrary to the law or would infringe the rights of Villetorte or any other companies in the Villetorte Limited group, or those of any third-party Place on or submit through this website any viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful; or interfere with the operation or content of this website</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Any attempt to damage this website may be illegal and we reserve the right to seek damages from you in relation to that and in accordance with applicable law. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any loss or damage caused by any viruses or other technologically harmful material that may infect your PC or other device, computer programs, data or other proprietary material due to your use of this website or to your downloading of any material posted on it, or on any website linked to it, except where that liability may not be excluded or limited by law (see above).</p>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
			<table class="col2 terms">
				<tr>
					<td style="vertical-align: top;">
						<p style="margin-bottom:0;font-size:10px;">8. Receipt and sending of communications</p> 
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Communications which we send to you by email will be deemed received by you immediately upon sending. We will not be obliged to seek any acknowledgement of receipt from you in respect of such emails. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any delay or failure of delivery (for whatever reason) of any such email except where that liability may not be excluded or limited by law (see above). If we have addressed such communications to your email address, then we will not have breached any duty of confidentiality owed to you, even if they are seen by any other person as a result. Communications sent by you to us by email will be deemed received by us upon actual receipt by a system under our control.</p>

						<p style="margin-bottom:0;font-size:10px;">9. Jurisdiction and applicable law</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Use of this website and the content and materials available on or through this website, together with these Terms, are governed by and interpreted in accordance with English law. By using this website, you agree to submit to the exclusive jurisdiction of the English courts.</p>

						<p style="margin-bottom:0;font-size:10px;">10. Assignment of rights and sub-contracting</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">We may, at any time, assign any or all of our rights or obligations under these Terms to any person. This includes but is not limited to any person which takes on responsibility for operating this website or provides the Villetorte investment products and related services. This includes assignments where necessary as part of any restructuring relating to Villetorte and its business or assets, or as part of a sale of Villetorte or, as relevant, another company in the Villetorte Limited group, or its/their assets.Any rights granted to you and obligations incurred by you under these are personal to you and may not be transferred to any third party. We may, at any time, sub- contract the performance of all or any of our obligations under these Terms.</p>

						<p style="margin-bottom:0;font-size:10px;">11. Waiver</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">If we do not exercise any right or remedy which we have under these Terms this does not mean we have waived our right to it or any other right or remedy of ours.</p>
					</td>
					<td>
						<p style="margin-bottom:0;font-size:10px;">12. Severance</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">If any part of these Terms is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, the other provisions will remain in force. If any invalid, unenforceable or illegal provision would be valid, enforceable or legal if some part of it were deleted, the provision shall apply with whatever modification is necessary to give effect to the actual intent of the parties.</p>

						<p style="margin-bottom:0;font-size:10px;">6. Relationship</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">You agree that no joint venture, partnership, employment, or agency relationship exists between you and us as a result of these Terms or your use of this website.</p>

						<p style="margin-bottom:0;font-size:10px;">7. Entire agreement</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">These Terms (including our Privacy and Cookies Policy) contain the entire agreement between you and us regarding their subject matter and they supersede all prior communications, representations, warranties, stipulations, undertakings and agreement between the parties. Nothing in these Terms shall, however, operate to limit or exclude the liability of either party for any fraudulent misrepresentation.</p>

						<p style="margin-bottom: 0;font-size: 10px;">Regulatory information</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">We are authorised and regulated by the Financial Conduct Authority, which can be contacted at 25 Canada Square, Canary Wharf, London E14 5LB. Investors who use our services are protected by the Financial Services Compensation Scheme for any amounts that we are unable to pay up to a maximum of £85,000 for each investor and subject to the rules of the scheme.</p>
						<p style="margin-top:0;margin-bottom:0;font-size:10px;">Specifically, this website is not intended for use by any person in the United States. Shares in Villetorte Funds have not been and will not be registered under the United States Securities Act of 1933, as amended, or registered or qualified under the securities laws of any state of the United States and may not be offered, sold, transferred or delivered, directly or indirectly, to any investors within the United States or to, or for the account of, US Persons except in certain limited circumstances pursuant to a transaction exempt from such registration or qualification requirements. None of the shares have been approved or disapproved by the US Securities and Exchange Commission, any state securities commission in the United States or any other US regulatory authority, nor have any of the foregoing authorities passed upon or endorsed the merits of the offering of the shares or the accuracy or adequacy of the prospectus. The Funds will not be registered under the United States Investment Company Act of 1940, as amended.</p>
					</td>
				</tr>
			</table>
				<!-- Content -->
	<!-- Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 style="margin: 0;">Signature (s) and Date (s) Required</h4>
				<p style="margin-top: 0;">Sign in the canvas below and save your signature as an image!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="sig-canvas" name="sig-canvas" width="620" height="160">
		 			Get a better browser.
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" id="sig-submitBtn" type="button" id="sig-submitBtn">Submit Signature</button>
				<button class="btn btn-default" id="sig-clearBtn" type="button" id="sig-clearBtn">Clear Signature</button>
				<input style="display: inline-block; width: 23%; padding: 4px 10px; margin-left: 5px;" type="date" name="sign_date" id="sign_date">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label style="display: block;margin: 10px 0;"><input type="checkbox" required>It is required to click on 'Submit Signature' to generate image below</label>
				<textarea id="sig-dataUrl" name="sig-dataUrl" class="form-control" rows="1">Image Code</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img id="sig-image" style="width: 40%;" name="sig-image" src="" alt="Your signature will go here!"/>
			</div>
		</div>
	</div>
				
		</div>
	</div>

	<div class="parent" style="margin-top: 20px;">
		<div class="header">
			<img src="img/header.png" style="width: 100%;margin-top: 35px;">
		</div>
		<div class="content-pdf" style="margin-top: 20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 style="margin-bottom: 0;margin-bottom:5px; ">Additional E-Signature</h4>
				<p style="margin-top: 0;">Sign in the canvas below and save your signature as an image!</p>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
		 		<canvas id="sig-canvas4" name="sig-canvas4" width="620" height="160">
		 			Get a better browser.
		 		</canvas>
		 	</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-primary" id="sig-submitBtn4" type="button" id="sig-submitBtn4">Submit Signature</button>
				<button class="btn btn-default" id="sig-clearBtn4" type="button" id="sig-clearBtn4">Clear Signature</button>
				<input style="display: inline-block; width: 23%; padding: 4px 10px; margin-left: 5px;" type="date" name="sign_date4" id="sign_date4">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- <label style="display: block;margin: 10px 0;"><input type="checkbox" required>It is required to click on 'Submit Signature' to generate image below</label> -->
				<textarea id="sig-dataUrl4" name="sig-dataUrl4" class="form-control" rows="1">Image Code</textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-13">
				<img id="sig-image4" style="width: 40%;" name="sig-image4" src="" alt="Your signature will go here!"/>
			</div>
		</div>
		<br><br>
		<label style="margin-top: 0;margin-bottom: 0;"><input type="checkbox" name="confirm" required="" value="I acknowledge that all the information above are correct and i have double checked it.">I acknowledge that all the information above are correct and i have double checked it.</label><br>
			<input type="submit" name="Submit Data">
	</div>	
		</div>
	</div>	
	</form>
	<style type="text/css">#sig-canvas, #sig-canvas2, #sig-canvas3, #sig-canvas4 {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: crosshair;
}</style>
	<script type="text/javascript">
		(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

})();
	</script>



	<script type="text/javascript">
		(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas2");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText2 = document.getElementById("sig-dataUrl2");
  var sigImage2 = document.getElementById("sig-image2");
  var clearBtn2 = document.getElementById("sig-clearBtn2");
  var submitBtn2 = document.getElementById("sig-submitBtn2");
  clearBtn2.addEventListener("click", function(e) {
    clearCanvas();
    sigText2.innerHTML = "Data URL for your signature will go here!";
    sigImage2.setAttribute("src", "");
  }, false);
  submitBtn2.addEventListener("click", function(e) {
    var dataUrl2 = canvas.toDataURL();
    sigText2.innerHTML = dataUrl2;
    sigImage2.setAttribute("src", dataUrl2);
  }, false);

})();
	</script>


	<script type="text/javascript">
		(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas3");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText3 = document.getElementById("sig-dataUrl3");
  var sigImage3 = document.getElementById("sig-image3");
  var clearBtn3 = document.getElementById("sig-clearBtn3");
  var submitBtn3 = document.getElementById("sig-submitBtn3");
  clearBtn3.addEventListener("click", function(e) {
    clearCanvas();
    sigText3.innerHTML = "Data URL for your signature will go here!";
    sigImage3.setAttribute("src", "");
  }, false);
  submitBtn3.addEventListener("click", function(e) {
    var dataUrl3 = canvas.toDataURL();
    sigText3.innerHTML = dataUrl3;
    sigImage3.setAttribute("src", dataUrl3);
  }, false);

})();
	</script>


	<script type="text/javascript">
		(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas4");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText4 = document.getElementById("sig-dataUrl4");
  var sigImage4 = document.getElementById("sig-image4");
  var clearBtn4 = document.getElementById("sig-clearBtn4");
  var submitBtn4 = document.getElementById("sig-submitBtn4");
  clearBtn4.addEventListener("click", function(e) {
    clearCanvas();
    sigText4.innerHTML = "Data URL for your signature will go here!";
    sigImage4.setAttribute("src", "");
  }, false);
  submitBtn4.addEventListener("click", function(e) {
    var dataUrl4 = canvas.toDataURL();
    sigText4.innerHTML = dataUrl4;
    sigImage4.setAttribute("src", dataUrl4);
  }, false);

})();
	</script>
</body>
</html>
		        
		    