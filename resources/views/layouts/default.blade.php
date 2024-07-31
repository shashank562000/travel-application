<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Planners Pakistan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/header-media.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer-media.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.css" integrity="sha512-JjulHDaUHaWsr0SH0hBu55Z01ZzKDIsJQS0a4NwwonlnJpAHi/VmKwX2X9PffgpJVUYIHurf1eTDpraAJ6tXFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
@yield('content')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> -->
<script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/core.min.js')}}" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/datepicker.min.js')}}" id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        /* <![CDATA[ */
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/mec-typekit-script.min.js')}}" id="mec-typekit-script-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/featherlight.min.js')}}" id="featherlight-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.min.js')}}" id="mec-select2-script-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/mec-tooltip-script.min.js" id="mec-tooltip-script-js')}}"></script>
    <script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.min.js')}}" id="mec-lity-script-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.min.js')}}" id="mec-colorbrightness-script-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.min.js')}}" id="mec-owl-carousel-script-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js')}}" id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/regenerator-runtime.min.js')}}" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/dist/vendor/wp-polyfill.min.js')}}" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/dist/hooks.min.js')}}" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/dist/i18n.min.js')}}" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/swv.min.js')}}" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/wildchina.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js')}}" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/gdlr-core-plugin.min.js')}}" id="gdlr-core-plugin-js"></script>
    <script type="text/javascript" id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
            "ilightbox_skin": "dark"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/gdlr-core-page-builder.min.js')}}" id="gdlr-core-page-builder-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js')}}" id="siteground-optimizer-lazy-sizes-js-js"></script>
    <script type="text/javascript" src="{{asset('/wp-includes/js/jquery/ui/effect.min.js')}}" id="jquery-effects-core-js"></script>
    <script type="text/javascript" id="tourmaster-script-js-extra">
        /* <![CDATA[ */
        var TMi18n = {
            "closeText": "Done",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "firstDay": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/tourmaster-script.min.js')}}" id="tourmaster-script-js"></script>
    <script type="text/javascript" id="traveltour-script-core-js-extra">
        /* <![CDATA[ */
        var traveltour_script_core = {
            "home_url": "https:\/\/wildchina.com\/"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/traveltour-script-core.min.js')}}" id="traveltour-script-core-js"></script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/tourmaster-tour-script.min.js')}}" id="tourmaster-tour-script-js"></script>
    <script type="text/javascript" id="popup-maker-site-js-extra">
        /* <![CDATA[ */
        var pum_vars = {
            "version": "1.19.0",
            "pm_dir_url": "https:\/\/wildchina.com\/wp-content\/plugins\/popup-maker\/",
            "ajaxurl": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
            "restapi": "https:\/\/wildchina.com\/wp-json\/pum\/v1",
            "rest_nonce": null,
            "default_theme": "28101",
            "debug_mode": "",
            "disable_tracking": "",
            "home_url": "\/",
            "message_position": "top",
            "core_sub_forms_enabled": "1",
            "popups": [],
            "cookie_domain": "",
            "analytics_route": "analytics",
            "analytics_api": "https:\/\/wildchina.com\/wp-json\/pum\/v1"
        };
        var pum_sub_vars = {
            "ajaxurl": "https:\/\/wildchina.com\/wp-admin\/admin-ajax.php",
            "message_position": "top"
        };
        var pum_popups = {
            "pum-28709": {
                "triggers": [],
                "cookies": [],
                "disable_on_mobile": false,
                "disable_on_tablet": false,
                "atc_promotion": null,
                "explain": null,
                "type_section": null,
                "theme_id": "28102",
                "size": "medium",
                "responsive_min_width": "0%",
                "responsive_max_width": "100%",
                "custom_width": "640px",
                "custom_height_auto": false,
                "custom_height": "380px",
                "scrollable_content": false,
                "animation_type": "fade",
                "animation_speed": "350",
                "animation_origin": "center top",
                "open_sound": "none",
                "custom_sound": "",
                "location": "center top",
                "position_top": "100",
                "position_bottom": "0",
                "position_left": "0",
                "position_right": "0",
                "position_from_trigger": false,
                "position_fixed": false,
                "overlay_disabled": false,
                "stackable": false,
                "disable_reposition": false,
                "zindex": "1999999999",
                "close_button_delay": "0",
                "fi_promotion": null,
                "close_on_form_submission": true,
                "close_on_form_submission_delay": "5000",
                "close_on_overlay_click": false,
                "close_on_esc_press": false,
                "close_on_f4_press": false,
                "disable_form_reopen": true,
                "disable_accessibility": false,
                "theme_slug": "lightbox",
                "id": 28709,
                "slug": "contact-pop-up"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('/wp-content/uploads/pum/pum-site-scriptsc9df.js?defer')}}" id="popup-maker-site-js"></script>
</body>
</body>
</html>
