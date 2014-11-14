<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * view/template.php
 * 
 *
 * ------------------------------------------------------------------------
 */
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
                <div class="banner-wrapper {race-bg}">
                    <div class="banner-bg">
                        <div class="banner">
                            <div class="menu-block-left">
                                <!-- <a href="/" class="faf-title-link"></a>-->
                                <img src="/assets/images/layout/faf_title_hover.png"/>
                            </div>                            
                            <div class="menu-block-right menu-choice">                        
                                <a href="/compare" class="compare-menu-link"></a>
                            </div>
                            <div class="menu-block-right menu-choice">                        
                                <a href="/seraphim" class="seraphim-menu-link"></a>
                            </div>
                            <div class="menu-block-right menu-choice">                        
                                <a href="/uef" class="uef-menu-link"></a>
                            </div>
                            <div class="menu-block-right menu-choice">                        
                                <a href="/cybran" class="cybran-menu-link"></a>
                            </div>
                            <div class="menu-block-right menu-choice">                        
                                <a href="/aeon" class="aeon-menu-link"></a>
                            </div>
                            <div class="menu-block-right menu-choice">                        
                                <a href="/" class="all-menu-link"></a>
                            </div>
                        </div>                        
                    </div>
                </div>                     
                <div class="content-wrapper">
                    <div id="content" class="">                    
                        {content}
                    </div>
                </div>
                <div class="footer-bg {race-bg} credits">
                    <div class="footer">
                        <p>Built by Burka for the Forged Alliance Forever community - <a href="/credits">More Credits!</a></p>
                        <p>Patch 1.5.3634</p>
                        
                    </div>
                </div>                
            </div>
            <div class="layout-race-logo-left">
                <img src="../assets/images/layout/{race-logo}" />
            </div>
            <div class="layout-faf-logo-right">
                <img src="../assets/images/layout/faf_logo_big.png" />
            </div>
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
