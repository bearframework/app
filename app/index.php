<?php

use BearFramework\App;

$app = App::get();
$context = $app->context->get(__FILE__);

// Makes the directory /app/assets publicly accessible.
// There are two files in this directory that are used for the welcome screen.
$context->assets->addDir('assets');

// Creates the returns the welcome screen HTML code.
$app->routes->add('/', function() use ($context) {
    return new App\Response\HTML('
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui"/>
        <style>
            html, body{
                padding: 0;
                margin: 0;
                height: 100%;
            }
            body{
                background-image: url(' . $context->assets->getUrl('/assets/bearframework-welcome-page-background.png') . ');
                background-color: #181818;
                background-position: 16px 16px;
                color: #fff;
                font-family: helvetica,arial,sans-serif;
                font-size: 14px;
                text-align: center;
                display: flex;
                flex-direction: column;
            }
            body > div:first-child{
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            body > div:last-child{
                line-height: 180%;
                padding-bottom: 1rem;
            }
            .logo{
                background-image: url(' . $context->assets->getUrl('/assets/bearframework-welcome-page-logo.svg') . ');
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
                width: calc(100% - 2rem);
                height: 30px;
                margin: 0 1rem 2rem 1rem;
                box-sizing: border-box;
            }
            .status{
                font-size: 18px;
            }
            body a{
                color: #fff;
            }
            body a:hover{
                color: #26ade4;
            }
            body a:active{
                color: #1790C2;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="logo"></div>
            <div class="status">is installed successfully!</div>
        </div>
        <div>
            Now you can open /app/index.php and start building your project.<br>
            View the <a href="https://bearframework.com/documentation/" target="_blank">documentation</a> for more information.
        </div>
    </body>
</html>
');
});
