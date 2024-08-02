<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="no-js">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('css/header.css')}}" rel="stylesheet">
<link href="{{asset('css/header-media.css')}}" rel="stylesheet">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<link href="{{asset('css/footer-media.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="tour-template-default single single-tour postid-32947 gdlr-core-body tourmaster-bottom-booking-bar tourmaster-mobile-read-more tourmaster-body traveltour-body traveltour-body-front traveltour-full  traveltour-with-sticky-navigation gdlr-core-link-to-lightbox">
    @include('partials.head.booking-condition')
    @include('partials.head.header')
    <div class="traveltour-body-outer-wrapper ">
        <div class="traveltour-body-wrapper clearfix  traveltour-with-transparent-header traveltour-with-frame">
            @include('partials.head.header-transparent')
            <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
                <div class="tourmaster-page-wrapper tourmaster-tour-style-1 tourmaster-with-sidebar" id="tourmaster-page-wrapper">
                    <script type="application/ld+json">
                        {
                            "@context": "http:\/\/schema.org",
                            "@type": "Product",
                            "name": "WildBeijing: Hiking the Great Wall &#8211; Jiankou to Mutianyu",
                            "productID": "tour-32947",
                            "brand": "WildChina",
                            "sku": "1",
                            "url": "https:\/\/wildchina.com\/tour\/hiking-the-great-wall-jiankou-to-mutianyu\/",
                            "description": "Join us on a less-traveled section of this historic structure, as we hike along an eastern section of the Great Wall from Jiankou to Mutianyu.",
                            "image": "https:\/\/wildchina.com\/wp-content\/uploads\/2022\/11\/Great-Wall-sunset-Image-by-u_2ui6kzp77g-from-Pixabay-001.jpg"
                        }
                    </script>
                    <div class="tourmaster-single-header gdrl-bg">
                        <div class="tourmaster-single-header-background-overlay"></div>
                        <div class="tourmaster-single-header-container tourmaster-container">
                            <div class="tourmaster-single-header-container-inner">
                                <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                                    <h1 class="tourmaster-single-header-title">WildBeijing: Hiking the Great Wall
                                        &#8211; Jiankou to Mutianyu</h1>
                                </div>
                                <div class="tourmaster-header-price tourmaster-item-mglr">
                                    <div class="tourmaster-header-enquiry-ribbon"></div>
                                    <div class="tourmaster-header-price-wrap">
                                        <div class="tourmaster-header-price-overlay"></div><span class="tourmaster-header-enquiry">Send Us An Inquiry</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tourmaster-template-wrapper">
                        <div class="tourmaster-tour-booking-bar-container tourmaster-container">
                            <div class="tourmaster-tour-booking-bar-container-inner">
                                <div class="tourmaster-tour-booking-bar-anchor tourmaster-item-mglr"></div>
                                <div class="tourmaster-tour-booking-bar-wrap tourmaster-item-mglr" id="tourmaster-tour-booking-bar-wrap">
                                    <div class="tourmaster-tour-booking-bar-outer">
                                        <div class="tourmaster-header-price tourmaster-item-mglr">
                                            <div class="tourmaster-header-enquiry-ribbon"></div>
                                            <div class="tourmaster-header-price-wrap">
                                                <div class="tourmaster-header-price-overlay"></div><span class="tourmaster-header-enquiry">Send Us An Inquiry</span>
                                            </div>
                                        </div>
                                        <div class="tourmaster-tour-booking-bar-inner">
                                            <div class="tourmaster-tour-booking-enquiry-wrap">
                                                <script type="text/javascript">
                                                    var gform;
                                                    gform || (document.addEventListener("gform_main_scripts_loaded", function() {
                                                        gform.scriptsLoaded = !0
                                                    }), window.addEventListener("DOMContentLoaded", function() {
                                                        gform.domLoaded = !0
                                                    }), gform = {
                                                        domLoaded: !1,
                                                        scriptsLoaded: !1,
                                                        initializeOnLoaded: function(o) {
                                                            gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
                                                        },
                                                        hooks: {
                                                            action: {},
                                                            filter: {}
                                                        },
                                                        addAction: function(o, n, r, t) {
                                                            gform.addHook("action", o, n, r, t)
                                                        },
                                                        addFilter: function(o, n, r, t) {
                                                            gform.addHook("filter", o, n, r, t)
                                                        },
                                                        doAction: function(o) {
                                                            gform.doHook("action", o, arguments)
                                                        },
                                                        applyFilters: function(o) {
                                                            return gform.doHook("filter", o, arguments)
                                                        },
                                                        removeAction: function(o, n) {
                                                            gform.removeHook("action", o, n)
                                                        },
                                                        removeFilter: function(o, n, r) {
                                                            gform.removeHook("filter", o, n, r)
                                                        },
                                                        addHook: function(o, n, r, t, i) {
                                                            null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
                                                            var e = gform.hooks[o][n];
                                                            null == i && (i = n + "_" + e.length), gform.hooks[o][n].push({
                                                                tag: i,
                                                                callable: r,
                                                                priority: t = null == t ? 10 : t
                                                            })
                                                        },
                                                        doHook: function(n, o, r) {
                                                            var t;
                                                            if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[n][o] && ((o = gform.hooks[n][o]).sort(function(o, n) {
                                                                    return o.priority - n.priority
                                                                }), o.forEach(function(o) {
                                                                    "function" != typeof(t = o.callable) && (t = window[t]), "action" == n ? t.apply(null, r) : r[0] = t.apply(null, r)
                                                                })), "filter" == n) return r[0]
                                                        },
                                                        removeHook: function(o, n, t, i) {
                                                            var r;
                                                            null != gform.hooks[o][n] && (r = (r = gform.hooks[o][n]).filter(function(o, n, r) {
                                                                return !!(null != i && i != o.tag || null != t && t != o.priority)
                                                            }), gform.hooks[o][n] = r)
                                                        }
                                                    });
                                                </script>
                                                <div class='gf_browser_unknown gform_wrapper gform_legacy_markup_wrapper gform-theme--no-framework' data-form-theme='legacy' data-form-index='0' id='gform_wrapper_1'>
                                                    <form method='post' enctype='multipart/form-data' id='gform_1' action='#' data-formid='1' novalidate> <input type='hidden' class='gforms-pum' value='{"closepopup":false,"closedelay":0,"openpopup":false,"openpopup_id":0}' />
                                                        <div class='gform-body gform_body'>
                                                            <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below validation_below'>
                                                                <li id="field_1_1" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_1"><label class='gfield_label gform-field-label' for='input_1_1'>Given name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_1' id='input_1_1' type='text' value='' class='medium' aria-required="true" aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_2" class="gfield gfield--type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_2"><label class='gfield_label gform-field-label' for='input_1_2'>Family name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_2' id='input_1_2' type='text' value='' class='medium' aria-required="true" aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_3" class="gfield gfield--type-email gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_3"><label class='gfield_label gform-field-label' for='input_1_3'>Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_email'>
                                                                        <input name='input_3' id='input_1_3' type='email' value='' class='medium' aria-required="true" aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_4" class="gfield gfield--type-select gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_4"><label class='gfield_label gform-field-label' for='input_1_4'>Country<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_select'>
                                                                        <select name='input_4' id='input_1_4' class='medium gfield_select' aria-required="true" aria-invalid="false">
                                                                            <option value='Afghanistan'>Afghanistan
                                                                            </option>
                                                                            <option value='Albania'>Albania</option>
                                                                            <option value='Algeria'>Algeria</option>
                                                                            <option value='Andorra'>Andorra</option>
                                                                            <option value='Angola'>Angola</option>
                                                                            <option value='Antigua and Barbuda'>Antigua
                                                                                and Barbuda</option>
                                                                            <option value='Argentina'>Argentina</option>
                                                                            <option value='Armenia'>Armenia</option>
                                                                            <option value='Australia'>Australia</option>
                                                                            <option value='Austria'>Austria</option>
                                                                            <option value='Azerbaijan'>Azerbaijan
                                                                            </option>
                                                                            <option value='Bahamas'>Bahamas</option>
                                                                            <option value='Bahrain'>Bahrain</option>
                                                                            <option value='Bangladesh'>Bangladesh
                                                                            </option>
                                                                            <option value='Barbados'>Barbados</option>
                                                                            <option value='Belarus'>Belarus</option>
                                                                            <option value='Belgium'>Belgium</option>
                                                                            <option value='Belize'>Belize</option>
                                                                            <option value='Benin'>Benin</option>
                                                                            <option value='Bhutan'>Bhutan</option>
                                                                            <option value='Bolivia'>Bolivia</option>
                                                                            <option value='Bosnia and Herzegovina'>
                                                                                Bosnia and Herzegovina</option>
                                                                            <option value='Botswana'>Botswana</option>
                                                                            <option value='Brazil'>Brazil</option>
                                                                            <option value='Brunei'>Brunei</option>
                                                                            <option value='Bulgaria'>Bulgaria</option>
                                                                            <option value='Burkina Faso'>Burkina Faso
                                                                            </option>
                                                                            <option value='Burundi'>Burundi</option>
                                                                            <option value='Cabo Verde'>Cabo Verde
                                                                            </option>
                                                                            <option value='Cambodia'>Cambodia</option>
                                                                            <option value='Cameroon'>Cameroon</option>
                                                                            <option value='Canada'>Canada</option>
                                                                            <option value='Central African Republic (CAR)'>
                                                                                Central African Republic (CAR)</option>
                                                                            <option value='Chad'>Chad</option>
                                                                            <option value='Chile'>Chile</option>
                                                                            <option value='China'>China</option>
                                                                            <option value='Colombia'>Colombia</option>
                                                                            <option value='Comoros'>Comoros</option>
                                                                            <option value='Congo, Democratic Republic of the'>
                                                                                Congo, Democratic Republic of the
                                                                            </option>
                                                                            <option value='Congo, Republic of the'>
                                                                                Congo, Republic of the</option>
                                                                            <option value='Costa Rica'>Costa Rica
                                                                            </option>
                                                                            <option value='Cote d&#039;Ivoire'>Cote
                                                                                d&#039;Ivoire</option>
                                                                            <option value='Croatia'>Croatia</option>
                                                                            <option value='Cuba'>Cuba</option>
                                                                            <option value='Cyprus'>Cyprus</option>
                                                                            <option value='Czechia'>Czechia</option>
                                                                            <option value='Denmark'>Denmark</option>
                                                                            <option value='Djibouti'>Djibouti</option>
                                                                            <option value='Dominica'>Dominica</option>
                                                                            <option value='Dominican Republic'>Dominican
                                                                                Republic</option>
                                                                            <option value='Ecuador'>Ecuador</option>
                                                                            <option value='Egypt'>Egypt</option>
                                                                            <option value='El Salvador'>El Salvador
                                                                            </option>
                                                                            <option value='Equatorial Guinea'>Equatorial
                                                                                Guinea</option>
                                                                            <option value='Eritrea'>Eritrea</option>
                                                                            <option value='Estonia'>Estonia</option>
                                                                            <option value='Eswatini (formerly Swaziland)'>
                                                                                Eswatini (formerly Swaziland)</option>
                                                                            <option value='Ethiopia'>Ethiopia</option>
                                                                            <option value='Fiji'>Fiji</option>
                                                                            <option value='Finland'>Finland</option>
                                                                            <option value='France'>France</option>
                                                                            <option value='Gabon'>Gabon</option>
                                                                            <option value='Gambia'>Gambia</option>
                                                                            <option value='Georgia'>Georgia</option>
                                                                            <option value='Germany'>Germany</option>
                                                                            <option value='Ghana'>Ghana</option>
                                                                            <option value='Greece'>Greece</option>
                                                                            <option value='Grenada'>Grenada</option>
                                                                            <option value='Guatemala'>Guatemala</option>
                                                                            <option value='Guinea'>Guinea</option>
                                                                            <option value='Guinea-Bissau'>Guinea-Bissau
                                                                            </option>
                                                                            <option value='Guyana'>Guyana</option>
                                                                            <option value='Haiti'>Haiti</option>
                                                                            <option value='Honduras'>Honduras</option>
                                                                            <option value='Hong Kong'>Hong Kong</option>
                                                                            <option value='Hungary'>Hungary</option>
                                                                            <option value='Iceland'>Iceland</option>
                                                                            <option value='India'>India</option>
                                                                            <option value='Indonesia'>Indonesia</option>
                                                                            <option value='Iran'>Iran</option>
                                                                            <option value='Iraq'>Iraq</option>
                                                                            <option value='Ireland'>Ireland</option>
                                                                            <option value='Israel'>Israel</option>
                                                                            <option value='Italy'>Italy</option>
                                                                            <option value='Jamaica'>Jamaica</option>
                                                                            <option value='Japan'>Japan</option>
                                                                            <option value='Jordan'>Jordan</option>
                                                                            <option value='Kazakhstan'>Kazakhstan
                                                                            </option>
                                                                            <option value='Kenya'>Kenya</option>
                                                                            <option value='Kiribati'>Kiribati</option>
                                                                            <option value='Kosovo'>Kosovo</option>
                                                                            <option value='Kuwait'>Kuwait</option>
                                                                            <option value='Kyrgyzstan'>Kyrgyzstan
                                                                            </option>
                                                                            <option value='Laos'>Laos</option>
                                                                            <option value='Latvia'>Latvia</option>
                                                                            <option value='Lebanon'>Lebanon</option>
                                                                            <option value='Lesotho'>Lesotho</option>
                                                                            <option value='Liberia'>Liberia</option>
                                                                            <option value='Libya'>Libya</option>
                                                                            <option value='Liechtenstein'>Liechtenstein
                                                                            </option>
                                                                            <option value='Lithuania'>Lithuania</option>
                                                                            <option value='Luxembourg'>Luxembourg
                                                                            </option>
                                                                            <option value='Madagascar'>Madagascar
                                                                            </option>
                                                                            <option value='Malawi'>Malawi</option>
                                                                            <option value='Malaysia'>Malaysia</option>
                                                                            <option value='Maldives'>Maldives</option>
                                                                            <option value='Mali'>Mali</option>
                                                                            <option value='Malta'>Malta</option>
                                                                            <option value='Marshall Islands'>Marshall
                                                                                Islands</option>
                                                                            <option value='Mauritania'>Mauritania
                                                                            </option>
                                                                            <option value='Mauritius'>Mauritius</option>
                                                                            <option value='Mexico'>Mexico</option>
                                                                            <option value='Micronesia'>Micronesia
                                                                            </option>
                                                                            <option value='Moldova'>Moldova</option>
                                                                            <option value='Monaco'>Monaco</option>
                                                                            <option value='Mongolia'>Mongolia</option>
                                                                            <option value='Montenegro'>Montenegro
                                                                            </option>
                                                                            <option value='Morocco'>Morocco</option>
                                                                            <option value='Mozambique'>Mozambique
                                                                            </option>
                                                                            <option value='Myanmar (formerly Burma)'>
                                                                                Myanmar (formerly Burma)</option>
                                                                            <option value='Namibia'>Namibia</option>
                                                                            <option value='Nauru'>Nauru</option>
                                                                            <option value='Nepal'>Nepal</option>
                                                                            <option value='Netherlands'>Netherlands
                                                                            </option>
                                                                            <option value='New Zealand'>New Zealand
                                                                            </option>
                                                                            <option value='Nicaragua'>Nicaragua</option>
                                                                            <option value='Niger'>Niger</option>
                                                                            <option value='Nigeria'>Nigeria</option>
                                                                            <option value='North Korea'>North Korea
                                                                            </option>
                                                                            <option value='North Macedonia (formerly Macedonia)'>
                                                                                North Macedonia (formerly Macedonia)
                                                                            </option>
                                                                            <option value='Norway'>Norway</option>
                                                                            <option value='Oman'>Oman</option>
                                                                            <option value='Pakistan'>Pakistan</option>
                                                                            <option value='Palau'>Palau</option>
                                                                            <option value='Palestine'>Palestine</option>
                                                                            <option value='Panama'>Panama</option>
                                                                            <option value='Papua New Guinea'>Papua New
                                                                                Guinea</option>
                                                                            <option value='Paraguay'>Paraguay</option>
                                                                            <option value='Peru'>Peru</option>
                                                                            <option value='Philippines'>Philippines
                                                                            </option>
                                                                            <option value='Poland'>Poland</option>
                                                                            <option value='Portugal'>Portugal</option>
                                                                            <option value='Qatar'>Qatar</option>
                                                                            <option value='Romania'>Romania</option>
                                                                            <option value='Russia'>Russia</option>
                                                                            <option value='Rwanda'>Rwanda</option>
                                                                            <option value='Saint Kitts and Nevis'>Saint
                                                                                Kitts and Nevis</option>
                                                                            <option value='Saint Lucia'>Saint Lucia
                                                                            </option>
                                                                            <option value='Saint Vincent and the Grenadines'>
                                                                                Saint Vincent and the Grenadines
                                                                            </option>
                                                                            <option value='Samoa'>Samoa</option>
                                                                            <option value='San Marino'>San Marino
                                                                            </option>
                                                                            <option value='Sao Tome and Principe'>Sao
                                                                                Tome and Principe</option>
                                                                            <option value='Saudi Arabia'>Saudi Arabia
                                                                            </option>
                                                                            <option value='Senegal'>Senegal</option>
                                                                            <option value='Serbia'>Serbia</option>
                                                                            <option value='Seychelles'>Seychelles
                                                                            </option>
                                                                            <option value='Sierra Leone'>Sierra Leone
                                                                            </option>
                                                                            <option value='Singapore'>Singapore</option>
                                                                            <option value='Slovakia'>Slovakia</option>
                                                                            <option value='Slovenia'>Slovenia</option>
                                                                            <option value='Solomon Islands'>Solomon
                                                                                Islands</option>
                                                                            <option value='Somalia'>Somalia</option>
                                                                            <option value='South Africa'>South Africa
                                                                            </option>
                                                                            <option value='South Korea'>South Korea
                                                                            </option>
                                                                            <option value='South Sudan'>South Sudan
                                                                            </option>
                                                                            <option value='Spain'>Spain</option>
                                                                            <option value='Sri Lanka'>Sri Lanka</option>
                                                                            <option value='Sudan'>Sudan</option>
                                                                            <option value='Suriname'>Suriname</option>
                                                                            <option value='Sweden'>Sweden</option>
                                                                            <option value='Switzerland'>Switzerland
                                                                            </option>
                                                                            <option value='Syria'>Syria</option>
                                                                            <option value='Tajikistan'>Tajikistan
                                                                            </option>
                                                                            <option value='Tanzania'>Tanzania</option>
                                                                            <option value='Thailand'>Thailand</option>
                                                                            <option value='Timor-Leste'>Timor-Leste
                                                                            </option>
                                                                            <option value='Togo'>Togo</option>
                                                                            <option value='Tonga'>Tonga</option>
                                                                            <option value='Trinidad and Tobago'>Trinidad
                                                                                and Tobago</option>
                                                                            <option value='Tunisia'>Tunisia</option>
                                                                            <option value='Turkey'>Turkey</option>
                                                                            <option value='Turkmenistan'>Turkmenistan
                                                                            </option>
                                                                            <option value='Tuvalu'>Tuvalu</option>
                                                                            <option value='Uganda'>Uganda</option>
                                                                            <option value='Ukraine'>Ukraine</option>
                                                                            <option value='United Arab Emirates (UAE)'>
                                                                                United Arab Emirates (UAE)</option>
                                                                            <option value='United Kingdom (UK)'>United
                                                                                Kingdom (UK)</option>
                                                                            <option value='United States of America (USA)'>
                                                                                United States of America (USA)</option>
                                                                            <option value='Uruguay'>Uruguay</option>
                                                                            <option value='Uzbekistan'>Uzbekistan
                                                                            </option>
                                                                            <option value='Vanuatu'>Vanuatu</option>
                                                                            <option value='Vatican City (Holy See)'>
                                                                                Vatican City (Holy See)</option>
                                                                            <option value='Venezuela'>Venezuela</option>
                                                                            <option value='Vietnam'>Vietnam</option>
                                                                            <option value='Yemen'>Yemen</option>
                                                                            <option value='Zambia'>Zambia</option>
                                                                            <option value='Zimbabwe'>Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_5" class="gfield gfield--type-number field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_5"><label class='gfield_label gform-field-label' for='input_1_5'>Number of travelers</label>
                                                                    <div class='ginput_container ginput_container_number'>
                                                                        <input name='input_5' id='input_1_5' type='number' step='any' value='' class='medium' aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_6" class="gfield gfield--type-text field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_6"><label class='gfield_label gform-field-label' for='input_1_6'>Tentative trip length (in
                                                                        days)</label>
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_6' id='input_1_6' type='text' value='' class='medium' aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_7" class="gfield gfield--type-date gfield--input-type-datepicker gfield--datepicker-default-icon field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_7"><label class='gfield_label gform-field-label' for='input_1_7'>Tentative departure date
                                                                        (MM/DD/YYYY)</label>
                                                                    <div class='ginput_container ginput_container_date'>
                                                                        <input name='input_7' id='input_1_7' type='text' value='' class='datepicker gform-datepicker mdy datepicker_with_icon gdatepicker_with_icon' placeholder='mm/dd/yyyy' aria-describedby="input_1_7_date_format" aria-invalid="false" /> <span id='input_1_7_date_format' class='screen-reader-text'>MM slash DD slash
                                                                            YYYY</span>
                                                                    </div> <input type='hidden' id='gforms_calendar_icon_input_1_7' class='gform_hidden' value='../../wp-content/plugins/gravityforms/images/datepicker/datepicker.svg' />
                                                                </li>
                                                                <li id="field_1_8" class="gfield gfield--type-checkbox gfield--type-choice field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_8"><label class='gfield_label gform-field-label gfield_label_before_complex'>Travel
                                                                        interests</label>
                                                                    <div class='ginput_container ginput_container_checkbox'>
                                                                        <ul class='gfield_checkbox' id='input_1_8'>
                                                                            <li class='gchoice gchoice_1_8_1'> <input class='gfield-choice-input' name='input_8.1' type='checkbox' value='Art &amp; Architecture' id='choice_1_8_1' /> <label for='choice_1_8_1' id='label_1_8_1' class='gform-field-label gform-field-label--type-inline'>Art
                                                                                    &amp; Architecture</label></li>
                                                                            <li class='gchoice gchoice_1_8_2'> <input class='gfield-choice-input' name='input_8.2' type='checkbox' value='History' id='choice_1_8_2' />
                                                                                <label for='choice_1_8_2' id='label_1_8_2' class='gform-field-label gform-field-label--type-inline'>History</label>
                                                                            </li>
                                                                            <li class='gchoice gchoice_1_8_3'> <input class='gfield-choice-input' name='input_8.3' type='checkbox' value='Cultural Immersion' id='choice_1_8_3' /> <label for='choice_1_8_3' id='label_1_8_3' class='gform-field-label gform-field-label--type-inline'>Cultural
                                                                                    Immersion</label></li>
                                                                            <li class='gchoice gchoice_1_8_4'> <input class='gfield-choice-input' name='input_8.4' type='checkbox' value='Food' id='choice_1_8_4' />
                                                                                <label for='choice_1_8_4' id='label_1_8_4' class='gform-field-label gform-field-label--type-inline'>Food</label>
                                                                            </li>
                                                                            <li class='gchoice gchoice_1_8_5'> <input class='gfield-choice-input' name='input_8.5' type='checkbox' value='Relaxation' id='choice_1_8_5' /> <label for='choice_1_8_5' id='label_1_8_5' class='gform-field-label gform-field-label--type-inline'>Relaxation</label>
                                                                            </li>
                                                                            <li class='gchoice gchoice_1_8_6'> <input class='gfield-choice-input' name='input_8.6' type='checkbox' value='Nature &amp; wildlife' id='choice_1_8_6' /> <label for='choice_1_8_6' id='label_1_8_6' class='gform-field-label gform-field-label--type-inline'>Nature
                                                                                    &amp; wildlife</label></li>
                                                                            <li class='gchoice gchoice_1_8_7'> <input class='gfield-choice-input' name='input_8.7' type='checkbox' value='Expeditions' id='choice_1_8_7' /> <label for='choice_1_8_7' id='label_1_8_7' class='gform-field-label gform-field-label--type-inline'>Expeditions</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_13" class="gfield gfield--type-text field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_13"><label class='gfield_label gform-field-label' for='input_1_13'>Is there a specific trip on our
                                                                        website that you’re inquiring about? If yes,
                                                                        please tell us which one</label>
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_13' id='input_1_13' type='text' value='' class='medium' aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_9" class="gfield gfield--type-select gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_9"><label class='gfield_label gform-field-label' for='input_1_9'>How did you discover
                                                                        WildChina<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_select'>
                                                                        <select name='input_9' id='input_1_9' class='medium gfield_select' aria-required="true" aria-invalid="false">
                                                                            <option value='Traveled with WildChina before'>
                                                                                Traveled with WildChina before</option>
                                                                            <option value='Referred by a friend'>
                                                                                Referred by a friend</option>
                                                                            <option value='Online search'>Online search
                                                                            </option>
                                                                            <option value='Tripadvisor'>Tripadvisor
                                                                            </option>
                                                                            <option value='Social media'>Social media
                                                                            </option>
                                                                            <option value='WildChina’s WeChat account'>
                                                                                WildChina’s WeChat account</option>
                                                                            <option value='Media coverage'>Media
                                                                                coverage</option>
                                                                            <option value='Trade show or event'>Trade
                                                                                show or event</option>
                                                                            <option value='Consortium'>Consortium
                                                                            </option>
                                                                            <option value='Other'>Other</option>
                                                                        </select>
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_10" class="gfield gfield--type-text field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_10"><label class='gfield_label gform-field-label' for='input_1_10'>Anything else you&#039;d like
                                                                        to share with us so we can better customize your
                                                                        journey?</label>
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_10' id='input_1_10' type='text' value='' class='medium' aria-invalid="false" />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_11" class="gfield gfield--type-radio gfield--type-choice gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_11"><label class='gfield_label gform-field-label'>Would you
                                                                        like to subscribe to WildChina&#039;s monthly
                                                                        newsletter to stay in the loop with our
                                                                        journeys, events and other updates from
                                                                        China?<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_radio'>
                                                                        <ul class='gfield_radio' id='input_1_11'>
                                                                            <li class='gchoice gchoice_1_11_0'> <input name='input_11' type='radio' value='Yes' id='choice_1_11_0' />
                                                                                <label for='choice_1_11_0' id='label_1_11_0' class='gform-field-label gform-field-label--type-inline'>Yes</label>
                                                                            </li>
                                                                            <li class='gchoice gchoice_1_11_1'> <input name='input_11' type='radio' value='No' id='choice_1_11_1' />
                                                                                <label for='choice_1_11_1' id='label_1_11_1' class='gform-field-label gform-field-label--type-inline'>No</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_12" class="gfield gfield--type-radio gfield--type-choice gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_12"><label class='gfield_label gform-field-label'>Please
                                                                        confirm below that you&#039;ve read our terms
                                                                        and conditions:<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                    <div class='ginput_container ginput_container_radio'>
                                                                        <ul class='gfield_radio' id='input_1_12'>
                                                                            <li class='gchoice gchoice_1_12_0'> <input name='input_12' type='radio' value='Yes, I&#039;ve read the &lt;a href=_https_/wildchina.com/terms/_terms.html and conditions&lt;/a&gt;' id='choice_1_12_0' /> <label for='choice_1_12_0' id='label_1_12_0' class='gform-field-label gform-field-label--type-inline'>Yes,
                                                                                    I've read the <a href="#">terms
                                                                                        and conditions</a></label></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_14" class="gfield gfield--type-hidden gform_hidden field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_14">
                                                                    <div class='ginput_container ginput_container_text'>
                                                                        <input name='input_14' id='input_1_14' type='hidden' class='gform_hidden' aria-invalid="false" value='WildChina Website' />
                                                                    </div>
                                                                </li>
                                                                <li id="field_1_15" class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below field_validation_below gfield_visibility_visible" data-js-reload="field_1_15"><label class='gfield_label gform-field-label' for='input_1_15'>Comments</label>
                                                                    <div class='ginput_container'><input name='input_15' id='input_1_15' type='text' value='' autocomplete='new-password' /></div>
                                                                    <div class='gfield_description' id='gfield_description_1_15'>This field is for
                                                                        validation purposes and should be left
                                                                        unchanged.</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_1' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_1"]){return false;}  if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} if( !jQuery("#gform_1")[0].checkValidity || jQuery("#gform_1")[0].checkValidity()){window["gf_submitting_1"]=true;}  jQuery("#gform_1").trigger("submit",[true]); }' />
                                                            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' /> <input type='hidden' class='gform_hidden' name='gform_submit' value='1' /> <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                                            <input type='hidden' class='gform_hidden' name='state_1' value='WyJbXSIsIjEyMzlkMjQ1Yjk3OTM1ZTM5YTUwNDk0ZmUxZWZlNjk0Il0=' />
                                                            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' /> <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' /> <input type='hidden' name='gform_field_values' value='' />
                                                        </div>
                                                    </form>
                                                </div>
                                                <script type="text/javascript">
                                                    /* <![CDATA[ */
                                                    gform.initializeOnLoaded(function() {
                                                        gformInitSpinner(1, '../../wp-content/plugins/gravityforms/images/spinner.svg', true);
                                                        jQuery('#gform_ajax_frame_1').on('load', function() {
                                                            var contents = jQuery(this).contents().find('*').html();
                                                            var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                                            if (!is_postback) {
                                                                return;
                                                            }
                                                            var form_content = jQuery(this).contents().find('#gform_wrapper_1');
                                                            var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;
                                                            var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                                            var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                                            var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                                                            if (is_form) {
                                                                jQuery('#gform_wrapper_1').html(form_content.html());
                                                                if (form_content.hasClass('gform_validation_error')) {
                                                                    jQuery('#gform_wrapper_1').addClass('gform_validation_error');
                                                                } else {
                                                                    jQuery('#gform_wrapper_1').removeClass('gform_validation_error');
                                                                }
                                                                setTimeout(function() {
                                                                    /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                                                }, 50);
                                                                if (window['gformInitDatepicker']) {
                                                                    gformInitDatepicker();
                                                                }
                                                                if (window['gformInitPriceFields']) {
                                                                    gformInitPriceFields();
                                                                }
                                                                var current_page = jQuery('#gform_source_page_number_1').val();
                                                                gformInitSpinner(1, '../../wp-content/plugins/gravityforms/images/spinner.svg', true);
                                                                jQuery(document).trigger('gform_page_loaded', [1, current_page]);
                                                                window['gf_submitting_1'] = false;
                                                            } else if (!is_redirect) {
                                                                var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                                                if (!confirmation_content) {
                                                                    confirmation_content = contents;
                                                                }
                                                                jQuery('#gform_wrapper_1').replaceWith(confirmation_content);
                                                                jQuery(document).trigger('gform_confirmation_loaded', [1]);
                                                                window['gf_submitting_1'] = false;
                                                                wp.a11y.speak(jQuery('#gform_confirmation_message_1').text());
                                                            } else {
                                                                jQuery('#gform_1').append(contents);
                                                                if (window['gformRedirect']) {
                                                                    gformRedirect();
                                                                }
                                                            }
                                                            jQuery(document).trigger("gform_pre_post_render", [{
                                                                formId: "1",
                                                                currentPage: "current_page",
                                                                abort: function() {
                                                                    this.preventDefault();
                                                                }
                                                            }]);
                                                            if (event && event.defaultPrevented) {
                                                                return;
                                                            }
                                                            const gformWrapperDiv = document.getElementById("gform_wrapper_1");
                                                            if (gformWrapperDiv) {
                                                                const visibilitySpan = document.createElement("span");
                                                                visibilitySpan.id = "gform_visibility_test_1";
                                                                gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
                                                            }
                                                            const visibilityTestDiv = document.getElementById("gform_visibility_test_1");
                                                            let postRenderFired = false;

                                                            function triggerPostRender() {
                                                                if (postRenderFired) {
                                                                    return;
                                                                }
                                                                postRenderFired = true;
                                                                jQuery(document).trigger('gform_post_render', [1, current_page]);
                                                                gform.utils.trigger({
                                                                    event: 'gform/postRender',
                                                                    native: false,
                                                                    data: {
                                                                        formId: 1,
                                                                        currentPage: current_page
                                                                    }
                                                                });
                                                                if (visibilityTestDiv) {
                                                                    visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
                                                                }
                                                            }

                                                            function debounce(func, wait, immediate) {
                                                                var timeout;
                                                                return function() {
                                                                    var context = this,
                                                                        args = arguments;
                                                                    var later = function() {
                                                                        timeout = null;
                                                                        if (!immediate) func.apply(context, args);
                                                                    };
                                                                    var callNow = immediate && !timeout;
                                                                    clearTimeout(timeout);
                                                                    timeout = setTimeout(later, wait);
                                                                    if (callNow) func.apply(context, args);
                                                                };
                                                            }
                                                            const debouncedTriggerPostRender = debounce(function() {
                                                                triggerPostRender();
                                                            }, 200);
                                                            if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
                                                                const observer = new MutationObserver((mutations) => {
                                                                    mutations.forEach((mutation) => {
                                                                        if (mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null) {
                                                                            debouncedTriggerPostRender();
                                                                            observer.disconnect();
                                                                        }
                                                                    });
                                                                });
                                                                observer.observe(document.body, {
                                                                    attributes: true,
                                                                    childList: false,
                                                                    subtree: true,
                                                                    attributeFilter: ['style', 'class'],
                                                                });
                                                            } else {
                                                                triggerPostRender();
                                                            }
                                                        });
                                                    });
                                                    /* ]]> */
                                                </script>
                                            </div>
                                            <div class="tourmaster-booking-bottom clearfix">
                                                <div class="tourmaster-save-wish-list" data-tmlb="wish-list-login"><span class="tourmaster-save-wish-list-icon-wrap"><i class="tourmaster-icon-active fa fa-heart"></i><i class="tourmaster-icon-inactive fa fa-heart-o"></i></span>Save
                                                    To Wish List</div>
                                                <div class="tourmaster-lightbox-content-wrap tourmaster-style-1" data-tmlb-id="wish-list-login">
                                                    <div class="tourmaster-lightbox-head">
                                                        <h3 class="tourmaster-lightbox-title">Adding item to wishlist
                                                            requires an account</h3><i class="tourmaster-lightbox-close icon_close"></i>
                                                    </div>
                                                    <div class="tourmaster-lightbox-content">
                                                        <div class="tourmaster-login-form2-wrap clearfix">
                                                            <form class="tourmaster-login-form2 tourmaster-form-field tourmaster-with-border" method="post" action="">
                                                                <h3 class="tourmaster-login-title">Already A Member?
                                                                </h3>
                                                                <div class="tourmaster-login-form-fields clearfix">
                                                                    <p class="tourmaster-login-user"> <label>Username or
                                                                            E-mail</label> <input type="text" name="log" /></p>
                                                                    <p class="tourmaster-login-pass">
                                                                        <label>Password</label> <input type="password" name="pwd" />
                                                                    </p>
                                                                </div>
                                                                <p class="tourmaster-login-submit"> <input type="submit" name="wp-submit" class="tourmaster-button" value="Sign In!" /></p>
                                                                <p class="tourmaster-login-lost-password"> <a href="">Forget
                                                                        Password?</a></p> <input type="hidden" name="rememberme" value="forever" /> <input type="hidden" name="redirect_to" value="/tour/hiking-the-great-wall-jiankou-to-mutianyu/" />
                                                                <input type="hidden" name="source" value="tm" />
                                                            </form>
                                                            <div class="tourmaster-login2-right">
                                                                <h3 class="tourmaster-login2-right-title">Don&#039;t
                                                                    have an account? Create one.</h3>
                                                                <div class="tourmaster-login2-right-content">
                                                                    <div class="tourmaster-login2-right-description">
                                                                        When you book with an account, you will be able
                                                                        to track your payment status, track the
                                                                        confirmation and you can also rate the tour
                                                                        after you finished the tour.</div> <a class="tourmaster-button tourmaster-register-button" href="">Sign
                                                                        Up</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tourmaster-view-count"><i class="fa fa-eye"></i><span class="tourmaster-view-count-text">6249</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tourmaster-tour-booking-bar-widget  traveltour-sidebar-area">
                                        <div id="custom_html-8" class="widget_text widget widget_custom_html traveltour-widget">
                                            <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Have questions?</span></h3><span class="clear"></span>
                                            <div class="textwidget custom-html-widget">Don't hesitate to reach out. Our
                                                travel designers will be happy to guide you! <br>
                                                <hr />
                                                <p><i class="fa fa-phone" style="margin-right: 5px ;"></i><strong>China:</strong><br />+86
                                                    10 6465 6602</p>
                                                <p><i class="fa fa-phone" style="margin-right: 5px ;"></i><strong>USA:</strong><br />+1
                                                    888 902 8808 (Toll Free)</p>
                                                <p><i class="fa fa-phone" style="margin-right: 5px ;"></i><strong>Email:</strong><br /><a href="mailto:info@wildchina.com">info@wildchina.com</a></p>
                                                <hr /> <span class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align gdlr-direction-horizontal" style="padding-bottom: 0px ;display: block ;"><a href="https://www.facebook.com/wildchina" target="_blank" class="gdlr-core-social-network-icon" title="facebook" rel="noopener"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/company/wildchina/" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" rel="noopener"><i class="fa fa-linkedin"></i></a><a href="https://twitter.com/WildChina" target="_blank" class="gdlr-core-social-network-icon" title="twitter" rel="noopener"><i class="fa fa-twitter"></i></a><a href="https://www.youtube.com/channel/UCC01f8ihjBIrPnzrmZSqkqA" target="_blank" class="gdlr-core-social-network-icon" title="youtube" rel="noopener"><i class="fa fa-youtube"></i></a><a href="https://www.instagram.com/wildchinatravel" target="_blank" class="gdlr-core-social-network-icon" title="instagram" rel="noopener"><i class="fa fa-instagram"></i></a></span>
                                                <hr />
                                            </div>
                                        </div>
                                        <div id="text-15" class="widget widget_text traveltour-widget">
                                            <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Follow us on WeChat!</span></h3>
                                            <span class="clear"></span>
                                            <div class="textwidget">
                                                <p>If you use WeChat, scan this QR code to follow our official account,
                                                    WildChina_Journeys. On WeChat, you&#8217;ll have China-travel
                                                    inspiration at your fingertips and we have travel designers on call
                                                    24/7 to answer your questions.</p>
                                                <p><img decoding="async" class="alignnone size-full wp-image-27439" src="../../wp-content/uploads/2020/08/wechat.png" alt="" width="344" height="344" srcset="../..//wp-content/uploads/2020/08/wechat.png 344w, ../..//wp-content/uploads/2020/08/wechat-300x300.png 300w, ../../wp-content/uploads/2020/08/wechat-150x150.png 150w" sizes="(max-width: 344px) 100vw, 344px" /></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-tour-info-outer">
                            <div class="tourmaster-tour-info-outer-container tourmaster-container">
                                <div class="tourmaster-tour-info-wrap clearfix">
                                    <div class="tourmaster-tour-info tourmaster-tour-info-duration-text tourmaster-item-pdlr">
                                        <i class="icon_clock_alt"></i>8:00 AM
                                    </div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-availability tourmaster-item-pdlr">
                                        <i class="fa fa-calendar"></i> Every Saturday from March 25th, 2023
                                    </div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-departure-location tourmaster-item-pdlr">
                                        <i class="flaticon-takeoff-the-plane"></i>Beijing
                                    </div>
                                    <div class="tourmaster-tour-info tourmaster-tour-info-minimum-age tourmaster-item-pdlr">
                                        <i class="fa fa-user"></i>Min Age : 8
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-single-tour-content-wrap">
                            <div class="gdlr-core-page-builder-body clearfix">
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="tourmaster-content-navigation-item-wrap clearfix" style="padding-bottom: 0px;">
                                                    <div class="tourmaster-content-navigation-item-outer" id="tourmaster-content-navigation-item-outer" style="border-color: #e0e0e0;border-bottom-width: 1px;border-bottom-style: solid;">
                                                        <div class="tourmaster-content-navigation-item-container tourmaster-container">
                                                            <div class="tourmaster-content-navigation-item tourmaster-item-pdlr">
                                                                <a class="tourmaster-content-navigation-tab tourmaster-active" href="#about">About</a><a class="tourmaster-content-navigation-tab " href="#photos">Photos</a><a class="tourmaster-content-navigation-tab " href="#WhatWeLove">What We Love</a><a class="tourmaster-content-navigation-tab " href="#detail">Details</a>
                                                                <div class="tourmaster-content-navigation-slider" style="background-color: #1d4558;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 0px 0px;" data-skin="Blue Icon" id="about">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="font-size: 22px ;font-weight: 300 ;letter-spacing: 1px ;text-transform: none ;">
                                                                    <p>​​Listed as one of the seven wonders of the
                                                                        world, the Great Wall of China certainly needs
                                                                        no introduction. A prevailing relic of the Ming
                                                                        Dynasty, the Formidable and mighty Great Wall
                                                                        intertwines with the mountainous landscape in
                                                                        elaborate convolutions, often referred to as the
                                                                        dragon within this landscape. Join us on a
                                                                        less-traveled section of this historic
                                                                        structure, as we hike along an eastern section
                                                                        of the Great Wall from Jiankou to Mutianyu.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #002e40 ;">
                                                                        About this Journey<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p>​To many China-hands the mention of
                                                                        &#8220;Jiankou&#8221; summons images of
                                                                        crumbling steps descending the sheerest of
                                                                        Beijing&#8217;s northern mountain slopes, a
                                                                        scene to make even the inner Alex Honnold in the
                                                                        best of us shudder (though of course Honnold
                                                                        himself probably wouldn&#8217;t even bat an
                                                                        eye).</p>
                                                                    <p>Luckily, we&#8217;ll be turning on our heals upon
                                                                        arriving at this death-defying hike and trotting
                                                                        south instead, making the still difficult,
                                                                        though less dangerous, trek from Jiankou over to
                                                                        Mutianyu.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="WhatWeLove">
                                    <div class="gdlr-core-pbf-background-wrap" style="border-radius: 20px 20px 20px 20px;-moz-border-radius: 20px 20px 20px 20px;-webkit-border-radius: 20px 20px 20px 20px;">
                                    </div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-1">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 15px 15px 15px 15px;padding: 20px 20px 20px 20px;border-radius: 20px 20px 20px 20px;-moz-border-radius: 20px 20px 20px 20px;-webkit-border-radius: 20px 20px 20px 20px;">
                                                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f2f2f2 ;border-radius: 20px 20px 20px 20px;-moz-border-radius: 20px 20px 20px 20px;-webkit-border-radius: 20px 20px 20px 20px;">
                                                    </div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #002e40 ;">
                                                                        What We Love<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-with-divider gdlr-core-left-align gdlr-core-style-1">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="border-color: #e2e2e2 ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Trekking
                                                                                along both a "wild" section and a
                                                                                restored section of the Great
                                                                                Wall</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix" style="border-color: #e2e2e2 ;"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Learning
                                                                                about the Wall's greater history and
                                                                                lesser-known tidbits from a local
                                                                                guide</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-section">
                                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 25px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-width: 0px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="detail">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                                                        <span class="gdlr-core-title-item-left-icon" style="font-size: 18px ;"><i class="fa fa-file-text-o"></i></span>Details<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>Duration:</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-2">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p>9 to 10 hours</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>When:</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-3">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 10px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix">
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Every
                                                                                Saturday from March 25th,
                                                                                2023</span><span class="gdlr-core-icon-list-caption" style="font-size: 16px ;font-weight: 400 ;">8:00
                                                                                AM</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>Additional
                                                                            Information</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-4">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 10px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Minimum
                                                                                10 Pax, Maximum 16 Pax</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Child
                                                                                price is the same as adult, kids should
                                                                                be at least 8 years old and
                                                                                above.</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-size: 16px ;font-weight: 400 ;">Meet
                                                                                at the WildChina Office</span><span class="gdlr-core-icon-list-caption" style="font-size: 16px ;font-weight: 400 ;">803
                                                                                Oriental Place, 9 East Dongfang Rd,
                                                                                Chaoyang District</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="detail">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>What&#8217;s
                                                                            included</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-5">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 10px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">WildChina
                                                                                English-speaking guide </span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Group
                                                                                transportation from downtown to/from
                                                                                Great Wall</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Shuttle bus
                                                                                at Mutianyu</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Admission
                                                                                Tickets</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-check" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Basic
                                                                                insurance </span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 19px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>What&#8217;s
                                                                            Excluded</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-style-1" style="padding-bottom: 10px ;">
                                                                <ul>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-close" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;"> Cable
                                                                                car/toboggan costs at Mutianyu Great
                                                                                Wall</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-close" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Expenses or
                                                                                excursions of a personal nature </span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-close" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Personal
                                                                                hiking supplies (ex. backpack, hiking
                                                                                boots, etc.)</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-close" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">All gratitude
                                                                                for WildChina guide and driver</span>
                                                                        </div>
                                                                    </li>
                                                                    <li class=" gdlr-core-skin-divider clearfix"><span class="gdlr-core-icon-list-icon-wrap gdlr-core-left"><i class="gdlr-core-icon-list-icon fa fa-close" style="color: #1d4558 ;"></i></span>
                                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                                            <span class="gdlr-core-icon-list-content" style="font-weight: 400 ;">Meals</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="stop-name"><strong>Note:</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-40" id="gdlr-core-column-6">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p>Keep in mind that meals are not included. We
                                                                        recommend bringing your own favorite lunch box,
                                                                        and we will find a spot for lunch break during
                                                                        the hike.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 15px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon" id="photos">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                                                        Photos<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr ">
                                                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="navigation">
                                                                    <ul class="slides">
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay.jpg" width="1200" height="800" srcset="../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay-400x266.jpg 400w, ../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay-600x400.jpg 600w, ../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay-800x533.jpg 800w, ../../wp-content/uploads/2022/11/mutianyu-4822218-Image-by-H.-Hach-from-Pixabay.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay.jpg" width="1200" height="784" srcset="../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay-400x261.jpg 400w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay-600x392.jpg 600w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay-800x522.jpg 800w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-jawed-iqbal-from-Pixabay.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/i-qBhGCt5-X3.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/i-qBhGCt5-X3.jpg" width="1200" height="801" srcset="../../wp-content/uploads/2022/11/i-qBhGCt5-X3-400x267.jpg 400w, ../../wp-content/uploads/2022/11/i-qBhGCt5-X3-600x400.jpg 600w, ../../wp-content/uploads/2022/11/i-qBhGCt5-X3-800x534.jpg 800w, ../../wp-content/uploads/2022/11/i-qBhGCt5-X3.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina.jpg" width="1200" height="800" srcset="../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina-400x266.jpg 400w, ../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina-600x400.jpg 600w, ../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina-800x533.jpg 800w, ../../wp-content/uploads/2022/11/Beijing-Great-Wall.-Photo-credit-WildChina.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW.jpg" width="1200" height="800" srcset="../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW-400x266.jpg 400w, ../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW-600x400.jpg 600w, ../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW-800x533.jpg 800w, ../../wp-content/uploads/2022/11/The-Great-Wall-Beijing-WOW.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image.jpg" width="1200" height="801" srcset="../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image-400x267.jpg 400w, ../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image-600x400.jpg 600w, ../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image-800x534.jpg 800w, ../../wp-content/uploads/2022/11/Great-Wall-Snow-Beijing-Shutterstock-Image.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu.jpg" width="1200" height="800" srcset="../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu-400x266.jpg 400w, ../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu-600x400.jpg 600w, ../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu-800x533.jpg 800w, ../../wp-content/uploads/2022/11/i-Cb99Pzk-X3_mutianyu.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                                                <a class="gdlr-core-ilightbox gdlr-core-js " href="../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay.jpg" data-ilightbox-group="gdlr-core-img-group-1" data-type="image"><img src="../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay.jpg" width="1200" height="800" srcset="../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay-400x266.jpg 400w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay-600x400.jpg 600w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay-800x533.jpg 800w, ../../wp-content/uploads/2022/11/Great-Wall-Image-by-JLB1988-from-Pixabay.jpg 1200w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="Great Wall of China" /></a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-section">
                                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-social-share-item gdlr-core-item-pdb  gdlr-core-right-align gdlr-core-social-share-left-text gdlr-core-item-mglr gdlr-core-style-plain" style="padding-bottom: 10px ;"><span class="gdlr-core-social-share-count gdlr-core-skin-title" style="color: #002e40 ;"><span class="gdlr-core-suffix">SHARE THIS
                                                        JOURNEY</span><span class="gdlr-core-divider gdlr-core-skin-divider" style="border-color: #002e40 ;"></span></span>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-top: 10px ;margin-bottom: 25px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-width: 2px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 20px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-7">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 10px 10px 10px 10px;padding: 40px 0px 40px 0px;border-radius: 15px 15px 15px 15px;-moz-border-radius: 15px 15px 15px 15px;-webkit-border-radius: 15px 15px 15px 15px;">
                                                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f2f2f2 ;border-radius: 15px 15px 15px 15px;-moz-border-radius: 15px 15px 15px 15px;-webkit-border-radius: 15px 15px 15px 15px;">
                                                    </div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;" id="hotels">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                                                        Why WildChina<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">
                                                                <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                                    <p class="custom-wc-header"><strong>We’re on the
                                                                            ground with you</strong></p>
                                                                    <p>Our team of advisors will design every detail of
                                                                        the trip with you through close consultation,
                                                                        then orchestrate your entire journey while on
                                                                        the ground. We’re in the same time zone as you,
                                                                        so we can fulfill requests and handle issues
                                                                        without a hitch. With over 40 staff in Beijing
                                                                        and an expansive network of operational partners
                                                                        across the country, we have the manpower to
                                                                        ensure your journey is safe, reliable and
                                                                        comfortable from beginning to end.</p>
                                                                    <p class="custom-wc-header"><strong>Your trip, your
                                                                            way</strong></p>
                                                                    <p>Flexibility is our highest-ranking compliment. We
                                                                        pull off journeys for pioneers with a 6-hour
                                                                        layover to Hollywood’s elite, and everywhere in
                                                                        between. Our team regularly pulls off
                                                                        unprecedented logistical feats; nearly any time
                                                                        frame or budget is within our realm. No matter
                                                                        how you wish to experience China, we are here to
                                                                        bring that dream to life.</p>
                                                                    <p class="custom-wc-header"><strong>We embody
                                                                            passion</strong></p>
                                                                    <p>WildChina guides are carefully handpicked for
                                                                        their knowledge and charisma, then meticulously
                                                                        trained to maintain our exceptional service
                                                                        standards. They are expert storytellers and
                                                                        passionate natives of the regions where they
                                                                        guide, having the perfect combination of local
                                                                        insights and service know-how to bring you
                                                                        seamless once-in-a- lifetime moments all across
                                                                        China.</p>
                                                                    <p class="custom-wc-header"><strong>The little
                                                                            things, the big picture</strong></p>
                                                                    <p>Supporting inspired local economies allows you to
                                                                        experience the soul of the destination, while
                                                                        also protecting and cultivating China’s
                                                                        artisanal culture. From watching artisans hand
                                                                        make shoes in Yunnan, to picking organic
                                                                        vegetables for dinner on a local farm in Fujian,
                                                                        our tours are designed to showcase and protect
                                                                        China’s heritage, both natural and human.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-section">
                                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 25px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-width: 2px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" data-skin="Blue Icon">
                                    <div class="gdlr-core-pbf-background-wrap"></div>
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 35px ;" id="hotels">
                                                                <div class="gdlr-core-title-item-title-wrap">
                                                                    <h6 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
                                                                        Related Articles<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-8">
                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 10px 10px 10px 10px;padding: 0px 0px 0px 0px;border-radius: 0px 0px 0px 0px;-moz-border-radius: 0px 0px 0px 0px;-webkit-border-radius: 0px 0px 0px 0px;">
                                                    <div class="gdlr-core-pbf-background-wrap" style="border-radius: 0px 0px 0px 0px;-moz-border-radius: 0px 0px 0px 0px;-webkit-border-radius: 0px 0px 0px 0px;">
                                                    </div>
                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                                    <div class="gdlr-core-item-list-wrap gdlr-core-column-60 ">
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="#"><img src="{{asset('images/Great-Wall-Image-by-JLB1988-from-Pixabay.jpg')}}" alt="Fisherman in YangShuo" width="150" height="150" title="Li River" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="#">Beijing
                                                                                        Day Tours: How to Spend 72 Hours
                                                                                        or Less in Beijing</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#">September
                                                                                            8, 2017</a></span>
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                                        <span class="gdlr-core-head">
                                                                                            <i class="icon_folder-alt"></i>
                                                                                        </span>
                                                                                        <a href="#" rel="tag">Beijing</a>
                                                                                    </span>
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                        <span class="gdlr-core-head"><i class="icon_tags_alt"></i></span>
                                                                                        <a href="#" rel="tag">Beijing</a>
                                                                                        <span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Beijing
                                                                                            hutongs</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="#"><img src="{{asset('images/Great-Wall-Image-by-jawed-iqbal-from-Pixabay.jpg')}}" alt="Buddhist sculpture and art" width="150" height="150" title="Buddhist sculpture and art" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="#">Can
                                                                                        I breathe that?</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#">March
                                                                                            13, 2013</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span class="gdlr-core-head"><i class="icon_folder-alt"></i></span><a href="#" rel="tag">Insider
                                                                                            Tips</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Beijing</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag"><span class="gdlr-core-head"><i class="icon_tags_alt"></i></span><a href="#" rel="tag">First-timers</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Forbidden
                                                                                            City</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Guangxi</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Guizhou</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">wild
                                                                                            China</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">WildChina</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">WildChina
                                                                                            Travel</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="" rel="tag">Yunnan</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="Ethnic Minorities of ChinaEthnic Minorities of ChinaEthnic Minorities of Chinay-by-city-guide/"><img src="{{asset('images/Great-Wall-Image-by-jawed-iqbal-from-Pixabay.jpg')}}" alt="Ethnic Minorities of China" width="150" height="150" title="Ethnic Minorities of China" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="">Best
                                                                                        Chinese Food in China: A City by
                                                                                        City Guide</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#">November
                                                                                            10, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span class="gdlr-core-head"><i class="icon_folder-alt"></i></span><a href="#" rel="tag">Beijing</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Foodie
                                                                                            Finds</a><span class="gdlr-core-sep">,</span>
                                                                                        <a href="#" rel="tag">Xian</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="#"><img src="{{asset('images/Great-Wall-sunset-Image-by-u_2ui6kzp77g-from-Pixabay-001.jpg')}}" alt="Chinese door in Hutong alley" width="150" height="150" title="Chinese door in Hutong alley" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="#">Art
                                                                                        in Modern Beijing: An interview
                                                                                        with Peter Wynne, Manager of The
                                                                                        Opposite House</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><a href="#">September
                                                                                            22, 2015</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span class="gdlr-core-head"><i class="icon_folder-alt"></i></span><a href="#" rel="tag">Beijing</a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="#"><img src="{{asset('images/Great-Wall-Snow-Beijing-Shutterstock-Image.jpg')}}" alt="Chinese door in Hutong alley" width="150" height="150" title="Chinese door in Hutong alley" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="#">Eight
                                                                                        Places to Visit as China Emerges
                                                                                        From Coronavirus</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix  gdlr-core-style-large gdlr-core-style-1">
                                                                            <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                                <a href="#"><img src="{{asset('images/Beijing-Great-Wall.-Photo-credit-WildChina.jpg')}}" alt="" width="150" height="100" title="Yerba Buena（bushi" /></a>
                                                                            </div>
                                                                            <div class="gdlr-core-blog-widget-content">
                                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-weight: 600 ;"><a href="#">Sustainable
                                                                                        Sites: Green Initiatives in
                                                                                        China’s Cities</a></h3>
                                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_post_ajax" data-settings="{&quot;category&quot;:[&quot;beijing&quot;],&quot;tag&quot;:[&quot;countryside&quot;,&quot;great-wall-of-china&quot;],&quot;num-fetch&quot;:&quot;6&quot;,&quot;layout&quot;:&quot;fitrows&quot;,&quot;prepend-sticky&quot;:&quot;disable&quot;,&quot;show-thumbnail&quot;:&quot;enable&quot;,&quot;thumbnail-size&quot;:&quot;full&quot;,&quot;orderby&quot;:&quot;RAND(665)&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;blog-style&quot;:&quot;blog-widget&quot;,&quot;has-column&quot;:&quot;no&quot;,&quot;no-space&quot;:&quot;no&quot;,&quot;excerpt&quot;:&quot;specify-number&quot;,&quot;excerpt-number&quot;:&quot;25&quot;,&quot;column-size&quot;:60,&quot;item-size&quot;:&quot;large&quot;,&quot;filterer&quot;:&quot;none&quot;,&quot;filterer-align&quot;:&quot;center&quot;,&quot;show-read-more&quot;:&quot;button&quot;,&quot;meta-option&quot;:[&quot;date&quot;,&quot;category&quot;,&quot;tag&quot;],&quot;pagination&quot;:&quot;load-more&quot;,&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;&quot;,&quot;relation&quot;:&quot;or&quot;,&quot;pagination-style&quot;:&quot;default&quot;,&quot;pagination-align&quot;:&quot;default&quot;,&quot;offset&quot;:&quot;0&quot;,&quot;blog-full-style&quot;:&quot;style-1&quot;,&quot;blog-side-thumbnail-style&quot;:&quot;style-1&quot;,&quot;blog-column-style&quot;:&quot;style-3&quot;,&quot;blog-image-style&quot;:&quot;style-1&quot;,&quot;blog-widget-style&quot;:&quot;style-1&quot;,&quot;blog-widget-with-feature&quot;:&quot;disable&quot;,&quot;blog-full-alignment&quot;:&quot;left&quot;,&quot;blog-image-alignment&quot;:&quot;center&quot;,&quot;blog-list-with-frame&quot;:&quot;enable&quot;,&quot;always-show-overlay-content&quot;:&quot;enable&quot;,&quot;blog-image-thumbnail-overlay&quot;:&quot;none&quot;,&quot;blog-image-thumbnail-overlay-opacity&quot;:&quot;0.4&quot;,&quot;blog-image-thumbnail-overlay-color&quot;:&quot;#000000&quot;,&quot;enable-thumbnail-opacity-on-hover&quot;:&quot;enable&quot;,&quot;blog-image-initial-opacity&quot;:&quot;&quot;,&quot;enable-thumbnail-zoom-on-hover&quot;:&quot;enable&quot;,&quot;enable-thumbnail-grayscale-effect&quot;:&quot;disable&quot;,&quot;carousel-item-margin&quot;:&quot;&quot;,&quot;carousel-overflow&quot;:&quot;&quot;,&quot;carousel-scrolling-item-amount&quot;:&quot;1&quot;,&quot;carousel-autoslide&quot;:&quot;enable&quot;,&quot;carousel-navigation&quot;:&quot;navigation&quot;,&quot;carousel-navigation-show-on-hover&quot;:&quot;disable&quot;,&quot;carousel-navigation-align&quot;:&quot;center&quot;,&quot;carousel-navigation-left-icon&quot;:&quot;&quot;,&quot;carousel-navigation-right-icon&quot;:&quot;&quot;,&quot;carousel-navigation-icon-color&quot;:&quot;&quot;,&quot;carousel-navigation-icon-bg&quot;:&quot;&quot;,&quot;carousel-navigation-icon-padding&quot;:{&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;settings&quot;:&quot;link&quot;},&quot;carousel-navigation-icon-radius&quot;:&quot;&quot;,&quot;carousel-navigation-size&quot;:&quot;&quot;,&quot;carousel-navigation-margin&quot;:&quot;&quot;,&quot;carousel-navigation-icon-margin&quot;:&quot;&quot;,&quot;carousel-bullet-style&quot;:&quot;default&quot;,&quot;carousel-bullet-top-margin&quot;:&quot;&quot;,&quot;blog-widget-column&quot;:&quot;60&quot;,&quot;blog-widget-bottom-divider&quot;:&quot;disable&quot;,&quot;blog-image-excerpt-number&quot;:&quot;0&quot;,&quot;blog-date-feature&quot;:&quot;enable&quot;,&quot;read-more-button-text&quot;:&quot;Read More&quot;,&quot;filterer-bottom-margin&quot;:&quot;&quot;,&quot;blog-title-font-size&quot;:&quot;&quot;,&quot;blog-title-font-weight&quot;:&quot;600&quot;,&quot;blog-title-letter-spacing&quot;:&quot;&quot;,&quot;blog-title-text-transform&quot;:&quot;none&quot;,&quot;category-background-color&quot;:&quot;&quot;,&quot;thumbnail-date-background-color&quot;:&quot;&quot;,&quot;thumbnail-date-color&quot;:&quot;&quot;,&quot;frame-shadow-size&quot;:&quot;&quot;,&quot;frame-shadow-color&quot;:&quot;&quot;,&quot;frame-shadow-opacity&quot;:&quot;0.2&quot;,&quot;enable-move-up-shadow-effect&quot;:&quot;disable&quot;,&quot;move-up-effect-length&quot;:&quot;&quot;,&quot;frame-hover-shadow-size&quot;:&quot;&quot;,&quot;frame-hover-shadow-color&quot;:&quot;&quot;,&quot;frame-hover-shadow-opacity&quot;:&quot;0.2&quot;,&quot;blog-border-radius&quot;:&quot;&quot;,&quot;blog-frame-border-size&quot;:&quot;&quot;,&quot;blog-frame-border-color&quot;:&quot;&quot;,&quot;blog-frame-hover-border-color&quot;:&quot;&quot;,&quot;blog-frame-padding&quot;:{&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;settings&quot;:&quot;unlink&quot;},&quot;blog-image-overlay-content-padding&quot;:{&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;settings&quot;:&quot;unlink&quot;},&quot;margin-bottom&quot;:&quot;&quot;,&quot;padding-bottom&quot;:&quot;30px&quot;,&quot;title-align&quot;:&quot;left&quot;,&quot;title-left-media&quot;:&quot;icon&quot;,&quot;title-left-icon&quot;:&quot;&quot;,&quot;title-left-image&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;caption-position&quot;:&quot;top&quot;,&quot;read-more-style&quot;:&quot;default&quot;,&quot;read-more-text&quot;:&quot;Read More&quot;,&quot;read-more-link&quot;:&quot;&quot;,&quot;read-more-target&quot;:&quot;_self&quot;,&quot;title-size&quot;:&quot;41px&quot;,&quot;title-font-weight&quot;:&quot;&quot;,&quot;title-letter-spacing&quot;:&quot;&quot;,&quot;title-line-height&quot;:&quot;&quot;,&quot;title-font-style&quot;:&quot;&quot;,&quot;title-text-transform&quot;:&quot;uppercase&quot;,&quot;caption-size&quot;:&quot;16px&quot;,&quot;caption-font-weight&quot;:&quot;&quot;,&quot;caption-letter-spacing&quot;:&quot;&quot;,&quot;caption-font-style&quot;:&quot;&quot;,&quot;caption-text-transform&quot;:&quot;&quot;,&quot;caption-spaces&quot;:&quot;&quot;,&quot;read-more-size&quot;:&quot;14px&quot;,&quot;read-more-font-weight&quot;:&quot;&quot;,&quot;title-left-icon-color&quot;:&quot;&quot;,&quot;title-color&quot;:&quot;&quot;,&quot;caption-color&quot;:&quot;&quot;,&quot;read-more-color&quot;:&quot;&quot;,&quot;read-more-divider&quot;:&quot;style-1&quot;,&quot;read-more-divider-color&quot;:&quot;&quot;,&quot;title-wrap-bottom-margin&quot;:&quot;&quot;,&quot;title-carousel-nav-style&quot;:&quot;default&quot;,&quot;paged&quot;:1}" data-target="gdlr-core-blog-item-holder" data-target-action="append"><a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2">Load
                                                                        More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-section">
                                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 25px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-width: 2px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tourmaster-single-tour-read-more-gradient"></div>
                            <div class="tourmaster-single-tour-read-more-wrap">
                                <div class="tourmaster-container"><a class="tourmaster-button tourmaster-item-mglr" href="#">Read More</a></div>
                            </div>
                        </div>
                        <div class="tourmaster-single-related-tour tourmaster-tour-item tourmaster-style-grid-with-frame">
                            <div class="tourmaster-single-related-tour-container tourmaster-container">
                                <h3 class="tourmaster-single-related-tour-title tourmaster-item-pdlr">Related Tours</h3>
                                <div class="tourmaster-tour-item-holder clearfix ">
                                    <div class="gdlr-core-item-list  tourmaster-column-30 tourmaster-item-pdlr tourmaster-column-first">
                                        <div class="tourmaster-tour-grid  tourmaster-tour-frame tourmaster-tour-grid-style-1 tourmaster-price-right-title">
                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #e59732;">
                                                <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(229, 151, 50, 0.5);"></div>Small
                                                Group Travel
                                            </div>
                                            <div class="tourmaster-tour-grid-inner">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image "><a href="#"><img src="../../wp-content/uploads/2024/02/ChineseTreasures-GroupDept-1024x683.jpg" width="1024" height="683" srcset="../../wp-content/uploads/2024/02/ChineseTreasures-GroupDept-400x266.jpg 400w, ../../wp-content/uploads/2024/02/ChineseTreasures-GroupDept-600x400.jpg 600w, ../../wp-content/uploads/2024/02/ChineseTreasures-GroupDept-800x533.jpg 800w, ../../wp-content/uploads/2024/02/ChineseTreasures-GroupDept-1024x683.jpg 1024w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="" /></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background ">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="#">Chinese
                                                            Treasures</a></h3>
                                                    <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">
                                                            </span><span class="tourmaster-tail">$6,417</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text ">
                                                            <i class="icon_clock_alt"></i>14 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location ">
                                                            <i class="flaticon-takeoff-the-plane"></i>Beijing
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-return-location ">
                                                            <i class="flaticon-plane-landing"></i>Shanghai
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list  tourmaster-column-30 tourmaster-item-pdlr">
                                        <div class="tourmaster-tour-grid  tourmaster-tour-frame tourmaster-tour-grid-style-1 tourmaster-price-right-title">
                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff;background-color: #e59732;">
                                                <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(229, 151, 50, 0.5);"></div>Small
                                                Group Travel
                                            </div>
                                            <div class="tourmaster-tour-grid-inner">
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image "><a href="#"><img src="{{asset('/wp-content/uploads/2024/02/PandaWarriors_FamilyFun-1024x683.jpg')}}" width="1024" height="683" srcset="/wp-content/uploads/2024/02/PandaWarriors_FamilyFun-400x266.jpg 400w, ../../wp-content/uploads/2024/02/PandaWarriors_FamilyFun-600x400.jpg 600w, ../../wp-content/uploads/2024/02/PandaWarriors_FamilyFun-800x533.jpg 800w, ../../wp-content/uploads/2024/02/PandaWarriors_FamilyFun-1024x683.jpg 1024w" sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px" alt="" /></a></div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background ">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title"><a href="#">Pandas
                                                            and Warriors: Family Fun through China</a></h3>
                                                    <div class="tourmaster-tour-price-wrap "><span class="tourmaster-tour-price"><span class="tourmaster-head">
                                                            </span><span class="tourmaster-tail">$5,954</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text ">
                                                            <i class="icon_clock_alt"></i>14 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location ">
                                                            <i class="flaticon-takeoff-the-plane"></i>Beijing
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-return-location ">
                                                            <i class="flaticon-plane-landing"></i>Shanghai
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer  -->
            @include('partials.footer')
        </div>


        <link rel='stylesheet' id='gforms_reset_css-css' href="{{asset('/wp-content/plugins/gravityforms/legacy/css/formreset.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_datepicker_css-css' href="{{asset('/wp-content/plugins/gravityforms/legacy/css/datepicker.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_formsmain_css-css' href="{{asset('/wp-content/plugins/gravityforms/legacy/css/formsmain.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_ready_class_css-css' href="{{asset('/wp-content/plugins/gravityforms/legacy/css/readyclass.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_browsers_css-css' href="{{asset('/wp-content/plugins/gravityforms/legacy/css/browsers.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='mediaelement-css' href="{{asset('/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='wp-mediaelement-css' href="{{asset('/wp-includes/js/mediaelement/wp-mediaelement.min.css')}}" type='text/css' media='all' />
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
        <script type="text/javascript" src="{{asset('/wp-content/uploads/siteground-optimizer-assets/mec-tooltip-script.min.js')}}" id="mec-tooltip-script-js"></script>
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
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/swv.min.js" id="swv-js"></script>
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
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js" id="contact-form-7-js"></script>
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/gdlr-core-plugin.min.js" id="gdlr-core-plugin-js"></script>
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
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/gdlr-core-page-builder.min.js" id="gdlr-core-page-builder-js"></script>
        <script type="text/javascript" src="../../wp-content/plugins/sg-cachepress/assets/js/lazysizes.min.js" id="siteground-optimizer-lazy-sizes-js-js"></script>
        <script type="text/javascript" src="../../wp-includes/js/jquery/ui/effect.min.js" id="jquery-effects-core-js"></script>
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
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/tourmaster-script.min.js" id="tourmaster-script-js"></script>
        <script type="text/javascript" id="traveltour-script-core-js-extra">
            /* <![CDATA[ */
            var traveltour_script_core = {
                "home_url": "https:\/\/wildchina.com\/"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/traveltour-script-core.min.js" id="traveltour-script-core-js"></script>
        <script type="text/javascript" src="../../wp-content/uploads/siteground-optimizer-assets/tourmaster-tour-script.min.js" id="tourmaster-tour-script-js"></script>
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
        <script type="text/javascript" src="../../wp-content/uploads/pum/pum-site-scriptsc9df.js?defer" id="popup-maker-site-js"></script>
        <script type="text/javascript" src="../../wp-includes/js/dist/dom-ready.min.js" id="wp-dom-ready-js"></script>
        <script type="text/javascript" src="../../wp-includes/js/dist/a11y.min.js" id="wp-a11y-js"></script>
        <script type="text/javascript" defer='defer' src="../../wp-content/plugins/gravityforms/js/jquery.json.min.js" id="gform_json-js"></script>
        <script type="text/javascript" id="gform_gravityforms-js-extra">
            /* <![CDATA[ */
            var gform_i18n = {
                "datepicker": {
                    "days": {
                        "monday": "Mo",
                        "tuesday": "Tu",
                        "wednesday": "We",
                        "thursday": "Th",
                        "friday": "Fr",
                        "saturday": "Sa",
                        "sunday": "Su"
                    },
                    "months": {
                        "january": "January",
                        "february": "February",
                        "march": "March",
                        "april": "April",
                        "may": "May",
                        "june": "June",
                        "july": "July",
                        "august": "August",
                        "september": "September",
                        "october": "October",
                        "november": "November",
                        "december": "December"
                    },
                    "firstDay": 1,
                    "iconText": "Select date"
                }
            };
            var gf_legacy_multi = [];
            var gform_gravityforms = {
                "strings": {
                    "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
                    "delete_file": "Delete this file",
                    "in_progress": "in progress",
                    "file_exceeds_limit": "File exceeds size limit",
                    "illegal_extension": "This type of file is not allowed.",
                    "max_reached": "Maximum number of files reached",
                    "unknown_error": "There was a problem while saving the file on the server",
                    "currently_uploading": "Please wait for the uploading to complete",
                    "cancel": "Cancel",
                    "cancel_upload": "Cancel this upload",
                    "cancelled": "Cancelled"
                },
                "vars": {
                    "images_url": "https:\/\/wildchina.com\/wp-content\/plugins\/gravityforms\/images"
                }
            };
            var gf_global = {
                "gf_currency_config": {
                    "name": "U.S. Dollar",
                    "symbol_left": "$",
                    "symbol_right": "",
                    "symbol_padding": "",
                    "thousand_separator": ",",
                    "decimal_separator": ".",
                    "decimals": 2,
                    "code": "USD"
                },
                "base_url": "https:\/\/wildchina.com\/wp-content\/plugins\/gravityforms",
                "number_formats": [],
                "spinnerUrl": "https:\/\/wildchina.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
                "version_hash": "ad800d30f9f0307ee378bee0451aa3bd",
                "strings": {
                    "newRowAdded": "New row added.",
                    "rowRemoved": "Row removed",
                    "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/js/gravityforms.min.js')}}" id="gform_gravityforms-js"></script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/js/datepicker-legacy.min.js')}}" id="gform_datepicker_legacy-js"></script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/js/datepicker.min.js')}}" id="gform_datepicker_init-js"></script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js')}}" id="gform_gravityforms_utils-js"></script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js')}}" id="gform_gravityforms_theme_vendors-js"></script>
        <script type="text/javascript" id="gform_gravityforms_theme-js-extra">
            /* <![CDATA[ */
            var gform_theme_config = {
                "common": {
                    "form": {
                        "honeypot": {
                            "version_hash": "ad800d30f9f0307ee378bee0451aa3bd"
                        }
                    }
                },
                "hmr_dev": "",
                "public_path": "https:\/\/wildchina.com\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer='defer' src="{{asset('/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js')}}" id="gform_gravityforms_theme-js"></script>
        <script type="text/javascript" id="mediaelement-core-js-before">
            /* <![CDATA[ */
            var mejsL10n = {
                "language": "en",
                "strings": {
                    "mejs.download-file": "Download File",
                    "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                    "mejs.fullscreen": "Fullscreen",
                    "mejs.play": "Play",
                    "mejs.pause": "Pause",
                    "mejs.time-slider": "Time Slider",
                    "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                    "mejs.live-broadcast": "Live Broadcast",
                    "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                    "mejs.unmute": "Unmute",
                    "mejs.mute": "Mute",
                    "mejs.volume-slider": "Volume Slider",
                    "mejs.video-player": "Video Player",
                    "mejs.audio-player": "Audio Player",
                    "mejs.captions-subtitles": "Captions\/Subtitles",
                    "mejs.captions-chapters": "Chapters",
                    "mejs.none": "None",
                    "mejs.afrikaans": "Afrikaans",
                    "mejs.albanian": "Albanian",
                    "mejs.arabic": "Arabic",
                    "mejs.belarusian": "Belarusian",
                    "mejs.bulgarian": "Bulgarian",
                    "mejs.catalan": "Catalan",
                    "mejs.chinese": "Chinese",
                    "mejs.chinese-simplified": "Chinese (Simplified)",
                    "mejs.chinese-traditional": "Chinese (Traditional)",
                    "mejs.croatian": "Croatian",
                    "mejs.czech": "Czech",
                    "mejs.danish": "Danish",
                    "mejs.dutch": "Dutch",
                    "mejs.english": "English",
                    "mejs.estonian": "Estonian",
                    "mejs.filipino": "Filipino",
                    "mejs.finnish": "Finnish",
                    "mejs.french": "French",
                    "mejs.galician": "Galician",
                    "mejs.german": "German",
                    "mejs.greek": "Greek",
                    "mejs.haitian-creole": "Haitian Creole",
                    "mejs.hebrew": "Hebrew",
                    "mejs.hindi": "Hindi",
                    "mejs.hungarian": "Hungarian",
                    "mejs.icelandic": "Icelandic",
                    "mejs.indonesian": "Indonesian",
                    "mejs.irish": "Irish",
                    "mejs.italian": "Italian",
                    "mejs.japanese": "Japanese",
                    "mejs.korean": "Korean",
                    "mejs.latvian": "Latvian",
                    "mejs.lithuanian": "Lithuanian",
                    "mejs.macedonian": "Macedonian",
                    "mejs.malay": "Malay",
                    "mejs.maltese": "Maltese",
                    "mejs.norwegian": "Norwegian",
                    "mejs.persian": "Persian",
                    "mejs.polish": "Polish",
                    "mejs.portuguese": "Portuguese",
                    "mejs.romanian": "Romanian",
                    "mejs.russian": "Russian",
                    "mejs.serbian": "Serbian",
                    "mejs.slovak": "Slovak",
                    "mejs.slovenian": "Slovenian",
                    "mejs.spanish": "Spanish",
                    "mejs.swahili": "Swahili",
                    "mejs.swedish": "Swedish",
                    "mejs.tagalog": "Tagalog",
                    "mejs.thai": "Thai",
                    "mejs.turkish": "Turkish",
                    "mejs.ukrainian": "Ukrainian",
                    "mejs.vietnamese": "Vietnamese",
                    "mejs.welsh": "Welsh",
                    "mejs.yiddish": "Yiddish"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{asset('/wp-includes/js/mediaelement/mediaelement-and-player.min.js')}}" id="mediaelement-core-js"></script>
        <script type="text/javascript" src="{{asset('/wp-includes/js/mediaelement/mediaelement-migrate.min.js')}}" id="mediaelement-migrate-js"></script>
        <script type="text/javascript" id="mediaelement-js-extra">
            /* <![CDATA[ */
            var _wpmejsSettings = {
                "pluginPath": "\/wp-includes\/js\/mediaelement\/",
                "classPrefix": "mejs-",
                "stretching": "responsive",
                "audioShortcodeLibrary": "mediaelement",
                "videoShortcodeLibrary": "mediaelement"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{asset('/wp-includes/js/mediaelement/wp-mediaelement.min.js')}}" id="wp-mediaelement-js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            gform.initializeOnLoaded(function() {
                jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                    if (formId == 1) {}
                });
                jQuery(document).on('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
            });
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            gform.initializeOnLoaded(function() {
                jQuery(document).trigger("gform_pre_post_render", [{
                    formId: "1",
                    currentPage: "1",
                    abort: function() {
                        this.preventDefault();
                    }
                }]);
                if (event && event.defaultPrevented) {
                    return;
                }
                const gformWrapperDiv = document.getElementById("gform_wrapper_1");
                if (gformWrapperDiv) {
                    const visibilitySpan = document.createElement("span");
                    visibilitySpan.id = "gform_visibility_test_1";
                    gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
                }
                const visibilityTestDiv = document.getElementById("gform_visibility_test_1");
                let postRenderFired = false;

                function triggerPostRender() {
                    if (postRenderFired) {
                        return;
                    }
                    postRenderFired = true;
                    jQuery(document).trigger('gform_post_render', [1, 1]);
                    gform.utils.trigger({
                        event: 'gform/postRender',
                        native: false,
                        data: {
                            formId: 1,
                            currentPage: 1
                        }
                    });
                    if (visibilityTestDiv) {
                        visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
                    }
                }

                function debounce(func, wait, immediate) {
                    var timeout;
                    return function() {
                        var context = this,
                            args = arguments;
                        var later = function() {
                            timeout = null;
                            if (!immediate) func.apply(context, args);
                        };
                        var callNow = immediate && !timeout;
                        clearTimeout(timeout);
                        timeout = setTimeout(later, wait);
                        if (callNow) func.apply(context, args);
                    };
                }
                const debouncedTriggerPostRender = debounce(function() {
                    triggerPostRender();
                }, 200);
                if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
                    const observer = new MutationObserver((mutations) => {
                        mutations.forEach((mutation) => {
                            if (mutation.type === 'attributes' && visibilityTestDiv.offsetParent !== null) {
                                debouncedTriggerPostRender();
                                observer.disconnect();
                            }
                        });
                    });
                    observer.observe(document.body, {
                        attributes: true,
                        childList: false,
                        subtree: true,
                        attributeFilter: ['style', 'class'],
                    });
                } else {
                    triggerPostRender();
                }
            });
            /* ]]> */
        </script>
</body>

</html>