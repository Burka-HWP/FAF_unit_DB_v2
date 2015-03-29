<?php
  if (!defined('APPPATH'))
  exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>{title}</title>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="/assets/js/jquery-1.11.1.min.js" type="text/javascript"/>        
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>

    <link rel="icon" href="/assets/images/favicon/faf_fav2.png" type="image/gif">
  </head>
  <body>
    <div id="body-wrapper">
      <div class="template-wrapper">
        <div class="menubar-wrapper">
          <div class="menubar">
            <div class="menu-item home-menu-new">        
              <img class="menu-icon" src="/assets/images/layout/faf_grey.png" />
              <a href="/">
                <p class="menu-item-name">Home</p>
              </a>
            </div>
            <div class="menu-item all-menu-new">
              <img class="menu-icon" src="/assets/images/layout/all_grey.png" />
              <a href="/all">
                <p class="menu-item-name">All Units</p>
              </a>
            </div>
            <div class="menu-item aeon-menu-new">
              <img class="menu-icon" src="/assets/images/layout/aeon_grey.png" />
              <a href="/aeon">
                <p class="menu-item-name">Aeon</p>
              </a>
            </div>
            <div class="menu-item cybran-menu-new">
              <img class="menu-icon" src="/assets/images/layout/cybran_grey.png" />
              <a href="/cybran">
                <p class="menu-item-name">Cybran</p>
              </a>
            </div>
            <div class="menu-item uef-menu-new">
              <img class="menu-icon" src="/assets/images/layout/uef_grey.png" />
              <a href="/uef">
                <p class="menu-item-name">UEF</p>
              </a>
            </div>
            <div class="menu-item seraphim-menu-new">
              <img class="menu-icon" src="/assets/images/layout/seraphim_grey.png" />
              <a href="/seraphim">
                <p class="menu-item-name">Seraphim</p>
              </a>
            </div>      
            <div class="menu-item compare-menu-new">
              <img class="menu-icon" src="/assets/images/layout/compare_grey.png" />
              <a href="/compare">
                <p class="menu-item-name">Compare</p>
              </a>
            </div>
          </div>
        </div>       
        <div class="feedback-box">
          <h4>Feedback</h4>
          <div class="feedback-window">
            <img src="/assets/images/popups/feedback.png" />
            <p style="color: #aaa;">Let us know what you think of the new site! - <span id="feedback-ta-counter">Chars: 140</span></p>
            <form action="/feedback/submit" method="POST">
              <textarea id="feedback-ta" name="feedback" class="feedback-textarea" placeholder="Tell us!" maxlength="140"></textarea>
              <input type="submit" value="Submit" class="feedback-button"/>  
            </form> 
          </div> 
        </div> 
        
                    
<div class="content-wrapper">
<div id="content">                    
{content}
</div>
</div>
<div class="footer-bg {race-bg}">
<div class="footer">
<p>Built by Burka for the Forged Alliance Forever community &copy; 2015</p>
<!-- <p>Patch 1.5.3634</p> -->

</div>
</div>                
</div>
{quick-nav}
{logged-in-as}
<div class="layout-race-logo-left">
<img src="/assets/images/layout/{race-logo}" />
</div>
<div class="layout-faf-logo-right">
<img src="/assets/images/layout/faf_logo_big.png" />
</div>
</div>
<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/faf_unit_db.js"></script>
</body>
</html>
