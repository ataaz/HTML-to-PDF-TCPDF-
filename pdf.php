<?php

//get fields
// $individual = $_POST['individual'];

if (isset($_POST['individual'])){
	$individual = $_POST['individual'];
}

//include library
include('tcpdf.php');

//make TCPDF object
$pdf = new TCPDF('p', 'mm', 'A4');

//remove default header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

//add page
$pdf->AddPage();

//addContent
$html ="

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
	   label span{display: block;color: #aba9a6;}
<div class='parent'>
    	<div class='content-pdf'>
	    	<a href='#'><img class='logomargin' src='img/logo.png'></a>
	    	<h1 class='heading'>Application Form</h1>
		    <table class='topmargin1 fontsize14'>
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
		<div class='fullwidth'>
			<img style='width: 100%;' src='img/front-footer.png'>
		</div>
		<div class='content-pdf' style='margin-top: 10px;'>
			<p>Villetorte is authorised and regulated by the Financial Conduct Authority (EEA Authorisation number 577049)</p>
		</div>
	</div>
";


$pdf->Cell(40,10, $individual);
$pdf->ln();
//Printing output
$pdf->Output(); 



?>