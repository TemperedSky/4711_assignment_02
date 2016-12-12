<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template-shopping.php
 *
 * Specifically for the sales page receipt.
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="/"><img src="/assets/images/logo.png"/></a>
                    {menubar} {rolebar}
                </div>
            </div>           
            <div id="content">
                <h1>{pagetitle}</h1>
                {content}
            </div>
            <div class="w3-third w3-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Your Cart</h3>
                    </div>
                    <div class="panel-body">
                        {receipt}
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-default btn-primary" role="button" href="/sales/checkout">Checkout</a>
                        <a class="btn btn-default" role="button" href="/sales/cancel">Cancel Order</a> 
                    </div>
            <div id="footer" class="span12">
                Copyright &copy; 2016,  <a href="mailto:someone@somewhere.com">Me</a>.
            </div>
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>