<?php
    $pageTitle = 'Booth Selection - TNT Events Inc.';
 
    include('includes/header.html.php');

    // session_start();

    // personal info
    $_SESSION['vendor-choice-1'] = $_POST['vendor-choice-1'];
    $_SESSION['vendor-choice-2'] = $_POST['vendor-choice-2'];
    $_SESSION['company-name'] = $_POST['company-name'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['address-line-2'] = $_POST['address-line-2'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip-code'] = $_POST['zip-code'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['fax'] = $_POST['fax'];
    $_SESSION['emergency'] = $_POST['emergency'];
    $_SESSION['email'] = $_POST['email'];

    // sponsor info
    $_SESSION['rep-name'] = $_POST['rep-name'];
    $_SESSION['product-description-sponsor'] = $_POST['product-description-sponsor'];
    
    // exhibitor info
    $_SESSION['exhibitor-name'] = $_POST['exhibitor-name'];
    $_SESSION['website'] = $_POST['website'];
    $_SESSION['special-requests'] = $_POST['special-requests'];
    $_SESSION['product-description'] = $_POST['product-description'];
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['width'] = $_POST['width'];
    $_SESSION['height'] = $_POST['height'];

    // car info
    $_SESSION['auto-tag'] = $_POST['auto-tag'];
    $_SESSION['auto-state'] = $_POST['auto-state'];
    $_SESSION['vehicle-type'] = $_POST['vehicle-type'];
    $_SESSION['vehicle-color'] = $_POST['vehicle-color'];

    // event info
    $_SESSION['select-event-1'] = $_POST['select-event-1'];
    $_SESSION['select-event-2'] = $_POST['select-event-2'];

    $_SESSION['A1'] = $_POST['A1'];
    
    // personal info
    $vendorOption = $_SESSION['vendor-choice-1'];
    $vendorOption2 = $_SESSION['vendor-choice-2'];
    $company = $_SESSION['company-name'];
    $address = $_SESSION['address'];
    $address2 = $_SESSION['address-line-2'];
    $city = $_SESSION['city'];
    $state = $_SESSION['state'];
    $zip = $_SESSION['zip-code'];
    $phone = $_SESSION['phone'];
    $fax = $_SESSION['fax'];
    $emergencyNumber = $_SESSION['emergency'];
    $email = $_SESSION['email'];

    // sponsor info
    $rep = $_SESSION['rep-name'];
    $productDescriptionSpon = $_SESSION['product-description-sponsor'];
    
    // exhibitor info
    $name = $_SESSION['exhibitor-name'];
    $website = $_SESSION['website'];
    $requests = $_SESSION['special-requests'];
    $prodDesc = $_SESSION['product-description'];
    $length = $_SESSION['length'];
    $width = $_SESSION['width'];
    $height = $_SESSION['height'];

    // car info
    $autoTag = $_SESSION['auto-tag'];
    $vehicleState = $_SESSION['auto-state'];
    $vehicleType = $_SESSION['vehicle-type'];
    $vehicleColor = $_SESSION['vehicle-color'];

    // event info
    $eventDate = $_SESSION['select-event-1'];
    $eventDate2 = $_SESSION['select-event-2'];
    /* how to booth selection:
        - make the booths radio buttons
    */

    // echo $_POST['state'] . 'state';
    /* 
    TODO:
    - if statements to show divs of booths selected if checked
        - have divs hidden with proper svgs of icons and booth number and unhide when booth is selected
    */
?>
<main>
    <?php

        // echo 'Personal Info' . '<br>';
        // echo $vendorOption . '<br>';
        // echo $vendorOption2 . '<br>';
        // echo $company . '<br>';
        // echo $address . '<br>';
        // echo $address2 . '<br>';
        // echo $city . '<br>';
        // echo $state . '<br>';
        // echo $zip . '<br>';
        // echo $phone . '<br>';
        // echo $fax . '<br>';
        // echo $emergencyNumber . '<br>';
        // echo $email . '<br>';

        // echo 'Sponsor Info' . '<br>';
        // echo $rep . '<br>';
        // echo $productDescriptionSpon . '<br>';

        // echo 'Exhibitor Info' . '<br>';
        // echo $name . '<br>';
        // echo $website . '<br>';
        // echo $requests . '<br>';
        // echo $prodDesc . '<br>';
        // echo $length . '<br>';
        // echo $width . '<br>';
        // echo $height . '<br>';

        // echo 'Vehicle Info' . '<br>';
        // echo $autoTag . '<br>';
        // echo $vehicleState . '<br>';
        // echo $vehicleType . '<br>';
        // echo $vehicleColor . '<br>';

        // echo 'Event Info' . '<br>';
        // echo $eventDate . '<br>';
        // echo $eventDate2 . '<br>';
        // echo $_POST['event-date-1'];

        // var_dump($_SESSION);
    
    ?>
    <div class="booth-selection-content">
        <h2 class="pageTitle">Selecting for Event: <br><span class="purple-text"><?= $eventDate ?: 'First Event' ?></span></h2>
        <?php 
            if ($eventDate2 != null) {
                echo '<form class="main-content" action="booth-selection-2.php" method="post" name="booth-selection" id="booth-selection">';
            } else {
                echo '<form class="main-content" action="confirmation.php" method="post" name="booth-selection" id="booth-selection">';
            }
        ?>
            <div class="content-left">
                <h3>Booth Map</h3>
                <div id="key">
                    <div class="key-legends">
                        <div class="legend-icon" id="legend-icon-1"></div>
                        <p>= Available</p>
                    </div>
                    <div class="key-legends">
                        <div class="legend-icon" id="legend-icon-2"></div>
                        <p>= Unavailable</p>
                    </div>
                    <div class="key-legends">
                        <div class="legend-icon" id="legend-icon-3"></div>
                        <p>= Selected Booth</p>
                    </div>
                    <div class="key-legends">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1270.000000 1280.000000"
                        preserveAspectRatio="xMidYMid meet" class="legend-icon" id="legend-icon-4">
                            <metadata>
                            Created by potrace 1.15, written by Peter Selinger 2001-2017
                            </metadata>
                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                            >
                            <path d="M5713 11820 c-40 -17 -68 -57 -429 -602 -840 -1269 -686 -1036 -2314
                            -3498 -460 -696 -842 -1275 -848 -1287 -19 -35 -14 -68 16 -95 16 -15 467
                            -225 1092 -508 586 -266 1077 -491 1092 -502 38 -27 45 -60 20 -102 -11 -19
                            -150 -191 -308 -382 -159 -192 -367 -443 -462 -559 -96 -115 -233 -282 -306
                            -370 -73 -88 -350 -423 -616 -745 -266 -322 -543 -657 -616 -745 -73 -88 -212
                            -257 -310 -375 -775 -938 -724 -873 -724 -909 0 -58 77 -131 139 -131 45 0
                            -264 -173 2656 1483 369 209 1226 695 1905 1080 679 385 1669 946 2200 1247
                            531 301 1352 766 1825 1035 473 268 870 496 883 508 29 27 26 64 -8 89 -14 10
                            -504 236 -1090 501 -586 266 -1084 494 -1108 506 -50 25 -70 60 -56 97 9 23
                            109 146 794 974 166 201 361 437 434 525 73 88 307 372 521 630 214 259 491
                            594 616 745 125 151 417 505 649 785 232 281 428 523 436 538 19 35 10 65 -23
                            78 -15 5 -1168 9 -3021 9 -2931 0 -2998 -1 -3039 -20z"/>
                            </g>
                        </svg>
                        <p>= Power Available</p>
                    </div>
                </div>
                <h4>Entrance</h4>
                <div id="map-body">
                    <div id="map-left">
                        <p id="column-header-left">A</p>
                        <div class="map-icon-container">
                            <label>1
                                <input type="checkbox" class="map-icon-left map-icon" id="map-icon-1" value="A1" name="A1" onclick="boothSelected()" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth_disabled"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="1" y="1" rx="1.23"/><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><line class="cls-2" x1="1" y1="1" x2="73.5" y2="54.5"/><line class="cls-2" x1="73.5" y1="1" x2="1" y2="54.5"/><path class="cls-3" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            </label>
                        </div>
                        <div class="map-icon-container">
                            <label>2
                                <input type="checkbox" class="map-icon-left map-icon" id="map-icon-2" value="A2" name="A2_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                            </label>
                        </div>
                        <div class="map-icon-container">
                            <label>3
                                <input type="checkbox" class="map-icon-left map-icon" id="map-icon-3" value="A3" name="A3_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                            </label>
                        </div>
                        <div class="map-icon-container">
                            <label>4
                                <input type="checkbox" class="map-icon-left map-icon" id="map-icon-4" value="A4" name="A4_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty_power"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><path class="cls-2" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            </label>
                        </div>
                        <div class="map-icon-container">
                            <label>5
                                <input type="checkbox" class="map-icon-left map-icon" id="map-icon-5" value="A5" name="A5_1" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth_disabled"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="1" y="1" rx="1.23"/><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><line class="cls-2" x1="1" y1="1" x2="73.5" y2="54.5"/><line class="cls-2" x1="73.5" y1="1" x2="1" y2="54.5"/><path class="cls-3" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            </label>
                        </div>
                    </div>
                    <div id="map-right">
                        <p id="column-header-right">B</p>
                        <div class="map-icon-container">
                            <label>
                                <input type="checkbox" class="map-icon-right map-icon" id="map-icon-6" value="B1" name="B1" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth_disabled"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="1" y="1" rx="1.23"/><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><line class="cls-2" x1="1" y1="1" x2="73.5" y2="54.5"/><line class="cls-2" x1="73.5" y1="1" x2="1" y2="54.5"/><path class="cls-3" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            1</label>
                        </div>
                        <div class="map-icon-container">
                            <label>
                                <input type="checkbox" class="map-icon-right map-icon" id="map-icon-7" value="B2" name="B2_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                            2</label>
                        </div>
                        <div class="map-icon-container">
                            <label>
                                <input type="checkbox" class="map-icon-right map-icon" id="map-icon-8" value="B3" name="B3_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                            3</label>
                        </div>
                        <div class="map-icon-container">
                            <label>
                                <input type="checkbox" class="map-icon-right map-icon" id="map-icon-9" value="B4" name="B4_1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty_power"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><path class="cls-2" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            4</label>
                        </div>
                        <div class="map-icon-container">
                            <label>
                                <input type="checkbox" class="map-icon-right map-icon" id="map-icon-10" value="B5" name="B5" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth_disabled"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" x="1" y="1" rx="1.23"/><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><line class="cls-2" x1="1" y1="1" x2="73.5" y2="54.5"/><line class="cls-2" x1="73.5" y1="1" x2="1" y2="54.5"/><path class="cls-3" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                            5</label>
                        </div>
                    </div>
                </div>
                <h4 id="map-exit">Exit</h4>
            </div>
            <div class="content-right">
                <h3>Booth(s) Selected:</h3>
                <div id="content-right-body">
                    <div class="booth-container" id="booth-a2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                        <p>A2</p>
                    </div>
                    <div class="booth-container" id="booth-a3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                        <p>A3</p>
                    </div>
                    <div class="booth-container" id="booth-a4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty_power"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><path class="cls-2" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                        <p>A4</p>
                    </div>
                    <div class="booth-container" id="booth-b2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                        <p>B2</p>
                    </div>
                    <div class="booth-container" id="booth-b3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/></g></g></svg>
                        <p>B3</p>
                    </div>
                    <div class="booth-container" id="booth-b4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 55" class="booth booth_empty_power"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M72.77,2a.23.23,0,0,1,.23.23V52.77a.23.23,0,0,1-.23.23H2.23A.23.23,0,0,1,2,52.77V2.23A.23.23,0,0,1,2.23,2H72.77m0-2H2.23A2.23,2.23,0,0,0,0,2.23V52.77A2.23,2.23,0,0,0,2.23,55H72.77A2.23,2.23,0,0,0,75,52.77V2.23A2.23,2.23,0,0,0,72.77,0Z"/><path class="cls-2" d="M35.82,17c-.08,0-.13.11-.82,1.15-1.61,2.42-1.31,2-4.42,6.68C29.7,26.19,29,27.3,29,27.32a.14.14,0,0,0,0,.18s.89.43,2.09,1l2.08,1a.14.14,0,0,1,0,.2l-.59.73-.88,1.06c-.18.22-.45.54-.58.71L30,33.55,28.79,35l-.59.72c-1.48,1.79-1.38,1.67-1.38,1.73a.3.3,0,0,0,.26.25c.09,0-.5.34,5.08-2.83l3.63-2.06L40,30.4l3.49-2,1.68-1a.1.1,0,0,0,0-.17l-2.08-1-2.12-1c-.1,0-.13-.11-.11-.18s.21-.28,1.52-1.86l.83-1,1-1.21,1.18-1.42,1.24-1.5c.44-.53.81-1,.83-1s0-.13,0-.15-2.23,0-5.77,0C36,17,35.9,17,35.82,17Z"/></g></g></svg>
                        <p>B4</p>
                    </div>
                </div>
                <div id="content-right-footer">
                    <!-- <div id="total-container">
                        <p>Total:</p>
                        <p>$ <span id="total-cost"></span></p>
                    </div> -->
                    <?php 
                        if ($eventDate2 != null) {
                            echo '<div class="button-container">
                            <input type="submit" value="Next Booth Selection" class="button green">
                        </div>';
                        } else {
                            echo '<div class="button-container">
                            <input type="submit" value="Finish Registration" class="button green">
                        </div>';
                        }
                    ?>
                    <!-- <div class="button-container">
                        <input type="submit" value="Finish Registration" class="button green">
                    </div> -->
                </div> 
            </div>
        </form>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>