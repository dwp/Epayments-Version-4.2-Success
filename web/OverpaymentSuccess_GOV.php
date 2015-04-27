<?php 
if(!isset($_COOKIE['accessCookie'])) {
  die();
}

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
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/static/static-e826b001509ad8acb5293bc8dfb7c7a9.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie6-5be111e96e185115bbfa4bec0ea02f2f.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 6;</script><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie7-df9f4756ea346d9ecaa2c7128930fbd1.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 7;</script><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/static/static-ie8-aef6a13db6843fa6e7670ddf7d57c62c.css" media="screen" rel="stylesheet" type="text/css" /><script>var ieVersion = 8;</script><![endif]--><link href="https://assets.digital.cabinet-office.gov.uk/static/print-885c0e730d8d8e704542e8304c523b9b.css" media="print" rel="stylesheet" type="text/css">
<link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml">
<!--[if gt IE 8]><!--><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-fbe1508997c4ebf8fa624d2e1db1fb80.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><link rel="canonical" href="/">
<meta name="description" content="GOV.UK - The place to find government services and information - Simpler, clearer, faster">
<!--[if IE 6]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie6-a34832352e383884edc89454b7e29b04.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie7-7f2f952f522ba46f674b44af0a98a067.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="https://assets.digital.cabinet-office.gov.uk/frontend/application-ie8-76ab79c4381c45c614f886802ec6578c.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
<link href="custom.css" rel="stylesheet" type="text/css">
<link href="public/stylesheets/elements.css" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet">
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
          <div class="header-proposition">
            <div class="content">
              <nav id="proposition-menu">
                <a href="start.php" id="proposition-name">Benefit Debt Repayment</a>
              </nav>
            </div>
          </div>

        </div>
          
        
      </div>
	  
    </header><!--end header-->
  
        <div id="top-links" class="inner-block">
            
        </div>
<div id="global-header-bar">
      <div class="inner-block">
        <div class="header-bar"></div>
      </div>
    </div>

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
//salert(val);
//alert(qsParm[key]);
}
}

function completeAndRedirect(){
var win = window.open("./OverpaymentsReceipt.htm?refID="+refVal+"&Amount="+amt,"_blank");
win.focus();

}

</script><div id="wrapper" class="transaction service complete">
<main id="content" role="main" class="group">
 <div class="phase-banner-alpha">
    <p>
      <strong class="phase-tag">ALPHA</strong>
      <span>This is a new service – your <a href="#">feedback</a> will help us to improve it.</span>
    </p>
  </div>
  <div>

    <div class="reference-number-wrap highlighted">
              <h1 class="heading-medium"><i class="icon-ok"></i> <span>Your Payment for &pound;<script type="text/javascript">
    document.write(amt);</script> has been processed successfully.</span></h1>
              <div class="pre-title">Transaction ID :43236WPGV</div>
              <div class="pre-title">Transaction Date :<strong><span id="time"></span></strong></div>
              <div class="pre-title">Reference : 
                <script type="text/javascript">document.write(refVal);</script>
              </div>
          </div>

      </div>
      <div class="clear">
        <h2 class="heading-medium">What happens next</h2>
        <p>Pellentesque consequat tellus sit amet purus pharetra, sed vulputate magna scelerisque. Nulla ut risus augue. Nunc vel convallis velit, nec scelerisque metus.</p>
      </div>

  <script language="javascript">
var today = new Date();
var timestamp = today.toUTCString();
document.getElementById('time').innerHTML=timestamp;

</script>

 
  <div>
	  <table width="0" align="center">
	   <tr>
	  <form action="./Overpayments_welcome.htm" method="post" autocomplete="off" novalidate="novalidate">
        <td><input type="submit" name="return" id="return" value="Finish"   class="button" /></td>
       </form>
      </table>
	  </div>

 </main>
 </div>
  <br/>
  <br/>   
    <footer class="group js-footer" id="footer" role="contentinfo">
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
	  
	  
 