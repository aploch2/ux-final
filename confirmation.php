<?php
    $pageTitle = 'Home - TNT Events Inc.';
 
    include('includes/header.html.php');

        $_SESSION['A2_2'] = $_POST['A2_2'];
        $_SESSION['A3_2'] = $_POST['A3_2'];
        $_SESSION['A4_2'] = $_POST['A4_2'];
        $_SESSION['B2_2'] = $_POST['B2_2'];
        $_SESSION['B3_2'] = $_POST['B3_2'];
        $_SESSION['B4_2'] = $_POST['B4_2'];

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

        
        $a2_1 = $_SESSION['A2_1'];
        $a3_1 = $_SESSION['A3_1'];
        $a4_1 = $_SESSION['A4_1'];
        $b2_1 = $_SESSION['B2_1'];
        $b3_1 = $_SESSION['B3_1'];
        $b4_1 = $_SESSION['B4_1'];
        $a2_2 = $_SESSION['A2_2'];
        $a3_2 = $_SESSION['A3_2'];
        $a4_2 = $_SESSION['A4_2'];
        $b2_2 = $_SESSION['B2_2'];
        $b3_2 = $_SESSION['B3_2'];
        $b4_2 = $_SESSION['B4_2'];
        
        $event1Dates = $a2_1 . ' ' . $a3_1 . ' ' . $a4_1 . ' ' . $b2_1 . ' ' . $b3_1 . ' ' . $b4_1;
        $event2Dates = $a2_2 . ' ' . $a3_2 . ' ' . $a4_2 . ' ' . $b2_2 . ' ' . $b3_2 . ' ' . $b4_2;

        // echo '1' . $vendorOption . '2' . $vendorOption2;
        // echo $a2_1 . '<br>' . $a3_1 . '<br>' . $a4_1 . '<br>' . $b2_1 . '<br>' . $b3_1 . '<br>' . $b4_1 . '<br>' . $a2_2 . '<br>' . $a3_2 . '<br>' . $a4_2 . '<br>' . $b2_2 . '<br>' . $b3_2 . '<br>' . $b4_2;

    
?>
<main>
    <?php 
        // echo $A1;
        // echo $eventDate;
        // var_dump($_SESSION);
    ?>
    <h1>Registration Complete</h1>
    <div class="confirmation-content">
        <div id="confirmation-information">
            <section id="confirm-personal-info">
                <h2>Personal Information</h2>
                <?php 
                    if ($company != null){
                        echo '                <p>Company Name: <span class="purple-text">' . $company . '</span></p>
                        ';
                    }
                ?>
                <p>Address: <span class="purple-text"><?= $address ?></span></p>
                <?php 
                    if ($address2 != null){
                        echo '<p>Address Line 2: <span class="purple-text">' . $address2 . '</span></p>';
                    }
                ?>
                <p>City: <span class="purple-text"><?= $city ?></span></p>
                <p>State: <span class="purple-text"><?= $state ?></span></p>
                <p>Zip: <span class="purple-text"><?= $zip ?></span></p>
                <p>Phone Number: <span class="purple-text"><?= $phone ?></span></p>
                <?php 
                    if($fax != null){
                        echo '<p>Fax: <span class="purple-text">' . $fax . '</span></p>
                        ';
                    }
                ?>
                <p>Emergency Number: <span class="purple-text"><?= $emergencyNumber ?></span></p>
                <p>Email: <span class="purple-text"><?= $email ?></span></p>

            </section>
            <?php 
                if($vendorOption2 != null) {
                    echo '<section id="confirm-sponsor-info">
                            <h2>Sponsor Information</h2>' .
                            ($rep != null ? '<p>Rep Name: <span class="purple-text">'.
                            $rep . '</span></p>' : '') . 
                            ($productDescriptionSpon != null ? '<p>Product Description: <span class="purple-text">' . 
                            $productDescriptionSpon . '</span></p>' : '') .    
                        '</section>';
                }
            ?>
            <?php 
                if($vendorOption != null) {
                    echo '<section id="confirm-exhibitor-info">
                            <h2>Exhibitor Information</h2>' .
                            ($name != null ? '<p>Exhibitor Name: <span class="purple-text">'.
                            $name
                            . '</span></p>' : '') . 
                            ($website != null ? '<p>Website: <span class="purple-text">'. 
                            $website
                            . '</span></p>' : '') .
                            ($requests != null ? '<p>Special Requests: <span class="purple-text">'.
                            $requests
                            . '</span></p>' : '') . 
                            ($prodDesc != null ? '<p>Product Description: <span class="purple-text">'.
                            $prodDesc
                            . '</span></p>' : '') . 
                            ($length != null ? '<p>Length: <span class="purple-text">'.
                            $length
                            . '</span></p>' : '') . 
                            ($width != null ? '<p>Width: <span class="purple-text">'.
                            $width
                            . '</span></p>' : '') . 
                            ($height != null ? '<p>Height: <span class="purple-text">'.
                            $height . '</span></p>' : '') .
                        '</section>';
                }
            ?>
            
            
            <section id="confirm-car-info">
                <h2>Vehicle Information</h2>
                <p>Auto Tag: <span class="purple-text"><?= $autoTag ?></span></p>
                <p>Vehicle State: <span class="purple-text"><?= $vehicleState ?></span></p>
                <p>Vehicle Type: <span class="purple-text"><?= $vehicleType ?></span></p>
                <p>Vehicle Color: <span class="purple-text"><?= $vehicleColor ?></span></p>
            </section>
            <section id="confirm-event-info">
                <h2>Event Information</h2>
                <p>Event Date(s): <span class="purple-text"><?= $eventDate . '</span><br><span class="purple-text">' . $eventDate2 ?: '</span>' ?></span></p>
                <p><?= $eventDate . ' Booth(s)' ?: ''; ?>: <span class="purple-text"><?= $event1Dates ?></span></p>
                <?php 
                    if($eventDate2 != null){
                        echo '<p>' . $eventDate2 . ' Booth(s):' . '<span class="purple-text"> ' . $event2Dates . '</span></p>';
                    }
                ?>
            </section>
        </div>
        <div class="button-container">
            <button class="button purple" id="add-to-calendar">Add to Calendar</button>
            <a href="index.php" class="button purple">Return Home</a>
        </div>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>