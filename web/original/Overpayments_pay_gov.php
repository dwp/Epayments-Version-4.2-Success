<?php 
ob_start();
if(!isset($_COOKIE['accessCookie'])) {
  header('location: /');
}
ob_end_flush();

?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="lte-ie8" lang="en"><![endif]--><!--[if gt IE 8]><!--><html lang="en">
<!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Pay benefit overpayment online - GOV.UK</title>
<script type="text/javascript">
      (function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var d=document,c="appendChild",a=d.createElement("style");a[c](d.createTextNode("@-ms-viewport{width:auto!important}"));d.getElementsByTagName("head")[0][c](a);}})();
    </script><!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-6820d35a129a3ffde628d8447156c5dc.css" media="screen" rel="stylesheet" type="text/css">
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
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/application-2a091b80dc777fa3602d8d28fecba970.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie6-12c061fe9798dc0218437acf2f5688b1.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie7-12bbbe034128078a6b6828f5a2a27d17.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/application-ie8-69d8bd226fcec517a780d4fcc0b85b27.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/print-a510f019943a387a36079430ead3dda8.css" media="print" rel="stylesheet" type="text/css">
<link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml">
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-d48130917d02f7d25b0ee6219beb2e60.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><link rel="alternate" type="application/json" href="/api/pay-court-fine-online.json">
<!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie6-acfb27bfe5c1ba9d046cc74d7cff2326.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie7-ab5093aae0ca2a1f8053e412d5f5d880.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie8-5118c143f302d5e5cbc500c4510208e3.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body class="mainstream">
    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script><div id="skiplink-container">
      <div>
        <a href="#content" class="skiplink">Skip to main content</a>
      </div>
    </div>

    
    <!--end global-cookie-message-->

    <header role="banner" id="global-header" class=""><div class="header-wrapper">
        <div class="header-global">
          <div class="header-logo">
            <a href="https://www.gov.uk/" title="Go to the GOV.UK homepage" id="logo" class="content">
              <img src="https://assets.digital.cabinet-office.gov.uk/static/gov.uk_logotype_crown-c09acb07e4d1d5d558f5a0bc53e9e36d.png" width="35" height="31" alt=""> GOV.UK
            </a>
          </div>
          

        </div>
        
      </div>
	  
    </header><!--end header-->
 
        <div id="top-links" class="inner-block">
            
        </div>
		<div>
  <p align="center" >
              <strong style="background-color:#d53880">ALPHA</strong>
              <span>This is a new service – your feedback will help us to improve it.</span>
            </p>
	</div>	

<!--<div id="wrapper" class="transaction service">-->
      
<main id="content" role="main" class="group">
<div>
   <!-- <table>  
	<tr><td> <h2>&nbsp;&nbsp;&nbsp;Successful Payment </h2></td></tr>
	</table>-->
    </div>

  <br/>
 <header class="page-header group">
 
 <div>
    

	 <h1>Pay back money owed</h1>
	  <!--<h1>Repay an Overpayment</h1>-->
	<!--&nbsp;&nbsp;<p style="font-size:35px"> <Strong>Make a Benefit Overpayment Online</Strong></p>-->
    </div>
  </header>
      
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
  var myvalue = val.toUpperCase();
 }
 
//alert(key);
//alert(qsParm[key]);
}
}
function completeAndRedirect(){
location.href = "./Worldpay_HMRC_P1.php?refID="+myvalue+"&Amount="+document.getElementById('amount').value;

}
	</Script>
    
  </header>
  <br/>
  <br/>
<form action="javascript:completeAndRedirect();" method="post"  >
  <input type="hidden" id="test" name="test" />
  
   <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reference Number :&nbsp;&nbsp;&nbsp;&nbsp;<script type="text/javascript">
document.write(myvalue);
document.getElementById('test').value=myvalue;

</script></h2>
   <br/>
  <br/>
  <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount To Pay :&nbsp;&nbsp;&nbsp;&nbsp;<img src="./pound1.gif" alt="Pay" height ="24" align ="center">    <input type="text"  height ="25"style="text-transform: uppercase" pattern="[0-9]+(\.[0-9]{1,2})?|\.[0-9]{2}" maxlength="8"  oninvalid="setCustomValidity('Please enter a valid amount')"
    onchange="try{setCustomValidity('')}catch(e){}" name="amount" id="amount" class="text" value=""  align ="top"/> </h2>

  </div>
  <br/>
  <div style="text-align:center" >
  <table>
  <tr>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  
<!--<form action="https://secure-test.worldpay.com/wcc/dispatcher?OrderKey=DWPECOM%5EABC1422275858896" method="post" autocomplete="off" novalidate="novalidate">-->

   <td class="get-started group"><input type="submit" name="pay" id="pay" value="Pay" class="button"  align="center"/>&nbsp;&nbsp;&nbsp;</td>
  <!-- <td> <input type="submit" name="booking-login" id="booking-login" value="Reset" style="width:75px;font-size:13pt;padding:2px; background-color:green;color:black"    align="center"/></td>-->
   <td>&nbsp;&nbsp;</td>
   <td>&nbsp;&nbsp;</td>	
   <tr>
   
   </form>
   </table>
 </main>
  <br/>
  <br/>
      
    <footer class="group js-footer" id="footer" role="contentinfo"><div class="footer-wrapper">
          <div class="footer-categories">
    <div class="footer-explore">
      <h2>Services and information</h2>

      <ul>
<li><a href="/browse/benefits">Benefits</a></li>
        <li><a href="/browse/births-deaths-marriages">Births, deaths, marriages and care</a></li>
        <li><a href="/browse/business">Business and self-employed</a></li>
        <li><a href="/browse/citizenship">Citizenship and living in the UK</a></li>
        <li><a href="/browse/justice">Crime, justice and the law</a></li>
        <li><a href="/browse/disabilities">Disabled people</a></li>
        <li><a href="/browse/driving">Driving and transport</a></li>
        <li><a href="/browse/education">Education and learning</a></li>
      </ul>
<ul>
<li><a href="/browse/employing-people">Employing people</a></li>
        <li><a href="/browse/environment-countryside">Environment and countryside</a></li>
        <li><a href="/browse/housing-local-services">Housing and local services</a></li>
        <li><a href="/browse/tax">Money and tax</a></li>
        <li><a href="/browse/abroad">Passports, travel and living abroad</a></li>
        <li><a href="/visas-immigration">Visas and immigration</a></li>
        <li><a href="/browse/working">Working, jobs and pensions</a></li>
      </ul>
</div>

    <div class="footer-inside-government">
      <h2>Departments and policy</h2>

      <ul>
<li><a href="/government/how-government-works">How government works</a></li>
        <li><a href="/government/organisations">Departments</a></li>
        <li><a href="/government/world">Worldwide</a></li>
        <li><a href="/government/policies">Policies</a></li>
        <li><a href="/government/publications">Publications</a></li>
        <li><a href="/government/announcements">Announcements</a></li>
      </ul>
</div>
    <hr>
</div>


        <div class="footer-meta">
          <div class="footer-meta-inner">
              <h2 class="visuallyhidden">Support links</h2>
<ul>
<li><a href="/help">Help</a></li>
  <li><a href="/help/cookies">Cookies</a></li>
  <li><a href="/contact">Contact</a></li>
  <li><a href="/cymraeg">Cymraeg</a></li>
  <li>Built by the <a href="https://gds.blog.gov.uk/">Government Digital Service</a>
</li>
</ul>
<div class="open-government-licence">
              <p class="logo"><a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence</a></p>
              <p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence v3.0</a>, except where otherwise stated</p>
            </div>
          </div>

          <div class="copyright">
            <a href="https://www.nationalarchives.gov.uk/information-management/our-services/crown-copyright.htm">© Crown copyright</a>
          </div>
        </div>
      </div>
    </footer><!--end footer--><div id="global-app-error" class="app-error hidden"></div>

    <script src="https://assets.digital.cabinet-office.gov.uk/static/govuk-template-1d29c0379552e7f7ab67500dea47df2d.js" type="text/javascript"></script><script src="https://assets.digital.cabinet-office.gov.uk/static/libs/jquery/jquery-1.7.2-2ce4706f8f7193defaa9e7df2b641e9a.js" type="text/javascript"></script><script src="https://assets.digital.cabinet-office.gov.uk/static/application-c784d6077a9fa03890364983e9120d91.js" type="text/javascript"></script><script id="ga-params" type="text/javascript">
  window.GOVUK = window.GOVUK || {};

  GOVUK.Analytics = GOVUK.Analytics || {};
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26179049-1']);
  if(document.domain=='www.gov.uk') {
    _gaq.push(['_setDomainName', '.www.gov.uk']);
  } else {
    _gaq.push(['_setDomainName', document.domain]);
  }
  _gaq.push(['_setAllowLinker', true]);
    // track pixel density ratio
  if (window.devicePixelRatio) {
    _gaq.push(['_setCustomVar', 11, 'Pixel Ratio', String(window.devicePixelRatio), 2 ]);
  }
  // Search result placement tracking, set custom var and destroy the cookie
  if(GOVUK.cookie && GOVUK.cookie('ga_nextpage_params') !== null){
    var customVar = GOVUK.cookie('ga_nextpage_params').split(',');
    customVar[1] = parseInt(customVar[1], 10);
    customVar[4] = parseInt(customVar[4], 10);
    _gaq.push(customVar);
    GOVUK.cookie('ga_nextpage_params', null);
  }
_gaq.push(["_setCustomVar",1,"Section","crime, justice and the law",3]);
GOVUK.Analytics.Section = "crime, justice and the law";
_gaq.push(["_setCustomVar",4,"Proposition","citizen",3]);
GOVUK.Analytics.Proposition = "citizen";
_gaq.push(["_setCustomVar",2,"Format","transaction",3]);
GOVUK.Analytics.Format = "transaction";</script><script type="text/javascript">
  _gaq.push(['_gat._anonymizeIp']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script><script src="https://assets.digital.cabinet-office.gov.uk/frontend/frontend-3da91097eaed5589a6492d6be5bd1fee.js" type="text/javascript"></script>
</body>
</html> 
	  
	  
 