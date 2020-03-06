<?php
$individual ='';
if (isset($_POST['individual'])){
  $individual = $_POST['individual'];
}
$individual_title ='';
if (isset($_POST['individual_title'])){
  $individual_title = $_POST['individual_title'];
}
//individual 1st column
$individual_name = $_POST['individual_name'];
$individual_surname = $_POST['individual_surname'];
$individual_date = $_POST['individual_date'];
$individual_occupation = $_POST['individual_occupation'];
$individual_nationality = $_POST['individual_nationality'];
$individual_country = $_POST['individual_country'];
$individual_mother = $_POST['individual_mother'];
$individual_mobile = $_POST['individual_mobile'];
$individual_home_telephone = $_POST['individual_home_telephone'];
$individual_business_telephone = $_POST['individual_business_telephone'];
$individual_email = $_POST['individual_email'];

//individual 2nd column
$individual_address = $_POST['individual_address'];
$individual_city = $_POST['individual_city'];
$individual_state = $_POST['individual_state'];
$individual_country = $_POST['individual_country'];
$individual_zip = $_POST['individual_zip'];
$individual_company_name_address = $_POST['individual_company_name_address'];
$individual_city_corporate = $_POST['individual_city_corporate'];
$individual_state_corporate = $_POST['individual_state_corporate'];
$individual_country_corporate = $_POST['individual_country_corporate'];
$individual_zip_corporate = $_POST['individual_zip_corporate'];

// 2nd form
$holder_status ='';
if (isset($_POST['holder_status'])){
  $holder_status = $_POST['holder_status'];
}
$employer = $_POST['employer'];
$occupation_position = $_POST['occupation_position'];
$industryofemployment = $_POST['industryofemployment'];
$marital ='';
if (isset($_POST['marital'])){
  $marital = $_POST['marital'];
}
$director ='';
$dependents = $_POST['dependents'];
if (isset($_POST['director'])){
  $director = $_POST['director'];
}
$company_name_1 = $_POST['company_name_1'];
$trading_symbol_1 = $_POST['trading_symbol_1'];
$company_name_2 = $_POST['company_name_2'];
$trading_symbol_2 = $_POST['trading_symbol_2'];
$investment_knowledge ='';
if (isset($_POST['investment_knowledge'])){
  $investment_knowledge = $_POST['investment_knowledge'];
}
$annual ='';
if (isset($_POST['annual'])){
  $annual = $_POST['annual'];
}
$liquid_net_worth ='';
if (isset($_POST['liquid_net_worth'])){
  $liquid_net_worth = $_POST['liquid_net_worth'];
}
$total_net_worth ='';
if (isset($_POST['total_net_worth'])){
  $total_net_worth = $_POST['total_net_worth'];
}
$overall_investment ='';
if (isset($_POST['overall_investment'])){
  $overall_investment = $_POST['overall_investment'];
}
$hear ='';
if (isset($_POST['hear'])){
  $hear = $_POST['hear'];
}
$question ='';
if (isset($_POST['question'])){
  $question = $_POST['question'];
}
$relationship = $_POST['relationship'];
$accumulatedfunds ='';
if (isset($_POST['accumulatedfunds'])){
  $accumulatedfunds = $_POST['accumulatedfunds'];
}
$group_title ='';
//group 1st column
if (isset($_POST['group_title'])){
  $group_title = $_POST['group_title'];
}
$group_name = $_POST['group_name'];
$group_surname = $_POST['group_surname'];
$group_dob = $_POST['group_dob'];
$group_occupation = $_POST['group_occupation'];
$group_nationality = $_POST['group_nationality'];
$group_country = $_POST['group_country'];
$group_mother = $_POST['group_mother'];
$group_mobile_telephone = $_POST['group_mobile_telephone'];
$group_home_telephone = $_POST['group_home_telephone'];
$group_business_telephone = $_POST['group_business_telephone'];
$group_email_address = $_POST['group_email_address'];

//individual 2nd column
$group_address = $_POST['group_address'];
$group_city = $_POST['group_city'];
$group_state = $_POST['group_state'];
// $group_country = $_POST['group_country'];
$group_zip = $_POST['group_zip'];




//============================================================+
// File name   : example_061.php
// Begin       : 2010-05-24
// Last Update : 2014-01-25
//
// Description : Example 061 for TCPDF class
//               XHTML + CSS
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: XHTML + CSS
 * @author Nicola Asuni
 * @since 2010-05-25
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Be Unique Group UAE');
$pdf->SetTitle('Application Form');
$pdf->SetSubject('Villetorte');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

//remove default header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);




// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 061', PDF_HEADER_STRING);

// set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
// $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
// $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);


$pdf->SetMargins(10, 0, 10, true);
// $pdf->SetFooterMargin(5);
$pdf->SetAutoPageBreak(TRUE, 0);
 // $pdf->setCellPaddings(0,0,0,0);

// add a page
$pdf->AddPage();

/* NOTE:
 * *********************************************************
 * You can load external XHTML using :
 *
 * $html = file_get_contents('/path/to/your/file.html');
 *
 * External CSS files will be automatically loaded.
 * Sometimes you need to fix the path of the external CSS.
 * *********************************************************
 */

// define some HTML content with style
// echo "<img class='logomargin' src='http://ville.local/tcpdf/img/logo.png'>";
// $pdf->Image('img/logo.jpg', 15, 140, 75, 113, 'jpg', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

$html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    
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
     h1{
        font-family: 'Noto Sans TC', sans-serif;
        font-size: 50px;
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
     input[type="text"], input[type="email"], input[type="date"], textarea{width: 90%;padding: 2px 3px;text-transform: uppercase;outline: none;border: 1px solid #353030; margin-bottom: 10px;
     /*background: url(img/inputbar2.png) repeat; */
     letter-spacing: 2px; padding-left: 5px; font-family: Consolas;}
     input[type="radio"]{vertical-align: middle;margin-top: 0;}
     .terms p{font-family: Arial;width: 95%;}
     .fontsize14 p{font-size: 14px;}
</style>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Image('img/logo.png', 9, 20, 70, 40, 'png', 'https://villetorteam.com/', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 60);
$html = <<<EOF
<style>
h1{
    font-family: 'Noto Sans TC', sans-serif;
    font-size: 50px;
    letter-spacing: -4px;
    text-transform: uppercase;
    text-align: left;
    margin-top: 70px;
    color: #4f3118;
 }
 </style>
<div class='parent'>
    <div class='content-pdf'>
      <h1 class='heading'>Application Form</h1>
  </div>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetXY(10, 140);
$html = <<<EOF
<div>
    <div>
      <table>
        <tr>
          <td style="width:46%;"><p><strong>Anti-Money Laundering & Legal Requirements</strong></p>
          <p>Anti-Money Laundering (the AML Act) requires us to collect identification information and documentation from prospective investors. Our Application Form captures personal information about investors to comply with the requirements of the AML act.</p>
          <p>This includes details such as your occupation (for individuals) or business activity (companies & other entities.) as well as your source of funds. Under the AML Act we are prohibited from processing your application until we have received all the required information and identification documents.</p>
          <p>Please note, in some cases we may need to collect further information and/or documentation from you in order to comply with our obligations under the AML Act.</p>
          <p>For more information<br>please visit our website: www.aec-investments.com</p></td>
          <td><p><strong>Important formation for filling this form</strong></p>
          <p>Please fill out the requested information in the corresponding fields.</p>
          <p>Once completed you will be prompted to submit the form back to us electronically.</p>
          <p>Please ensure you have checked all boxes relating to terms and conditions and you have signed the form by drawing your signature using a mouse or touchpad.</p></td>
        </tr>
      </table>
  </div>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// $pdf->SetXY(0, 252);
// $html = '<div style="color:#fff;" bgcolor="#50321a" align="right">
// <br><table>
// <tr>
// <td></td><td></td>
// <td><p>30 Dukes Place,<br>Aldgate, London,<br>EC3A 7HX</p></td>
// <td><p>+44 20 3966 9910<br>info@villetorteam.com<br>www.villetorteam.com</p></td>
// </tr>
// </table>
// </div>
// ';
// $pdf->writeHTML($html, true, false, true, false, '');

$pdf->Image('img/front-footer.png', 0, 248, 210, 27, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 264);
$html = <<<EOF
<div class='parent'>
  <div class='content-pdf' style='margin-top: 10px;'>
    <p>Villetorte is authorised and regulated by the Financial Conduct Authority (EEA Authorisation number 577049)</p>
  </div>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');




// add a page Section 1 and 2
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = '
<p style="margin-bottom:0;">Establish your Villetorte account. Complete all sections below. Villetorte will use theinformation you provide service your accounts, communicate with you, and to use the information provided below to verify your identity.</p>
<p><strong>Please use a black or blue pen to complete this Application Form, print within the boxes in CAPITAL letters and mark the appropriate boxes with an “X.”</strong></p>
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 1 - Type of Account</h5>
</div>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$html = '<p>'.$individual.'</p>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->SetXY(10, 87);
$html = <<<EOF
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 2 - Individual Details</h5>
</div>
EOF;
$pdf->writeHTML($html, true, false, true, false, '');

$html = '<br><br><table>
         <tbody>';
$html .= '<tr>
<td>
<p style="color:#ccc;">Title: <span style="color:#000;">'.$individual_title.'</span></p>
<p style="color:#ccc;">Full given name(s)<span style="color:#000;text-transform:uppercase;"><br>'.$individual_name.'</span></p>
<p style="color:#ccc;">Surname<span style="color:#000;text-transform:uppercase;"><br>'.$individual_surname.'</span></p>
<p style="color:#ccc;">Date of birth (dd/mm/yy)<span style="color:#000;"><br>'.$individual_date.'</span></p>
<p style="color:#ccc;">Occupation<span style="color:#000;text-transform:uppercase;"><br>'.$individual_occupation.'</span></p>
<p style="color:#ccc;">Nationality<span style="color:#000;text-transform:uppercase;"><br>'.$individual_nationality.'</span></p>
<p style="color:#ccc;">Country of Residence<span style="color:#000;text-transform:uppercase;"><br>'.$individual_country.'</span></p>
<p style="color:#ccc;">Mothers Maiden Name (For security and client identification purposes)<span style="color:#000;text-transform:uppercase;"><br>'.$individual_mother.'</span></p>
<p style="color:#ccc;">Mobile Telephone Number (Country Code, Number<span style="color:#000;"><br>'.$individual_mobile.'</span></p>
<p style="color:#ccc;">Home Telephone Number (Country Code, City/Area Number)<span style="color:#000;"><br>'.$individual_home_telephone.'</span></p>
<p style="color:#ccc;">Business Telephone Number (Country Code, City.Area Number)<span style="color:#000;"><br>'.$individual_business_telephone.'</span></p>
<p style="color:#ccc;">Email Address<span style="color:#000;text-transform:uppercase;"><br>'.$individual_email.'</span></p>
</td>
<td>
<p style="color: #ccc;"><strong style="color: #000;">Address -</strong> Permanent residential address (we are unable to accept a care of or post box)</p>
<p style="color:#ccc;">Permanent Residential Address<span style="color:#000;text-transform:uppercase;"><br>'.$individual_address.'</span></p>
<p style="color:#ccc;">City<span style="color:#000;text-transform:uppercase;"><br>'.$individual_city.'</span></p>
<p style="color:#ccc;">State or Province<span style="color:#000;text-transform:uppercase;"><br>'.$individual_state.'</span></p>
<p style="color:#ccc;">Country<span style="color:#000;text-transform:uppercase;"><br>'.$individual_country.'</span></p>
<p style="color:#ccc;">Postal or Zip Code<span style="color:#000;"><br>'.$individual_zip.'</span></p>
<p><strong>For Corporate Accounts please complete below</strong><br>
(we are unable to accept a care of or box)</p>
<p style="color:#ccc;">Company Name & Address<span style="color:#000;text-transform:uppercase;"><br>'.$individual_company_name_address.'</span></p>
<p style="color:#ccc;">City<span style="color:#000;text-transform:uppercase;"><br>'.$individual_city_corporate.'</span></p>
<p style="color:#ccc;">State or Province<span style="color:#000;text-transform:uppercase;"><br>'.$individual_state_corporate.'</span></p>
<p style="color:#ccc;">Country<span style="color:#000;text-transform:uppercase;"><br>'.$individual_country_corporate.'</span></p>
<p style="color:#ccc;">Postal or Zip Code<span style="color:#000;text-transform:uppercase;"><br>'.$individual_zip_corporate.'</span></p>
</td>
</tr>';
$html .= '</tbody>
          </table>';

$pdf->writeHTML($html, false, false, true, false, '');






// add a page Section 3
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 3 - Account Holder Details</h5>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$html = '
<p><strong>1. Establish your Villetorte account (Continued)</strong><br>Account Holder (Continued) Investment Industry Regulations require that we collect the following information:

</p>
<br><br><br><table>
         <tbody>';
$html .= '<tr>
<td>
<p style="color:#ccc;">Account Holder status <br><span style="color:#000;">'.$holder_status.'</span></p>
<p style="color:#ccc;">Employer <br><span style="color:#000;text-transform:uppercase;">'.$employer.'</span></p>
<p style="color:#ccc;">Occupation/Position <br><span style="color:#000;text-transform:uppercase;">'.$occupation_position.'</span></p>
<p style="color:#ccc;">Industry of Employment <br><span style="color:#000;text-transform:uppercase;">'.$industryofemployment.'</span></p>
<p style="color:#ccc;">Marital Status <br><span style="color:#000;text-transform:uppercase;">'.$marital.'</span></p>
<p style="color:#ccc;">Dependents <br><span style="color:#000;">'.$dependents.'</span></p>
</td>
<td>
<p style="color:#ccc;">Are you a director, 10% shareholder or policy-making officer of a publicly held company?<br><span style="color:#000;text-transform:uppercase;">'.$director.'</span></p>
<p style="color:#ccc;">Company Name <br><span style="color:#000;text-transform:uppercase;">'.$company_name_1.'</span></p>
<p style="color:#ccc;">Trading Symbol <br><span style="color:#000;text-transform:uppercase;">'.$trading_symbol_1.'</span></p>
<p style="color:#ccc;">Company Name <br><span style="color:#000;text-transform:uppercase;">'.$company_name_2.'</span></p>
<p style="color:#ccc;">Trading Symbol <br><span style="color:#000;text-transform:uppercase;">'.$trading_symbol_2.'</span></p>
</td>
</tr>
<br>
<table>
<tr>
<td>
<p style="color:#ccc;">Investment knowledge & Experience<br><span style="color:#000;text-transform:uppercase;">'.$investment_knowledge.'</span></p>
</td>
<td>
<p style="color:#ccc;">Annual Income<br><span style="color:#000;text-transform:uppercase;">'.$annual.'</span></p>
</td>
<td>
<p style="color:#ccc;">Liquid Net Worth<br><span style="color:#000;text-transform:uppercase;">'.$liquid_net_worth.'</span></p>
</td>
<td>
<p style="color:#ccc;">Total Net Worth<br><span style="color:#000;text-transform:uppercase;">'.$total_net_worth.'</span></p>
</td>
</tr>
</table>
<br>
<hr bgcolor="#ccc;">
<p style="color:#ccc;">2. Overall Investment Objective of Account</p><p><span style="color:#000;text-transform:uppercase;">'.$overall_investment.'</span></p>

<p style="color:#ccc;">3. How did you hear about us</p><p><span style="color:#000;text-transform:uppercase;">'.$hear.'</span></p>

<p style="color:#ccc;">4. Additional Regulatory Questions<br>A. Are you, or are any of your immediate family members, a current or former senior official in the executive, legislative, administrative, military or judicial branch of any goverment; a senior official of a major political party; or a senior executive of an enterprise owned by a goverment; or do you maintain a close personal or professional relationship with such an individual?</p><p><span style="color:#000;text-transform:uppercase;">'.$question.'</span></p>

<p style="color:#ccc;">*if yes, please describe the person who has the position and your relationship if it is not yourself</p><p><span style="color:#000;text-transform:uppercase;">'.$relationship.'</span></p>

<p style="color:#ccc;">B. Describe how you accumulated the fund that you intend to invest with us:</p><p><span style="color:#000;text-transform:uppercase;">'.$accumulatedfunds.'</span></p>
';
$html .= '</tbody>
          </table>';

$pdf->writeHTML($html, false, false, true, false, '');



// add a page Section 4
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 4 - Joint Account Holders (if applicable)</h5>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$html = '<br><br><table>
         <tbody>';
$html .= '<tr>
<td>
<p style="color:#ccc;">Title: <span style="color:#000;">'.$group_title.'</span></p>
<p style="color:#ccc;">Full given name(s)<span style="color:#000;text-transform:uppercase;"><br>'.$group_name.'</span></p>
<p style="color:#ccc;">Surname<span style="color:#000;text-transform:uppercase;"><br>'.$group_surname.'</span></p>
<p style="color:#ccc;">Date of birth (dd/mm/yy)<span style="color:#000;"><br>'.$group_dob.'</span></p>
<p style="color:#ccc;">Occupation<span style="color:#000;text-transform:uppercase;"><br>'.$group_occupation.'</span></p>
<p style="color:#ccc;">Nationality<span style="color:#000;text-transform:uppercase;"><br>'.$group_nationality.'</span></p>
<p style="color:#ccc;">Country of Residence<span style="color:#000;text-transform:uppercase;"><br>'.$group_country.'</span></p>
<p style="color:#ccc;">Mothers Maiden Name (For security and client identification purposes)<span style="color:#000;text-transform:uppercase;"><br>'.$group_mother.'</span></p>
<p style="color:#ccc;">Mobile Telephone Number (Country Code, Number<span style="color:#000;"><br>'.$group_mobile_telephone.'</span></p>
<p style="color:#ccc;">Home Telephone Number (Country Code, City/Area Number)<span style="color:#000;"><br>'.$group_home_telephone.'</span></p>
<p style="color:#ccc;">Business Telephone Number (Country Code, City.Area Number)<span style="color:#000;"><br>'.$group_business_telephone.'</span></p>
<p style="color:#ccc;">Email Address<span style="color:#000;text-transform:uppercase;"><br>'.$group_email_address.'</span></p>
</td>
<td>
<p style="color: #ccc;"><strong style="color: #000;">Address -</strong> Permanent residential address (we are unable to accept a care of or post box)</p>
<p style="color:#ccc;">Permanent Residential Address<span style="color:#000;text-transform:uppercase;"><br>'.$group_address.'</span></p>
<p style="color:#ccc;">City<span style="color:#000;text-transform:uppercase;"><br>'.$group_city.'</span></p>
<p style="color:#ccc;">State or Province<span style="color:#000;text-transform:uppercase;"><br>'.$group_state.'</span></p>
<p style="color:#ccc;">Postal or Zip Code<span style="color:#000;"><br>'.$group_zip.'</span></p>
</td>
</tr>';
$html .= '</tbody>
          </table>';

$pdf->writeHTML($html, false, false, true, false, '');



// add a page Section 5
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 5 - Authorization to Open Account</h5>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$html = <<<EOF
<p>By signing this application, you acknowledge that you have received and read a copy of the attached Application Agreement. You acknowledge that your signature signifies and constitutes your agreement that this account and your relationship with "Villetorte' will be governed by the Application Agreement and all incorporated agreements and disclosures</p>
<p>For purposes of this Account Application and the attached Application Agreement, the terms "you," "your" and "Account Holder" refer to each person who signs this Account Application. The terms "we," "us," and "Villetorte" refer to "Villetorte Management". (Account Holder(s)) represent that the foregoing information is true and correct, and will notify "Villetorte" of any material changes, 'Villetorte' reserves the right, but has no duty, to verify the accuracy of information provided, and to contact such bankers, brokers and others as it deems necessary.</p>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
if(!empty($_POST['sign_date2'])){
$sign_date2 = $_POST['sign_date2'];
$html ='<br><p>Date: '.$sign_date2.'</p>';
$pdf->writeHTML($html, true, false, true, false, '');

$dataimagecode2 = $_POST['sig-dataUrl2'];
$whatIWant2 = substr($dataimagecode2, strpos($dataimagecode2, ",") + 1);

$imgdata2 = base64_decode($whatIWant2);
$pdf->Image('@'.$imgdata2);
}
if(!empty($_POST['sign_date3'])){
//Additional
$pdf->SetXY(10, 160);
$html = '<p>Additional</p>';
$pdf->writeHTML($html, true, false, true, false, '');
$sign_date3 = $_POST['sign_date3'];
$html ='<p>Date: '.$sign_date3.'</p>';
$pdf->writeHTML($html, true, false, true, false, '');

$dataimagecode3 = $_POST['sig-dataUrl3'];
$whatIWant3 = substr($dataimagecode3, strpos($dataimagecode3, ",") + 1);

$imgdata3 = base64_decode($whatIWant3);
$pdf->Image('@'.$imgdata3);
}
// add a page
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<div class="green-head" bgcolor="#82944b" style="line-height: 0.5;">
  <h5 style="font-size: 14px;color:#fff;line-height: 0.5;">     Section 6 - Terms & Conditions</h5>
</div>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
$html = <<<EOF
<table class="col2 terms" style="font-size:8px;">
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
          </td>
          <td>
          <p style="margin-bottom:0;font-size:10px;">4. Disclaimer: Reliance on information posted and security</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Whilst Villetorte uses every reasonable effort to ensure that the accuracy of the information contained on this website which was prepared by or on behalf of Villetorte (as distinct from third party content – see "Disclaimer: Links, third party information and websites" below) as at the date of publication, all such information is provided “as is” and this means that except where prohibited by law no warranties are given, whether express or implied, as to the reliability, accuracy, suitability or completeness of the information.</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any use, or misuse, of the information presented on this website or for any loss or damage which may arise from access to or reliance on information published on this website, except where that liability may not be excluded or limited by law. Accordingly, to the maximum extent permitted by law, we provide you with this website on the basis that we exclude all representations, warranties, conditions and other terms which are not expressly set out in these Terms (including our Privacy and Cookies Policy). This does not affect any mandatory legal rights that cannot be excluded under applicable law. Nothing in these Terms shall limit or exclude our liability\ (if any) for:</p>
             <p style="margin-top:0;margin-bottom:0;font-size:10px;">Fraud or fraudulent misrepresentation Personal injury or death resulting from our negligence Our breach of our statutory obligation to provide the website and related services with reasonable skill and care Any other matter for which it would be illegal for us to exclude, or attempt to exclude, liability</p>

            <p style="margin-top:0;margin-bottom:0;font-size:10px;">We take all reasonable precautions to seek to keep secure all confidential information you send to us, including precautions against unauthorised access or loss. However, in common with all website operators, we cannot guarantee the security of any data transmitted by internet email or through this website. Please do not communicate with us by these methods unless you accept the security implications of dealing online. We strongly recommend that you do not send us any confidential information or commercially sensitive information or sensitive personal data (e.g. data about health or medical conditions, actual or suspected crimes by email or through this website. Communications sent by you via Internet email, or through this website, are sent at your own risk.</p>

            <p style="margin-bottom:0;font-size:10px;">5. Disclaimer: Links, third party information and websites</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">This website may contain, or be linked to, advice or statements from third parties. No company in the Villetorte Limited group, which includes Villetorte, makes any representation as to the accuracy,completeness, timeliness or suitability of such information and we have not, and will not, review or update such information. Any use made of such information is at your own risk.Some of the information contained on this website may also have been prepared or provided by third parties and may not have been verified by us. Except where prohibited by law (see above, no warranties are given, whether express or implied, as to the reliability, accuracy, suitability or completeness of the information. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any use, or misuse, of the information published on this website, except where that liability may not be excluded or limited by law (see above.The links we provide from this website to other websites are provided for information only. Other sites may link to this website. We do not assume any responsibility or liability with respect to any website accessed via this website or linking to this website or for any of the content on those websites. Those websites will have their own terms and privacy policies and you should read them carefully before using those sites.The presence of any advert on this website is not an endorsement of the goods, services, business or website advertised.</p>

            
          </td>
        </tr>
      </table>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// add a page
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<table class="col2 terms" style="font-size:8px;">
        <tr>
          <td style="vertical-align: top;">
            <p style="margin-bottom:0;font-size:10px;">6. Copyright and trademarks</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Except where indicated otherwise, the copyright subsisting in the content on this website and in the materials made available through this website, including in all information, text, images and layout is the exclusive property of Villetorte or another company in the Villetorte Limited group or is licensed to Villetorte for use on this website. You are only permitted to print, copy, download or temporarily store extracts of content which is owned by Villetorte companies as strictly necessary and for your personal use, provided that you do not change or remove any copyright notices. You are not permitted to distribute or otherwise make available or communicate to the public any part of the same. All copyright and other intellectual property rights shall continue to be held by or used under licence by Villetorte or the other companies in the Villetorte Limited group, as relevant, and no rights of any kind in it shall pass to you. Copyright in certain content and materials is owned by third parties and is reproduced on or made available through this website with the permission of the third-party copyright owners pursuant to licences to Villetorte or the other companies in the Villetorte Limited group, as relevant. You are not permitted to print, copy, download or temporarily store extracts of any content which is owned by third parties and used by Villetorte companies on this website under licence. This means that where you see a disclaimer at the end of or beside links to e.g. videos on this website you must not print, copy, download or temporarily store any part of that content whatsoever.The trademarks and logos shown on this website are either owned by Villetorte, other companies in the Villetorte Limited group, or a third party. No rights are granted to use any trade marks on this website without the prior written consent of Villetorte</p>
            <p style="margin-bottom:0;font-size:10px;">7. Information you submit through this website</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">You agree that you will not:</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Place on or submit through this website any information or material which is abusive, illegal, threatening, defamatory, obscene, pornographic, discriminatory or otherwise offensive or which constitutes or encourages conduct that would be considered a criminal offence, give rise to civil liability, or is otherwise contrary to the law or would infringe the rights of Villetorte or any other companies in the Villetorte Limited group, or those of any third-party Place on or submit through this website any viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful; or interfere with the operation or content of this website</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Any attempt to damage this website may be illegal and we reserve the right to seek damages from you in relation to that and in accordance with applicable law. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any loss or damage caused by any viruses or other technologically harmful material that may infect your PC or other device, computer programs, data or other proprietary material due to your use of this website or to your downloading of any material posted on it, or on any website linked to it, except where that liability may not be excluded or limited by law (see above).</p>
            <p style="margin-bottom:0;font-size:10px;">8. Receipt and sending of communications</p> 
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Communications which we send to you by email will be deemed received by you immediately upon sending. We will not be obliged to seek any acknowledgement of receipt from you in respect of such emails. No company in the Villetorte Limited group, which includes Villetorte, accepts any liability for any delay or failure of delivery (for whatever reason) of any such email except where that liability may not be excluded or limited by law (see above). If we have addressed such communications to your email address, then we will not have breached any duty of confidentiality owed to you, even if they are seen by any other person as a result. Communications sent by you to us by email will be deemed received by us upon actual receipt by a system under our control.</p>
          </td>
          <td>
            <p style="margin-bottom:0;font-size:10px;">9. Jurisdiction and applicable law</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Use of this website and the content and materials available on or through this website, together with these Terms, are governed by and interpreted in accordance with English law. By using this website, you agree to submit to the exclusive jurisdiction of the English courts.</p>

            <p style="margin-bottom:0;font-size:10px;">10. Assignment of rights and sub-contracting</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">We may, at any time, assign any or all of our rights or obligations under these Terms to any person. This includes but is not limited to any person which takes on responsibility for operating this website or provides the Villetorte investment products and related services. This includes assignments where necessary as part of any restructuring relating to Villetorte and its business or assets, or as part of a sale of Villetorte or, as relevant, another company in the Villetorte Limited group, or its/their assets.Any rights granted to you and obligations incurred by you under these are personal to you and may not be transferred to any third party. We may, at any time, sub- contract the performance of all or any of our obligations under these Terms.</p>
            <p style="margin-bottom:0;font-size:10px;">11. Waiver</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">If we do not exercise any right or remedy which we have under these Terms this does not mean we have waived our right to it or any other right or remedy of ours.</p>
             <p style="margin-bottom:0;font-size:10px;">12. Severance</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">If any part of these Terms is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, the other provisions will remain in force. If any invalid, unenforceable or illegal provision would be valid, enforceable or legal if some part of it were deleted, the provision shall apply with whatever modification is necessary to give effect to the actual intent of the parties.</p>

            <p style="margin-bottom:0;font-size:10px;">13. Relationship</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">You agree that no joint venture, partnership, employment, or agency relationship exists between you and us as a result of these Terms or your use of this website.</p>

            <p style="margin-bottom:0;font-size:10px;">14. Entire agreement</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">These Terms (including our Privacy and Cookies Policy) contain the entire agreement between you and us regarding their subject matter and they supersede all prior communications, representations, warranties, stipulations, undertakings and agreement between the parties. Nothing in these Terms shall, however, operate to limit or exclude the liability of either party for any fraudulent misrepresentation.</p>
            <p style="margin-bottom: 0;font-size: 10px;">Regulatory information</p>
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">We are authorised and regulated by the Financial Conduct Authority, which can be contacted at 25 Canada Square, Canary Wharf, London E14 5LB. Investors who use our services are protected by the Financial Services Compensation Scheme for any amounts that we are unable to pay up to a maximum of £50,000 for each investor and subject to the rules of the scheme.</p>
          </td>
        </tr>
      </table>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// add a page
$pdf->AddPage();
$pdf->Image('img/header.png', 0, 10, 220, 25, 'png', '#', '', true, 300, '', false, false, 1, false, false, false);
$pdf->SetXY(10, 40);
$html = <<<EOF
<table class="col2 terms">
        <tr>
          <td style="vertical-align: top;">
            <p style="margin-top:0;margin-bottom:0;font-size:10px;">Specifically, this website is not intended for use by any person in the United States. Shares in Villetorte Funds have not been and will not be registered under the United States Securities Act of 1933, as amended, or registered or qualified under the securities laws of any state of the United States and may not be offered, sold, transferred or delivered, directly or indirectly, to any investors within the United States or to, or for the account of, US Persons except in certain limited circumstances pursuant to a transaction exempt from such registration or qualification requirements. None of the shares have been approved or disapproved by the US Securities and Exchange Commission, any state securities commission in the United States or any other US regulatory authority, nor have any of the foregoing authorities passed upon or endorsed the merits of the offering of the shares or the accuracy or adequacy of the prospectus. The Funds will not be registered under the United States Investment Company Act of 1940, as amended.</p>
          </td>
          <td>
          </td>
        </tr>
      </table>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
if(!empty($_POST['sign_date'])){
$sign_date = $_POST['sign_date'];
$html ='<p>Date: '.$sign_date.'</p>';
$pdf->writeHTML($html, true, false, true, false, '');

$dataimagecode = $_POST['sig-dataUrl'];
$whatIWant = substr($dataimagecode, strpos($dataimagecode, ",") + 1);

$imgdata = base64_decode($whatIWant);
$pdf->Image('@'.$imgdata);
}
if(!empty($_POST['sign_date4'])){
//Additional
$pdf->SetXY(10, 160);
$html = '<p>Additional</p>';
$pdf->writeHTML($html, true, false, true, false, '');
$sign_date4 = $_POST['sign_date4'];
$html ='<p>Date: '.$sign_date4.'</p>';
$pdf->writeHTML($html, true, false, true, false, '');

$dataimagecode4 = $_POST['sig-dataUrl4'];
$whatIWant4 = substr($dataimagecode4, strpos($dataimagecode4, ",") + 1);

$imgdata4 = base64_decode($whatIWant4);
$pdf->Image('@'.$imgdata4);
}
// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
// //Close and output PDF document
// $pdf->Output('example_061.pdf', 'I');
// $file_name = md5(rand()) . '.pdf';
// $file_name = $pdf->Output(__DIR__ . '/'.$file_name.'', 'E');
// print_r($file_name);
// exit();

// $pdf->Output(__DIR__ . '/'.$file_name.'', 'F'); 
// $file_name = $pdf->Output(__DIR__ . '/'.$file_name.'', 'F');

//Close and output PDF document
$pdf->Output('example_061.pdf', 'I');

// //Close and output PDF document
// $pdf->Output('example_061.pdf', 'I');

// $to = "ata@beuniquegroup.com";
// $subject = "Application Form Lead";
// $message = "Congrautlations, You have received one lead";

// // mail($to_email_address,$subject); 

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
// $headers .= 'From: <webmaster@villetorteam.com>' . "\r\n";
// // $headers .= 'Cc: myboss@example.com' . "\r\n";
// //preparing attachment

// mail($to,$subject,$message,$headers);

//============================================================+
// END OF FILE
//============================================================+