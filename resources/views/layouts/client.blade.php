<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#" class="ie9 loading-site no-js">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Iot smart - Giải pháp tự động hóa</title>

    <link rel="stylesheet" id="flatsome-style-css" href="{{asset("assets/css/all.min.css")}}" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-main-css" href="{{asset("assets/css/flatsome.css")}}" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-shop-css" href="{{asset("assets/css/flatsome-shop.css")}}" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-style-css" href="{{asset("assets/css/aio_ct_button.css")}}" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-style-css" href="{{asset("assets/css/style.css")}}" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-googlefonts-css" href="//fonts.googleapis.com/css?family=Be+Vietnam%3Aregular%2C700%2Cregular%2C600%2Cregular&amp;display=swap" type="text/css" media="all">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/images/favicon/favicon-512x512.png" sizes="512x512">
    <link rel="apple-touch-icon" type="image/png" href="images/favicon/apple-touch-icon.png">

    <script type="text/javascript" src="{{asset("assets/js/jquery.min.js")}}" id="jquery-core-js"></script>
    <style id="flatsome-main-inline-css" type="text/css">
        @font-face {
            font-family: "fl-icons";
            font-display: block;
            src: url(fonts/fl-icons_1.eot);
            src:
                url(fonts/fl-icons.eot#iefix?v=3.15.3) format("embedded-opentype"),
                url(fonts/fl-icons.woff2) format("woff2"),
                url(fonts/fl-icons.ttf) format("truetype"),
                url(fonts/fl-icons.woff) format("woff"),
                url(images/fl-icons.svg#fl-icons) format("svg");
        }
    </style>

    @yield('style')
</head>

<body id="pre-default" data-rsssl="1" class="home page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php page page-id-60 theme-flatsome woocommerce-no-js full-width lightbox nav-dropdown-has-shadow mobile-submenu-slide mobile-submenu-slide-levels-1 catalog-mode no-prices">
<div id="wrapper">
    @yield('header')
    <main id="main" class="">
        @yield('content')
    </main>
    <x-footer></x-footer>
</div>
<div>
    <x-category :showCateMobile="true"></x-category>

    <a id="ws247-aio-ct-button-show-all-icon" href="#" class="hide-me js-show-all-icon show-all-icon contact-icons-right">
        <span>{{trans("label.contact")}}</span>
        <i class="fas fa-long-arrow-alt-up"></i>
    </a>
    <ul id="ft-contact-icons" class="active contact-icons-right">
        <li class="icon-zalo">
            <a target="_blank" href="https://zalo.me/{{business()->getInfo('tel')}}">
                <span class="icon"></span>
                <span class="ab"><i class="fas fa-caret-left"></i> <label>Chat Zalo</label></span>
            </a>

        </li>
        <li class="icon-phone">
            <a href="tel:{{business()->getInfo('tel')}}" target="_blank">
                <span class="icon"><i class="fas fa-phone" aria-hidden="true"></i></span>
                <span class="ab"><i class="fas fa-caret-left"></i> <label>Call hotline</label></span>
            </a>
        </li>
        <li><a href="#" class="js-hide-all-icon"><span class="icon"><i class="fas fa-times"></i></span></a></li>
    </ul>
</div>

<script type="text/javascript" src="{{asset("assets/js/hoverIntent.min.js")}}" id="hoverIntent-js"></script>
<script type="text/javascript" id="flatsome-js-js-extra">
    var flatsomeVars = {
        "theme": {"version": "3.15.3"},
        "ajaxurl": "0",
        "rtl": "",
        "sticky_height": "80",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {"can_edit_pages": false},
        "i18n": {"mainMenu": "Main Menu"},
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        },
        "is_mini_cart_reveal": ""
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset("assets/js/flatsome.js")}}" id="flatsome-js-js"></script>

@yield('vendor_scripts')

<script type="text/javascript" src="{{asset("assets/js/flatsome-lazy-load.js")}}" id="flatsome-lazy-js"></script>
<script>
    jQuery(document).ready(function (e) {
        jQuery(".js-show-all-icon").click(function (e) {
            if (jQuery("#ft-contact-icons").hasClass('active')) {
                jQuery("#ft-contact-icons").removeClass('active');
                jQuery(this).removeClass('hide-me');
            } else {
                jQuery("#ft-contact-icons").addClass('active');
                jQuery(this).addClass('hide-me');
            }
            return false;
        });

        jQuery(".js-hide-all-icon").click(function (e) {
            jQuery(".js-show-all-icon").click();
            return false;
        });
    });
</script>
</body>
</html>
