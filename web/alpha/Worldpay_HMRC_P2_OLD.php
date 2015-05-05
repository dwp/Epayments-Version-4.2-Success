<?php 
ob_start();
if(!isset($_COOKIE['accessCookie'])) {
  header('location: /');
}
ob_end_flush();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- layout.templ $Revision$ -->
<html lang="en">
<head>
<meta http-equiv=Cache-Control CONTENT="no-cache,no-store">
<meta http-equiv=Pragma CONTENT="no-cache">
<meta http-equiv=Expires CONTENT="Thu, 01 Jan 1970 00:00:00 GMT">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>WorldPay card payment</title>
<style type="text/css">
body {background-color: #FFFFFF;  margin: 0px 0px 0px 0px;}
table.header {background-color: #002469; width: 760px; border: 0px;}
td.headerlogo1 {background-color: #002469; vertical-align: top; width: 383px; text-align: right;}
td.headerlogo2 {background-color: #FFFFFF; vertical-align: top; width: 272px; text-align: center;}
table.nav { background-image:url('/images/wp/navbar.gif'); background-repeat: repeat-x; width: 760px; border: 0px; height: 21px;}
table.container { background-color: #FFFFFF; width: 488px; border: 0px; margin-right: auto; margin-left: auto;}
td.title {background-color: #FFFFFF; width: 100%;}
table.containercell {background-color: #FFFFFF; width: 100%; border: 0;}
h1 {font-size: 14pt; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; color: #002469; margin: 0px;}
h2 {font-size: 12pt; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; color: #FFFFFF; font-weight: bold; margin: 0px;}
h3 {font-size: 12pt; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; color: #002469; font-weight: bold; margin: 0px;}
A.header:Link {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; font-weight: bold;}
A.header:Visited {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; font-weight: bold;}
A.header:Active {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; font-weight: bold;}
A.header:Hover {text-decoration: underlined; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; font-weight: bold;}
hr {color: #002469; background-color: #002469; height: 3px;}
td.footerdivider { background-image: url('/images/wp/dotline.gif');; background-repeat: repeat-x; vertical-align: middle; text-align: center; width:760px; height:1px;}
td.footer {background-color: #FFFFFF; vertical-align: middle; text-align: center; width:760px;}
@media print {
body {font-size:100%; width: 100%; margin: 0; float: none; font-family:Times New Roman, Serif; color: #000000; background: #ffffff;}
table.header {display:none; width: 100%;}
td.headerlogo1 {display:none;}
td.headerlogo2 {display:none;}
table.nav {display:none; width: 100%;}
table.container {background-color: #ffffff; width: 100%;}
td.title {background-color: #ffffff; color: #000000; width: 100%;}
table.containercell {background-color: #ffffff; width: 100%;}
h1 {font-size:130%; color: #000000;}
h2 {font-size:120%; color: #000000;}
h3 {font-size:110%; color: #000000;}
A.header:Link {display:none;}
A.header:Visited {display:none;}
A.header:Active {display:none;}
A.header:Hover {display:none;}
hr {color: #000000; background-color: #000000; height: 1px;}
td.footerdivider {display:none; width: 100%;}
td.footer {display:none; width: 100%;}
td.brand {display:none;}
td.two {background-color: #ffffff;}
td.one {background-color: #ffffff;}
td.error {background-color: #ffffff;}
td.three {background-color: #ffffff;}
.print_buttons {display:none;}
#print_buttons tr{display:none;}
div.print_buttons {display:none;}
img.print_buttons {display:none;}
}

</style>
<!-- additional HTML head items -->

<style type="text/css" media="screen">
td.error {background-color: #FFFFFF; width: 100%;}
td.one {background-color: #FFFFFF; }
A.one:Link {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.one:Visited {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.one:Active {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.one:Hover {text-decoration: underlined; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
td.width190 {width:190px;}
td.cardlabel {background-color: #FFFFFF; }
td.two {background-color: #EAF1EE; }
A.twoinstr:Link {text-decoration: underlined; color: #002469;}
A.twoinstr:Visited {text-decoration: underlined; color: #002469;}
A.twoinstr:Active {text-decoration: underlined; color: #002469;}
A.twoinstr:Hover {text-decoration: underlined; color: #002469;}
td.three {background-color: #002469; width:100%;}
A.three:Link {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.three:Visited {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.three:Active {text-decoration: none; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.three:Hover {text-decoration: underlined; color: #002469; font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt;}
A.brand:Link {text-decoration: underlined; color: #000000;}
A.brand:Visited {text-decoration: underlined; color: #000000;}
A.brand:Active {text-decoration: underlined; color: #000000;}
A.brand:Hover {text-decoration: underlined; color: #002469;}
td.brand {background-color: #FFFFFF; vertical-align: top; text-align: left;}
img.printonly {display:none;}
.hiddenBankDetails { display: none; }
</style>

</head>
<!DOCTYPE html><!--[if lt IE 9]><html class="lte-ie8" lang="en"><![endif]--><!--[if gt IE 8]><!--><html lang="en"><!--<![endif]--><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Pay benefit overpayment online - GOV.UK</title><script type="text/javascript">      (function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var d=document,c="appendChild",a=d.createElement("style");a[c](d.createTextNode("@-ms-viewport{width:auto!important}"));d.getElementsByTagName("head")[0][c](a);}})();    </script>
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-6820d35a129a3ffde628d8447156c5dc.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie6-4ce1b714659f23f4b262761bb2410b40.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie7-5dacabc4c21165dd2db29145e15eb57c.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie8-0153d61aaa359828709c0429cb331cfe.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-print-95606431bbfe23b0e4ee9e5ed3346c47.css" media="print" rel="stylesheet" type="text/css">
<!--[if IE 8]>
    <script type="text/javascript">
      (function(){if(window.opera){return;}
       setTimeout(function(){var a=document,g,b={families:(g=
       ["nta"]),urls:["https://assets.digital.cabinet-office.gov.uk/static/fonts-ie8-1e4512e11cb3ee77b91f723129629e95.css"]},
       c="https://assets.digital.cabinet-office.gov.uk/static/vendor/goog/webfont-debug-96870cf9f159ed811fd43c39bdf4656b.js",d="script",
       e=a.createElement(d),f=a.getElementsByTagName(d)[0],h=g.length;WebFontConfig
       ={custom:b},e.src=c,f.parentNode.insertBefore(e,f);for(;h=h-1;a.documentElement
       .className+=' wf-'+g[h].replace(/\s/g,'').toLowerCase()+'-n4-loading');},0)
      })()
    </script>
    <![endif]--><!--[if gte IE 9]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/fonts-83e596ae63d072e22b7f34d2b5482bde.css" media="all" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if lt IE 9]>
      <script src="https://assets.digital.cabinet-office.gov.uk/static/ie-fc5bd25c5f46587b9bff917417ab2b7f.js" type="text/javascript"></script>
    <![endif]--><link rel="shortcut icon" href="https://assets.digital.cabinet-office.gov.uk/static/favicon-9269d2d9f40d20236f60a3dbc448679a.ico" type="image/x-icon">
<!-- Size for iPad and iPad mini (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-152x152-58591dcff066ba321b89a9e208ccedab.png">
<!-- Size for iPhone and iPod touch (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-120x120-b6a680ead8eb531b9c28cc056836ad06.png">
<!-- Size for iPad 2 and iPad mini (standard resolution) --><link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-76x76-17dd3f1e168561f9099ba92e3292e607.png">
<!-- Default non-defined size, also used for Android 2.1+ devices --><link rel="apple-touch-icon-precomposed" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-60x60-dc9aa421bedcf2c08c4e8f3f230f780d.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="https://assets.digital.cabinet-office.gov.uk/static/opengraph-image-85fc698c83c77d8d8cb5467a44cc12a5.png">
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/static-e826b001509ad8acb5293bc8dfb7c7a9.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie6-5be111e96e185115bbfa4bec0ea02f2f.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 6;</script><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie7-df9f4756ea346d9ecaa2c7128930fbd1.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 7;</script><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie8-aef6a13db6843fa6e7670ddf7d57c62c.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 8;</script><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/print-885c0e730d8d8e704542e8304c523b9b.css" media="print" rel="stylesheet" type="text/css">
<link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml">
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-fbe1508997c4ebf8fa624d2e1db1fb80.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><link rel="canonical" href="/">
<meta name="description" content="GOV.UK - The place to find government services and information - Simpler, clearer, faster">
<!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie6-a34832352e383884edc89454b7e29b04.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie7-7f2f952f522ba46f674b44af0a98a067.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie8-76ab79c4381c45c614f886802ec6578c.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
<link href="/custom.css" rel="stylesheet" type="text/css">
</head><body class="mainstream">    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script><div id="skiplink-container">      <div>        <a href="#content" class="skiplink">Skip to main content</a>      </div>    </div>        <!--end global-cookie-message-->    <header role="banner" id="global-header" class=""><div class="header-wrapper">
        <div class="header-global">
          <div class="header-logo">
            <a href="https://www.gov.uk/" title="Go to the GOV.UK homepage" id="logo" class="content">
              <img src="https://assets.digital.cabinet-office.gov.uk/static/gov.uk_logotype_crown-c09acb07e4d1d5d558f5a0bc53e9e36d.png" width="35" height="31" alt=""> GOV.UK
            </a>
          </div>
          <div class="header-proposition">
            <div class="content">
              <nav id="proposition-menu">
                <a href="start.htm" id="proposition-name">Benefit debt repayment</a>
              </nav>
            </div>
          </div>
        </div>
        
      </div>
    
    </header><!--end header-->         
    <div id="top-links" class="inner-block">                    </div>           <!--end global-header-bar--> </body></html>
    <div id="global-header-bar">
      <div class="inner-block">
        <div class="header-bar"></div>
      </div>
    </div>         <!--end global-header-bar--> </body></html>
 <script type="text/javascript">  
var v1 = parent.document.URL.substring(parent.document.URL.indexOf('?'), parent.document.URL.length); 
var qsParm = new Array();
var query = window.location.search.substring(1);
var parms = query.split('&');
for (var i=0; i<parms.length; i++) {
var pos = parms[i].indexOf('=');
if (pos > 0) {
var key = parms[i].substring(0,pos);
var val = parms[i].substring(pos+1);
if(key==='refID'){
 var refVal = val;
 }
 if(key==='Amount'){
 var amt = val;
 }
 if(key==='CardType'){
 var cardtype = val;
 }
//salert(val);
//alert(qsParm[key]);
}
}
function completeAndRedirect(){
location.href = "./OverpaymentSuccess_GOV.php?refID="+refVal+"&Amount="+amt;

}
</script>
<div id="wrapper" class="transaction service">
      
<main id="content" role="main" class="group">
<div class="phase-banner-alpha">
    <p>
      <strong class="phase-tag">ALPHA</strong>
      <span>This is a new service – your <a href="#">feedback</a> will help us to improve it.</span>
    </p>
  </div> 
</main>
</div>
<form action="javascript:completeAndRedirect();" method=post autocomplete=off>
 
  <br/>
<table class="container" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td>
      <!-- the main content table -->
      <table class="containercell" cellspacing="0" cellpadding="2">
        <tr>
            <!-- page title -->
            <h1>Secure Payment Page</h1>
            <!--  end page title -->
          </td>
        </tr>
<!-- end tableHead.html --> 

<!-- cardPage.templ $Revision$ -->
<INPUT TYPE=hidden NAME=PaymentID VALUE="ukdc1-pz-cen07-dppr-1422371603465" />
<!--WP start testModeMessage -->

  <tr>
    <td colspan="2" class="error" align="center"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #FF0000;">TEST MODE - This is not a live transaction.</span></td>
  </tr>

<!--WP end testModeMessage -->

<!--WP Feedback messages - uses comp.common.error etc. -->

<!--WP end Feedback messages -->


<!--WP Description -->
  <tr>
    <td colspan="2" class="one">
      <table width="100%" cellspacing="0" cellpadding="0" border="0">

        <!--WP language select -->

<!--WP language select -->



        <!--Customer Description -->
        
        
          
        
        <!--END Customer Description -->

        <!-- display Payment reference to XML merchants -->
        
        <tr>
            <td class="one width190" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">Payment reference</span>&nbsp;&nbsp;</td>
            <td class="one" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;"><b><script type="text/javascript">
document.write(refVal);</script>
</b></span>&nbsp;</td>
        </tr>
        

        
        <!--WP Card Type selected -->
        <tr>
          <td class="one width190" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">Payment method</span>&nbsp;&nbsp;</td>
          <td class="one width190" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">
        <script type="text/javascript"> 
                   document.write("<b>"+cardtype+"</b></span>&nbsp;</td>") ; 
           if(cardtype==="Visa"){
           document.write("<td rowspan=3 class=one valign=top align=right > <img src=./VISA.gif style=border:0px; alt=Visa />&nbsp;&nbsp;&nbsp;</td>");
           } else if(cardtype==="MasterCard"){
           document.write("<td rowspan=3 class=one valign=top align=right > <img src=./mastercard.gif style=border:0px; alt=Visa />&nbsp;&nbsp;&nbsp;</td>");
           }else  if(cardtype==="Maestro"){
           document.write("<td rowspan=3 class=one valign=top align=right > <img src=./maestro.gif style=border:0px; alt=Visa />&nbsp;&nbsp;&nbsp;</td>");
           } else if(cardtype==="JCB"){
           document.write("<td rowspan=3 class=one valign=top align=right > <img src=./JCB.gif style=border:0px; alt=Visa />&nbsp;&nbsp;&nbsp;</td>");
           }
                </script> 
          
          <!--<b>Visa</b></span>&nbsp;</td>
          <td rowspan="3" class="one" valign="top" align="right"><img src="./VISA.gif" style="border:0px;" alt="Visa" />&nbsp;&nbsp;&nbsp;</td>-->
          
        </tr>
                

                

                
        <tr>
          <td class="one width190" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">Description</span>&nbsp;&nbsp;</td>
          <td class="one width190" align="left" valign="top">
                <span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;"><b>Benefit Overpayment</b></span></td></tr>

                

                
        <tr>
          <td class="one width190" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">Amount</span>&nbsp;&nbsp;</td>
          <td class="one" align="left" valign="top"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;"><b>GBP <script type="text/javascript">
document.write(amt);</script></b></span>&nbsp;</td>
        </tr>
    
<!--WP END Description -->

<!--WP RFP attributes-->
    
<!--WP RFP END-->

<!--WP LFP attributes-->
    
<!--WP END LFP -->
    
<!--WP END FP -->
      </table>
    </td>
  </tr>
<!--WP end description -->

<!--WP Login -->

<!--WP Login END-->

<!-- start Bibit Order Contents -->



<!-- end Bibit Order Contents -->
<!--WP spacer row -->
  <tr>
    <td colspan="2" class="one" height="5"><img src="/images/wp/magic.gif" style="width:1px; height:5px;" alt="" /></td>
  </tr>
<!--WP end spacer row -->
<!--WP form contents -->
<!--WP merchant top upload -->
<!-- paymentTopFields.html $Revision$ -->
<!-- You can use this file to add your own fields or any HTML into the payment container area. This enables you to collect both additional information on the page (using M_ or C_ parameters, as described in the relevant Integration Guide) or add your own text or graphics.

For an example of the HTML code that this files need to work correctly with your payment page, goto the support site -->

<!--WP merchant top upload END -->

<!--WP start cardDetailsRows -->
  <tr valign=middle>
    <td colspan=2 class="one" align="left">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr valign="top">
          <td class="three" align="left" valign="middle"><h2>&nbsp;Card details</h2></td>
          <td class="one" align="right">
          
          
            <a href="#" target="_blank" title="Help with your card details - Opens in a new window."><img src="./help.gif" alt="Help with your card details - Opens in a new window." style="border:0px;" /></a>
          
          </td>
        </tr>
        <tr>
          <td class="two" width="100%">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td colspan="2" class="two"><nobr>&nbsp;<span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 8pt; color: #002469;"><em>* Indicates a required field</em></span></nobr></td>
              </tr>
<!--WP start card number row -->
              <tr>
                <td class="two width190"><label for="cardNoInput"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;Card number</span></label></td>
                <td class="two"><input type="text" id="cardNoInput" name="cardNoInput" tabindex="60" value='' maxlength="20" autocomplete=off />
                <input type=hidden name=cardNoJS value="" />
                <input type=hidden name=cardNoHidden value="*hidden*" />
                     </td>
              </tr>
<!--WP end card number row -->
<!--WP start security code row -->
            
              <tr>
                <td class="two width190"><label for="cardCVV">
                <span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;</span><a href="/global3/payment/default/help_securitycode_en.html" class="twoinstr" target="_blank" title="Security code help - Opens in new window."><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">Security Code</span></a></label></td>
                <td class="two"><input type="text" id="cardCVV" name="cardCVV" tabindex="70" size="4" maxlength="4" autocomplete=off value="" /></td>
              </tr>
            
<!--WP end security code row -->
<!--WP start cardIssueNo -->
            
<!--WP end cardIssueNo -->
<!--WP start cardStart -->
            
<!--WP end cardStart -->
<!--WP start card exp date row -->
              
              <tr>
                <td class="two width190"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;Expiry date</span></td>
                <td class="two"><input type="hidden" name="cardExp.day" value="32" /><input type="hidden" name="cardExp.time" value="23:59:59" /><!-- selection.comp $Revision$ -->
<SELECT NAME="cardExp.month" tabindex=110>
<OPTION VALUE="" selected=selected>--
<OPTION VALUE="1">01
<OPTION VALUE="2">02
<OPTION VALUE="3">03
<OPTION VALUE="4">04
<OPTION VALUE="5">05
<OPTION VALUE="6">06
<OPTION VALUE="7">07
<OPTION VALUE="8">08
<OPTION VALUE="9">09
<OPTION VALUE="10">10
<OPTION VALUE="11">11
<OPTION VALUE="12">12
</SELECT>
<!-- selection.comp $Revision$ -->
<SELECT NAME="cardExp.year" tabindex=120>
<OPTION VALUE="" selected=selected>----
<OPTION VALUE="2015">2015
<OPTION VALUE="2016">2016
<OPTION VALUE="2017">2017
<OPTION VALUE="2018">2018
<OPTION VALUE="2019">2019
<OPTION VALUE="2020">2020
<OPTION VALUE="2021">2021
<OPTION VALUE="2022">2022
<OPTION VALUE="2023">2023
<OPTION VALUE="2024">2024
<OPTION VALUE="2025">2025
<OPTION VALUE="2026">2026
<OPTION VALUE="2027">2027
<OPTION VALUE="2028">2028
<OPTION VALUE="2029">2029
<OPTION VALUE="2030">2030
<OPTION VALUE="2031">2031
<OPTION VALUE="2032">2032
<OPTION VALUE="2033">2033
<OPTION VALUE="2034">2034
<OPTION VALUE="2035">2035
</SELECT>

                </td>
              </tr>
              
              <!-- just to satisfy the mandatory check for the cards that don't display expiry date like AURORE card -->
              
<!--WP end card exp date row -->
<!--WP start Birthdate -->
            
<!--WP end Birthdate -->
<!--WP start card holder name row -->
              <tr>
                <td class="two width190"><label for="name"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;Cardholder's name</span></label></td>
                <td class="two"><input type="text" id="name" name="name" tabindex="130" maxlength="40" size="25" value="" /></td>
              </tr>
<!--WP end card holder name row -->
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
<!--WP spacer row -->
  <tr>
    <td colspan="2" class="one" height="5"><img src="/images/wp/magic.gif" style="width:1px; height:5px;" alt="" /></td>
  </tr>
<!--WP end spacer row -->
<!--WP end cardDetailsRows -->
<!--WP merchant middle upload -->
<!-- paymentMiddleFields.html $Revision$ -->
<!-- You can use this file to add your own fields or any HTML into the payment container area. This enables you to collect both additional information on the page (using M_ or C_ parameters, as described in the relevant Integration Guide) or add your own text or graphics.

For an example of the HTML code that this files need to work correctly with your payment page, see your support site -->

<!--WP merchant middle upload END -->


<!--WP start hiddenContact -->

<!--WP end hiddenContact -->




  <tr valign=top>
    <td colspan="2" class="one">
      <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
        
          <td class="three" align="left"><h2>&nbsp;Cardholder details</h2></td>
          <td class="one" align="right"><a href="/global3/payment/default/help_card_xml_en.html#contact" target="_blank" title="Help with your contact details - Opens in a new window."><img src="./help.gif" style="border:0px;" alt="Help with your contact details - Opens in a new window." /></a></td>
        
        
        </tr>
        <tr>
          <td class="two">
            <table cellpadding="0" cellspacing="0" border="0">
              <tr valign=top>
                <td colspan="2" class="two">&nbsp;<span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 8pt; color: #002469;"><em>* Indicates a required field</em></span></td>
              </tr>

              <tr valign=top>
                  <td class="two width190"><label for="address1"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">*&nbsp;Address 1</span></label></td>
                  <td class="two"><input type="text" id="address1" name="address1" tabindex="140" maxlength="84" size="30" value="" /></td>
              </tr>


              <tr valign=top>
                  <td class="two width190"><label for="address2"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Address 2</span></label></td>
                  <td class="two"><input type="text" id="address2" name="address2" tabindex="150" maxlength="84" size="30" value="" /></td>
              </tr>
            
              <tr valign=top>
                  <td class="two width190"><label for="address3"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Address 3</span></label></td>
                  <td class="two"><input type="text" id="address3" name="address3" tabindex="160" maxlength="84" size="30" value="" /></td>
              </tr>

              <tr valign=top>
                  <td class="two width190"><label for="town"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">*&nbsp;Town/City</span></label></td>
                  <td class="two"><input type="text" id="town" name="town" maxlength="30" tabindex="170" maxlength="30" size="25"  value="" /></td>
              </tr>
          
              
            
              
                <tr valign=top>
                  <td class="two width190"><label for="region"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Region</span></label></td>
                  <td class="two"><input type=text id="region" name="region" maxlength="30" size="25" tabindex="190" value="" /></td>
                </tr>
              
  
              
              <tr valign=top>
                  <td class="two width190"><label for="postcode"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;Postcode/ZIP code</span></label></td>
                  <td class="two"><input type="text" id="postcode" name="postcode" tabindex="200" maxlength="30" size="25" value="" ></td>
                </tr>
              
  
              

              <tr valign=top>
                <td class="two width190"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&#42;&nbsp;Country</span></td>
                <td class="two"><!-- selection.comp $Revision$ -->
<SELECT NAME="country" tabindex=210>
<OPTION VALUE="">Choose your country.
<OPTION VALUE="AF">Afghanistan
<OPTION VALUE="AX">Aland Islands
<OPTION VALUE="AL">Albania
<OPTION VALUE="DZ">Algeria
<OPTION VALUE="AS">American Samoa
<OPTION VALUE="AD">Andorra
<OPTION VALUE="AO">Angola
<OPTION VALUE="AI">Anguilla
<OPTION VALUE="AQ">Antarctica
<OPTION VALUE="AG">Antigua and Barbuda
<OPTION VALUE="AR">Argentina
<OPTION VALUE="AM">Armenia
<OPTION VALUE="AW">Aruba
<OPTION VALUE="AU">Australia
<OPTION VALUE="AT">Austria
<OPTION VALUE="AZ">Azerbaijan
<OPTION VALUE="BS">Bahamas
<OPTION VALUE="BH">Bahrain
<OPTION VALUE="BD">Bangladesh
<OPTION VALUE="BB">Barbados
<OPTION VALUE="BY">Belarus
<OPTION VALUE="BE">Belgium
<OPTION VALUE="BZ">Belize
<OPTION VALUE="BJ">Benin
<OPTION VALUE="BM">Bermuda
<OPTION VALUE="BT">Bhutan
<OPTION VALUE="BO">Bolivia
<OPTION VALUE="BQ">Bonaire, Sint Eustatius and Saba
<OPTION VALUE="BA">Bosnia and Herzegovina
<OPTION VALUE="BW">Botswana
<OPTION VALUE="BV">Bouvet Island
<OPTION VALUE="BR">Brazil
<OPTION VALUE="IO">British Indian Ocean Territory
<OPTION VALUE="BN">Brunei Darussalam
<OPTION VALUE="BG">Bulgaria
<OPTION VALUE="BF">Burkina Faso
<OPTION VALUE="BI">Burundi
<OPTION VALUE="KH">Cambodia
<OPTION VALUE="CM">Cameroon
<OPTION VALUE="CA">Canada
<OPTION VALUE="CV">Cape Verde
<OPTION VALUE="KY">Cayman Islands
<OPTION VALUE="CF">Central African Republic
<OPTION VALUE="TD">Chad
<OPTION VALUE="CL">Chile
<OPTION VALUE="CN">China
<OPTION VALUE="CX">Christmas Island
<OPTION VALUE="CC">Cocos (Keeling) Islands
<OPTION VALUE="CO">Colombia
<OPTION VALUE="KM">Comoros
<OPTION VALUE="CG">Congo
<OPTION VALUE="CK">Cook Islands
<OPTION VALUE="CR">Costa Rica
<OPTION VALUE="HR">Croatia
<OPTION VALUE="CU">Cuba
<OPTION VALUE="CW">Curacao
<OPTION VALUE="CY">Cyprus
<OPTION VALUE="CZ">Czech Republic
<OPTION VALUE="CI">Côte d'Ivoire
<OPTION VALUE="DK">Denmark
<OPTION VALUE="DJ">Djibouti
<OPTION VALUE="DM">Dominica
<OPTION VALUE="DO">Dominican Republic
<OPTION VALUE="EC">Ecuador
<OPTION VALUE="EG">Egypt
<OPTION VALUE="SV">El salvador
<OPTION VALUE="GQ">Equatorial Guinea
<OPTION VALUE="ER">Eritrea
<OPTION VALUE="EE">Estonia
<OPTION VALUE="ET">Ethiopia
<OPTION VALUE="FK">Falkland Islands
<OPTION VALUE="FO">Faroe Islands
<OPTION VALUE="FJ">Fiji
<OPTION VALUE="FI">Finland
<OPTION VALUE="FR">France
<OPTION VALUE="GF">French Guiana
<OPTION VALUE="PF">French Polynesia
<OPTION VALUE="TF">French Southern Territories
<OPTION VALUE="GA">Gabon
<OPTION VALUE="GM">Gambia
<OPTION VALUE="GE">Georgia
<OPTION VALUE="DE">Germany
<OPTION VALUE="GH">Ghana
<OPTION VALUE="GI">Gibraltar
<OPTION VALUE="GR">Greece
<OPTION VALUE="GL">Greenland
<OPTION VALUE="GD">Grenada
<OPTION VALUE="GP">Guadeloupe
<OPTION VALUE="GU">Guam
<OPTION VALUE="GT">Guatemala
<OPTION VALUE="GG">Guernsey
<OPTION VALUE="GN">Guinea
<OPTION VALUE="GW">Guinea-Bissau
<OPTION VALUE="GY">Guyana
<OPTION VALUE="HT">Haiti
<OPTION VALUE="HM">Heard Island and McDonald Islands
<OPTION VALUE="VA">Holy See (Vatican City State)
<OPTION VALUE="HN">Honduras
<OPTION VALUE="HK">Hong Kong
<OPTION VALUE="HU">Hungary
<OPTION VALUE="IS">Iceland
<OPTION VALUE="IN">India
<OPTION VALUE="ID">Indonesia
<OPTION VALUE="IR">Iran
<OPTION VALUE="IQ">Iraq
<OPTION VALUE="IE">Ireland
<OPTION VALUE="IM">Isle of Man
<OPTION VALUE="IL">Israel
<OPTION VALUE="IT">Italy
<OPTION VALUE="JM">Jamaica
<OPTION VALUE="JP">Japan
<OPTION VALUE="JE">Jersey
<OPTION VALUE="JO">Jordan
<OPTION VALUE="KZ">Kazakhstan
<OPTION VALUE="KE">Kenya
<OPTION VALUE="KI">Kiribati
<OPTION VALUE="KS">Kosovo
<OPTION VALUE="KW">Kuwait
<OPTION VALUE="KG">Kyrgyzstan
<OPTION VALUE="LA">Lao
<OPTION VALUE="LV">Latvia
<OPTION VALUE="LB">Lebanon
<OPTION VALUE="LS">Lesotho
<OPTION VALUE="LR">Liberia
<OPTION VALUE="LY">Libyan Arab Jamahiriya
<OPTION VALUE="LI">Liechtenstein
<OPTION VALUE="LT">Lithuania
<OPTION VALUE="LU">Luxembourg
<OPTION VALUE="MO">Macau
<OPTION VALUE="MK">Macedonia (FYR)
<OPTION VALUE="MG">Madagascar
<OPTION VALUE="MW">Malawi
<OPTION VALUE="MY">Malaysia
<OPTION VALUE="MV">Maldives
<OPTION VALUE="ML">Mali
<OPTION VALUE="MT">Malta
<OPTION VALUE="MH">Marshall Islands
<OPTION VALUE="MQ">Martinique
<OPTION VALUE="MR">Mauritania
<OPTION VALUE="MU">Mauritius
<OPTION VALUE="YT">Mayotte
<OPTION VALUE="MX">Mexico
<OPTION VALUE="FM">Micronesia
<OPTION VALUE="MD">Moldova
<OPTION VALUE="MC">Monaco
<OPTION VALUE="MN">Mongolia
<OPTION VALUE="ME">Montenegro
<OPTION VALUE="MS">Montserrat
<OPTION VALUE="MA">Morocco
<OPTION VALUE="MZ">Mozambique
<OPTION VALUE="MM">Myanmar
<OPTION VALUE="NA">Namibia
<OPTION VALUE="NR">Nauru
<OPTION VALUE="NP">Nepal
<OPTION VALUE="NL">Netherlands
<OPTION VALUE="NC">New Caledonia
<OPTION VALUE="NZ">New Zealand
<OPTION VALUE="NI">Nicaragua
<OPTION VALUE="NE">Niger
<OPTION VALUE="NG">Nigeria
<OPTION VALUE="NU">Niue
<OPTION VALUE="NF">Norfolk Island
<OPTION VALUE="KP">North Korea
<OPTION VALUE="MP">Northern Mariana Islands
<OPTION VALUE="NO">Norway
<OPTION VALUE="OM">Oman
<OPTION VALUE="PK">Pakistan
<OPTION VALUE="PW">Palau
<OPTION VALUE="PS">Palestinian Territory Occupied
<OPTION VALUE="PA">Panama
<OPTION VALUE="PG">Papua New Guinea
<OPTION VALUE="PY">Paraguay
<OPTION VALUE="PE">Peru
<OPTION VALUE="PH">Philippines
<OPTION VALUE="PN">Pitcairn
<OPTION VALUE="PL">Poland
<OPTION VALUE="PT">Portugal
<OPTION VALUE="PR">Puerto Rico
<OPTION VALUE="QA">Qatar
<OPTION VALUE="RE">Reunion
<OPTION VALUE="RO">Romania
<OPTION VALUE="RU">Russian Federation
<OPTION VALUE="RW">Rwanda
<OPTION VALUE="BL">Saint Barthelemy
<OPTION VALUE="SH">Saint Helena
<OPTION VALUE="KN">Saint Kitts and Nevis
<OPTION VALUE="LC">Saint Lucia
<OPTION VALUE="MF">Saint Martin (French)
<OPTION VALUE="PM">Saint Pierre and Miquelon
<OPTION VALUE="VC">Saint Vincent and the Grenadines
<OPTION VALUE="WS">Samoa
<OPTION VALUE="SM">San Marino
<OPTION VALUE="ST">Sao Tome and Principe
<OPTION VALUE="SA">Saudi Arabia
<OPTION VALUE="SN">Senegal
<OPTION VALUE="RS">Serbia
<OPTION VALUE="SC">Seychelles
<OPTION VALUE="SL">Sierra Leone
<OPTION VALUE="SG">Singapore
<OPTION VALUE="SX">Sint Maarten (Dutch)
<OPTION VALUE="SK">Slovakia
<OPTION VALUE="SI">Slovenia
<OPTION VALUE="SB">Solomon Islands
<OPTION VALUE="SO">Somalia
<OPTION VALUE="ZA">South Africa
<OPTION VALUE="GS">South Georgia
<OPTION VALUE="KR">South Korea
<OPTION VALUE="ES">Spain
<OPTION VALUE="LK">Sri Lanka
<OPTION VALUE="SD">Sudan
<OPTION VALUE="SR">Suriname
<OPTION VALUE="SJ">Svalbard and Jan Mayen Islands
<OPTION VALUE="SZ">Swaziland
<OPTION VALUE="SE">Sweden
<OPTION VALUE="CH">Switzerland
<OPTION VALUE="SY">Syria
<OPTION VALUE="TW">Taiwan
<OPTION VALUE="TJ">Tajikistan
<OPTION VALUE="TZ">Tanzania
<OPTION VALUE="TH">Thailand
<OPTION VALUE="CD">The Democratic Republic of the Congo
<OPTION VALUE="TL">Timor-Leste
<OPTION VALUE="TG">Togo
<OPTION VALUE="TK">Tokelau
<OPTION VALUE="TO">Tonga
<OPTION VALUE="TT">Trinidad and Tobago
<OPTION VALUE="TN">Tunisia
<OPTION VALUE="TR">Turkey
<OPTION VALUE="TM">Turkmenistan
<OPTION VALUE="TC">Turks and Caicos Islands
<OPTION VALUE="TV">Tuvalu
<OPTION VALUE="UG">Uganda
<OPTION VALUE="UA">Ukraine
<OPTION VALUE="AE">United Arab Emirates
<OPTION VALUE="GB" selected=selected>United Kingdom
<OPTION VALUE="US">United States
<OPTION VALUE="UM">United States Minor Outlying Islands
<OPTION VALUE="UY">Uruguay
<OPTION VALUE="UZ">Uzbekistan
<OPTION VALUE="VU">Vanuatu
<OPTION VALUE="VE">Venezuela
<OPTION VALUE="VN">Viet Nam
<OPTION VALUE="VG">Virgin Islands (British)
<OPTION VALUE="VI">Virgin Islands (U.S.)
<OPTION VALUE="WF">Wallis and Futuna Islands
<OPTION VALUE="EH">Western Sahara
<OPTION VALUE="YE">Yemen
<OPTION VALUE="ZM">Zambia
<OPTION VALUE="ZW">Zimbabwe
</SELECT>
</td>
              </tr>
  
              <tr valign=top>
                <td class="two width190"><label for="tel"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Telephone</span></label></td>
                <td class="two"><input type="text" id="tel" name="tel" tabindex="220" maxlength="30" size="20" value="" /></td>
              </tr>
  
              <tr valign=top>
                <td class="two width190"><label for="fax"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Fax</span></label></td>
                <td class="two"><input type="text" id="fax" name="fax" tabindex="230" maxlength="30" size="20" value="" /></td>
              </tr>
  
              <tr valign=top>
                
                  <td class="two width190"><label for="email"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 10pt; color: #002469;">&nbsp;&nbsp;&nbsp;Email address</span></label></td>
                
                
                
                <td class="two"><input type="email" id="email" name="email" tabindex="240" maxlength="80" size="25" value="" /></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
<!--WP spacer row -->
  <tr>
    <td colspan="2" class="one" height="5"><img src="/images/wp/magic.gif" style="width:1px; height:5px;" alt="" /></td>
  </tr>
<!--WP end spacer row -->


    
<!--WP start withDelivery editable contact -->    

<!--WP end withDelivery editable contact -->    

<!--WP start withDelivery fixeddeliveryRows  contact -->  

<!--WP end withDelivery fixeddeliveryRows  contact -->  





<!-- Special case for bibit migrated merchants for handling Visa Electron payment when
     AVS is switched off -->



<!--WP merchant bottom upload -->
<!-- paymentBottomFields.html $Revision$ -->
<!-- You can use this file to add your own fields or any HTML into the payment container area. This enables you to collect both additional information on the page (using M_ or C_ parameters, as described in the relevant Integration Guide) or add your own text or graphics.

For an example of the HTML code that this files need to work correctly with your payment page, go to your support site -->

<!--WP merchant bottom upload END -->
<!--WP end form contents-->
<!--WP makepayment button -->
    <!--Show WP start again -->
    
      <tr valign="top">
        <!--<td class="one" valign="top">
          <nobr><a href="https://secure-test.worldpay.com/wcc/dispatcher?op-DPStartAgain&PaymentID=ukdc1-pz-cen07-dppr-1422371603465&date=27%2FJan%2F2015+15%3A14%3A53&Lang=en" tabindex="250" style="text-decoration:none;"><img src="/images/buttons/startagain.gif" style="border:0px;" alt="Start again" /></a>&nbsp;<span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 12pt; color: #002469;"><b>Start again</b></span></nobr>
        </td>-->
    

<!--Hide WP start again -->
    
<!--WP end start again -->
        <td class="one" valign="top" rowspan="2" align="right">
        <label for="op-PMMakePayment">
          <nobr><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 12pt; color: #002469;"><b>Make payment</b></span><input name="op-PMMakePayment" id="op-PMMakePayment" tabindex="249" type="image" src="./makepayment.gif" alt="Make payment" /></nobr>
        </label>
        </td>
        
      </tr>
<!--WP cancel button
      <tr valign="top">
        <td class="one" valign="top" align="left">
          <nobr><a href="https://secure-test.worldpay.com/wcc/dispatcher?op-DPCancel&PaymentID=ukdc1-pz-cen07-dppr-1422371603465&date=27%2FJan%2F2015+15%3A14%3A53&Lang=en" tabindex="260" style="text-decoration:none;"><img src="/images/buttons/cancel.gif" alt="Cancel" style="border:0px;" /></a>&nbsp;<span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 12pt; color: #002469;"><b>Cancel</b></span></nobr>
        </td>
      </tr>-->
<!--WP end cancelButton -->
<!--WP end makepayment button -->
<!--Branding fixed -->

      <tr>
        <!-- Break Line -->
        <td  colspan="2">&nbsp;</td>
        <!-- Break Line -->
      </tr>
      <!--WP start refunds.comp -->
<div class="print_buttons">
      <tr id="print_buttons">   
        <td colspan="2" class="two">
        <h3>Refunds and Returns</h3>
        <span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 8pt; color: #002469;"><em>For more information visit our <a href="/global3/brands/worldpay/payment/default/help_refunds_en.html" class="twoinstr" target="_blank" title="Refund and returns policy - Opens in a new window">refund and returns policy</a>.</em></span>
        </td>
      </tr>
</div>
<!--WP end refunds.comp -->

      <!-- start brand.comp --> 
      <tr>
        <td colspan=2 class="brand">
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="brand" width="150">
              <a href="http://www.worldpay.com" target="_blank" title="Opens in a new window"><img src="./brandworldpay.gif" alt="Powered by WorldPay" border="0" /></a>
              </td>
              <td class="brand"><span style=" font-family: Verdana,Geneva,Arial,Helvetica,Sans-Serif; font-size: 8pt; color: #000000;">For help with your payment visit the: <A HREF="/global3/brands/worldpay/payment/fixed/help_brand_en.html" target="_blank" title="WorldPay Help - Opens in a new window" class="brand">WorldPay Help</A>.</span></td>
            </tr>
            
            <tr>
            <td>&nbsp;&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
<!-- end brand.comp --> 


<!--WP end Branding fixed -->
<!--WP cardPage.templ end -->


            </table>
          </td>
        </tr>
      </table>

</form>
<!DOCTYPE html><!--[if lt IE 9]><html class="lte-ie8" lang="en"><![endif]--><!--[if gt IE 8]><!--><html lang="en"><!--<![endif]--><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Pay benefit overpayment online - GOV.UK</title><script type="text/javascript">      (function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var d=document,c="appendChild",a=d.createElement("style");a[c](d.createTextNode("@-ms-viewport{width:auto!important}"));d.getElementsByTagName("head")[0][c](a);}})();    </script><!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-6820d35a129a3ffde628d8447156c5dc.css" media="screen" rel="stylesheet" type="text/css"><!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie6-4ce1b714659f23f4b262761bb2410b40.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie7-5dacabc4c21165dd2db29145e15eb57c.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-ie8-0153d61aaa359828709c0429cb331cfe.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-print-95606431bbfe23b0e4ee9e5ed3346c47.css" media="print" rel="stylesheet" type="text/css"><!--[if IE 8]>    <script type="text/javascript">      (function(){if(window.opera){return;}       setTimeout(function(){var a=document,g,b={families:(g=       ["nta"]),urls:["https://assets.digital.cabinet-office.gov.uk/static/fonts-ie8-1e4512e11cb3ee77b91f723129629e95.css"]},       c="https://assets.digital.cabinet-office.gov.uk/static/vendor/goog/webfont-debug-96870cf9f159ed811fd43c39bdf4656b.js",d="script",       e=a.createElement(d),f=a.getElementsByTagName(d)[0],h=g.length;WebFontConfig       ={custom:b},e.src=c,f.parentNode.insertBefore(e,f);for(;h=h-1;a.documentElement       .className+=' wf-'+g[h].replace(/\s/g,'').toLowerCase()+'-n4-loading');},0)      })()    </script>    <![endif]--><!--[if gte IE 9]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/fonts-83e596ae63d072e22b7f34d2b5482bde.css" media="all" rel="stylesheet" type="text/css"><!--<![endif]--><!--[if lt IE 9]>      <script src="https://assets.digital.cabinet-office.gov.uk/static/ie-fc5bd25c5f46587b9bff917417ab2b7f.js" type="text/javascript"></script>    <![endif]--><link rel="shortcut icon" href="https://assets.digital.cabinet-office.gov.uk/static/favicon-9269d2d9f40d20236f60a3dbc448679a.ico" type="image/x-icon"><!-- Size for iPad and iPad mini (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-152x152-58591dcff066ba321b89a9e208ccedab.png"><!-- Size for iPhone and iPod touch (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-120x120-b6a680ead8eb531b9c28cc056836ad06.png"><!-- Size for iPad 2 and iPad mini (standard resolution) --><link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-76x76-17dd3f1e168561f9099ba92e3292e607.png"><!-- Default non-defined size, also used for Android 2.1+ devices --><link rel="apple-touch-icon-precomposed" href="https://assets.digital.cabinet-office.gov.uk/static/apple-touch-icon-60x60-dc9aa421bedcf2c08c4e8f3f230f780d.png"><meta name="viewport" content="width=device-width, initial-scale=1"><meta property="og:image" content="https://assets.digital.cabinet-office.gov.uk/static/opengraph-image-85fc698c83c77d8d8cb5467a44cc12a5.png"><!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/application-2a091b80dc777fa3602d8d28fecba970.css" media="screen" rel="stylesheet" type="text/css"><!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie6-12c061fe9798dc0218437acf2f5688b1.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie7-12bbbe034128078a6b6828f5a2a27d17.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie8-69d8bd226fcec517a780d4fcc0b85b27.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/print-a510f019943a387a36079430ead3dda8.css" media="print" rel="stylesheet" type="text/css"><link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml"><!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-d48130917d02f7d25b0ee6219beb2e60.css" media="screen" rel="stylesheet" type="text/css"><!--<![endif]--><link rel="alternate" type="application/json" href="/api/pay-court-fine-online.json"><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie6-acfb27bfe5c1ba9d046cc74d7cff2326.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie7-ab5093aae0ca2a1f8053e412d5f5d880.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie8-5118c143f302d5e5cbc500c4510208e3.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--></head><body class="mainstream">    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script><div id="skiplink-container">      <div>        <a href="#content" class="skiplink">Skip to main content</a>      </div>    </div>        <!--end global-cookie-message-->   <!-- related --><!-- end related -->          </div>    <footer class="group js-footer" id="footer" role="contentinfo">
        <div class="footer-wrapper">
            <div class="footer-meta">
                <div class="footer-meta-inner">
                    <ul>
                        <li>
                            <a href="cookies.aspx" target="_blank">Cookies</a>
                        </li>
                        <li>
                            <a href="terms.aspx" target="_blank">Terms and Conditions</a>
                        </li>
                        <li>
                            <a id="butEnglish" title="Click to view this site in English" href="javascript:__doPostBack('ctl00$butEnglish','')">English</a>
                        </li>
                        <li>
                            <a id="butWelsh" title="Cliciwch i weld y safle hwn yn y Gymraeg" href="javascript:__doPostBack('ctl00$butWelsh','')">Welsh</a>
                        </li>
                        <li>
                            Built by the <a href="https://dvladigital.blog.gov.uk/">Driver &amp; Vehicle Licensing Agency</a> 
                        </li>
                    </ul>
                    <div class="open-government-licence">
                        <p class="logo"><a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/2/">Open Government Licence</a></p>
                        <!--<h2>
                            <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/version/2">
                                <img src="https://www.assets.vehicleenquiry.service.gov.uk/vehicleenquiry/Assets/Images/open-government-licence_2x-d273d7eca3045d3b710a863d9bfc0b33.png"
                                    alt="OGL"></a></h2>-->
                        <p>
                            All content is available under the <a href="http://www.nationalarchives.gov.uk/doc/open-government-licence/version/2">
                                Open Government Licence v2.0</a>, except where otherwise stated</p>
                    </div>
                </div>
                <div class="copyright">
                    <a href="http://www.nationalarchives.gov.uk/information-management/our-services/crown-copyright.htm">
                        © Crown copyright</a>
                </div>
            </div>
        </div>
    </footer><!--end footer--><div id="global-app-error" class="app-error hidden"></div>    <script src="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-1d29c0379552e7f7ab67500dea47df2d.js" type="text/javascript"></script><script src="https://assets.digital.cabinet-office.gov.uk/static/libs/jquery/jquery-1.7.2-2ce4706f8f7193defaa9e7df2b641e9a.js" type="text/javascript"></script><script src="https://assets.digital.cabinet-office.gov.uk/static/application-c784d6077a9fa03890364983e9120d91.js" type="text/javascript"></script><script id="ga-params" type="text/javascript">  window.GOVUK = window.GOVUK || {};  GOVUK.Analytics = GOVUK.Analytics || {};  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-26179049-1']);  if(document.domain=='www.gov.uk') {    _gaq.push(['_setDomainName', '.www.gov.uk']);  } else {    _gaq.push(['_setDomainName', document.domain]);  }  _gaq.push(['_setAllowLinker', true]);    // track pixel density ratio  if (window.devicePixelRatio) {    _gaq.push(['_setCustomVar', 11, 'Pixel Ratio', String(window.devicePixelRatio), 2 ]);  }  // Search result placement tracking, set custom var and destroy the cookie  if(GOVUK.cookie && GOVUK.cookie('ga_nextpage_params') !== null){    var customVar = GOVUK.cookie('ga_nextpage_params').split(',');    customVar[1] = parseInt(customVar[1], 10);    customVar[4] = parseInt(customVar[4], 10);    _gaq.push(customVar);    GOVUK.cookie('ga_nextpage_params', null);  }_gaq.push(["_setCustomVar",1,"Section","crime, justice and the law",3]);GOVUK.Analytics.Section = "crime, justice and the law";_gaq.push(["_setCustomVar",4,"Proposition","citizen",3]);GOVUK.Analytics.Proposition = "citizen";_gaq.push(["_setCustomVar",2,"Format","transaction",3]);GOVUK.Analytics.Format = "transaction";</script><script type="text/javascript">  _gaq.push(['_gat._anonymizeIp']);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script><script src="https://assets.digital.cabinet-office.gov.uk/frontend/frontend-3da91097eaed5589a6492d6be5bd1fee.js" type="text/javascript"></script></body></html>

</html>