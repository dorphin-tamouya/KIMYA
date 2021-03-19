<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil - KIMYA TRANSFERT</title>
    
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<title>Payyed - Money Transfer and Online Payments HTML Template</title>
<meta name="description" content="This professional design html template is for build a Money Transfer and online payments website.">
<meta name="author" content="harnishdesign.net">  
    <!-- Web Fonts
    ============================================= -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" type="text/css">

    <!-- Stylesheet
    ============================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="vendor/currency-flags/css/currency-flags.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-168122161-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168122161-1');
    </script>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700&amp;amp;subset=cyrillic" rel="stylesheet"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>
<body>

<!-- Preloader -->
<div id="preloader">
  <div data-loader="dual-ring"></div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
============================================= -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          <!-- Logo
          ============================= -->
          <div class="logo"> <a class="d-flex" href="/" title="KIMYA TRANSFERT"><img src="images/logo.png" alt="Payyed" /></a> </div>
          <!-- Logo end --> 
          <!-- Collapse Button
          ============================== -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
          <!-- Collapse Button end --> 
          
          <!-- Primary Navigation
          ============================== -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/help">FAQ</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        <div class="header-column justify-content-end"> 
          <!-- Login & Signup Link
          ============================== -->
          <nav class="login-signup navbar navbar-expand">
            <ul class="navbar-nav">
              <li><a href="/login">Login</a> </li>
              <li class="align-items-center h-auto ml-sm-3"><a class="btn btn-primary" href="/signup">Sign Up</a></li>
            </ul>
          </nav>
          <!-- Login & Signup Link end --> 
        </div>
      </div>
    </div>
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================================= -->
  <div id="content"> 
  <section class="hero-wrap">
    <div class="hero-mask opacity-7 bg-dark"></div>
    <div class="hero-bg" style="background-image:url('images/bg/image-6.jpg');"></div>
    <div class="hero-content d-flex flex-column fullscreen-with-header">
        <div class="container my-auto py-5">
            <div class="row">
            <div class="col-lg-6 col-xl-7 my-auto text-center text-lg-left pb-4 pb-lg-0">
              <h2 class="text-17 text-white"><span class="font-weight-400 text-15">A better way to</span> <br>
                Send Money</h2>
              <p class="text-4 text-white mb-4"> Send money with a better exchange rate and avoid excessive bank fees.The Congo has never been so close to you.</p>
              <a href="/about-us" class="btn-link text-4">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voir plus de détails</font></font></span>
                                <i class="fas fa-chevron-right text-2 ml-2"></i>
                            </a>
                           </div>
                <div class="col-lg-6 col-xl-5 my-auto">
                    <div class="bg-white rounded shadow-md p-4">
                        <h3 class="text-5 mb-4 text-center">Send Money</h3>

                        <div style="display: none" id="error">
                            <div class="alert alert-danger" role="alert" >
                                Vos sommes sont incorrect ou depasse le seuil autorisé $10 as $350.
                            </div>
                        </div>

                        <hr class="mb-4 mx-n4">
                        <form action="signup" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="youSend">You Send</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                                    <input type="text"
                                           class="form-control"
                                           data-bv-field="youSend" name="youSend"
                                           id="youSend"
                                           value="0" placeholder="" required min="1" max="300" onchange="moneySend()">
                                    <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <select id="youSendCurrency"
                                                    data-style="custom-select bg-transparent border-0"
                                                    data-container="body" data-live-search="true"
                                                    class="selectpicker form-control bg-transparent" name="" required onchange="currencyChanged()">
                                              <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="dollar">USD</option>
                                              <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="euro">EUR</option>
                                              <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="sterling">GBP</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="recipientGets">Recipient Gets</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span> </div>
                                        <input type="text"
                                               class="form-control" name="recipientGets"
                                               data-bv-field="recipientGets" id="recipientGets"
                                               value="0" placeholder="" required onchange="moneyReceive()">
                                        <div class="input-group-append">
                                        <span class="input-group-text p-0">
                                            <select id="recipientCurrency" data-style="custom-select bg-transparent border-0"
                                                    data-container="body"
                                                    data-live-search="true"
                                                    class="selectpicker form-control bg-transparent">
                                                <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" value="" selected>USD</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="receivingOptions">Receiving options</label>
                                <div class="input-group">
                                    <div class="dropdown bootstrap-select form-control">
                                        <select id="receivingOptions" data-style="custom-select" class="selectpicker form-control" required="" name="receivingType" tabindex="-98">
                                            <option value="" disabled selected>Sélectionnez une option</option>
                                            <option value="orangeMoney">Orange Money</option>
                                            <option value="mPesa">M-pesa</option>
                                            <option value="airtelMoney">Airtel Money</option>
                                        </select>
                                    </div>
                                    <div class="input-group-append">
                                        <ul class="payments-types list-unstyled list-inline d-flex align-items-center">
                                        <li><a href="#"> <img class="operator-img" data-toggle="tooltip" src="images/sending/orange-money.png" alt="Orange Money" title="Orange"></a></li>
                                                        <li><a href="#"> <img class="operator-img" data-toggle="tooltip" src="images/sending/airtel-money.png" alt="Aitel Money" title="Airtel"></a></li>
                                                        <li><a href="#"> <img class="operator-img" data-toggle="tooltip" src="images/sending/m-pesa.jpeg" alt="M-Pesa" title="Vodacom"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p class="text-muted mb-1">Total des frais  : <span id="fees" class="font-weight-500">0</span> <span class="font-weight-500"> USD</span></p>
                            <input type="hidden" name="fees" value="">
                            <p class="text-muted mb-1">Total a envoyer  : <span id="totals" class="font-weight-500">0</span><span class="font-weight-500"> USD</span></p>
                            <p class="text-muted">La valeur de change est :
                                <span class="font-weight-500">1 USD = 0.830 EUR</span>
                                <br> <span class="font-weight-500">1 USD = 0.717 GBP</span>
                            </p>
                            <button class="btn btn-primary btn-block" type="submit">Continuer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Why choose us
    ============================================= -->
    <section class="section bg-white">
            <div class="container">
                <h2 class="text-9 text-center text-uppercase font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">WHY CHOOSE US</font></font></h2>
                <p class="text-4 text-center font-weight-300 mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Here are the top 4 reasons to use kimya transfert to manage your money transfers</font></font></p>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-sm-6 mb-4">
                                <div class="featured-box style-3">
                                    <div class="featured-box-icon border border-primary text-primary rounded-circle"><i class="fas fa-hand-pointer"></i></div>
                                    <h3 class="font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Easy to use</font></font></h3>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Smart payment platform that facilitates electronic payments for the African market.</font></font></p>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <div class="featured-box style-3">
                                    <div class="featured-box-icon border border-primary text-primary rounded-circle"><i class="fas fa-share"></i></div>
                                    <h3 class="font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faster payments</font></font></h3>
                                    <p><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">We provide our clients with technology, cash management software, cash processing and cash credit. </font><font style="vertical-align: inherit;">And all this in one click!</font></font></p>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-4 mb-sm-0">
                                <div class="featured-box style-3">
                                    <div class="featured-box-icon border border-primary text-primary rounded-circle"><i class="fas fa-dollar-sign"></i></div>
                                    <h3 class="font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reduced fees</font></font></h3>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">These are low cost cash management fees. </font><font style="vertical-align: inherit;">Our transaction fees compete with other payment platforms</font></font></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="featured-box style-3">
                                    <div class="featured-box-icon border border-primary text-primary rounded-circle"><i class="fas fa-lock"></i></div>
                                    <h3 class="font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100% secure</font></font></h3>
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">kimya transfert is committed to keeping you and your information safe. </font><font style="vertical-align: inherit;">We have a multitude of controls in place to protect you against fraudulent transactions.</font></font></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- How it works
    ============================================= -->
    <section class="section hero-bg hero-mask opacity-10 bg-primary" style="background-image:url('images/ic/.jpg');">
            <div class="container">
                <h2 class="text-9 text-center text-uppercase font-weight-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SIMPLE AS 1-2-3</font></font></h2>
                <p class="text-4 text-center font-weight-300 mb-5" style="color: white !important;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Create your account and manage your transaction like an expert</font></font></p>
                <div class="row" style="color: white !important;">
                    <div class="col-sm-4 mb-4">
                        <div class="featured-box style-4">
                            <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></div>
                            <h3 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Create your account</font></font></h3>
                            <p class="text-3 font-weight-300"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Open your free personal account in one minute</font></font></p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="featured-box style-4">
                            <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span></div>
                            <h3 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fund mobile wallet</font></font></h3>
                            <p class="text-3 font-weight-300"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fund a mobile wallet from around the world</font></font></p>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4 mb-sm-0">
                        <div class="featured-box style-4">
                            <div class="featured-box-icon text-dark shadow-none border-bottom"><span class="w-100 text-20 font-weight-500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></div>
                            <h3 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Withdraw funds</font></font></h3>
                            <p class="text-3 font-weight-300"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your funds will be transferred to the designated local money account</font></font></p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <a href="/signup" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Opening an account</font></font></a>
                </div>
            </div>
        </section>
  </div>
  <!-- Content end --> 
  
  @extends('FrontEnd.footer')
  
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script> 
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script>

<script>
        let currencies = ['dollar', 'euro', 'sterling'];
        let currencySelected = document.getElementById('youSendCurrency').value;
        let amountToSend = parseInt(document.getElementById('youSend').value);
        let amountToReceive = parseInt(document.getElementById('recipientGets').value);

        const rate = 0.05;
        let fees = 0;
        let totals = 0;

        function moneySend() {
            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 0.83015).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
                    break;
                case currencies[2] :
                    document.getElementById('recipientGets').value = (parseInt(document.getElementById('youSend').value) * 0.717).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
                    break;
                default :
                    document.getElementById('recipientGets').value  = parseInt(document.getElementById('youSend').value);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText));
            }
        }

        function moneyReceive() {

            switch (showOption()) {
                case currencies[1] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 1.2046).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
                    break;
                case currencies[2] :
                    document.getElementById('youSend').value = (parseInt(document.getElementById('recipientGets').value) * 1.3947).toFixed(2);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
                    break;
                default :
                    document.getElementById('youSend').value  = parseInt(document.getElementById('recipientGets').value);
                    document.getElementById('fees').innerHTML = (document.getElementById('recipientGets').value * 0.05).toFixed(2) + ' USD';
                    document.getElementById('totals').innerHTML = (parseInt(document.getElementById('recipientGets').value) + parseInt(document.getElementById('fees').innerText)) + ' USD';
            }
        }

        function showOption() {
            return document.getElementById('youSendCurrency').value
        }

        function currencyChanged() {
            moneySend();
        }

        function computedFee() {
            fees = amountToReceive * 0.05;
        }

        function computedTotal() {
            totals = fees + amountToReceive;
        }
    </script>
</body>
</html>